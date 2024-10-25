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
                            <li class="breadcrumb-item active">Strukturlar</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Strukturlar</h4>
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

                                        <form action="{{route('backend.structures.store')}}" method="POST" enctype="multipart/form-data">
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

                                            <div id="dynamic-elements-container">
                                                <div class="frmGrp">
                                                    <div class="mb-3">
                                                        <div class="form-group">
                                                            <label for="title" class="form-label">Title</label>
                                                            <input type="text" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror" name="title[]">
                                                            @error('title')
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <div class="form-group">
                                                            <label for="description" class="form-label">Description</label>
                                                            <textarea class="form-control" name="description[]" placeholder="Enter your name">{{ old('description') }}</textarea>
                                                            @error('description')
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <button type="button" class="btn btn-primary" id="add-btn">Add</button>

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


    <script>
        $(document).ready(function() {
            var counter = 0;

            $('#add-btn').click(function() {
                counter++;

                var html =
                    `
                        <div class="frmGrp">
                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" value="{{ old('title') }}" class="form-control" name="title[]">
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" name="description[]" placeholder="Enter your name">{{ old('description') }}</textarea>
                                </div>
                            </div>

                            <button type="button" class="btn btn-danger remove-btn">Remove</button>
                        </div>
                    `

                $('#dynamic-elements-container').append(html);
            });

            $(document).on('click', '.remove-btn', function(e) {
                e.preventDefault();

                $(this).closest('.frmGrp').remove();
            });
        });
    </script>








@endsection


