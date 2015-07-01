<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/css/bootstrap.css" />
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/css/linea-icon.css" />
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/css/fancy-buttons.css" />
	
	<!--=== Google Fonts ===-->
	<link href='http://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300,700,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:600,400,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<!--=== Other CSS files ===-->
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/css/animate.css" />
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/css/jquery.vegas.css" />
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/css/baraja.css" />
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/css/jquery.bxslider.css" />
	
	<!--=== Main Stylesheets ===-->
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/css/style.css" />
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/css/responsive.css" />
	
	<!--=== Color Scheme, three colors are available red.css, orange.css and gray.css ===-->
	<link rel="stylesheet" id="scheme-source" href="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/css/schemes/gray.css" />
	
	<!--=== Internet explorer fix ===-->
	<!-- [if lt IE 9]>
		<script src="http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="http://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif] -->
	
	
</head>
<body>
	<!--=== Preloader section starts ===-->
	<section id="preloader">
		<div class="loading-circle fa-spin"></div>
	</section>
	<!--=== Preloader section Ends ===-->
	
	<!--=== Header section Starts ===-->
	<div id="header" class="header-section">
		<!-- sticky-bar Starts-->
		<div class="sticky-bar-wrap">
			<div class="sticky-section">
				<div id="topbar-hold" class="nav-hold container">
					<nav class="navbar" role="navigation">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-responsive-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
							</button>
							<!--=== Site Name ===-->
							<a class="site-name navbar-brand" href="#"><span>E</span>gret</a>
						</div>
						
						<!-- Main Navigation menu Starts -->
						<div class="collapse navbar-collapse navbar-responsive-collapse">
							<ul class="nav navbar-nav navbar-right">
								<li class="current"><a href="#header">Home</a></li>
								<li><a href="#section-feature">Features</a></li>
								<li><a href="#section-services">Services</a></li>
								<li><a href="#step-1">Work Flow</a></li>
								<li><a href="#section-screenshots">Screenshots</a></li>
								<li><a href="#section-pricing">Pricing</a></li>
								<li><a href="#section-download">Download</a></li>
							</ul>
						</div>
						<!-- Main Navigation menu ends-->
					</nav>
				</div>
			</div>
		</div>
		<!-- sticky-bar Ends-->
		<!--=== Header section Ends ===-->
		
		<!--=== Home Section Starts ===-->
		<div id="section-home" class="home-section-wrap center">
			<div class="section-overlay"></div>
			<div class="container home">
				<div class="row">
					<h1 class="well-come">Fly like Egret</h1>
					
					<div class="col-md-8 col-md-offset-2">
						<p class="intro-message">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet qui dolorem</p>
						
						<div class="home-buttons">
							<a href="#" class="fancy-button button-line button-white vertical">
								Learn more
								<span class="icon">
									<i class="fa fa-gear"></i>
								</span>
							</a>
							<a href="#" class="fancy-button button-line button-white zoom">
								Download now
								<span class="icon">
									<i class="fa fa-leaf"></i>
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--=== Home Section Ends ===-->
	</div>
	
	
	<!--=== Features section Starts ===-->
	<section id="section-feature" class="feature-wrap">
		<div class="container features center">
			<div class="row">
				<div class="col-lg-12">
						<!--Features container Starts -->
						<ul id="card-ul" class="features-hold baraja-container">
						
							<!-- Single Feature Starts -->
							<li class="single-feature" title="Card style">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/images/5.jpg" alt="" class="feature-image" /><!-- Feature Icon -->
								<h4 class="feature-title color-scheme">Card style</h4>
								<p class="feature-text">
									Curabitur posuere feugiat ipsum, sed elementum tortor maximus ut.
								</p>
								
									<a href="#" class="fancy-button button-line btn-col small vertical">
										Details
										<span class="icon">
											<i class="fa fa-leaf"></i>
										</span>
									</a>
								
							</li>
							<!-- Single Feature Ends -->
							
							<!-- Single Feature Starts -->
							<li class="single-feature" title="50+ SVG Icon included">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/images/2.jpg" alt="" class="feature-image" /><!-- Feature Icon -->
								<h4 class="feature-title color-scheme">50+ SVG Icon included</h4>
								<p class="feature-text">
									Curabitur posuere feugiat ipsum, sed elementum tortor maximus ut
								</p>
								<a href="#" class="fancy-button button-line btn-col small zoom">
									Details
									<span class="icon">
										<i class="fa fa-leaf"></i>
									</span>
								</a>
							</li>
							<!-- Single Feature Ends -->
							
							<!-- Single Feature Starts -->
							<li class="single-feature" title="MailChimp Ready">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/images/3.jpg" alt="" class="feature-image" /><!-- Feature Icon -->
								<h4 class="feature-title color-scheme">MailChimp Ready</h4>
								<p class="feature-text">
									Curabitur posuere feugiat ipsum, sed elementum tortor maximus ut
								</p>
								<a href="#" class="fancy-button button-line btn-col small zoom">
									Details
									<span class="icon">
										<i class="fa fa-leaf"></i>
									</span>
								</a>
							</li>
							<!-- Single Feature Ends -->
							
							<!-- Single Feature Starts -->
							<li class="single-feature" title="4 home style">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/images/4.jpg" alt="" class="feature-image" /><!-- Feature Icon -->
								<h4 class="feature-title color-scheme">4 home style</h4>
								<p class="feature-text">
									Curabitur posuere feugiat ipsum, sed elementum tortor maximus ut
								</p>
								<a href="#" class="fancy-button button-line btn-col small zoom">
									Details
									<span class="icon">
										<i class="fa fa-leaf"></i>
									</span>
								</a>
							</li>
							<!-- Single Feature Ends -->
							
							<!-- Single Feature Starts -->
							<li class="single-feature" title="Parallax Backgrounds">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/images/5.jpg" alt="" class="feature-image" /><!-- Feature Icon -->
								<h4 class="feature-title color-scheme">Parallax Backgrounds</h4>
								<p class="feature-text">
									Curabitur posuere feugiat ipsum, sed elementum tortor maximus ut
								</p>
								<a href="#" class="fancy-button button-line btn-col small zoom">
									Details
									<span class="icon">
										<i class="fa fa-leaf"></i>
									</span>
								</a>
							</li>
							<!-- Single Feature Ends -->
							
							<!-- Single Feature Starts -->
							<li class="single-feature" title="Ajax contact form">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/images/6.jpg" alt="" class="feature-image" /><!-- Feature Icon -->
								<h4 class="feature-title color-scheme">Ajax contact form</h4>
								<p class="feature-text">
									Curabitur posuere feugiat ipsum, sed elementum tortor maximus ut
								</p>
								<a href="#" class="fancy-button button-line btn-col small zoom">
									Details
									<span class="icon">
										<i class="fa fa-leaf"></i>
									</span>
								</a>
							</li>
							<!-- Single Feature Ends -->
							
							<!-- Single Feature Starts -->
							<li class="single-feature" title="unlimited Google fonts">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/images/7.jpg" alt="" class="feature-image" /><!-- Feature Icon -->
								<h4 class="feature-title color-scheme">unlimited Google fonts</h4>
								<p class="feature-text">
									Curabitur posuere feugiat ipsum, sed elementum tortor maximus ut
								</p>
								<a href="#" class="fancy-button button-line btn-col small zoom">
									Details
									<span class="icon">
										<i class="fa fa-leaf"></i>
									</span>
								</a>
							</li>
							<!-- Single Feature Ends -->
							
							<!-- Single Feature Starts -->
							<li class="single-feature" title="Feature heading">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/images/8.jpg" alt="" class="feature-image" /><!-- Feature Icon -->
								<h4 class="feature-title color-scheme">Feature heading</h4>
								<p class="feature-text">
									Curabitur posuere feugiat ipsum, sed elementum tortor maximus ut
								</p>
								<a href="#" class="fancy-button button-line btn-col small zoom">
									Details
									<span class="icon">
										<i class="fa fa-leaf"></i>
									</span>
								</a>
							</li>
							<!-- Single Feature Ends -->
						</ul>
						<!--Features container Ends -->
						
						<!-- Features Controls Starts -->
						<div class="features-control relative">
							<button class="control-icon fancy-button button-line no-text btn-col bell" id="feature-prev" title="Previous" >
								<span class="icon">
									<i class="fa fa-arrow-left"></i>
								</span>
							</button>
							<button class="control-icon fancy-button button-line no-text btn-col zoom" id="feature-expand" title="Expand" >
								<span class="icon">
									<i class="fa fa-expand"></i>
								</span>
							</button>
							<button class="control-icon fancy-button button-line no-text btn-col zoom" id="feature-close" title="Collapse" >
								<span class="icon">
									<i class="fa fa-compress"></i>
								</span>
							</button>
							<button class="control-icon fancy-button button-line no-text btn-col bell" id="feature-next" title="Next" >
								<span class="icon">
									<i class="fa fa-arrow-right"></i>
								</span>
							</button>
						</div>
						<!-- Features Controls Ends -->
				</div>
			</div>
		</div>
	</section>
	<!--=== Features section Ends ===-->
	
	<!--=== Services section Starts ===-->
	<section id="section-services" class="services-wrap">
		<div class="container services">
			<div class="row">
			
				<div class="col-md-10 col-md-offset-1 center section-title">
					<h3>What we do best</h3>
				</div>
			
				<!-- Single Service Starts -->
				<div class="col-md-6 col-sm-6 service animated" data-animation="fadeInLeft" data-animation-delay="700">
					<span class="service-icon center"><i class="icon icon-basic-book-pencil fa-3x"></i></span>
					<div class="service-desc">
						<h4 class="service-title color-scheme">Clean Design</h4>
						<p class="service-description justify">
							Cillum laboris consequat, qui elit retro next level skateboard freegan hella.
							Cillum laboris consequat, qui elit retro next level skateboard freegan hella.
						</p>
					</div>
				</div>
				<!-- Single Service Ends -->
				
				<!-- Single Service Starts -->
				<div class="col-md-6 col-sm-6 service animated" data-animation="fadeInUp" data-animation-delay="700">
					<span class="service-icon center"><i class="icon icon-basic-paperplane fa-3x"></i></span>
					<div class="service-desc">
						<h4 class="service-title color-scheme">Full responsive</h4>
						<p class="service-description justify">
							Cillum laboris consequat, qui elit retro next level skateboard freegan hella.
							Cillum laboris consequat, qui elit retro next level skateboard freegan hella.
						</p>
					</div>
				</div>
				<!-- Single Service ends -->
				
				<!-- Single Service Starts -->
				<div class="col-md-6 col-sm-6 service animated" data-animation="fadeInRight" data-animation-delay="700">
					<span class="service-icon center"><i class="icon icon-basic-accelerator fa-3x"></i></span>
					<div class="service-desc">
						<h4 class="service-title color-scheme">Ajax contact form</h4>
						<p class="service-description justify">
							Cillum laboris consequat, qui elit retro next level skateboard freegan hella.
							Cillum laboris consequat, qui elit retro next level skateboard freegan hella.
						</p>
					</div>
				</div>
				<!-- Single Service Ends -->
				
				<!-- Single Service Starts -->
				<div class="col-md-6 col-sm-6 service animated" data-animation="fadeInUp" data-animation-delay="700">
					<span class="service-icon center"><i class="icon icon-basic-lightbulb fa-3x"></i></span>
					<div class="service-desc">
						<h4 class="service-title color-scheme">Mailchimp ready</h4>
						<p class="service-description justify">
							Cillum laboris consequat, qui elit retro next level skateboard freegan hella.
							Cillum laboris consequat, qui elit retro next level skateboard freegan hella.
						</p>
					</div>
				</div>
				<!-- Single Service Ends -->
			</div>
		</div>
	</section>
	<!--=== Services section Ends ===-->
	
	<!--=== Step-1 section Starts ===-->
	<section id="step-1" class="section-step step-wrap">
		<div class="container step animated" data-animation="bounceInLeft" data-animation-delay="700">
			<div class="row">
				<!-- Step Description Starts -->
				<div class="col-md-8 step-desc">
					<div class="col-md-2 center">
						<div class="step-no">
							<span class="no-inner">1</span>
						</div>
					</div>
					
					<div class="col-md-10 step-details">
							<h3 class="step-title color-scheme">Work flow title here</h3>
							<p class="step-description">Cillum laboris <strong>consequat</strong>, qui elit retro next level 
							skateboard freegan hella. Cillum laboris consequat qui elit retro next level 
							skateboard freegan hella. Cillum laboris consequat skateboard freegan hella</p>
							
							<ul class="sub-steps"> <!-- Sub steps here -->
								<li>
									<span class="icon fa fa-comments color-scheme"></span>
									<span class="sub-text">skateboard freegan hella. Cillum laboris consequat qui elit</span>
								</li>
								<li>
									<span class="icon fa fa-pencil-square-o color-scheme"></span>
									<span class="sub-text">Documenting collected data</span>
								</li>
							</ul>
					</div> <!-- End step-details -->
				</div>
				<!-- Step Description Ends -->
				<div class="col-md-4 step-img">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/images/note.png" alt="" /> <!-- Step Photo Here -->
				</div>
			</div>
		</div>
	</section>
	<!--=== Step-1 section Ends ===-->
	
	<!--=== Step-2 section Starts ===-->
	<section id="step-2" class="section-step step-even step-wrap">
		<div class="container step animated" data-animation="bounceInRight" data-animation-delay="700">
			<div class="row">
				<!-- Step Description Starts -->
				<div class="col-md-8 step-desc">
					<div class="col-md-2 center">
						<div class="step-no">
							<span class="no-inner">2</span>
						</div>
					</div>
					
					<div class="col-md-10 step-details">
							<h3 class="step-title color-scheme">Work flow title here</h3>
							<p class="step-description">Cillum laboris <strong>consequat</strong>, qui elit retro next level 
							skateboard freegan hella. Cillum laboris consequat qui elit retro next level 
							skateboard freegan hella. Cillum laboris consequat skateboard freegan hella</p>
							
							<ul class="sub-steps"> <!-- Sub steps here -->
								<li>
									<span class="icon fa fa-comments color-scheme"></span>
									<span class="sub-text">skateboard freegan hella. Cillum laboris consequat qui elit</span>
								</li>
								<li>
									<span class="icon fa fa-pencil-square-o color-scheme"></span>
									<span class="sub-text">Documenting collected data</span>
								</li>
								
							</ul>
					</div><!-- End step-details -->
				</div>
				<!-- Step Description Ends -->
				<div class="col-md-4 step-img">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/images/desk.png" alt="" /> <!-- Step Photo Here -->
				</div>
			</div>
		</div>
	</section>
	<!--=== Step-2 section Ends ===-->
	
	<!--=== Video section Starts ===-->
	<section id="section-video" class="section-video-wrap">
		<div class="section-overlay"></div>
		<div class="container big-video center animated" data-animation="fadeInLeft" data-animation-delay="700">
			<div class="row">
				<div class="col-md-12 section-title">
					<h3>Describe with a video</h3>
				</div>
				<div class="col-md-10 col-md-offset-1 video-content">
					<iframe src="http://player.vimeo.com/video/75317749?title=0&amp;byline=0&amp;portrait=0" width="400" height="240"></iframe>
				</div>
			</div>
		</div>
	</section>
	<!--=== Video section Ends ===-->
	
	<!--=== ScreenShots section Starts ===-->
	<section id="section-screenshots" class="screenshots-wrap">
		<div class="container screenshots animated" data-animation="fadeInUp" data-animation-delay="1000">
			<div class="row porfolio-container">
				<div class="col-md-10 col-md-offset-1 center section-title">
					<h3>Our Latest Projects</h3>
				</div>
				<!-- Single screenshot starts -->
				<div class="col-md-4 col-sm-4 col-xs-6">
					<div class="screenshot">
						<div class="photo-box">
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/images/7.jpg" alt="" />
							<div class="photo-overlay">
								<h4>Wordpress theme</h4>
							</div>
							<span class="photo-zoom">
								<a href="single-project.html" class="view-project"><i class="fa fa-search-plus fa-2x"></i></a>
							</span>
						</div>
					</div>
				</div>
				<!-- Single screenshot ends -->
				
				<!-- Single screenshot starts -->
				<div class="col-md-4 col-sm-4 col-xs-6">
					<div class="screenshot">
						<div class="photo-box">
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/images/2.jpg" alt="" />
							<div class="photo-overlay">
								<h4>User Interface design</h4>
							</div>
							<span class="photo-zoom">
								<a href="single-project-2.html" class="view-project"><i class="fa fa-search-plus fa-2x"></i></a>
							</span>
						</div>
						
					</div>
				</div>
				<!-- Single screenshot ends -->
				
				<!-- Single screenshot starts -->
				<div class="col-md-4 col-sm-4 col-xs-6">
					<div class="screenshot">
						<div class="photo-box">
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/images/3.jpg" alt="" />
							<div class="photo-overlay">
								<h4>PSD template design</h4>
							</div>
							<span class="photo-zoom">
								<a href="single-project.html" class="view-project"><i class="fa fa-search-plus fa-2x"></i></a>
							</span>
						</div>
						
					</div>
				</div>
				<!-- Single screenshot ends -->
				
				<!-- Single screenshot starts -->
				<div class="col-md-4 col-sm-4 col-xs-6">
					<div class="screenshot">
						<div class="photo-box">
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/images/4.jpg" alt="" />
							<div class="photo-overlay">
								<h4>User Experience design</h4>
							</div>
							<span class="photo-zoom">
								<a href="single-project-2.html" class="view-project"><i class="fa fa-search-plus fa-2x"></i></a>
							</span>
						</div>
						
					</div>
				</div>
				<!-- Single screenshot ends -->
				
				<!-- Single screenshot starts -->
				<div class="col-md-4 col-sm-4 col-xs-6">
					<div class="screenshot">
						<div class="photo-box">
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/images/5.jpg" alt="" />
							<div class="photo-overlay">
								<h4>Page builder plugin</h4>
							</div>
							<span class="photo-zoom">
								<a href="single-project.html" class="view-project"><i class="fa fa-search-plus fa-2x"></i></a>
							</span>
						</div>
						
					</div>
				</div>
				<!-- Single screenshot ends -->
				
				<!-- Single screenshot starts -->
				<div class="col-md-4 col-sm-4 col-xs-6">
					<div class="screenshot">
						<div class="photo-box">
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/images/6.jpg" alt="" />
							<div class="photo-overlay">
								<h4>Corporate website</h4>
							</div>
							<span class="photo-zoom">
								<a href="single-project-2.html" class="view-project"><i class="fa fa-search-plus fa-2x"></i></a>
							</span>
						</div>
						
					</div>
				</div>
				<!-- Single screenshot ends -->
				
			</div>
			
			<div id="portfolio-loader" class="center">
				<div class="loading-circle fa-spin"></div>
			</div> <!--=== Portfolio loader ===-->
			
			<div id="portfolio-load"></div><!--=== ajax content will be loaded here ===-->
			
			<div class="col-md-12 center back-button">
				<a class="backToProject fancy-button button-line bell btn-col" href="#">
					Back
					<span class="icon">
						<i class="fa fa-arrow-left"></i>
					</span>
				</a>
			</div><!--=== Single portfolio back button ===-->
		</div>
	</section>
	<!--=== ScreenShots section Ends ===-->
	
	<!--=== Testimonials section Starts ===-->
	<section id="section-testimonials" class="testimonials-wrap">
		<div class="section-overlay"></div>
		<div class="container testimonials center animated" data-animation="rollIn" data-animation-delay="500">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="testimonial-slider">
						<!-- Single Testimonial Starts -->
						<div class="testimonial">
							<p class="comment">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu sem ante. Nullam quis risus eu 
								purus commodo dignissim. Donec iaculis ac ex vel posuere. Sed posuere, elit vitae mattis condimentum, 
								quam urna fringilla magna
							</p>
							
							<h5 class="happy-client">Jhon Doe</h5>
							<span class="client-info">Executive at CDF Corp.</span>
						</div>
						<!-- Single Testimonial Ends -->
						
						<!-- Single Testimonial Starts -->
						<div class="testimonial">
							<p class="comment">
								Dolor sit amet, consectetur adipiscing elit. Nullam eu sem ante. Nullam quis risus eu 
								purus commodo dignissim. Donec iaculis ac ex vel posuere. Sed posuere, elit vitae mattis condimentum, 
								quam urna fringilla magna
							</p>
							
							<h5 class="happy-client">JB Jeniffer</h5>
							<span class="client-info">Developer at TTF Corp.</span>
						</div>
						<!-- Single Testimonial Ends -->
						
						<!-- Single Testimonial Starts -->
						<div class="testimonial">
							<p class="comment">
								Consectetur adipiscing elit. Nullam eu sem ante. Nullam quis risus eu 
								purus commodo dignissim. Donec iaculis ac ex vel posuere. Sed posuere, elit vitae mattis condimentum, 
								quam urna fringilla magna
							</p>
							
							<h5 class="happy-client">Chan Jhin</h5>
							<span class="client-info">CEO of MutiNaTakio.</span>
						</div>
						<!-- Single Testimonial Ends -->
					</div>
					<div id="bx-pager" class="client-photos">
						<a data-slide-index="0" href="" class="photo-hold">
							<span class="photo-bg">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/images/client_1.jpg" alt="" /> <!-- Client photo 1 -->
							</span>
						</a>
						<a data-slide-index="1" href="" class="photo-hold">
							<span class="photo-bg">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/images/client_2.jpg" alt="" /> <!-- Client photo 2 -->
							</span>
						</a>
						<a data-slide-index="2" href="" class="photo-hold">
							<span class="photo-bg">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/images/client_3.jpg" alt="" /> <!-- Client photo 3 -->
							</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--=== Testimonials section Ends ===-->
	
	
	<!--=== Pricing section Starts ===-->
	<section id="section-pricing" class="pricing-wrap">
		<div class="container pricing">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 center section-title">
					<h3>Plans & pricing</h3>
				</div>
				<!-- Single Price Starts -->
				<div class="col-md-3 col-sm-6 single-pricing-wrap center animated" data-animation="bounceInLeft" data-animation-delay="500">
					<div class="single-pricing">
					
						<div class="pricing-head">
							<h4 class="pricing-heading color-scheme">Basic</h4>
							<div class="price">
								<h3>
									<span class="dollar">$</span>
									40
									<span class="month">/month</span>
								</h3>
							</div>
						</div>
						
						<ul class="package-features">
							<li><span class="color-scheme fa fa-check"></span>Unlimited Downloads</li>
							<li><span class="color-scheme fa fa-check"></span>Unlimited Uploads</li>
							<li><span class="color-scheme fa fa-check"></span>Unlimited Email Accounts</li>
							<li><span class="color-scheme fa fa-check"></span>Email Forwards</li>
							<li><span class="color-scheme fa fa-close"></span>Cloud Storage</li>
							<li><span class="color-scheme fa fa-close"></span>Voice call</li>
							<li><span class="color-scheme fa fa-close"></span>Screen Share</li>
						</ul>
						<div class="sign-up">
							<a href="#" class="fancy-button button-line btn-col zoom">
								Sign up
								<span class="icon">
									<i class="fa fa-thumbs-o-up"></i>
								</span>
							</a>
						</div>
					</div>
				</div>
				<!-- Single Price Ends -->
				
				
				<!-- Single Price Starts -->
				<div class="col-md-3 col-sm-6 single-pricing-wrap center animated" data-animation="bounceInLeft" data-animation-delay="700">
					<div class="single-pricing best-pricing"> <!-- this is best-pricing -->
					
						<div class="pricing-head">
							<h4 class="pricing-heading color-scheme">Advance</h4>
							<div class="price">
								<h3>
									<span class="dollar">$</span>
									60
									<span class="month">/month</span>
								</h3>
							</div>
						</div>
						
						<ul class="package-features">
							<li><span class="color-scheme fa fa-check"></span>Unlimited Downloads</li>
							<li><span class="color-scheme fa fa-check"></span>Unlimited Uploads</li>
							<li><span class="color-scheme fa fa-check"></span>Unlimited Email Accounts</li>
							<li><span class="color-scheme fa fa-check"></span>Email Forwards</li>
							<li><span class="color-scheme fa fa-check"></span>Cloud Storage</li>
							<li><span class="color-scheme fa fa-close"></span>Voice call</li>
							<li><span class="color-scheme fa fa-close"></span>Screen Share</li>
						</ul>
						<div class="sign-up">
							<a href="#" class="fancy-button button-line btn-col vertical">
								Sign up
								<span class="icon">
									<i class="fa fa-hand-o-up"></i>
								</span>
							</a>
						</div>
					</div>
				</div>
				<!-- Single Price Ends -->
				
				<!-- Single Price Starts -->
				<div class="col-md-3 col-sm-6 single-pricing-wrap center animated" data-animation="bounceInLeft" data-animation-delay="900">
					<div class="single-pricing">
					
						<div class="pricing-head">
							<h4 class="pricing-heading color-scheme">Premium</h4>
							<div class="price">
								<h3>
									<span class="dollar">$</span>
									80
									<span class="month">/month</span>
								</h3>
							</div>
						</div>
						
						<ul class="package-features">
							<li><span class="color-scheme fa fa-check"></span>Unlimited Downloads</li>
							<li><span class="color-scheme fa fa-check"></span>Unlimited Uploads</li>
							<li><span class="color-scheme fa fa-check"></span>Unlimited Email Accounts</li>
							<li><span class="color-scheme fa fa-check"></span>Email Forwards</li>
							<li><span class="color-scheme fa fa-check"></span>Cloud Storage</li>
							<li><span class="color-scheme fa fa-check"></span>Voice call</li>
							<li><span class="color-scheme fa fa-close"></span>Screen Share</li>
						</ul>
						<div class="sign-up">
							<a href="#" class="fancy-button button-line btn-col rotate">
								Sign up
								<span class="icon">
									<i class="fa fa-thumbs-o-up"></i>
								</span>
							</a>
						</div>
					</div>
				</div>
				<!-- Single Price Ends -->
				
				<!-- Single Price Starts -->
				<div class="col-md-3 col-sm-6 single-pricing-wrap center animated" data-animation="bounceInLeft" data-animation-delay="1100">
					<div class="single-pricing">
					
						<div class="pricing-head">
							<h4 class="pricing-heading color-scheme">Ultra</h4>
							<div class="price">
								<h3>
									<span class="dollar">$</span>
									100
									<span class="month">/month</span>
								</h3>
							</div>
						</div>
						
						<ul class="package-features">
							<li><span class="color-scheme fa fa-check"></span>Unlimited Downloads</li>
							<li><span class="color-scheme fa fa-check"></span>Unlimited Uploads</li>
							<li><span class="color-scheme fa fa-check"></span>Unlimited Email Accounts</li>
							<li><span class="color-scheme fa fa-check"></span>Email Forwards</li>
							<li><span class="color-scheme fa fa-check"></span>Cloud Storage</li>
							<li><span class="color-scheme fa fa-check"></span>Voice call</li>
							<li><span class="color-scheme fa fa-check"></span>Screen Share</li>
						</ul>
						<div class="sign-up">
							<a href="#" class="fancy-button button-line btn-col zoom">
								Sign up
								<span class="icon">
									<i class="fa fa-thumbs-o-up"></i>
								</span>
							</a>
						</div>
					</div>
				</div>
				<!-- Single Price Ends -->
				
			</div>
		</div>
	</section>
	<!--=== Pricing section Ends ===-->
	
	<!--=== Subscribe section Starts ===-->
	<section id="section-subscribe" class="subscribe-wrap">
		<div class="section-overlay"></div>
		<div class="container subscribe center">
			<div class="row">
				<div class="col-lg-12">
					<p class="subscription-success"></p>
					<p class="subscription-failed"></p>
					<div class="col-md-10 col-md-offset-1 center section-title">
						<h3>Newsletter</h3>
					</div>
					<form id="subscription-form">
						<input type="email" name="EMAIL" required="required" placeholder="Your Email" class="input-email" />
						<button type="submit" id="subscription-btn" class="fancy-button button-line button-white large zoom">
							Subscribe
							<span class="icon">
								<i class="fa fa-sign-in"></i>
							</span>
						</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!--=== Subscribe section Ends ===-->
	
	
	<!--=== Download section Starts ===-->
	<section id="section-download" class="download-wrap">
		<div class="container download center">
			<div class="row">
				<div class="col-lg-12">
					<div class="col-md-10 col-md-offset-1 center section-title">
						<h3>Download app</h3>
					</div>
					<div class="download-buttons clearfix"> <!-- Download Buttons -->
						<a class="fancy-button button-line no-text btn-col large zoom" href="#" title="Download from App store">
							<span class="icon">
							<i class="fa fa-apple"></i>
							</span>
						</a>
						<a class="fancy-button button-line btn-col no-text large zoom" href="#" title="Download from App store">
							<span class="icon">
							<i class="fa fa-android"></i>
							</span>
						</a>
						<a class="fancy-button button-line btn-col no-text large zoom" href="#" title="Download from App store">
							<span class="icon">
							<i class="fa fa-windows"></i>
							</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--=== Download section Ends ===-->
	
	
	<!--=== Contact section Starts ===-->
	<section id="section-contact" class="contact-wrap">
	<div class="section-overlay"></div>
		<div class="container contact center animated" data-animation="flipInY" data-animation-delay="1000">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="col-md-10 col-md-offset-1 center section-title">
						<h3>Leave a message</h3>
					</div>
					
					<div class="confirmation">
						<p><span class="fa fa-check"></span></p>
					</div>
					
					<form class="contact-form support-form">
						
						<div class="col-lg-12">
							<input id="name" class="input-field form-item field-name" type="text" required="required" name="contact-name" placeholder="Name" />

							<input id="email" class="input-field form-item field-email" type="email" required="required" name="contact-email" placeholder="Email" />

							<input id="subject" class="input-field form-item field-subject" type="text" required="required" name="contact-subject" placeholder="Subject" />
							<textarea id="message" class="textarea-field form-item field-message" rows="10" name="contact-message" placeholder="Message"></textarea>
						</div>
						<button type="submit" class="fancy-button button-line button-white large zoom subform">
							Send message
							<span class="icon">
								<i class="fa fa-paper-plane-o"></i>
							</span>
						</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!--=== Contact section Ends ===-->
	
	<!--=== Footer section Starts ===-->
	<div id="section-footer" class="footer-wrap">
		<div class="container footer center">
			<div class="row">
				<div class="col-lg-12">
					<h4 class="footer-title"><!-- Footer Title -->
						<a class="site-name" href="#"><span>E</span>gret</a>
					</h4>
					
					<!-- Social Links -->
					<div class="social-icons">
						<ul>
							<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
							<li><a href="#"><i class="fa fa-flickr"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
						</ul>
					</div>
					
					<p class="copyright">All rights reserved &copy; 2015</p>
				</div>
			</div>
		</div>
	</div>
	<!--=== Footer section Ends ===-->
	
<!--==== Js files ====-->
<!--==== Essential files ====-->
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/js/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/js/jquery.easing.1.3.js"></script>

<!--==== Slider and Card style plugin ====-->
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/js/jquery.baraja.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/js/jquery.vegas.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/js/jquery.bxslider.min.js"></script>

<!--==== MailChimp Widget plugin ====-->
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/js/jquery.ajaxchimp.min.js"></script>

<!--==== Scroll and navigation plugins ====-->
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/js/jquery.nav.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/js/jquery.appear.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/js/jquery.fitvids.js"></script>

<!--==== Custom Script files ====-->
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/egret/js/custom.js"></script>

</body>
</html>