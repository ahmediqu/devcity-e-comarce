<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
class HomeController extends Controller
{
    public function showHomePage(){
    	$data = [];
    	$data['products'] = Product::select(['id','title','slug','price','sale_price'])->where('status',1)->get();
    	return view('front-end.home',$data);
    }
    public function showDetails($slug){
    	$data = [];
    	$data['product'] = Product::where('slug',$slug)->where('status',1)->first();
    	if($data['product'] == null){
    		return redirect()->route('frontend.home');
    	}
    	return view('front-end.pages.product',$data);
    }
}
