@extends('layouts.site-front')

@section('content')
<?php 
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

function generate_string($input, $strength = 16) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }

    return $random_string;
}
?>
<div class="col"><div class="woocommerce-notices-wrapper"></div></div>
	<div class="col my-3">
	
	<div id="product-118" class="product type-product post-118 status-publish instock product_cat-auto-help product_cat-featured product_cat-finances product_tag-business product_tag-marketing has-post-thumbnail shipping-taxable purchasable product-type-simple">
	
	<div class="row">
	
	<div class="col-12 col-sm-4">
	
	
<div class="wpgs wpgs--with-images images column-altern">

<div class='woo-carousel carousel-main'><div class="woo-carousel-cell"><a data-toggle="lightbox" data-gallery="gallery" data-title="purplecow-sethgodin" data-footer="" href="#;projects/exlibriswp/wp-content/uploads/2019/07/purplecow-sethgodin.jpg"  data-lbwps-width="1098" data-lbwps-height="1648">
	<img width="600" height="900" src="{{ asset('assets/img/purplecow-sethgodin-768x1153.jpg') }}" class="attachment-shop_single size-shop_single wp-post-image border-class shadow-sm" alt="" loading="lazy" srcset="{{ asset('assets/img/purplecow-sethgodin-768x1153.jpg') }}" sizes="(max-width: 600px) 100vw, 600px" /></a></div> </div>
</div>

				
	</div>
	
	<div class="col-12 col-sm-8">

	<div class="summary entry-summary">
		<h4 class="text-break">{{ $product->name }}</h4><h6 class="author-name">
		<a href="#;projects/exlibriswp/book-author/seth-godin/"></a></h6>
		<h6>Buy now price</h6>
		<p class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol"></span>{{ $product->price }} ADA</bdi></span></p>

	
	<form class="cart" action="{{ url('add-to-cart-form') }}" method="post" enctype='multipart/form-data'>
		@csrf
		<div class="tinv-wraper woocommerce tinv-wishlist tinvwl-before-add-to-cart"
	 data-product_id="118">
	<div class="tinv-wishlist-clear"></div><a role="button" tabindex="0" aria-label="Add to Wishlist" class="tinvwl_add_to_wishlist_button tinvwl-icon-heart  tinvwl-position-before" data-tinv-wl-list="[]" data-tinv-wl-product="118" data-tinv-wl-productvariation="0" data-tinv-wl-productvariations="[0]" data-tinv-wl-producttype="simple" data-tinv-wl-action="add"><span class="tinvwl_add_to_wishlist-text">Add to Wishlist</span></a><div class="tinv-wishlist-clear"></div>		<div class="tinvwl-tooltip">Add to Wishlist</div>
</div>

			<div class="quantity">
				<label class="screen-reader-text" for="quantity_61ec09dea0c88">Quantity</label>
		<input
			type="hidden"
			id="quantity_61ec09dea0c88"
			class="input-text qty text"
			step="1"
			min="1"
			max=""
			name="quantity"
			value="1"
			title="Qty"
			size="4"
			placeholder=""
			inputmode="numeric" />
			</div>
	    <input type='hidden' name='product_id' value="{{ $product->id }}" />
		<div class="mb-2"><button type="submit" name="add-to-cart" value="118" class="btn btn-custom btn-sm">Instant Buy</button>
</div>
        <button type="button" name="add-to-cart" value="118" class="btn btn-custom btn-sm">Instant Buy With Other Wallets</button>
			</form>

	
<div class="woocommerce-product-details__short-description">
	<p>{{ $product->shortdesc }}</p>
</div>


	</div>
	<div class="woocommerce-tabs wc-tabs-wrapper">
		
		<div class="woocommerce row">
			<div class="col-12 col-sm-12">
				<ul class="nav nav-pills" role="tablist" id="wooTab">
				<li class="description_tab" id="tab-asset-details">
					<a class="nav-link" href="#tab-assetdetails" data-toggle="tab">Asset Details</a>
					</li>
										<li class="description_tab" id="tab-title-description">
					<a class="nav-link" href="#tab-description" data-toggle="tab">Description</a>
					</li>
										<!--<li class="additional_information_tab" id="tab-title-additional_information">
					<a class="nav-link" href="#tab-additional_information" data-toggle="tab">Additional information</a>
					</li>-->
										<li class="reviews_tab" id="tab-title-reviews">
					<a class="nav-link" href="#tab-reviews" data-toggle="tab">Reviews (0)</a>
					</li>
									</ul>
				<div class="tab-content card p-3 my-3 border-class shadow-sm">
				<div class="tab-pane fade" id="tab-assetdetails">
				<div class="row">
					<div class="col-12 col-sm-11 mx-auto">
						<div class="row">
							<div class="col-12 col-sm-6">
							<div class="card border" style="border-color: lightgrey;">
  
  <div class="card-body">
	  <h6>ASSET NAME</h6>
	  <div>{{$product->name}}</div>
  </div>
 
</div>
							</div>
							<div class="col-12 col-sm-6">
							<div class="card border" style="border-color: lightgrey;">
  
  <div class="card-body">
	  <h6>AVERAGE FLOOR PRICE</h6>
	  <div>{{$product->price}} ADA</div>
  </div>
 
</div>
							</div>
						</div>
					</div>
				</div>		
				<div class="row mt-1">
					<div class="col-12 col-sm-11 mx-auto">
						<div class="row">
							<div class="col-12 col-sm-6">
							<div class="card border" style="border-color: lightgrey;">
  
  <div class="card-body" style='position:relative'>
<div style='position:absolute;top:2px;right:3px;'>
  <i class="fa fa-clone" onclick="myFunction('assetid')" aria-hidden="true"></i>
</div>
	  <h6>ASSET ID</h6>
	  <div id='assetid'>{{uniqid()}}<?php echo $product->id ?></div>
  </div>
 
</div>
							</div>
							<div class="col-12 col-sm-6">
							<div class="card border" style="border-color: lightgrey;">
  
							<div class="card-body" style='position:relative'>
<div style='position:absolute;top:2px;right:3px;'>
  <i class="fa fa-clone" onclick="myFunction('lid')" aria-hidden="true"></i>
</div>
	  <h6>LISTING ID</h6>
	  <div id='lid'>{{uniqid('',TRUE)}}<?php echo $product->id ?></div>
  </div>
 
</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row mt-1">
					<div class="col-12 col-sm-11 mx-auto">
						<div class="row">
							<div class="col-12 col-sm-6">
							<div class="card border" style="border-color: lightgrey;">
  
							<div class="card-body" style='position:relative'>
<div style='position:absolute;top:2px;right:3px;'>
  <i class="fa fa-clone" onclick="myFunction('policyid')" aria-hidden="true"></i>
</div>
	  <h6>POLICY ID</h6>
	  <div id="policyid"><?php echo generate_string($permitted_chars, 32); ?></div>
  </div>
 
</div>
							</div>
							<div class="col-12 col-sm-6">
							<div class="card border" style="border-color: lightgrey;">
  
  <div class="card-body">
	  <h6>QUANTITY</h6>
	  <div>1 of 1</div>
  </div>
 
</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row mt-1">
					<div class="col-12 col-sm-11 mx-auto">
						<div class="row">
							<div class="col-12 col-sm-6">
							<div class="card border" style="border-color: lightgrey;">
  
  <div class="card-body">
	  <h6>LISTED ON</h6>
	  <div><?php echo date('D M d Y',strtotime($product->created_at)) ?></div>
  </div>
 
</div>
							</div>
							
						</div>
					</div>
				</div>
						
						</div>
										<div class="tab-pane fade" id="tab-description">
						
<?php echo $product->detail; ?>
</div>
										<div class="tab-pane fade" id="tab-additional_information">
						
<div class="row">

<div class="col-md-6">


<table class="woocommerce-product-attributes shop_attributes">
			<tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pages">
			<th class="woocommerce-product-attributes-item__label">Pages</th>
			<td class="woocommerce-product-attributes-item__value"><p>369</p>
</td>
		</tr>
	</table>

</div>

</div>					</div>
										<div class="tab-pane fade" id="tab-reviews">
						<div id="reviews" class="woocommerce-Reviews row">
	<div id="comments" class="col-md-6">
		<h4 class="woocommerce-titles mb-4">
					</h4>

					<p class="woocommerce-noreviews">There are no reviews yet.</p>
			</div>

			<div id="review_form_wrapper" class="col-md-6">
			<div id="review_form">
					<div id="respond" class="comment-respond">
		<h4 id="reply-title" class="woocommerce-titles mb-4">Be the first to review &ldquo;Purple Cow&rdquo; <small><a rel="nofollow" id="cancel-comment-reply-link" href="/projects/exlibriswp/product/purple-cow/#respond" style="display:none;">Cancel reply</a></small></h4><form action="#;projects/exlibriswp/wp-comments-post.php" method="post" id="commentform" class="comment-form"><p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p><p class="comment-form-author"><label for="author">Name&nbsp;<span class="required">*</span></label> <input id="author" class="form-control border-class" name="author" type="text" value="" size="30" required /></p>
<p class="comment-form-email"><label for="email">Email&nbsp;<span class="required">*</span></label> <input id="email" class="form-control border-class" name="email" type="email" value="" size="30" required /></p>
<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes" /> <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label></p>
<div class="anr_captcha_field"><div id="anr_captcha_field_1" class="anr_captcha_field_div"><input type="hidden" name="g-recaptcha-response" value=""/></div></div><div class="comment-form-rating"><label for="rating">Your rating</label><select name="rating" id="rating" required>
						<option value="">Rate&hellip;</option>
						<option value="5">Perfect</option>
						<option value="4">Good</option>
						<option value="3">Average</option>
						<option value="2">Not that bad</option>
						<option value="1">Very poor</option>
					</select></div><p class="comment-form-comment"><label for="comment">Your review&nbsp;<span class="required">*</span></label><textarea id="comment" class="form-control border-class" name="comment" cols="45" rows="8" required></textarea></p><p class="form-submit"><input name="submit" type="submit" id="submit-exlibriswp" class="btn btn-custom rounded-pill my-3" value="Submit" /> <input type='hidden' name='comment_post_ID' value='118' id='comment_post_ID' />
<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
</p></form>	</div><!-- #respond -->
				</div>
		</div>
	
	<div class="clear"></div>
</div>
					</div>
														</div>
			</div>
		</div>
		
	</div>
	</div>
	<div class='col-12 col-sm-12 mt-4'>
	<div class="d-inline-block">
<h4>More from other sellers</h4>
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
		
		
	