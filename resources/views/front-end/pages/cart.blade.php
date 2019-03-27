@extends('front-end.layouts.master')
@section('page-content')

<?php
    // print_r($cart);
    // exit();
?>
        <!-- Main Header Area End Here -->
        <!-- Categorie Menu & Slider Area Start Here -->
        
        <!-- Categorie Menu & Slider Area End Here -->
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-area mt-30">
            <div class="container">
                <div class="breadcrumb">
                    <ul class="d-flex align-items-center">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><a href="cart.html">Cart</a></li>
                    </ul>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Breadcrumb End -->
        <!-- Cart Main Area Start -->
        <div class="cart-main-area ptb-100 ptb-sm-60">
            <div class="container">
                @if(Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
                @endif

                
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <!-- Form Start -->
                        <form action="#">
                            <!-- Table Content Start -->
                            <div class="table-content table-responsive mb-45">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-price">Sl.</th>
                                            <th class="product-thumbnail">Image</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                            <th class="product-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 0 ?>
                                        @foreach($cart as $key=>$product)
                                        <?php $i++ ?>
                                        <tr>
                                            <td class="product-price">{{$i}}</td>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="img/products/13.jpg" alt="cart-image" /></a>
                                            </td>
                                            <td class="product-name"><a href="#">{{$product['title']}}</a></td>
                                            <td class="product-price"><span class="amount">${{$product['price']}}</span></td>
                                            <td class="product-quantity"><input type="number" value="{{$product['quantity']}}" /></td>
                                            <td class="product-subtotal">
                                                <?php
                                                  $qnt_price = number_format($product['price']*$product['quantity'],2)  
                                                ?>
${{$qnt_price}}
                                        </td>
                                        
                                            <td class="product-remove">

                        <form action="{{route('cart.remove')}}" method="POST">

                        {{csrf_field()}}
                        <input type="hidden" value="{{$product['id']}}" name="product_id">

                        <button type="submit" class="btn btn-default"><i class="fa fa-times" aria-hidden="true"></i></button>
                        </form>

                                            </td>
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- Table Content Start -->
                            <div class="row">
                               <!-- Cart Button Start -->
                                <div class="col-md-8 col-sm-12">
                                    <div class="buttons-cart">
                                        <input type="submit" value="Update Cart" />
                                        <a href="#">Continue Shopping</a>
                                    </div>
                                </div>
                                <!-- Cart Button Start -->
                                <!-- Cart Totals Start -->
                                <div class="col-md-4 col-sm-12">
                                    <div class="cart_totals float-md-right text-md-right">
                                        <h2>Cart Totals</h2>
                                        <br />
                                        <table class="float-md-right">
                                            <tbody>
                                                <tr class="cart-subtotal">
                                                    <th>Subtotal</th>
                                                    <td><span class="amount">$215.00</span></td>
                                                </tr>
                                                <tr class="order-total">
                                                    <th>Total</th>
                                                    <td>
                                                        <strong><span class="amount">
    ${{number_format($total)}}
                                                    </span></strong>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="wc-proceed-to-checkout">
                                            <a href="#">Proceed to Checkout</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Cart Totals End -->
                            </div>
                            <!-- Row End -->
                        </form>
                        <!-- Form End -->
                    </div>
                </div>
                 <!-- Row End -->
                 
            </div>
        </div>
        <!-- Cart Main Area End -->
@endsection