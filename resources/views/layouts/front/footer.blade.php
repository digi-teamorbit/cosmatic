<?php $footercms = DB::table('pages')->where('id', 4)->first(); ?>
<!-- Begin: FOOTER -->
<footer style="
    background: url({{asset($footercms->image)}}) no-repeat top center/ cover;">
    <div class="container">
      <div class="row">
        
        <div class="col-md-4">
          <div class="ftr-col1">
            <h4>INFORMATION</h4>
            <ul>
              <li><a href="">Lorem Ipsum</a></li>
              <li><a href="">Dolore Sit</a></li>
              <li><a href="">Consectetur</a></li>
              <li><a href="">Adipisicing</a></li>
              <li><a href="">Eiusmode nis</a></li>
            </ul>
            <ul>
              <li><a href="">Lorem Ipsum</a></li>
              <li><a href="">Dolore Sit</a></li>
              <li><a href="">Consectetur</a></li>
              <li><a href="">Adipisicing</a></li>
              <li><a href="">Eiusmode nis</a></li>
            </ul>
          </div>
        </div>
        
         <div class="col-md-4">
          <div class="ftr-col1">
            <h4>Usefull Links</h4>
            <ul>
              <li><a href="">Lorem Ipsum</a></li>
              <li><a href="">Dolore Sit</a></li>
              <li><a href="">Consectetur</a></li>
              <li><a href="">Adipisicing</a></li>
              <li><a href="">Eiusmode nis</a></li>
            </ul>
            <ul>
              <li><a href="">Lorem Ipsum</a></li>
              <li><a href="">Dolore Sit</a></li>
              <li><a href="">Consectetur</a></li>
              <li><a href="">Adipisicing</a></li>
              <li><a href="">Eiusmode nis</a></li>
            </ul>
          </div>
        </div>

         <div class="col-md-4">
          <div class="ftr-col2">
            <h4>Follow us</h4>
             

            <ul class="ftr-soc">
              <li></li>
              <li><a href="{{ App\Http\Traits\HelperTrait::returnFlag(682) }}" target="_blank"><img src="{{asset('./images/fb_img.png')}}" class="img-responsive" alt="images" /></a>
              </li>
              <li><a href="{{ App\Http\Traits\HelperTrait::returnFlag(1960) }}" target="_blank"><img src="{{asset('./images/twitter_img.png')}}" class="img-responsive" alt="images" /></a>
              </li>
              <li><a href="JavaScript:void(0);"><img src="{{asset('./images/google_img.png')}}" class="img-responsive" alt="images" /></a></li>
            </ul> 

            
          </div>
        </div>

      </div>
    </div>
  </footer>
  <div class="copyrit">
   <div class="container">
  <div class="row">
    <div class="col-md-12" style="color:white">{{ App\Http\Traits\HelperTrait::returnFlag(499) }}</div>
  </div>
  </div>
  </div>