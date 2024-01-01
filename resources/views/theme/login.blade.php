@extends('theme.master')
@section('title', 'Login')

@section('content')
    @include('theme.partials.hero', ['title' => 'Login'])

    <!-- ================ contact section start ================= -->
    <section class="section-margin--small section-margin">
        <div class="container">
            <div class="row">
                <div class="col-6 mx-auto">
                    <form action="#/" class="form-contact contact_form" action="contact_process.php" method="post"
                        id="contactForm" novalidate="novalidate">
                        <div class="form-group">
                            <input class="form-control border" name="email" id="email" type="email"
                                placeholder="Enter email address">
                        </div>
                        <div class="form-group">
                            <input class="form-control border" name="password" id="name" type="password"
                                placeholder="Enter your password">
                        </div>
                        <div class="form-group text-center text-md-right mt-3">
                            <button type="submit" class="button button--active button-contactForm">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
@endsection
