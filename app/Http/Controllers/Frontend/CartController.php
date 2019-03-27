<?php


namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Session;
class CartController extends Controller
{
    public function showCart(){
    	$data = [];
    	$data['cart'] = $cart = Session::has('cart')?Session::get('cart'):[];
    	$data['total'] = array_sum(array_column($data['cart'], 'price'));
    	return view('front-end.pages.cart',$data);
    }

    public function addToCart(Request $request){
    	
    	try {
    		$this->validate($request,[
    			'product_id'=>'required|numeric'
    		]);
    	} catch (ValidationException $e) {
    		return redirect()->back();
    	}

    	$product = Product::findOrFail($request->input('product_id'));


    	$cart = Session::has('cart')?Session::get('cart'):[];

    	if(array_key_exists($product->id,$cart)){

    		$cart[$product->id]['quantity']++;

    	}else{
		    $cart[$product->id] = array(
		        'id' => $product->id,
						'title' => $product->title,
						'quantity' => 1,
						'price' => ($product->sale_price != null && $product->sale_price>0)?$product->sale_price:$product->price,
		    );
		}
	    Session::put('cart', $cart);
	    Session::flash('message',$product->title.'Added To Cart');
		
    	return redirect()->route('cart');
    	
    }

    public function removeToCart(Request $request){
    	try {
    		$this->validate($request,[
    			'product_id'=>'required|numeric'
    		]);
    	} catch (ValidationException $e) {
    		return redirect()->back();
    	}

    	$cart = Session::has('cart')?Session::get('cart'):[];
    	unset($cart[$request->input('product_id')]);
    	Session::put('cart', $cart);
    	Session::flash('message','Product Remove your cart');
    	return redirect()->back();
    }
}
