<!DOCTYPE html>
<html lang=en-US>

<head>
    <title>Renty - Choose Car</title>
    <link rel="shortcut icon" type=image/x-icon href=images/favicon.ico />
    <meta http-equiv=content-type content="text/html; charset=UTF-8" />
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link rel=stylesheet href=css/jquery-ui.css type=text/css media=all />
    <link rel=stylesheet href={{ asset('css/home.css')}} type=text/css media=all />
    <link rel=stylesheet href=css/jquery.slider.min.css />
    <!--[if IE]> <script type=text/javascript src=js/html5.js></script> <link rel=stylesheet id=stylesheet-ie href=css/css_ie.css type=text/css media=all /> <![endif]-->
</head>

<body class="page page-two-column">
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
        <div id=progress-bar>
            <div id=progress-bar-steps>
                <div class="progress-bar-step done">
                    <div class=step_number>1</div>
                    <div class=step_name>Create request</div>
                    <div class=clear></div>
                </div>
                <div class="progress-bar-step current">
                    <div class=step_number>2</div>
                    <div class=step_name>Choose a car</div>
                    <div class=clear></div>
                </div>
                <div class=progress-bar-step>
                    <div class=step_number>3</div>
                    <div class=step_name>Review &amp; Book</div>
                    <div class=clear></div>
                </div>
            </div>
            <div class=clear></div>
        </div>
        <div id=main>
            <form id=slider-form method="post" action="{{route('choose')}}" class=main-form>
                @csrf
                <div id=book_car_content class=content-form>
                    <div class=location-block>

                        <div class="form-block location">Location</div>
                        <div class="form-block airport_codes"></div> 
                        <input class=location type=text value="{{$data['location']}}" placeholder="Enter your location"
                            name="location" /> 
                        <div class="location-block return_location">
                            <div class="form-block location">Return location</div> <input class=location type=text value="{{$data['location']}}"
                                placeholder="Enter airport, city or zip code" name="return_location" />
                        </div>

                    </div>
                    <div class="form-block pick-datetime">
                        <div class="form-block pick-up">
                            <h4>Desired date </h4> <input class=datepicker type=date value="{{$data['date_from']}}" name="date_from" /> 
                            <div class=clear></div>
                        </div>
                        <div class="form-block drop-off">
                            <h4>Choose a time range</h4> <input class=time-select type=time size=5 value="{{$data['time_from']}}" name="time_from" /> <input
                                class=time-select type=time size=5 value="{{$data['time_to']}}" name="time_to" />
                            <div class=clear></div>
                        </div>
                    </div>
                    <div class="form-block car-type">
                        <h4>Car type</h4>
                    <div class=car-type-select> <select class=select name="select_cartype">
                            <?php foreach ($categories as $category) { ?>
                                <option value="<?= $category->id ?>"><?= $category->title ?></option>
                                    <?php } ?>
                            </select> </div>
                    </div>
                    <div class="form-block form-submit"> <input class="orange_button form-update" type=submit
                            value="Update" name="update" /> </div>
                    <div class=clear></div>
                </div>
                <div class=clear></div>
            </form>
            <div id=primary>
                <aside id=secondary class=sidebar-left>
                    <div class="widget info_widget">
                        <h3 class=widget-title> <img src=images/info.png alt /> Info </h3>
                        <div class=widget-content><strong>Please Note: </strong> The vehicles shown are examples.
                            Specific models within a car class may vary in availability and features, such as passenger
                            seating, luggage capacity and mileage.</div>
                    </div>
                </aside>
                <div id=content class=sidebar-middle>
                    <div class="widget main-widget product-widget">
                        <div class=content-overlay> <img class=ajax-loader src=images/ajax-loader.gif alt /> </div>
                        <form action=06-review-book.html>
                            <div class=widget-title>
                                <div> <img src=images/list.png alt /> Details  </div>
                                <div class=widget-title-sort></div>
                                <div class=clear></div>
                            </div>

                            @foreach ($vehicles as $vehicle)

                            <div class=post>
                                <div class=main-block_container>
                                    <div class=main-block>
                                        <div class=product-img> <img src=images/product-3.png alt /> </div>
                                        <div class=product-info>
                                        <h3 class=entry-format>{{$vehicle->title}}<span></span></h3>
                                            <div class=features>
                                                <p><img src=images/passenger-icon.png alt /> 5 passengers</p>
                                                <p><img src=images/suitcase-icon.png alt /> 3 large suitcases, 2 small
                                                    suitcase</p>
                                                <p><img src=images/transmission-icon.png alt /> automatic transmission
                                                </p>
                                                <p><img src=images/air-icon.png alt /> air conditioning</p>
                                                <p><img src=images/km_l-icon.png alt /> 9 km/l</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=additional-block>
                                        <div>
                                          @foreach ($price as $p)
                                                <p>${{$p->amount}}</p>
                                          @endforeach  
                                        
                                            <p class=span></p> <input
                                                class="continue_button blue_button" type=submit name="next" value=Continue />
                                        </div>
                                    </div>
                                    <div class=clear></div>
                                </div>
                            </div>
                            <div class=post-delimiter></div>
                                
                            @endforeach
                            

                        </form>
                    </div>
                    
                </div>
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
                        <div class=support> <img src=images/support-icon.png alt />
                            <div>
                                <div class=title>Online support</div>
                                <div class=phone>+1 (555) 555 - 28 - 28</div>
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
            <div id=footer-content> <img class=site-logo src=images/thumb.png alt />
                <h1 class=site-title>Kencars</h1>
                <div class=company-name>Kencars Rental company &copy 2020</div>
            </div>
        </footer>
    </div>
    <div id=overlay_block></div>
    <div class="admin-form-content sign_register_block">
        <div class=admin-form-block>
            <form class="main-form admin-form" action=#>
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
    </div>
    <div class="admin-form-content forgot_passwd_block">
        <div class=admin-form-block>
            <form class="main-form admin-form" action=#>
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
    <script type=text/javascript src=js/jquery-1.11.3.min.js></script>
    <script type=text/javascript src=js/jquery-migrate-1.2.1.min.js></script>
    <script type=text/javascript src=js/jquery-ui.js></script>
    <!--[if IE]> <script type=text/javascript src=js/placeholder_ie.js></script> <![endif]-->
    <script type=text/javascript src=js/custom-form-elements.js></script>
    <script type=text/javascript src=js/jquery.meio.mask.js></script>
    <script type=text/javascript src=js/jquery.selectbox-0.2.min.js></script>
    <script type=text/javascript src=js/jquery.blueberry.js></script>
    <script type=text/javascript src=js/script.js></script>
</body>

</html>