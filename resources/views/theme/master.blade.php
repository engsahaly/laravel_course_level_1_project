<!DOCTYPE html>
<html lang="en">

@include('theme.partials.head')

<body>
    @include('theme.partials.header')

    <main class="site-main">
        @include('theme.partials.hero')

        <!--================ Blog slider start =================-->
        <section>
            <div class="container">
                <div class="owl-carousel owl-theme blog-slider">
                    <div class="card blog__slide text-center">
                        <div class="blog__slide__img">
                            <img class="card-img rounded-0"
                                src="{{ asset('assets') }}/img/blog/blog-slider/blog-slide1.png" alt="">
                        </div>
                        <div class="blog__slide__content">
                            <a class="blog__slide__label" href="#">Fashion</a>
                            <h3><a href="#">New york fashion week's continued the evolution</a></h3>
                            <p>2 days ago</p>
                        </div>
                    </div>
                    <div class="card blog__slide text-center">
                        <div class="blog__slide__img">
                            <img class="card-img rounded-0"
                                src="{{ asset('assets') }}/img/blog/blog-slider/blog-slide2.png" alt="">
                        </div>
                        <div class="blog__slide__content">
                            <a class="blog__slide__label" href="#">Fashion</a>
                            <h3><a href="#">New york fashion week's continued the evolution</a></h3>
                            <p>2 days ago</p>
                        </div>
                    </div>
                    <div class="card blog__slide text-center">
                        <div class="blog__slide__img">
                            <img class="card-img rounded-0"
                                src="{{ asset('assets') }}/img/blog/blog-slider/blog-slide3.png" alt="">
                        </div>
                        <div class="blog__slide__content">
                            <a class="blog__slide__label" href="#">Fashion</a>
                            <h3><a href="#">New york fashion week's continued the evolution</a></h3>
                            <p>2 days ago</p>
                        </div>
                    </div>
                    <div class="card blog__slide text-center">
                        <div class="blog__slide__img">
                            <img class="card-img rounded-0"
                                src="{{ asset('assets') }}/img/blog/blog-slider/blog-slide1.png" alt="">
                        </div>
                        <div class="blog__slide__content">
                            <a class="blog__slide__label" href="#">Fashion</a>
                            <h3><a href="#">New york fashion week's continued the evolution</a></h3>
                            <p>2 days ago</p>
                        </div>
                    </div>
                    <div class="card blog__slide text-center">
                        <div class="blog__slide__img">
                            <img class="card-img rounded-0"
                                src="{{ asset('assets') }}/img/blog/blog-slider/blog-slide2.png" alt="">
                        </div>
                        <div class="blog__slide__content">
                            <a class="blog__slide__label" href="#">Fashion</a>
                            <h3><a href="#">New york fashion week's continued the evolution</a></h3>
                            <p>2 days ago</p>
                        </div>
                    </div>
                    <div class="card blog__slide text-center">
                        <div class="blog__slide__img">
                            <img class="card-img rounded-0"
                                src="{{ asset('assets') }}/img/blog/blog-slider/blog-slide3.png" alt="">
                        </div>
                        <div class="blog__slide__content">
                            <a class="blog__slide__label" href="#">Fashion</a>
                            <h3><a href="#">New york fashion week's continued the evolution</a></h3>
                            <p>2 days ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Blog slider end =================-->

        <!--================ Start Blog Post Area =================-->
        <section class="blog-post-area section-margin mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="single-recent-blog-post">
                            <div class="thumb">
                                <img class="img-fluid" src="{{ asset('assets') }}/img/blog/blog1.png" alt="">
                                <ul class="thumb-info">
                                    <li><a href="#"><i class="ti-user"></i>Admin</a></li>
                                    <li><a href="#"><i class="ti-notepad"></i>January 12,2019</a></li>
                                    <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                                </ul>
                            </div>
                            <div class="details mt-20">
                                <a href="blog-single.html">
                                    <h3>Woman claims husband wants to name baby girl
                                        after his ex-lover sparking.</h3>
                                </a>
                                <p>Over yielding doesn't so moved green saw meat hath fish he him from given yielding
                                    lesser cattle were fruitful lights. Given let have, lesser their made him above
                                    gathered dominion sixth. Creeping deep said can't called second. Air created seed
                                    heaven sixth created living</p>
                                <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>

                        <div class="single-recent-blog-post">
                            <div class="thumb">
                                <img class="img-fluid" src="{{ asset('assets') }}/img/blog/blog2.png" alt="">
                                <ul class="thumb-info">
                                    <li><a href="#"><i class="ti-user"></i>Admin</a></li>
                                    <li><a href="#"><i class="ti-notepad"></i>January 12,2019</a></li>
                                    <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                                </ul>
                            </div>
                            <div class="details mt-20">
                                <a href="blog-single.html">
                                    <h3>Woman claims husband wants to name baby girl
                                        after his ex-lover sparking.</h3>
                                </a>
                                <p>Over yielding doesn't so moved green saw meat hath fish he him from given yielding
                                    lesser cattle were fruitful lights. Given let have, lesser their made him above
                                    gathered dominion sixth. Creeping deep said can't called second. Air created seed
                                    heaven sixth created living</p>
                                <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>

                        <div class="single-recent-blog-post">
                            <div class="thumb">
                                <img class="img-fluid" src="{{ asset('assets') }}/img/blog/blog3.png" alt="">
                                <ul class="thumb-info">
                                    <li><a href="#"><i class="ti-user"></i>Admin</a></li>
                                    <li><a href="#"><i class="ti-notepad"></i>January 12,2019</a></li>
                                    <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                                </ul>
                            </div>
                            <div class="details mt-20">
                                <a href="blog-single.html">
                                    <h3>Tourist deaths in Costa Rica jeopardize safe dest
                                        ination reputation all time. </h3>
                                </a>
                                <p>Over yielding doesn't so moved green saw meat hath fish he him from given yielding
                                    lesser cattle were fruitful lights. Given let have, lesser their made him above
                                    gathered dominion sixth. Creeping deep said can't called second. Air created seed
                                    heaven sixth created living</p>
                                <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>

                        <div class="single-recent-blog-post">
                            <div class="thumb">
                                <img class="img-fluid" src="{{ asset('assets') }}/img/blog/blog4.png" alt="">
                                <ul class="thumb-info">
                                    <li><a href="#"><i class="ti-user"></i>Admin</a></li>
                                    <li><a href="#"><i class="ti-notepad"></i>January 12,2019</a></li>
                                    <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                                </ul>
                            </div>
                            <div class="details mt-20">
                                <a href="blog-single.html">
                                    <h3>Tourist deaths in Costa Rica jeopardize safe dest
                                        ination reputation all time. </h3>
                                </a>
                                <p>Over yielding doesn't so moved green saw meat hath fish he him from given yielding
                                    lesser cattle were fruitful lights. Given let have, lesser their made him above
                                    gathered dominion sixth. Creeping deep said can't called second. Air created seed
                                    heaven sixth created living</p>
                                <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
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
        </section>
        <!--================ End Blog Post Area =================-->
    </main>

    @include('theme.partials.footer')

    @include('theme.partials.scripts')
</body>

</html>
