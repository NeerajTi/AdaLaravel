@extends('layouts.site-front-wosidebar')

@section('content')
<div class="row mx-3 my-5">

<div class="col-md-4 offset-md-4">
        <h5>{{ __('Reset Password') }}</h5>

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                        <label for="username">{{ __('E-Mail Address') }}</label>

                           
                                <input id="email" type="email" class="woocommerce-Input woocommerce-Input--text input-text @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
</p>

                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label for="password">{{ __('Password') }}</label>

                            
                                <input id="password" type="password" class="woocommerce-Input woocommerce-Input--text input-text @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
</p>

                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>

                          
                                <input id="password-confirm" type="password" class="woocommerce-Input woocommerce-Input--text input-text " name="password_confirmation" required autocomplete="new-password">
                          
</p>

<p class="form-row">
                                <button type="submit" class="btn btn-custom btn-block my-3 rounded-pill">
                                    {{ __('Reset Password') }}
                                </button>
</p>
                    </form>
               
    </div>
</div>
@endsection
