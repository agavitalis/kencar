@section('login_content')
<div class="admin-form-content sign_register_block">
    <div class=admin-form-block>
        <form class="main-form admin-form" method="POST" action={{ route('processing') }} >
            <div class=main_form_navigation>
                <div id=tab_register class="title-form back"><span class=register><a href=#register
                            title>Register</a></span></div>
                <div id=tab_sign_in class="title-form current"><span class=sign_in><a href=#sign_in title>Sign
                            In</a></span></div>
            </div>
            <div id=tab_sign_in_content class=content-form>
                <div> <input id=sign_in_email class=input_placeholder type=email value placeholder="Email address"
                        name="sign_in_email" /> </div>
                <div> <input id=sign_in_pass type=password value name="sign_in_pass" /> </div>
                <div> <input id=remember_me_checkbox type=checkbox class=styled name=remember_me value="1" /> <label
                        for=remember_me_checkbox> Remember me next time</label> </div> <input
                    class="admin-form-submit orange_button" type=submit name="signin" value="Continue" />
                <div class=admin_form_link> <span class=forgot_passwd><a class=tab_link_button href=#forgot_passwd
                            title>Forgot password?</a></span> </div>
            </div>
            <div id=tab_register_content class="content-form hidden">
                <div> <input id=register_email class=input_placeholder type=email value placeholder="Email address"
                        name="register_email" /> </div>
                <div> <input id=register_name type=text value name="register_name" /> </div>
                <div> <input id=register_remember_me_checkbox type=checkbox class=styled name=remember_me
                        value="1" /> <label for=register_remember_me_checkbox> Remember me next time</label> </div>
                <input class="admin-form-submit orange_button" type=submit name="register" value="Continue" />
                <div class=admin_form_link> <span class=sign_in><a class=tab_link_button href=#sign_in title>Already
                            registered?</a></span> </div>
            </div>
            <div class=clear></div>
        </form>
</div>
@endsection
