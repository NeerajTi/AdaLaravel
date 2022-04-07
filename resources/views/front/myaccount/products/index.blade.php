@extends('layouts.site-front-wosidebar')

@section('content')
<div class="wrapper">


@include('front.dash-menu')


<div id="page-content-wrapper">
  @section('myaccountbar')
  <li class="breadcrumb-item active" aria-current="page">View Products</li>
  @endsection
@include('front.breadcrumb-dash')
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class='float-right'>

<a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
</div>
<div style="clear: right;"></div>	

<div class="col-12 my-3"><div class="woocommerce-MyAccount-content"><div class="woocommerce-notices-wrapper"></div>



<div class="row">
                        <div class="col-md-12 col-lg-12">
                        <div class="table-responsive">
                                        <form action="{{ route('products.multiaction.front') }}" method='post' name='subsControlForm'>
                                            @csrf
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>X</th>
                                                    <th></th>
                                                    <th>Title</th>
                                                    <th>Price</th>
                                                    <th>Image</th>
                                                    <th>Created</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                            @if(!empty($data) && $data->count())
                                               
                                                
                                                @foreach ($data as $k=>$product)
                                                
                                                
                                                <tr>
                                                    <th scope="row"><?php echo ($k+1) ?></th>
                                                    <td><input type='checkbox' name='uids[]' value="{{$product->id}}" /></td>
                                                    <td>{{ $product->name }}</td>
                                                    <td>{{ $product->price }}</td>
                                                    <td><img src="{{ asset('images/products') }}/<?php echo $product->image ?>"  style='width:150px;height:100px' /></td>
                                                    <td>{{ date('m/d/Y h:ia',strtotime($product->created_at)) }}</td>
                                                    <td>

                                                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                <tr><td colspan="6">
                                                <input type='button' value='Select All' class="btn btn-primary"   onclick="selectAll()" />
      <input type='button' value='Select None' class="btn btn-primary"    onclick="selectNone()" />
      <input type='submit' name="Submit_delete" value='Delete Selected' class="btn btn-primary" onclick="return confirmDelete()" />

                                                </td>
                                            
                                            </tr>
                                                @else
            <tr>
                <td colspan="6">There are no products.</td>
            </tr>
        @endif
        
                                            </tbody>
                                        </table>
</form>
                                    </div>
                                    {!! $data->appends(Request::all())->links() !!}
                        </div>
</div>

</div>
</div>
</div>
</div>
@endsection