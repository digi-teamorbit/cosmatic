<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inquiry;
use App\schedule;
use App\newsletter;
use App\post;
use App\banner;
use App\imagetable;
use DB;
use Mail;use View;
use Session;
use App\Http\Helpers\UserSystemInfoHelper;
use App\Http\Traits\HelperTrait;
use Auth;
use App\Profile;


class HomeController extends Controller
{   
    use HelperTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     // use Helper;
     
    public function __construct()
    {
        //$this->middleware('auth');

        $logo = imagetable::
                     select('img_path')
                     ->where('table_name','=','logo')
                     ->first();
             
        $favicon = imagetable::
                     select('img_path')
                     ->where('table_name','=','favicon')
                     ->first(); 
        
        View()->share('logo',$logo);
        View()->share('favicon',$favicon);

    } 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $banner = DB::table('banners')->where('id',1)->first();
       // $bannerAbt = DB::table('banners')->where('id',2)->first();
        $offerBan1 = DB::table('pages')->where('id',6)->first();
        $offerBan2 = DB::table('pages')->where('id',7)->first();
        $cms_home1 = DB::table('pages')->where('id', 1)->first();
        $testimonial = DB::table('testimonials')->get();
        $testi = DB::table('testimonials')->where('id', 4)->first();
        $testi1 = DB::table('testimonials')->where('id', 5)->first();
        $products = DB::table('products')->get()->take(12);
        $cms_pro = DB::table('pages')->where('id', 5)->first();
        return view('index', compact('banner','offerBan1', 'cms_home1','offerBan2','testimonial','testi','testi1','products','cms_pro'));
    }
    

    public function contactUsSubmit(Request $request)
    {
        $inquiry = new inquiry;
        $inquiry->inquiries_fname = $request->fname;
        //$inquiry->inquiries_lname = $request->lname;
        $inquiry->inquiries_email = $request->email;
       $inquiry->inquiries_phone = $request->phone;
        $inquiry->extra_content = $request->message;
        $inquiry->save();
            
        Session::flash('message', 'Thank you for contacting us. We will get back to you asap'); 
        Session::flash('alert-class', 'alert-success'); 
        return back();
    }

    public function newsletterSubmit(Request $request)
    {
        $is_email = newsletter::where('newsletter_email',$request->email)->count();
        
        if($is_email == 0) {
            
        $inquiry = new newsletter;
        //$inquiry->newsletter_name = $request->name;
        $inquiry->newsletter_email = $request->email;
        //$inquiry->newsletter_message = $request->comment;
        $inquiry->save();
        Session::flash('message', 'Thank you for contacting us. We will get back to you asap'); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect('/');
        
        } else {
            Session::flash('flash_message', 'email already exists'); 
            Session::flash('alert-class', 'alert-success'); 
            return redirect('/');
        }
        
    }

/*    public function Category(){


        return view('shop.category');
    }*/


   public function About(){

    $innerbanner = DB::table('innerbanners')->where('id',1)->first();
    $abtcms1 = DB::table('pages')->where('id', 2)->first();
    $offerBan1 = DB::table('offers')->where('id',1)->first();
    $testimonial = DB::table('testimonials')->get();
    $testi = DB::table('testimonials')->where('id', 4)->first();
    $testi1 = DB::table('testimonials')->where('id', 5)->first();
    return view('about',compact('offerBan1','testimonial','testi','testi1','innerbanner','abtcms1'));
    }
    public function Contact(){
        $innerbanner = DB::table('innerbanners')->where('id',2)->first();
        $cms_detail = DB::table('pages')->where('id', 3)->first();
        return view('contact',compact('innerbanner','cms_detail'));
    }
}
