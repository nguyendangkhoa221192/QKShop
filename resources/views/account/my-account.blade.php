@extends('layouts.app')

@section('title', 'Account')

@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('css/account/my-account.css') }}">

<script src="{{ asset('js/account/my-account.js') }}" type="text/javascript"></script>

<section class="my_account parallax">

    <!-- CONTAINER -->
    <div class="container">

        <div class="my_account_block clearfix">
            <div class="login">
                <h2>I'M ALREADY REGISTERED</h2>
                <form class="login_form" action="{{ route('createUser') }}" method="post">
                    {{ csrf_field() }}
                    <input type="text" name="username" value="Username or email" id="username" />
                    <input class="last" type="password" name="password" value="Password" id="password" />
                    <div class="clearfix">
                        <div class="pull-left"><input type="checkbox" id="categorymanufacturer1" /><label for="categorymanufacturer1">Keep me signed</label></div>
                        <div class="pull-right"><a class="forgot_pass" href="javascript:void(0);" >Forgot password?</a></div>
                    </div>
                    <div class="center"><input type="submit" value="Login"></div>
                </form>
            </div>
            <div class="new_customers">
                <h2>NEW CUSTOMERS</h2>
                <p>Register with Glammy Shop to enjoy personalized services, including:</p>
                <ul>
                    <li><a href="javascript:void(0);" >—  Online Order Status</a></li>
                    <li><a href="javascript:void(0);" >—  Love List</a></li>
                    <li><a href="javascript:void(0);" >—  Sign up to receive exclusive news and private sales</a></li>
                    <li><a href="javascript:void(0);" >—  Place Test Orders</a></li>
                    <li><a href="javascript:void(0);" >—  Quick and easy checkout</a></li>
                </ul>
                <div class="center"><a class="btn active" href="javascript:void(0);" >create new account</a></div>
            </div>
        </div>

        <div class="my_account_note center">HAVE A QUESTION? <b>0933 463 947</b></div>
    </div><!-- //CONTAINER -->
</section>

@endsection
