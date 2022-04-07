@extends('layouts.admin-layout')
@section('breadcrumbs')
<li class="breadcrumb-item" aria-current="page"><a href="{{ route('admin.pages.index') }}">Pages</a></li>
<li class="breadcrumb-item active" aria-current="page">Edit Product {{ $page->title }}</li>
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
                                {{ $page->title }}

                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <form class="needs-validation" action="{{ route('admin.pages.update',$page->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf 
                                    @method('PUT')  
                                    <div class="row g-2">
                                            <div class="mb-3 col-md-10">
                                                <label for="email" class="form-label">Title</label>
                                                <input type="text" name="title" value="{{ $page->title }}" required class="form-control" placeholder="Name">
                                            </div>
                                           
                                        </div>
										 
                                        <div class="mb-3">
                                            <label for="address" class="form-label">Description</label>
                                            <textarea class="form-control" style="height:150px" name="description" id='mytextarea' placeholder="Detail">
                                            {{ $page->description }}
                                        </textarea>
           
                                        </div>
                                      
                                      
                                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
</div>

                    @endsection