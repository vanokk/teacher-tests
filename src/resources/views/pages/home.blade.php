@extends('layouts.app')

@section('title', 'Тесты')

@section('after-navbar')
    <!-- Intro Section -->
    <div class="view hm-indigo-light jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(https://mdbootstrap.com/img/Photos/Others/images/93b.jpg);">
        <div class="full-bg-img">
            <div class="container flex-center">
                <div class="row pt-5 mt-3">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h1 class="h1-reponsive white-text font-up font-bold mb-3 wow fadeInDown" data-wow-delay="0.3s">
                                <strong>Minimalist intro</strong>
                            </h1>
                            <hr class="hr-light mt-4 wow fadeInDown" data-wow-delay="0.4s">
                            <h5 class="font-up mb-5 white-text wow fadeInDown" data-wow-delay="0.4s">
                                <strong>Photography & design</strong>
                            </h5>
                            <a class="btn btn-outline-white wow fadeInDown" data-wow-delay="0.4s">Blog</a>
                            <a class="btn btn-outline-white wow fadeInDown" data-wow-delay="0.4s">About me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('content')
    <!--Page heading-->
    <div class="row wow fadeIn" data-wow-delay="0.2s">
        <div class="col-md-12 mt-5">
            <h2 class="h1-responsive font-bold">Page heading
                <small class="text-muted">secondary text</small>
            </h2>
        </div>
    </div>
    <!--/.Page heading-->
    <hr>

    <!--First row-->
    <div class="row mt-5 wow fadeIn" data-wow-delay="0.2s">
        <!--Featured image-->
        <div class="col-lg-7">
            <div class="view overlay hm-white-light z-depth-1 rounded">
                <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(129).jpg" class="img-fluid" alt="">
                <div class="mask"></div>
            </div>
        </div>
        <!--/.Featured image-->

        <!--Post excerpt-->
        <div class="col-lg-5">
            <a href="#!">
                <h2 class="post-title font-bold">Post title</h2>
            </a>
            <h6 class="dark-grey-text font-bold font-small">12/04/2018</h6>
            <p class="my-4 dark-grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                ut aliquip ex ea commodo consequat...</p>
            <div class="read-more">
                <a href="#!" class="btn btn-primary btn-md">Read more</a>
            </div>
        </div>
        <!--/.Post excerpt-->
    </div>
    <!--/.First row-->
    <hr class="extra-margin my-5">

    <!--Second row-->
    <div class="row wow fadeIn" data-wow-delay="0.2s">
        <!--Featured image-->
        <div class="col-lg-7">
            <div class="view overlay hm-white-light z-depth-1 rounded">
                <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(146).jpg" class="img-fluid" alt="">
                <div class="mask"></div>
            </div>
        </div>
        <!--/.Featured image-->

        <!--Post excerpt-->
        <div class="col-lg-5">
            <a href="#!">
                <h2 class="post-title font-bold">Post title</h2>
            </a>
            <h6 class="dark-grey-text font-bold font-small">12/04/2018</h6>
            <p class="my-4 dark-grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                ut aliquip ex ea commodo consequat...</p>
            <div class="read-more">
                <a href="#!" class="btn btn-primary btn-md">Read more</a>
            </div>
        </div>
        <!--/.Post excerpt-->
    </div>
    <!--/.Second row-->
    <hr class="extra-margin my-5">

    <!--Third row-->
    <div class="row wow fadeIn" data-wow-delay="0.2s">
        <!--Featured image-->
        <div class="col-lg-7">
            <div class="view overlay hm-white-light z-depth-1 rounded">
                <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(119).jpg" class="img-fluid" alt="">
                <div class="mask"></div>
            </div>
        </div>
        <!--/.Featured image-->

        <!--Post excerpt-->
        <div class="col-lg-5">
            <a href="#!">
                <h2 class="post-title font-bold">Post title</h2>
            </a>
            <h6 class="dark-grey-text font-bold font-small">12/04/2018</h6>
            <p class="my-4 dark-grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                ut aliquip ex ea commodo consequat...</p>
            <div class="read-more">
                <a href="#!" class="btn btn-primary btn-md">Read more</a>
            </div>
        </div>
        <!--/.Post excerpt-->
    </div>
    <!--/.Third row-->
    <hr class="extra-margin my-5">

    <!--Fourth row-->
    <div class="row wow fadeIn" data-wow-delay="0.2s">
        <!--Featured image-->
        <div class="col-lg-7">
            <div class="view overlay hm-white-light z-depth-1 rounded">
                <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(99).jpg" class="img-fluid" alt="">
                <div class="mask"></div>
            </div>
        </div>
        <!--/.Featured image-->

        <!--Post excerpt-->
        <div class="col-lg-5">
            <a href="#!">
                <h2 class="post-title font-bold">Post title</h2>
            </a>
            <h6 class="dark-grey-text font-bold font-small">12/04/2018</h6>
            <p class="my-4 dark-grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                ut aliquip ex ea commodo consequat...</p>
            <div class="read-more">
                <a href="#!" class="btn btn-primary btn-md">Read more</a>
            </div>
        </div>
        <!--/.Post excerpt-->
    </div>
    <!--/.Fourth row-->
    <hr class="extra-margin my-5">

    <!--Fifth row-->
    <div class="row mb-4 wow fadeIn" data-wow-delay="0.2s">
        <!--Featured image-->
        <div class="col-lg-7">
            <div class="view overlay hm-white-light z-depth-1 rounded">
                <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(116).jpg" class="img-fluid" alt="">
                <div class="mask"></div>
            </div>
        </div>
        <!--/.Featured image-->

        <!--Post excerpt-->
        <div class="col-lg-5">
            <a href="#!">
                <h2 class="post-title font-bold">Post title</h2>
            </a>
            <h6 class="dark-grey-text font-bold font-small">12/04/2018</h6>
            <p class="my-4 dark-grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                ut aliquip ex ea commodo consequat...</p>
            <div class="read-more">
                <a href="#!" class="btn btn-primary btn-md">Read more</a>
            </div>
        </div>
        <!--/.Post excerpt-->
    </div>
    <!--/.Fifth row-->

    <hr>

    <!--Pagination-->
    <nav class="row mt-4 flex-center wow fadeIn" data-wow-delay="0.2s">
        <ul class="pagination">
            <li class="page-item disabled">
                <a class="page-link" href="#!" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item active">
                <a class="page-link" href="#!">1
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#!">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#!">3</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#!">4</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#!">5</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#!" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>
    <!--/.Pagination-->
@stop