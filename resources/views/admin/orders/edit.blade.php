@extends('layouts.admin-layout')
@section('breadcrumbs')
<li class="breadcrumb-item" aria-current="page"><a href="{{ route('admin.products.index') }}">Products</a></li>
<li class="breadcrumb-item active" aria-current="page">Edit Product {{ $product->name }}</li>
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
                                Add new Product

                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <form class="needs-validation" action="{{ route('admin.products.update',$product->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf 
                                    @method('PUT')  
                                    <div class="row g-2">
                                            <div class="mb-3 col-md-10">
                                                <label for="email" class="form-label">Title</label>
                                                <input type="text" name="name" value="{{ $product->name }}" required class="form-control" placeholder="Name">
                                            </div>
                                            <div class="mb-3 col-md-2">
                                                <label for="password" class="form-label">Price</label>
                                                <input type="text" name="price" value="{{ $product->price }}" required class="form-control" placeholder="Price">
                                            </div>
                                        </div>
										 <div class="mb-3">
                                            <label for="address" class="form-label">Short Description (Max 300 words)</label>
                                            <textarea class="form-control" style="height:150px" name="shortdesc" required  maxlength="300" placeholder="Short description">{{ $product->shortdesc }}</textarea>
           
                                        </div>
                                        <div class="mb-3">
                                            <label for="address" class="form-label">Description</label>
                                            <textarea class="form-control" style="height:150px" name="description" id='mytextarea' placeholder="Detail">
                                            {{ $product->detail }}
                                        </textarea>
           
                                        </div>
                                        <div class="row g-2">
                                            <div class="mb-3 col-md-6">
                                            <img src="{{ asset('images/products') }}/<?php echo $product->image ?>"  style='width:150px;height:100px' /><br>
                                                <label for="city" class="form-label">Image (768 X 1153)</label>
                                                <input type="file" name="image" class="form-control">
                                            </div>
                                         
                                         
                                        </div>
                                      
                                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update Product</button>
                                    </form>
                                </div>
                            </div>
                        </div>
</div>

                    @endsection