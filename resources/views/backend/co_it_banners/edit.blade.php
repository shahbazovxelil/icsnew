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

                                        <form action="{{route('backend.co_it_banners.update',$banner->id)}}" method="POST" >
                                            @csrf
                                            @method('PUT')
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Title</label>
                                                <input class="form-control" type="text" name="title"   >
                                                @error('title')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-group">
                                                    <label for="long_description" class="form-label"> Long Description</label>
                                                    <textarea class="ckeditor form-control" name="long_description" >{{ old('long_description') }}</textarea>
                                                    @error('long_description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="item_one" class="form-label">item_one</label>
                                                <input class="form-control" type="text" name="item_one">
                                                @error('item_one')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="item_two" class="form-label">item_two</label>
                                                <input class="form-control" type="text" name="item_two">
                                                @error('item_two')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="title" class="form-label">item_three</label>
                                                <input class="form-control" type="text" name="item_three">
                                                @error('title')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="item_four" class="form-label">item_four</label>
                                                <input class="form-control" type="text" name="item_four">
                                                @error('item_four')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="example-email" class="form-label">Language</label>
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
    <script src="/ckeditor/ckeditor.js"></script>
@endsection
