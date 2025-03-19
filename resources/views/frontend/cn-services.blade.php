@extends('layouts.theme')
@section('content')
<!-- banner -->
<div class="mil-inner-banner">
    <div class="mil-banner-content mil-up">
        <div class="mil-animation-frame">
            <div class="mil-animation mil-position-4 mil-dark mil-scale" data-value-1="6" data-value-2="1.4"></div>
        </div>
        <div class="container">
            <ul class="mil-breadcrumbs mil-mb-60">
                <li><a href="{{ url('/') }}">{{ __('Homepage')}}</a></li>
                <li><a href="#">{{ __('China services')}}</a></li>
            </ul>
            <h1 class="mil-mb-60">{{ __('Your')}} <span class="mil-thin">{{ __('Gateway')}}</span><br> {{ __('To China')}} <span class="mil-thin">{{ __('Simplified.')}}</span></h1>
            
        </div>
    </div>
    <!-- banner end -->

    <!-- service -->
    <section id="cn-service">
    <div class="container mil-p-120-90">
        <div class="row justify-content-between">
            <div class="col-lg-6 mil-relative mil-mb-90">

                <h4 class="mil-up mil-mb-30">{{ __('Air')}} <span class="mil-thin">{{ __('Freight')}}</span></h4>
                <p class="mil-up mil-mb-30" style="font-size: 20px">{{ __('Usually takes between 7-10 days for Express shipping and 10-15 days for Air cargo, coast calculated by Cubic meters weight. Air shipping in generale counts as expensive but fast shipping solution')}}</p>
                <!-- <div class="mil-up">
                    <a href="portfolio-3.html" class="mil-link mil-dark mil-arrow-place">
                        <span>View works</span>
                    </a>
                </div> -->

            </div>
            <div class="col-lg-6 mil-relative mil-mb-90">
                <h4 class="mil-up mil-mb-30">{{ __('Sea')}} <span class="mil-thin">{{ __('Freight')}}</span></h4>
                <p class="mil-up mil-mb-30" style="font-size: 20px">{{ __('Usually takes between 20-45 days depends on the loading and unloading ports, Sea shipping counts as cost effective but slow shipping and cost calculated by CBM Volume.')}}</p>
            </div>
            <div class="col-lg-6 mil-relative mil-mb-90">
                <h4 class="mil-up mil-mb-30">{{ __('Product')}} <span class="mil-thin">{{ __('Sourcing')}}</span></h4>
                <p class="mil-up mil-mb-30" style="font-size: 20px">{{ __('Our Team of experts in china will help you find, verifiy and negotiate the best price from the verified suppliers. this services cost per product')}}</p>
            </div>
            <div class="col-lg-6 mil-relative mil-mb-90" id="warehouse">
                <h4 class="mil-up mil-mb-30">{{ __('Warehouse')}} <span class="mil-thin">{{ __('Storage')}}</span></h4>
                <p class="mil-up mil-mb-30" style="font-size: 20px">{{ __('We offer to all our clients a free 15 days storage space, after 15 days client will be charged a small fee for warehouse space depends on the CBM volume of the goods.')}}</p>
            </div>
        </div>
    </div>
</section>
<!-- service end -->
</div>
 <!-- Call Action -->
 @include('frontend.components.newsletter')
<!-- End Section -->
@endsection