@extends('layouts.main')
@section('content')

	<!-- BEGIN: BANNER SECTION -->
	<section class="banner">
		<img  class="img-responsive" src="{{asset($innerbanner->image)}}" alt="About Banner">
		<div class="banner-overlay">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<h2></h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END: BANNER SECTION -->

	<section class="category-section all-section">
		<div class="container">
			<div class="row">
				
					<div class="col-md-9 col-sm-9 col-xs-12">
						<div class="row">
							@foreach($category as $value )
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="pro-box">
									<img  class="img-responsive" src="{{asset($value->image)}}" alt="product image">

									<a href="{{url('detail/'.$value->id)}}">
								 <h3>{{$value->product_title}}</h3>
							    <h4>${{$value->price}}</h4>
								</div>
							</div>
							@endforeach
								
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