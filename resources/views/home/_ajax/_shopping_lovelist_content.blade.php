@php
$lovelist = Cart::instance(Config::get('constants.home.LOVE_LIST_BAG', 'lovelist'));
$content = Cart::instance(Config::get('constants.home.LOVE_LIST_BAG', 'lovelist'))->content();
$total_price = $lovelist->total();
$counter = $lovelist->count();
@endphp

<div class="cart">
	<ul class="cart-items">
		
		@if ($counter > 0)
		@foreach ($content as $item)
		<li class="clearfix">
			<img class="cart_item_product" src="{{ asset($item->options->img) }}" alt="" />
			<a href="product-page.html" class="cart_item_title">{{ $item->name or '' }}</a>
			<span class="cart_item_price">{{ $item->qty or 0 }} × ${{ $item->price or 0 }}</span>
		</li>
		@endforeach
		@else
		<li>Cart is empty</li>
		@endif
	</ul>
	@if ($counter > 0)
	<div class="cart_total">
		<div class="clearfix"><span class="cart_subtotal">bag subtotal: <b>${{ $total_price }}</b></span></div>
		<a class="btn active" href="checkout.html">Checkout</a>
	</div>
	@endif
</div>