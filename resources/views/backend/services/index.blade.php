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
                            <li class="breadcrumb-item active">Xidmətlər</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Xidmətlər</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-end">
                            <a href="{{route('backend.services.create')}}" class="btn btn-success mb-2 text-end"><i class="mdi mdi-plus-circle me-2"></i>Add Service</a>

                        </div>
                        <div class="tab-content">
                            <div class="tab-pane show active" id="basic-datatable-preview">
                                <table id="datatable" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Language</th>
                                        <th>Operations</th>
                                        <th>Translations</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($services as $service)
                                    <tr>
                                        <td>
                                            {{$loop->iteration}}
                                        </td>
                                        <td>
                                            <img src="{{asset($service->image)}}"  width="100px" height="100px">
                                        </td>
                                        <td>
                                            {{$service->title}}

                                        </td>
                                        <td>
                                            {{$service->description}}
                                        </td>
                                        <td>
                                            {{$service->locale}}
                                        </td>

                                        <td>

                                            <a href="{{  route('backend.services.edit', $service) }}" class="edit btn btn-primary btn-sm ">Translate</a>
                                            <a href="{{ route('backend.services.destroy', $service) }}" class="edit btn btn-danger btn-sm delete ">Del</a>

                                        </td>
                                        <td>
                                            {!! $service->hasTranslation('ru') ? '<a href="'.route('backend.services.translation.edit', [$service, 'lang' => 'ru']).'" class="edit btn btn-secondary btn-sm">Rus</a>' : '' !!}
                                            {!! $service->hasTranslation('en') ? '<a href="'.route('backend.services.translation.edit', [$service, 'lang' => 'en']).'" class="edit btn btn-dark btn-sm">En</a>' : '' !!}
                                            {!! $service->hasTranslation('az') ? '<a href="'.route('backend.services.translation.edit', [$service, 'lang' => 'az']).'" class="edit btn btn-info btn-sm">Az</a>' : '' !!}
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

    @include('backend.datatables.service')
@endsection
