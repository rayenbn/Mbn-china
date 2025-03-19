<?php

use App\Http\Controllers\Controller;

$footer = Controller::footer();
$global_settings =Controller::global_settings();
// $categories =Controller::footer_categories();
?>
<!-- footer -->
<footer class="mil-dark-bg">
	<div class="mi-invert-fix">
		<div class="container mil-p-120-60">
			<div class="row justify-content-between">
				<div class="col-md-4 col-lg-4 mil-mb-60">
				<!-- /storage/logo/{{ $global_settings->footer_logo ?? ''}} -->
					<div class="mil-muted mil-logo mil-up mil-mb-30">MBN.</div>
					
					<p class="mil-light-soft mil-up mil-mb-30">Subscribe our newsletter:</p>

					<form class="mil-subscribe-form mil-up" action="{{ url('newsletter/subscribe') }}" method="post">
                	{{ csrf_field() }}
						<input type="text" name="newsletter_email" placeholder="Enter your email">
						<button type="submit" class="mil-button mil-icon-button-sm mil-arrow-place"></button>
					</form>

				</div>
				<div class="col-md-7 col-lg-6">
					<div class="row justify-content-end">
						<div class="col-md-6 col-lg-7">

							<nav class="mil-footer-menu mil-mb-60">
								<ul>
									<li class="mil-up mil-active">
										<a href="home-1.html">Home</a>
									</li>
									<li class="mil-up">
										<a href="{{ route('aboutus') }}">About us</a>
									</li>
									<li class="mil-up">
										<a href="services.html">Services</a>
									</li>
									<li class="mil-up">
										<a href="{{ route('contactus') }}">Contact</a>
									</li>
									<!-- <li class="mil-up">
										<a href="blog.html">Blog</a>
									</li> -->
								</ul>
							</nav>

						</div>
						<div class="col-md-6 col-lg-5">
							<ul class="mil-menu-list mil-up mil-mb-60">
								<li><a href="/privacy-policy" class="mil-light-soft">Privacy Policy</a></li>
								<li><a href="/terms-and-condition" class="mil-light-soft">Terms and conditions</a></li>
								<li><a href="/sitemap" class="mil-light-soft">Sitemap</a></li>
								<!-- <li><a href="#." class="mil-light-soft">Cookie Policy</a></li> -->
							</ul>

						</div>
					</div>
				</div>
			</div>

			<div class="row justify-content-between flex-sm-row-reverse">
				<div class="col-md-7 col-lg-6">

					<div class="row justify-content-between">

						<div class="col-md-6 col-lg-5 mil-mb-60">

							<h6 class="mil-muted mil-up mil-mb-30">KSA</h6>

							<p class="mil-light-soft mil-up">71 South Los Carneros Road, KSA <span class="mil-no-wrap">+966 920006943</span></p>

						</div>
						<div class="col-md-6 col-lg-5 mil-mb-60">

							<h6 class="mil-muted mil-up mil-mb-30">CHINA</h6>

							<p class="mil-light-soft mil-up">Room 11012, 11 floor, zhongshangba, Guangzhou <span class="mil-no-wrap">+86 174 705 811</span></p>

						</div>
					</div>

				</div>
				<div class="col-md-4 col-lg-6 mil-mb-60">
					<div class="mil-vert-between">
						<div class="mil-mb-30">

						<ul class="mil-social-icons mil-up">
							@if (isset($footer->ig))
							<li><a href="{{ $footer->ig }}" target="_blank" class="social-icon"> <i class="fab fa-instagram"></i></a></li>
							@endif
							<li><a href="#." target="_blank" class="social-icon"> <i class="fab fa-snapchat"></i></a></li>
							@if (isset($footer->twitter))
							<li><a href="{{ $footer->twitter }}" target="_blank" class="social-icon"> <i class="fab fa-x-twitter"></i></a></li>
							@endif
							@if (isset($footer->youtube))
							<li><a href="{{ $footer->youtube }}" target="_blank" class="social-icon"> <i class="fab fa-youtube"></i></a></li>
							@endif
							@if (isset($footer->fb))
							<li><a href="{{ $footer->fb }}" target="_blank" class="social-icon"> <i class="fab fa-tiktok"></i></a></li>
							@endif
						</ul>
							
						</div>
						<p class="mil-light-soft mil-up">© Copyright 2025 - MBN. All Rights Reserved.</p>
					</div>

				</div>
			</div>
		</div>
	</div>
</footer>
<!-- footer end -->