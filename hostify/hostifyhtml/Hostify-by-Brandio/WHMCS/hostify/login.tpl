<div id="form-section" class="container-fluid signin">
    <div class="website-logo">
        <a href="{$WEB_ROOT}/index.php">
            <div class="logo" style="width:62px;height:18px"></div>
        </a>
    </div>
    <div class="row">
        <div class="info-slider-holder">
            <div class="info-holder">
                <h6>A Service you can anytime modify.</h6>
                <div class="bold-title">it’s not that hard to get<br>
    a website <span>anymore.</span></div>
                <div class="mini-testimonials-slider">
                    <div>
                        <div class="details-holder">
                            <img class="photo" src="{$WEB_ROOT}/templates/{$template}/images/person1.jpg" alt="">
                            <h4>Chris Walker</h4>
                            <h5>CEO & CO-Founder @HelloBrandio</h5>
                            <p>“In hostify we trust. I am with them for over
    7 years now. It always felt like home!
    Loved their customer support”</p>
                        </div>
                    </div>
                    <div>
                        <div class="details-holder">
                            <img class="photo" src="{$WEB_ROOT}/templates/{$template}/images/person2.jpg" alt="">
                            <h4>Chris Walker</h4>
                            <h5>CEO & CO-Founder @HelloBrandio</h5>
                            <p>“In hostify we trust. I am with them for over
    7 years now. It always felt like home!
    Loved their customer support”</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-holder">
            <div class="menu-holder">
                <ul class="main-links">
                    <li><a class="normal-link" href="{$WEB_ROOT}/register.php">Don’t have an account?</a></li>
                    <li><a class="sign-button" href="{$WEB_ROOT}/register.php">Sign up</a></li>
                </ul>
            </div>
            <div class="signin-signup-form">
                <div class="form-items{if $linkableProviders} with-social{/if}">
                    <div class="form-title">{include file="$template/includes/pageheader.tpl" title=$LANG.login desc="{$LANG.restrictedpage}"}</div>
                    {if $incorrect}
                        {include file="$template/includes/alert.tpl" type="error" msg=$LANG.loginincorrect textcenter=true}
                    {elseif $verificationId && empty($transientDataName)}
                        {include file="$template/includes/alert.tpl" type="error" msg=$LANG.verificationKeyExpired textcenter=true}
                    {elseif $ssoredirect}
                        {include file="$template/includes/alert.tpl" type="info" msg=$LANG.sso.redirectafterlogin textcenter=true}
                    {elseif $invalid}
                        {include file="$template/includes/alert.tpl" type="error" msg=$LANG.googleRecaptchaIncorrect textcenter=true}
                    {/if}
                    <div class="providerLinkingFeedback"></div>

                    <div class="row">
                        <div class="col-sm-12">
                            <form id="signinform" method="post" action="{$systemurl}dologin.php" role="form">
                                <div class="form-text">
                                    <input id="inputEmail" type="email" name="username" name="username" placeholder="{$LANG.enteremail}">
                                </div>
                                <div class="form-text">
                                    <input id="inputPassword" type="password" name="password" placeholder="{$LANG.clientareapassword}" autocomplete="off">
                                </div>
                                <div class="form-text text-holder">
                                    <input id="chkbox" type="checkbox" class="hno-checkbox" name="rememberme" /> <label for="chkbox">{$LANG.loginrememberme}</label>
                                </div>
                                {if $captcha->isEnabled()}
                                    <div class="text-center margin-bottom">
                                        {include file="$template/includes/captcha.tpl"}
                                    </div>
                                {/if}
                                <div class="form-button">
                                    <button id="login" type="submit" class="ybtn ybtn-accent-color btn btn-primary{$captcha->getButtonClass($captchaForm)}">{$LANG.loginbutton}</button>
                                    <a href="pwreset.php" class="btn btn-link">{$LANG.forgotpw}</a>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-12">
                            {include file="$template/includes/linkedaccounts.tpl" linkContext="login" customFeedback=true}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>