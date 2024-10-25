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
                            <li class="breadcrumb-item active">Kateqoriyalar</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Kateqoriyalar</h4>
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

                                        <form action="{{route('backend.categories.update',$category->id)}}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Name</label>
                                                <input class="form-control" type="text" name="name"   placeholder="Enter your name">
                                                @error('name')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="slug" class="form-label">Slug</label>
                                                <input class="form-control" type="text" name="slug"   placeholder="Enter your slug">
                                                @error('slug')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
{{--                                            <div class="mb-3">--}}
{{--                                                <label for="example-email" class="form-label">Status</label>--}}
{{--                                                <select name="status"  class="form-control" >--}}
{{--                                                    <option value="1" >Aktiv</option>--}}
{{--                                                    <option value="0" >Passiv</option>--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
                                            <div class="mb-3">
                                                <label for="example-email" class="form-label">Dil</label>
                                                <select name="language"  class="form-control" >
                                                    @foreach($languages as $language)
                                                    <option value="{{$language}}">{{$language}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3 mb-0 text-center">
                                                <button  class="btn btn-primary" > Translate </button>
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
@endsection
@section('scripts')
    <script src="{{ asset('backend/js/iziToast.min.js') }}"></script>
@endsection
