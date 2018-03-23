@php
$shopping_bag = Cart::instance(Config::get('constants.home.SHOPPING_BAG', 'shopping'));
$content = Cart::instance(Config::get('constants.home.SHOPPING_BAG', 'shopping'))->content();
$total_price = $shopping_bag->total();
$counter = $shopping_bag->count();
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