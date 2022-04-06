@extends('layouts.admin-layout')
@section('breadcrumbs')
<li class="breadcrumb-item active" aria-current="page">Banners</li>
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
Banners
</div>
                             <div class='float-right'>

                             <a class="btn btn-success" href="{{ route('admin.banners.create') }}"> Add New</a>
                             </div>
<div class='float-none'></div>
                            </div>
                                <div class="card-body">
                                    <p class="card-title"></p>
                                    <div class="table-responsive">
                                        <form action="{{ route('admin.banners.multiaction') }}" method='post' name='subsControlForm'>
                                            @csrf
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>X</th>
                                                    <th></th>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <th>Image</th>
                                                    <th>Added on</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                            @if(!empty($data) && $data->count())
                                               
                                                
                                                @foreach ($data as $k=>$banner)
                                                
                                                
                                                <tr>
                                                    <th scope="row"><?php echo ($k+1) ?></th>
                                                    <td><input type='checkbox' name='uids[]' value="{{$banner->id}}" /></td>
                                                    <td>{{$banner->title}}</td>
                                                    <td>{{$banner->detail}}</td>
                                                    <td><img src="{{ asset('images/banners') }}/<?php echo $banner->image ?>"  style='width:150px;height:100px' /></td>
                                                    <td>{{ date('m/d/Y h:ia',strtotime($banner->created_at)) }}</td>
                                                    <td>

                                                    <a class="btn btn-primary" href="{{ route('admin.banners.edit',$banner->id) }}">Edit</a>
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
                <td colspan="6">There are no banners added.</td>
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