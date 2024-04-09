@extends('layouts.app')
@section('meta_title','PCD Pharma Bazaar')
@section('content')
   
<!-- HERO-9
			============================================= -->
            <section id="hero-9" class="bg-scroll hero-section division">
			<div class="container">
				<div class="row  align-items-center flex">
					<!-- HERO TEXT -->
					<div class="col-md-7">
						<div class="hero-txt mb-40 white-color">
							<h3>Are you looking for ?</h3>
							<!-- Title -->
							<h3 class="typewrite" data-period="2000" data-type='[ "PCD Pharma Franchise Company.", "Third-Party Manufacturer."]'>
		                          <span class="wrap"></span>
		                        </h3>
							<!-- Text -->
							<p class="p-md">List Of Top 100+ Leading WHO-GMP Certified Pharma Companies with 50000+ Products Range. </p> <img src="/assets/images/whologo.png" style="background:#fff;" width="350" height="auto" alt="service-icon"> </div>
					</div>
					<!-- END HERO TEXT -->
					<!-- HERO REGISTER FORM -->
					<div class="col-md-5">
						<div id="register-form">
						      @if ( Session::has('flash_message') )
                     <div class="alert alert-{{ Session::get('flash_type') }} alert-dismissible fade show" role="alert">
                        <b>{{ Session::get('flash_message') }}</b>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                     </div>
                     @endif
							<h2 class="text-center">SEND ENQUIRY</h2>
							<p class="text-center mt-1 mb-2 text-danger"> ( DO NOT POST JOB ENQUIRY )</p>
						 <form action="/enquiry/store" method="POST">
                  @csrf
                  <div class="form-group col-lg-12">
                     <label for="email">Name:</label>
                     <input type="text" class="form-control" id="name" name="name">
                  </div>
                  <div class="form-group col-lg-12">
                     <label for="pwd">Email:</label>
                     <input type="email" class="form-control" id="pwd" name="email">
                  </div>
                  <div class="form-group col-lg-12">
                     <label for="pwd">Phone:</label>
                     <input type="phone" class="form-control" id="pwd" name="phone">
                  </div>
                  <div class="form-group col-lg-12">
                     <label for="pwd">State:</label>
                     <input type="text" class="form-control" id="pwd " name="state" >
                  </div>
                  <div class="form-group col-lg-12">
                     <label for="pwd">City:</label>
                     <input type="text" class="form-control" id="pwd" name="city">
                  </div>
                  <div class="form-group col-lg-12">
                     <label for="pwd">Message:</label>
                     <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3" placeholder="Write Message"></textarea>
                  </div>
                  <button type="submit" class="btn btn-default">Submit</button>
               </form>
						</div>
					</div>
					<!-- END HERO REGISTER FORM -->
				</div>
				<!-- End row -->
			</div>
			<!-- End container -->
		</section>
		<!-- END HERO-9 -->
		<!-- ABOUT-2
			============================================= -->
		<section id="about" class="wide-60 about-section division">
			<div class="container">
				<div class="row d-flex align-items-center">
					<!-- ABOUT IMAGE -->
					<div class="col-md-6 col-lg-6">
						<div class="img-block  mb-40">
							<a href="#hero-9"><img class="img-fluid" src="/assets/images/pcd.png" alt="about-image"></a>
						</div>
					</div>
					<!-- ABOUT TEXT -->
					<div class="col-md-6 col-lg-6">
						<div class="txt-block  mb-40">
							<!-- Title --><a href="#hero-9"><h3 class="h3-sm">Top PCD Pharma Franchise Companies in India Price List Available</h3></a>
							<!-- Text -->
							<a href="#hero-9">
								<p>Want to work with the leading and WHO and GMP certified PCD Pharma franchise companies in India? If yes then you have laned on the right place. Pharma Franchise Mart is one of the fastest growing and leading online B2B Pharmaceutical Marketplace which provides you the list of the 100+ Pharmaceutical companies for wide range of the quality assured pharmaceutical products or medicines. </p>
							</a>
							<!-- List -->
							<a href="#hero-9">
								<ul class="txt-list mb-15">
									<li>Low Risk with Investment Requirements.</li>
									<li>Area Monopoly Rights Facility for PCD Franchise. </li>
									<li>Marketing Support Offed by Pharma PCD Companies</li>
								</ul>
							</a>
							<!-- Button --><a href="#hero-9" class="btn btn-md btn-rose tra-black-hover">Get in Touch</a> </div>
					</div>
					<!-- END ABOUT TEXT -->
				</div>
				<!-- End row -->
			</div>
			<!-- End container -->
		</section>
		<!-- End ABOUT-2 -->
		<!-- CATEGORIES-4
			============================================= -->
		<section id="section" class=" bg-whitesmoke wide-60 categories-section division ">
			<div class="container">
				<!-- SECTION TITLE -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title mb-80">
							<!-- Title 	--><a href="#hero-9"><h3 class="h3-sm">Section Wise Range</h3>	</a>
							<!-- Text -->
							<a href="#hero-9">
								<p class="p-md">Section Wise Medicines can be divided into different classes and these classes are: </p>
							</a>
						</div>
					</div>
				</div>
				<div class="row">
				    @foreach($proc as $p)
					<!-- CATEGORIE BOX #1 -->
					<div class="col-md-6 col-lg-3">
						<div class="c4-box box-design">
							<!-- Icon -->
							<div class="c4-box-ico mb-15 clearfix">
								<div class="c4-ico bg-blue">
									<a href="#hero-9"><img src="/assets/images/icons/medicine.png" alt="category-icon" /></a>
								</div> <a href="/category/products/{{$p->slug}}"><h5 class="h5-md">{{$p->name}}</h5></a> <a href="#hero-9" class="enquire">Enquire Now</a> </div>
						</div>
					</div>
					<!-- END CATEGORIE BOX #1 -->
					@endforeach
				
				
				
				
				

					
					
					
				
				
				
				
				
				</div>
				<!-- End row -->
				<!-- ALL COURSES BUTTON -->
			
			</div>
			<!-- End container -->
		</section>
		<!-- END CATEGORIES-4 -->
		<!-- SERVICES-6
			============================================= -->
		<section id="services-6" class="bg-03 wide-60 services-section division">
			<div class="container white-color">
				<!-- SERVICES TEXT -->
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-center">
						<div class="services-6-txt">
							<!-- Title --><a href="#hero-9"><h3 class="h3-md">How to Select Product for PCD Pharma Franchise Business?</h3></a>
							<!-- Text -->
							<a href="#hero-9">
								<p class="p-md">Selection of the right pharma products range is the most important step in the PCD Pharma Franchise business. If you choose wrong products can spoil your franchise business. Here are some few important points must consider in mind while selecting the products. </p>
							</a>
						</div>
					</div>
				</div>
				<!-- END SERVICES TEXT -->
				<!-- SERVICE BOXES -->
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<!-- SERVICE BOX #1 -->
							<div class="sbox-6 icon-xl">
								<a href="#hero-9"><img src="/assets/images/icons/categories/search.png" alt="icon" class="img-fluid" width="100px" height="100px">
									<h5 class="h5-xs">Research</h5>
									<p>Before starting you franchise business do market research about the demand of pharma products for your interesting working area.</p>
								</a>
							</div>
							<!-- SERVICE BOX #2 -->
							<div class="sbox-6 icon-xl">
								<a href="#hero-9"><img src="/assets/images/icons/categories/drugs.png" alt="icon" class="img-fluid" width="100px" height="100px">
									<h5 class="h5-xs">Available products</h5>
									<p>Must check the product you want to market is already available in the market and on large scale recommended by doctors.</p>
								</a>
							</div>
							<!-- SERVICE BOX #3 -->
							<div class="sbox-6 icon-xl">
								<a href="#hero-9"><img src="/assets/images/icons/categories/industry.png" alt="icon" class="img-fluid" width="100px" height="100px">
									<h5 class="h5-xs">Selection of company</h5>
									<p>Selection of right PCD Pharma company for franchise is very difficult task. Check the company has all required certifications.</p>
								</a>
							</div>
							<!-- SERVICE BOX #4 -->
							<div class="sbox-6 icon-xl">
								<a href="#hero-9"><img src="/assets/images/icons/categories/money.png" alt="icon" class="img-fluid" width="100px" height="100px">
									<h5 class="h5-xs">Investment</h5>
									<p>Before proceed to further clear your all doubts regarding the investment required to start the Monopoly PCD Pharma Franchise business.</p>
								</a>
							</div>
							<!-- SERVICE BOX #6 -->
							<div class="sbox-6 icon-xl">
								<a href="#hero-9"><img src="/assets/images/icons/categories/cashless-payment.png" alt="icon" class="img-fluid" width="100px" height="100px">
									<h5 class="h5-xs">Payment and Terms and conditions</h5>
									<p>Read all the teams and condition regarding payment, does your company provide credit facility to their associates.</p>
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- END SERVICE BOXES -->
				<div class="d-flex">
					<!-- Button --><a href="#hero-9" class="btn btn-md btn-rose tra-black-hover ml-auto mr-auto">Contact Now</a> </div>
			</div>
			<!-- End container -->
		</section>
		<!-- End SERVICES-6 -->
		<!-- COURSES-2
			============================================= -->
		<section id="speciality" class="wide-60 courses-section division">
			<div class="container">
				<!-- SECTION TITLE -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title mb-60">
							<!-- Title 	--><a href="#hero-9"><h3 class="h3-sm">Speciality Range Offered by PCD Pharma Franchise Companies</h3>	

								<!-- Text -->	
								<p class="p-md">The listed pharma companies on Pharma Franchise Mart brings you the wide range of the best quality
                                        products for the distribution business.
								</p></a> </div>
					</div>
				</div>

				<div class="container mb-50">
					<div class="ps-home--block wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInLeft;">
						<div class="row">
							<div class="col-12 col-md-4">
								<div class="ps-block__image">
									<section class="ps-home__banner">
										<div class="ps-banner" style="background:#00b6ed;">
											<div class="ps-banner__block">
												<div class="ps-banner__content">
													<a href="#hero-9"><h4 class="ps-banner__title text-white">General Range</h4> 
													<img class="img-fluid text-center" src="/assets/images/range/8.jpg" alt="course-preview"> </a>
												</div>
												</div>
											</div>
									</section>
								</div>
							</div>
							<div class="col-12 col-md-8">
								<div class="ps-block__product">
									<div class="row m-0">
										<div class="col-6 col-lg-4 p-0">
											<div class="ps-product ps-product--standard">
												<div class="ps-product__thumbnail">
													<a class="ps-product__image" href="#hero-9">
														<figure><img src="/assets/images/clients/janus.png" alt="alt" class="img-fluid">
														</figure>
														<h6>Janus Biotech</h6>
													</a>
													</div>
												</div>
										</div>
										<div class="col-6 col-lg-4 p-0">
											<div class="ps-product ps-product--standard">
												<div class="ps-product__thumbnail">
													<a class="ps-product__image" href="#hero-9">
														<figure><img src="/assets/images/clients/ronish.png" alt="alt" class="img-fluid">
														</figure>
														<h6>Ronish Bioceuticals</h6>
													</a>
													</div>
												</div>
										</div>
										<div class="col-6 col-lg-4 p-0">
											<div class="ps-product ps-product--standard">
												<div class="ps-product__thumbnail">
													<a class="ps-product__image" href="#hero-9">
														<figure><img src="/assets/images/clients/biopolis.png" alt="alt" class="img-fluid">
														</figure>
														<h6>Biopolis Lifesciences</h6>
													</a>
													</div>
												</div>
										</div>
										<div class="col-6 col-lg-4 p-0">
											<div class="ps-product ps-product--standard">
												<div class="ps-product__thumbnail">
													<a class="ps-product__image" href="#hero-9">
														<figure><img src="/assets/images/clients/human.png" alt="alt" class="img-fluid">
														</figure>
														<h6>Human Biolife</h6>
													</a>
													</div>
												</div>
										</div>
										
										<div class="col-6 col-lg-4 p-0">
											<div class="ps-product ps-product--standard">
												<div class="ps-product__thumbnail">
													<a class="ps-product__image" href="#hero-9">
														<figure><img src="/assets/images/clients/pritus.png" alt="alt" class="img-fluid">
														</figure>
														<h6>Pritus Healthcare</h6>
													</a>
													</div>
												</div>
										</div>
										
										<div class="col-6 col-lg-4 p-0 text-middle">
											<div class="all-courses-btn"> <a href="#hero-9" class="btn btn-md btn-rose tra-black-hover">View More</a> </div>
										</div>
										</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="container mb-50">
					<div class="ps-home--block wow fadeInRight" data-wow-duration="1s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInRight;">
						<div class="row">
							<div class="col-12 col-md-4">
								<div class="ps-block__image">
									<section class="ps-home__banner">
										<div class="ps-banner" style="background:#036220;">
											<div class="ps-banner__block">
												<div class="ps-banner__content">
													<a href="#hero-9"><h4 class="ps-banner__title text-white">Ayurvedic Range</h4> 
													<img class="img-fluid text-center" src="/assets/images/range/16.jpg" alt="course-preview"></a> </div>
												</div>
											</div>
									</section>
								</div>
							</div>
							<div class="col-12 col-md-8">
								<div class="ps-block__product">
									<div class="row m-0">
										<div class="col-6 col-lg-4 p-0">
											<div class="ps-product ps-product--standard">
												<div class="ps-product__thumbnail">
													<a class="ps-product__image" href="#hero-9">
														<figure><img src="/assets/images/clients/sbmvedic.png" alt="alt" class="img-fluid">
														</figure>
														<h6>SBM Vedic</h6>
													</a>
													</div>
												</div>
										</div>
										<div class="col-6 col-lg-4 p-0">
											<div class="ps-product ps-product--standard">
												<div class="ps-product__thumbnail">
													<a class="ps-product__image" href="#hero-9">
														<figure><img src="/assets/images/clients/nuveda.png" alt="alt" class="img-fluid">
														</figure>
														<h6>Nuveda Research & Labs LLP</h6>
													</a>
													</div>
												</div>
										</div>
										<div class="col-6 col-lg-4 p-0">
											<div class="ps-product ps-product--standard">
												<div class="ps-product__thumbnail">
													<a class="ps-product__image" href="#hero-9">
														<figure><img src="/assets/images/clients/lezaa.png" alt="alt" class="img-fluid">
														</figure>
														<h6>Lezaa Ayurveda</h6>
													</a>
													</div>
												</div>
										</div>
										<div class="col-6 col-lg-4 p-0">
											<div class="ps-product ps-product--standard">
												<div class="ps-product__thumbnail">
													<a class="ps-product__image" href="#hero-9">
														<figure><img src="/assets/images/clients/navayur.png" alt="alt" class="img-fluid">
														</figure>
														<h6>Navayur Herbals</h6>
													</a>
													</div>
												</div>
										</div>
										<div class="col-6 col-lg-4 p-0">
											<div class="ps-product ps-product--standard">
												<div class="ps-product__thumbnail">
													<a class="ps-product__image" href="#hero-9">
														<figure><img src="/assets/images/clients/salvedic.png" alt="alt" class="img-fluid">
														</figure>
														<h6>Salvedic</h6>
													</a>
													</div>
												</div>
										</div>
										<div class="col-6 col-lg-4 p-0 text-middle">
											<div class="all-courses-btn"> <a href="#hero-9" class="btn btn-md btn-rose tra-black-hover">View More</a> </div>
										</div>
										</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="container mb-50">
					<div class="ps-home--block wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInLeft;">
						<div class="row">
							<div class="col-12 col-md-4">
								<div class="ps-block__image">
									<section class="ps-home__banner">
										<div class="ps-banner" style="background:#3d005a;">
											<div class="ps-banner__block">
												<div class="ps-banner__content">
													<a href="#hero-9"><h4 class="ps-banner__title text-white">Derma Range</h4> 
													<img class="img-fluid text-center" src="/assets/images/range/10.jpg" alt="course-preview"></a> </div>
												</div>
											</div>
									</section>
								</div>
							</div>
							<div class="col-12 col-md-8">
								<div class="ps-block__product">
									<div class="row m-0">
										<div class="col-6 col-lg-4 p-0">
											<div class="ps-product ps-product--standard">
												<div class="ps-product__thumbnail">
													<a class="ps-product__image" href="#hero-9">
														<figure><img src="/assets/images/clients/thea.png" alt="alt" class="img-fluid">
														</figure>
														<h6>Thea</h6>
													</a>
													</div>
												</div>
										</div>
										<div class="col-6 col-lg-4 p-0">
											<div class="ps-product ps-product--standard">
												<div class="ps-product__thumbnail">
													<a class="ps-product__image" href="#hero-9">
														<figure><img src="/assets/images/clients/qndq-derma.png" alt="alt" class="img-fluid">
														</figure>
														<h6>QndQ Derma</h6>
													</a>
													</div>
												</div>
										</div>
										<div class="col-6 col-lg-4 p-0">
											<div class="ps-product ps-product--standard">
												<div class="ps-product__thumbnail">
													<a class="ps-product__image" href="#hero-9">
														<figure><img src="/assets/images/clients/medconic-derma.png" alt="alt" class="img-fluid">
														</figure>
														<h6>Medconic Dermaceutics</h6>
													</a>
													</div>
												</div>
										</div>
										<div class="col-6 col-lg-4 p-0">
											<div class="ps-product ps-product--standard">
												<div class="ps-product__thumbnail">
													<a class="ps-product__image" href="#hero-9">
														<figure><img src="/assets/images/clients/cosmederma.png" alt="alt" class="img-fluid">
														</figure>
														<h6>Cosmederma Remedies</h6>
													</a>
													</div>
												</div>
										</div>
										<div class="col-6 col-lg-4 p-0">
											<div class="ps-product ps-product--standard">
												<div class="ps-product__thumbnail">
													<a class="ps-product__image" href="#hero-9">
														<figure><img src="/assets/images/clients/derma360.png" alt="alt" class="img-fluid">
														</figure>
														<h6>Derma360</h6>
													</a>
													</div>
												</div>
										</div>
										<div class="col-6 col-lg-4 p-0 text-middle">
											<div class="all-courses-btn"> <a href="#hero-9" class="btn btn-md btn-rose tra-black-hover">View More</a> </div>
										</div>
										</div>
								</div>
							</div>
						</div>
					</div>
				</div>

                <div class="container mb-50">
					<div class="ps-home--block wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInRight;">
						<div class="row">
							<div class="col-12 col-md-4">
								<div class="ps-block__image">
									<section class="ps-home__banner">
										<div class="ps-banner" style="background:#029976;">
											<div class="ps-banner__block">
												<div class="ps-banner__content">
													<a href="#hero-9"><h4 class="ps-banner__title text-white">Critical Care Range</h4> 
													<img class="img-fluid text-center" src="/assets/images/range/12.jpg" alt="course-preview"></a> </div>
												</div>
											</div>
									</section>
								</div>
							</div>
							<div class="col-12 col-md-8">
								<div class="ps-block__product">
									<div class="row m-0">
										<div class="col-6 col-lg-4 p-0">
											<div class="ps-product ps-product--standard">
												<div class="ps-product__thumbnail">
													<a class="ps-product__image" href="#hero-9">
														<figure><img src="/assets/images/clients/rapid.png" alt="alt" class="img-fluid">
														</figure>
														<h6>Rapid Life Drugs & Healthcare</h6>
													</a>
													</div>
												</div>
										</div>
										<div class="col-6 col-lg-4 p-0">
											<div class="ps-product ps-product--standard">
												<div class="ps-product__thumbnail">
													<a class="ps-product__image" href="#hero-9">
														<figure><img src="/assets/images/clients/nyx.png" alt="alt" class="img-fluid">
														</figure>
														<h6>Nyx Pharmaceuticals</h6>
													</a>
													</div>
												</div>
										</div>
										<div class="col-6 col-lg-4 p-0">
											<div class="ps-product ps-product--standard">
												<div class="ps-product__thumbnail">
													<a class="ps-product__image" href="#hero-9">
														<figure><img src="/assets/images/clients/healthkind.png" alt="alt" class="img-fluid">
														</figure>
														<h6>Healthkind Labs</h6>
													</a>
													</div>
												</div>
										</div>
										<div class="col-6 col-lg-4 p-0">
											<div class="ps-product ps-product--standard">
												<div class="ps-product__thumbnail">
													<a class="ps-product__image" href="#hero-9">
														<figure><img src="/assets/images/clients/H&I.png" alt="alt" class="img-fluid">
														</figure>
														<h6>H&I Critical Care</h6>
													</a>
													</div>
												</div>
										</div>
										
										
										<div class="col-6 col-lg-4 p-0">
											<div class="ps-product ps-product--standard">
												<div class="ps-product__thumbnail">
													<a class="ps-product__image" href="#hero-9">
														<figure><img src="/assets/images/clients/vostro.png" alt="alt" class="img-fluid">
														</figure>
														<h6>Vostro Critical Care</h6>
													</a>
													</div>
												</div>
										</div>
										<div class="col-6 col-lg-4 p-0 text-middle">
											<div class="all-courses-btn"> <a href="#hero-9" class="btn btn-md btn-rose tra-black-hover">View More</a> </div>
										</div>
										</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="container mb-50">
					<div class="ps-home--block wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInLeft;">
						<div class="row">
							<div class="col-12 col-md-4">
								<div class="ps-block__image">
									<section class="ps-home__banner">
										<div class="ps-banner" style="background:#cb0000">
											<div class="ps-banner__block">
												<div class="ps-banner__content">
													<a href="#hero-9"><h4 class="ps-banner__title text-white">Cardiac Diabetic Range</h4> 
													<img class="img-fluid text-center" src="/assets/images/range/13.jpg" alt="course-preview"></a> </div>
												</div>
											</div>
									</section>
								</div>
							</div>
							<div class="col-12 col-md-8">
								<div class="ps-block__product">
									<div class="row m-0">
										<div class="col-6 col-lg-4 p-0">
											<div class="ps-product ps-product--standard">
												<div class="ps-product__thumbnail">
													<a class="ps-product__image" href="#hero-9">
														<figure><img src="/assets/images/clients/janusgold.png" alt="alt" class="img-fluid">
														</figure>
														<h6>Janus Gold</h6>
													</a>
													</div>
												</div>
										</div>
										<div class="col-6 col-lg-4 p-0">
											<div class="ps-product ps-product--standard">
												<div class="ps-product__thumbnail">
													<a class="ps-product__image" href="#hero-9">
														<figure><img src="/assets/images/clients/kc.png" alt="alt" class="img-fluid">
														</figure>
														<h6>Kenriz Care</h6>
													</a>
													</div>
												</div>
										</div>
										<div class="col-6 col-lg-4 p-0">
											<div class="ps-product ps-product--standard">
												<div class="ps-product__thumbnail">
													<a class="ps-product__image" href="#hero-9">
														<figure><img src="/assets/images/clients/cardivista.png" alt="alt" class="img-fluid">
														</figure>
														<h6>Cardivista</h6>
													</a>
													</div>
												</div>
										</div>
										<div class="col-6 col-lg-4 p-0">
											<div class="ps-product ps-product--standard">
												<div class="ps-product__thumbnail">
													<a class="ps-product__image" href="#hero-9">
														<figure><img src="/assets/images/clients/qndq-cardia.png" alt="alt" class="img-fluid">
														</figure>
														<h6>QndQ Cardia</h6>
													</a>
													</div>
												</div>
										</div>
										
										
										<div class="col-6 col-lg-4 p-0">
											<div class="ps-product ps-product--standard">
												<div class="ps-product__thumbnail">
													<a class="ps-product__image" href="#hero-9">
														<figure><img src="/assets/ images/clients/vostro.png" alt="alt" class="img-fluid">
														</figure>
														<h6>Vostro Critical Care</h6>
													</a>
													</div>
												</div>
										</div>
										<div class="col-6 col-lg-4 p-0 text-middle">
											<div class="all-courses-btn"> <a href="#hero-9" class="btn btn-md btn-rose tra-black-hover">View More</a> </div>
										</div>
										</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            
                <div class="container mb-50">
					<div class="ps-home--block wow fadeInRight" data-wow-duration="1s" data-wow-delay=".6s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.6s; animation-name: fadeInRight;">
						<div class="row">
							<div class="col-12 col-md-4">
								<div class="ps-block__image">
									<section class="ps-home__banner">
										<div class="ps-banner" style="background:#dd097e;">
											<div class="ps-banner__block">
												<div class="ps-banner__content">
													<a href="#hero-9"><h4 class="ps-banner__title text-white">Gynae Range</h4> 
													<img class="img-fluid text-center" src="/assets/images/range/7.jpg" alt="course-preview"></a> </div>
												</div>
											</div>
									</section>
								</div>
							</div>
							<div class="col-12 col-md-8">
								<div class="ps-block__product">
									<div class="row m-0">
										<div class="col-6 col-lg-4 p-0">
											<div class="ps-product ps-product--standard">
												<div class="ps-product__thumbnail">
													<a class="ps-product__image" href="#hero-9">
														<figure><img src="/assets/images/clients/win.png" alt="alt" class="img-fluid">
														</figure>
														<h6>Winfertility</h6>
													</a>
													</div>
												</div>
										</div>
										<div class="col-6 col-lg-4 p-0">
											<div class="ps-product ps-product--standard">
												<div class="ps-product__thumbnail">
													<a class="ps-product__image" href="#hero-9">
														<figure><img src="/assets/images/clients/medibyte.png" alt="alt" class="img-fluid">
														</figure>
														<h6>Medibyte</h6>
													</a>
													</div>
												</div>
										</div>
										<div class="col-6 col-lg-4 p-0">
											<div class="ps-product ps-product--standard">
												<div class="ps-product__thumbnail">
													<a class="ps-product__image" href="#hero-9">
														<figure><img src="/assets/images/clients/bio.png" alt="alt" class="img-fluid">
														</figure>
														<h6>Bio Excellence</h6>
													</a>
													</div>
												</div>
										</div>
										<div class="col-6 col-lg-4 p-0">
											<div class="ps-product ps-product--standard">
												<div class="ps-product__thumbnail">
													<a class="ps-product__image" href="#hero-9">
														<figure><img src="/assets/images/clients/gynavista.png" alt="alt" class="img-fluid">
														</figure>
														<h6>Gynavista</h6>
													</a>
													</div>
												</div>
										</div>
										
										
										<div class="col-6 col-lg-4 p-0">
											<div class="ps-product ps-product--standard">
												<div class="ps-product__thumbnail">
													<a class="ps-product__image" href="#hero-9">
														<figure><img src="/assets/images/clients/wisefemy.png" alt="alt" class="img-fluid">
														</figure>
														<h6>Wisefemy</h6>
													</a>
													</div>
												</div>
										</div>
										<div class="col-6 col-lg-4 p-0 text-middle">
											<div class="all-courses-btn"> <a href="#hero-9" class="btn btn-md btn-rose tra-black-hover">View More</a> </div>
										</div>
										</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
                <div class="row">
					<div class="col-md-12">
						<div class="all-courses-btn"> <a href="#hero-9" class="btn btn-md btn-rose tra-black-hover">Get in Touch</a> </div>
					</div>
				</div>

			</div>
			<!-- End container -->
		</section>
		<!-- END COURSES -2 -->
		<!-- TESTIMONIALS-1
			============================================= -->
		<section id="therapeutic" class="bg-whitesmoke wide-50 reviews-section division">
			<div class="container">
				<!-- SECTION TITLE -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title title-centered mb-60">
							<!-- Title 	--><a href="#hero-9"><h3 class="h3-sm">Therapeutic Wise Products &amp; Medicine Range</h3>	

								<!-- Text -->	
								<p class="p-md">Here is the list of major Therapeutic Wise Products or Medicine Range which the registered Pharma
Franchise Companies at Pharma Franchise Mart offers:
								</p></a>
							<!-- Button 
								<div class="title-btn">
									<a href="#hero-9" class="btn btn-tra-grey rose-hover">Read All Reviews</a>
								</div> --></div>
					</div>
				</div>
				<div class="row">
				    @foreach($cat as $c)
					<div class="col-md-6 col-lg-4">
						<div class="c3-box box-design">
							<!-- Icon -->
							<div class="c4-box-ico clearfix">
								<div class="row">
									<div class="col-md-4">
										<a href="#hero-9"><img src="/assets/images/rednirus favicon/1.png" alt="category-icon" class="img-fluid"></a>
									</div>
									<div class="col-md-8"> <a href="/keywords/{{$c->slug}}"><h6 class="h5-md">{{$c->name}}</h6></a> </div>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="all-courses-btn"> <a href="#hero-9" class="btn btn-md btn-rose tra-black-hover">Get in Touch</a> </div>
					</div>
				</div>
			</div>
			<!-- End container -->
		</section>
		<!-- END TESTIMONIALS-1 -->
		<!-- CONTACTS-1
				============================================= -->
		<section id="contacts" class="contacts-section division">
			<div class="container">
				<div class="bg-03 bg-fixed contacts-1-holder">
					<div class="row d-flex align-items-center">
						<!-- CONTACTS TEXT -->
						<div class="col-lg-8 offset-lg-2">
							<div class="contacts-txt text-center white-color">
								<!-- Title --><a href="#hero-9"><h3 class="h3-sm">Need Help? Contact Now</h3>	

										<!-- Text -->	
										<p class="p-md">Have questions about Pharma Franchise ?</p>	</a>
								<!-- Button --><a href="#hero-9" class="btn btn-md btn-rose tra-black-hover">Contact Now</a> </div>
						</div>
					</div>
					<!-- End row -->
				</div>
				<!-- End contacts-holder -->
			</div>
			<!-- End container -->
		</section>
		<!-- END CONTACTS-1 -->
		<!-- ABOUT-3
			============================================= -->
		<section id="about-3" class="pt-100 pb-100 about-section division">
			<div class="container">
				<div class="row d-flex align-items-center">
					<!-- ABOUT TEXT -->
					<div class="col-md-6 col-lg-6">
						<div class="txt-block pc-25">
							<!-- Title --><a href="#hero-9"><h3 class="h3-sm">What is Monopoly Right in PCD Pharma Franchise Business?</h3>

								<!-- Text -->
								<p>In the Indian pharmaceutical industry the Area Monopoly rights is an agreement of terms and
conditions between Pharma PCD Franchise company and PCD franchise business partner. A PCD
Pharma Company gives the complete rights to market or sell their pharma products in the interested
working area. Here the benefits of starting your own Monopoly PCD Pharma franchise business in
India.
								</p> 

								<!-- List -->	
								<ul class="txt-list mb-15">

									<li>Monopoly Rights in pharma franchise business provides opportunities for research and
development, which assists to introduce new and innovative products to the market and
gives benefits to the business over the competitors.</li>
													
									<li>You are able to expand your products marketing when you hold the right to monopoly and
enhance the area of operation and market presence.		
									</li>

									<li>Monopoly rights give you the chance of a successful business, with less expenditure, high
profits free marketing inputs and lower risks.</li>

									

								</ul></a>
							<!-- Button --><a href="#hero-9" class="btn btn-md btn-rose tra-black-hover">Enquire Now</a> </div>
					</div>
					<!-- END ABOUT TEXT -->
					<!-- ABOUT IMAGE -->
					<div class="col-md-6 col-lg-6">
						<div class="img-block">
							<a href="#hero-9"><img class="img-fluid" src="/assets/images/pcd-2.png" alt="about-image"></a>
						</div>
					</div>
				</div>
				<!-- End row -->
			</div>
			<!-- End container -->
		</section>
		<!-- End ABOUT-3 -->
		
		<!-- PRICING-2
			============================================= -->
		<section id="pricing-2" class="bg-03 wide-60 pricing-section division">
			<div class="container">
				<div class="row d-flex align-items-center">
					<!-- PRICING TEXT -->
					<div class="col-lg-8">
						<div class="pricing-txt pc-25 white-color mb-40">
							<!-- Title -->
							<a href="#hero-9">
								<h3 class="h3-lg">What documents are required to deal with third-party manufacturer?</h3>
								<!-- List -->
								<ul class="txt-list mt-25 mb-25">
									<li>Agreement for Manufacturing.</li>
									<li>Profile of the Company including the - Name, and address Of all directors, Stating telephone number both official and residential Partners or Proprietor)</li>
									<li>Certificate for Non-Resemblance</li>
									<li>An attested copy of the Drug Licenses is needed to be submitted</li>
									<li> Attested a copy of GST Registration Certificates.</li>
									<li>PAN card, Aadhar Card, GST Registration</li>
									<li>An attested copy of the Drug Licenses is needed to be submitted.</li>
									<li>For Limited companies, copy of a Resolution for Authorised Signatory.</li>
								</ul>
							</a>
						</div> <a href="#hero-9" class="btn btn-md btn-rose tra-black-hover mr-auto ml-auto">Get in Touch</a> </div>
					<!-- END PRICING TEXT -->
					<!-- PRICE PLAN PREMIUM -->
					<div class="col-lg-4">
						<a href="#hero-9"><img src="/assets/images/third-party-new.png" alt="image" class="img-fluid"></a>
					</div>
					<!-- END PRICE PLAN PREMIUM -->
				</div>
				<!-- End row -->
			</div>
			<!-- End container -->
		</section>
		<!-- END PRICING-2 -->
		<!-- CATEGORIES-3
			============================================= -->
		<section id="categories-3" class="wide-100 categories-section division">
			<div class="container">
				<!-- SECTION TITLE -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title mb-60">
							<a href="#hero-9">
								<!-- Title 	-->
								<h3 class="h3-sm">Promotional Material</h3> </a>
						</div>
					</div>
				</div>
				<!-- CATEGORIE BOXES CAROUSEL -->
				<div class="row">
					<div class="col-lg-12">
						<div class="owl-carousel owl-theme owl-loaded categories-carousel">
							<!-- CATEGORIE BOX #1 -->
							<div class="bg-blue c3-box text-center icon-md white-color">
								<a href="#hero-9">
									<div class=""> <img src="/assets/images/promotional material/pen.png" alt="category-icon" /> </div>
								</a>
							</div>
							<!-- END CATEGORIE BOX #1 -->
							<!-- CATEGORIE BOX #2 -->
							<div class="bg-green c3-box text-center icon-md white-color">
								<a href="#hero-9">
									<div class=""> <img src="/assets/images/promotional material/bag.png" alt="category-icon" /> </div>
								</a>
							</div>
							<!-- END CATEGORIE BOX #2 -->
							<!-- CATEGORIE BOX #3 -->
							<div class="bg-red c3-box text-center icon-md white-color">
								<a href="#hero-9">
									<div class=""> <img src="/assets/images/promotional material/towel.png" alt="category-icon" /> </div>
								</a>
							</div>
							<!-- END CATEGORIE BOX #3 -->
							<!-- CATEGORIE BOX #4 -->
							<div class="bg-teal c3-box text-center white-color">
								<a href="#hero-9">
									<div class=""> <img src="/assets/images/promotional material/Keychain.png" alt="category-icon" /> </div>
								</a>
							</div>
							<!-- END CATEGORIE BOX #4 -->
							<!-- CATEGORIE BOX #5 -->
							<div class="bg-yellow c3-box text-center icon-md white-color">
								<a href="#hero-9">
									<div class=""> <img src="/assets/images/promotional material/Diary.png" alt="category-icon" /> </div>
								</a>
							</div>
							<!-- END CATEGORIE BOX #5 -->
							<!-- CATEGORIE BOX #6 -->
							<div class="bg-violet c3-box text-center icon-md white-color">
								<a href="#hero-9">
									<div class=""> <img src="/assets/images/promotional material/Penstand.png" alt="category-icon" /> </div>
								</a>
							</div>
							<!-- END CATEGORIE BOX #6 -->
							<!-- CATEGORIE BOX #7 -->
							<div class="bg-orange c3-box text-center icon-md white-color">
								<a href="#hero-9">
									<div class=""> <img src="/assets/images/promotional material/Umbrella.png" alt="category-icon" /> </div>
								</a>
							</div>
							<!-- END CATEGORIE BOX #7 -->
						</div>
					</div>
				</div>
				<!-- END CATEGORIE BOXES CAROUSEL -->
				<div class="d-flex"> <a href="#hero-9" class="btn btn-md btn-rose tra-black-hover mr-auto ml-auto">Enquire Now</a> </div>
			</div>
			<!-- End container -->
		</section>
		<!-- END CATEGORIES-3 -->
		<!-- BANNER-2
				============================================= -->
		<section id="banner-2" class="bg-03 wide-60 banner-section">
			<div class="container">
				<div class="row d-flex align-items-center">
					<!-- BANNER TEXT -->
					<div class="col-md-7">
						<div class="banner-2-txt white-color">
							<a href="#hero-9">
								<!-- Title -->
								<h3 class="h3-lg">Contact Us For <span>PCD Pharma Franchise</span>  And <span>Pharma Third Party Manufacturer</span></h3></a>
						</div>
					</div>
					<!-- REGISTER FORM -->
					<div class="col-md-5">
						<div id="register-form">
							<h2 class="text-center">SEND ENQUIRY</h2>
							<p class="text-center mt-1 mb-2 text-danger"> ( DO NOT POST JOB ENQUIRY )</p>
						<form action="/enquiry/store" method="POST">
                  @csrf
                  <div class="form-group col-lg-12">
                     <label for="email">Name:</label>
                     <input type="text" class="form-control" id="name" name="name">
                  </div>
                  <div class="form-group col-lg-12">
                     <label for="pwd">Email:</label>
                     <input type="email" class="form-control" id="pwd" name="email">
                  </div>
                  <div class="form-group col-lg-12">
                     <label for="pwd">Phone:</label>
                     <input type="phone" class="form-control" id="pwd" name="phone">
                  </div>
                  <div class="form-group col-lg-12">
                     <label for="pwd">State:</label>
                     <input type="text" class="form-control" id="pwd " name="state" >
                  </div>
                  <div class="form-group col-lg-12">
                     <label for="pwd">City:</label>
                     <input type="text" class="form-control" id="pwd" name="city">
                  </div>
                  <div class="form-group col-lg-12">
                     <label for="pwd">Message:</label>
                     <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3" placeholder="Write Message"></textarea>
                  </div>
                  <button type="submit" class="btn btn-default">Submit</button>
               </form>
						</div>
					</div>
					<!-- END REGISTER FORM -->
				</div>
				<!-- End row -->
			</div>
			<!-- End container -->
		</section>
		<!-- END BANNER-2 -->
		<!-- VIDEO-3
			============================================= -->
		<section id="video-3" class="bg-scroll video-section division bg-whitesmoke wide-100">
			<!-- VIDEO-3 BRANDS -->
			<div class="division">
				<div class="container">
					<!-- SECTION TITLE -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title title-centered ">
								<!-- Title 	--><a href="#hero-9"><h3 class="h3-sm">Our Esteemed Clients</h3>	

									<!-- Text -->	
									<p class="p-md">Collaborate with the genuine medicine franchise companies who are providing PCD Pharma
                                       Franchise across the Pan India locations.
									</p></a> </div>
						</div>
					</div>

					<div class="row pt-60">
						 <div class="col-md-3">
						 	  <div class="brand-logo mb-3">
									<a href="#hero-9"><img class="img-fluid" src="/assets/images/clients/biopolis.png" alt="brand-logo" /></a>
								</div>
						 </div>
						 <div class="col-md-3">
						 	  <div class="brand-logo mb-3">
									<a href="#hero-9"><img class="img-fluid" src="/assets/images/clients/Human.png" alt="brand-logo" /></a>
								</div>
						 </div>
						 <div class="col-md-3">
						 	  <div class="brand-logo mb-3">
									<a href="#hero-9"><img class="img-fluid" src="/assets/images/clients/Meltic.png" alt="brand-logo" /></a>
								</div>
						 </div>
						 <div class="col-md-3">
						 	  <div class="brand-logo mb-3">
									<a href="#hero-9"><img class="img-fluid" src="/assets/images/clients/arlak.png" alt="brand-logo" /></a>
								</div>
						 </div>
						  <div class="col-md-3">
						 	  <div class="brand-logo mb-3">
									<a href="#hero-9"><img class="img-fluid" src="/assets/images/clients/janus.png" alt="brand-logo" /></a>
								</div>
						 </div>
						 <div class="col-md-3">
						 	  <div class="brand-logo mb-3">
									<a href="#hero-9"><img class="img-fluid" src="/assets/images/clients/Viribus.png" alt="brand-logo" /></a>
								</div>
						 </div>
						 <div class="col-md-3">
						 	  <div class="brand-logo mb-3">
									<a href="#hero-9"><img class="img-fluid" src="/assets/images/clients/ronish.png" alt="brand-logo" /></a>
								</div>
						 </div>
						 <div class="col-md-3">
						 	  <div class="brand-logo mb-3">
									<a href="#hero-9"><img class="img-fluid" src="/assets/images/clients/drkumar.png" alt="brand-logo" /></a>
								</div>
						 </div>
						  <div class="col-md-3">
						 	  <div class="brand-logo mb-3">
									<a href="#hero-9"><img class="img-fluid" src="/assets/images/clients/riyadh.png" alt="brand-logo" /></a>
								</div>
						 </div>
						 <div class="col-md-3">
						 	  <div class="brand-logo mb-3">
									<a href="#hero-9"><img class="img-fluid" src="/assets/images/clients/rapid.png" alt="brand-logo" /></a>
								</div>
						 </div>
						 <div class="col-md-3">
						 	  <div class="brand-logo mb-3">
									<a href="#hero-9"><img class="img-fluid" src="/assets/images/clients/qndq-derma.png" alt="brand-logo" /></a>
								</div>
						 </div>
						 <div class="col-md-3">
						 	  <div class="brand-logo mb-3">
									<a href="#hero-9"><img class="img-fluid" src="/assets/images/clients/pritus.png" alt="brand-logo" /></a>
								</div>
						 </div>
						  <div class="col-md-3">
						 	  <div class="brand-logo mb-3">
									<a href="#hero-9"><img class="img-fluid" src="/assets/images/clients/nyx.png" alt="brand-logo" /></a>
								</div>
						 </div>
						 <div class="col-md-3">
						 	  <div class="brand-logo mb-3">
									<a href="#hero-9"><img class="img-fluid" src="/assets/images/clients/servocare.png" alt="brand-logo" /></a>
								</div>
						 </div>
						 <div class="col-md-3">
						 	  <div class="brand-logo mb-3">
									<a href="#hero-9"><img class="img-fluid" src="/assets/images/clients/thea.png" alt="brand-logo" /></a>
								</div>
						 </div>
						 <div class="col-md-3">
						 	  <div class="brand-logo mb-3">
									<a href="#hero-9"><img class="img-fluid" src="/assets/images/clients/bio.png" alt="brand-logo" /></a>
								</div>
						 </div>


					</div>

             <!-- End row -->
					<div class="d-flex mt-40"> <a href="#hero-9" class="btn btn-md btn-rose tra-black-hover mr-auto ml-auto">Enquire Now</a> </div>
				</div>
				<!-- End container -->
			</div>
			<!-- END VIDEO-3 BRANDS -->
		</section>
		<!-- END VIDEO-3 -->
 
@endsection
