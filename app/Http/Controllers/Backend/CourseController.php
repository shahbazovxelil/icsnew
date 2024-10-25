<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\UploadHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CourseLanguageUpdateRequest;
use App\Http\Requests\Backend\CourseStoreRequest;
use App\Http\Requests\Backend\CourseUpdateRequest;
use App\Models\Category;
use App\Models\Course;
use App\Models\CourseTranslation;
use App\Traits\Custom;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\View\View;

class CourseController extends Controller
{
    use Custom;

    public function index()
    {

        $courses= Course::whereHas('translations', function ($courses) {
            $courses->where('locale', '=', app()->getLocale());
        })
            ->with('translations')
            ->get();
        return view('backend.courses.index', compact('courses'));

    }

    public function create()
    {
        $categories = Category::whereHas('translations', function ($categories) {
            $categories->where('locale', '=', app()->getLocale());
        })
            ->with(['translations'])
            ->get();
        return view('backend.courses.create',compact('categories'));

    }

    final public function store(CourseStoreRequest $request): RedirectResponse
    {

        $data = $request->validated();
        $course = new Course();

        $image = UploadHelper::upload('image', $request->file('image'), 'uploads/courses/' . time(), 'uploads/courses/');


        $course = $course->create([
            'image' => $image,
            'category_id' => $data['category_id'],
            'price' => $data['price'],
            'duration' => $data['duration'],
            'slug' => Str::slug($data['name']),
            'student_count' => $data['student_count'],
            'start_date' => $data['start_date'],
        ]);


        $course->translations()->create([
            'name' => $data['name'],
            'course_id' => $course->id,
            'locale' => app()->getLocale(),
        ]);


        return redirect()->route('backend.courses.index')->withSuccess('added');
    }

    final public function edit(string $id): View
    {
        $course = Course::find($id);
        $translation_languages = CourseTranslation::where('course_id', $id)->get();
        $languages = $this->trans_langs($translation_languages);
        return view('backend.courses.edit', compact('course', 'languages'));
    }

    final public function update(CourseUpdateRequest $request, string $id): RedirectResponse
    {
        $data = $request->validated();
        $course = Course::where('id', '=', $id)->first();
        DB::transaction(function () use ($course,$id,$data) {
            $course->save();
            $course_translation = new CourseTranslation();
            $course_translation->create([
                'course_id'=>$id,
                'name'=>$data['name'],
                'locale'=>$data['language'],
            ]);
        });
        return redirect()->route('backend.courses.index')->withSuccess('yeniləmə etdiniz');
    }
    final public function translationEdit(string $id, string $lang): View
    {
        $course = Course::findOrFail($id);
        $translation = $course->translations()->where('locale', $lang)->first();
        if ($translation) {
            return view('backend.courses.translation_edit', compact('translation', 'course'));
        } else {
            return view('backend.courses.index')->withSuccess('tərcüməsi yoxdur');
        }
    }

    final public function translationUpdate(int $course_id, string $lang, CourseLanguageUpdateRequest $request): RedirectResponse
    {

        $data = $request->validated();

        $courseTranslation = CourseTranslation::where('course_id', $course_id)
            ->where('locale', $lang)
            ->firstOrFail();
        $course = Course::where('id', $course_id)->first();

        DB::transaction(function () use ($request,$course,$courseTranslation,$data) {

            $image = $course->image;

            if (isset($data['image'])) {
                $image = UploadHelper::update(public_path('/' . $course->image), $request->file('image'), 'uploads/courses/');

            }

          $course->update([
                'image' => $image,
                'price' => $data['price'],
                'duration' => $data['duration'],
                'slug' => $data['slug'],
                'student_count' => $data['student_count'],
                'start_date' => $data['start_date'],
            ]);

            $courseTranslation->update([
                'name' => $data['name'],
            ]);

        });

        return redirect()->route('backend.courses.index')->withSuccess('update');

    }


    final  public function destroy(string $id): JsonResponse
    {
        DB::transaction(function () use ($id) {
            Course::destroy($id);
        });
        return response()->json(['success'=>'1'],200);
    }
}
