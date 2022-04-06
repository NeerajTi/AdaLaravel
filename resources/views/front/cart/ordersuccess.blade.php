@extends('layouts.site-front-wosidebar')

@section('content')
<div class="row m-3"> 
    
<div class="col-12 col-sm-10 mx-auto">
<h3>Order successfull</h3>
<hr class="mb-4">	
@if ($message = Session::get('success_order'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

</div>

</div>
@endsection
