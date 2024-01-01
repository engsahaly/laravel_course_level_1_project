@extends('theme.master')
@section('title', 'Category')
@section('categories-active', 'active')

@section('content')
    @include('theme.partials.hero', ['title' => 'Category'])

    <!--================ Start Blog Post Area =================-->
    <section class="blog-post-area section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="single-recent-blog-post card-view">
                                <div class="thumb">
                                    <img class="card-img rounded-0" src="{{ asset('assets') }}/img/blog/thumb/thumb-card1.png"
                                        alt="">
                                    <ul class="thumb-info">
                                        <li><a href="#"><i class="ti-user"></i>Admin</a></li>
                                        <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="details mt-20">
                                    <a href="blog-single.html">
                                        <h3>Fast cars and rickety bridges as
                                            he grand tour returns</h3>
                                    </a>
                                    <p>Vel aliquam quis, nulla pede mi commodo no tristique nam hac luctus torquent
                                        velit felis lone commodo pellentesque</p>
                                    <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-recent-blog-post card-view">
                                <div class="thumb">
                                    <img class="card-img rounded-0"
                                        src="{{ asset('assets') }}/img/blog/thumb/thumb-card2.png" alt="">
                                    <ul class="thumb-info">
                                        <li><a href="#"><i class="ti-user"></i>Admin</a></li>
                                        <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="details mt-20">
                                    <a href="blog-single.html">
                                        <h3>Harvey Weinstein's senual assault
                                            trial set for May</h3>
                                    </a>
                                    <p>Vel aliquam quis, nulla pede mi commodo no tristique nam hac luctus torquent
                                        velit felis lone commodo pellentesque</p>
                                    <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-recent-blog-post card-view">
                                <div class="thumb">
                                    <img class="card-img rounded-0"
                                        src="{{ asset('assets') }}/img/blog/thumb/thumb-card3.png" alt="">
                                    <ul class="thumb-info">
                                        <li><a href="#"><i class="ti-user"></i>Admin</a></li>
                                        <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="details mt-20">
                                    <a href="blog-single.html">
                                        <h3>Fast cars and rickety bridges as
                                            he grand tour returns</h3>
                                    </a>
                                    <p>Vel aliquam quis, nulla pede mi commodo no tristique nam hac luctus torquent
                                        velit felis lone commodo pellentesque</p>
                                    <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-recent-blog-post card-view">
                                <div class="thumb">
                                    <img class="card-img rounded-0"
                                        src="{{ asset('assets') }}/img/blog/thumb/thumb-card4.png" alt="">
                                    <ul class="thumb-info">
                                        <li><a href="#"><i class="ti-user"></i>Admin</a></li>
                                        <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="details mt-20">
                                    <a href="blog-single.html">
                                        <h3>Harvey Weinstein's senual assault
                                            trial set for May</h3>
                                    </a>
                                    <p>Vel aliquam quis, nulla pede mi commodo no tristique nam hac luctus torquent
                                        velit felis lone commodo pellentesque</p>
                                    <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-recent-blog-post card-view">
                                <div class="thumb">
                                    <img class="card-img rounded-0"
                                        src="{{ asset('assets') }}/img/blog/thumb/thumb-card5.png" alt="">
                                    <ul class="thumb-info">
                                        <li><a href="#"><i class="ti-user"></i>Admin</a></li>
                                        <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="details mt-20">
                                    <a href="blog-single.html">
                                        <h3>Fast cars and rickety bridges as
                                            he grand tour returns</h3>
                                    </a>
                                    <p>Vel aliquam quis, nulla pede mi commodo no tristique nam hac luctus torquent
                                        velit felis lone commodo pellentesque</p>
                                    <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-recent-blog-post card-view">
                                <div class="thumb">
                                    <img class="card-img rounded-0"
                                        src="{{ asset('assets') }}/img/blog/thumb/thumb-card6.png" alt="">
                                    <ul class="thumb-info">
                                        <li><a href="#"><i class="ti-user"></i>Admin</a></li>
                                        <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="details mt-20">
                                    <a href="blog-single.html">
                                        <h3>Harvey Weinstein's senual assault
                                            trial set for May</h3>
                                    </a>
                                    <p>Vel aliquam quis, nulla pede mi commodo no tristique nam hac luctus torquent
                                        velit felis lone commodo pellentesque</p>
                                    <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-recent-blog-post card-view">
                                <div class="thumb">
                                    <img class="card-img rounded-0"
                                        src="{{ asset('assets') }}/img/blog/thumb/thumb-card7.png" alt="">
                                    <ul class="thumb-info">
                                        <li><a href="#"><i class="ti-user"></i>Admin</a></li>
                                        <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="details mt-20">
                                    <a href="blog-single.html">
                                        <h3>Fast cars and rickety bridges as
                                            he grand tour returns</h3>
                                    </a>
                                    <p>Vel aliquam quis, nulla pede mi commodo no tristique nam hac luctus torquent
                                        velit felis lone commodo pellentesque</p>
                                    <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-recent-blog-post card-view">
                                <div class="thumb">
                                    <img class="card-img rounded-0"
                                        src="{{ asset('assets') }}/img/blog/thumb/thumb-card8.png" alt="">
                                    <ul class="thumb-info">
                                        <li><a href="#"><i class="ti-user"></i>Admin</a></li>
                                        <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="details mt-20">
                                    <a href="blog-single.html">
                                        <h3>Harvey Weinstein's senual assault
                                            trial set for May</h3>
                                    </a>
                                    <p>Vel aliquam quis, nulla pede mi commodo no tristique nam hac luctus torquent
                                        velit felis lone commodo pellentesque</p>
                                    <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="blog-pagination justify-content-center d-flex">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Previous">
                                            <span aria-hidden="true">
                                                <i class="ti-angle-left"></i>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Next">
                                            <span aria-hidden="true">
                                                <i class="ti-angle-right"></i>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                @include('theme.partials.sidebar')
            </div>
        </div>
    </section>
    <!--================ End Blog Post Area =================-->
@endsection
