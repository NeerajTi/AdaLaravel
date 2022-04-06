@extends('layouts.admin-layout')
@section('breadcrumbs')

<li class="breadcrumb-item active" aria-current="page">Change Password</li>
@endsection
@section('content')
<div class="page-title">
                        <h3></h3>
                    </div>
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

                    <div class="row">
                    <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                               Change Password

                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <form class="needs-validation" action="{{ route('admin.change.password') }}" method="post" enctype="multipart/form-data">
                                    @csrf 
                                     
                                    <div class="row g-2">
                                            <div class="mb-3 col-md-4">
                                                <label for="email" class="form-label">Current Password</label>
                                                <input id="password" type="password" required class="form-control" name="current_password" autocomplete="current-password">
                             </div>
                                            <div class="mb-3 col-md-4">
                                                <label for="password" class="form-label">New Password</label>
                                                <input id="new_password" type="password" class="form-control" name="new_password" required autocomplete="current-password">
                            </div>
                                            <div class="mb-3 col-md-4">
                                                <label for="password" class="form-label">New Confirm Password</label>
                                                <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">
                           </div>
                                        </div>
			
                                      
                                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Change Password</button>
                                    </form>
                                </div>
                            </div>
                        </div>
</div>

                    @endsection