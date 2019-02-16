
@extends('xpro.layout-2')

@section('content')

	<!-- Intro Section -->
	<section class="inner-intro  padding bg-img1 overlay-dark light-color">
		<div class="container">
			<div class="row title">
				<h1>{{ $Topic->title_vi }}</h1>
				<div class="page-breadcrumb">
					<a>Dũng Thịnh</a>/<span>{{ $Topic->title_vi }}</span>
				</div>
			</div>
		</div>
	</section>
	<!-- End Intro Section -->

	<!-- About Section -->
	<div id="about-section" class="padding pt-xs-60">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-8">
					<div class="heading-box pb-30">
						<h2>Nhiệm vụ <span>của chúng tôi</span></h2>
						<span class="b-line l-left"></span>
					</div>
					<div class="text-content">
						<p>
							Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt.
							Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt.
						</p>
					</div>
					<hr class="divider">
					<div class="post-content">
						<div class="post-img">
							<img class="img-responsive" src="http://placehold.it/750x260" alt="Photo">
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="bg-color our-vision light-color padding-40">
						<div class="heading-box pb-30">
							<h2><span>Our</span> Vision</h2>
							<span class="b-line l-left secondary_bg"></span>
						</div>

						<p>
							Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt.
							Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt.
							Aenean suscipit eget mi act fermentum  tincidunt.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About Section End-->
	<!-- Story Section -->
	<div id="story-section" class="padding ptb-xs-60 gray-bg">
		<div class="container">
			<div class="row ">
				<div class="col-sm-12">
					<div class="heading-box pb-30 text-center">
						<h2><span>Quá trình</span> phát triển</h2>
						<span class="b-line"></span>
					</div>

				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="ui-timline-container">
						<div class="ui-timeline">
							<div class="tl-item">
								<div class="tl-body">
									<div class="tl-entry">
										<div class="tl-caption">
											<a href="javascript:;" class="btn btn-primary btn-block">JOURNEY</a>
										</div>
									</div>
								</div>
							</div>
							<div class="tl-item">
								<div class="tl-body">
									<div class="tl-entry">
										<div class="tl-time">
											2013
										</div>
										<div class="tl-icon btn-icon-round btn-icon btn-icon-thin btn-info">
											<i class="fa fa-asterisk"></i>
										</div>
										<div class="tl-content">
											<h4 class="tl-tile text-primary">Go hiking</h4>
											<p>
												Consectetur adipisicing elit. Error, accusantium debitis voluptatem dolore excepturi ducimus fugiat nulla perspiciatis quo ipsum non eligendi nisi veniam maxime in quas atque omnis cumque!
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="tl-item alt">
								<div class="tl-body">
									<div class="tl-entry">
										<div class="tl-time">
											2014
										</div>
										<div class="tl-icon btn-icon-round btn-icon btn-icon-thin btn-warning">
											<i class="fa fa-shopping-cart"></i>
										</div>
										<div class="tl-content">
											<h4 class="tl-tile text-danger">Buy some toys</h4>
											<p>
												Ullam, commodi, modi, impedit nostrum odio sit odit necessitatibus accusantium enim voluptates culpa cupiditate cum pariatur a recusandae tenetur aspernatur at beatae.
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="tl-item">
								<div class="tl-body">
									<div class="tl-entry">
										<div class="tl-time">
											2015
										</div>
										<div class="tl-icon btn-icon-round btn-icon btn-icon-thin btn-success">
											<i class="fa fa-camera"></i>
										</div>
										<div class="tl-content">
											<h4 class="tl-tile text-warning">Soluta nihil</h4>
											<p>
												Incidunt, molestias odio soluta nihil accusantium sit nostrum doloremque. Recusandae, ullam, odio consequatur facere totam reiciendis similique dicta explicabo!
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="tl-item alt">
								<div class="tl-body">
									<div class="tl-entry">
										<div class="tl-time">
											2017
										</div>
										<div class="tl-icon btn-icon-round btn-icon btn-icon-thin btn-danger">
											<i class="fa fa-check"></i>
										</div>
										<div class="tl-content">
											<h4 class="tl-tile text-success">Odio sit odit necessitatibus</h4>
											<p>
												Ullam, commodi, modi, impedit nostrum odio sit odit necessitatibus accusantium enim voluptates culpa cupiditate cum pariatur a recusandae tenetur aspernatur at beatae.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Mission Section -->
	<div id="mission-section" class="padding ptb-xs-60">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="heading-box pb-30">
						<h2><span>Tư tưởng</span> lãnh đạo</h2>
						<span class="b-line l-left"></span>
					</div>

				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="about-block clearfix">
						<div class="fl width-25per box-shadow  mb-xs-15">
							<img class="img-responsive" src="http://placehold.it/285x335" alt="Photo">
						</div>
						<div class="text-box pt-45 pb-15 pl-70 pl-xs-0 width-75per fl mt-xs-30">
							<div class="box-title">
								<h3>We Are On Mission</h3>
							</div>
							<div class="text-content">
								<p>
									Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget..
									Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget
								</p>
								<p>
									Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget..
									Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget
								</p>
							</div>
						</div>
					</div>
					<div class="about-block mb-40 mt-40 clearfix">
						<div class="fr width-25per box-shadow-l mb-xs-15">
							<img class="img-responsive" src="http://placehold.it/285x335" alt="Photo">
						</div>
						<div class="text-box text-right text-xs-left pt-45 pr-70 pr-xs-0 mt-xs-30 width-75per fl">
							<div class="box-title">
								<h3>We Are On Mission</h3>
							</div>
							<div class="text-content">
								<p>
									Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget..
									Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget
								</p>
								<p>
									Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget..
									Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Partner Section -->
	<div id="partner-section" class="padding ptb-xs-60 gray-bg">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="heading-box pb-30 text-center">
						<h2><span>Our</span> Partners</h2>
						<span class="b-line"></span>
					</div>

				</div>
			</div>
		<div class="row">
				<div class="col-sm-12">
					<ul class="logo-group">
						<li class="partner-logo border-b">
							<img src="http://placehold.it/135x140" alt="">
						</li>
						<li class="partner-logo border-b">
							<img src="http://placehold.it/135x140" alt="">
						</li>
						<li class="partner-logo border-b">
							<img src="http://placehold.it/135x140" alt="">
						</li>
						<li class="partner-logo border-b">
							<img src="http://placehold.it/135x140" alt="">
						</li>
						<li class="partner-logo border-b border-r">
							<img src="http://placehold.it/135x140" alt="">
						</li>
						<li class="partner-logo">
							<img src="http://placehold.it/135x140" alt="">
						</li>
						<li class="partner-logo">
							<img src="http://placehold.it/135x140" alt="">
						</li>
						<li class="partner-logo ">
							<img src="http://placehold.it/135x140" alt="">
						</li>
						<li class="partner-logo">
							<img src="http://placehold.it/135x140" alt="">
						</li>
						<li class="partner-logo border-r">
							<img src="http://placehold.it/135x140" alt="">
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

@stop
