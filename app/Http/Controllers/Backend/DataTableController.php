<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use App\Models\MenuTranslation;
use App\Models\User;
use Illuminate\Http\Request;

class DataTableController extends Controller
{

    public function fetchMenus()
    {
        $query = Menu::whereHas('translations', function ($query) {
            $query->where('locale', '=', app()->getLocale());
        })
            ->with('translations')
            ->paginate(10);

        $data = [];
        foreach ($query as $key => $row) {
            $data[] = [
                'iteration' => $key + 1,
                'id' => $row->id,
                'name' => $row->name,
                'locale' => $row->locale,
                'slug' => $row->slug,
                'actions' => '<a href="' . route('backend.menus.edit', $row) . '" class="edit btn btn-primary btn-sm">Tərcümə et</a>'
                    . '<a href="' . route('backend.menus.destroy', $row) . '" class="edit btn btn-danger btn-sm delete" id="' . $row->id . '">Sil</a>',
                'languages' => ($row->hasTranslation('ru') ? '<a href="' . route('backend.menus.translation.edit', [$row, 'lang' => 'ru']) . '" class="edit btn btn-secondary btn-sm">Rus</a>' : '')
                    . ($row->hasTranslation('en') ? '<a href="' . route('backend.menus.translation.edit', [$row, 'lang' => 'en']) . '" class="edit btn btn-dark btn-sm">En</a>' : '')
                    . ($row->hasTranslation('az') ? '<a href="' . route('backend.menus.translation.edit', [$row, 'lang' => 'az']) . '" class="edit btn btn-info btn-sm">Az</a>' : ''),
                'status' => '<a href="' . route('backend.menus.status.update', $row) . '" class="status-btn btn btn-' . ($row->status ? 'success' : 'danger') . ' btn-sm rounded-pill" data-status="' . ($row->status ? 'active' : 'deactive') . '" data-id="' . $row->id . '">' . ucfirst($row->status ? 'active' : 'deactive') . '</a>'
            ];
        }

        return datatables()
            ->of($data)
            ->addColumn('iteration', function ($row) {
                return $row['iteration'];
            })
            ->addColumn('actions', function ($row) {
                return $row['actions'];
            })
            ->addColumn('languages', function ($row) {
                return $row['languages'];
            })
            ->addColumn('status', function ($row) {
                return $row['status'];
            })
            ->rawColumns(['iteration', 'languages', 'actions', 'status'])
            ->make(true);
    }

    public function fetchCategories()
    {
        $query = Category::whereHas('translations', function ($query) {
            $query->where('locale', '=', app()->getLocale());
        })
            ->with('translations')
            ->paginate(10);

        $data = [];
        foreach ($query as $key => $row) {
            $data[] = [
                'iteration' => $key + 1,
                'id' => $row->id,
                'name' => $row->name,
                'locale' => $row->locale,
                'slug' => $row->slug,
                'actions' => '<a href="' . route('backend.categories.edit', $row) . '" class="edit btn btn-primary btn-sm">Tərcümə et</a>'
                    . '<a href="' . route('backend.categories.destroy', $row) . '" class="edit btn btn-danger btn-sm delete" id="' . $row->id . '">Sil</a>',
                'languages' => ($row->hasTranslation('ru') ? '<a href="' . route('backend.categories.translation.edit', [$row, 'lang' => 'ru']) . '" class="edit btn btn-secondary btn-sm">Rus</a>' : '')
                    . ($row->hasTranslation('en') ? '<a href="' . route('backend.categories.translation.edit', [$row, 'lang' => 'en']) . '" class="edit btn btn-dark btn-sm">En</a>' : '')
                    . ($row->hasTranslation('az') ? '<a href="' . route('backend.categories.translation.edit', [$row, 'lang' => 'az']) . '" class="edit btn btn-info btn-sm">Az</a>' : ''),
                'status' => '<a href="' . route('backend.categories.status.update', $row) . '" class="status-btn btn btn-' . ($row->status ? 'success' : 'danger') . ' btn-sm rounded-pill" data-status="' . ($row->status ? 'active' : 'deactive') . '" data-id="' . $row->id . '">' . ucfirst($row->status ? 'active' : 'deactive') . '</a>'
            ];
        }

        return datatables()
            ->of($data)
            ->addColumn('iteration', function ($row) {
                return $row['iteration'];
            })
            ->addColumn('actions', function ($row) {
                return $row['actions'];
            })
            ->addColumn('languages', function ($row) {
                return $row['languages'];
            })
            ->addColumn('status', function ($row) {
                return $row['status'];
            })
            ->rawColumns(['iteration', 'languages', 'actions', 'status'])
            ->make(true);
    }


}
