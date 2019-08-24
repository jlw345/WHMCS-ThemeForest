<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="login-register-form {if $linkableProviders} with-social{/if}">
                    <div class="form-holder">
                        <div class="form-row form-head">
                            <div class="col-xs-6">
                                <a class="site-brand" href="{$WEB_ROOT}/index.php"><img src="{$WEB_ROOT}/templates/{$template}/images/logo.svg" alt="Hostbee"></a>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-title">{include file="$template/includes/pageheader.tpl" desc="{$LANG.restrictedpage}"}</div>
                            </div>
                        </div>
                        <div class="form-row form-links">
                            <div class="col-xs-12">
                                <a href="{$WEB_ROOT}/clientarea.php" class="link-to active">{$LANG.login}</a> or <a href="{$WEB_ROOT}/register.php" class="link-to">{$LANG.register}</a>
                            </div>
                        </div>
                        <div class="form-row">
                            {if $incorrect}
                                {include file="$template/includes/alert.tpl" type="error" msg=$LANG.loginincorrect textcenter=true}
                            {elseif $verificationId && empty($transientDataName)}
                                {include file="$template/includes/alert.tpl" type="error" msg=$LANG.verificationKeyExpired textcenter=true}
                            {elseif $ssoredirect}
                                {include file="$template/includes/alert.tpl" type="info" msg=$LANG.sso.redirectafterlogin textcenter=true}
                            {/if}

                            <div class="providerLinkingFeedback"></div>
                        </div>
                        <div class="form-row form-linked">
                            <div class="col-xs-12">
                                {include file="$template/includes/linkedaccounts.tpl" linkContext="login" customFeedback=true}
                            </div>
                        </div>
                        <form method="post" action="{$systemurl}dologin.php" class="login-form" role="form">
                            <div class="form-row">
                                <div class="col-xs-12">
                                    <label for="inputEmail">{$LANG.clientareaemail}</label>
                                    <input type="email" name="username" class="form-control" id="inputEmail" placeholder="{$LANG.enteremail}" autofocus>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-xs-12">
                                    <label for="inputPassword">{$LANG.clientareapassword}</label>
                                    <input type="password" name="password" class="form-control" id="inputPassword" placeholder="{$LANG.clientareapassword}" autocomplete="off" >
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-xs-12">
                                    
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-xs-6">
                                    <input id="chkbox" type="checkbox" name="rememberme" />
                                    <label for="chkbox">{$LANG.loginrememberme}</label>
                                    <a href="pwreset.php" class="forget-link">{$LANG.forgotpw}</a>
                                </div>
                                <div class="col-xs-6">
                                    <div class="submit-holder">
                                        <button id="login" type="submit">{$LANG.loginbutton}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>