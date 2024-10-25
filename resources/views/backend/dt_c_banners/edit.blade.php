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
                            <li class="breadcrumb-item active">DT Konsultinq</li>
                        </ol>
                    </div>
                    <h4 class="page-title">DT Konsultinq</h4>
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

                                        <form action="{{route('backend.dt_c_banners.update',$dc_banner->id)}}" method="POST" >
                                            @csrf
                                            @method('PUT')
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Title</label>
                                                <input class="form-control" type="text" name="title"   placeholder="Enter your title">
                                                @error('title')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="short_description" class="form-label">Short Description</label>
                                                <textarea class="form-control" name="short_description"  placeholder="Enter a short_description" ></textarea>
                                                @error('short_description')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="long_description" class="form-label">Long Description</label>
                                                <textarea class="form-control" name="long_description"  placeholder="Enter a long_description" ></textarea>
                                                @error('long_description')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="item_one_text" class="form-label">Item one_text</label>
                                                <textarea class="form-control" name="item_one_text"  placeholder="Enter a long_description" ></textarea>
                                                @error('item_one_text')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="item_two_text" class="form-label">Item two_text</label>
                                                <textarea class="form-control" name="item_two_text"  placeholder="Enter a item_two_text" ></textarea>
                                                @error('item_two_text')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="item_three_text" class="form-label">Item three_text</label>
                                                <textarea class="form-control" name="item_three_text" placeholder="Enter a item_three_text" ></textarea>
                                                @error('item_three_text')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="service_title" class="form-label">Service title</label>
                                                <textarea class="form-control" name="service_title" placeholder="Enter a service_title" ></textarea>
                                                @error('service_title')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="service_description" class="form-label">Service description</label>
                                                <textarea class="form-control" name="service_description" placeholder="Enter a service_description" ></textarea>
                                                @error('service_description')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <center><b style="font-size:30px">Middle content</b></center>
                                            </div>
                                            <div class="mb-3">
                                                <label for="middle_title" class="form-label">Middle title</label>
                                                <textarea class="form-control" name="middle_title" placeholder="Enter a middle_title" ></textarea>
                                                @error('middle_title')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="middle_description" class="form-label">Middle description</label>
                                                <textarea class="form-control" name="middle_description" placeholder="Enter a middle_description" ></textarea>
                                                @error('middle_description')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="middle_text_one" class="form-label">Middle one_text</label>
                                                <textarea class="form-control" name="middle_text_one" placeholder="Enter a middle_text_one" ></textarea>
                                                @error('middle_text_one')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="middle_text_two" class="form-label">Middle two_text</label>
                                                <textarea class="form-control" name="middle_text_two" placeholder="Enter a middle_text_two" ></textarea>
                                                @error('middle_text_two')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="middle_text_three" class="form-label">Middle three_text</label>
                                                <textarea class="form-control" name="middle_text_three" placeholder="Enter a middle_text_three" ></textarea>
                                                @error('middle_text_three')
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
@endsection
