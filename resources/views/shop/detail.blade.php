@extends('layouts.main')
@section('content')
<?php 
 $innerbanner = DB::table('innerbanners')->where('id',4)->first();
 



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

	<!-- BEGIN: PRODUCT DETAIL SECTION -->
	 <section class="prod-detail">
  <div class="container">
    <div class="row">
      
     <div class="col-md-4">
       <img src="{{asset($product_detail->image)}}" alt="">
     </div>

     <div class="col-md-8">
       <div class="product-disp">
         <h4>{{($product_detail->product_title)}}</h4>
        <!-- <ul class="star-blk"><li><i class="fa fa-star" aria-hidden="true"></i></li><li><i class="fa fa-star" aria-hidden="true"></i></li><li><i class="fa fa-star" aria-hidden="true"></i></li><li><i class="fa fa-star" aria-hidden="true"></i></li><li><i class="fa fa-star" aria-hidden="true"></i></li></ul>-->
         <h5>{{$product_detail->price}}</h5>
    <?= html_entity_decode($product_detail->description) ?>
          <ul class="prod-btns">
            <li><div class="quantity-blk">
                <span class="minus"><i class="fa fa-minus" aria-hidden="true"></i></span>
                <input class="quant" type="text" value="1">
                <span class="plus"><i class="fa fa-plus" aria-hidden="true"></i></span>
                </div></li>
           <!-- <li><a class="crt-btn" href="cart.html">SHOP NOW</a></li>
            <li><a href=""><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
            <li><a href=""><i class="fa fa-signal" aria-hidden="true"></i></a></li>  
            <li><a href=""><i class="fa fa-search-plus" aria-hidden="true"></i></a></li> -->
          </ul>
       </div>
     </div>

    </div>


    <div class="additionalInfo">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <ul class="nav nav-pills">
            <li class="active"><a data-toggle="pill" href="#description">description</a></li>
            <!-- <li><a data-toggle="pill" href="#info">additional information</a></li> -->
            <li><a data-toggle="pill" href="#review">reviews (0)</a></li>
          </ul>

          <div class="tab-content">
            <div id="description" class="tab-pane fade in active">
              <p>Maecenas dignissim justo elit, vel posuere orci lacinia at. Nullam a accumsan nulla. Curabitur porta velit sapien, vel conguenisi efficitur at. Sed egestas libero at metus dapibus, ac auctor justo lacinia. Fusce nec leo nulla. Morbi vel dui vitae lacusvehicula dictum. Nullam non efficitur arcu. Mauris ac volutpat ligula, et venenatis sem. Vestibulum eu neque ultrices, ornare risus ut, luctus ante. Maecenas elementum felis tincidunt metus ultricies ornare ac nec sapien. </p>
            </div>
            <!-- <div id="info" class="tab-pane fade">
              <p>Maecenas dignissim justo elit, vel posuere orci lacinia at. Nullam a accumsan nulla. Curabitur porta velit sapien, vel conguenisi efficitur at. Sed egestas libero at metus dapibus, ac auctor justo lacinia. Fusce nec leo nulla. Morbi vel dui vitae lacusvehicula dictum. Nullam non efficitur arcu. Mauris ac volutpat ligula, et venenatis sem. Vestibulum eu neque ultrices, ornare risus ut, luctus ante. Maecenas elementum felis tincidunt metus ultricies ornare ac nec sapien. </p>
            </div> -->
         <div id="review" class="tab-pane fade">
              <div class="commentsMain">
                          <div class="comments">
                            <div class="row">
                              <div class="col-md-1 col-xs-12 col-sm-2"> <img src="images/comment1.jpg" class="img-responsive" alt=""> </div>
                              <div class="col-md-10 col-xs-12 col-sm-10 no-margin">
                                <div class="col-md-9 col-xs-12 col-sm-9">
                                  <h2> Alberto Brando <span>-  Jun 22, 2016</span></h2>
                                </div>
                                <div class="col-md-3 col-xs-12 col-sm-3 text-right"><div class="rating">
                                  <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span> </div>
                                  </div>
                                </div>
                                <div class="col-md-12 col-xs-12 col-sm-12">
                                  <p>Aenean pharetra rutrum metus, eget fermentum velit fringilla quis. Pellentesque quis suscipit dolor. Fusce semper ligula faucibus nulla pharetra maximus. Vivamus ac orci nisi. Integer quis velit leo. </p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="comments">
                            <div class="row">
                              <div class="col-md-1 col-xs-12 col-sm-2"> <img src="images/comment2.jpg" class="img-responsive" alt=""> </div>
                              <div class="col-md-10 col-xs-12 col-sm-10 no-margin">
                                <div class="col-md-9 col-xs-12 col-sm-9">
                                  <h2> Alberto Brando <span>-  Jun 22, 2016</span></h2>
                                </div>
                                <div class="col-md-3 col-xs-12 col-sm-3 text-right"> <div class="rating">
                                  <div class="stars"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> </div>
                                </div></div>
                                <div class="col-md-12 col-xs-12 col-sm-12">
                                  <p>Aenean pharetra rutrum metus, eget fermentum velit fringilla quis. Pellentesque quis suscipit dolor. Fusce semper ligula faucibus nulla pharetra maximus. Vivamus ac orci nisi. Integer quis velit leo. </p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="comments">
                            <div class="row">
                              <div class="col-md-1 col-xs-12 col-sm-2"> <img src="images/comment3.jpg" class="img-responsive" alt=""> </div>
                              <div class="col-md-10 col-xs-12 col-sm-10 no-margin">
                                <div class="col-md-9 col-xs-12 col-sm-9">
                                  <h2> Alberto Brando <span>-  Jun 22, 2016</span></h2>
                                </div>
                                <div class="col-md-3 col-xs-12 col-sm-3 text-right"> <div class="rating">
                                  <div class="stars"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> </div>
                                </div></div>
                                <div class="col-md-12 col-xs-12 col-sm-12">
                                  <p>Aenean pharetra rutrum metus, eget fermentum velit fringilla quis. Pellentesque quis suscipit dolor. Fusce semper ligula faucibus nulla pharetra maximus. Vivamus ac orci nisi. Integer quis velit leo. </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="leavereply">
                          <h1>leave a comment</h1>
                          <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> </div>
                          </div>
                          <input type="text" placeholder="Name">
                          <input type="email" placeholder="Email">
                          <textarea placeholder="Message"></textarea>
                          <input type="submit" value="POST COMMENT">
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

