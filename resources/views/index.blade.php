@extends('layouts.main')
@section('content')
	<main>
		<section class="slider" style="
    background: url({{asset($banner->image)}}) no-repeat top center/ cover;">
			<div class="container">
				<div class="row">
					 <div class="col-md-12">
					 	<div class="slider-content">
					 		<?= html_entity_decode($banner->description)?>
					 		<a href="{{url('category')}}">VIEW PRODUCTS</a>
					 	</div>
					 </div>
				</div>
			</div>
		</section>

		<!-- home-section-1 start -->
		<section class="home-sec-1 section-space ">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="home-sec-1-img">
							<img src="{{asset('./images/sec-1-img.png')}}"  class="img-responsive" alt="images" />
						</div>
					</div>
					<div class="col-md-3">
						<div class="home-sec-1-img">
							<img src="{{asset('./images/sec-2-img.png')}}"  class="img-responsive" alt="images" />
						</div>
					</div>
					<div class="col-md-3">
						<div class="home-sec-1-img">
							<img src="{{asset('./images/sec-3-img.png')}}"  class="img-responsive" alt="images" />
						</div>
					</div>
					<div class="col-md-3">
						<div class="home-sec-1-img">
							<img src="{{asset('./images/sec-4-img.png')}}"  class="img-responsive" alt="images" />
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- home-section-1 end -->

		<!-- home-about-sec start -->
		<section class="home-about all-section" style="
    background: url({{asset($cms_home1->image)}}) no-repeat top center/ cover;">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="theme-cosmetice-heading home-about-padding">
					   <?= html_entity_decode($cms_home1->content)?>
							<a href="{{url('aboutus')}}">Read More</a>	 
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- home-about-sec start -->

		<!-- home-eyes-sec start -->
		<section class="home-eyes all-section">

			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="items-type">
							<div class="item-type-img">
								<img src="{{asset('./images/item-type-1.jpg')}}" class="img-responsive" alt="images" />
							</div>
							<div class="item-type-content">
								<h4>LUXURY PERFUMES</h4>
								<p>From $125.00</p>
							</div>
						</div>
						<div class="items-type">
							<div class="item-type-img">
								<img src="{{asset('./images/item-type-2.jpg')}}" class="img-responsive" alt="images" />
							</div>
							<div class="item-type-content">
								<h4>NAIL COLORs</h4>
								<p>From $125.00</p>
							</div>
						</div>
						<div class="items-type">
							<div class="item-type-img">
								<img src="{{asset('./images/item-type-3.jpg')}}" class="img-responsive" alt="images" />
							</div>
							<div class="item-type-content">
								<h4>special brushes</h4>
								<p>From $125.00</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="eyes_img_center">
							<img src="{{asset('./images/home-eyes-image.png')}}" alt="images" class="img-responsive" />
						</div>
					</div>
					<div class="col-md-4">
						<div class="eyes-right theme-cosmetice-heading ">
							<h2>All Eyes on You <span class="eyes_bar"></span></h2>
							<p>Lorem ipsum dolore sit amet, consecteture adipisicing eliate sed do eiusmod tempo incididunt uliate labore eliat dolore magna aliqua. Ut enim ad minim veniam, quised nostruid exercitatione ullamco.</p>
							<a href="#">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- home-eyes-sec end -->

		<!-- BEGIN: OFFER SECTION -->
		<section class="banner offer-banner">
			<img  class="img-responsive" src="{{asset($offerBan1->image)}}" alt="About Banner">
			<div class="banner-overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<?= html_entity_decode($offerBan1->content)?>
							<a href="{{url('category')}}">View Products</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END: OFFER SECTION -->

		<!-- home-product start -->
		<section class="home-product category-section all-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="theme-cosmetice-heading text-center">
							<?= html_entity_decode($cms_pro->content) ?>
						</div>
					</div>
				</div>
				<div class="row">
					@foreach ($products as $value)
					<div class="col-md-3 col-sm-4 col-xs-12">
						
						<div class="pro-box">
							<img  class="img-responsive" src="{{asset($value->image)}}" alt="product image">
							<a href="{{url('detail/'.$value->id)}}">
							<h3>{{$value->product_title}}</h3></a>
							<h4>${{$value->price}}</h4>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</section>
		
		<!-- home-product end -->

		<!-- BEGIN: OFFER SECTION -->
		<section class="banner offer-banner">
			<img  class="img-responsive" src="{{asset($offerBan2->image)}}" alt="About Banner">
			<div class="banner-overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<?=html_entity_decode($offerBan2->content)?>
							<a href="{{url('category')}}">View Products</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END: OFFER SECTION -->

		<!-- BEGIN: TESTIMONIAL SECTIOn -->
		<section class="testimonial all-section">
			<div class="container">
				<div class="theme-heading">
					<h3>Testimonials</h3>
				</div>
				<div class="row">
					
					<div class="col-md-2 col-sm-2 col-xs-12">
						<img  class="img-responsive" src="{{asset($testi->image)}}" alt="About Banner">
						<p class="client-nam">{{$testi->name}}</p>
					</div>
						<div class="col-md-8 col-sm-8 col-xs-12">
				<div class="ss-test ">
					@foreach ($testimonial as $value)
						<div class="testimonial-content">
					<img  class="img-responsive" src="{{asset($value->image)}}" alt="About Banner">
					<h4>{{$value->name}}</h4>
					<?= html_entity_decode($value->comments)?>
				</div>
				@endforeach
				</div>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-12">
						<img  class="img-responsive" src="{{asset($testi1->image)}}" alt="About Banner">
						<p class="client-nam">{{$testi1->name}}</p>
					</div>
			</div>
		</div>
		</section>
		<!-- END: TESTIMONIAL SECTION -->
	</main>

	<!-- Begin: FOOTER -->
	
	
@endsection
@section('css')
<style>

</style>
@endsection

@section('js')
<script type="text/javascript"></script>
@endsection 
