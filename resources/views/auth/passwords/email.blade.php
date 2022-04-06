@extends('layouts.site-front-wosidebar')

@section('content')
<div class="row mx-3 my-5">

<div class="col-md-4 offset-md-4">
        <h5>{{ __('Reset Password') }}</h5>

                
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label for="email">{{ __('E-Mail Address') }}</label>

                           
                                <input id="email" type="email" class="woocommerce-Input woocommerce-Input--text input-text @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          
</p>

<p class="form-row">
                            
                                <button type="submit" class="btn btn-custom btn-block my-3 rounded-pill">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                           
</p>
                    </form>
              
    </div>
</div>
@endsection
