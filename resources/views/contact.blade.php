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

	<!-- BEGIN: CONTACT US SECTION -->
	<section class="contact-body all-section">
		<div class="container">
			<div class="row ">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<h2 class="wow fadeInLeft" data-wow-delay="0.6s">Send Us Message</h2>
					<div class="contact-form-inner wow fadeInLeft" data-wow-delay="0.6s">
						<div class="row">
							<form action="{{route('contactUsSubmit')}}" method="post">
								@csrf
								<div class="col-md-12">
									<div class="form-group">
										<input type="text"  name="fname" class="form-control" placeholder="Your Name" required="">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="email" name="email" class="form-control" placeholder="Your Email" required="">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="number" min="0" name="phone" class="form-control" placeholder="Your Number" required="">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="" rows="8" name="message" class="form-control" placeholder="Your Message"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<button type="buton">Send Message</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="contact-top-detail wow fadeInRight" data-wow-delay="0.6s">
						<?=html_entity_decode($cms_detail->content) ?>
						<ul class="contact-details">
							<li><i class="fa fa-map-marker" aria-hidden="true"></i>	{{ App\Http\Traits\HelperTrait::returnFlag(519) }}</a></li>
							<li><a href="mailto:{{ App\Http\Traits\HelperTrait::returnFlag(218) }}"><i class="fa fa-envelope" aria-hidden="true"></i>{{ App\Http\Traits\HelperTrait::returnFlag(218) }}</a></li>
							<li><a href="tel:{{ App\Http\Traits\HelperTrait::returnFlag(59) }}"><i class="fa fa-phone" aria-hidden="true"></i>{{ App\Http\Traits\HelperTrait::returnFlag(59)}}</li>
						</ul>
						<div class="embed-responsive embed-responsive-4by3"> 
						  <iframe allowfullscreen="" frameborder="0" height="272" src="https://maps.google.com/maps?q='+{{ App\Http\Traits\HelperTrait::returnFlag(1966) }}+'&output=embed" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> 
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
@section('css')
<style>

</style>
@endsection

@section('js')
<script type="text/javascript"></script>
@endsection 
