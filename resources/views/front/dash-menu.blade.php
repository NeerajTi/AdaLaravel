
<nav id="sidebar">
<div class="woocommerce-MyAccount-navigation wc-navigation-sticky-top">
	<div class="sidenav-nav-container">
	<ul class="menu m-0">
					<li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard is-active menu-hover">
				<a href="{{ url('/my-account') }}">Dashboard</a>
			</li>
					<li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders menu-hover">
				<a href="{{ route('orders.index') }}">Orders</a>
			</li>
			<li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders menu-hover">
				<a href="{{ route('products.index') }}">Products</a>
			</li>
					<!--<li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--downloads menu-hover">
				<a href="#;/projects/exlibriswp/my-account/downloads/">Downloads</a>
			</li>-->
					<li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-address menu-hover">
				<a href="{{ route('users.edit',Auth::user()->id) }}">Account Details</a>
			</li>
				
					<li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--tinv_wishlist menu-hover">
				<a href="{{ url('/change-password') }}">Change Password</a>
			</li>
			</ul>
	</div>
</div>
</nav>