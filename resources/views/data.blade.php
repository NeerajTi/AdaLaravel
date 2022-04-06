@foreach ($products as $k=>$product)
<div class="col-6 col-sm-3 p-3">
<div class="selected-books">				
				
				<a href="{{ route('products.show',$product->id) }}">
				<img width="300" height="450" src="{{ asset('images/products') }}/{{ $product->image }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" srcset="{{ asset('images/products') }}/{{ $product->image }}" sizes="(max-width: 300px) 100vw, 300px" />
				</a>
									
				<div class="p-2">
						
						<h6 class="my-2 text-break"><a href="{{ route('products.show',$product->id) }}">{{ $product->name }}</a></h6>
						<span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol"></span>{{ $product->price }} ADA</bdi></span></span>
						</div>
						<!--<div><a class="btn btn-custom btn-sm" href="{{ url('add-to-cart/'.$product->id) }}">Add to Cart</a></div>-->
						</div>
</div>
@endforeach