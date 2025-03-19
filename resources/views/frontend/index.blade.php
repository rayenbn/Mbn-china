@extends('layouts.theme')
@section('content')


<!-- content -->

    @include('partials.slider', $sliders)
    
    <!-- about -->
    <section id="about">
        <div class="container mil-p-120-30">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 col-xl-5">

                    <div class="mil-mb-90">
                        <h2 class="mil-up mil-mb-60">{{ __('About Us')}}</h2>
                        <p class="mil-up mil-mb-30">{{ __('At MBN, we bridge China and the Middle East with tailored trade solutions. Headquartered in Saudi Arabia, and supported by offices in China, Bahrain, the UAE, and Egypt, we simplify cross-border success for businesses in both regions.') }}</p>

                        <p class="mil-up mil-mb-60">{{ __('We empower Chinese companies to monetize, market, and localize products for Middle Eastern markets, ensuring cultural relevance and commercial impact. For Middle Eastern businesses, we streamline sourcing, logistics, and shipping from China, delivering quality products efficiently.')}}</p>
                        <p class="mil-up mil-mb-60">{{ __('With deep local expertise and a passion for collaboration, we turn geographic and cultural diversity into opportunity. Let’s connect your ambitions across continents—where East meets East, and growth begins.')}}</p>

                        <div class="mil-about-quote">
                            <div class="mil-avatar mil-up">
                                <img src="{{ asset('theme/img/faces/customers/2.jpg')}}" alt="Founder">
                            </div>
                            <h6 class="mil-quote mil-up">{{ __('Bridging Markets.')}} <span class="mil-thin">{{ __('Building Futures.')}}</h6>
                        </div>
                    </div>

                </div>
                <div class="col-lg-5">

                    <div class="mil-about-photo mil-mb-90">
                        <div class="mil-lines-place"></div>
                        <div class="mil-up mil-img-frame" style="padding-bottom: 160%;">
                            <img src="{{ asset('theme/img/photo/1.jpg')}}" alt="img" class="mil-scale" data-value-1="1" data-value-2="1.2">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- about end -->

    <!-- services -->
    <section class="mil-dark-bg" id="services">
        <div class="mi-invert-fix">
            <div class="mil-animation-frame">
                <div class="mil-animation mil-position-1 mil-scale" data-value-1="2.4" data-value-2="1.4" style="top: 300px; right: -100px"></div>
                <div class="mil-animation mil-position-2 mil-scale" data-value-1="2" data-value-2="1" style="left: 150px"></div>
            </div>
            <div class="container mil-p-120-0">

                <div class="mil-mb-120">
                    <div class="row">
                        <div class="col-lg-10">

                            <span class="mil-suptitle mil-light-soft mil-suptitle-right mil-up">{!! __('Professionals focused on helping your brand<br> grow and move forward.') !!}</span>

                        </div>
                    </div>

                    <div class="mil-complex-text justify-content-center mil-up mil-mb-15">

                        <span class="mil-text-image"><img src="img/bgvideo.webp" alt="team"></span>
                        <h2 class="mil-h1 mil-muted mil-center">{{ __('Unique')}} <span class="mil-thin">{{ __('Services')}}</span></h2>

                    </div>
                    <div class="mil-complex-text justify-content-center mil-up">

                        <h2 class="mil-h1 mil-muted mil-center">{{ __('For Your')}} <span class="mil-thin">{{ __('Business.')}}</span></h2>
                        <a href="{{ route('md-services') }}" class="mil-services-button mil-button mil-arrow-place"><span>{{ __('What we do')}}</span></a>

                    </div>
                </div>

                <div class="row mil-services-grid m-0">
                    <!-- <div class="col-md-6 col-lg-3 mil-services-grid-item p-0">

                        <a href="service.html" class="mil-service-card-sm mil-up">
                            <h5 class="mil-muted mil-mb-30">Branding and <br>Identity Design</h5>
                            <p class="mil-light-soft mil-mb-30">Our creative agency is a team of professionals focused on helping your brand grow.</p>
                            <div class="mil-button mil-icon-button-sm mil-arrow-place"></div>
                        </a>

                    </div> -->
                    <div class="col-md-6 col-lg-3 mil-services-grid-item p-0">

                        <a href="{{ route('md-services') }}" class="mil-service-card-sm mil-up">
                            <h5 class="mil-muted mil-mb-30">{!! __('Website Design <br>and Development') !!}</h5>
                            <p class="mil-light-soft mil-mb-30">{{ __('Our creative team of professionals focused on helping your brand grow.')}}</p>
                            <div class="mil-button mil-icon-button-sm mil-arrow-place"></div>
                        </a>

                    </div>
                    <div class="col-md-6 col-lg-3 mil-services-grid-item p-0">

                        <a href="{{ route('md-services') }}" class="mil-service-card-sm mil-up">
                            <h5 class="mil-muted mil-mb-30">{!! __('Advertising and <br>Marketing Campaigns') !!}</h5>
                            <p class="mil-light-soft mil-mb-30">{{ __('Our creative team of professionals merketers specializing in the middle east market will help you to get in the market with less.')}}</p>
                            <div class="mil-button mil-icon-button-sm mil-arrow-place"></div>
                        </a>

                    </div>
                    <div class="col-md-6 col-lg-3 mil-services-grid-item p-0">

                        <a href="{{ route('md-services') }}" class="mil-service-card-sm mil-up">
                            <h5 class="mil-muted mil-mb-30">{!! __('Consulting <br>and Development') !!}</h5>
                            <p class="mil-light-soft mil-mb-30">{{ __('Our team of professionals will guide you to success in the arabic world.')}}</p>
                            <div class="mil-button mil-icon-button-sm mil-arrow-place"></div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services end -->

    <!-- team -->
    <section>
        <div class="container mil-p-120-30">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5 col-xl-4">

                    <div class="mil-mb-90">
                        <h2 class="mil-up mil-mb-60"><span class="mil-thin">{{ __('For')}} </span>{{ __('Middle Eastern')}}<br><span class="mil-thin">{{ __('Clients')}}</span></h2>
                        <p class="mil-up mil-mb-30">{{ __('We streamline your China trade journey—from seamless product sourcing and air/sea shipping to rigorous quality control and customs compliance. Trust our cross-border expertise to deliver efficiency, reliability, and competitive advantage.')}}</p>

                        <!-- <p class="mil-up mil-mb-60">Together, our creative team is committed to delivering impactful work that exceeds expectations.</p> -->

                        <div class="mil-up"><a href="{{ route('cn-services') }}" class="mil-button mil-arrow-place mil-mb-60"><span>Read more</span></a></div>

                        <h4 class="mil-up"><span class="mil-thin">{{ __('Your')}} </span> {{ __('Gateway')}} <br><span class="mil-thin">{{ __('to China')}},</span> {{ __('Simplified.')}}</h4>
                    </div>

                </div>
                <div class="col-lg-6">

                    <div class="mil-team-list">
                        <div class="mil-lines-place"></div>

                        <div class="row mil-mb-60">
                            <div class="col-sm-6">

                                <div class="mil-team-card mil-up mil-mb-30">
                                    <img src="{{ asset('theme/img/air.jpg')}}" alt="air freight from china">
                                    <div class="mil-description">
                                        <div class="mil-secrc-text">
                                            <h5 class="mil-muted mil-mb-5"><a href="{{ route('cn-services') }}">{{ __('Air freight')}}</a></h5>
                                            <p class="mil-link mil-light-soft mil-mb-10">{{ __('5 to 10 days')}}</p>
                                            <!-- <ul class="mil-social-icons mil-center">
                                                <li><a href="#." target="_blank" class="social-icon"> <i class="fab fa-behance"></i></a></li>
                                                <li><a href="#." target="_blank" class="social-icon"> <i class="fab fa-dribbble"></i></a></li>
                                                <li><a href="#." target="_blank" class="social-icon"> <i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#." target="_blank" class="social-icon"> <i class="fab fa-github"></i></a></li>
                                            </ul> -->
                                        </div>
                                    </div>
                                </div>

                                <div class="mil-team-card mil-up mil-mb-30">
                                    <img src="{{ asset('theme/img/sea.jpg')}}" alt="sea freight from china">
                                    <div class="mil-description">
                                        <div class="mil-secrc-text">
                                            <h5 class="mil-muted mil-mb-5"><a href="{{ route('cn-services') }}">{{ __('Sea freight')}}</a></h5>
                                            <p class="mil-link mil-light-soft mil-mb-10">{{ __('approx 1 month')}}</p>
                                            <!-- <ul class="mil-social-icons mil-center">
                                                <li><a href="#." target="_blank" class="social-icon"> <i class="fab fa-behance"></i></a></li>
                                                <li><a href="#." target="_blank" class="social-icon"> <i class="fab fa-dribbble"></i></a></li>
                                                <li><a href="#." target="_blank" class="social-icon"> <i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#." target="_blank" class="social-icon"> <i class="fab fa-github"></i></a></li>
                                            </ul> -->
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-6">

                                <!-- <p class="mil-mobile-hidden mil-text-sm mil-mb-30" style="height: 30px;"><span class="mil-accent">*</span> The founders of our agency</p> -->

                                <div class="mil-team-card mil-up mil-mb-30">
                                    <img src="{{ asset('theme/img/doortodoor.jpg')}}" alt="Shipping service in china">
                                    <div class="mil-description">
                                        <div class="mil-secrc-text">
                                            <h5 class="mil-muted mil-mb-5"><a href="{{ route('cn-services') }}">{{ __('Door to door')}}</a></h5>
                                            <p class="mil-link mil-light-soft mil-mb-10">{{ __('KSA, UAE, BH, EGY')}}</p>
                                            <!-- <ul class="mil-social-icons mil-center">
                                                <li><a href="#." target="_blank" class="social-icon"> <i class="fab fa-behance"></i></a></li>
                                                <li><a href="#." target="_blank" class="social-icon"> <i class="fab fa-dribbble"></i></a></li>
                                                <li><a href="#." target="_blank" class="social-icon"> <i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#." target="_blank" class="social-icon"> <i class="fab fa-github"></i></a></li>
                                            </ul> -->
                                        </div>
                                    </div>
                                </div>

                                <div class="mil-team-card mil-up mil-mb-30">
                                    <img src="{{ asset('theme/img/warehouse.jpg')}}" alt="warehousing serivce in china">
                                    <div class="mil-description">
                                        <div class="mil-secrc-text">
                                            <h5 class="mil-muted mil-mb-5"><a href="{{ route('cn-services') }}/#warehouse">{{ __('Warehouse')}}</a></h5>
                                            <p class="mil-link mil-light-soft mil-mb-10">{{ __('300 square warehouse space')}}</p>
                                            
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- team end -->

{{-- @include('frontend.components.newsletter') --}}
@endsection