<header>

	<!-- TOP INFO -->
	<div class="top_info">

		<!-- CONTAINER -->
		<div class="container clearfix">
				@guest
				<ul class="secondary_menu">
					<li><a href="{{ route('login') }}" >Login</a></li>
					<li><a href="{{ route('register') }}" >Register</a></li>
				</ul>
				@else
				<li class="dropdown">
					<a href="#" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" class="dropdown-toggle">
						{{ Auth::user()->name }}
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
							</form>
						</li>
						<li>
							<a href="{{ route('account') }}" >My account</a>
						</li>
					</ul>
				</li>
				@endguest

			<div class="live_chat"><a href="javascript:void(0);" ><i class="fa fa-comment-o"></i> Live chat</a></div>

			<div class="phone_top">have a question? <a href="tel:1 800 888 2828" >1 800 888 2828</a></div>
		</div><!-- //CONTAINER -->
	</div><!-- TOP INFO -->


	<!-- MENU BLOCK -->
	<div class="menu_block">

		<!-- CONTAINER -->
		<div class="container clearfix">

			<!-- LOGO -->
			<div class="logo">
				<a href="{{ route('home') }}" ><img src="{{ asset ('images/logo.png') }}" alt="" /></a>
			</div><!-- //LOGO -->


			<!-- SEARCH FORM -->
			<div class="top_search_form">
				<a class="top_search_btn" href="javascript:void(0);" ><i class="fa fa-search"></i></a>
				<form method="get" action="#">
					<input type="text" name="search" value="Search" onFocus="if (this.value == 'Search') this.value = '';" onBlur="if (this.value == '') this.value = 'Search';" />
				</form>
			</div><!-- SEARCH FORM -->


			<!-- SHOPPING BAG -->
			<div class="shopping_bag">
				<a class="shopping_bag_btn" href="javascript:void(0);" ><i class="fa fa-shopping-cart"></i><p>shopping bag</p><span>2</span></a>
				<div class="cart">
					<ul class="cart-items">
						<li class="clearfix">
							<img class="cart_item_product" src="{{ asset ('images/tovar/women/1.jpg') }}" alt="" />
							<a href="product-page.html" class="cart_item_title">popover sweatshirt in floral jacquard</a>
							<span class="cart_item_price">1 × $98.00</span>
						</li>
						<li class="clearfix">
							<img class="cart_item_product" src="{{ asset ('images/tovar/women/3.jpg') }}" alt="" />
							<a href="product-page.html" class="cart_item_title">japanese indigo denim jacket</a>
							<span class="cart_item_price">2 × $158.00</span>
						</li>
					</ul>
					<div class="cart_total">
						<div class="clearfix"><span class="cart_subtotal">bag subtotal: <b>$414</b></span></div>
						<a class="btn active" href="checkout.html">Checkout</a>
					</div>
				</div>
			</div><!-- //SHOPPING BAG -->


			<!-- LOVE LIST -->
			<div class="love_list">
				<a class="love_list_btn" href="javascript:void(0);" ><i class="fa fa-heart-o"></i><p>Love list</p><span>0</span></a>
				<div class="cart">
					<ul class="cart-items">
						<li>Cart is empty</li>
					</ul>
					<div class="cart_total">
						<div class="clearfix"><span class="cart_subtotal">bag subtotal: <b>$0</b></span></div>
						<a class="btn active" href="checkout.html">Checkout</a>
					</div>
				</div>
			</div><!-- //LOVE LIST -->


			<!-- MENU -->
			<ul class="navmenu center">
				<li class="sub-menu first active"><a href="javascript:void(0);" >Home</a>
					<!-- MEGA MENU -->
					<ul class="mega_menu megamenu_col1 clearfix">
						<li class="col">
							<ol>
								<li class="active"><a href="index.html" >Home slider</a></li>
								<li><a href="index2.html" >Home men promo</a></li>
								<li><a href="index3.html" >Home kids</a></li>
								<li><a href="index4.html" >Home video</a></li>
								<li><a href="sale.html" >Home Sale<span>sale</span></a></li>
								<li><a href="shoes.html" >Home shoes</a></li>
							</ol>
						</li>
					</ul><!-- //MEGA MENU -->
				</li>
				<li class="sub-menu"><a href="javascript:void(0);" >women</a>
					<!-- MEGA MENU -->
					<ul class="mega_menu megamenu_col1 clearfix">
						<li class="col">
							<ol>
								<li><a href="women.html" >sweaters</a></li>
								<li><a href="women.html" >shirts & tops<span>hot</span></a></li>
								<li><a href="women.html" >knits & tees</a></li>
								<li><a href="women.html" >pants</a></li>
								<li><a href="women.html" >denim</a></li>
								<li><a href="women.html" >dresses</a></li>
								<li><a href="women.html" >maternity</a></li>
							</ol>
						</li>
					</ul><!-- //MEGA MENU -->
				</li>
				<li class="sub-menu"><a href="javascript:void(0);" >Men</a>
					<!-- MEGA MENU -->
					<ul class="mega_menu megamenu_col2 clearfix">
						<li class="col">
							<ol>
								<li><a href="men.html" >sweaters</a></li>
								<li><a href="men.html" >shirts & tops</a></li>
								<li><a href="men.html" >knits & tees</a></li>
								<li><a href="men.html" >pants</a></li>
								<li><a href="men.html" >denim</a></li>
								<li><a href="men.html" >dresses</a></li>
								<li><a href="men.html" >maternity</a></li>
							</ol>
						</li>
						<li class="col">
							<ol>
								<li><a href="men.html" >skirts</a></li>
								<li><a href="men.html" >shorts</a></li>
								<li><a href="men.html" >blazers</a></li>
								<li><a href="men.html" >outerwear</a></li>
								<li><a href="men.html" >suiting</a></li>
								<li><a href="men.html" >swim</a></li>
								<li><a href="men.html" >sleepwear</a></li>
							</ol>
						</li>
					</ul><!-- //MEGA MENU -->
				</li>
				<li><a href="shoes.html" >shoes</a></li>
				<li class="sub-menu"><a href="javascript:void(0);" >Pages</a>
					<!-- MEGA MENU -->
					<ul class="mega_menu megamenu_col3 clearfix">
						<li class="col">
							<ol>
								<li><a href="about.html" >About Us</a></li>
								<li><a href="gallery.html" >Gallery<span>new</span></a></li>
								<li><a href="product-page.html" >Product Page</a></li>
								<li><a href="love-list.html" >Love List</a></li>
								<li><a href="shopping-bag.html" >Shopping Bag</a></li>
								<li><a href="my-account.html" >My Account</a></li>

							</ol>
						</li>
						<li class="col">
							<ol>
								<li><a href="product-catalog.html" >Product Catalog</a></li>
								<li><a href="brands-list.html" >Brands List</a></li>
								<li><a href="update.html" >Site Update</a></li>
								<li><a href="contacts.html" >Contacts</a></li>
								<li><a href="shortcodes.html" >Shortcodes</a></li>
							</ol>
						</li>
						<li class="col">
							<ol>
								<li><a href="404.html" >404 Page</a></li>
								<li><a href="articles.html" >Articles</a></li>
								<li><a href="article-single.html" >Article Single</a></li>
								<li><a href="checkout.html" >Checkout</a></li>
								<li><a href="faq.html" >FAQ</a></li>
							</ol>
						</li>
					</ul><!-- //MEGA MENU -->
				</li>
				<li class="sub-menu"><a href="javascript:void(0);" >Blog</a>
					<!-- MEGA MENU -->
					<ul class="mega_menu megamenu_col1 clearfix">
						<li class="col">
							<ol>
								<li><a href="blog.html" >Blog</a></li>
								<li><a href="blog-post.html" >Blog Post</a></li>
							</ol>
						</li>
					</ul><!-- //MEGA MENU -->
				</li>
				<li class="last sale_menu"><a href="sale.html" >Sale</a></li>
			</ul><!-- //MENU -->
		</div><!-- //MENU BLOCK -->
	</div><!-- //CONTAINER -->
			</header><!-- //HEADER -->
