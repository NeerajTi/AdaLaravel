@extends('layouts.site-front-wosidebar')

@section('content')
<div class="wrapper">


@include('front.dash-menu')


<div id="page-content-wrapper">
  @section('myaccountbar')
  <li class="breadcrumb-item" aria-current="page"><a href="{{ route('products.index') }}">Products</a></li>
  <li class="breadcrumb-item active" aria-current="page">Add Product</li>
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

<div class="col-12 my-3"><div class="woocommerce-MyAccount-content"><div class="woocommerce-notices-wrapper"></div>



<div class="row">
                        <div class="col-md-12 col-lg-12">
                        <form class="needs-validation" action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf   
                                    <div class="row g-2">
                                            <div class="mb-3 col-md-10">
                                                <label for="email" class="form-label">Title</label>
                                                <input type="text" name="name" required class="form-control" placeholder="Name">
                                            </div>
                                            <div class="mb-3 col-md-2">
                                                <label for="password" class="form-label">Price</label>
                                                <input type="text" name="price" required class="form-control" placeholder="Price">
                                            </div>
                                        </div>
										 <div class="mb-3">
                                            <label for="address" class="form-label">Short Description (Max 300 words)</label>
                                            <textarea class="form-control" style="height:150px" name="shortdesc" required  maxlength="300"  placeholder="Short description"></textarea>
           
                                        </div>
                                        <div class="mb-3">
                                            <label for="address" class="form-label">Description</label>
                                            <textarea class="form-control" style="height:150px" name="description" id='mytextarea' placeholder="Detail"></textarea>
           
                                        </div>
                                        <div class="row g-2">
                                            <div class="mb-3 col-md-6">
                                                <label for="city" class="form-label">Image (768 X 1153)</label>
                                                <input type="file" name="image" class="form-control" required>
                                            </div>
                                         
                                         
                                        </div>
                                      
                                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Add Product</button>
                                    </form>
                        </div>
</div>

</div>
</div>
</div>
</div>
@endsection