@extends('layouts.admin-layout')
@section('breadcrumbs')
<li class="breadcrumb-item" aria-current="page"><a href="{{ route('admin.banners.index') }}">Banner</a></li>
<li class="breadcrumb-item active" aria-current="page">Add Banner</li>
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
                                Add new Banner

                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <form class="needs-validation" action="{{ route('admin.banners.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf   
                                    <div class="row g-2">
                                            <div class="mb-3 col-md-4">
                                                <label for="email" class="form-label">Title</label>
                                                <input type="text" name="title" class="form-control" placeholder="Title">
                                            </div>
                                            <div class="mb-3 col-md-8">
                                                <label for="password" class="form-label">Content</label>
                                                <input type="text" name="detail" class="form-control" placeholder="Content">
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="mb-3 col-md-6">
                                                <label for="city" class="form-label">Image (1170 X 658)</label>
                                                <input type="file" name="image" required class="form-control" required>
                                            </div>
                                         
                                         
                                        </div>
                                      
                                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Add Banner</button>
                                    </form>
                                </div>
                            </div>
                        </div>
</div>

                    @endsection