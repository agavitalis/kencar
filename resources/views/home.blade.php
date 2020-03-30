<!doctype html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel=stylesheet href={{asset('css/jquery-ui.css')}} type=text/css media=all />
        <link rel=stylesheet href={{asset('css/home.css')}} type=text/css media=all />

        <title>Renty - Car Rental</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> --}}

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }


        </style>
    </head>
    <body class="left-slider two-column">
    <div id=container>
        <div id=branding>
            <div id=branding-content>
                <div class=title-content> <a href="" title> <img class=site-logo src={{asset('images/thumb.png')}}
                            alt />
                        <h1 class=site-title>Kencars </h1>
                    </a> </div>
                <div class=access-content> <label for=menu-icon class=menu-icon><img src={{asset('images/menu.png')}}
                            alt=menu /></label> <input type=checkbox id=menu-icon value=1 />
                    <ul>
                        <li class=menu-close> <span>&#10006;</span> </li>
                        <li class="current_page_item menu-item-has-children"> <a href="home" title>Home</a>
                        </li>
                        <li><a href="about" title>About</a></li>
                        <li><a href="faq" title>FAQ</a></li>
                    </ul>
                </div>
                @if (Route::has('login'))
                <div class=member>
                @auth
                <a href="{{ url('/member') }}" style="font-family:'Courier New', Courier, monospace;">Go to Dashboard</a>
                @else
                <span class=sign_in><a class="sign_button" href="{{ route('login')}} " title>Sign
                            in</a></span> 
                            
                <span class=register><a class="sign_button" href="{{ route('register')}}"
                title>Register</a></span> 
                @endauth            
                </div>
                @endif
            </div>
            <div class=clear></div>
        </div>
        <div id=slider>
            <div id=slider-img>
                <ul class=slides>
                    <li><img src={{asset('images/slider1.jpg')}} alt /></li>
                    <li><img src={{asset('images/slider3.jpg')}} alt /></li>
                    <li><img src={{asset('images/slider2.jpg')}} alt /></li>
                    <div id=slider-pattern></div>
                </ul>
            </div>
            <div id=slider-content>
                <div id=slider-post>
                    <div class=post>
                        <div class=entry-header>
                            <h3 class=entry-format>Great car hire deals.</h3>
                        </div>
                        <div class=entry-content>Phasellus eget ultricies libero. Sed dolor turpis, malesuada vitae
                            cursus a, auctor semper neque.</div>
                    </div>
                    <div id=slider-front-img> <img src={{ asset('images/slider_front_img.png') }} alt /> </div>
                </div>
            <form id=slider-form class=main-form method="post" action="{{route('home')}}" >
                @csrf
                    <div class=main_form_navigation>
                        <div id=book_car class="title-form current"><a href=# title>Book a Car</a></div>
                    </div>
                    <div id=book_car_content class=content-form>
                        <div class=location-block>
                            <div class="form-block location">Location</div>
                            <div class="form-block airport_codes"></div> <input
                                class=location type=text value placeholder="Enter your location"
                                name="location" />
                        </div>
                        <div class="form-block pick-up">
                            <h4>Desired Date</h4> <input class=datepicker type=date value name="date_from" /> 
                            <div class=clear></div>
                        </div>
                        <div class="form-block drop-off">
                            <h4>Choose time range </h4> <input class=time-select type=time size=5 value name="time_from" /> <input
                                class=time-select type=time size=5 value name="time_to" />
                            <div class=clear></div>
                        </div>
                        <div class="form-block car-type">
                            <h4>Car type</h4>
                            <div class=car-type-select> <select class=select name="select_cartype">

                                <?php foreach ($categories as $category) { ?>
                            <option value="<?= $category->id ?>"><?= $category->title ?></option>
                                <?php } ?>
                                
                                </select> </div>
                        </div>
                        <div class="form-block form-submit form-continue"> <input class="orange_button form-continue" name="makeRequest"
                                type=submit value="Continue" /> </div>
                        <div class=clear></div>
                    </div>
                    <div class=clear></div>
                </form>
                <div class=clear></div>
            </div>
        </div>
        <div id=main>
            <div id=primary>
                <div id=content>
                    <div class=post>
                        <div class=entry-header>
                            <h3 class=entry-format>We are leading car rental agency with 300,000 Happy Customers.</h3>
                        </div>
                        <div class=entry-content> Morbi orci ante, consectetur id vestibulum quis, suscipit eu eros.
                            Duis non egestas dolor. Duis non volutpat leo. Aliquam nisi eros, accumsan non gravida
                            vitae, ultrices eu eros. Phasellus sagittis mattis tristique. </div>
                        <div class=entry-meta><a href=# title>Learn more</a></div>
                    </div>
                </div>
                <aside id=secondary>
                    <div class=first-column>
                        <div class=feature-single> <img class=feature-title-img src={{asset('images/1-icon.png')}} alt />
                            <div class=feature-title>Special low rates on car booking</div>
                            <div>Nunc ut nibh enim, id dapibus quam. Mauris id est at diam rutrum ultricies. Vivamus et
                                dolor velit. Nam congue blandit nulla sed tincidunt.</div>
                        </div>
                        <div class=feature-single> <img class=feature-title-img src={{asset('images/2-icon.png')}} alt />
                            <div class=feature-title>Dedicated customer support</div>
                            <div>Praesent tempus egestas blandit. Nunc euismod volutpat ultrices. Nam fermentum nibh
                                eget mi vehicula dictum.</div>
                        </div>
                    </div>
                    <div class=second-column>
                        <div class=feature-single> <img class=feature-title-img src={{asset('images/3-icon.png')}} alt />
                            <div class=feature-title>Manage your booking online</div>
                            <div>Aliquam erat volutpat. Pellentesque habitant morbi tristique senectus et netus et
                                malesuada fames ac turpis egestas.</div>
                        </div>
                        <div class=feature-single> <img class=feature-title-img src={{asset('images/4-icon.png')}} alt />
                            <div class=feature-title>You are guaranteed a car and driver</div>
                            <div>Donec vitae orci metus, et viverra ipsum. Curabitur tristique tristique lacinia. Sed
                                sagittis placerat vestibulum.</div>
                        </div>
                    </div>
                </aside>
                <div class=clear></div>
            </div>
        </div>
        <div class=clear></div>
        <footer id=footer>
            <div id=footer-menu>
                <div class=footer-content>
                    <div class=footer-navbar>
                        <div class=footer-nav>
                            <h3 class=widget-title>Kencars</h3>
                            <ul>
                                <li><a href=01-home-v1.html title>Home</a></li>
                                <li><a href=# title>Privacy</a></li>
                            </ul>
                        </div>
                        <div class=footer-nav>
                            <h3 class=widget-title>About</h3>
                            <ul>
                                <li><a href=# title>Terms of Use</a></li>
                            </ul>
                        </div>
                        <div class=footer-nav>
                            <h3 class=widget-title>Support</h3>
                            <ul>
                                <li><a href=# title>Contact Us</a></li>
                                <li><a href=10-faq.html title>FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="custom-info footer-widget-single">
                        <div class=support> <img src={{asset('images/support-icon.png')}} alt />
                            <div>
                                <div class=title>Online support</div>
                                <div class=phone>800 KOHIMA</div>
                                <div class=email><a href=# title><span class="__cf_email__"
                                            data-cfemail="61121411110e13152103041215160403120e07154f1b040f0504120a4f020e0c">[email&#160;protected]</span></a>
                                </div>
                                <div class=clear></div>
                            </div>
                            <div class=clear></div>
                        </div>
                        <div class=social-plugins>
                            <div class=fcbk_like> <iframe
                                    src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.bestwebsoft.com&amp;locale=en_US&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=true&amp;font&amp;colorscheme=light&amp;action=like&amp;height=21"
                                    style=border-width:0;border:0;overflow:hidden;width:110px;height:21px;background-color:transparent></iframe>
                            </div>
                            <div class=twitter_like> <a href=https://twitter.com/share
                                    class=twitter-share-button>Tweet</a>
                                <script data-cfasync="false"
                                    src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                                <script
                                    type=text/javascript>!function(f,a,g){var e,b=f.getElementsByTagName(a)[0],c=/^http:/.test(f.location)?"http":"https";if(!f.getElementById(g)){e=f.createElement(a);e.id=g;e.src=c+"://platform.twitter.com/widgets.js";b.parentNode.insertBefore(e,b)}}(document,"script","twitter-wjs");</script>
                            </div>
                            <div class=google_plus_one>
                                <div class=g-plusone data-size=medium></div>
                                <script
                                    type=text/javascript>(function(){var a=document.createElement("script");a.type="text/javascript";a.async=true;a.src="https://apis.google.com/js/plusone.js";var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b)})();</script>
                            </div>
                        </div>
                    </div>
                    <div class=clear></div>
                </div>
            </div>
            <div id=footer-content> <img class=site-logo src={{asset('images/thumb.png')}} alt />
                <h1 class=site-title>Kencars</h1>
                <div class=company-name>Kencars Rental company &copy 2020</div>
            </div>
        </footer>
    </div>
    <div id=overlay_block></div>
    <div class="admin-form-content sign_register_block">
        <div class=admin-form-block>
            <form class="main-form admin-form" method="POST" action={{ route('processing') }} >
                @csrf
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
    <div class="admin-form-content forgot_passwd_block">
        <div class=admin-form-block>
            <form class="main-form admin-form" action=#>
                @csrf
                <div class=main_form_navigation>
                    <div id=tab_forgot_passwd class="title-form current">Forgot Password?</div>
                </div>
                <div id=tab_forgot_passwd_content class=content-form> <input id=forgot_pass_email
                        class=input_placeholder type=email value placeholder="Email address" name="forgot_pass_email" />
                    <div id=forgot_pass_text> We will send you the password in few minutes.</div> <input
                        class="admin-form-submit orange_button" type=submit value="Continue" />
                    <div class=admin_form_link> <span class=sign_in><a class=tab_link_button href=#sign_in title>Sign
                                In</a></span> </div>
                </div>
                <div class=clear></div>
            </form>
        </div>
    </div>

    <script type=text/javascript src={{asset('js/jquery-1.11.3.min.js')}}></script>
    <script type=text/javascript src={{asset('js/jquery-migrate-1.2.1.min.js')}}></script>
    <script type=text/javascript src={{asset('js/jquery-ui.js')}}></script>
    <!--[if IE]> <script type=text/javascript src=js/placeholder_ie.js></script> <![endif]-->
    <script type=text/javascript src={{asset('js/custom-form-elements.js')}}></script>
    <script type=text/javascript src={{asset('js/jquery.meio.mask.js')}}></script>
    <script type=text/javascript src={{asset('js/jquery.selectbox-0.2.min.js')}}></script>
    <script type=text/javascript src={{asset('js/jquery.blueberry.js')}}></script>
    <script type=text/javascript src={{asset('js/script.js')}}></script>
</body>

</html>
