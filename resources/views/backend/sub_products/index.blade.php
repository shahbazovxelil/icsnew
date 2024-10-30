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
                            <li class="breadcrumb-item active">Sub Product</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Sub Product</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-end">
                            <a href="{{route('backend.sub-products.create')}}" class="btn btn-success mb-2 text-end"><i class="mdi mdi-plus-circle me-2"></i>Add Sub Product</a>

                        </div>
                        <div class="tab-content">
                            <div class="tab-pane show active" id="basic-datatable-preview">
                                <table id="datatable" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Language</th>
                                        <th>Operations</th>
                                        <th>Translations</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($subProducts as $subProduct)
                                    <tr>
                                        <td>
                                            {{$loop->iteration}}
                                        </td>
                                        <td>
                                            {{$subProduct->name}}

                                        </td>
                                        <td>
                                            {{$subProduct->locale}}
                                        </td>

                                        <td>

                                            <a href="{{ route('backend.sub-products.edit', $subProduct) }}" class="edit btn btn-primary btn-sm ">Translate</a>
                                            <a href="{{ route('backend.sub-products.destroy', $subProduct) }}" class="edit btn btn-danger btn-sm delete ">Del</a>



                                        </td>
                                        <td>
                                            {!! $subProduct->hasTranslation('ru') ? '<a href="'.route('backend.sub-products.translation.edit', [$subProduct, 'lang' => 'ru']).'" class="edit btn btn-secondary btn-sm">Rus</a>' : '' !!}
                                            {!! $subProduct->hasTranslation('en') ? '<a href="'.route('backend.sub-products.translation.edit', [$subProduct, 'lang' => 'en']).'" class="edit btn btn-dark btn-sm">En</a>' : '' !!}
                                            {!! $subProduct->hasTranslation('az') ? '<a href="'.route('backend.sub-products.translation.edit', [$subProduct, 'lang' => 'az']).'" class="edit btn btn-info btn-sm">Az</a>' : '' !!}
                                        </td>



                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('styles')
    <link href="{{ asset('backend/css/vendor/dataTables.bootstrap5.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/css/vendor/responsive.bootstrap5.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/css/vendor/buttons.bootstrap5.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/css/vendor/select.bootstrap5.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/css/vendor/fixedHeader.bootstrap5.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/css/vendor/fixedColumns.bootstrap5.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/sweetalert.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/datatables.bundle.css') }}">
    <link href="{{asset('backend/css/iziToast.min.css')}}" rel="stylesheet" type="text/css">

@endsection
@section('scripts')
    <script src="{{ asset('backend/js/vendor/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/js/vendor/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('backend/js/vendor/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('backend/js/vendor/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('backend/js/vendor/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('backend/js/vendor/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('backend/js/vendor/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('backend/js/vendor/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('backend/js/vendor/buttons.print.min.js') }}"></script>
    <script src="{{ asset('backend/js/vendor/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('backend/js/vendor/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('backend/js/vendor/fixedColumns.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('backend/js/vendor/fixedHeader.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('backend/js/pages/demo.datatable-init.js') }}"></script>

    <!-- Sweet-Alert  -->
    <script src="{{ asset('backend/js/datatables.bundle.js') }}"></script>
    <script src="{{ asset('backend/js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('backend/js/iziToast.min.js') }}"></script>

    @include('backend.datatables.sub-product')


@endsection
