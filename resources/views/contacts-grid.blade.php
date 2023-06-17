@extends('layouts.master')
@section('title')User Grid @endsection
@section('content')
{{-- breadcrumbs  --}}
    @section('breadcrumb')
        @component('components.breadcrumb')
            @slot('li_1') Contacts @endslot
            @slot('title') User Grid @endslot
        @endcomponent
    @endsection
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title">Contact List <span class="text-muted fw-normal ms-2">(834)</span></h5>
                        </div>
                    </div><!-- end col -->
                    <div class="col-md-6">
                        <div class="d-flex flex-wrap align-items-start justify-content-md-end mt-2 mt-md-0 gap-2 mb-3">
                            <div>
                                <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <a class="nav-link" href="contacts-list" data-bs-toggle="tooltip" data-bs-placement="top" title="List"><i class="uil uil-list-ul"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="contacts-grid" data-bs-toggle="tooltip" data-bs-placement="top" title="Grid"><i class="uil uil-apps"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <a href="#" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addContactModal"><i class="uil uil-plus me-1"></i> Add
                                    New</a>
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
                                <!-- end ul -->
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <!-- Modal -->
                <div class="modal fade" id="addContactModal" tabindex="-1" aria-labelledby="addContactModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addContactModalLabel">Add Contact</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                                <div>
                                    <div class="mb-3">
                                        <label for="addcontact-name-input" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="addcontact-name-input" placeholder="Enter Name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="addcontact-designation-input" class="form-label">Designation</label>
                                        <input type="text" class="form-control" id="addcontact-designation-input" placeholder="Enter Designation">
                                    </div>
                                    <div class="mb-3">
                                        <label for="addcontact-file-input" class="form-label">User Image</label>
                                        <input type="file" class="form-control" id="addcontact-file-input">
                                    </div>

                                    <div class="mb-3">
                                        <label for="addcontact-email-input" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="addcontact-email-input" placeholder="Enter Email">
                                    </div>
                                </div>
                            </div><!-- end modalbody -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light w-sm" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary w-sm">Add</button>
                            </div>
                            <!-- end modalfooter -->
                        </div>
                        <!-- end modal content -->
                    </div>
                </div>
                <!-- end modal -->

                <div class="row">
                    <div class="col-xl-4 col-sm-6">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0 avatar rounded-circle me-3">
                                        <img src="{{URL::asset('assets/images/users/avatar-1.jpg')}}" alt="" class="img-fluid rounded-circle">
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-15 mb-1 text-truncate"><a href="pages-profile" class="text-dark">Donald
                                                Risher</a></h5>
                                        <span class="badge badge-soft-success mb-0">Full Stack Developer</span>

                                    </div>


                                    <div class="flex-shrink-0 dropdown">
                                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                            <i class="icon-xs" data-feather="more-horizontal"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Remove</a>
                                        </div>
                                    </div><!-- end dropdown -->
                                </div>
                                <p class="mt-4 text-muted">Curabitur non magna lobortis est tempus gravida
                                    ornare libero sed diam sed fringilla est.</p>
                                <div class="pt-2">
                                    <button type="button" class="btn btn-soft-primary btn-sm w-md text-truncate"><i class="bx bx-user me-1 align-middle"></i> Contact</button>
                                    <button type="button" class="btn btn-primary btn-sm w-md text-truncate ms-2"><i class="bx bx-message-square-dots me-1 align-middle"></i> Profile</button>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-xl-4 col-sm-6">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0 avatar rounded-circle me-3">
                                        <img src="{{URL::asset('assets/images/users/avatar-2.jpg')}}" alt="" class="img-fluid rounded-circle">
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-15 mb-1 text-truncate"><a href="pages-profile" class="text-dark">Helen
                                                Barron</a></h5>
                                        <span class="badge badge-soft-danger mb-0">Web Designer</span>
                                    </div>
                                    <div class="flex-shrink-0 dropdown">
                                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                            <i class="icon-xs" data-feather="more-horizontal"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Remove</a>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-4 text-muted">Curabitur non magna lobortis est tempus gravida
                                    ornare libero sed diam sed fringilla est.</p>
                                <div class="pt-2">
                                    <button type="button" class="btn btn-soft-primary btn-sm w-md text-truncate"><i class="bx bx-user me-1 align-middle"></i> Contact</button>
                                    <button type="button" class="btn btn-primary btn-sm w-md text-truncate ms-2"><i class="bx bx-message-square-dots me-1 align-middle"></i> Profile</button>
                                </div>
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-xl-4 col-sm-6">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0 avatar rounded-circle me-3">
                                        <img src="{{URL::asset('assets/images/users/avatar-3.jpg')}}" alt="" class="img-fluid rounded-circle">
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-15 mb-1 text-truncate"><a href="pages-profile" class="text-dark">Philip
                                                Theroux</a></h5>
                                        <span class="badge badge-soft-warning mb-0">UI/UX Designer</span>
                                    </div>
                                    <div class="flex-shrink-0 dropdown">
                                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                            <i class="icon-xs" data-feather="more-horizontal"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Remove</a>
                                        </div>
                                    </div>
                                    <!-- end dropdown -->
                                </div>
                                <p class="mt-4 text-muted">Curabitur non magna lobortis est tempus gravida
                                    ornare libero sed diam sed fringilla est.</p>
                                <div class="pt-2">
                                    <button type="button" class="btn btn-soft-primary btn-sm w-md text-truncate"><i class="bx bx-user me-1 align-middle"></i> Contact</button>
                                    <button type="button" class="btn btn-primary btn-sm w-md text-truncate ms-2"><i class="bx bx-message-square-dots me-1 align-middle"></i> Profile</button>
                                </div>
                            </div><!-- end card -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-xl-4 col-sm-6">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0 avatar rounded-circle me-3">
                                        <img src="{{URL::asset('assets/images/users/avatar-4.jpg')}}" alt="" class="img-fluid rounded-circle">
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-15 mb-1 text-truncate"><a href="pages-profile" class="text-dark">Donald
                                                Risher</a></h5>
                                        <span class="badge badge-soft-primary mb-0">Backend Developer</span>
                                    </div>
                                    <div class="flex-shrink-0 dropdown">
                                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                            <i class="icon-xs" data-feather="more-horizontal"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Remove</a>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-4 text-muted">Curabitur non magna lobortis est tempus gravida
                                    ornare libero sed diam sed fringilla est.</p>
                                <div class="pt-2">
                                    <button type="button" class="btn btn-soft-primary btn-sm w-md text-truncate"><i class="bx bx-user me-1 align-middle"></i> Contact</button>
                                    <button type="button" class="btn btn-primary btn-sm w-md text-truncate ms-2"><i class="bx bx-message-square-dots me-1 align-middle"></i> Profile</button>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-xl-4 col-sm-6">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0 avatar rounded-circle me-3">
                                        <img src="{{URL::asset('assets/images/users/avatar-5.jpg')}}" alt="" class="img-fluid rounded-circle">
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-15 mb-1 text-truncate"><a href="pages-profile" class="text-dark">Gerald
                                                Moyer</a></h5>
                                        <span class="badge badge-soft-primary mb-0">Backend Developer</span>
                                    </div>
                                    <div class="flex-shrink-0 dropdown">
                                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                            <i class="icon-xs" data-feather="more-horizontal"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Remove</a>
                                        </div>
                                    </div>
                                </div><!-- end -->
                                <p class="mt-4 text-muted">Curabitur non magna lobortis est tempus gravida
                                    ornare libero sed diam sed fringilla est.</p>
                                <div class="pt-2">
                                    <button type="button" class="btn btn-soft-primary btn-sm w-md text-truncate"><i class="bx bx-user me-1 align-middle"></i> Contact</button>
                                    <button type="button" class="btn btn-primary btn-sm w-md text-truncate ms-2"><i class="bx bx-message-square-dots me-1 align-middle"></i> Profile</button>
                                </div>
                            </div><!-- end cardbody -->
                            <!-- end btn-group -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-xl-4 col-sm-6">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0 avatar rounded-circle me-3">
                                        <img src="{{URL::asset('assets/images/users/avatar-6.jpg')}}" alt="" class="img-fluid rounded-circle">
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-15 mb-1 text-truncate"><a href="pages-profile" class="text-dark">Sharon
                                                Carver</a></h5>
                                        <span class="badge badge-soft-info mb-0">Frontend Developer</span>
                                    </div>
                                    <div class="flex-shrink-0 dropdown">
                                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                            <i class="icon-xs" data-feather="more-horizontal"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Remove</a>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-4 text-muted">Curabitur non magna lobortis est tempus gravida
                                    ornare libero sed diam sed fringilla est.</p>
                                <div class="pt-2">
                                    <button type="button" class="btn btn-soft-primary btn-sm w-md text-truncate"><i class="bx bx-user me-1 align-middle"></i> Contact</button>
                                    <button type="button" class="btn btn-primary btn-sm w-md text-truncate ms-2"><i class="bx bx-message-square-dots me-1 align-middle"></i> Profile</button>
                                </div>
                            </div>
                            <!-- end card body -->
                            <!-- end button group -->
                        </div>
                        <!-- end card -->
                    </div><!-- end col -->
                    <div class="col-xl-4 col-sm-6">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0 avatar rounded-circle me-3">
                                        <img src="{{URL::asset('assets/images/users/avatar-7.jpg')}}" alt="" class="img-fluid rounded-circle">
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-15 mb-1 text-truncate"><a href="pages-profile" class="text-dark">Jody
                                                Tondreau</a></h5>
                                        <span class="badge badge-soft-danger mb-0">PHP Developer</span>
                                    </div>
                                    <div class="flex-shrink-0 dropdown">
                                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                            <i class="icon-xs" data-feather="more-horizontal"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Remove</a>
                                        </div>
                                    </div>
                                    <!-- end dropdown -->
                                </div>
                                <p class="mt-4 text-muted">Curabitur non magna lobortis est tempus gravida
                                    ornare libero sed diam sed fringilla est.</p>
                                <div class="pt-2">
                                    <button type="button" class="btn btn-soft-primary btn-sm w-md text-truncate"><i class="bx bx-user me-1 align-middle"></i> Contact</button>
                                    <button type="button" class="btn btn-primary btn-sm w-md text-truncate ms-2"><i class="bx bx-message-square-dots me-1 align-middle"></i> Profile</button>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-xl-4 col-sm-6">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0 avatar rounded-circle me-3">
                                        <img src="{{URL::asset('assets/images/users/avatar-8.jpg')}}" alt="" class="img-fluid rounded-circle">
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-15 mb-1 text-truncate"><a href="pages-profile" class="text-dark">Dennis
                                                Goulet</a></h5>

                                        <span class="badge badge-soft-warning mb-0">Graphic Designer</span>
                                    </div>
                                    <div class="flex-shrink-0 dropdown">
                                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                            <i class="icon-xs" data-feather="more-horizontal"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Remove</a>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-4 text-muted">Curabitur non magna lobortis est tempus gravida
                                    ornare libero sed diam sed fringilla est.</p>
                                <div class="pt-2">
                                    <button type="button" class="btn btn-soft-primary btn-sm w-md text-truncate"><i class="bx bx-user me-1 align-middle"></i> Contact</button>
                                    <button type="button" class="btn btn-primary btn-sm w-md text-truncate ms-2"><i class="bx bx-message-square-dots me-1 align-middle"></i> Profile</button>
                                </div>
                            </div>
                            <!-- end card body -->
                            <!-- end button group -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-xl-4 col-sm-6">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0 avatar rounded-circle me-3">
                                        <img src="{{URL::asset('assets/images/users/avatar-9.jpg')}}" alt="" class="img-fluid rounded-circle">
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-15 mb-1 text-truncate"><a href="#" class="text-dark">Cecelia Farrell</a></h5>
                                        <span class="badge badge-soft-success mb-0">Angular Developer</span>
                                    </div>
                                    <div class="flex-shrink-0 dropdown">
                                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                            <i class="icon-xs" data-feather="more-horizontal"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Remove</a>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-4 text-muted">Curabitur non magna lobortis est tempus gravida
                                    ornare libero sed diam sed fringilla est.</p>
                                <div class="pt-2">
                                    <button type="button" class="btn btn-soft-primary btn-sm w-md text-truncate"><i class="bx bx-user me-1 align-middle"></i> Contact</button>
                                    <button type="button" class="btn btn-primary btn-sm w-md text-truncate ms-2"><i class="bx bx-message-square-dots me-1 align-middle"></i> Profile</button>
                                </div>
                            </div>
                            <!-- end crad body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->
                <div class="row g-0 text-center text-sm-start">
                    <div class="col-sm-6">
                        <div>
                            <p class="mb-sm-0">Showing 1 to 10 of 57 entries</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-sm-6">
                        <ul class="pagination pagination-rounded justify-content-center justify-content-sm-end mb-sm-0">
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
                        </ul>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

@endsection
@section('script')

<script src="{{ URL::asset('assets/js/app.js') }}"></script>

@endsection
