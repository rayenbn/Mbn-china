
<!-- banner -->
<section class="mil-banner mil-dark-bg">
        <div class="mi-invert-fix">
            <div class="mil-animation-frame">
                <div class="mil-animation mil-position-1 mil-scale" data-value-1="7" data-value-2="1.6"></div>
                <div class="mil-animation mil-position-2 mil-scale" data-value-1="4" data-value-2="1"></div>
                <div class="mil-animation mil-position-3 mil-scale" data-value-1="1.2" data-value-2=".1"></div>
            </div>

            <div class="mil-gradient"></div>

            <div class="container">
                @foreach ($sliders as $key => $slider)
                <div class="mil-banner-content mil-up">

                    <h1 class="mil-muted mil-mb-60"><span class="mil-thin">{!! $slider->title !!}</h1>
                    <div class="row">
                        <div class="col-md-7 col-lg-5">

                            <p class="mil-light-soft mil-mb-60">{{ $slider->subtitle }}</p>

                        </div>
                    </div>

                    <a href="{{ $slider->link }}" class="mil-button mil-arrow-place mil-btn-space">
                        <span>What we do</span>
                    </a>

                    <a href="#about" class="mil-link mil-muted mil-arrow-place">
                        <span>Who we are!</span>
                    </a>

                    <div class="mil-circle-text">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve" class="mil-ct-svg mil-rotate" data-value="360">
                            <defs>
                                <path id="circlePath" d="M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 " />
                            </defs>
                            <circle cx="150" cy="100" r="75" fill="none" />
                            <g>
                                <use xlink:href="#circlePath" fill="none" />
                                <text style="letter-spacing: 6.5px">
                                    <!-- circle text -->
                                    <textPath xlink:href="#circlePath">Scroll down - Scroll down - </textPath>
                                </text>
                            </g>
                        </svg>
                        <a href="#about" class="mil-button mil-arrow-place mil-icon-button mil-arrow-down"></a>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- banner end -->
