@extends('layouts.app')

@section('title', $title)

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- //PRELOADER -->
<div class="preloader_hide">

	<!-- PAGE -->
	<div id="page">
		<!-- BREADCRUMBS -->
		<section class="breadcrumb parallax margbot30"></section>
		<!-- //BREADCRUMBS -->
		
		
		<!-- PAGE HEADER -->
		<section class="page_header">
			
			<!-- CONTAINER -->
			<div class="container">
				<h3 class="pull-left"><b>Shopping bag</b></h3>
				
				<div class="pull-right">
					<a href="women.html" >Back to shop<i class="fa fa-angle-right"></i></a>
				</div>
			</div><!-- //CONTAINER -->
		</section><!-- //PAGE HEADER -->
		
		
		<!-- SHOPPING BAG BLOCK -->
		<section class="shopping_bag_block">
			
			<!-- CONTAINER -->
			<div class="container">

				<!-- ROW -->
				<div class="row">
					
					<!-- CART TABLE -->
					<div class="col-lg-9 col-md-9 padbot40">
						
						<table class="shop_table">
							<thead>
								<tr>
									<th class="product-thumbnail"></th>
									<th class="product-name">Item</th>
									<th class="product-price">Price</th>
									<th class="product-quantity">Quantity</th>
									<th class="product-subtotal">Total</th>
									<th class="product-remove"></th>
								</tr>
							</thead>
							<tbody>
								@foreach ($shopping_bag->content() as $item)
								<tr class="cart_item {{ $item->rowId }}">
									<td class="product-thumbnail"><a href="product-page.html" ><img src="{{ asset($item->options->img) }}" width="100px" alt="" /></a></td>
									<td class="product-name">
										<a href="product-page.html">{{ $item->name }}</a>
										<ul class="variation">
											<li class="variation-Color">Color: <span>Brown</span></li>
											<li class="variation-Size">Size: <span>XS</span></li>
										</ul>
									</td>

									<td class="product-price">${{ $item->price }}</td>

									<td class="product-quantity">
										<select class="basic" onchange="changeQty(this)" >
											<option value="">{{ $item->qty }}</option>
											@for ($i = 1; $i <= 20 ; $i++)
												<option value='{{ $i }}|{{ $item->rowId }}'>{{ $i }}</option>
											@endfor
										</select>
									</td>
									
									<td class="product-subtotal">${{ $item->total }}</td>

									<td class="product-remove" data-rowid="{{ $item->rowId }}"><a href="javascript:void(0);" ><span>Delete</span> <i>X</i></a></td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div><!-- //CART TABLE -->
					
					
					<!-- SIDEBAR -->
					<div id="sidebar" class="col-lg-3 col-md-3 padbot50">
						
						<!-- BAG TOTALS -->
						<div class="sidepanel widget_bag_totals">
							<h3>BAG TOTALS</h3>
							<table class="bag_total">
								<tr class="cart-subtotal clearfix">
									<th>Sub total</th>
									<td>${{ $shopping_bag->subtotal() }}</td>
								</tr>
								<tr class="shipping clearfix">
									<th>SHIPPING</th>
									<td>Free</td>
								</tr>
								<tr class="total clearfix">
									<th>Total</th>
									<td>${{ $shopping_bag->total() }}</td>
								</tr>
							</table>
							<form class="coupon_form" action="javascript:void(0);" method="get">
								<input type="text" name="coupon" value="Have a coupon?" onFocus="if (this.value == 'Have a coupon?') this.value = '';" onBlur="if (this.value == '') this.value = 'Have a coupon?';" />
								<input type="submit" value="Apply">
							</form>
							<a class="btn active" href="javascript:void(0);" >Check out</a>
							<a class="btn inactive" href="javascript:void(0);" >Continue shopping</a>
						</div><!-- //REGISTRATION FORM -->
					</div><!-- //SIDEBAR -->
				</div><!-- //ROW -->
			</div><!-- //CONTAINER -->
		</section><!-- //SHOPPING BAG BLOCK -->
	</div><!-- //PAGE -->
</div>

<!-- TOVAR MODAL CONTENT -->
<div id="modal-body" class="clearfix">
	<div id="tovar_content"></div>
	<div class="close_block"></div>
</div><!-- TOVAR MODAL CONTENT -->
@endsection