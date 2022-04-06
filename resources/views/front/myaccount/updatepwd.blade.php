@extends('layouts.site-front-wosidebar')

@section('content')
<div class="wrapper">


@include('front.dash-menu')


<div id="page-content-wrapper">
  @section('myaccountbar')
  <li class="breadcrumb-item active" aria-current="page">Update Password</li>
  @endsection
@include('front.breadcrumb-dash')
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
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
<h4 class="mt-3">Update Password</h4>	

<div class="col-12 my-3"><div class="woocommerce-MyAccount-content"><div class="woocommerce-notices-wrapper"></div>



<div class="row">
		                <div class="col-12 col-sm-12">
		                <form class="needs-validation" action="{{ route('user.change.password') }}" method="post" enctype="multipart/form-data">
                                    @csrf 
                                     
                                    <div class="row g-2">
                                            <div class="mb-3 col-md-4">
                                                <label for="email" class="form-label">Current Password</label>
                                                <input id="password" type="password" required class="form-control" name="current_password" autocomplete="current-password">
                             </div>
                                            <div class="mb-3 col-md-4">
                                                <label for="password" class="form-label">New Password</label>
                                                <input id="new_password" type="password" class="form-control" name="new_password" required autocomplete="current-password">
                            </div>
                                            <div class="mb-3 col-md-4">
                                                <label for="password" class="form-label">New Confirm Password</label>
                                                <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">
                           </div>
                                        </div>
			
                                      
                                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Change Password</button>
                                    </form>
		                </div>
		            </div>

</div>
</div>
</div>
</div>
@endsection