@php($setting = \App\Http\Controllers\HomeController::getsetting())
@extends('layouts.home')

@section('title', $setting->title. ' | Cart' )
@section('description', $setting->description)
@section('keywords',$setting->keywords)
@section('breadcrumbs', 'About Us')

@section('content')
    <!--Breadcrumbs start-->
    @include('home._breadcrumbs')
    <!--Breadcrumbs end-->
    <!--Cart page start-->
    <div class="cart-page ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cart_list table-responsive">
                        <table class="table_cart table-bordered">
                            <thead>
                            <tr>
                                <th class="id">#</th>
                                <th class="product">Image</th>
                                <th class="description">Product Name</th>
                                <th class="quantity">Quantity</th>
                                <th class="price">Price</th>
                                <th class="cart">Total</th>
                                <th class="action">Remove</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="id">1</td>
                                <td class="product_img"><a href="#"><img alt="cart" src="{{asset('assets')}}/images/cart/1.jpg"></a></td>
                                <td class="product_des">
                                    <h3><a href="#">Splash Beauty Spa Body Lotion</a></h3>
                                </td>
                                <td class="p_quantity">
                                    <div class="pp_quantity">
                                        <select class="category-items" name="category">
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                            <option>04</option>
                                            <option>05</option>
                                        </select>
                                    </div>
                                </td>
                                <td class="u_price">$104.99</td>
                                <td class="u_price">$104.99</td>
                                <td class="p_action">
                                    <a title="Remove" href="#"><i class="zmdi zmdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="id">2</td>
                                <td class="product_img"><a href="#"><img alt="cart" src="{{asset('assets')}}/images/cart/1.jpg"></a></td>
                                <td class="product_des">
                                    <h3><a href="#">Splash Beauty Spa Body Lotion</a></h3>
                                </td>
                                <td class="p_quantity">
                                    <div class="pp_quantity">
                                        <select class="category-items" name="category">
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                            <option>04</option>
                                            <option>05</option>
                                        </select>
                                    </div>
                                </td>
                                <td class="u_price">$104.99</td>
                                <td class="u_price">$104.99</td>
                                <td class="p_action">
                                    <a title="Remove" href="#"><i class="zmdi zmdi-delete"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-4 col-sm-12 col-xs-12">
                    <a href="shop-full-grid.html" class="continue-shopping">continue shopping</a>
                    <a href="shop-full-grid.html" class="continue-shopping">update shopping bag</a>
                </div>
                <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12">
                    <div class="discount-code">
                        <h2>discount codes</h2>
                        <p>Enter your coupon code if you have one.</p>
                        <input type="text">
                        <input type="submit" value="apply coupon">
                    </div>
                    <div class="total text-right">
                        <h2>subtotal <span>$190.98</span></h2>
                        <h2 class="strong">grandtotal <span>$190.98</span></h2>
                        <input class="process-checkout" type="submit" value="process to checkout">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Cart page end-->
@endsection
