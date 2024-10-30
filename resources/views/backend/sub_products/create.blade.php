


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
                            <li class="breadcrumb-item active">Sub product</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Sub product</h4>
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

                                        <form action="{{route('backend.sub-products.store')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="product_id" class="form-label">Alt ürümlər</label>
                                                <select name="product_id" class="form-select">
                                                    @foreach($products as $product)
                                                        <option value="{{$product->id}}">{{$product->title}}</option>
                                                    @endforeach
                                                </select>
                                                @error('product_id')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div id="dynamic-elements-container">
                                                <div class="frmGrp">
                                                    <div class="mb-3">


                                                        <div class="form-group">
                                                            <label for="name" class="form-label">Name</label>
                                                            <input type="text" value="{{ old('name.0') }}" class="form-control @error('name.*') is-invalid @enderror" name="name[]">
                                                            @error('name.*')
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="msds_text" class="form-label">Msds text</label>
                                                            <input type="text" value="{{ old('msds_text.0') }}" class="form-control @error('msds_text.*') is-invalid @enderror" name="msds_text[]">
                                                            @error('msds_text.*')
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="msds_image" class="form-label">Msds image</label>
                                                            <input type="file" class="form-control @error('msds_image.*') is-invalid @enderror" name="msds_image[]">
                                                            @error('msds_image.*')
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="tds_text" class="form-label">Tds text</label>
                                                            <input type="text" value="{{ old('tds_text.0') }}" class="form-control @error('tds_text.*') is-invalid @enderror" name="tds_text[]">
                                                            @error('tds_text.*')
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="tds_image" class="form-label">Tds image</label>
                                                            <input type="file" class="form-control @error('tds_image.*') is-invalid @enderror" name="tds_image[]">
                                                            @error('tds_image.*')
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


{{--    <script>--}}
{{--        $(document).ready(function() {--}}
{{--            var counter = 0;--}}

{{--            $('#add-btn').click(function() {--}}
{{--                counter++;--}}

{{--                var html =--}}
{{--                    `--}}
{{--                        <div class="frmGrp">--}}
{{--                            <div class="mb-3">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="title" class="form-label">Title</label>--}}
{{--                                    <input type="text" value="{{ old('name') }}" class="form-control" name="name[]">--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="msds_text" class="form-label">msds_text</label>--}}
{{--                                    <input type="text" value="{{ old('msds_text') }}" class="form-control" name="msds_text[]">--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="msds_image" class="form-label">msds_image</label>--}}
{{--                                    <input type="text" value="{{ old('msds_image') }}" class="form-control" name="msds_image[]">--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="tds_text" class="form-label">tds_text</label>--}}
{{--                                    <input type="text" value="{{ old('tds_text') }}" class="form-control" name="tds_text[]">--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="tds_image" class="form-label">tds_image</label>--}}
{{--                                    <input type="text" value="{{ old('tds_image') }}" class="form-control" name="tds_image[]">--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <button type="button" class="btn btn-danger remove-btn">Remove</button>--}}
{{--                        </div>--}}
{{--                    `--}}

{{--                $('#dynamic-elements-container').append(html);--}}
{{--            });--}}

{{--            $(document).on('click', '.remove-btn', function(e) {--}}
{{--                e.preventDefault();--}}

{{--                $(this).closest('.frmGrp').remove();--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}




    <script>
        $(document).ready(function() {
            var counter = 0;

            function createFormGroup() {
                return `
                <div class="frmGrp">
                    <div class="mb-3">
                        ${createInputField('text','Name', 'name[]')}
                        ${createInputField('text','Msds_text', 'msds_text[]')}
                        ${createInputField('file','Msds_image', 'msds_image[]')}
                        ${createInputField('text','Tds_text', 'tds_text[]')}
                        ${createInputField('file','Tds_image', 'tds_image[]')}
                    </div>
                    <button type="button" class="btn btn-danger remove-btn">Remove</button>
                </div>
            `;
            }

            function createInputField(type,label, name) {
                return `
                <div class="form-group">
                    <label class="form-label">${label}</label>
                    <input type="${type}" value="{{ old('${name}')}}" class="form-control" name="${name}">
                </div>
            `;
            }

            $('#add-btn').click(function() {
                counter++;
                $('#dynamic-elements-container').append(createFormGroup());
            });

            $(document).on('click', '.remove-btn', function(e) {
                e.preventDefault();
                $(this).closest('.frmGrp').remove();
            });
        });
    </script>




@endsection



