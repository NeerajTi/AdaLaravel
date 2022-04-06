@extends('layouts.site-front-wosidebar')

@section('content')
<div class="row mx-3 my-5">

<div class="col-md-4 offset-md-4">

	<h5>{{ __('Login') }}</h5>

	<form class="woocommerce-form woocommerce-form-login login" action="{{ route('login') }}" method="post">
	@csrf
    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
        <label for="username">{{ __('E-Mail Address') }}&nbsp;<span class="required">*</span></label>
        <input id="email" type="text" class="woocommerce-Input woocommerce-Input--text input-text {{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}" name="uemail" value="{{ old('username') ?: old('email') }}" required autocomplete="login" autofocus />
		@if ($errors->has('username') || $errors->has('email'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
            </span>
        @endif
	</p>
    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
        <label for="password">{{ __('Password') }}&nbsp;<span class="required">*</span></label>
        <input id="password" type="password" class="woocommerce-Input woocommerce-Input--text input-text @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />
		@error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
	</p>

    <div class="anr_captcha_field">
        <div id="anr_captcha_field_1" class="anr_captcha_field_div"><input type="hidden" name="g-recaptcha-response" value="" /></div>
    </div>
    <p class="form-row">
        <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="b9074f69ac" /><input type="hidden" name="_wp_http_referer" value="/projects/exlibriswp/my-account/" />
        <label class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
           
			<input class="woocommerce-form__input woocommerce-form__input-checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
			<small>{{ __('Remember Me') }}</small>
		</label>

        <button type="submit" class="btn btn-custom btn-block my-3 rounded-pill" name="login" value="Log in">Log in</button>
    </p>
    <div class="woocommerce-LostPassword lost_password my-3"><i class="fas fa-key"></i> <a href="{{ route('password.request') }}">Lost your password?</a></div>
	<div class="woocommerce-LostPassword lost_password my-3"><i class="fas fa-key"></i> <a href="{{ route('register') }}">Create New Account</a></div>
</form>

	
</div>

</div>
@endsection