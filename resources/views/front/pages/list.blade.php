@extends('layouts.site-front')

@section('content')

<div class="col"><div class="woocommerce-notices-wrapper"></div></div>
	<div class="col my-3">
	
	<div id="product-118" class="product type-product post-118 status-publish instock product_cat-auto-help product_cat-featured product_cat-finances product_tag-business product_tag-marketing has-post-thumbnail shipping-taxable purchasable product-type-simple">
	
	<div class="row">
	

	
	<div class="col-12 col-sm-12">
    <h4 class="text-break">{{ $page->title }}</h4><hr>
	@if(!empty($products) && $products->count())
<div class="row" id="post-data">
@include('data')
</div>
@else
<div class="alert alert-info">
  There is no products added.
</div>
        @endif
    <div class='mt-2'>
	<?php echo $page->description; ?>
	</div>
	
	</div>
	
	</div>

	
	

<section class="cross-sells crossells products p-3">

		
</section>
	
		
	</div>
	
	</div>

@endsection
		
		
	