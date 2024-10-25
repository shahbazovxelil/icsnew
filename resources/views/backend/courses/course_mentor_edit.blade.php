@extends('layouts.backend')
@section('title', 'Admins')
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                            <li class="breadcrumb-item active">Kurs mentoru</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Kurs mentoru</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="tab-content">
                            <div class="tab-pane show active" id="input-types-preview">
                                <div class="row">
                                    <div class="col-lg-8 offset-lg-2">
                                        <form action="{{route('backend.course_mentor.store')}}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="course_id" class="form-label">Courses</label>
                                                <select name="course_id" class="form-select">
                                                    @foreach($courses as $course)
                                                        <option  value="{{$course->id}}">{{$course->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('parent_id')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="mentor_id" class="form-label">Mentors</label>
                                                <select name="mentor_id" class="form-select">
                                                    @foreach($mentors as $mentor)
                                                        <option  value="{{$mentor->id}}">{{$mentor->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('parent_id')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3 mb-0 text-center">
                                                <button  class="btn btn-primary" > Create </button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                                <!-- end row-->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('styles')
    <link href="{{asset('backend/css/iziToast.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend/css/vendor/select2.min.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('scripts')
    <script src="{{ asset('backend/js/iziToast.min.js') }}"></script>
    <script src="{{ asset('backend/js/vendor/select2.min.js') }}"></script>

@endsection


