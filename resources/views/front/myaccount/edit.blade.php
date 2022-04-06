@extends('layouts.site-front-wosidebar')

@section('content')
<div class="wrapper">


@include('front.dash-menu')


<div id="page-content-wrapper">
  @section('myaccountbar')
  <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
  @endsection
@include('front.breadcrumb-dash')
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
<h4 class="mt-3">View/Edit Profile</h4>	

<div class="col-12 my-3"><div class="woocommerce-MyAccount-content"><div class="woocommerce-notices-wrapper"></div>



<div class="row">
		                <div class="col-12 col-sm-12">
		                    <form action="{{ route('users.update',$user->id) }}" method="post" >
                          @csrf
                          @method('PUT')
                              <div class="form-group row">
                                <div class="col-12 col-sm-4">
                                <label for="name">Name</label> 
                                  <input id="name" name="name" required placeholder="Name" value="{{ $user->name }}" class="form-control" type="text">
                                
                                </div>
                                <div class="col-12 col-sm-4">
                                <label for="name">Email</label> 
                                  <input id="email" name="email" placeholder="Email" readonly  required value="{{ $user->email }}" class="form-control" type="email">
                                
                                </div>
                                <div class="col-12 col-sm-4">
                                <label for="name">Phone</label> 
                                  <input id="phone" name="phone" placeholder="Phone"  value="{{ $user->phone }}" class="form-control" type="text">
                                
                                </div>
                              </div>
                             
                           
                              <div class="form-group row">
                              <div class="col-12 col-sm-4">
                                <label for="publicinfo">Address</label> 
                                
                                  <textarea id="address" name="address" cols="40" rows="4"  class="form-control">{{ $user->address }}</textarea>
                                </div>
                                <div class="col-12 col-sm-4">
                                <label for="publicinfo">Address 2</label> 
                                
                                  <textarea id="address" name="address2" cols="40" rows="4"  class="form-control">{{ $user->address2 }}</textarea>
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-12 col-sm-4">
                                <label for="country">Country</label>
                <select class="custom-select d-block w-100" name="country" id="country" >
                 
                  <option value="United States" >United States</option>
                </select>
                                </div>
                                <div class="col-12 col-sm-4">
                                <label for="name">State</label> 
                                  <input id="state" name="state" placeholder="State" value="{{ $user->state }}" class="form-control" type="text">
                                
                                </div>
                                <div class="col-12 col-sm-4">
                                <label for="name">Zip</label> 
                                  <input id="zip" name="zipcode" placeholder="ZipCode" value="{{ $user->zipcode }}" class="form-control" type="text">
                                
                                </div>
                              </div>
                           
                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                  <button type="submit" class="btn btn-primary">Update My Profile</button>
                                </div>
                              </div>
                            </form>
		                </div>
		            </div>

</div>
</div>
</div>
</div>
@endsection