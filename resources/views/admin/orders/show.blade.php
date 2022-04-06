@extends('layouts.admin-layout')
@section('breadcrumbs')
<li class="breadcrumb-item" aria-current="page"><a href="{{ route('admin.orders.index') }}">Orders</a></li>
<li class="breadcrumb-item active" aria-current="page">Order ID# {{ $order->orderId }}</li>
@endsection
@section('content')
<div class="page-title">
                        <h3></h3>
                    </div>
                    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                    <div class="row">
                    <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                Order ID# {{ $order->orderId }}

                                </div>
                                <div class="card-body">
                                <div class='row'>
<div class='col-sm-6' style='margin:4px 0'>
<h5>User Details</h5>
<p style='margin:1px 0'><?php echo $order->first_name.' '.$order->last_name ?></p>
<p style='margin:1px 0'><?php echo $order->email ?></p>
<p style='margin:1px 0'><?php echo $order->phone ?></p>
<p style='margin:1px 0'><?php echo $order->address ?></p>
</div>
<div class='col-sm-6' style='margin:4px 0'>
<h5>Order Details</h5>
<p style='margin:1px 0'>Order ID:#<?php echo $order->orderId ?></p>
</div>
<div class='col-sm-12'>

      
        <table class="table table-bordered">
           <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $totalCounter = 0;
                    $itemCounter = 0;
					
                   foreach($order->orderitems as $item){

                    // $imgUrl = PRODUCT_IMG_URL.str_replace(' ','-',strtolower($item->product_name']))."/".$item->product_img'];   
                    
                    $total = ($item->price * $item->quantity);
                    $totalCounter+= $total;
                    $itemCounter+=$item->quantity;
					
					
                    ?>
                    <tr>
                        <td>
							
	<a class="product-card__link" target=_blank href="{{ route('products.show',$item->product_id) }}">

						<img src="{{ asset('images/products') }}/{{ $item->image }}" class="rounded img-thumbnail mr-2" style="width:110px;"><?php echo $item->name;?>
                           
                           </a>
											
					

                        </td>
                        <td>
                            $<?php echo $item->price;?>
                        </td>
					
                        <td>
                           <?php echo $item->quantity;?>
                        </td>
                        <td>
                            <?php echo $total;?>
                        </td>
                    </tr>
                <?php }?>
                <tr class="border-top border-bottom">
                    <td></td>
                    <td></td>
					
                    <td>
                        <strong>
                            <?php 
                                echo ($itemCounter==1)?$itemCounter.' item':$itemCounter.' items'; ?>
                        </strong>
                    </td>
                    <td><strong>$<?php echo $totalCounter;?></strong></td>
                </tr> 
                </tr>
            </tbody> 
        </table>
</div>
</div>
                                </div>
                            </div>
                        </div>
</div>

                    @endsection