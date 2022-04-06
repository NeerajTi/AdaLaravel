@extends('layouts.admin-layout')
@section('breadcrumbs')
<li class="breadcrumb-item" aria-current="page"><a href="{{ route('admin.banners.index') }}">Banners</a></li>
<li class="breadcrumb-item active" aria-current="page">Edit</li>
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
                               Edit

                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <form class="needs-validation" action="{{ route('admin.banners.update',$banner->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf 
                                    @method('PUT')  
                                    <div class="row g-2">
                                            <div class="mb-3 col-md-4">
                                                <label for="email" class="form-label">Title</label>
                                                <input type="text" name="title" value="{{ $banner->title }}" class="form-control" placeholder="Title">
                                            </div>
                                            <div class="mb-3 col-md-8">
                                                <label for="password" class="form-label">Content</label>
                                                <input type="text" name="detail" value="{{ $banner->detail }}" class="form-control" placeholder="Content">
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="mb-3 col-md-6">
                                            <img src="{{ asset('images/banners') }}/<?php echo $banner->image ?>"  style='width:150px;height:100px' /><br>
                                                <label for="city" class="form-label">Image (1170 X 658)</label>
                                                <input type="file" name="image" class="form-control">
                                            </div>
                                         
                                         
                                        </div>
                                      
                                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
</div>

                    @endsection