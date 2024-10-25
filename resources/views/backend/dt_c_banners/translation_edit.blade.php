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

                                        <form action="{{route('backend.dt_c_banners.translation.update',['dt_c_banner_id'=>$translation->db_c_banner_id,'lang'=>$translation->locale])}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="mb-3">
                                                <label for="image" class="form-label">Image</label>
                                                <input type="file" value="{{old('image',$db_consulting_banner)}}" class="custom-file-input @error('image') is-invalid @enderror" name="image" >
                                                @error('image')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <img src="{{asset($db_consulting_banner->image)}}"  width="100px" height="100px">
                                            </div>
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Title</label>
                                                <input class="form-control" type="text" name="title" value="{{old('title',$translation)}}"   >
                                                @error('title')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="short_description" class="form-label">Short Description</label>
                                                <textarea class="form-control" name="short_description" placeholder="Enter a short_description" >{{old('short_description',$translation)}}</textarea>
                                                @error('short_description')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="long_description" class="form-label">Long Description</label>
                                                <textarea class="form-control" name="long_description" placeholder="Enter a long_description" >{{old('long_description',$translation)}}</textarea>
                                                @error('long_description')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="item_one_count" class="form-label">Item_one_count</label>
                                                <input class="form-control" type="text" name="item_one_count" value="{{old('item_one_count',$db_consulting_banner)}}"  >
                                                @error('item_one_count')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="item_one_text" class="form-label">Item_one_text</label>
                                                <input class="form-control" type="text" name="item_one_text" value="{{old('item_one_text',$translation)}}"  >
                                                @error('item_one_text')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="item_two_count" class="form-label">Item_two_count</label>
                                                <input class="form-control" type="text" name="item_two_count" value="{{old('item_two_count',$db_consulting_banner)}}"  >
                                                @error('item_two_count')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="item_two_text" class="form-label">Item_two_text</label>
                                                <input class="form-control" type="text" name="item_two_text" value="{{old('item_two_text',$translation)}}" >
                                                @error('item_two_text')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="item_three_count" class="form-label">Item_three_count</label>
                                                <input class="form-control" type="text" name="item_three_count" value="{{old('item_three_count',$db_consulting_banner)}}" >
                                                @error('item_three_count')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="item_three_text" class="form-label">Item_three_text</label>
                                                <input class="form-control" type="text" name="item_three_text" value="{{old('item_three_text',$translation)}}"  >
                                                @error('item_three_text')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>


                                            <div class="mb-3">
                                                <label for="service_image" class="form-label">Service_image</label>
                                                <input type="file" value="{{old('service_image',$db_consulting_banner)}}" class="custom-file-input @error('service_image') is-invalid @enderror" name="service_image" >
                                                @error('service_image')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <img src="{{asset($db_consulting_banner->service_image)}}"  width="100px" height="100px">
                                            </div>
                                            <div class="mb-3">
                                                <label for="service_title" class="form-label">Service_title</label>
                                                <input class="form-control" type="text" name="service_title" value="{{old('service_title',$translation)}}"  >
                                                @error('service_title')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="service_description" class="form-label">Service_description</label>
                                                <textarea class="form-control" name="service_description" placeholder="Enter a short_description" >{{old('service_description',$translation)}}</textarea>
                                                @error('service_description')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <center><b style="font-size:30px">Middle content</b></center>
                                            </div>

                                            <div class="mb-3">
                                                <label for="middle_title" class="form-label">Middle_title</label>
                                                <input class="form-control" type="text" name="middle_title" value="{{old('middle_title',$translation)}}"  >
                                                @error('middle_title')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="middle_description" class="form-label">Middle_description</label>
                                                <textarea class="form-control" name="middle_description" >{{old('service_description',$translation)}}</textarea>
                                                @error('middle_description')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>


                                            <div class="mb-3">
                                                <label for="middle_count_one" class="form-label">middle_count_one</label>
                                                <input class="form-control" type="text" name="middle_count_one" value="{{old('middle_count_one',$db_consulting_banner)}}"  >
                                                @error('middle_count_one')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="middle_text_one" class="form-label">middle_text_one</label>
                                                <input class="form-control" type="text" name="middle_text_one" value="{{old('middle_text_one',$translation)}}" >
                                                @error('middle_text_one')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="middle_count_two" class="form-label">middle_count_two</label>
                                                <input class="form-control" type="text" name="middle_count_two" value="{{old('middle_count_two',$db_consulting_banner)}}"  >
                                                @error('middle_count_two')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="middle_text_two" class="form-label">middle_text_two</label>
                                                <input class="form-control" type="text" name="middle_text_two" value="{{old('middle_text_two',$translation)}}" >
                                                @error('middle_text_two')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="middle_count_three" class="form-label">middle_count_three</label>
                                                <input class="form-control" type="text" name="middle_count_three" value="{{old('middle_count_three',$db_consulting_banner)}}"  >
                                                @error('middle_count_three')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="middle_text_three" class="form-label">middle_text_three</label>
                                                <input class="form-control" type="text" name="middle_text_three" value="{{old('middle_text_three',$translation)}}" >
                                                @error('middle_text_three')
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


