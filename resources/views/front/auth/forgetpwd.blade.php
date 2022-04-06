@extends('layouts.site-front-wosidebar')

@section('content')
<div class="row mx-3 my-5">

<div class="col-md-4 offset-md-4">

<form method="post" class="woocommerce-ResetPassword lost_reset_password">

	<p>Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.</p>
	<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
		<label for="user_login">Username or email</label>
		<input class="woocommerce-Input woocommerce-Input--text input-text border-more-rounded" type="text" name="user_login" id="user_login" autocomplete="username" />
	</p>

	<div class="clear"></div>

	<div class="anr_captcha_field"><div id="anr_captcha_field_1" class="anr_captcha_field_div"><input type="hidden" name="g-recaptcha-response" value=""/></div></div>
	<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
		<input type="hidden" name="wc_reset_password" value="true" />
		<button type="submit" class="btn btn-custom btn-block my-3 rounded-pill" value="Reset password">Reset password</button>
	</p>

	<input type="hidden" id="woocommerce-lost-password-nonce" name="woocommerce-lost-password-nonce" value="11dfe7ed64" /><input type="hidden" name="_wp_http_referer" value="/projects/exlibriswp/my-account/lost-password/" />
</form>

</div>

</div>
@endsection