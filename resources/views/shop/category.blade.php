@extends('layouts.main')
@section('content')

<?php 
$cat = DB::table('categories')->get();


?>


	
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

	<section class="category-section all-section">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="shop-setxt">
						<div class="heading-sec">
							<h2>Our Categories</h2>
						</div>
						<div id="faq">
							@foreach($cat as $value)
							<div class="panel-group" id="accordion">
								
								<div class="panel">
									<div class="panel-heading">
										<h4 class="panel-title"><a href="{{url('category-detail/'.$value->id)}}">{{$value->name}}<i class="fa fa-chevron-down" aria-hidden="true"></i></a></h4>
									</div>
									<div aria-expanded="false" class="panel-collapse collapse" id="collapseOne">
										<div class="chld-clthset">
											<div class="panel-body">
												<ul>
													<li><a href="#">Children’s Clothing</a></li>
													<li><a href="#">Girls’ Clothing</a></li>
													<li><a href="#">Boy’s Clothing</a></li>
													<li><a href="#">Jackets</a></li>
													<li><a href="#">Dresses</a></li>
													<li><a href="#">Jeans</a></li>
													<li><a href="#">Fashion Accessories</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							
							</div> 
							@endforeach<!-- Panel end -->
						</div>
					</div>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-12">
						<div class="row">
							@foreach($shop as $value )
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