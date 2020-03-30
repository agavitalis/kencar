@section('content')

                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
@endsection
<div class=main_form_navigation>
    <div id=tab_register class="title-form back"><span class=register><a href=#register
                title>Register</a></span></div>
    <div id=tab_sign_in class="title-form current"><span class=sign_in><a href=#sign_in title>Sign
                In</a></span></div>
</div>
<form class="main-form admin-form" method="POST" action={{ route('register') }} aria-label="{{ __('Register') }}">
    @csrf

    
    <div id=tab_sign_in_content class=content-form>
        <div> <input id=sign_in_email class=input_placeholder type=email value placeholder="Email address"
                name="sign_in_email" /> </div>
        <div> <input id=sign_in_pass type=password value name="sign_in_pass" /> </div>
        <div> <input id=remember_me_checkbox type=checkbox class=styled name=remember_me value="1" /> <label
                for=remember_me_checkbox> Remember me next time</label> </div> <input
            class="admin-form-submit orange_button" type=submit value="Continue" />
        <div class=admin_form_link> <span class=forgot_passwd><a class=tab_link_button href=#forgot_passwd
                    title>Forgot password?</a></span> </div>
    </div>
    <div id=tab_register_content class="content-form hidden">
        <div> <input id=register_email class=input_placeholder type=email value placeholder="Email address"
                name="register_email" /> </div>
        <div> <input id=register_name type=text value name="register_name" /> </div>
        <div> <input id=register_remember_me_checkbox type=checkbox class=styled name=remember_me
                value="1" /> <label for=register_remember_me_checkbox> Remember me next time</label> </div>
        <input class="admin-form-submit orange_button" type=submit value="Continue" />
        <div class=admin_form_link> <span class=sign_in><a class=tab_link_button href=#sign_in title>Already
                    registered?</a></span> </div>
    </div>
    <div class=clear></div>
</form>
