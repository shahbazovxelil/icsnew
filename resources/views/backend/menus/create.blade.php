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
                            <li class="breadcrumb-item active">Form Elements</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Form Elements</h4>
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

                                        <form action="{{route('backend.menus.store')}}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="parent_id" class="form-label">Menus</label>
                                                <select name="parent_id" class="form-select">
                                                    <option selected>No parent</option>
                                                    @foreach($menus as $menu)
                                                        <option  value="{{$menu->id}}">{{$menu->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('parent_id')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
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


