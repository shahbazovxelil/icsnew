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
                            <li class="breadcrumb-item active">Kurslar</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Kurslar</h4>
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

                                        <form action="{{route('backend.courses.translation.update',['course_id'=>$translation->course_id,'lang'=>$translation->locale])}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="mb-3">
                                                <label for="image" class="form-label">Image</label>
                                                <input type="file" value="{{old('image',$course)}}" class="custom-file-input @error('logo') is-invalid @enderror" name="image" >
                                                @error('image')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Name</label>
                                                <textarea class="form-control" name="name" placeholder="Enter a name" maxlength="255" >{{old('name',$translation)}}</textarea>
                                                @error('name')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="price" class="form-label">Price</label>
                                                <input class="form-control" type="text" name="price" value="{{old('price',$course)}}"   >
                                                @error('price')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="duration" class="form-label">Duration</label>
                                                <input class="form-control" type="text" name="duration" value="{{old('duration',$course)}}" >
                                                @error('duration')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="slug" class="form-label">Slug</label>
                                                <input class="form-control" type="text" name="slug" value="{{old('slug',$course)}}" >
                                                @error('slug')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="student_count" class="form-label">Student count</label>
                                                <input class="form-control" type="text" name="student_count" value="{{old('student_count',$course)}}">
                                                @error('student_count')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="start_date" class="form-label">Start date</label>
                                                <input class="form-control" type="text" name="start_date" value="{{old('start_date',$course)}}" >
                                                @error('start_date')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>



                                            <div class="mb-3 mb-0 text-center">
                                                <button  class="btn btn-primary" >Update</button>
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

@endsection


