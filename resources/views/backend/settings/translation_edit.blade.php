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
                            <li class="breadcrumb-item active">Ayarlar</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Ayarlar</h4>
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

                                        <form action="{{route('backend.settings.translation.update',['setting_id'=>$translation->setting_id,'lang'=>$translation->locale])}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="mb-3">
                                                <label for="logo" class="form-label">Logo</label>
                                                <input type="file" value="{{old('logo',$setting)}}" class="custom-file-input @error('logo') is-invalid @enderror" name="logo" >
                                                @error('logo')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input class="form-control" type="email" name="email" value="{{old('email',$setting)}}"   placeholder="Enter your email">
                                                @error('email')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="phone" class="form-label">Phone</label>
                                                <input class="form-control" type="tel" name="phone" value="{{old('phone',$setting)}}"   placeholder="+9947775566">
                                                @error('phone')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="phone_other" class="form-label">Phone other</label>
                                                <input class="form-control" type="tel" name="phone_other" value="{{old('phone_other',$setting)}}"   placeholder="+9947775566">
                                                @error('phone_other')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="iframe" class="form-label">Map Iframe</label>
                                                <input class="form-control" type="text" name="iframe"  value="{{old('iframe',$setting)}}"  placeholder="demo_iframe.htm">
                                                @error('iframe')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="facebook_link" class="form-label">Facebook Link</label>
                                                <input class="form-control" type="text" name="facebook_link"  value="{{old('facebook_link',$setting)}}"  placeholder="demo_iframe.htm">
                                                @error('facebook_link')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="instagram_link" class="form-label">Instagram Link</label>
                                                <input class="form-control" type="text" name="instagram_link"  value="{{old('instagram_link',$setting)}}"  placeholder="demo_iframe.htm">
                                                @error('instagram_link')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="youtube_link" class="form-label">Youtube Link</label>
                                                <input class="form-control" type="text" name="youtube_link"  value="{{old('youtube_link',$setting)}}"  placeholder="demo_iframe.htm">
                                                @error('youtube_link')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="linkedin_link" class="form-label">Linkedin Link</label>
                                                <input class="form-control" type="text" name="linkedin_link"  value="{{old('linkedin_link',$setting)}}"  placeholder="demo_iframe.htm">
                                                @error('linkedin_link')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="telegram_link" class="form-label">Telegram Link</label>
                                                <input class="form-control" type="text" name="telegram_link"  value="{{old('telegram_link',$setting)}}"  placeholder="demo_iframe.htm">
                                                @error('telegram_link')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="address" class="form-label">Address</label>
                                                <input class="form-control" type="text" name="address"  value="{{old('address',$translation)}}"  placeholder="Enter your phone address">
                                                @error('address')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="description" class="form-label">Description</label>
                                                <textarea class="form-control" name="description" placeholder="Enter a description" maxlength="255" >{{old('description',$translation)}}</textarea>
                                                @error('description')
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


