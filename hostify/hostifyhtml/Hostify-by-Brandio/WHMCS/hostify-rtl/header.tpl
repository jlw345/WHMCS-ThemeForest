<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="{$charset}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{if $kbarticle.title}{$kbarticle.title} - {/if}{$pagetitle} - {$companyname}</title>

    {include file="$template/includes/head.tpl"}

    {$headoutput}

</head>
<body data-phone-cc-input="{$phoneNumberInputStyle}" {if $loginpage eq 1 or $templatefile eq "clientregister"}class="fullpage"{/if}>
{if $loginpage eq 0 and $templatefile ne "clientregister"}

<div id="header-holder" class="{if $templatefile != 'homepage'}inner-header{else}main-header{/if}">
    <div class="bg-animation">
        <div class="graphic-show">
            <img class="fix-size" src="{$WEB_ROOT}/templates/{$template}/images/graphic1.png" alt="">
            <img class="img img1" src="{$WEB_ROOT}/templates/{$template}/images/graphic1.png" alt="">
            <img class="img img2" src="{$WEB_ROOT}/templates/{$template}/images/graphic2.png" alt="">
            <img class="img img3" src="{$WEB_ROOT}/templates/{$template}/images/graphic3.png" alt="">
        </div>
    </div>
    
    {$headeroutput}

    <section id="header" class="container-fluid">
        <div class="container">
            <ul class="top-nav">
                {if $languagechangeenabled && count($locales) > 1}
                    <li>
                        <a href="#" class="choose-language" data-toggle="popover" id="languageChooser">
                            {$activeLocale.localisedName}
                            <b class="caret"></b>
                        </a>
                        <div id="languageChooserContent" class="hidden">
                            <ul>
                                {foreach $locales as $locale}
                                    <li>
                                        <a href="{$currentpagelinkback}language={$locale.language}">{$locale.localisedName}</a>
                                    </li>
                                {/foreach}
                            </ul>
                        </div>
                    </li>
                {/if}
                {if $loggedin}
                    <li>
                        <a href="#" data-toggle="popover" id="accountNotifications" data-placement="bottom">
                            {$LANG.notifications}
                            {if count($clientAlerts) > 0}
                                <span class="label label-info">{lang key='notificationsnew'}</span>
                            {/if}
                            <b class="caret"></b>
                        </a>
                        <div id="accountNotificationsContent" class="hidden">
                            <ul class="client-alerts">
                            {foreach $clientAlerts as $alert}
                                <li>
                                    <a href="{$alert->getLink()}">
                                        <i class="fas fa-fw fa-{if $alert->getSeverity() == 'danger'}exclamation-circle{elseif $alert->getSeverity() == 'warning'}exclamation-triangle{elseif $alert->getSeverity() == 'info'}info-circle{else}check-circle{/if}"></i>
                                        <div class="message">{$alert->getMessage()}</div>
                                    </a>
                                </li>
                            {foreachelse}
                                <li class="none">
                                    {$LANG.notificationsnone}
                                </li>
                            {/foreach}
                            </ul>
                        </div>
                    </li>
                    <li class="primary-action">
                        <a href="{$WEB_ROOT}/logout.php" class="btn btn-logout">
                            {$LANG.clientareanavlogout}
                        </a>
                    </li>
                {else}
                    <li>
                        <a href="{$WEB_ROOT}/clientarea.php">{$LANG.login}</a>
                    </li>
                    {if $condlinks.allowClientRegistration}
                        <li>
                            <a href="{$WEB_ROOT}/register.php">{$LANG.register}</a>
                        </li>
                    {/if}
                    <li class="primary-action">
                        <a href="{$WEB_ROOT}/cart.php?a=view" class="btn-cart">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                    </li>
                {/if}
                {if $adminMasqueradingAsClient || $adminLoggedIn}
                    <li>
                        <a href="{$WEB_ROOT}/logout.php?returntoadmin=1" class="btn btn-logged-in-admin" data-toggle="tooltip" data-placement="bottom" title="{if $adminMasqueradingAsClient}{$LANG.adminmasqueradingasclient} {$LANG.logoutandreturntoadminarea}{else}{$LANG.adminloggedin} {$LANG.returntoadminarea}{/if}">
                            <i class="fas fa-sign-out-alt"></i>
                        </a>
                    </li>
                {/if}
                <li class="support-button-holder support-dropdown">
                    <a class="support-button" href="#">Support</a>
                    <ul class="dropdown-menu">
                      <li><a href="#"><i class="fas fa-phone"></i>Toll-Free  08-197-435-01</a></li>
                      <li><a href="#"><i class="far fa-comments"></i>Start a Live Chat</a></li>
                      <li><a href="#"><i class="fas fa-ticket-alt"></i>Open a ticket</a></li>
                      <li><a href="#"><i class="fas fa-book"></i>Knowledge base</a></li>
                    </ul>
                </li>
            </ul>

            {if $assetLogoPath}
                <a href="{$WEB_ROOT}/index.php" class="logo"><img src="{$assetLogoPath}" alt="{$companyname}"></a>
            {else}
                <a href="{$WEB_ROOT}/index.php" class="logo logo-text logo-holder"><div class="logo" style="width:62px;height:18px" title="{$companyname}"></div></a>
            {/if}

        </div>
    </section>
    <section id="main-menu">
        <nav id="nav" class="container-fluid navbar navbar-default navbar-main" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="primary-nav">

                    <ul class="nav navbar-nav">

                        {include file="$template/includes/navbar.tpl" navbar=$primaryNavbar}

                    </ul>

                    <ul class="nav navbar-nav navbar-right">

                        {include file="$template/includes/navbar.tpl" navbar=$secondaryNavbar}
                        
                    </ul>

                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
    </section>
    {if $templatefile == 'homepage'}
    <div id="top-content" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="main-slider">
                        <div class="slide">
                            {if $loggedin}
                                {foreach from=$clientAlerts key=myId item=i name=alert}
                                    {if $smarty.foreach.alert.last}
                                        <div class="noti-holder">
                                            <a href="{$alert->getLink()}">
                                                <div class="noti">
                                                    <span class="badge"><i class="fas fa-fw fa-{if $alert->getSeverity() == 'danger'}exclamation-circle{elseif $alert->getSeverity() == 'warning'}exclamation-triangle{elseif $alert->getSeverity() == 'info'}info-circle{else}check-circle{/if}"></i></span><span class="text">{$alert->getMessage()}</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="spacer"></div>
                                    {/if}
                                {/foreach}
                            {else}
                                <div class="noti-holder">
                                    <a href="#">
                                        <div class="noti">
                                            <span class="badge">New</span><span class="text">Added new packages in cloud hosting.</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="spacer"></div>
                            {/if}
                            <div class="big-title">Your very <span>own space,</span><br>anywhere, anytime.</div>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus blanditiis atque corrupti quos dolores et quas molestias.</p>
                            <div class="btn-holder">
                                <a href="{$WEB_ROOT}/register.php" class="ybtn ybtn-header-color">Register</a><a href="{$WEB_ROOT}/contact.php" class="ybtn ybtn-white ybtn-shadow">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="header-graphic" src="{$WEB_ROOT}/templates/{$template}/images/graphic1.png" alt="" />
                </div>
            </div>
        </div>
    </div>
    {/if}
</div>
{if $templatefile == 'homepage'}
<div id="info" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="info-text">adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure.</div>
                
                <a href="{$WEB_ROOT}/register.php" class="ybtn ybtn-accent-color ybtn-shadow">Create Your Account</a>
            </div>
        </div>
    </div>
</div>
<div id="services" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">Our Services</div>
                <div class="row-subtitle">Designed to satisfy your creative needs.</div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="{$WEB_ROOT}/templates/{$template}/images/service-icon1.svg" alt="">
                    </div>
                    <div class="service-title"><a href="#">Web Hosting</a></div>
                    <div class="service-details">
                        <p>At vero eos et accusamus et iusto odio dignissimos
ducimus qui blanditiis praesentium voluptatum div
atque corrupti quos dolores et quas molestias.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="{$WEB_ROOT}/templates/{$template}/images/service-icon2.svg" alt="">
                    </div>
                    <div class="service-title"><a href="#">Resellers</a></div>
                    <div class="service-details">
                        <p>At vero eos et accusamus et iusto odio dignissimos
ducimus qui blanditiis praesentium voluptatum div
atque corrupti quos dolores et quas molestias.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="{$WEB_ROOT}/templates/{$template}/images/service-icon3.svg" alt="">
                    </div>
                    <div class="service-title"><a href="#">VPS Hosting</a></div>
                    <div class="service-details">
                        <p>At vero eos et accusamus et iusto odio dignissimos
ducimus qui blanditiis praesentium voluptatum div
atque corrupti quos dolores et quas molestias.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="{$WEB_ROOT}/templates/{$template}/images/service-icon4.svg" alt="">
                    </div>
                    <div class="service-title"><a href="#">Cloud Hosting</a></div>
                    <div class="service-details">
                        <p>At vero eos et accusamus et iusto odio dignissimos
ducimus qui blanditiis praesentium voluptatum div
atque corrupti quos dolores et quas molestias.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="message1" class="container-fluid message-area">
    <div class="bg-color"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="text-other-color1">Are you ready?</div>
                <div class="text-other-color2">create an account, or contact us.</div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="buttons-holder">
                    <a href="{$WEB_ROOT}/register.php" class="ybtn ybtn-accent-color">Create Your Account</a><a href="{$WEB_ROOT}/contact.php" class="ybtn ybtn-white ybtn-shadow">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="custom-plan" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h4>Create your plan</h4>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum div atque corrupti quos dolores et quas molestias.</p>
                <div class="custom-plan-box">
                    <input id="c-plan" type="text" data-slider-min="100" data-slider-max="10000" data-slider-step="100" data-slider-value="5000" data-currency="$" data-unit="GB">
                </div>
            </div>
            <div class="col-md-4">
                <div class="custom-plan-info-box">
                    <div class="title">Your custom plan</div>
                    <div class="details">
                        <div class="feature feature1"><span>5</span> GB</div>
                        <div class="feature feature2"><span>20</span> GB Bandwidth</div>
                        <div class="feature feature3">E-mail accounts</div>
                        <div class="feature feature4">Unlimited other features</div>
                    </div>
                    <div class="price">$250</div>
                    <div class="btn-holder">
                        <a href="{$WEB_ROOT}/register.php" class="ybtn ybtn-accent-color">Order now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="features" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="row-title">All Features</div>
                <div class="row-subtitle"></div>
            </div>
        </div>
        <div class="row rtl-cols">
            <div class="col-sm-12 col-md-6">
                <div id="features-links-holder">
                    <div class="icons-axis">
                        <img src="{$WEB_ROOT}/templates/{$template}/images/features-icon.png" alt="">
                    </div>
                    <div class="feature-icon-holder feature-icon-holder1 opened" data-id="1">
                        <div class="animation-holder"><div class="special-gradiant"></div></div>
                        <div class="feature-icon"><i class="htfy htfy-worldwide"></i></div>
                        <div class="feature-title">%99 Uptime</div>
                    </div>
                    <div class="feature-icon-holder feature-icon-holder2" data-id="2">
                        <div class="animation-holder"><div class="special-gradiant"></div></div>
                        <div class="feature-icon"><i class="htfy htfy-cogwheel"></i></div>
                        <div class="feature-title">Easy control panel</div>
                    </div>
                    <div class="feature-icon-holder feature-icon-holder3" data-id="3">
                        <div class="animation-holder"><div class="special-gradiant"></div></div>
                        <div class="feature-icon"><i class="htfy htfy-location"></i></div>
                        <div class="feature-title">Email Marketing</div>
                    </div>
                    <div class="feature-icon-holder feature-icon-holder4" data-id="4">
                        <div class="animation-holder"><div class="special-gradiant"></div></div>
                        <div class="feature-icon"><i class="htfy htfy-download"></i></div>
                        <div class="feature-title">1CLICK Script Installs</div>
                    </div>
                    <div class="feature-icon-holder feature-icon-holder5" data-id="5">
                        <div class="animation-holder"><div class="special-gradiant"></div></div>
                        <div class="feature-icon"><i class="htfy htfy-like"></i></div>
                        <div class="feature-title">7/24 Support</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div id="features-holder">
                    <div class="feature-box feature-d1 show-details">
                        <div class="feature-title-holder">
                            <span class="feature-icon"><i class="htfy htfy-worldwide"></i></span>
                            <span class="feature-title">%99 Uptime</span>
                        </div>
                        <div class="feature-details">
                            <p>At vero eos et accusamus et iusto odio dignissimos
                                ducimus qui blanditiis praesentium voluptatum div
                                atque corrupti quos dolores et quas molestias.</p>

                            <p>dignissimos ducimus qui blanditiis praesentium
                                voluptatum div atque corrupti quos dolores et quas
                                unimo molestias.</p>
                        </div>
                    </div>
                    <div class="feature-box feature-d2">
                        <div class="feature-title-holder">
                            <span class="feature-icon"><i class="htfy htfy-cogwheel"></i></span>
                            <span class="feature-title">Easy control panel</span>
                        </div>
                        <div class="feature-details">
                            <p>At vero eos et accusamus et iusto odio dignissimos
                                ducimus qui blanditiis praesentium voluptatum div
                                atque corrupti quos dolores et quas molestias.</p>

                            <p>dignissimos ducimus qui blanditiis praesentium
                                voluptatum div atque corrupti quos dolores et quas
                                unimo molestias.</p>
                        </div>
                    </div>
                    <div class="feature-box feature-d3">
                        <div class="feature-title-holder">
                            <span class="feature-icon"><i class="htfy htfy-location"></i></span>
                            <span class="feature-title">Email Marketing</span>
                        </div>
                        <div class="feature-details">
                            <p>At vero eos et accusamus et iusto odio dignissimos
                                ducimus qui blanditiis praesentium voluptatum div
                                atque corrupti quos dolores et quas molestias.</p>

                            <p>dignissimos ducimus qui blanditiis praesentium
                                voluptatum div atque corrupti quos dolores et quas
                                unimo molestias.</p>
                        </div>
                    </div>
                    <div class="feature-box feature-d4">
                        <div class="feature-title-holder">
                            <span class="feature-icon"><i class="htfy htfy-download"></i></span>
                            <span class="feature-title">1CLICK Script Installs</span>
                        </div>
                        <div class="feature-details">
                            <p>At vero eos et accusamus et iusto odio dignissimos
                                ducimus qui blanditiis praesentium voluptatum div
                                atque corrupti quos dolores et quas molestias.</p>

                            <p>dignissimos ducimus qui blanditiis praesentium
                                voluptatum div atque corrupti quos dolores et quas
                                unimo molestias.</p>
                        </div>
                    </div>
                    <div class="feature-box feature-d5">
                        <div class="feature-title-holder">
                            <span class="feature-icon"><i class="htfy htfy-like"></i></span>
                            <span class="feature-title">7/24 Support</span>
                        </div>
                        <div class="feature-details">
                            <p>At vero eos et accusamus et iusto odio dignissimos
                                ducimus qui blanditiis praesentium voluptatum div
                                atque corrupti quos dolores et quas molestias.</p>

                            <p>dignissimos ducimus qui blanditiis praesentium
                                voluptatum div atque corrupti quos dolores et quas
                                unimo molestias.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div id="testimonials" class="container-fluid">
    <div class="bg-color"></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="row-title">Testimonials</div>
                <div class="row-subtitle">What others said about us?</div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div id="testimonials-slider">
                    <div>
                        <div class="details-holder">
                            <img class="photo" src="{$WEB_ROOT}/templates/{$template}/images/person1.jpg" alt="">
                            <h4>Chris Walker</h4>
                            <h5>CEO & CO-Founder @HelloBrandio</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris egestas non ante non consequat. Aenean accumsan eros vel elit tristique, non sodales nunc luctus. Etiam vitae odio eget orci finibus auctor ut eget magna.</p>
                        </div>
                    </div>
                    <div>
                        <div class="details-holder">
                            <img class="photo" src="{$WEB_ROOT}/templates/{$template}/images/person2.jpg" alt="">
                            <h4>Chris Walker</h4>
                            <h5>CEO & CO-Founder @HelloBrandio</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris egestas non ante non consequat. Aenean accumsan eros vel elit tristique, non sodales nunc luctus. Etiam vitae odio eget orci finibus auctor ut eget magna.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="more-features" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">Our Promise</div>
                <div class="row-subtitle">Your satisfaction is guaranteed. Indeed.</div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <i class="htfy htfy-trophy"></i>
                    </div>
                    <div class="mfeature-title">%99.9 Uptime</div>
                    <div class="mfeature-details">Mauris at libero sed justo pretium maximus ac non ex. Donec sit amet ultrices dolo.</div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <i class="htfy htfy-like"></i>
                    </div>
                    <div class="mfeature-title">Money Back Guarantee</div>
                    <div class="mfeature-details">Mauris at libero sed justo pretium maximus ac non ex. Donec sit amet ultrices dolo.</div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <i class="htfy htfy-cogwheel"></i>
                    </div>
                    <div class="mfeature-title">Best Support</div>
                    <div class="mfeature-details">Mauris at libero sed justo pretium maximus ac non ex. Donec sit amet ultrices dolo.</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="message2" class="container-fluid message-area normal-bg boxed">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="text-other-color1">Are you ready?</div>
                <div class="text-other-color2">create an account, or contact us.</div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="buttons-holder">
                    <a href="{$WEB_ROOT}/register.php" class="ybtn ybtn-accent-color">Create Your Account</a><a href="{$WEB_ROOT}/contact.php" class="ybtn ybtn-white ybtn-shadow">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
{/if}

{include file="$template/includes/verifyemail.tpl"}
<div id="main-body-holder" class="container-fluid">
<section id="main-body">
    <div class="container{if $skipMainBodyContainer}-fluid without-padding{/if}">
        <div class="row">

        {if !$inShoppingCart && ($primarySidebar->hasChildren() || $secondarySidebar->hasChildren())}
            {if $primarySidebar->hasChildren() && !$skipMainBodyContainer}
                <div class="col-md-9 pull-md-right">
                    {include file="$template/includes/pageheader.tpl" title=$displayTitle desc=$tagline showbreadcrumb=true}
                </div>
            {/if}
            <div class="col-md-3 pull-md-left sidebar">
                {include file="$template/includes/sidebar.tpl" sidebar=$primarySidebar}
            </div>
        {/if}
        <!-- Container for main page display content -->
        <div class="{if !$inShoppingCart && ($primarySidebar->hasChildren() || $secondarySidebar->hasChildren())}col-md-9 pull-md-right{else}col-xs-12{/if} main-content">
            {if !$primarySidebar->hasChildren() && !$showingLoginPage && !$inShoppingCart && $templatefile != 'homepage' && !$skipMainBodyContainer}
                {include file="$template/includes/pageheader.tpl" title=$displayTitle desc=$tagline showbreadcrumb=true}
            {/if}
{/if}