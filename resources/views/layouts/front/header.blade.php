<?php

 if(isset($_GET['q']) && $_GET['q'] != '') {

$keyword = $_GET['q'];

$shop = DB::table('products')
                ->where('product_title', 'like', '%'.$keyword.'%')
                ->get()->take(2);
                
}

        else{
        $shop = DB::table('products')->get()->take(2);
        }

$cat = DB::table('categories')->get()->take(3);
?>

<header>
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="language-tab">
              <p>Language: <span>English</span><i class="fa fa-caret-down"></i></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="cart-tab">
              <p>Shopping Cart <i class="fa fa-shopping-cart"></i></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-middle">
       <div class="container">
        <div class="row flex-row">
          <div class="col-md-4">
            <div class="main_logo">
              <img src="{{asset($logo->img_path)}}" class="img-responsive" alt="image" />
            </div>
          </div>
          <div class="col-md-4">
            <div class="header-search">
              <form>
              <input type="text" class="form-froup"  name="q" placeholder="Search Here" />
            <!--  <i class="fa fa-search"></i> -->
              <button type="submit" class="fa fa-search"></button>
            </form>
            </div>
          </div>
          <div class="col-md-4">
            <div class="view-product">
              <a href="{{url('category')}}">
              <button  >view products</button></a>
            </div>
          </div>
        </div>
       </div>
    </div>
    <div class="header-nav">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <nav class="navbar ">
              <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                  </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-nav">
                    <li><a class="{{request()->routeIs('home') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                 </li>
                    <li><a class="{{request()->routeIs('aboutus') ? 'active' : ''}}" href="{{url(aboutus)}}">ABOUT US</a></li>
                    <li><a class="{{request()->routeIs('category') ? 'active' : ''}}" href="{{url('category')}}">Categories</a></li>
                    @foreach($cat as $value)
                    <li><a class="{{request()->routeIs('#') ? 'active' : ''}}" href="{{url('category-detail/'.$value->id)}}">{{$value->name}}</a></li>
                    @endforeach
                    <li><a  class="{{request()->routeIs('contact') ? 'active' : ''}}" href="{{url('contact')}}">CONTACT US</a></li>

                  </ul>
              
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>