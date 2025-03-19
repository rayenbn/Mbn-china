@extends('layouts.theme')
@section('content')
<!-- Breadcrumbs -->
<div class="mil-inner-banner mil-p-0-120">
    <div class="mil-banner-content mil-center mil-up">
        <div class="container">
            <ul class="mil-breadcrumbs mil-center mil-mb-60">
                <li><a href="home-1.html">{{ __('Homepage')}}</a></li>
                <li><a href="contact.html">{{ __('Contact')}}</a></li>
            </ul>
            <h1 class="mil-mb-60">{{ __('Get in touch!')}}</h1>
            <a href="#contact" class="mil-link mil-dark mil-arrow-place mil-down-arrow">
                <span>{{ __('Send message')}}</span>
            </a>
        </div>
    </div>
</div>

 <!-- contact form -->
 <section id="contact">
    <div class="container mil-p-120-90">
        <h3 class="mil-center mil-up mil-mb-120">{{ __("Let's")}} <span class="mil-thin">{{ __('Talk')}}</span></h3>
        @if(count($errors) > 0)
        <ul>
            @foreach($errors->all() as $error)
            <li style="color: #ff4a56;">-> {{ $error }}</li>
            @endforeach
        </ul>
        @endif
        @if($message = Session::get('success'))
        <h1 style="font-size: 22px;color:#34e582;">*** {{ $message }} ***</h1>
        @endif

        <form class="row align-items-center" action="{{ url('contact-us/private/send') }}" method="post">
        {{ csrf_field() }}
            <div class="col-lg-6 mil-up">
                <input type="text" name="name" placeholder="What's your name">
            </div>
            <div class="col-lg-6 mil-up">
                <input type="email" placeholder="Your Email">
            </div>
            <div class="col-lg-12 mil-up">
                <textarea placeholder="Tell us about our project" name="message"></textarea>
            </div>
            <div class="col-lg-8">
                <p class="mil-up mil-mb-30"><span class="mil-accent">*</span> {{ __('We promise not to disclose your personal information to third parties.')}}</p>
            </div>
            <div class="col-lg-4">
                <div class="mil-adaptive-right mil-up mil-mb-30">
                    <button type="submit" class="mil-button mil-arrow-place">
                        <span>{{ __('Send message')}}</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- contact form end -->
@endsection