@extends('layouts.admin-layout')
@section('breadcrumbs')
<li class="breadcrumb-item active" aria-current="page">Site Settings</li>
@endsection
@section('content')
<div class="page-title">
                        
                    </div>
                    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    @if ($message = Session::get('error-user'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif
    
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="card">
                            <div class="card-header">
                            <div class='float-left'>
Site Settings
</div>
                             <div class='float-right'>

                             <a class="btn btn-success" href="{{ route('admin.products.create') }}"> Create New Product</a>
                             </div>
<div class='float-none'></div>
                            </div>
                                <div class="card-body">
                                    <p class="card-title"></p>
                                    <div class="table-responsive">
                                        <form action="{{ route('admin.products.multiaction') }}" method='post' name='subsControlForm'>
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

                                                    <a class="btn btn-primary" href="{{ route('admin.products.edit',$product->id) }}">Edit</a>
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
                <td colspan="6">There are no proudcts.</td>
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
                    @endsection