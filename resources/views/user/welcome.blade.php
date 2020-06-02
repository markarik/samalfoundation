@extends('user.layouts.app')
@section('content')
    <div class="site-wrap" id="home-section">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        @include('user.includes.header')

        @include('user.includes.carousel')
        @include('user.includes.intro')
        @include('user.includes.about')
        @include('user.includes.discover')


        <div class="site-section bg-image overlay"
             style="background-image: url('{{asset('template/images/hero_1_no-text.jpg')}}');" id="donate-section">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-5 text-center">
                        <h2 class="text-white mb-4">Make A Donation Now! You May Change Lives Forever</h2>
                        <p><a href="#" class="btn btn-primary px-4 py-3 btn-block">Donate Now</a></p>
                    </div>
                </div>
            </div>
        </div>


        @include('user.includes.donation')
        @include('user.includes.leadership')
        @include('user.includes.testimonials')
        @include('user.includes.blog')
        @include('user.includes.contacts')
        @include('user.includes.footer')


    </div>

@endsection