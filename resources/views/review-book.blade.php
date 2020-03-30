
<!DOCTYPE html>
<html lang=en-US>

<head>
    <title>Renty - Review Book</title>
    <link rel="shortcut icon" type=image/x-icon href=images/favicon.ico />
    <meta http-equiv=content-type content="text/html; charset=UTF-8" />
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link rel=stylesheet href=css/jquery-ui.css type=text/css media=all />
    <link rel=stylesheet href=css/style.css type=text/css media=all />
    <!--[if IE]> <script type=text/javascript src=js/html5.js></script> <link rel=stylesheet id=stylesheet-ie href=css/css_ie.css type=text/css media=all /> <![endif]-->
</head>

<body class="page page-two-column no-main-form">
    <div id=conteiner>
        <div id=branding>
            <div id=branding-content>
                <div class=title-content> <a href=01-home-v1.html title> <img class=site-logo src=images/thumb.png
                            alt />
                        <h1 class=site-title> Kencars </h1>
                    </a> </div>
                <div class=access-content> <label for=menu-icon class=menu-icon><img src=images/menu.png
                            alt=menu /></label> <input type=checkbox id=menu-icon value=1 />
                    <ul>
                        <li class=menu-close> <span>&#10006;</span> </li>
                        <li class="current_page_item menu-item-has-children"> <a href=01-home-v1.html title>Home</a>
                        </li>
                        <li><a href=10-faq.html title>About</a></li>
                        <li><a href=10-faq.html title>Contact</a></li>
                        <li><a href=10-faq.html title>FAQ</a></li>
                    </ul>
                </div>
                <div class=member> <span class=sign_in><a class="sign_button tab_link_button" href=#sign_in title>Sign
                            in</a></span> <span class=register><a class="sign_button tab_link_button" href=#register
                            title>Register</a></span> </div>
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
                <div class="progress-bar-step done">
                    <div class=step_number>2</div>
                    <div class=step_name>Choose a car</div>
                    <div class=clear></div>
                </div>
                <div class="progress-bar-step current">
                    <div class=step_number>3</div>
                    <div class=step_name>Review &amp; Book</div>
                    <div class=clear></div>
                </div>
            </div>
            <div class=clear></div>
        </div>
        <div id=main>
            <div id=primary>
                <aside id=secondary class=sidebar-left>
                    <div class=widget>
                        <h3 class=widget-title> <img src=images/order_info.png alt /> Order Info </h3>
                        <h4> Car <a href=04-choose-car.html title>Edit</a> </h4>
                        <div class="widget-content main-block product-widget-mini">
                            <div class=product-img> <img src=images/product-mini.png alt /> </div>
                            <div class=product-info>
                                <div class=entry-format>
                                    <div>Ford Escape</div> <span>Economy</span>
                                </div>
                                <div class=features>
                                    <p><img src=images/passenger-icon.png alt /> 5 passengers</p>
                                    <p><img src=images/suitcase-icon.png alt /> 3 large suitcases, 2 small suitcase</p>
                                    <p><img src=images/transmission-icon.png alt /> automatic transmission</p>
                                    <p><img src=images/air-icon.png alt /> air conditioning</p>
                                    <p><img src=images/km_l-icon.png alt /> 9 km/l</p>
                                </div>
                            </div>
                        </div>
                        <h4> Date &amp; Location <a href=01-home-v1.html title>Edit</a> </h4>
                        <div class="widget-content widget-info">
                            <h4>Location</h4>
                            <p>New York City JFK Airport</p>
                            <h4>Date</h4>
                            <p>Thu, 27 Mar, 2020</p>
                            <h4>Time</h4>
                            <p>12:00pm - 13:00pm</p>
                            <div class=subtotal_content>
                                <div class=subtotal> Subtotal: <span class=price>$3568.00</span> </div>
                            </div>
                        </div>
                        <div class="widget-footer widget-footer-total"> Total: <span class=price>$3897.99</span> </div>
                    </div>
                </aside>
                <div id=content class=sidebar-middle>
                    <form action=01-home-v1.html class=complete_reservation>
                        <div class="widget main-widget">
                            <div class=widget-title>
                                <div> <img src=images/list.png alt /> Complete reservation form </div>
                                <div class=clear></div>
                            </div>
                            <h4>Note</h4>
                            <div class="widget-content widget-note">
                                <h4>Upon completing this reservation, you will receive:</h4>
                                <ul>
                                    <li>Your rental voucher to produce on arrival at the rental desk</li>
                                    <li>A toll-free customer support number</li>
                                </ul>
                            </div>
                            <h4>Personal information</h4>
                            <div class=widget-content>
                                <div class=form_element>
                                    <div>First name</div> <input type=text value placeholder="Enter your first name"
                                        name="first_name" />
                                </div>
                                <div class=form_element>
                                    <div>Last name</div> <input type=text value placeholder="Enter your last name"
                                        name="last_name" />
                                </div>
                                <div class=form_element>
                                    <div>Age</div>
                                    <div class=product-select-count> <select class=select name=age>
                                            <option>24</option>
                                            <option selected=selected>25</option>
                                        </select> </div>
                                </div>
                                <div class=clear></div>
                                <div class=form_element>
                                    <div>Email address</div> <input type=email value
                                        placeholder="Enter your email address" name="email_address" />
                                </div>
                                <div class=form_element>
                                    <div>Confirm email address</div> <input type=email value
                                        placeholder="Confirm your email address" name="confirm_email_address" />
                                </div>
                                <div class=clear></div>
                                <div class=form_element>
                                    <div>Phone number</div> <input type=text value placeholder="Enter your phone number"
                                        name="phone_number" />
                                </div>
                                <div class=clear></div>
                                <div class="form_element form_element_checkbox"> <input id=location-checkbox
                                        type=checkbox class=styled name=checkbox_location value="1" /> <label
                                        for=location-checkbox> Send me latest news &amp; updates</label> </div>
                                <div class=clear></div>
                            </div>
                            <h4>Credit card information</h4>
                            <div class="widget-content personal_info">
                                <div class=form_element>
                                    <div>Card Type</div> <img src=images/visa.png alt /> <img src=images/master_card.png
                                        alt /> <img src=images/american_express.png alt />
                                </div>
                                <div class=clear></div>
                                <div class=form_element>
                                    <div>Card number</div> <input type=text value placeholder=XXXX-XXXX-XXXX-XXXX
                                        name="card_number" />
                                </div>
                                <div class=form_element>
                                    <div>Expiration date</div>
                                    <div class=product-select-count> <select class=select name=expiration_date_month>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option selected=selected>12</option>
                                        </select> </div>
                                    <div class="product-select-count expiration_date_year"> <select class=select
                                            name=expiration_date_year>
                                            <option>2013</option>
                                            <option>2014</option>
                                            <option selected=selected>2015</option>
                                            <option>2016</option>
                                            <option>2017</option>
                                        </select> </div>
                                </div>
                                <div class=form_element>
                                    <div>CVV</div> <input class=cvv type=number value placeholder=XXX name=cvv min=100
                                        max="999" />
                                </div>
                                <div class=clear></div>
                                <div class=form_element>
                                    <div>Name on card</div> <input type=text value placeholder="First name"
                                        name="card_first_name" />
                                </div>
                                <div class=form_element> <input class=no-lable type=text value placeholder="Last name"
                                        name="card_last_name" /> </div>
                                <div class=clear></div>
                            </div>
                            <h4>Billing address</h4>
                            <div class="widget-content personal_info">
                                <div class=form_element>
                                    <div>City</div> <input type=text value placeholder="Enter city name" name="city" />
                                </div>
                                <div class=form_element>
                                    <div>Country</div>
                                    <div class=card_country> <select class=select name=card_country>
                                            <option>Select country</option>
                                            <option>USA</option>
                                            <option>England</option>
                                        </select> </div>
                                </div>
                                <div class=form_element>
                                    <div>Postal code</div> <input class=postal_code type=text value placeholder=XXXXX
                                        name="postal_code" />
                                </div>
                                <div class=clear></div>
                                <div class="form_element billing_address">
                                    <div>Billing address</div> <input type=text value
                                        placeholder="Enter billing address" name="billing_address" />
                                </div>
                                <div class="form_element billing_address">
                                    <div>Billing address 2 <span>(Optional)</span></div> <input type=text value
                                        placeholder="Enter billing address" name="billing_address_2" />
                                </div>
                                <div class=clear></div>
                            </div>
                        </div>
                        <div class=next_page> <input class="continue_button blue_button" type=submit value="Book Now" />
                        </div>
                    </form>
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