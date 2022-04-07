@extends('layouts.site-front')

@section('content')

<div class="col"><div class="woocommerce-notices-wrapper"></div></div>
	<div class="col my-3">
	
	<div id="product-118" class="product type-product post-118 status-publish instock product_cat-auto-help product_cat-featured product_cat-finances product_tag-business product_tag-marketing has-post-thumbnail shipping-taxable purchasable product-type-simple">
	
	<div class="row">
	

	<div class='col-12 col-sm-12'>
	<div class="d-inline-block">
<h4>Search for "<?php echo $_GET['q'] ?>"</h4><hr>
</div>
<div class="row mt-2" id="post-data">
@include('data')
</div>
</div>
	</div>

	
	

<section class="cross-sells crossells products p-3">

		
</section>
	
		
	</div>
	
	</div>
	<script>
		function myFunction(iid) {
  /* Get the text field */
  str = document.getElementById(iid).innerHTML;
        const el = document.createElement('textarea');
        el.value = str;
        document.body.appendChild(el);
        el.select();
        document.execCommand('copy');
        document.body.removeChild(el);

  /* Alert the copied text */
  
}
</script>
@endsection
		
		
	