@extends('layouts.main')
@section('content')
	
	<!-- BEGIN: BANNER SECTION -->
	<section class="banner">
		<img  class="img-responsive" src="{{asset($innerbanner->image)}}" alt="About Banner">
		<div class="banner-overlay">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<h2>{{$innerbanner->name}}</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END: BANNER SECTION -->

	<!-- BEGIN: ABOUT US SECTION -->
	<section class="about-section all-section">
		<div class="container">
			<div class="about-content">
				<img class="img-responsive pull-left" src="{{asset($abtcms1->image)}}" alt="About Image">
			<?= html_entity_decode($abtcms1->content) ?>
				
			</div>
		</div>
	</section>
	<!--END: ABOUT US SECTION -->

	<!-- BEGIN: OFFER SECTION -->
	<section class="banner offer-banner">
			<img  class="img-responsive" src="{{asset($offerBan1->image)}}" alt="About Banner">
			<div class="banner-overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<?= html_entity_decode($offerBan1->description)?>
							<a href="#">View Products</a>
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
	
@endsection
@section('css')
<style>

</style>
@endsection

@section('js')
<script type="text/javascript"></script>
@endsection 
	
