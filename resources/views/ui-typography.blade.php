@extends('layouts.master')
@section('title')Typography @endsection
@section('content')

    {{-- breadcrumbs  --}}
    @section('breadcrumb')
        @component('components.breadcrumb')
            @slot('li_1') UI Elements @endslot
            @slot('title') Typography @endslot
        @endcomponent
    @endsection

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start">
                    <div class="flex-shrink-0 ms-3 me-4">
                        <h1 class="display-4 mb-0 ff-primary">Aa</h1>
                    </div>
                    <div class="flex-grow-1 align-self-center">
                        <p class="mb-2">Font Family Primary</p>
                        <h5 class="mb-0 ff-primary">"Nunito Sans"</h5>
                    </div>
                </div>
            </div><!-- end cardbody -->
        </div><!-- end card -->
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start">
                    <div class="flex-shrink-0 ms-3 me-4">
                        <h1 class="display-4 mb-0">Aa</h1>
                    </div>
                    <div class="flex-grow-1 align-self-center">
                        <p class="mb-2">Font Family Secondary</p>
                        <h5 class="mb-0">"Noto Sans", sans-serif</h5>
                    </div>
                </div>
            </div><!-- end cardbody -->
        </div><!-- end card -->
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Headings</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <h1 class="mb-3">h1. Bootstrap heading <small class="text-muted">2.25rem (36px)</small></h1>

                <h2 class="mb-3">h2. Bootstrap heading <small class="text-muted">1.8rem (28.8px)</small></h2>

                <h3 class="mb-3">h3. Bootstrap heading <small class="text-muted">1.575rem (25.2px)</small></h3>

                <h4 class="mb-3">h4. Bootstrap heading <small class="text-muted">1.35rem (21.6px)</small></h4>

                <h5 class="mb-3">h5. Bootstrap heading <small class="text-muted">1.125rem (18px)</small></h5>

                <h6>h6. Bootstrap heading <small class="text-muted">0.9rem (14.4px)</small></h6>
            </div><!-- end card body-->
        </div><!-- end card -->
    </div><!-- end col -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Display Headings</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <h1 class="display-1">Display 1</h1>
                <h1 class="display-2">Display 2</h1>
                <h1 class="display-3">Display 3</h1>
                <h1 class="display-4">Display 4</h1>
                <h1 class="display-5">Display 5</h1>
                <h1 class="display-6 mb-0">Display 6</h1>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Blockquotes</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-6">
                        <div>
                            <blockquote class="blockquote font-size-16 mb-0">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <footer class="blockquote-footer mt-2">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                            </blockquote>
                        </div>
                    </div><!-- end col -->
                    <div class="col-xl-6">
                        <div class="mt-4 mt-lg-0">
                            <blockquote class="blockquote  blockquote-reverse font-size-16 mb-0">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <footer class="blockquote-footer mt-2">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                            </blockquote>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-12">
        <div class="mt-3 mb-4">
            <h5 class="mb-0 pb-1 text-decoration-underline">Blockquote Background Color</h5>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header justify-content-between d-flex align-items-center">
                        <h4 class="card-title mb-0">Blockquotes Primary</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <blockquote class="blockquote custom-blockpuote blockpuote-primary rounded mb-0">
                            <p class="font-size-14 text-dark mb-2">At vero eos et accusamus dignissimos ducimus blanditiis.</p>
                            <footer class="blockquote-footer font-size-13 mt-2"> Angie Burt <cite title="Source Title">Designer</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header justify-content-between d-flex align-items-center">
                        <h4 class="card-title mb-0">Blockquotes Success</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <blockquote class="blockquote custom-blockpuote blockpuote-success rounded mb-0">
                            <p class="font-size-14 text-dark mb-2">At vero eos et accusamus dignissimos ducimus blanditiis.</p>
                            <footer class="blockquote-footer font-size-13 mt-2"> Angie Burt <cite title="Source Title">Designer</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header justify-content-between d-flex align-items-center">
                        <h4 class="card-title mb-0">Blockquotes Danger</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <blockquote class="blockquote custom-blockpuote blockpuote-danger rounded mb-0">
                            <p class="font-size-14 text-dark mb-2">At vero eos et accusamus dignissimos ducimus blanditiis.</p>
                            <footer class="blockquote-footer font-size-13 mt-2"> Angie Burt <cite title="Source Title">Designer</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header justify-content-between d-flex align-items-center">
                        <h4 class="card-title mb-0">Blockquotes Info</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <blockquote class="blockquote custom-blockpuote blockpuote-info rounded mb-0">
                            <p class="font-size-14 text-dark mb-2">At vero eos et accusamus dignissimos ducimus blanditiis.</p>
                            <footer class="blockquote-footer font-size-13 mt-2"> Angie Burt <cite title="Source Title">Designer</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header justify-content-between d-flex align-items-center">
                        <h4 class="card-title mb-0">Blockquotes Warning</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <blockquote class="blockquote custom-blockpuote blockpuote-warning rounded mb-0">
                            <p class="font-size-14 text-dark mb-2">At vero eos et accusamus dignissimos ducimus blanditiis.</p>
                            <footer class="blockquote-footer font-size-13 mt-2"> Angie Burt <cite title="Source Title">Designer</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header justify-content-between d-flex align-items-center">
                        <h4 class="card-title mb-0">Blockquotes Secondary</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <blockquote class="blockquote custom-blockpuote blockpuote-secondary rounded mb-0">
                            <p class="font-size-14 text-dark mb-2">At vero eos et accusamus dignissimos ducimus blanditiis.</p>
                            <footer class="blockquote-footer font-size-13 mt-2"> Angie Burt <cite title="Source Title">Designer</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header justify-content-between d-flex align-items-center">
                        <h4 class="card-title mb-0">Blockquotes Dark</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <blockquote class="blockquote custom-blockpuote blockpuote-dark rounded mb-0">
                            <p class="font-size-14 text-dark mb-2">At vero eos et accusamus dignissimos ducimus blanditiis.</p>
                            <footer class="blockquote-footer font-size-13 mt-2"> Angie Burt <cite title="Source Title">Designer</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header justify-content-between d-flex align-items-center">
                        <h4 class="card-title mb-0">Blockquotes Light</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <blockquote class="blockquote custom-blockpuote blockpuote-light rounded mb-0">
                            <p class="font-size-14 text-dark mb-2">At vero eos et accusamus dignissimos ducimus blanditiis.</p>
                            <footer class="blockquote-footer text-dark font-size-13 mt-2"> Angie Burt <cite title="Source Title">Designer</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header justify-content-between d-flex align-items-center">
                        <h4 class="card-title mb-0">Blockquotes Purple</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <blockquote class="blockquote custom-blockpuote blockpuote-purple rounded mb-0">
                            <p class="font-size-14 text-dark mb-2">At vero eos et accusamus dignissimos ducimus blanditiis.</p>
                            <footer class="blockquote-footer font-size-13 mt-2"> Angie Burt <cite title="Source Title">Designer</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-12">
        <div class="mt-3 mb-4">
            <h5 class="mb-0 pb-1 text-decoration-underline">Blockquote Border Color</h5>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header justify-content-between d-flex align-items-center">
                        <h4 class="card-title mb-0">Blockquotes Outline Primary</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <blockquote class="blockquote custom-blockpuote blockpuote-outline-primary rounded mb-0">
                            <p class="font-size-14 text-dark mb-2">At vero eos et accusamus dignissimos ducimus blanditiis.</p>
                            <footer class="blockquote-footer font-size-13 mt-2"> Angie Burt <cite title="Source Title">Designer</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header justify-content-between d-flex align-items-center">
                        <h4 class="card-title mb-0">Blockquotes Outline Success</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <blockquote class="blockquote custom-blockpuote blockpuote-outline-success rounded mb-0">
                            <p class="font-size-14 text-dark mb-2">At vero eos et accusamus dignissimos ducimus blanditiis.</p>
                            <footer class="blockquote-footer font-size-13 mt-2"> Angie Burt <cite title="Source Title">Designer</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header justify-content-between d-flex align-items-center">
                        <h4 class="card-title mb-0">Blockquotes Outline Danger</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <blockquote class="blockquote custom-blockpuote blockpuote-outline-danger rounded mb-0">
                            <p class="font-size-14 text-dark mb-2">At vero eos et accusamus dignissimos ducimus blanditiis.</p>
                            <footer class="blockquote-footer font-size-13 mt-2"> Angie Burt <cite title="Source Title">Designer</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header justify-content-between d-flex align-items-center">
                        <h4 class="card-title mb-0">Blockquotes Outline Info</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <blockquote class="blockquote custom-blockpuote blockpuote-outline-info rounded mb-0">
                            <p class="font-size-14 text-dark mb-2">At vero eos et accusamus dignissimos ducimus blanditiis.</p>
                            <footer class="blockquote-footer font-size-13 mt-2"> Angie Burt <cite title="Source Title">Designer</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header justify-content-between d-flex align-items-center">
                        <h4 class="card-title mb-0">Blockquotes Outline Warning</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <blockquote class="blockquote custom-blockpuote blockpuote-outline-warning rounded mb-0">
                            <p class="font-size-14 text-dark mb-2">At vero eos et accusamus dignissimos ducimus blanditiis.</p>
                            <footer class="blockquote-footer font-size-13 mt-2"> Angie Burt <cite title="Source Title">Designer</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header justify-content-between d-flex align-items-center">
                        <h4 class="card-title mb-0">Blockquotes Outline Secondary</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <blockquote class="blockquote custom-blockpuote blockpuote-outline-secondary rounded mb-0">
                            <p class="font-size-14 text-dark mb-2">At vero eos et accusamus dignissimos ducimus blanditiis.</p>
                            <footer class="blockquote-footer font-size-13 mt-2"> Angie Burt <cite title="Source Title">Designer</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header justify-content-between d-flex align-items-center">
                        <h4 class="card-title mb-0">Blockquotes Outline Dark</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <blockquote class="blockquote custom-blockpuote blockpuote-outline-dark rounded mb-0">
                            <p class="font-size-14 text-dark mb-2">At vero eos et accusamus dignissimos ducimus blanditiis.</p>
                            <footer class="blockquote-footer font-size-13 mt-2"> Angie Burt <cite title="Source Title">Designer</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header justify-content-between d-flex align-items-center">
                        <h4 class="card-title mb-0">Blockquotes Outline Light</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <blockquote class="blockquote custom-blockpuote blockpuote-outline-light rounded mb-0">
                            <p class="font-size-14 text-dark mb-2">At vero eos et accusamus dignissimos ducimus blanditiis.</p>
                            <footer class="blockquote-footer text-dark font-size-13 mt-2"> Angie Burt <cite title="Source Title">Designer</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header justify-content-between d-flex align-items-center">
                        <h4 class="card-title mb-0">Blockquotes Outline Purple</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <blockquote class="blockquote custom-blockpuote blockpuote-outline-purple rounded mb-0">
                            <p class="font-size-14 text-dark mb-2">At vero eos et accusamus dignissimos ducimus blanditiis.</p>
                            <footer class="blockquote-footer font-size-13 mt-2"> Angie Burt <cite title="Source Title">Designer</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Description List Alignment</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <dl class="row mb-0">
                    <dt class="col-sm-3">Description lists</dt>
                    <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

                    <dt class="col-sm-3">Euismod</dt>
                    <dd class="col-sm-9">Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                    <dd class="col-sm-9 offset-sm-3">Donec id elit non mi porta gravida at eget metus.</dd>

                    <dt class="col-sm-3">Malesuada porta</dt>
                    <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>

                    <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                    <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>

                    <dt class="col-sm-3">Nesting</dt>
                    <dd class="col-sm-9 mb-0">
                        <dl class="row mb-0">
                            <dt class="col-sm-4">Nested definition list</dt>
                            <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
                        </dl>
                    </dd>
                </dl>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Inline Text Elements</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <p class="lead">
                    Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                </p>
                <p>You can use the mark tag to <mark>highlight</mark> text.</p>
                <p><del>This line of text is meant to be treated as deleted text.</del></p>
                <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
                <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
                <p><u>This line of text will render as underlined</u></p>
                <p><small>This line of text is meant to be treated as fine print.</small></p>
                <p><strong>This line rendered as bold text.</strong></p>
                <p class="mb-0"><em>This line rendered as italicized text.</em></p>
            </div>
        </div><!-- end card -->
    </div> <!-- end col -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Unstyled List</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <ul class="list-unstyled mb-0">
                    <li>Integer molestie lorem at massa</li>
                    <li>Nulla volutpat aliquam velit
                        <ul>
                            <li>Phasellus iaculis neque</li>
                            <li>Purus sodales ultricies</li>
                            <li>Vestibulum laoreet porttitor sem</li>
                        </ul>
                    </li>
                    <li>Faucibus porta lacus fringilla vel</li>
                </ul>
            </div><!-- end card body-->
        </div><!-- end card -->

        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Inline List</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">Lorem ipsum</li>
                    <li class="list-inline-item">Phasellus iaculis</li>
                    <li class="list-inline-item">Nulla volutpat</li>
                </ul>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection
@section('script')

<script src="{{ URL::asset('assets/js/app.js') }}"></script>

@endsection
