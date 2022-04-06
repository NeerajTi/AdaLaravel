@extends('layouts.admin-layout')
@section('breadcrumbs')

<li class="breadcrumb-item active" aria-current="page">Edit {{ $user->name }}</li>
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
                                Edit your profile

                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <form class="needs-validation" action="{{ route('admin.users.update',$user->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf 
                                    @method('PUT')  
                                    <div class="row g-2">
                                            <div class="mb-3 col-md-4">
                                                <label for="email" class="form-label">Name</label>
                                                <input type="text" name="name" value="{{ $user->name }}" required class="form-control" placeholder="Name">
                                            </div>
                                            <div class="mb-3 col-md-4">
                                                <label for="password" class="form-label">Username</label>
                                                <input type="text" name="username" value="{{ $user->username }}" required class="form-control" placeholder="Username">
                                            </div>
                                            <div class="mb-3 col-md-4">
                                                <label for="password" class="form-label">Email</label>
                                                <input type="email" name="email" readonly value="{{ $user->email }}" required class="form-control" placeholder="Email">
                                            </div>
                                        </div>
			
                                      
                                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
</div>

                    @endsection