@extends('layouts.admin-layout')
@section('breadcrumbs')
<li class="breadcrumb-item" aria-current="page"><a href="{{ route('admin.products.index') }}">Site Settings</a></li>
<li class="breadcrumb-item active" aria-current="page">Edit Settings</li>
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
<style>
    label {font-weight: bold;}
    </style>

                    <div class="row">
                    <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                Settings

                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <form class="needs-validation" action="{{ route('admin.settings.update',$setting->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf 
                                    @method('PUT')  
                                    <h6>Header Section</h6>
                                    <hr>
                                    <div class="row g-2">
                                            <div class="mb-3 col-md-6">
                                            <label for="email" class="form-label">Logo</label><br>
                                            <?php 
                                            if(!empty($setting->logo))
                                            {
                                            ?>
                                            <img src="{{ asset('images/') }}/<?php echo $setting->logo ?>"  style='width:104px;height:25px' />
                                            &nbsp;<a href="{{ url('admin/deletelogo/'.$setting->id) }}" onclick="return confirm('Are you sure want to delete this logo')">Delete</a>
                                            <br>
                                            
                                            <?php } ?>
                                                <label for="city" class="form-label">Image (104 X 25)</label>
                                                <input type="file" name="logo" class="form-control">
                                            </div>
                                         
                                         
                                        </div>
                                    <h6>Footer Section</h6>
                                    <hr>
                                    <div class="row g-2">
                                            <div class="mb-3 col-md-3">
                                                <label for="email" class="form-label">Menu Title</label>
                                                <input type="text" name="footermenu_title" value="{{ $setting->footermenu_title }}" required class="form-control">
                                            </div>
                                            <div class="mb-3 col-md-3">
                                                <label for="password" class="form-label">Connect Title</label>
                                                <input type="text" name="connect_title" value="{{ $setting->connect_title }}" required class="form-control">
                                            </div>
                                            <div class="mb-3 col-md-3">
                                                <label for="password" class="form-label">AboutUs Title</label>
                                                <input type="text" name="aboutus_title" value="{{ $setting->aboutus_title }}" required class="form-control">
                                            </div>
                                            <div class="mb-3 col-md-3">
                                                <label for="password" class="form-label">AboutUs Title</label>
                                                <input type="text" name="subscribe_title" value="{{ $setting->subscribe_title }}" required class="form-control">
                                            </div>
                                        </div>
										 <div class="mb-3">
                                            <label for="address" class="form-label">AboutUs Text</label>
                                            <textarea class="form-control" style="height:150px" name="aboutus_text" required  maxlength="600">{{ $setting->aboutus_text }}</textarea>
           
                                        </div>
                                        <div class="mb-3">
                                            <label for="address" class="form-label">Subscribe (Max 100 words)</label>
                                            <textarea class="form-control" style="height:100px" name="subscribe_text" required  maxlength="100">{{ $setting->subscribe_text }}</textarea>
           
                                        </div>
                                        <h6>Social Media</h6>
                                         <hr>
                                         <?php 
                                           $social=unserialize($setting->socialmedia);
                                           
                                           ?>
                                        <div class="row g-2">
                                       <div class="col-md-4">
                                           <label class="form-label">Facebook</label>
                                           <div class='row'>
                                           <div class='col-md-6'>

                                           <label class="form-label">Status</label><br>
                                           <?php $st1='';$st2='';
                                           if($social['facebook']['status']=='Active')
                                           $st1='checked';
                                           else
                                           $st2='checked';
                                           ?>
                                           <input type='radio' name='social[facebook][status]' value='Active' <?php echo $st1 ?> />Active
                                           &nbsp;
                                           <input type='radio' name='social[facebook][status]' value='Inactive' <?php echo $st2 ?>  />Inactive
                                           </div>
                                           <div class="col-md-6">
                                                <label for="email" class="form-label">Url</label>
                                                <input type="text" name="social[facebook][url]" value="{{ $social['facebook']['url'] }}" class="form-control">
                                            </div>
                                           </div>
                                       </div>
                                       <div class="col-md-4">
                                           <label class="form-label">Twitter</label>
                                           <div class='row'>
                                           <div class='col-md-6'>
 
                                           <?php $st1='';$st2='';
                                           if($social['twitter']['status']=='Active')
                                           $st1='checked';
                                           else
                                           $st2='checked';
                                           ?>
 
                                           <label class="form-label">Status</label><br>
                                           <input type='radio' name='social[twitter][status]' value='Active' <?php echo $st1 ?> />Active
                                           &nbsp;
                                           <input type='radio' name='social[twitter][status]' value='Inactive' <?php echo $st2 ?> />Inactive
                                           </div>
                                           <div class="col-md-6">
                                                <label for="email" class="form-label">Url</label>
                                                <input type="text" name="social[twitter][url]" value="{{ $social['twitter']['url'] }}" class="form-control">
                                            </div>
                                           </div>
                                       </div>
                                       <div class="col-md-4">
                                           <label class="form-label">Instagram</label>
                                           <div class='row'>
                                           <div class='col-md-6'>
                                           <?php $st1='';$st2='';
                                           if($social['instagram']['status']=='Active')
                                           $st1='checked';
                                           else
                                           $st2='checked';
                                           ?>
                                           <label class="form-label">Status</label><br>
                                           <input type='radio' name='social[instagram][status]' value='Active' <?php echo $st1 ?> />Active
                                           &nbsp;
                                           <input type='radio' name='social[instagram][status]' value='Inactive' <?php echo $st2 ?> />Inactive
                                           </div>
                                           <div class="col-md-6">
                                                <label for="email" class="form-label">Url</label>
                                                <input type="text" name="social[instagram][url]" value="{{ $social['instagram']['url'] }}" class="form-control">
                                            </div>
                                           </div>
                                       </div>
                                       <div class="col-md-4">
                                           <label class="form-label">Linkedin</label>
                                           <div class='row'>
                                           <div class='col-md-6'>
                                           <?php $st1='';$st2='';
                                           if($social['linkedin']['status']=='Active')
                                           $st1='checked';
                                           else
                                           $st2='checked';
                                           ?>
                                           <label class="form-label">Status</label><br>
                                           <input type='radio' name='social[linkedin][status]' value='Active' <?php echo $st1 ?> />Active
                                           &nbsp;
                                           <input type='radio' name='social[linkedin][status]' value='Inactive' <?php echo $st2 ?> />Inactive
                                           </div>
                                           <div class="col-md-6">
                                                <label for="email" class="form-label">Url</label>
                                                <input type="text" name="social[linkedin][url]" value="{{ $social['linkedin']['url'] }}" class="form-control">
                                            </div>
                                           </div>
                                       </div>
                                       <div class="col-md-4">
                                           <label class="form-label">Telegram</label>
                                           <div class='row'>
                                           <div class='col-md-6'>
                                           <?php $st1='';$st2='';
                                           if($social['telegram']['status']=='Active')
                                           $st1='checked';
                                           else
                                           $st2='checked';
                                           ?>
                                           <label class="form-label">Status</label><br>
                                           <input type='radio' name='social[telegram][status]' value='Active' <?php echo $st1 ?> />Active
                                           &nbsp;
                                           <input type='radio' name='social[telegram][status]' value='Inactive' <?php echo $st2 ?> />Inactive
                                           </div>
                                           <div class="col-md-6">
                                                <label for="email" class="form-label">Url</label>
                                                <input type="text" name="social[telegram][url]" value="{{ $social['telegram']['url'] }}" class="form-control">
                                            </div>
                                           </div>
                                       </div>
                                       <div class="col-md-4">
                                           <label class="form-label">Youtube</label>
                                           <div class='row'>
                                           <div class='col-md-6'>
                                           <?php $st1='';$st2='';
                                           if($social['youtube']['status']=='Active')
                                           $st1='checked';
                                           else
                                           $st2='checked';
                                           ?>
                                           <label class="form-label">Status</label><br>
                                           <input type='radio' name='social[youtube][status]' value='Active' <?php echo $st1 ?> />Active
                                           &nbsp;
                                           <input type='radio' name='social[youtube][status]' value='Inactive' <?php echo $st2 ?> />Inactive
                                           </div>
                                           <div class="col-md-6">
                                                <label for="email" class="form-label">Url</label>
                                                <input type="text" name="social[youtube][url]" value="{{ $social['youtube']['url'] }}" class="form-control">
                                            </div>
                                           </div>
                                       </div>
                                       <div class="col-md-4">
                                           
                                           <label class="form-label">Vimeo</label>
                                           <div class='row'>
                                           <div class='col-md-6'>
                                           <?php $st1='';$st2='';
                                           if($social['vimeo']['status']=='Active')
                                           $st1='checked';
                                           else
                                           $st2='checked';
                                           ?>
                                           <label class="form-label">Status</label><br>
                                           <input type='radio' name='social[vimeo][status]' value='Active' <?php echo $st1 ?> />Active
                                           &nbsp;
                                           <input type='radio' name='social[vimeo][status]' value='Inactive' <?php echo $st2 ?> />Inactive
                                           </div>
                                           <div class="col-md-6">
                                                <label for="email" class="form-label">Url</label>
                                                <input type="text" name="social[vimeo][url]" value="{{ $social['vimeo']['url'] }}" class="form-control">
                                            </div>
                                           </div>
                                       </div>
                                        </div>
                                      
                                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
</div>

                    @endsection