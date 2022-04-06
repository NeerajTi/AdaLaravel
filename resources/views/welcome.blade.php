@extends('layouts.site-front')

@section('content')

		
		<!-- Home Slider -->
		<div class="col-12 my-3">	
			<div class="row">

	<div class="col">			
		<div class="d-inline-block">
			<h4>Just for you</h4>
		</div>			
	</div>

	<div class="carousel w-100" data-flickity='{ "draggable": ">1","pageDots": false, "imagesLoaded": true, "wrapAround": true, "cellAlign": "left", "rightToLeft": false }'>
		
	@if(!empty($banners) && $banners->count())
    @foreach ($banners as $k=>$banner)
	<div class="col-12 col-xl-12 p-3 mx-auto">
			<div class="card border-class">			
				<div class="slider-wrap">
				
					<a href="">
				  
						<img class="img-fluid shadow-sm" style='width:100%;height:540px' src="{{ asset('images/banners') }}/<?php echo $banner->image ?>" loading="lazy" srcset="{{ asset('images/banners') }}/<?php echo $banner->image ?>" sizes="(max-width: 1024px) 100vw, 1024px" />

							
						<div class="position-absolute bottom p-2 m-2 slider-box text-white">
						
							<h4>{{$banner->title}}</h4>
							
							<p>{{$banner->detail}}</p>
							
														
						</div>
											
					</a>
					
				</div>			
			</div>
		</div>
	@endforeach
	@else

        @endif
		
		
		
		
		
		
	</div>

</div> 	
		</div>
		
		
		
	
		
		
		
		<!-- Home selected books --> 
		<div class="col-12 my-3">		
		
			<div class="d-inline-block">
<h4>Recent tokens</h4>
</div>

 
<div class="home-va-btn">		
	<a href="{{ route('products.index') }}">  <i class="fas fa-chevron-right fa-sm"></i></a>
</div>
@if(!empty($products) && $products->count())
<div class="row" id="post-data">
@include('data')
</div>
<div class="ajax-load text-center" style="display:none">
	<p><i class="fa fa-spinner" aria-hidden="true"></i></p>
</div>
 @else
<div class="alert alert-info">
  There is no products added.
</div>
        @endif
		
		</div>
		
			

		


<input type='hidden' id='totalpages' value="{{ $totalpages }}" />	

		

<script type="text/javascript">
	var page = 1;
	$(window).scroll(function() {
	    if($(window).scrollTop() + $(window).height() >= $(document).height()) {
	        page++;
	        loadMoreData(page);
			//alert($("#totalpages").val());
	    }
	});


	function loadMoreData(page){
		if(parseInt(page)<=parseInt($("#totalpages").val()))
		{
	  $.ajax(
	        {
	            url: '?page=' + page,
	            type: "get",
	            beforeSend: function()
	            {
	                $('.ajax-load').show();
	            }
	        })
	        .done(function(data)
	        {
			
	            if(data.html === " "){
	                $('.ajax-load').html("No more records found");
					$('.ajax-load').hide();
	                return;
	            }
	            
	            $("#post-data").append(data.html);
	        })
	        .fail(function(jqXHR, ajaxOptions, thrownError)
	        {
	              alert('server not responding...');
	        });
		}else
		{
			$('.ajax-load').hide();
			return;
		}
	}
</script>
@endsection
		
		
	