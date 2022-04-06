@extends('layouts.site-front-wosidebar')

@section('content')
<div class="row m-3"> 
    
<div class="col-12 col-sm-10 mx-auto">
<h3>Shopping Cart</h3>
<hr class="mb-4">	
@if ($message = Session::get('success_cart'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    @if(session('cart'))
<table id='cart' class="my-2 shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
		<thead>
			<tr>
				<th class="product-remove">Image</th>
				
				<th class="product-name">Product</th>
				<th class="product-price">Price</th>
				<th class="product-quantity">Quantity</th>
				<th class="product-subtotal">Total</th>
                <th class="product-thumbnail">Action</th>
			</tr>
		</thead>
        <tbody>
        <?php $total = 0 ?>
        
            @foreach(session('cart') as $id => $details)
                <?php $total += $details['price'] * $details['quantity'] ?>
                <tr class="woocommerce-cart-form__cart-item cart_item">
                    <td data-th="Product">
                      
                            <a href="{{ route('products.show',$id) }}">
                                <img src="{{ asset('images/products') }}/{{ $details['photo'] }}" width="100" height="100" class="img-fluid"/>
</a>
                         
                    </td>
                    
                        <td class="product-name" data-title="Product">
						<a href="{{ route('products.show',$id) }}">{{ $details['name'] }}</a>						</td>
                    <td data-th="Price">${{ $details['price'] }}</td>
                    <td data-th="Quantity">
                        <input type="number" value="{{ $details['quantity'] }}" style='width:70px' class="form-control quantity" />
                    </td>
                    <td data-th="Subtotal" class="text-left">${{ $details['price'] * $details['quantity'] }}</td>
                    <td class="product-remove">
                    <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
                    <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash"></i></button>						
                        </td>
                </tr>
            @endforeach
        
         
       
        </tbody>
        <tfoot>
       
        <tr>
            <td><a href="{{ url('/') }}" class="btn btn-custom btn-sm"><i class="fa fa-angle-left"></i> Continue Shopping</a>
            <a href="{{ url('/checkout') }}" class="btn btn-custom btn-sm">Checkout <i class="fa fa-angle-right"></i></a>
        </td>
            <td colspan="4" class="hidden-xs"></td>
            <td class="hidden-xs text-right"><strong>Total ${{ $total }}</strong></td>
        </tr>
        </tfoot>
    </table>
    @else
    <div class="alert alert-info">
          Your Cart is empty. <a href="{{ url('/') }}" class="btn btn-custom btn-sm"><i class="fa fa-angle-left"></i> Continue Shopping</a>
          
        </div>
    @endif
</div>

</div>
@endsection
@section('scripts')
    <script type="text/javascript">
        $(".update-cart").click(function (e) {
           e.preventDefault();
           var ele = $(this);
            $.ajax({
               url: "{{ url('update-cart') }}",
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });
        $(".remove-from-cart").click(function (e) {
            e.preventDefault();
            var ele = $(this);
            if(confirm("Are you sure")) {
                $.ajax({
                    url: "{{ url('remove-from-cart') }}",
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>
@endsection