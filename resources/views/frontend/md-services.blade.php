@extends('layouts.theme')
@section('content')
<!-- banner -->
<div class="mil-dark-bg">
    <div class="mil-inner-banner">
        <div class="mi-invert-fix">
            <div class="mil-banner-content mil-up">
                <div class="mil-animation-frame">
                    <div class="mil-animation mil-position-4 mil-scale" data-value-1="6" data-value-2="1.4"></div>
                </div>
                <div class="container">
                    <ul class="mil-breadcrumbs mil-light mil-mb-60">
                        <li><a href="{{ url('/') }}l">{{ __('Homepage')}}</a></li>
                        <li><a href="#">{{ __('Services')}}</a></li>
                    </ul>
                    <h1 class="mil-muted mil-mb-60">{{ __('This is')}} <span class="mil-thin">{{ __('what')}}</span><br> {{ __('we do')}} <span class="mil-thin">{{ __('best')}}</span></h1>
                    <a href="#services" class="mil-link mil-accent mil-arrow-place mil-down-arrow">
                        <span>{{ __('Our services')}}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- services -->
    <section >
        <div class="mi-invert-fix">
            <div class="container mil-p-120-60">
                <div class="row">
                    <div class="col-lg-5">

                        <div class="mil-lines-place mil-light"></div>

                    </div>
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="mil-service-card-lg mil-offset">
                                    <h4 class="mil-muted mil-up mil-mb-30">{!! __('Branding and <br>Identity Design') !!}</h4>
                                    <p class="mil-descr mil-light-soft mil-up mil-mb-30">{{ __('Our creative agency is a team of professionals focused on helping your brand grow in the Middle East.')}}</p>
                                    <ul class="mil-service-list mil-light mil-mb-30">
                                        <li class="mil-up">{{ __('LOGO Design')}}</li>
                                        <li class="mil-up">{{ __('Visual Design')}}</li>
                                        <li class="mil-up">{{ __('Broshures and catalogs Design')}}</li>
                                        <!-- <li class="mil-up">Wireframing</li> -->
                                    </ul>
                                    <!-- <div class="mil-link mil-accent mil-arrow-place mil-up">
                                        <span>Read more</span>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="mil-service-card-lg mil-offset">
                                    <h4 class="mil-muted mil-up mil-mb-30">{!! __('Website Design <br>and Development') !!}</h4>
                                    <p class="mil-descr mil-light-soft mil-up mil-mb-30">{{ __('Our creative agency is a team of professionals focused on helping your brand grow in the Middle East.')}}</p>
                                    <ul class="mil-service-list mil-light mil-mb-30">
                                        <li class="mil-up">{{ __('UX Design')}}</li>
                                        <li class="mil-up">{{ __('Web & App Developments')}}</li>
                                        <li class="mil-up">{{ __('Customization for Middle east market')}}</li>
                                        <!-- <li class="mil-up">Wireframing</li> -->
                                    </ul>
                                    <!-- <div class="mil-link mil-accent mil-arrow-place mil-up">
                                        <span>Read more</span>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="mil-service-card-lg mil-offset">
                                    <h4 class="mil-muted mil-up mil-mb-30">{!! __('Advertising and <br>Marketing Campaigns') !!}</h4>
                                    <p class="mil-descr mil-light-soft mil-up mil-mb-30">{{ __('Our creative agency is a team of professionals focused on helping your brand grow in the Middle East.')}}</p>
                                    <ul class="mil-service-list mil-light mil-mb-30">
                                        <li class="mil-up">{{ __('Create online campaign')}}</li>
                                        <li class="mil-up">{{ __('Advertise with famous people in the middle east')}}</li>
                                        <li class="mil-up">{{ __('Advertise in arabic platforms')}}</li>
                                    </ul>
                                    
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="mil-service-card-lg mil-offset">
                                    <h4 class="mil-muted mil-up mil-mb-30">{{ __('Localization')}}</h4>
                                    <p class="mil-descr mil-light-soft mil-up mil-mb-30">{{ __('Our creative agency is a team of professionals focused on helping your brand grow in the Middle East.')}}</p>
                                    <ul class="mil-service-list mil-light mil-mb-30">
                                        <li class="mil-up">{{ __('Website Localization')}}</li>
                                        <li class="mil-up">{{ __('Product Localization')}}</li>
                                        <li class="mil-up">{{ __('Broshures, catalogs, etc.. translation to Arabic')}}</li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

 <!-- Call Action -->
 @include('frontend.components.newsletter')
<!-- End Section -->
@endsection