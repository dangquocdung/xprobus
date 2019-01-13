
@extends('xpro.layout')

@section('body')

<!--  Main Banner Start Here-->
@include('xpro.home.intro-video')

<!--About Us-->
<section id="about-us" class="pt ptb-xs-60 text-center">
	<div class="container">
		<div class="row pb-30">
			<div class="col-sm-6 col-sm-offset-3">
				<div class="creative_heading">
					<h2>About Us</h2>
				</div>
				<p>
					Our main aim is to make your online life as easy as possible for you. We don’t just build you a website and leave you to it, we take care of your hosting, tech support and manage all your content updates for you for just one single monthly cost.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				@if (!empty($AboutUsBanner))
					<img src="/uploads/banners/{{ $AboutUsBanner->file_vi }}" alt="{{ $AboutUsBanner->title_vi }}" class="align-center">
				@else
					<img src="http://placehold.it/973x476" alt="" class="align-center" />
				@endif
			</div>
		</div>

	</div>
</section>
<!--About Us End -->
<section id="choose_us" class="padding pt-xs-60 overflow_hidden secondary_bg">
	@if (!empty($WhyUsBanner))

	<style>

		.image_cover{
			background-image:url('/uploads/banners/{{ $WhyUsBanner->file_vi }}') !important;
		}

	</style>		
	@endif

	<div class="image_cover image_cover_right"></div>
	<!-- half image background element -->
	<div class="container">
		<div class="row">

			<div class="col-sm-6">
				<div class="creative_heading light-color pb-30">
					<h2>Why Choose Us</h2>
				</div>

				<div class="media">
					<div class="media-left">
						<i class="fa fa-meh-o fontsize_28"></i>
					</div>
					<div class="media-body">
						<h4 class="text-uppercase"><a href="services.html">WE ARE AN EFFECTIVE TEAM</a></h4>

						<p>
							At vero eos et accusam justo duo dolores
						</p>
					</div>
				</div>
				<div class="media ">
					<div class="media-left">
						<i class="fa fa-thumbs-o-up fontsize_28"></i>
					</div>
					<div class="media-body">
						<h4 class="text-uppercase"><a href="services.html">Best quality</a></h4>
						<p>
							Clita kasd guberren no sea takimata sanctus est
						</p>
					</div>
				</div>
				<div class="media ">
					<div class="media-left">
						<i class="fa fa-pencil-square-o fontsize_28"></i>
					</div>
					<div class="media-body">
						<h4 class="text-uppercase"><a href="services.html">Usefull Feature includes</a></h4>
						<p>
							Lorem ipsum dolor sit amet, consetetur
						</p>
					</div>
				</div>

			</div>
			
		</div>
	</div>

</section>

<!--Team Section-->
<section id="team" class="padding ptb-xs-60">
	<div class="container">
		<div class="row pb-30 text-center">
			<div class="col-sm-12 mb-20">
				<div class="creative_heading">
					<h2>Team</h2>
				</div>

			</div>
		</div>
		@if (!empty($TeamBanners))
			<div class="row text-center">
				@foreach($TeamBanners as $team)
					<div class="col-md-3 col-sm-6 mb-xs-30 mb-sm-30 ">
						<div class="box-hover img-scale">
							<figure>
		
								@if ($team->file_vi != null && file_exists('uploads/banners/'.$team->file_vi))
									<img src="/uploads/banners/{{ $team->file_vi }}" alt="{{ $team->title_vi }}">
								@else
									<img src="http://placehold.it/600x800" alt="">
		
								@endif
							</figure>
		
							<div class="team-block">
								{!! $team->details_vi !!}
								<hr class="small-divider border-white">
								<ul class="social-icons">
									<li>
										<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
									</li>
									<li>
										<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
									</li>
									<li>
										<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
									</li>
									<li>
										<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
									</li>
									<li>
										<a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
									</li>
								</ul>
							</div>
		
						</div>
					</div>
				@endforeach
			</div>
			
		@endif
		

	</div>
</section>
<!--Team Section End-->
<!-- Our Services -->
<section id="our-services" class=" gray-bg">
	<div class="container">
		<div class="row text-center-xs">
			<div class="col-sm-6 col-md-5 col-lg-3 border-r min-h">
				<div class="creative_heading pt-60">
					<h2>Services</h2>
				</div>
				<p>
					At vero eos et rebum stet no sea lorem ipsum dolor sit amet lorem.
					At vero eos et rebum stet no sea lorem ipsum dolor sit amet lorem.
					At vero eos et rebum stet no sea lorem ipsum dolor sit amet lorem.
					At vero eos et rebum stet.
				</p>
			</div>
			<div class="col-sm-6 col-md-7 col-lg-9 text-center">
				<div class="services-items nf-carousel-theme arrow_theme">
					<div class="service-box">
						<div class="service-content">
							<i class="fa fa-usd" aria-hidden="true"></i>
							<h3>Financial Services</h3>
						</div>
						<div class="hover-box secondary_bg">
							<div class="table-box">
								<div class="box-cell">
									<i class="fa fa-usd" aria-hidden="true"></i>
									<h3>Financial Services</h3>
									<p>
										At vero eos et rebum stet no sea lorem ipsum dolor sit amet lorem.
										At vero eos et rebum stet no sea lorem ipsum dolor sit amet lorem.
										At vero eos et rebum stet no sea lorem ipsum dolor sit amet lorem.
										At vero eos et rebum stet.
									</p>
								</div>
							</div>
						</div>
					</div>

					<div class="service-box">
						<div class="service-content">
							<i class="fa fa-money" aria-hidden="true"></i>
							<h3>SAVING & INVESTING</h3>
						</div>
						<div class="hover-box bg-color3">
							<div class="table-box">
								<div class="box-cell">
									<i class="fa fa-money" aria-hidden="true"></i>
									<h3>SAVING & INVESTING</h3>
									<p>
										At vero eos et rebum stet no sea lorem ipsum dolor sit amet lorem.
										At vero eos et rebum stet no sea lorem ipsum dolor sit amet lorem.
										At vero eos et rebum stet no sea lorem ipsum dolor sit amet lorem.
										At vero eos et rebum stet.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="service-box">
						<div class="service-content">
							<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
							<h3>TAXES PLANING</h3>
						</div>
						<div class="hover-box bg-color">
							<div class="table-box">
								<div class="box-cell">
									<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
									<h3>TAXES PLANING</h3>
									<p>
										At vero eos et rebum stet no sea lorem ipsum dolor sit amet lorem.
										At vero eos et rebum stet no sea lorem ipsum dolor sit amet lorem.
										At vero eos et rebum stet no sea lorem ipsum dolor sit amet lorem.
										At vero eos et rebum stet.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Our Services End-->
<!-- Work Section -->
<section id="work" class="padding ptb-xs-60">
	<div class="container">
		<div class="row pb-30 text-center">
			<div class="col-sm-12 mb-20">
				<div class="creative_heading">
					<h2>Projects</h2>
				</div>
			</div>
		</div>
		<!-- work Filter -->
		<div class="row">
			<ul class="container-filter categories-filter">
				<li>
					<a class="categories active" data-filter="*">All</a>
				</li>
				<li>
					<a class="categories" data-filter=".branding">Branding</a>
				</li>
				<li>
					<a class="categories" data-filter=".design">Design</a>
				</li>
				<li>
					<a class="categories" data-filter=".photo">Photo</a>
				</li>
				<li>
					<a class="categories" data-filter=".coffee">coffee</a>
				</li>
			</ul>
		</div>
		<!-- End work Filter -->
		<div class="row container-masonry nf-col-3">

			<div class="nf-item branding coffee spacing">
				<div class="item-box">
					<a> <img alt="1" src="http://placehold.it/600x755" class="item-container"> </a>
					<div class="link-zoom">
						<a href="project-details.html" class="project_links"> <i class="fa fa-link"> </i> </a>
						<a href="http://placehold.it/600x755" class="fancylight popup-btn" data-fancybox-group="light"> <i class="fa fa-search-plus"></i> </a>
					</div>
					<div class="gallery-heading">
						<h4><a href="#">Financial Services</a></h4>
						<p>
							At vero eos et rebum
						</p>
					</div>
				</div>
			</div>

			<div class="nf-item photo spacing">
				<div class="item-box">
					<a> <img alt="1" src="http://placehold.it/900x600" class="item-container"> </a>
					<div class="link-zoom">
						<a href="project-details.html" class="project_links"> <i class="fa fa-link"> </i> </a>
						<a href="http://placehold.it/900x600" class="fancylight popup-btn" data-fancybox-group="light"> <i class="fa fa-search-plus"></i> </a>
					</div>
					<div class="gallery-heading">
						<h4><a href="#">Financial Services</a></h4>
						<p>
							At vero eos et rebum
						</p>
					</div>
				</div>
			</div>

			<div class="nf-item branding photo spacing">
				<div class="item-box">
					<a> <img alt="1" src="http://placehold.it/750x500" class="item-container"> </a>
					<div class="link-zoom">
						<a href="project-details.html" class="project_links"> <i class="fa fa-link"> </i> </a>
						<a href="http://placehold.it/750x500" class="fancylight popup-btn" data-fancybox-group="light"> <i class="fa fa-search-plus"></i> </a>
					</div>
					<div class="gallery-heading">
						<h4><a href="#">Financial Services</a></h4>
						<p>
							At vero eos et rebum
						</p>
					</div>
				</div>
			</div>

			<div class="nf-item design spacing">
				<div class="item-box">
					<a> <img alt="1" src="http://placehold.it/1280x1777" class="item-container"> </a>
					<div class="link-zoom">
						<a href="project-details.html" class="project_links"> <i class="fa fa-link"> </i> </a>
						<a href="http://placehold.it/1280x1777" class="fancylight popup-btn" data-fancybox-group="light"> <i class="fa fa-search-plus"></i> </a>
					</div>
					<div class="gallery-heading">
						<h4><a href="#">Financial Services</a></h4>
						<p>
							At vero eos et rebum
						</p>
					</div>
				</div>
			</div>

			<div class="nf-item photo spacing">
				<div class="item-box">
					<a> <img alt="1" src="http://placehold.it/1200x840" class="item-container"> </a>
					<div class="link-zoom">
						<a href="project-details.html" class="project_links"> <i class="fa fa-link"> </i> </a>
						<a href="http://placehold.it/1200x840" class="fancylight popup-btn" data-fancybox-group="light"> <i class="fa fa-search-plus"></i> </a>
					</div>
					<div class="gallery-heading">
						<h4><a href="#">Financial Services</a></h4>
						<p>
							At vero eos et rebum
						</p>
					</div>
				</div>
			</div>

			<div class="nf-item photo spacing">
				<div class="item-box">
					<a> <img alt="1" src="http://placehold.it/905x603" class="item-container"> </a>
					<div class="link-zoom">
						<a href="project-details.html" class="project_links"> <i class="fa fa-link"> </i> </a>
						<a href="http://placehold.it/905x603" class="fancylight popup-btn" data-fancybox-group="light"> <i class="fa fa-search-plus"></i> </a>
					</div>
					<div class="gallery-heading">
						<h4><a href="#">Financial Services</a></h4>
						<p>
							At vero eos et rebum
						</p>
					</div>
				</div>
			</div>

			<div class="nf-item design spacing">
				<div class="item-box">
					<a> <img alt="1" src="http://placehold.it/1240x1860" class="item-container"> </a>
					<div class="link-zoom">
						<a href="project-details.html" class="project_links"> <i class="fa fa-link"> </i> </a>
						<a href="http://placehold.it/1240x1860" class="fancylight popup-btn" data-fancybox-group="light"> <i class="fa fa-search-plus"></i> </a>
					</div>
					<div class="gallery-heading">
						<h4><a href="#">Financial Services</a></h4>
						<p>
							At vero eos et rebum
						</p>
					</div>
				</div>
			</div>

			<div class="nf-item coffee spacing">
				<div class="item-box">
					<a> <img alt="1" src="http://placehold.it/1280x960" class="item-container"> </a>
					<div class="link-zoom">
						<a href="project-details.html" class="project_links"> <i class="fa fa-link"> </i> </a>
						<a href="http://placehold.it/1280x960" class="fancylight popup-btn" data-fancybox-group="light"> <i class="fa fa-search-plus"></i> </a>
					</div>
					<div class="gallery-heading">
						<h4><a href="#">Financial Services</a></h4>
						<p>
							At vero eos et rebum
						</p>
					</div>
				</div>
			</div>

			<div class="nf-item design spacing">
				<div class="item-box">
					<a> <img alt="1" src="http://placehold.it/795x1024" class="item-container"> </a>
					<div class="link-zoom">
						<a href="project-details.html" class="project_links"> <i class="fa fa-link"> </i> </a>
						<a href="http://placehold.it/795x1024" class="fancylight popup-btn" data-fancybox-group="light"> <i class="fa fa-search-plus"></i> </a>
					</div>
					<div class="gallery-heading">
						<h4><a href="#">Financial Services</a></h4>
						<p>
							At vero eos et rebum
						</p>
					</div>
				</div>
			</div>

			<div class="nf-item design spacing">
				<div class="item-box">
					<a> <img alt="1" src="http://placehold.it/736x736" class="item-container"> </a>
					<div class="link-zoom">
						<a href="project-details.html" class="project_links"> <i class="fa fa-link"> </i> </a>
						<a href="http://placehold.it/736x736" class="fancylight popup-btn" data-fancybox-group="light"> <i class="fa fa-search-plus"></i> </a>
					</div>
					<div class="gallery-heading">
						<h4><a href="#">Financial Services</a></h4>
						<p>
							At vero eos et rebum
						</p>
					</div>
				</div>
			</div>

			<div class="nf-item photo spacing">
				<div class="item-box">
					<a> <img alt="1" src="http://placehold.it/736x736" class="item-container"> </a>
					<div class="link-zoom">
						<a href="project-details.html" class="project_links"> <i class="fa fa-link"> </i> </a>
						<a href="http://placehold.it/736x736" class="fancylight popup-btn" data-fancybox-group="light"> <i class="fa fa-search-plus"></i> </a>
					</div>
					<div class="gallery-heading">
						<h4><a href="#">Financial Services</a></h4>
						<p>
							At vero eos et rebum
						</p>
					</div>
				</div>
			</div>

		</div>

	</div>
</section>
<!-- End Work Section -->
<!-- Pricing Table -->

<section class="page-section pricing-2 padding ptb-xs-60 columns_padding_25 pricing-style2" id="pricing_table">
	<div class="container">
		<div class="row text-center pb-30 pb-x">
			<div class="col-sm-12">
				<div class="creative_heading">
					<h2>Pricing</h2>
				</div>

			</div>
		</div>
		<!-- row end -->
		<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-12 mb-xs-30">
				<div class="pricing_table">
					<div class="package_title">
						<div class="pricing-top bg-color">
							<p>
								STARTER
							</p>
						</div>
						<div class="package-price">
							<span class="currency-symbol">$</span><span class="price">149</span><span class="duration">/month</span>
						</div>

					</div>
					<ul class="price_feature">
						<li>
							1 GB STORAGE
						</li>
						<li>
							3 DOMAIN NAMES
						</li>
						<li>
							5 FTP USERS
						</li>
						<li>
							FREE SUPPORT
						</li>
					</ul>
					<div class="price_btn">
						<a href="#!" class="btn xplus-btn pricing">Buy Now</a>
					</div>
				</div>
			</div>
			<!-- table end -->
			<div class="col-md-4 col-sm-6 col-xs-12 mb-xs-30">
				<div class="pricing_table shadow">
					<div class="package_title">
						<div class="pricing-top secondary_bg">
							<p>
								ADVANCED
							</p>
						</div>
						<div class="package-price">
							<span class="currency-symbol">$</span><span class="price">249</span><span class="duration">/month</span>
						</div>

					</div>
					<ul class="price_feature">
						<li>
							1 GB STORAGE
						</li>
						<li>
							3 DOMAIN NAMES
						</li>
						<li>
							5 FTP USERS
						</li>
						<li>
							FREE SUPPORT
						</li>
					</ul>
					<div class="price_btn">
						<a href="#!" class="btn xplus-btn pricing">Buy Now</a>
					</div>
				</div>
			</div>
			<!-- table end -->
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="pricing_table">
					<div class="package_title">
						<div class="pricing-top bg-color3">
							<p>
								BUSINESS
							</p>
						</div>
						<div class="package-price">
							<span class="currency-symbol">$</span><span class="price">299</span><span class="duration">/month</span>
						</div>

					</div>
					<ul class="price_feature">
						<li>
							1 GB STORAGE
						</li>
						<li>
							3 DOMAIN NAMES
						</li>
						<li>
							5 FTP USERS
						</li>
						<li>
							FREE SUPPORT
						</li>
					</ul>
					<div class="price_btn =">
						<a href="#!" class="btn xplus-btn pricing ">Buy Now</a>
					</div>
				</div>
			</div>

		</div>
		<!-- row end -->
	</div>
</section>

<!-- Pricing Table End-->
<!-- Get a Qoute -->

@if (!empty($QouteBanner))

	<style>

		.parallax {
			background: url('/uploads/banners/{{ $QouteBanner->file_vi }}') no-repeat;
		}

		.parallax, #overlay_block, .inner-intro {
			background-size: cover;
			width: 100%;
			background-attachment: fixed;
			background-position: center center;
		}

	</style>		
@endif
<section class="get-qoute padding ptb-xs-60 parallax overlay-dark">
	<div class="container">
		<div class="row text-center pb-30">
			<div class="col-sm-12">
				<div class="creative_heading light-color">
					<h2>Get a Qoute</h2>
				</div>

			</div>
		</div>
		<div class="row">
			<div class="col-sm-4 mb-30">
				<div class="form-field">
					<input class="input-lg form-full" id="name" type="text" name="form-name" placeholder="Your Name">
				</div>
			</div>
			<div class="col-sm-4 mb-30">
				<div class="form-field">
					<input class="input-lg form-full" id="email" type="text" name="form-email" placeholder="Email">
				</div>
			</div>
			<div class="col-sm-4 mb-30">
				<div class="form-field">
					<input class="input-lg form-full" id="sub" type="text" name="form-subject" placeholder="Subject">
				</div>
			</div>

			<div class="col-sm-12">
				<div class="form-field">
					<textarea class="form-full" id="message" rows="7" name="form-message" placeholder="Your Message"></textarea>
				</div>
			</div>
			<div class="col-sm-12 mt-30 text-center">
				<button class="btn-text" type="button" id="submit" name="button">
					Send Message
				</button>
			</div>
		</div>
	</div>
</section>
<!-- Get a Qoute -->
<!-- Testimonial -->
<section class="testimonial-section padding ptb-xs-60 ">
	<div class="container">
		<div class="row text-center pb-30">
			<div class="col-sm-12">
				<div class="creative_heading">
					<h2>Testimonials</h2>
				</div>

			</div>
		</div>
		<div class="row">

			<div class="carousel-slider carousel-box nf-carousel-theme arrow_theme light-color">
				<div class="carousel-item col-sm-4 ">
					<div class="testimonial-block bg-color">
						<figure class="testimonial-img">
							<img class="img-circle img-border" src="http://placehold.it/250x250" alt="">
						</figure>
						<h3 class="testimonial-author">Selly Thomas</h3>
						<hr class="small-divider">
						<p>
							At vero eos et accusamus et iusto odio dignissimos ducimus qui.
						</p>
						<span class="star"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </span>
					</div>
				</div>
				<div class="carousel-item col-sm-4 ">
					<div class="testimonial-block secondary_bg">
						<figure class="testimonial-img">
							<img class="img-circle img-border" src="http://placehold.it/250x250" alt="">
						</figure>
						<h3 class="testimonial-author writer">Jane Anselmo</h3>
						<hr class="small-divider">
						<p>
							At vero eos et accusamus et iusto odio dignissimos ducimus qui.
						</p>
						<span class="star"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </span>
					</div>
				</div>
				<div class="carousel-item col-sm-4 ">
					<div class="testimonial-block bg-color3">
						<figure class="testimonial-img">
							<img class="img-circle img-border" src="http://placehold.it/250x250" alt="">
						</figure>
						<h3 class="testimonial-author">Melisa Barry</h3>
						<hr class="small-divider">
						<p>
							At vero eos et accusamus et iusto odio dignissimos ducimus qui.
						</p>
						<span class="star"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Testimonial -->
<!--Overlay Block -->
@if (!empty($ParallaxBanner))

	<style>

		#overlay_block, .bg_img {
			background: url('/uploads/banners/{{ $ParallaxBanner->file_vi }}') no-repeat;
		}

	</style>		
@endif
<section class="padding ptb-xs-60 light-color parallax bg_img">
	<div class="container text-center padding ptb-xs-60">
		<div class="creative_heading light-color">
			<h2>Ready-made for Your Bussines</h2>
		</div>

		<p class="lead ptb-15">
			Ready to buy now? we can assure you that you wont regret it
		</p>

		<div class="row mt-20">
			<div class="col-sm-12 text-center btn-wrap">
				<a class="btn-text" href="#">View features</a>
				<a class="btn-text secondary_bg" href="#">PURCHASE NOW</a>
			</div>
		</div>
	</div>
</section>
<!--Overlay Block End -->

<!-- Blog Section -->
<section id="blog" class="padding ptb-xs-60  gray-bg new-blog">
	<div class="container">

		<div class="row text-center pb-30">
			<div class="col-sm-12">
				<div class="creative_heading">
					<h2>New Blog</h2>
				</div>

			</div>
		</div>

		<div class="row">
			<div class="col-sm-4 mb-xs-30">
				<div class="blog-post">
					<div class="post-media">
						<img src="http://placehold.it/850x400" alt="">
					</div>
					<div class="post-meta">
						<span>by <a href="javascript:avoid(0);">Admin</a>,</span><span> <a href="javascript:avoid(0);"><i class="fa fa-comment-o"></i> 25</a>,</span><span> <a href="javascript:avoid(0);"><i class="fa fa-heart-o"></i> 57</a>,</span>
					</div>
					<div class="post-header">
						<h4><a href="blog-detail.html">Maecenas nec odio ante varcy tincidunt</a></h4>
					</div>
					<div class="post-entry">
						<p>
							Perspiciatis unde omnis iste natus doxes sit voluptatem accusantium dantiumeaque ipsa quae ab illos
						</p>
					</div>
					<div class="post-more-link pull-left">
						<a href="blog-detail.html" class="btn-text ">Read More</a>
					</div>
				</div>
			</div>

			<div class="col-sm-4 mb-xs-30">
				<div class="blog-post">
					<div class="post-media">
						<img src="http://placehold.it/850x400" alt="">
					</div>
					<div class="post-meta">
						<span>by <a href="javascript:avoid(0);">Admin</a>,</span><span> <a href="javascript:avoid(0);"><i class="fa fa-comment-o"></i> 15</a>,</span><span> <a href="javascript:avoid(0);"><i class="fa fa-heart-o"></i> 39</a>,</span>
					</div>
					<div class="post-header">
						<h4><a href="blog-detail.html">Maecenas nec odio ante varcy tincidunt</a></h4>
					</div>
					<div class="post-entry">
						<p>
							Perspiciatis unde omnis iste natus doxes sit voluptatem accusantium dantiumeaque ipsa quae ab illos
						</p>
					</div>
					<div class="post-more-link pull-left">
						<a href="blog-detail.html" class="btn-text">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4 mb-xs-30">
				<div class="blog-post">
					<div class="post-media">
						<img src="http://placehold.it/850x400" alt="">
					</div>
					<div class="post-meta">
						<span>by <a href="javascript:avoid(0);">Admin</a>,</span><span> <a href="javascript:avoid(0);"><i class="fa fa-comment-o"></i> 25</a>,</span><span> <a href="javascript:avoid(0);"><i class="fa fa-heart-o"></i> 57</a>,</span>
					</div>
					<div class="post-header">
						<h4><a href="blog-detail.html">Maecenas nec odio ante varcy tincidunt</a></h4>
					</div>
					<div class="post-entry">
						<p>
							Perspiciatis unde omnis iste natus doxes sit voluptatem accusantium dantiumeaque ipsa quae ab illos
						</p>
					</div>
					<div class="post-more-link pull-left">
						<a href="blog-detail.html" class="btn-text ">Read More</a>
					</div>
				</div>
			</div>

		</div>

	</div>
</section>
<!-- End Blog Section -->

@stop
