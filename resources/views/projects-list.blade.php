@extends('layouts.master')
@section('title')Projects List @endsection
@section('content')
{{-- breadcrumbs  --}}
    @section('breadcrumb')
        @component('components.breadcrumb')
            @slot('li_1') Projects @endslot
            @slot('title') Projects List @endslot
        @endcomponent
    @endsection
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="mb-3">
                            <a href="projects-create" class="btn btn-light">
                                <i class="uil uil-plus me-1"></i> Add New
                            </a>

                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-md-9">
                        <div class="d-flex flex-wrap align-items-start justify-content-md-end gap-2 mb-3">
                            <div class="search-box ">
                                <div class="position-relative">
                                    <input type="text" class="form-control bg-light border-light rounded" placeholder="Search...">
                                    <i class="uil uil-search search-icon"></i>
                                </div>
                            </div>

                            <div>
                                <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="projects-list" data-bs-toggle="tooltip" data-bs-placement="top" title="List"><i class="uil uil-list-ul"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="projects-grid" data-bs-toggle="tooltip" data-bs-placement="top" title="Grid"><i class="uil uil-apps"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <a class="btn btn-link text-dark dropdown-toggle shadow-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="uil uil-ellipsis-h"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="mt-2">
                    <ul class="nav nav-tabs nav-tabs-custom mb-4" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#list-all" role="tab">All</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#list-active">Active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#list-complete">Completed</a>
                        </li>
                    </ul><!-- end ul -->
                </div>

                <!-- Tab content -->
                <div class="tab-content">
                    <div class="tab-pane active" id="list-all" role="tabpanel">
                        <div>
                            <div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="avatar">
                                                <img src="{{URL::asset('assets/images/companies/img-1.png')}}" alt="" class="avatar">
                                            </div>
                                            <div class="flex-grow-1 me-2 flex-wrap ms-3">
                                                <h5 class="font-size-15 mb-1"><a href="projects-overview" class="text-dark">Brand Logo Design</a></h5>
                                                <p class="text-muted mb-0">Sed ut perspiciatis unde iste</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="d-flex gap-2">
                                                    <div>
                                                        <a href="#" class="btn btn-light btn-sm"><i class="uil uil-pen"></i></a>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a class="btn btn-light btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="icon-xs" data-feather="more-horizontal"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                    <div class="">
                                        <div class="row g-0 border-top">
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <p class="text-muted font-size-13 mb-2">Department</p>
                                                        <div class="badge badge-soft-primary font-size-12">Design</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <p class="text-muted font-size-13 mb-2">Due Date</p>
                                                        <h5 class="font-size-14 mb-0">20 May, 2021</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <p class="text-muted font-size-13 mb-2">Status</p>
                                                        <div class="badge bg-warning font-size-12">Active</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <div class="avatar-group align-items-center">
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Janna Johnson">
                                                                    <img src="{{URL::asset('assets/images/users/avatar-1.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Heather Ford">
                                                                    <img src="{{URL::asset('assets/images/users/avatar-2.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliza Hardin">
                                                                    <div class="avatar-sm">
                                                                        <span class="avatar-title rounded-circle bg-info text-white font-size-16">
                                                                            E
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Megan Seaton">
                                                                    <img src="{{URL::asset('assets/images/users/avatar-4.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="progress mt-2" style="height: 6px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 68%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="52">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div>
                                </div><!-- end card -->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="avatar">
                                                <img src="{{URL::asset('assets/images/companies/img-2.png')}}" alt="" class="avatar">
                                            </div>
                                            <div class="flex-grow-1 me-2 flex-wrap ms-3">
                                                <h5 class="font-size-15 mb-1"><a href="projects-overview" class="text-dark">Chat App</a></h5>
                                                <p class="text-muted mb-0">Quis autem vel eum iure</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="d-flex gap-2">
                                                    <div>
                                                        <a href="#" class="btn btn-light btn-sm"><i class="uil uil-pen"></i></a>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a class="btn btn-light btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="icon-xs" data-feather="more-horizontal"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                    <div class="">
                                        <div class="row g-0 border-top">
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <p class="text-muted font-size-13 mb-2">Department</p>
                                                        <div class="badge badge-soft-info font-size-12">Development</div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <p class="text-muted font-size-13 mb-2">Due Date</p>
                                                        <h5 class="font-size-14 mb-0">23 Apr, 2021</h5>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <p class="text-muted font-size-13 mb-2">Status</p>
                                                        <div class="badge bg-success font-size-12">Completed</div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <div class="avatar-group align-items-center">
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Megan Seaton">
                                                                    <img src="{{URL::asset('assets/images/users/avatar-4.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Ronald Hatfield">
                                                                    <img src="{{URL::asset('assets/images/users/avatar-5.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Heather Ford">
                                                                    <img src="{{URL::asset('assets/images/users/avatar-2.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="progress mt-2" style="height: 6px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="52">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div>
                                </div><!-- end card -->

                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="avatar">
                                                <img src="{{URL::asset('assets/images/companies/img-3.png')}}" alt="" class="avatar">
                                            </div>
                                            <div class="flex-grow-1 me-2 flex-wrap ms-3">
                                                <h5 class="font-size-15 mb-1"><a href="projects-overview" class="text-dark">Authentication</a></h5>
                                                <p class="text-muted mb-0">At vero eos et accusamus et</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="d-flex gap-2">
                                                    <div>
                                                        <a href="#" class="btn btn-light btn-sm"><i class="uil uil-pen"></i></a>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a class="btn btn-light btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="icon-xs" data-feather="more-horizontal"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                    <div class="">
                                        <div class="row g-0 border-top">
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <p class="text-muted font-size-13 mb-2">Department</p>
                                                        <div class="badge badge-soft-info font-size-12">Development</div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <p class="text-muted font-size-13 mb-2">Due Date</p>
                                                        <h5 class="font-size-14 mb-0">10 Jun, 2021</h5>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <p class="text-muted font-size-13 mb-2">Status</p>
                                                        <div class="badge bg-warning font-size-12">Active</div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <div class="avatar-group align-items-center">
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Ronald Hatfield">
                                                                    <img src="{{URL::asset('assets/images/users/avatar-10.jp')}}g" alt="" class="rounded-circle avatar-sm">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="progress mt-2" style="height: 6px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="52">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div>
                                </div><!-- end card -->

                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="avatar">
                                                <img src="{{URL::asset('assets/images/companies/img-4.png')}}" alt="" class="avatar">
                                            </div>
                                            <div class="flex-grow-1 me-2 flex-wrap ms-3">
                                                <h5 class="font-size-15 mb-1"><a href="projects-overview" class="text-dark">Dashboard UI</a></h5>
                                                <p class="text-muted mb-0">Duis arcu suscipit eget</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="d-flex gap-2">
                                                    <div>
                                                        <a href="#" class="btn btn-light btn-sm"><i class="uil uil-pen"></i></a>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a class="btn btn-light btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="icon-xs" data-feather="more-horizontal"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                    <div class="">
                                        <div class="row g-0 border-top">
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <p class="text-muted font-size-13 mb-2">Department</p>
                                                        <div class="badge badge-soft-primary font-size-12">Design</div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <p class="text-muted font-size-13 mb-2">Due Date</p>
                                                        <h5 class="font-size-14 mb-0">20 Apr, 2021</h5>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <p class="text-muted font-size-13 mb-2">Status</p>
                                                        <div class="badge bg-success font-size-12">Completed</div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <div class="avatar-group align-items-center">
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliza Hardin">
                                                                    <img src="{{URL::asset('assets/images/users/avatar-4.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Ronald Hatfield">
                                                                    <img src="{{URL::asset('assets/images/users/avatar-5.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="progress mt-2" style="height: 6px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 68%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="52">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>


                            <div class="row g-0 border-top">
                                <div class="col-sm-6">
                                    <div>
                                        <p class="mb-sm-0">Showing 1 to 8 of 24 entries</p>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-sm-6">
                                    <div class="float-sm-end">
                                        <ul class="pagination pagination-rounded mb-sm-0">
                                            <li class="page-item disabled">
                                                <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">1</a>
                                            </li>
                                            <li class="page-item active">
                                                <a href="#" class="page-link">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">4</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">5</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                            </li>
                                        </ul><!-- end ul -->
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div>
                    </div>
                    <!-- end tab pane -->

                    <div class="tab-pane" id="list-active" role="tabpanel">
                        <div>
                            <div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="avatar">
                                                <img src="{{URL::asset('assets/images/companies/img-1.png')}}" alt="" class="avatar">
                                            </div>
                                            <div class="flex-grow-1 me-2 flex-wrap ms-3">
                                                <h5 class="font-size-15 mb-1"><a href="projects-overview" class="text-dark">Authentication</a></h5>
                                                <p class="text-muted mb-0">At vero eos et accusamus et</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="d-flex gap-2">
                                                    <div>
                                                        <a href="#" class="btn btn-light btn-sm"><i class="uil uil-pen"></i></a>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a class="btn btn-light btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="icon-xs" data-feather="more-horizontal"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                    <div class="">
                                        <div class="row g-0 border-top">
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <p class="text-muted font-size-13 mb-2">Department</p>
                                                        <div class="badge badge-soft-info font-size-12">Development</div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <p class="text-muted font-size-13 mb-2">Due Date</p>
                                                        <h5 class="font-size-14 mb-0">10 Jun, 2021</h5>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <p class="text-muted font-size-13 mb-2">Status</p>
                                                        <div class="badge bg-warning font-size-12">Active</div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <div class="avatar-group align-items-center">
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Ronald Hatfield">
                                                                    <img src="{{URL::asset('assets/images/users/avatar-10.jp')}}g" alt="" class="rounded-circle avatar-sm">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="progress mt-2" style="height: 6px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="52">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div>
                                </div><!-- end card -->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="avatar">
                                                <img src="{{URL::asset('assets/images/companies/img-2.png')}}" alt="" class="avatar">
                                            </div>
                                            <div class="flex-grow-1 me-2 flex-wrap ms-3">
                                                <h5 class="font-size-15 mb-1"><a href="projects-overview" class="text-dark">Chat App</a></h5>
                                                <p class="text-muted mb-0">Quis autem vel eum iure</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="d-flex gap-2">
                                                    <div>
                                                        <a href="#" class="btn btn-light btn-sm"><i class="uil uil-pen"></i></a>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a class="btn btn-light btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="icon-xs" data-feather="more-horizontal"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                    <div class="">
                                        <div class="row g-0 border-top">
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <p class="text-muted font-size-13 mb-2">Department</p>
                                                        <div class="badge badge-soft-info font-size-12">Development</div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <p class="text-muted font-size-13 mb-2">Due Date</p>
                                                        <h5 class="font-size-14 mb-0">23 Apr, 2021</h5>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <p class="text-muted font-size-13 mb-2">Status</p>
                                                        <div class="badge bg-success font-size-12">Completed</div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <div class="avatar-group align-items-center">
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Megan Seaton">
                                                                    <img src="{{URL::asset('assets/images/users/avatar-4.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Ronald Hatfield">
                                                                    <img src="{{URL::asset('assets/images/users/avatar-5.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Heather Ford">
                                                                    <img src="{{URL::asset('assets/images/users/avatar-2.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="progress mt-2" style="height: 6px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 82%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="52">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div>
                                </div><!-- end card -->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="avatar">
                                                <img src="{{URL::asset('assets/images/companies/img-3.png')}}" alt="" class="avatar">
                                            </div>
                                            <div class="flex-grow-1 me-2 flex-wrap ms-3">
                                                <h5 class="font-size-15 mb-1"><a href="projects-overview" class="text-dark">Brand Logo Design</a></h5>
                                                <p class="text-muted mb-0">Sed ut perspiciatis unde iste</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="d-flex gap-2">
                                                    <div>
                                                        <a href="#" class="btn btn-light btn-sm"><i class="uil uil-pen"></i></a>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a class="btn btn-light btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="icon-xs" data-feather="more-horizontal"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                    <div class="">
                                        <div class="row g-0 border-top">
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <p class="text-muted font-size-13 mb-2">Department</p>
                                                        <div class="badge badge-soft-primary font-size-12">Design</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <p class="text-muted font-size-13 mb-2">Due Date</p>
                                                        <h5 class="font-size-14 mb-0">20 May, 2021</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <p class="text-muted font-size-13 mb-2">Status</p>
                                                        <div class="badge bg-warning font-size-12">Active</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <div class="avatar-group align-items-center">
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Janna Johnson">
                                                                    <img src="{{URL::asset('assets/images/users/avatar-1.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Heather Ford">
                                                                    <img src="{{URL::asset('assets/images/users/avatar-2.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliza Hardin">
                                                                    <div class="avatar-sm">
                                                                        <span class="avatar-title rounded-circle bg-info text-white font-size-16">
                                                                            E
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Megan Seaton">
                                                                    <img src="{{URL::asset('assets/images/users/avatar-4.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="progress mt-2" style="height: 6px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="52">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div>
                                </div><!-- end card -->

                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="avatar">
                                                <img src="{{URL::asset('assets/images/companies/img-4.png')}}" alt="" class="avatar">
                                            </div>
                                            <div class="flex-grow-1 me-2 flex-wrap ms-3">
                                                <h5 class="font-size-15 mb-1"><a href="projects-overview" class="text-dark">Dashboard UI</a></h5>
                                                <p class="text-muted mb-0">Duis arcu suscipit eget</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="d-flex gap-2">
                                                    <div>
                                                        <a href="#" class="btn btn-light btn-sm"><i class="uil uil-pen"></i></a>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a class="btn btn-light btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="icon-xs" data-feather="more-horizontal"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                    <div class="">
                                        <div class="row g-0 border-top">
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <p class="text-muted font-size-13 mb-2">Department</p>
                                                        <div class="badge badge-soft-primary font-size-12">Design</div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <p class="text-muted font-size-13 mb-2">Due Date</p>
                                                        <h5 class="font-size-14 mb-0">20 Apr, 2021</h5>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <p class="text-muted font-size-13 mb-2">Status</p>
                                                        <div class="badge bg-success font-size-12">Completed</div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <div class="avatar-group align-items-center">
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliza Hardin">
                                                                    <img src="{{URL::asset('assets/images/users/avatar-4.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Ronald Hatfield">
                                                                    <img src="{{URL::asset('assets/images/users/avatar-5.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="progress mt-2" style="height: 6px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="52">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>


                            <div class="row g-0 border-top">
                                <div class="col-sm-6">
                                    <div>
                                        <p class="mb-sm-0">Showing 1 to 8 of 24 entries</p>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-sm-6">
                                    <div class="float-sm-end">
                                        <ul class="pagination pagination-rounded mb-sm-0">
                                            <li class="page-item disabled">
                                                <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">1</a>
                                            </li>
                                            <li class="page-item active">
                                                <a href="#" class="page-link">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">4</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">5</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                            </li>
                                        </ul><!-- end ul -->
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div>
                    </div>
                    <!-- end tab pane -->

                    <div class="tab-pane" id="list-complete" role="tabpanel">
                        <div>
                            <div>

                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="avatar">
                                                <img src="{{URL::asset('assets/images/companies/img-5.png')}}" alt="" class="avatar">
                                            </div>
                                            <div class="flex-grow-1 me-2 flex-wrap ms-3">
                                                <h5 class="font-size-15 mb-1"><a href="projects-overview" class="text-dark">Chat App</a></h5>
                                                <p class="text-muted mb-0">Quis autem vel eum iure</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="d-flex gap-2">
                                                    <div>
                                                        <a href="#" class="btn btn-light btn-sm"><i class="uil uil-pen"></i></a>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a class="btn btn-light btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="icon-xs" data-feather="more-horizontal"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                    <div class="">
                                        <div class="row g-0 border-top">
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <p class="text-muted font-size-13 mb-2">Department</p>
                                                        <div class="badge badge-soft-info font-size-12">Development</div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <p class="text-muted font-size-13 mb-2">Due Date</p>
                                                        <h5 class="font-size-14 mb-0">23 Apr, 2021</h5>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <p class="text-muted font-size-13 mb-2">Status</p>
                                                        <div class="badge bg-success font-size-12">Completed</div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <div class="avatar-group align-items-center">
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Megan Seaton">
                                                                    <img src="{{URL::asset('assets/images/users/avatar-4.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Ronald Hatfield">
                                                                    <img src="{{URL::asset('assets/images/users/avatar-5.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Heather Ford">
                                                                    <img src="{{URL::asset('assets/images/users/avatar-2.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="progress mt-2" style="height: 6px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="52">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div>
                                </div><!-- end card -->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="avatar">
                                                <img src="{{URL::asset('assets/images/companies/img-6.png')}}" alt="" class="avatar">
                                            </div>
                                            <div class="flex-grow-1 me-2 flex-wrap ms-3">
                                                <h5 class="font-size-15 mb-1"><a href="projects-overview" class="text-dark">Brand Logo Design</a></h5>
                                                <p class="text-muted mb-0">Sed ut perspiciatis unde iste</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="d-flex gap-2">
                                                    <div>
                                                        <a href="#" class="btn btn-light btn-sm"><i class="uil uil-pen"></i></a>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a class="btn btn-light btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="icon-xs" data-feather="more-horizontal"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                    <div class="">
                                        <div class="row g-0 border-top">
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <p class="text-muted font-size-13 mb-2">Department</p>
                                                        <div class="badge badge-soft-primary font-size-12">Design</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <p class="text-muted font-size-13 mb-2">Due Date</p>
                                                        <h5 class="font-size-14 mb-0">20 May, 2021</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <p class="text-muted font-size-13 mb-2">Status</p>
                                                        <div class="badge bg-warning font-size-12">Active</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <div class="avatar-group align-items-center">
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Janna Johnson">
                                                                    <img src="{{URL::asset('assets/images/users/avatar-1.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Heather Ford">
                                                                    <img src="{{URL::asset('assets/images/users/avatar-2.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliza Hardin">
                                                                    <div class="avatar-sm">
                                                                        <span class="avatar-title rounded-circle bg-info text-white font-size-16">
                                                                            E
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Megan Seaton">
                                                                    <img src="{{URL::asset('assets/images/users/avatar-4.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="progress mt-2" style="height: 6px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="52">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div>
                                </div><!-- end card -->

                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="avatar">
                                                <img src="{{URL::asset('assets/images/companies/img-3.png')}}" alt="" class="avatar">
                                            </div>
                                            <div class="flex-grow-1 me-2 flex-wrap ms-3">
                                                <h5 class="font-size-15 mb-1"><a href="projects-overview" class="text-dark">Dashboard UI</a></h5>
                                                <p class="text-muted mb-0">Duis arcu suscipit eget</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="d-flex gap-2">
                                                    <div>
                                                        <a href="#" class="btn btn-light btn-sm"><i class="uil uil-pen"></i></a>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a class="btn btn-light btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="icon-xs" data-feather="more-horizontal"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                    <div class="">
                                        <div class="row g-0 border-top">
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <p class="text-muted font-size-13 mb-2">Department</p>
                                                        <div class="badge badge-soft-primary font-size-12">Design</div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <p class="text-muted font-size-13 mb-2">Due Date</p>
                                                        <h5 class="font-size-14 mb-0">20 Apr, 2021</h5>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <p class="text-muted font-size-13 mb-2">Status</p>
                                                        <div class="badge bg-success font-size-12">Completed</div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <div class="avatar-group align-items-center">
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliza Hardin">
                                                                    <img src="{{URL::asset('assets/images/users/avatar-4.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Ronald Hatfield">
                                                                    <img src="{{URL::asset('assets/images/users/avatar-5.jpg')}}" alt="" class="rounded-circle avatar-sm">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="progress mt-2" style="height: 6px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 52%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="52">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div>
                                </div>
                                <!-- end card -->

                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="avatar">
                                                <img src="{{URL::asset('assets/images/companies/img-2.png')}}" alt="" class="avatar">
                                            </div>
                                            <div class="flex-grow-1 me-2 flex-wrap ms-3">
                                                <h5 class="font-size-15 mb-1"><a href="projects-overview" class="text-dark">Authentication</a></h5>
                                                <p class="text-muted mb-0">At vero eos et accusamus et</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="d-flex gap-2">
                                                    <div>
                                                        <a href="#" class="btn btn-light btn-sm"><i class="uil uil-pen"></i></a>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a class="btn btn-light btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="icon-xs" data-feather="more-horizontal"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                    <div class="">
                                        <div class="row g-0 border-top">
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <p class="text-muted font-size-13 mb-2">Department</p>
                                                        <div class="badge badge-soft-info font-size-12">Development</div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <p class="text-muted font-size-13 mb-2">Due Date</p>
                                                        <h5 class="font-size-14 mb-0">10 Jun, 2021</h5>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <p class="text-muted font-size-13 mb-2">Status</p>
                                                        <div class="badge bg-warning font-size-12">Active</div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="border-end p-3 h-100">
                                                    <div>
                                                        <div class="avatar-group align-items-center">
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Ronald Hatfield">
                                                                    <img src="{{URL::asset('assets/images/users/avatar-10.jp')}}g" alt="" class="rounded-circle avatar-sm">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div>
                                </div><!-- end card -->
                            </div>


                            <div class="row g-0 border-top">
                                <div class="col-sm-6">
                                    <div>
                                        <p class="mb-sm-0">Showing 1 to 8 of 24 entries</p>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-sm-6">
                                    <div class="float-sm-end">
                                        <ul class="pagination pagination-rounded mb-sm-0">
                                            <li class="page-item disabled">
                                                <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">1</a>
                                            </li>
                                            <li class="page-item active">
                                                <a href="#" class="page-link">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">4</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">5</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                            </li>
                                        </ul><!-- end ul -->
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div>
                    </div>
                    <!-- end tab pane -->
                </div>
                <!-- end tab content -->
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

@endsection
@section('script')

<script src="{{ URL::asset('assets/js/app.js') }}"></script>

@endsection
