@extends('layouts.site-front-wosidebar')

@section('content')
<div class="wrapper">


@include('front.dash-menu')


<div id="page-content-wrapper"><h2 class="m-3">My account</h2>
		
<div class="col-12 my-3"><div class="woocommerce-MyAccount-content"><div class="woocommerce-notices-wrapper"></div>
<h4 class="woocommerce-titles mb-4">Welcome</h4>


<div class="row">

	<div class="col-12 col-md-4 col-xl-3 mb-3">
		
		<div class="user-container">
  <img alt='' src='https://secure.gravatar.com/avatar/042e45bfdfcf834fbe29ec7ec55132e9?s=96&#038;d=retro&#038;r=g' srcset='https://secure.gravatar.com/avatar/042e45bfdfcf834fbe29ec7ec55132e9?s=96&#038;d=retro&#038;r=g 2x' class='avatar avatar-96wp-user-avatar wp-user-avatar-exlibriswp-img-square-profile photo' height='96' width='96' loading='lazy'/>  
  <div class="middle">
    <div class="user-container-text"><a href="#" data-toggle="modal" data-target="#AvatarModal"><i class="fas fa-image fa-3x"></i></a></div>
  </div>
</div>

<!-- Modal window -->
<div class="modal fade" id="AvatarModal" tabindex="-1" role="dialog" aria-labelledby="AvatarModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Change Profile picture</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		
		        <form id="wpua-edit-115" class="wpua-edit" action="" method="post" enctype="multipart/form-data">
                  <div class="wpua-edit-container">
      <h3>Profile Picture</h3>    <div class="my-4">        <input type="hidden" name="wp-user-avatar" id="wp-user-avatar-existing" value=""/>
        <input type="hidden" name="wp-user-avatar-is-dirty" id="wp-user-avatar-is-dirty" value="false"/>
                <p id="wpua-upload-button-existing">
            <input name="wpua-file" id="wpua-file-existing" type="file"/>
            <button type="submit" class="button" id="wpua-upload-existing" name="submit" value="Upload">Upload</button>
        </p>
        <p id="wpua-upload-messages-existing">
            <span id="wpua-max-upload-existing" class="description">Maximum upload file size: 20480KB.</span>
            <span id="wpua-allowed-files-existing" class="description">Allowed Files: <code>jpg jpeg png gif</code></span>
        </p>
            <div id="wpua-images-existing" class="">
            <p id="wpua-preview-existing">
                <img src="https://secure.gravatar.com/avatar/042e45bfdfcf834fbe29ec7ec55132e9?s=96&#038;d=retro&#038;r=g" alt=""/>
                <span class="description">Original Size</span>
            </p>
            <p id="wpua-thumbnail-existing">
                <img src="https://secure.gravatar.com/avatar/042e45bfdfcf834fbe29ec7ec55132e9?s=96&#038;d=retro&#038;r=g" alt=""/>
                <span class="description">Thumbnail</span>
            </p>
            <p id="wpua-remove-button-existing" class="wpua-hide">
                <button type="button" class="button" id="wpua-remove-existing" name="wpua-remove">Remove Image</button>
            </p>
            <p id="wpua-undo-button-existing">
                <button type="button" class="button" id="wpua-undo-existing" name="wpua-undo">Undo</button>
            </p>
        </div>
              </div>
    </div>                    <input type="hidden" name="wpua_action" value="update"/>
            <input type="hidden" name="user_id" id="user_id" value="115"/>
            <input type="hidden" id="_wpnonce" name="_wpnonce" value="472b3f2156" /><input type="hidden" name="_wp_http_referer" value="/projects/exlibriswp/my-account/" />            <p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Update Profile"  /></p>        </form>
        		
      </div>
    </div>
  </div>
</div>
	</div>

	<div class="col-12 col-md-8 col-xl-9">

	<h5>Hello {{ Auth::user()->name }}<strong></strong></h5>

	<p>From your account dashboard you can view your <a href="#;/projects/exlibriswp/my-account/orders/">recent orders</a>, manage your <a href="#;/projects/exlibriswp/my-account/edit-address/">shipping and billing addresses</a>, and <a href="#;/projects/exlibriswp/my-account/edit-account/">edit your password and account details</a>.</p>

	</div>

</div>

</div>
</div>
</div>
</div>
@endsection