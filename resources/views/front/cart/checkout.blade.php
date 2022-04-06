@extends('layouts.site-front-wosidebar')

@section('content')
<div class="row m-3"> 
    
<div class="col-12 col-sm-10 mx-auto">
<h3>Checkout</h3>	
<hr class="mb-4">
@if ($message = Session::get('success_cart'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
   <div class='row'>
        <div class="col-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill">{{ count(session('cart')) }}</span>
          </h4>
          <ul class="list-group mb-3">
            <?php
                $total = 0;
                ?>
				
                @foreach(session('cart') as $id => $details)
                
                   <?php $total+=($details['price'] * $details['quantity']); ?>
                
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">{{ $details['name'] }}</h6>
                            <small class="text-muted">Quantity: <?php echo $details['quantity'] ?> X Price: <?php echo $details['price'] ?></small>
                        </div>
                        <span class="text-muted">${{ $details['price'] * $details['quantity'] }}</span>
                    </li>
            @endforeach
           
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong>$<?php echo number_format($total,2);?></strong>
            </li>
          </ul>
        </div>
        <div class="col-8 order-md-1">
          <h4 class="mb-3">Billing address</h4>
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
<?php $last_name='';
$name=explode(' ',$user['name']);
$first_name=$name[0];
if(isset($name[1]))
$last_name=$name[1];
?>
          <form class="needs-validation" action="{{ route('orders.store') }}" method="POST">
            @csrf
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name<font color=red>*</font></label>
                <input type="text" class="form-control" id="firstName" required name="first_name" placeholder="First Name" value="<?php echo $first_name ?>" >
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name<font color=red>*</font></label>
                <input type="text" class="form-control" id="lastName" required name="last_name" placeholder="Last Name" value="<?php echo $last_name ?>" >
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email<font color=red>*</font></label>
              <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" value="<?php echo $user['email'] ?>">
            </div>
           <div class="mb-3">
              <label for="email">Phone<font color=red>*</font></label>
              <input type="text" class="form-control" id="email" name="phone" value="<?php echo $user['phone'] ?>" >
            </div>
            <div class="mb-3">
              <label for="address">Address<font color=red>*</font></label>
              <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" value="<?php echo $user['address'] ?>">
            </div>

            <div class="mb-3">
              <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" name="address2" placeholder="Apartment or suite" value="">
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Country</label>
                <select class="custom-select d-block w-100" name="country" id="country" >
                  <option value="">Choose...</option>
                  <option value="United States" >United States</option>
                </select>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">State</label>
                <select class="custom-select d-block w-100" name="state" id="state" >
                  <option value="">Choose...</option>
                  <option value="California">California</option>
                </select>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" name="zipcode" placeholder="" value="<?php echo $user['zipcode'] ?>" >
              </div>
            </div>
            <hr class="mb-4">

            <!--<h4 class="mb-3">Payment</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio" style='display:inline-block'>
                <input id="cashOnDelivery" name="payment_type" type="radio" value='Cash on Delivery' class="custom-control-input" checked="" >
                <label class="custom-control-label" for="cashOnDelivery">Cash on Delivery</label>
              </div>
			   <div class="custom-control custom-radio" style='display:inline-block'>
                <input id="paypal" name="payment_type" type="radio" value='Paypal' class="custom-control-input" >
                <label class="custom-control-label" for="paypal">Checkout with <img src='img/paypal-logo.jpg' /></label>
              </div>
            </div>
           
            <hr class="mb-4">-->
            <button class="btn btn-custom btn-lg btn-block" type="submit" name="submit" value="submit">Place Order</button>
          </form>
        </div>
      </div>
	 
</div>

</div>
@endsection
