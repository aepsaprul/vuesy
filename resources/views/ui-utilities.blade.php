@extends('layouts.master')
@section('title')Utilities @endsection
@section('content')

    {{-- breadcrumbs  --}}
    @section('breadcrumb')
        @component('components.breadcrumb')
            @slot('li_1') UI Elements @endslot
            @slot('title') Utilities @endslot
        @endcomponent
    @endsection

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Background Colors</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="p-3 mb-2 bg-primary text-white">.bg-primary</div>
                <div class="p-3 mb-2 bg-secondary text-white">.bg-secondary</div>
                <div class="p-3 mb-2 bg-success text-white">.bg-success</div>
                <div class="p-3 mb-2 bg-danger text-white">.bg-danger</div>
                <div class="p-3 mb-2 bg-warning text-dark">.bg-warning</div>
                <div class="p-3 mb-2 bg-info text-dark">.bg-info</div>
                <div class="p-3 mb-2 bg-light text-dark">.bg-light</div>
                <div class="p-3 mb-2 bg-dark text-white">.bg-dark</div>
                <div class="p-3 mb-2 bg-white text-black-50">.bg-white</div>
                <div class="p-3 bg-transparent text-dark">.bg-transparent</div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Background Gradient</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="p-3 mb-2 bg-primary bg-gradient text-white">.bg-primary .bg-gradient</div>
                <div class="p-3 mb-2 bg-secondary bg-gradient text-white">.bg-secondary .bg-gradient</div>
                <div class="p-3 mb-2 bg-success bg-gradient text-white">.bg-success .bg-gradient</div>
                <div class="p-3 mb-2 bg-danger bg-gradient text-white">.bg-danger .bg-gradient</div>
                <div class="p-3 mb-2 bg-warning bg-gradient text-dark">.bg-warning .bg-gradient</div>
                <div class="p-3 mb-2 bg-info bg-gradient text-dark">.bg-info .bg-gradient</div>
                <div class="p-3 mb-2 bg-light bg-gradient text-dark">.bg-light .bg-gradient</div>
                <div class="p-3 mb-2 bg-dark bg-gradient text-white">.bg-dark .bg-gradient</div>
                <div class="p-3 mb-2 bg-white bg-gradient text-black-50">.bg-white .bg-gradient</div>
                <div class="p-3 bg-transparent bg-gradient text-dark">.bg-transparent .bg-gradient</div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Additive Border</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <span class="border border-primary bg-light p-5 d-inline-block"></span>
                    <span class="border-top border-primary bg-light p-5 d-inline-block"></span>
                    <span class="border-end border-primary bg-light p-5 d-inline-block"></span>
                    <span class="border-bottom border-primary bg-light p-5 d-inline-block"></span>
                    <span class="border-start border-primary bg-light p-5 d-inline-block"></span>
                </div>
            </div>
        </div>
    </div><!-- end col -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Subtractive Border</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <span class="border border-0 border-primary bg-light p-5 d-inline-block"></span>
                    <span class="border border-top-0 border-primary bg-light p-5 d-inline-block"></span>
                    <span class="border border-end-0 border-primary bg-light p-5 d-inline-block"></span>
                    <span class="border border-bottom-0 border-primary bg-light p-5 d-inline-block"></span>
                    <span class="border border-start-0 border-primary bg-light p-5 d-inline-block"></span>
                </div>
            </div>
        </div>
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Border Width</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <span class="border border-1 bg-light p-5 d-inline-block"></span>
                    <span class="border border-2 bg-light p-5 d-inline-block"></span>
                    <span class="border border-3 bg-light p-5 d-inline-block"></span>
                    <span class="border border-4 bg-light p-5 d-inline-block"></span>
                    <span class="border border-5 bg-light p-5 d-inline-block"></span>
                </div>
            </div>
        </div>
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card card-h-100">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Border Radius</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-flex flex-wrap gap-3 align-items-center">
                    <img src="{{URL::asset('assets/images/users/avatar-10.jpg')}}" class="rounded avatar-xl" alt=" ">
                    <img src="{{URL::asset('assets/images/users/avatar-10.jpg')}}" class="rounded-top avatar-xl" alt="">
                    <img src="{{URL::asset('assets/images/users/avatar-10.jpg')}}" class="rounded-end avatar-xl" alt="">
                    <img src="{{URL::asset('assets/images/users/avatar-10.jpg')}}" class="rounded-bottom avatar-xl" alt="">
                    <img src="{{URL::asset('assets/images/users/avatar-10.jpg')}}" class="rounded-start avatar-xl" alt="">
                    <img src="{{URL::asset('assets/images/users/avatar-10.jpg')}}" class="rounded-circle avatar-xl" alt="">
                    <img src="{{URL::asset('assets/images/small/img-3.jpg')}}" alt="" class="rounded-pill w-25 h-auto">
                </div>
            </div>
        </div>
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card card-h-100">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Rounded Sizes</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <img src="{{URL::asset('assets/images/users/avatar-10.jpg')}}" class="rounded-0 avatar-xl" alt=" ">
                    <img src="{{URL::asset('assets/images/users/avatar-10.jpg')}}" class="rounded-1 avatar-xl" alt="">
                    <img src="{{URL::asset('assets/images/users/avatar-10.jpg')}}" class="rounded-2 avatar-xl" alt="">
                    <img src="{{URL::asset('assets/images/users/avatar-10.jpg')}}" class="rounded-3 avatar-xl" alt="">
                </div>
            </div><!-- end cardbody -->
        </div><!-- end card -->
    </div><!-- end col -->
</div> <!-- end row -->

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Colors</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-4">
                        <p class="text-primary">.text-primary</p>
                        <p class="text-secondary">.text-secondary</p>
                        <p class="text-success">.text-success</p>
                        <p class="text-danger mb-3 mb-lg-0">.text-danger</p>
                    </div><!-- end col -->
                    <div class="col-xl-4">
                        <p class="text-info">.text-info</p>
                        <p class="text-muted">.text-muted</p>
                        <p class="text-dark">.text-dark</p>
                        <p class="text-black-50 mb-3 mb-lg-0">.text-black-50</p>
                    </div><!-- end col -->
                    <div class="col-xl-4">
                        <p class="text-warning bg-dark">.text-warning</p>
                        <p class="text-light bg-dark">.text-light</p>
                        <p class="text-white bg-dark">.text-white</p>
                        <p class="text-white-50 bg-dark mb-0">.text-white-50</p>
                    </div>
                </div><!-- end col -->
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Direction of Flex Row & Reverse</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-flex flex-row border bg-light mb-3">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                </div>
                <div class="d-flex flex-row-reverse bg-light border ">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                </div>
            </div>
        </div><!-- end card -->
    </div><!-- end col -->
    <div class="col-xl-6">
        <div class="card card-h-100">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Grow and Shrink</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-flex bg-light">
                    <div class="p-2 flex-grow-1 border">Flex item</div>
                    <div class="p-2 border">Flex item</div>
                    <div class="p-2 border">Third flex item</div>
                </div>
                <div class="d-flex bg-light mt-3">
                    <div class="p-2 w-100 border">Flex item</div>
                    <div class="p-2 flex-shrink-1 border">Flexitem</div>
                </div>
            </div>
        </div><!-- end card -->
    </div><!-- end col -->

</div><!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card card-h-100">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Enable Flex Behaviors</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-flex p-2 border bg-light mb-2">I'm a flexbox container!</div>
                <div class="d-inline-flex p-2 border bg-light">I'm an inline flexbox container!</div>
            </div>
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Justify Content</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-flex justify-content-start bg-light border mb-3">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                </div>
                <div class="d-flex justify-content-end bg-light border mb-3">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                </div>
                <div class="d-flex justify-content-center bg-light border mb-3">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                </div>
                <div class="d-flex justify-content-between bg-light border mb-3">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                </div>
                <div class="d-flex justify-content-around bg-light border mb-3">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                </div>
                <div class="d-flex justify-content-evenly bg-light border mb-0">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                </div>
            </div>
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card card-h-100">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Wrap</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-flex flex-nowrap bg-light border mb-3" style="width: 16rem;">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                    <div class="p-2 border">Flex item 4</div>
                    <div class="p-2 border">Flex item 5</div>
                    <div class="p-2 border">Flex item 6</div>
                    <div class="p-2 border">Flex item 7</div>
                    <div class="p-2 border">Flex item 8</div>
                </div>
                <div class="d-flex flex-wrap bg-light border mb-3">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                    <div class="p-2 border">Flex item 4</div>
                    <div class="p-2 border">Flex item 5</div>
                    <div class="p-2 border">Flex item 6</div>
                    <div class="p-2 border">Flex item 7</div>
                    <div class="p-2 border">Flex item 8</div>
                    <div class="p-2 border">Flex item 9</div>
                </div>
                <div class="d-flex flex-wrap-reverse bg-light border mb-0">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                    <div class="p-2 border">Flex item 4</div>
                    <div class="p-2 border">Flex item 5</div>
                    <div class="p-2 border">Flex item 6</div>
                    <div class="p-2 border">Flex item 7</div>
                    <div class="p-2 border">Flex item 8</div>
                    <div class="p-2 border">Flex item 9</div>
                </div>
            </div><!-- end card body-->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card card-h-100">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Direction of Flex Column & Reverse</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-flex flex-column bg-light border mb-3">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                </div>
                <div class="d-flex flex-column-reverse bg-light border">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                </div>
            </div>
        </div><!-- end card -->
    </div><!-- end col -->

</div><!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Align Self</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-flex bg-light border mb-3" style="height: 104px;">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="align-self-start p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                </div>
                <div class="d-flex bg-light border mb-3" style="height: 104px;">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="align-self-end p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                </div>
                <div class="d-flex bg-light border mb-3" style="height: 104px;">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="align-self-center p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                </div>
                <div class="d-flex bg-light border mb-3" style="height: 104px;">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="align-self-baseline p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                </div>
                <div class="d-flex bg-light border mb-0" style="height: 104px;">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="align-self-stretch p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                </div>
            </div><!-- end card body-->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Align Items</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-flex align-items-start bg-light border mb-3" style="height: 104px;">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                </div>
                <div class="d-flex align-items-end bg-light border mb-3" style="height: 104px;">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                </div>
                <div class="d-flex align-items-center bg-light border mb-3" style="height: 104px;">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                </div>
                <div class="d-flex align-items-baseline bg-light border mb-3" style="height: 104px;">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                </div>
                <div class="d-flex align-items-stretch bg-light border mb-0" style="height: 104px;">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                </div>
            </div><!-- end card body-->
        </div><!-- end card -->
    </div><!-- end col -->
</div>

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">With Alignitems</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-flex align-items-start flex-column bg-light border mb-3" style="height: 200px;">
                    <div class="mb-auto p-2 border">Flex item</div>
                    <div class="p-2 border">Flex item</div>
                    <div class="p-2 border">Flex item</div>
                </div>

                <div class="d-flex align-items-end flex-column bg-light border mb-0" style="height: 200px;">
                    <div class="p-2 border">Flex item</div>
                    <div class="p-2 border">Flex item</div>
                    <div class="mt-auto p-2 border">Flex item</div>
                </div>
            </div>
        </div><!-- end card -->
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Fill</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-flex border bg-light">
                    <div class="p-2 flex-fill border">Flex item with a lot of content</div>
                    <div class="p-2 flex-fill border">Flex item</div>
                    <div class="p-2 flex-fill border">Flex item</div>
                </div>
            </div>
        </div>
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Auto Margins</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-flex border bg-light mb-3">
                    <div class="p-2 border">Flex item</div>
                    <div class="p-2 border">Flex item</div>
                    <div class="p-2 border">Flex item</div>
                </div>

                <div class="d-flex border bg-light mb-3">
                    <div class="me-auto p-2 border">Flex item</div>
                    <div class="p-2 border">Flex item</div>
                    <div class="p-2 border">Flex item</div>
                </div>

                <div class="d-flex border bg-light mb-0">
                    <div class="p-2 border">Flex item</div>
                    <div class="p-2 border">Flex item</div>
                    <div class="ms-auto p-2 border">Flex item</div>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->

        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Gap</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-grid gap-3">
                    <div class="p-2 bg-light border">Grid item 1</div>
                    <div class="p-2 bg-light border">Grid item 2</div>
                    <div class="p-2 bg-light border">Grid item 3</div>
                </div>
            </div><!-- end cardbody -->
        </div><!-- end card -->

        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Text Wrapping and Overflow</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="badge bg-primary text-wrap" style="width: 6rem;">
                    This text should wrap.
                </div>
            </div><!-- end cardbody -->
            <div class="card-body pt-0">
                <div class="text-nowrap border bg-light" style="width: 8rem;">
                    This text should overflow the parent.
                </div>
            </div><!-- end cardbody -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Align Content</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-flex align-content-start flex-wrap bg-light border mb-3" style="min-height: 182px;">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                    <div class="p-2 border">Flex item 4</div>
                    <div class="p-2 border">Flex item 5</div>
                    <div class="p-2 border">Flex item 6</div>
                    <div class="p-2 border">Flex item 7</div>
                    <div class="p-2 border">Flex item 8</div>
                </div>
                <div class="d-flex align-content-end flex-wrap bg-light border mb-3" style="min-height: 182px;">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                    <div class="p-2 border">Flex item 4</div>
                    <div class="p-2 border">Flex item 5</div>
                    <div class="p-2 border">Flex item 6</div>
                    <div class="p-2 border">Flex item 7</div>
                    <div class="p-2 border">Flex item 8</div>
                    <div class="p-2 border">Flex item 9</div>
                </div>
                <div class="d-flex align-content-center flex-wrap bg-light border mb-3" style="min-height: 182px;">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                    <div class="p-2 border">Flex item 4</div>
                    <div class="p-2 border">Flex item 5</div>
                    <div class="p-2 border">Flex item 6</div>
                    <div class="p-2 border">Flex item 7</div>
                    <div class="p-2 border">Flex item 8</div>
                    <div class="p-2 border">Flex item 9</div>
                </div>
                <div class="d-flex align-content-between flex-wrap bg-light border mb-3" style="min-height: 182px;">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                    <div class="p-2 border">Flex item 4</div>
                    <div class="p-2 border">Flex item 5</div>
                    <div class="p-2 border">Flex item 6</div>
                    <div class="p-2 border">Flex item 7</div>
                    <div class="p-2 border">Flex item 8</div>
                    <div class="p-2 border">Flex item 9</div>
                </div><!-- end -->
                <div class="d-flex align-content-around flex-wrap bg-light border mb-3" style="min-height: 182px;">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                    <div class="p-2 border">Flex item 4</div>
                    <div class="p-2 border">Flex item 5</div>
                    <div class="p-2 border">Flex item 6</div>
                    <div class="p-2 border">Flex item 7</div>
                    <div class="p-2 border">Flex item 8</div>
                    <div class="p-2 border">Flex item 9</div>
                </div><!-- end -->
                <div class="d-flex align-content-stretch flex-wrap bg-light border mb-0" style="min-height: 182px;">
                    <div class="p-2 border">Flex item 1</div>
                    <div class="p-2 border">Flex item 2</div>
                    <div class="p-2 border">Flex item 3</div>
                    <div class="p-2 border">Flex item 4</div>
                    <div class="p-2 border">Flex item 5</div>
                    <div class="p-2 border">Flex item 6</div>
                    <div class="p-2 border">Flex item 7</div>
                    <div class="p-2 border">Flex item 8</div>
                    <div class="p-2 border">Flex item 9</div>
                </div><!-- end -->
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Order</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-flex flex-nowrap border bg-light">
                    <div class="order-3 p-2 border">First flex item</div>
                    <div class="order-2 p-2 border">Second flex item</div>
                    <div class="order-1 p-2 border">Third flex item</div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Float</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="float-start">Float start on all viewport sizes</div><br>
                <div class="float-end">Float end on all viewport sizes</div><br>
                <div class="float-none">Don't float on all viewport sizes</div>
            </div><!-- end card body -->
        </div><!-- end card -->
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Text Selection</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <p class="user-select-all">This paragraph will be entirely selected when clicked by the user.</p>
                <p class="user-select-auto">This paragraph has default select behavior.</p>
                <p class="user-select-none">This paragraph will not be selectable when clicked by the user.</p>
            </div><!-- end cardbody -->
        </div><!-- end card -->
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Pointer Events</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <p><a href="#" class="pe-none" tabindex="-1" aria-disabled="true">This link</a> can not be clicked.</p>
                <p><a href="#" class="pe-auto">This link</a> can be clicked (this is default behavior).</p>
                <p class="pe-none"><a href="#" tabindex="-1" aria-disabled="true">This link</a> can not be clicked because the <code>pointer-events</code> property is inherited from its parent. However, <a href="#" class="pe-auto">this link</a> has a <code>pe-auto</code> class and can be clicked.</p>
            </div><!-- end cardbody -->
        </div><!-- end card -->

        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Text Alignment</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <p class="text-start">Start aligned text on all viewport sizes.</p>
                <p class="text-center">Center aligned text on all viewport sizes.</p>
                <p class="text-end">End aligned text on all viewport sizes.</p>
                <p class="text-sm-start">Start aligned text on viewports sized SM (small) or wider.</p>
                <p class="text-md-start">Start aligned text on viewports sized MD (medium) or wider.</p>
                <p class="text-lg-start">Start aligned text on viewports sized LG (large) or wider.</p>
                <p class="text-xl-start mb-0">Start aligned text on viewports sized XL (extra-large) or wider.</p>
            </div><!-- end col -->
        </div><!-- end card -->
    </div><!-- end col -->
</div>

<div class="row mt-4">
    <div class="col-lg-12">
        <div>
            <h5 class="pb-1 text-decoration-underline">Stacks</h5>
        </div>
        <!-- end card -->

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header justify-content-between d-flex align-items-center">
                        <h4 class="card-title">Vertical</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="vstack gap-3">
                            <div class="bg-light border p-1 px-2">First item</div>
                            <div class="bg-light border p-1 px-2">Second item</div>
                            <div class="bg-light border p-1 px-2">Third item</div>
                        </div>

                        <div class="mt-5">
                            <h5 class="font-size-14 mb-3"><i class="mdi mdi-chevron-right text-primary me-1"></i>Vertical Stacks Examples</h5>
                            <div class="vstack gap-2 col-md-5 mx-auto">
                                <button type="button" class="btn btn-primary">Save changes</button>
                                <button type="button" class="btn btn-outline-secondary">Cancel</button>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end card -->
            </div>
            <!-- end col -->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header justify-content-between d-flex align-items-center">
                        <h4 class="card-title">Horizontal</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="hstack gap-3">
                            <div class="bg-light border p-1 px-2">First item</div>
                            <div class="bg-light border p-1 px-2">Second item</div>
                            <div class="bg-light border p-1 px-2">Third item</div>
                        </div>

                        <div class="mt-4">
                            <p class="card-title-desc mb-3">Using horizontal margin utilities like <code>.ms-auto</code> as spacers:</p>

                            <div class="hstack gap-3">
                                <div class="bg-light border p-1 px-2">First item</div>
                                <div class="bg-light border p-1 px-2 ms-auto">Second item</div>
                                <div class="bg-light border p-1 px-2">Third item</div>
                            </div>
                        </div>

                        <div class="mt-5">
                            <h5 class="font-size-14 mb-3"><i class="mdi mdi-chevron-right text-primary me-1"></i> Horizontal Stacks Examples</h5>
                            <div class="hstack gap-3">
                                <input class="form-control me-auto" type="text" placeholder="Add your item here...">
                                <button type="button" class="btn btn-primary">Submit</button>
                                <div class="vr"></div>
                                <button type="button" class="btn btn-outline-secondary">Reset</button>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Overflow Auto</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-md-flex bg-light">
                    <div class="overflow-auto p-3 mb-0 me-md-3 bg-light" style="height: 100px;">
                        This is an example of using <code>.overflow-auto</code> on an element with set width and height dimensions. By design, this content will vertically scroll.
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Overflow Hidden</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-md-flex bg-light">
                    <div class="overflow-hidden p-3 mb-0 me-md-3 bg-light" style="max-height: 100px;">
                        This is an example of using <code>.overflow-hidden</code> on an element with set width and height dimensions. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">


    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Overflow Visible</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-md-flex bg-light">
                    <div class="overflow-visible p-3 mb-0 me-md-3 bg-light" style="max-height: 100px;">
                        This is an example of using <code>.overflow-visible</code> on an element with set width and height dimensions.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Overflow Scroll</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-md-flex bg-light">
                    <div class="overflow-scroll mb-0 p-3 bg-light" style="max-height: 100px;">
                        This is an example of using <code>.overflow-scroll</code> on an element with set width and height dimensions. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div>

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Arrange Elements</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="position-relative p-5 bg-light m-3 border rounded" style="height: 180px;">
                    <div class="position-absolute top-0 start-0 avatar-sm bg-dark rounded"></div>
                    <div class="position-absolute top-0 end-0 avatar-sm bg-dark rounded"></div>
                    <div class="position-absolute top-50 start-50 avatar-sm bg-dark rounded"></div>
                    <div class="position-absolute bottom-50 end-50 avatar-sm bg-dark rounded"></div>
                    <div class="position-absolute bottom-0 start-0 avatar-sm bg-dark rounded"></div>
                    <div class="position-absolute bottom-0 end-0 avatar-sm bg-dark rounded"></div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Center Elements</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="position-relative m-3 bg-light border rounded" style="height: 180px;">
                    <div class="position-absolute top-0 start-0 translate-middle avatar-sm bg-dark rounded"></div>
                    <div class="position-absolute top-0 start-50 translate-middle avatar-sm bg-dark rounded"></div>
                    <div class="position-absolute top-0 start-100 translate-middle avatar-sm bg-dark rounded"></div>

                    <div class="position-absolute top-50 start-0 translate-middle avatar-sm bg-dark rounded"></div>
                    <div class="position-absolute top-50 start-50 translate-middle avatar-sm bg-dark rounded"></div>
                    <div class="position-absolute top-50 start-100 translate-middle avatar-sm bg-dark rounded"></div>

                    <div class="position-absolute top-100 start-0 translate-middle avatar-sm bg-dark rounded"></div>
                    <div class="position-absolute top-100 start-50 translate-middle avatar-sm bg-dark rounded"></div>
                    <div class="position-absolute top-100 start-100 translate-middle avatar-sm bg-dark rounded"></div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Center Elements</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="position-relative m-3 bg-light border rounded" style="height: 180px;">
                    <div class="position-absolute top-0 start-0 avatar-sm bg-dark rounded "></div>
                    <div class="position-absolute top-0 start-50 translate-middle-x avatar-sm bg-dark rounded"></div>
                    <div class="position-absolute top-0 end-0 avatar-sm bg-dark rounded"></div>

                    <div class="position-absolute top-50 start-0 translate-middle-y avatar-sm bg-dark rounded"></div>
                    <div class="position-absolute top-50 start-50 translate-middle avatar-sm bg-dark rounded"></div>
                    <div class="position-absolute top-50 end-0 translate-middle-y avatar-sm bg-dark rounded"></div>

                    <div class="position-absolute bottom-0 start-0 avatar-sm bg-dark rounded"></div>
                    <div class="position-absolute bottom-0 start-50 translate-middle-x avatar-sm bg-dark rounded"></div>
                    <div class="position-absolute bottom-0 end-0 avatar-sm bg-dark rounded"></div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->


    <div class="col-xl-6">
        <div class="card card-h-100">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Shadows</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="shadow-none p-3 mb-3 bg-light rounded">No shadow</div>
                <div class="shadow-sm p-3 mb-3 bg-light rounded">Small shadow</div>
                <div class="shadow p-3 mb-3 bg-light rounded">Regular shadow</div>
                <div class="shadow-lg p-3 mb-0 bg-light rounded">Larger shadow</div>
            </div><!-- end cardbody -->
        </div><!-- end card -->
    </div><!-- end col -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Width</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="w-25 p-3 bg-light">Width 25%</div>
                <div class="w-50 p-3 bg-light">Width 50%</div>
                <div class="w-75 p-3 bg-light">Width 75%</div>
                <div class="w-100 p-3 bg-light">Width 100%</div>
                <div class="w-auto p-3 bg-light">Width auto</div>
            </div><!-- end cardbody -->
        </div><!-- end card -->
    </div><!-- end col -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Height</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="" style="height: 264px;">
                    <div class="h-25 p-3 bg-light d-inline-block" style="width: 92px;">Height25%</div>
                    <div class="h-50 p-3 bg-light d-inline-block" style="width: 92px;">Height 50%</div>
                    <div class="h-75 p-3 bg-light d-inline-block" style="width: 92px;">Height 75%</div>
                    <div class="h-100 p-3 bg-light d-inline-block" style="width: 92px;">Height 100%</div>
                    <div class="h-auto p-3 bg-light d-inline-block" style="width: 92px;">Height auto</div>
                </div>
            </div><!-- end cardbody -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Line Height</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <p class="lh-1">This is a long paragraph written to show how the line-height of an element is affected by our utilities.</p>
                <p class="lh-sm">This is a long paragraph written to show how the line-height of an element is affected by our utilities.</p>
                <p class="lh-base">This is a long paragraph written to show how the line-height of an element is affected by our utilities.</p>
                <p class="lh-lg mb-0">This is a long paragraph written to show how the line-height of an element is affected by our utilities.</p>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
    <div class="col-xl-6">
        <div class="card card-h-100">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Font Weight and Italics</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <p class="fw-bold mb-2">Bold text.</p>
                <p class="fw-bolder mb-2">Bolder weight text (relative to the parent element).</p>
                <p class="fw-normal mb-2">Normal weight text.</p>
                <p class="fw-light mb-2">Light weight text.</p>
                <p class="fw-lighter mb-2">Lighter weight text (relative to the parent element).</p>
                <p class="fst-italic mb-2">Italic text.</p>
                <p class="fst-normal mb-0">Text with normal font style</p>
            </div>
        </div><!-- end card -->
    </div><!-- end col -->

</div><!-- end row -->

<div class="row">

    <div class="col-xl-6">
        <div class="card card-h-100">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Display Property</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-inline p-2 bg-primary text-white">d-inline</div>
                <div class="d-inline p-2 bg-dark text-white">d-inline</div>
            </div>

            <div class="card-body">
                <span class="d-block p-2 bg-primary text-white">d-block</span>
                <span class="d-block p-2 bg-dark text-white">d-block</span>
            </div>
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Text Transform</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <p class="text-lowercase">Lowercased text.</p>
                <p class="text-uppercase">Uppercased text.</p>
                <p class="text-capitalize mb-0">CapiTaliZed text.</p>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Text Decoration</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <p class="text-decoration-underline">This text has a line underneath it.</p>
                <p class="text-decoration-line-through">This text has a line going through it.</p>
                <a href="#" class="text-decoration-none mb-0">This link has its text decoration removed</a>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card card-h-100">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Visibility</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="visible">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                <div class="invisible">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
            </div><!-- end cardbody -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Vertical Alignment</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <table style="height: 100px;">
                    <tbody>
                        <tr>
                            <td class="align-baseline">baseline</td>
                            <td class="align-top">top</td>
                            <td class="align-middle">middle</td>
                            <td class="align-bottom">bottom</td>
                            <td class="align-text-top">text-top</td>
                            <td class="align-text-bottom">text-bottom</td>
                        </tr>
                    </tbody>
                </table>
            </div><!-- end cardbody -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card card-h-100">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Monospace & Reset Color</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <p class="font-monospace mb-0">This is in monospace</p>
            </div><!-- end card body -->
            <div class="card-body pt-0">
                <p class="text-muted mb-0">
                    Muted text with a <a href="#" class="text-reset text-decoration-underline">reset link</a>.
                </p>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->


</div>

@endsection
@section('script')

<script src="{{ URL::asset('assets/js/app.js') }}"></script>

@endsection
