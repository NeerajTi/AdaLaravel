@extends('layouts.site-front-wosidebar')

@section('content')
<div class="row m-3"> 	

        <div class="col-md-4 offset-md-4">
            		<h5>{{ __('Register') }}</h5>	
						<!-- display logo for normal mode -->
			              			
            <form method="post" class="woocommerce-form woocommerce-form-register register" action="{{ route('register') }}"  >

					
            @csrf
						<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
							<label for="reg_username">{{ __('Name') }}&nbsp;<span class="required">*</span></label>
							<input type="text" class="woocommerce-Input woocommerce-Input--text input-text @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />						
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </p>

					
					<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
						<label for="reg_email">{{ __('E-Mail Address') }}&nbsp;<span class="required">*</span></label>
						<input type="email" id="email" class="woocommerce-Input woocommerce-Input--text input-text @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" />					
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </p>

					
						<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
							<label for="reg_password">{{ __('Password') }}&nbsp;<span class="required">*</span></label>
						
                                <input id="password" type="password" class="woocommerce-Input woocommerce-Input--text input-text @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                        </p>
                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
							<label for="reg_password">{{ __('Confirm Password') }}&nbsp;<span class="required">*</span></label>
							<input id="password-confirm" type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password_confirmation" required autocomplete="new-password" />
                           
                        </p>
					
					<div class="woocommerce-privacy-policy-text"><p>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="https://demo.ramsthemes.com/projects/exlibriswp/privacy-policy/" class="woocommerce-privacy-policy-link" target="_blank">privacy policy</a>.</p>
</div><div class="anr_captcha_field"><div id="anr_captcha_field_1" class="anr_captcha_field_div"><input type="hidden" name="g-recaptcha-response" value=""/></div></div>
					<p class="woocommerce-FormRow form-row">
						<input type="hidden" id="woocommerce-register-nonce" name="woocommerce-register-nonce" value="3226ef8f6d" /><input type="hidden" name="_wp_http_referer" value="/projects/exlibriswp/register/" />						<button type="submit" class="btn btn-custom btn-block rounded-pill my-3" name="register" value="Register">Register</button>
					</p>

					
			</form>				
			
        </div>

</div>
@endsection