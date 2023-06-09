@extends('frontend.layouts_frontend.master')

@section('title')
Home - La Cuisine De Sarah
@endsection


@section('extra_styles')
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
<!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"/> -->

<style>
    .modal {
  background: rgba(0, 0, 0, 0.5);
}
.modal-backdrop {
  display: none;
  margin-top:80px;
}


</style>

@endsection

@section('content')
<!-- content  -->

<!--================Slider Area =================-->
@include('frontend.includes_frontend.slider')
		<!--================End Slider Area =================-->





		<!-- About Section Two -->
		<section class="about-section-two" style="margin-top: 10px;">
			<div class="auto-container">
				<div class="row clearfix">

					<!-- Content Column -->
					<div class="content-column col-lg-7 col-md-12 col-sm-12">
						<div class="inner-column">
							<h2>Our Background</h2>
							<div class="text">
								<p>
                                    La cuisine de sarah, meaning
                                    "sarah's kitchen " in english , is a mult-tier culinary
                                    Experience based in the heart of kampala capital city, uganda'
                                    An all encompassing dining experience carefully curated
                                    To compliment human senses
                                    From the moment you enter
                                    Our restaurant.


                                </p>

							</div>
						</div>
					</div>

					<!-- Images Column -->
					<div class="images-column col-lg-5 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="image" style="margin-top: -25px;">
								<img src="assets/frontend_assets/assets/images/resource/about-1.jpg" alt="" />
							</div>
							<div class="image-two">
								<img src="assets/frontend_assets/assets/images/resource/about-2.jpg" alt="" />
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End About Section Two -->
		<br>

		<!-- Products Section -->
		<section class="products-section">
			<div class="auto-container">

				<!-- Sec Title -->
				<div class="sec-title centered">
					<h2>Our Food Menu</h2>
				</div>

				<!-- MixitUp Galery -->
				<div class="mixitup-gallery">

					<!--Filter-->
					<div class="filters clearfix">
						<ul class="filter-tabs filter-btns clearfix">
							<li class="active filter" data-role="button" data-filter="all">All</li>
							<li class="filter" data-role="button" data-filter=".starters">Starters</li>
							<li class="filter" data-role="button" data-filter=".maincourse">Main Course </li>
						</ul>
					</div>

					<div class="filter-list row clearfix">
						<!-- Products Block -->
						@foreach($foodmenus as $foodmenu)
						<div class="product-block all mix salad fest wraps foods col-lg-3 col-md-6 col-sm-12">
							<div class="inner-box">
								<figure class="image-box" >
									<!-- <img src="assets/frontend_assets/assets/images/resource/products/1.jpg" alt="" > -->
									<img src="{{ $foodmenu->foodmenu_photo}}" alt="" style="height:271px; max-height: 336px; max-width:336px; width: 100%;">
								</figure>
								<div class="lower-content">
								<br>
								<span class="badge badge-pill badge-primary">{{ $foodmenu->foodmenu_category_r->foodmenu_category_name }}</span>
								<!-- open modal with details -->
								<br>
								<a href="" data-toggle="modal" data-target="#viewFoodModal{{$foodmenu->id}}"><span>Details<i class="fas fa-angle-right" style="margin-left:5px;"></i></span></a>

								<h4>{{ $foodmenu->foodmenu_name }}</h4>
									<div class="text">
										{{ \Illuminate\Support\Str::limit($foodmenu->foodmenu_description, 60, $end='...') }}
									</div>
									<div class="price">UGX {{ $foodmenu->foodmenu_price }}</div>
									<div class="lower-box">
										<!-- <a href="shop-single.html" class="theme-btn btn-style-five"><span
												class="txt">Order Now</span></a> -->
									</div>
								</div>
							</div>
						</div>


						<!-- The Modal -->
						<div class="modal-dialog">
							<div class="modal" id="viewFoodModal{{$foodmenu->id}}">
							<div class="modal-dialog" style="margin-top: 10%;">
							<div class="modal-content">

								<!-- Modal Header -->
								<div class="modal-header">
								<h4 class="modal-title">View Food Details</h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>

								<!-- Modal body -->
								<div class="modal-body">
								<center>
								<img src="{{ $foodmenu->foodmenu_photo}}" alt="" style="height:271px; max-height: 336px; max-width:336px; width: 100%;">
								</center>

								<br>
								<hr>

								<p>PRICE : {{$foodmenu->foodmenu_name}} </p>
								<hr>
								<p>Description : {{$foodmenu->foodmenu_description}}</p>
								</div>

								<!-- Modal footer -->
								<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								</div>

							</div>
							</div>
						</div>
						</div>
						<!-- End of modal -->
						@endforeach

						<!-- Chicken - Products Block -->
						@foreach($foodmenus_starters_categories as $foodmenu)
							<div class="product-block all mix starters col-lg-3 col-md-6 col-sm-12">
							<div class="inner-box">
							<img src="{{ $foodmenu->foodmenu_photo}}" alt="" style="height:271px; max-height: 336px; max-width:336px; width: 100%;">
									<div class="lower-content">
									<br>
									<span class="badge badge-pill badge-primary">{{ $foodmenu->foodmenu_category_r->foodmenu_category_name }}</span>
									<br>
								<a href="" data-toggle="modal" data-target="#viewFoodModal{{$foodmenu->id}}"><span>Details<i class="fas fa-angle-right" style="margin-left:5px;"></i></span></a>

										<h4>{{ $foodmenu->foodmenu_name }}</> </h4>

										<div class="text">

											{{ \Illuminate\Support\Str::limit( $foodmenu->foodmenu_description , 60, $end='...') }}

										</div>
										<div class="price">UGX {{ $foodmenu->foodmenu_price }}</div>
										<div class="lower-box">
											<!-- <a href="shop-single.html" class="theme-btn btn-style-five"><span
													class="txt">Order Now</span></a> -->
										</div>
									</div>
								</div>
							</div>


						<!-- The Modal -->
						<div class="modal-dialog">
							<div class="modal" id="viewFoodModal{{$foodmenu->id}}">
							<div class="modal-dialog" style="margin-top: 10%;">
							<div class="modal-content">

								<!-- Modal Header -->
								<div class="modal-header">
								<h4 class="modal-title">View Food Details</h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>

								<!-- Modal body -->
								<div class="modal-body">
								<center>
								<img src="{{ $foodmenu->foodmenu_photo}}" alt="" style="height:271px; max-height: 336px;  width: 100%;">
								</center>

								<br>
								<hr>


								<p>PRICE : {{$foodmenu->foodmenu_name}} </p>
								<hr>
								<p>Description : {{$foodmenu->foodmenu_description}}</p>
								</div>

								<!-- Modal footer -->
								<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								</div>

							</div>
							</div>
						</div>
						</div>
						<!-- End of modal -->

						@endforeach

						<!-- maincourse products block -->
						<!-- Chicken - Products Block -->
						@foreach($foodmenus_maincourse_categories as $foodmenu)
							<div class="product-block all mix maincourse col-lg-3 col-md-6 col-sm-12">
							<div class="inner-box">
									<figure class="image-box">
										<!-- <img src="assets/frontend_assets/assets/images/resource/products/1.jpg" alt=""> -->
										<img src="{{ $foodmenu->foodmenu_photo}}" alt="" style="height:271px; max-height: 336px;  width: 100%;">
									</figure>
									<div class="lower-content">
									<br>
									<span class="badge badge-pill badge-primary">{{ $foodmenu->foodmenu_category_r->foodmenu_category_name }}</span>
									<br>
								<a href="" data-toggle="modal" data-target="#viewFoodModal{{$foodmenu->id}}"><span>Details<i class="fas fa-angle-right" style="margin-left:5px;"></i></span></a>

										<h4>{{ $foodmenu->foodmenu_name }}</> </h4>
										<div class="text">


											{{ \Illuminate\Support\Str::limit( $foodmenu->foodmenu_description  , 60, $end='...') }}

										</div>
										<div class="price">UGX {{ $foodmenu->foodmenu_price }}</div>
										<div class="lower-box">
											<!-- <a href="shop-single.html" class="theme-btn btn-style-five"><span
													class="txt">Order Now</span></a> -->
										</div>
									</div>
								</div>
							</div>


							<!-- The Modal -->
							<div class="modal-dialog">
								<div class="modal" id="viewFoodModal{{$foodmenu->id}}">
								<div class="modal-dialog" style="margin-top: 10%;">
								<div class="modal-content">

									<!-- Modal Header -->
									<div class="modal-header">
									<h4 class="modal-title">View Food Details</h4>
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>

									<!-- Modal body -->
									<div class="modal-body">
									<center>
									<img src="{{ $foodmenu->foodmenu_photo}}" alt="" style="height:271px; max-height: 336px;  width: 100%;">
									</center>
									<br>
									<hr>

									<p>PRICE : {{$foodmenu->foodmenu_name}} </p>
									<hr>
									<p>Description : {{$foodmenu->foodmenu_description}}</p>
									</div>

									<!-- Modal footer -->
									<div class="modal-footer">
									<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
									</div>

								</div>
								</div>
							</div>
							</div>
							<!-- End of modal -->

						@endforeach
					</div>

				</div>

			</div>
		</section>
		<!-- End Products Section -->

		<!-- Order Section -->
		<section class="order-section" style="background-image: url(assets/frontend_assets/assets/images/background/1.jpg)">
			<div class="auto-container">
				<div class="row clearfix">

					<!-- Empty Column -->
					<div class="empty-column col-lg-5 col-md-12 col-sm-12">

					</div>

					<!-- Content Column -->
					<div class="content-column col-lg-7 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="offer">Exclusive Offer</div>
							<h1>Veggi Fun Pizza</h1>
							<div class="order-price">
								<div class="price-inner">
									<!-- <div class="price"><sup>$</sup>12<sub>Each</sub></div> -->
									<ul class="order-offer">
										<li>- Chicken Hallon</li>
										<li>- Summer Pizza</li>
										<li>- Vegge Lover</li>
									</ul>
								</div>
							</div>
							<a href="/book/create" class="theme-btn btn-style-two"><span class="txt">Book
									Now</span></a>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End Order Section -->

		<!-- Services Section -->
		<section class="services-section">
			<!-- Side Image -->
			<div class="side-image"><img src="assets/frontend_assets/assets/images/resource/service-image.jpg" alt="" /></div>
			<div class="auto-container">
				<div class="row clearfix">

					<!-- Service Block -->
					<div class="service-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<img src="assets/frontend_assets/assets/images/resource/service-1.png" alt="" />
							</div>
							<h6>RELIABLE</h6>
						</div>
					</div>

					<!-- Service Block -->
					<div class="service-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<img src="assets/frontend_assets/assets/images/resource/service-2.png" alt="" />
							</div>
							<h6>ACCESSIBLE</h6>
						</div>
					</div>

					<!-- Service Block -->
					<div class="service-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<img src="assets/frontend_assets/assets/images/resource/service-3.png" alt="" />
							</div>
							<h6>TIMELY</h6>
						</div>
					</div>

					<!-- Service Block -->
					<div class="service-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<img src="assets/frontend_assets/assets/images/resource/service-4.png" alt="" />
							</div>
							<h6>WE DELIVER</h6>
						</div>
					</div>

				</div>
			</div>






		</section>

@endsection
