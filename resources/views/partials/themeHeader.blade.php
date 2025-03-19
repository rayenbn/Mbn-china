<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
$categories = Controller::categories();
// $contact = Controller::contact();
$global_settings = Controller::global_settings();
$cart_items = Controller::cartItems();

?>

 <!-- menu -->
 <div class="mil-menu-frame">
	<!-- frame clone -->
	<div class="mil-frame-top">
		<a href="{{ url('/') }}" class="mil-logo">MBN.</a>
		<!-- <a href="/"><img src="/storage/logo/{{ $global_settings->logo ?? ''}}" alt="Pufflex logo"></a> -->
		<div class="mil-menu-btn">
			<span></span>
		</div>
	</div>
	<!-- frame clone end -->
	<div class="container">
		<div class="mil-menu-content">
			<div class="row">
				<div class="col-xl-5">

					<nav class="mil-main-menu" id="swupMenu">
						<ul>
							<li class="{{ request()->routeIs('home') ? 'mil-active' : '' }}">
								<a href="{{ url('/') }}">Homepage</a>
							</li>
							<li class="{{ request()->routeIs('home') ? 'mil-active' : '' }}">
								<a href="{{ url('/') }}/#aboutus">About Us</a>
							</li>
							<li class="mil-has-children">
								<a href="#.">Our Services</a>
								<ul>
									<li><a href="services.html">Services in China</a></li>
									<li><a href="service.html">Services in the middle east</a></li>
								</ul>
							</li>
							
							<li class="{{ request()->routeIs('contactus') ? 'mil-active' : '' }}">
								<a href="{{ route('contactus') }}">Contact</a>
							</li>
						</ul>
					</nav>

				</div>
				<div class="col-xl-7">

					<div class="mil-menu-right-frame">
						<div class="mil-animation-in">
							<div class="mil-animation-frame">
								<div class="mil-animation mil-position-1 mil-scale" data-value-1="2" data-value-2="2"></div>
							</div>
						</div>
						<div class="mil-menu-right">
							<div class="row">
								<div class="col-lg-8 mil-mb-60">

									<h6 class="mil-muted mil-mb-30">Services</h6>

									<ul class="mil-menu-list">
										<li><a href="{{ route('cn-services') }}" class="mil-light-soft">Air Shipping</a></li>
										<li><a href="{{ route('cn-services') }}" class="mil-light-soft">Sea Shipping</a></li>
										<li><a href="{{ route('cn-services') }}" class="mil-light-soft">Product sourcing</a></li>
										<li><a href="{{ route('md-services') }}" class="mil-light-soft">Product monetization for middle east market</a></li>
										<li><a href="{{ route('md-services') }}" class="mil-light-soft">Product Translation</a></li>
										<li><a href="{{ route('md-services') }}" class="mil-light-soft">Marketing services</a></li>
									</ul>

								</div>
								<div class="col-lg-4 mil-mb-60">

									<h6 class="mil-muted mil-mb-30">Useful links</h6>

									<ul class="mil-menu-list">
										<li><a href="#." class="mil-light-soft">Terms and conditions</a></li>
										<li><a href="#." class="mil-light-soft">Careers</a></li>
										<li><a href="#." class="mil-light-soft">Sitemap</a></li>
									</ul>

								</div>
							</div>
							<div class="mil-divider mil-mb-60"></div>
							<div class="row justify-content-between">

								<div class="col-lg-4 mil-mb-60">

									<h6 class="mil-muted mil-mb-30">Saudi Arabia</h6>

									<p class="mil-light-soft mil-up">71 South Los Carneros Road, Jeddah <span class="mil-no-wrap">+966 920006943</span></p>

								</div>
								<div class="col-lg-4 mil-mb-60">

									<h6 class="mil-muted mil-mb-30">China</h6>

									<p class="mil-light-soft">Room 11012, 11 floor, zhongshangba, Guangzhou <span class="mil-no-wrap">+86 174 705 811</span></p>

								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- menu -->

<!--Header FROM OLD THEME I MAY NEED THEM IN THE FUTURE **************-->
{{-- <!--@guest
 <div class="quick-access__item quick-access__item_border-r">
	<a href="/login"><span class="account"><i class="flaticon-messenger-user-avatar fi-2x"></i></span></a>
</div>
@endguest
@auth
<div class="quick-access__item quick-access__item_border-r">
	<a href="/my-profile#tabs-1"><span class="account"><i class="flaticon-messenger-user-avatar fi-2x"></i></span></a>
</div>
@endauth

<div class="quick-access__item">
	<div class="header-mini-cart">
		<a href="/cart" class="mini-cart-link">
			<i class="cart__icon flaticon-online-shopping-cart fi-2x"></i>
			<span class="mini-cart-link__qty">{{ $cart_items }} items</span>
		</a>
	</div>
</div> --> --}}
<!--End Header-->