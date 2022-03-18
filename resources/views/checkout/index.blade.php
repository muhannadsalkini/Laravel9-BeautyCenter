@extends('layouts.checkout')

@section('title', 'Checkot')

@section('keywords','Bakim, Guzellik')


@section('content')
    <!-- checkout start -->
    <div class="checkout-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <div class="checkout-step active">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#checkout">
                                        <h5>1. CHECKOUT METHOD</h5>
                                    </a>
                                </div>
                            </div>
                            <div id="checkout" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <div class="inner-step clearfix">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="guest-or-user">
                                                <h5>CHECKOUT AS A GUEST OR REGISTER</h5>
                                                <p>Register with us for future convenience</p>
                                                <form action="#">
                                                    <p><input type="radio" value="guest" name="guest_or_register" id="guest">Checkout as Guest</p>
                                                    <p><input type="radio" value="register" name="guest_or_register" id="register">Register</p>
                                                </form>

                                                <h6>Register and save time!</h6>
                                                <p>Register with us for future convenience</p>
                                                <ul>
                                                    <li><a href="#">Fast and easy checkout</a></li>
                                                    <li><a href="#">Easy access to your order history and status</a></li>
                                                </ul>
                                                <a class="btn-continue" href="#">Continue</a>
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-md-offset-1 col-sm-6 col-xs-12">
                                            <div class="registered-user">
                                                <h5>LOGIN</h5>
                                                <p>Already registered? <br/><span>Please login below:</span></p>
                                                <form action="#">
                                                    <p><label>E-mail address*</label> <br> <input type="email"></p>
                                                    <p><label>Password*</label> <br> <input type="password"></p>
                                                    <p><a href="#">forgot your password?</a></p>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <div class="checkout-step active">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#billing">
                                        <h5>2. BILLING INFORMATION</h5>
                                    </a>
                                </div>
                            </div>
                            <div id="billing" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <div class="inner-step clearfix">
                                        <form class="clearfix" action="#">
                                            <input class="first_name" type="text" name="first" id="first" placeholder="First Name*">
                                            <input class="last_name" type="text" name="last" id="last" placeholder="Last name*">
                                            <input class="company_name" type="text" name="company" id="company" placeholder="Company name (optical)">
                                            <input class="street_name" type="text" name="street" id="street" placeholder="Street address*">
                                            <input class="city_name" type="text" name="city" id="city" placeholder="City*">
                                            <input class="post_code" type="text" name="post" id="post" placeholder="Postcode / ZIP*">
                                            <input class="country_name" type="text" name="country" id="country" placeholder="State / Country">
                                            <input class="email_address" type="text" name="email" id="email" placeholder="E-mail Address*">
                                            <input class="phone_number" type="text" name="phone" id="phone" placeholder="Phone number*">
                                            <div class="form-footer">
                                                <p><input class="check" type="checkbox"> Check this if the billing address is the same as Shipping address</p>
                                                <input type="submit" value="Continue">
                                            </div>


                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <div class="checkout-step">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#shipping" >
                                        <h5>3. SHIPPING INFORMATION</h5>
                                    </a>
                                </div>
                            </div>
                            <div id="shipping" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <div class="shipping-inform">
                                        <p>Select a billing address from your address book or enter a new address.</p>
                                        <div class="country-select">
                                            <select name="select" id="select-o">
                                                <option value="selected">select your address</option>
                                                <option value="">Add new address</option>
                                                <option value="">Dhaka,Bangladesh</option>
                                            </select>
                                        </div>
                                        <div class="method-input-box">
                                            <p>
                                                <input type="checkbox">
                                                <label>Use Billing Address</label>
                                            </p>
                                        </div>
                                        <div class="billing-button">
                                            <a href="#">
                                                <i class="fa fa-arrow-up"></i>
                                                back
                                            </a>
                                            <div class="billing-button floatright">
                                                <button type="submit">continue</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <div class="checkout-step">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#method">
                                        <h5>4. SHIPPING METHOD</h5>
                                    </a>
                                </div>
                            </div>
                            <div id="method" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body">
                                    <div class="shipping-method">
                                        <p class="large-text">Flat Rate</p>
                                        <p>Fixed $40.00</p>
                                        <div class="billing-button">
                                            <a href="#">
                                                <i class="fa fa-arrow-up"></i>
                                                back
                                            </a>
                                            <div class="billing-button floatright">
                                                <button type="submit">continue</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <div class="checkout-step active">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#payment-info">
                                        <h5>5. PAYMENT INFORMATION</h5>
                                    </a>
                                </div>
                            </div>
                            <div id="payment-info" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                <div class="panel-body">
                                    <div class="inner-step clearfix">
                                        <div class="payment-method">
                                            <p>Choose your payment method :</p>
                                            <div class="payment-log">
                                                <img src="images/logo/payment.png" alt="">
                                            </div>
                                        </div>

                                        <div class="method-footer">
                                            <div class="left">
                                                <h5>YOUR PAYPAL ACCOUNT</h5>
                                                <p>Pay via credit or debit card, Paypal transfer or even via Bank account in just a few clicks.</p>
                                                <p class="last_p">This method is super easy and well protected.</p>
                                            </div>
                                            <a href="#" class="btn-continue">Continue</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingSix">
                                <div class="checkout-step">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#order_review">
                                        <h5>6. ORDER REVIEW</h5>
                                    </a>
                                </div>
                            </div>
                            <div id="order_review" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                <div class="panel-body">
                                    <div class="order-review">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th class="width-1">Product Name</th>
                                                    <th class="width-2">Price</th>
                                                    <th class="width-3">Qty</th>
                                                    <th class="width-4">Subtotal</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="o-pro-dec">
                                                            <p>Fusce aliquam</p>
                                                            <p><small>color blue </small></p>
                                                            <p><small>size M</small></p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="o-pro-price">
                                                            <p>$172.00</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="o-pro-qty">
                                                            <p>1</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="o-pro-subtotal">
                                                            <p>$172.00</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="o-pro-dec">
                                                            <p>Pellentesque habitant </p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="o-pro-price">
                                                            <p>$124.00</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="o-pro-qty">
                                                            <p>2</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="o-pro-subtotal">
                                                            <p>$248.00</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="o-pro-dec">
                                                            <p>Primis in faucibus</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="o-pro-price">
                                                            <p>$111.00</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="o-pro-qty">
                                                            <p>1</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="o-pro-subtotal">
                                                            <p>$111.00</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="o-pro-dec">
                                                            <p>Etiam gravida</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="o-pro-price">
                                                            <p>$222.00</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="o-pro-qty">
                                                            <p>1</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="o-pro-subtotal">
                                                            <p>$222.00</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="o-pro-dec">
                                                            <p>Proin lectus ipsum</p>
                                                            <p><small>color red </small></p>
                                                            <p><small>size XL</small></p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="o-pro-price">
                                                            <p>$122.00</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="o-pro-qty">
                                                            <p>1</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="o-pro-subtotal">
                                                            <p>$122.00</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="o-pro-dec">
                                                            <p>Quisque in arcu</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="o-pro-price">
                                                            <p>$222.00</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="o-pro-qty">
                                                            <p>1</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="o-pro-subtotal">
                                                            <p>$222.00</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <td colspan="3">Subtotal </td>
                                                    <td colspan="1">$4,001.00</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">Shipping &amp; Handling (Flat Rate - Fixed</td>
                                                    <td colspan="1">$45.00</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3"><b>Grand Total</b></td>
                                                    <td colspan="1"><b>$4,722.00</b></td>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <div class="block-area-button">
                                            <span>Forgot an Item?  <a href="#" class="o-back-to"> Edit Your Cart</a></span>
                                            <button class="floatright" type="submit">Continue</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-1 col-sm-12 col-xs-12">
                    <div class="checkout-right">
                        <div class="checkout-progress">
                            <h4>your checkout progress</h4>
                        </div>
                        <ul>
                            <li><a href="#">- Billing Address</a></li>
                            <li><a href="#">- Shipping Address</a></li>
                            <li><a href="#">- Shipping Method</a></li>
                            <li><a href="#">- Payment Method</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- checkout end -->
@endsection
