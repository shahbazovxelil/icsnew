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
                            <li class="breadcrumb-item active">Kusrs  item banner</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Kusrs  item banner</h4>
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

                                        <form action="{{route('backend.co_it_banners.store')}}" method="POST" enctype="multipart/form-data">
                                            @csrf

                                            <div class="mb-3">
                                                <label for="course_id" class="form-label">Course</label>
                                                <select name="course_id" class="form-select">
                                                    @foreach($courses as $course)
                                                        <option value="{{$course->id}}">{{$course->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('course_id')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="image" class="form-label">Image</label>
                                                <input type="file" value="{{old('image')}}" class="custom-file-input @error('image') is-invalid @enderror" name="image" >
                                                @error('image')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Title</label>
                                                <input class="form-control" type="text" name="title" value="{{old('title')}}"   placeholder="Enter your title">
                                                @error('title')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-group">
                                                    <label for="long_description" class="form-label"> Long Description</label>
                                                    <textarea class="ckeditor form-control" name="long_description" placeholder="Enter your name">{{ old('long_description') }}</textarea>
                                                    @error('long_description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="item_one" class="form-label">item_one</label>
                                                <input class="form-control" type="text" name="item_one" value="{{old('item_one')}}"  >
                                                @error('item_one')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="item_two" class="form-label">item_two</label>
                                                <input class="form-control" type="text" name="item_two" value="{{old('item_two')}}" >
                                                @error('item_two')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="item_three" class="form-label">item_three</label>
                                                <input class="form-control" type="text" name="item_three" value="{{old('item_three')}}">
                                                @error('item_three')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="item_four" class="form-label">item_four</label>
                                                <input class="form-control" type="text" name="item_four" value="{{old('item_four')}}" >
                                                @error('item_four')
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
                            </div> <!-- end preview-->

                        </div> <!-- end tab-content-->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div>
@endsection
@section('styles')
    <link href="{{asset('backend/css/iziToast.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend/css/vendor/select2.min.css')}}" rel="stylesheet" type="text/css">

@endsection
@section('scripts')
    <script src="{{ asset('backend/js/iziToast.min.js') }}"></script>
    <script src="{{ asset('backend/js/vendor/select2.min.js') }}"></script>
    <script src="/ckeditor/ckeditor.js"></script>

@endsection


