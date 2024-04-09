<!doctype html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

     <title>@yield('meta_title')</title>
     <meta name="title" content="@yield('meta_title')">
     <meta name="keywords" content="@yield('meta_keywords')">
     <meta name="description" content="@yield('meta_description')">
     
     <meta property="og:title" content="@yield('meta_title')" />
     <meta property="og:description" content="@yield('meta_description')" />
     <meta property="og:url" content="{{ Request::fullUrl() }}" />
    
     <meta property="og:type" content="website" />
     <meta property="og:locale" content="en_GB" />

     <meta name="twitter:card" content="summary_large_image" />
     <meta name="twitter:description" content="@yield('meta_description')" />
     <meta name="twitter:title" content="@yield('meta_title')" />
    
     <link rel="shortcut icon" type="image/x-icon" href="/assets/images/pharma-pcd-bazzar-logo.png">
     <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Muli:400,600,700,800,900&amp;display=swap" rel="stylesheet">
	<!-- BOOTSTRAP CSS -->
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
	<!-- FONT ICONS -->
	<link href="/assets/css/flaticon.css" rel="stylesheet">
	<!-- PLUGINS STYLESHEET -->
	<link href="/assets/css/menu.css" rel="stylesheet">
	<link id="effect" href="css/dropdown-effects/fade-down.css" media="all" rel="stylesheet">
	<link href="/assets/css/magnific-popup.css" rel="stylesheet">
	<link href="/assets/css/flexslider.css" rel="stylesheet">
	<link href="/assets/css/owl.carousel.min.css" rel="stylesheet">
	<link href="/assets/css/owl.theme.default.min.css" rel="stylesheet">
	<!-- ON SCROLL ANIMATION -->
	<link href="/assets/css/animate.css" rel="stylesheet">
	<!-- TEMPLATE CSS -->
	<link href="/assets/css/style.css" rel="stylesheet">
	<!-- RESPONSIVE CSS -->
	<link href="/assets/css/responsive.css" rel="stylesheet">
  
 </head>

 <body>
 <div id="page" class="page">
 <div class="phone-call">
			<a href="https://api.whatsapp.com/send?phone=+91 - 9888885364&amp;text= Hello - Pharma PCD Bazaar" target="_blank" class="float"> <img src="/assets/images/whatsapp.png" width="50" alt="Chat Now" title="Chat Now"> </a>
		</div>
		<div class="phone-call2">
			<a href="tel:+91-9888885364"> <img src="/assets/images/phone-call.png" width="50" alt="Call Now" title="Call Now"> </a>
		</div>

        <!-- HEADER
			============================================= -->
		<header id="header" class="header white-menu navbar-dark">
			<div class="header-wrapper">
				<!-- MOBILE HEADER -->
				<div class="wsmobileheader clearfix"> <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a> <span class="smllogo smllogo-black"><img src="/assets/images/logo.png" width="200" height="auto" alt="mobile-logo"/></span> <span class="smllogo smllogo-white"><img src="/assets/images/logo-white.png" width="200" height="auto" alt="mobile-logo"/></span> </div>
				<!-- NAVIGATION MENU -->
				<div class="wsmainfull menu clearfix">
					<div class="wsmainwp clearfix">
						<div class="desktoplogo">
							<a href="/" class="logo-black"><img src="/assets/images/pharma-pcd-bazzar-logo.png" width="210"  alt="header-logo"></a>
						</div>
						<div class="desktoplogo">
							<a href="/" class="logo-white"><img src="/assets/images/pharma-pcd-bazzar-logo.png" width="210"  alt="header-logo"></a>
						</div>
						<!-- MAIN MENU -->
						<nav class="wsmenu clearfix">
							<ul class="wsmenu-list">
								<!-- SIMPLE NAVIGATION LINK -->
								<li class="nl-simple" aria-haspopup="true"><a href="/#about">About</a></li>
								<li class="nl-simple" aria-haspopup="true"><a href="/#section"><span>Section Wise</span></a></li>
								<li class="nl-simple" aria-haspopup="true"><a href="/#speciality"><span>Speciality wise</span></a></li>
								<li class="nl-simple" aria-haspopup="true"><a href="/#therapeutic"><span>Product Range</span></a></li>
								<li class="nl-simple" aria-haspopup="true"><a href="/#contact"><span>Contact us</span></a></li> <a href="tel:+91 - 9888885364" class="btn btn-md btn-rose tra-black-hover mt-15">+91 - 9888885364</a> </ul>
						</nav>
						<!-- END MAIN MENU -->
					</div>
				</div>
				<!-- END NAVIGATION MENU -->
			</div>
			<!-- End header-wrapper -->
		</header>
		<!-- END HEADER -->
 

    

     @yield('content')


     <section id="contact" class="wide-30 contacts-section division">
			<div class="container">
				<!-- SECTION TITLE -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title title-centered mb-60">
							<!-- Title 	--><a href="#hero-9"><h3 class="h3-sm">Contact Us</h3>	</a> </div>
					</div>
				</div>
				<div class="contacts-2-holder">
					<div class="row d-flex align-items-center">
						<!-- CONTACT BOX #1 -->
						<div class="col-lg-4">
							<div class="contact-box b-right">
								<a href="#hero-9">
									<!-- Icon --><img class="img-75" src="/assets/images/icons/pin.png" alt="contacts-icon" />
									<!-- Title -->
									<h5 class="h5-md">Our Address</h5>
									<!-- Text -->
									<p>SCO 207, 2nd Floor, Sector 14, Panchkula – 134113</p>
								</a>
								<!-- Button --><a href="#hero-9" class="btn btn-tra-grey rose-hover">Contact Us</a> </div>
						</div>
						<!-- CONTACT BOX #2 -->
						<div class="col-lg-4">
							<div class="contact-box b-right">
								<a href="#hero-9">
									<!-- Icon --><img class="img-75" src="/assets/images/icons/world-map.png" alt="contacts-icon" />
									<!-- Title -->
									<h5 class="h5-md">Call Us</h5>
									<!-- Text -->
									<p>Call us now to get Pharma Products &amp; Price list.</p>
								</a>
								<!-- Button --><a href="tel:+91-9888885364" class="btn btn-tra-grey rose-hover">+91-9888885364</a> </div>
						</div>
						<!-- CONTACT BOX #3 -->
						<div class="col-lg-4">
							<div class="contact-box">
								<a href="#hero-9">
									<!-- Icon --><img class="img-75" src="/assets/images/icons/request.png" alt="contacts-icon" />
									<!-- Title -->
									<h5 class="h5-md">Email Us</h5>
									<!-- Text -->
									<p>Have question regarding PCD Franchise then drops an Email.</p>
								</a>
								<!-- Button --><a href="mailto:surinder@rednirus.in" class="btn btn-tra-grey rose-hover">surinder@rednirus.in</a> </div>
						</div>
					</div>
					<!-- End row -->
				</div>
				<!-- End contacts-holder -->
			</div>
			<!-- End container -->
		</section>
  
    <!-- START FOOTER SECTION --> 
    <footer id="footer-1" class="footer division pt-0">
			<div class="container">
				<!-- BOTTOM FOOTER -->
				<div class="bottom-footer">
					<div class="row">
						<!-- FOOTER COPYRIGHT -->
						<div class="col-lg-8">
							<ul class="bottom-footer-list d-flex">
								<li class="ml-auto mr-auto">©2022 All Right Reserved by <a href="https://www.pharmapcdbazaar.com/" class="text-dark"> Pharma PCD Bazaar </a> | Web Design & Development By <a href="https://www.rednirus.in" class="text-warning"> Rednirus Digital Media </li>
								</ul>
						</div>
						<div class="col-lg-4">
							<ul class="page-list d-block">
								  <li> Privacy Policy</li>
								  <li><a href="/all-Category"> All Category?</a></li>
                            </ul>
						</div>
					</div>
					<!-- END BOTTOM FOOTER -->
				</div>
				<!-- End container -->
		</footer>
        <script src="/assets/js/jquery-3.3.1.min.js"></script>
		<script src="/assets/js/bootstrap.min.js"></script>
		<script src="/assets/js/modernizr.custom.js"></script>
		<script src="/assets/js/jquery.easing.js"></script>
		<script src="/assets/js/jquery.appear.js"></script>
		<script src="/assets/js/menu.js"></script>
		<script src="/assets/js/materialize.js"></script>
		<script src="/assets/js/jquery.scrollto.js"></script>
		<script src="/assets/js/jquery.countdown.min.js"></script>
		<script src="/assets/js/imagesloaded.pkgd.min.js"></script>
		<script src="/assets/js/isotope.pkgd.min.js"></script>
		<script src="/assets/js/jquery.flexslider.js"></script>
		<script src="/assets/js/owl.carousel.min.js"></script>
		<script src="/assets/js/jquery.magnific-popup.min.js"></script>
		<script src="/assets/js/register-form.js"></script>
		<script src="/assets/js/comment-form.js"></script>
		<script src="/assets/js/jquery.validate.min.js"></script>
		<script src="/assets/js/jquery.ajaxchimp.min.js"></script>
		<!-- Custom Script -->
		<script src="/assets/js/custom.js"></script>

        <script>
		//made by vipul mirajkar thevipulm.appspot.com
		var TxtType = function(el, toRotate, period) {
			this.toRotate = toRotate;
			this.el = el;
			this.loopNum = 0;
			this.period = parseInt(period, 10) || 2000;
			this.txt = '';
			this.tick();
			this.isDeleting = false;
		};
		TxtType.prototype.tick = function() {
			var i = this.loopNum % this.toRotate.length;
			var fullTxt = this.toRotate[i];
			if(this.isDeleting) {
				this.txt = fullTxt.substring(0, this.txt.length - 1);
			} else {
				this.txt = fullTxt.substring(0, this.txt.length + 1);
			}
			this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';
			var that = this;
			var delta = 200 - Math.random() * 100;
			if(this.isDeleting) {
				delta /= 2;
			}
			if(!this.isDeleting && this.txt === fullTxt) {
				delta = this.period;
				this.isDeleting = true;
			} else if(this.isDeleting && this.txt === '') {
				this.isDeleting = false;
				this.loopNum++;
				delta = 500;
			}
			setTimeout(function() {
				that.tick();
			}, delta);
		};
		window.onload = function() {
			var elements = document.getElementsByClassName('typewrite');
			for(var i = 0; i < elements.length; i++) {
				var toRotate = elements[i].getAttribute('data-type');
				var period = elements[i].getAttribute('data-period');
				if(toRotate) {
					new TxtType(elements[i], JSON.parse(toRotate), period);
				}
			}
			// INJECT CSS
			var css = document.createElement("style");
			css.type = "text/css";
			css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
			document.body.appendChild(css);
		};
		</script>


 </body>

 </html>