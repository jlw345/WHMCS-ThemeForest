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
<body data-phone-cc-input="{$phoneNumberInputStyle}">

{$headeroutput}

<section id="header">
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
                    <a href="{$WEB_ROOT}/logout.php" class="btn">
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
                    <a href="{$WEB_ROOT}/cart.php?a=view" class="btn">
                        {$LANG.viewcart}
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
        </ul>

        {if $assetLogoPath}
            <a href="{$WEB_ROOT}/index.php" class="logo"><img src="{$assetLogoPath}" alt="{$companyname}"></a>
        {else}
            <a href="{$WEB_ROOT}/index.php" class="logo logo-text"><img class="logo" src="{$WEB_ROOT}/templates/{$template}/images/logo.png" width="143" height="18" alt="{$companyname}"></a>
        {/if}

    </div>
</section>

<section id="main-menu">

    <nav id="nav" class="navbar navbar-default navbar-main" role="navigation">
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
                    <li><a class="chat-button" href="#">Live Chat</a></li>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div>
    </nav>

</section>
{if $templatefile == 'homepage'}
<div id="top-content" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center rocket-animation-holder">
                <div class="rocket-animation">
                    <div class="rocket">
                        <img src="{$WEB_ROOT}/templates/{$template}/images/rocket.png" width="136" height="190">
                        <span class="rocket-line rline1"></span>
                        <span class="rocket-line rline2"></span>
                        <span class="rocket-line rline3"></span>
                    </div>
                    <div class="cloud cloud1"><img src="{$WEB_ROOT}/templates/{$template}/images/cloud.png" width="60" height="35"></div>
                    <div class="cloud cloud2"><img src="{$WEB_ROOT}/templates/{$template}/images/cloud.png" width="60" height="35"></div>
                    <div class="cloud cloud3"><img src="{$WEB_ROOT}/templates/{$template}/images/cloud.png" width="60" height="35"></div>
                </div>
                <h1>Fast. yet affordable<br>
Webhosting Services.</h1>
                {if $registerdomainenabled || $transferdomainenabled}
                <h4>Search and Register your Domain name today</h4>
                <div class="domain-form-holder">
                    <form method="post" action="domainchecker.php" id="frmDomainHomepage">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12 col-md-7 domain-text-holder">
                                    <input type="text" class="domain-text" name="domain" placeholder="{$LANG.exampledomain}" data-toggle="tooltip" data-placement="left" data-trigger="manual" title="{lang key='orderForm.required'}" />
                                    <i class="hroc hroc-search-icon"></i>
                                </div>
                                <div class="col-xs-12 col-md-5 btn-go-holder">
                                    <ul>
                                    {if $registerdomainenabled}
                                        <li><input type="submit" class="btn-go btn search{$captcha->getButtonClass($captchaForm)}" value="{$LANG.search}" /></li>
                                    {/if}
                                    {if $transferdomainenabled}
                                        <li><input type="submit" name="transfer" class="btn-go d-color btn transfer{$captcha->getButtonClass($captchaForm)}" value="{$LANG.domainstransfer}" /></li>
                                    {/if}
                                    </ul>
                                </div>
                            </div>
                        </div>

                        {include file="$template/includes/captcha.tpl"}
                    </form>
                </div>
                {else}
                <div class="toparea-space"></div>
                {/if}
            </div>
        </div>
    </div>
</div>
    
<div id="info" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 row-title">
                <h4>Ready to go in seconds</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-3">
                <div id="info-box1" class="info-box opened-info">
                    <div class="info-icon"><i class="hroc hroc-business"></i></div>
                    <div class="info-title">Tangible improvments</div>
                    <div class="info-circle"><div class="circle-icon"></div></div>
                </div>
            </div>
            <div class="col-xs-12 col-md-3">
                <div id="info-box2" class="info-box">
                    <div class="info-icon"><i class="hroc hroc-transport"></i></div>
                    <div class="info-title">Fast as rocket</div>
                    <div class="info-circle"><div class="circle-icon"></div></div>
                </div>
            </div>
            <div class="col-xs-12 col-md-3">
                <div id="info-box3" class="info-box">
                    <div class="info-icon"><i class="hroc hroc-technology"></i></div>
                    <div class="info-title">Ideas to life</div>
                    <div class="info-circle"><div class="circle-icon"></div></div>
                </div>
            </div>
            <div class="col-xs-12 col-md-3">
                <div id="info-box4" class="info-box">
                    <div class="info-icon"><i class="hroc hroc-search"></i></div>
                    <div class="info-title">Discover Hostrocket</div>
                    <div class="info-circle"><div class="circle-icon"></div></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="info-text1" class="container-fluid info-text-holder">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="info-title-icon">
                    <i class="hroc hroc-business"></i>
                    <div>Tangible improvments</div>
                </div>
                <div class="info-text">
                At vero eos et quas molestias excepturi sint occaecati cupiditate et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.
                </div>
            </div>
        </div>
    </div>
</div>
<div id="info-text2" class="container-fluid info-text-holder info-closed">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="info-title-icon">
                    <i class="hroc hroc-transport"></i>
                    <div>Fast as rocket</div>
                </div>
                <div class="info-text">
                At vero eos et accusamus et iusto odio dignissimos ducimus qui
blanditiis praesentium voluptatum deleniti atque corrupti quos dolores
et quas molestias excepturi sint occaecati cupiditate.
                </div>
            </div>
        </div>
    </div>
</div>
<div id="info-text3" class="container-fluid info-text-holder info-closed">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="info-title-icon">
                    <i class="hroc hroc-technology"></i>
                    <div>Ideas to life</div>
                </div>
                <div class="info-text">
                Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores
et quas molestias excepturi sint occaecati cupiditate at vero eos et accusamus et iusto odio dignissimos ducimus qui.
                </div>
            </div>
        </div>
    </div>
</div>
<div id="info-text4" class="container-fluid info-text-holder info-closed">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="info-title-icon">
                    <i class="hroc hroc-search"></i>
                    <div>Discover Hostrocket</div>
                </div>
                <div class="info-text">
                Praesentium voluptatum deleniti atque corrupti quos dolores
et quas molestias excepturi sint occaecati at vero eos et accusamus et iusto odio dignissimos ducimus qui
blanditiis cupiditate.
                </div>
            </div>
        </div>
    </div>
</div>
<div id="features" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 row-title">
                <h4>Hostrocket features</h4>
                <h5>A wide range of amazing info for your satisfaction</h5>
            </div>
        </div>
        <div class="row feature-row rtl-row">
            <div class="col-sm-12 col-md-5 text-center">
                <img class="feature-image" src="{$WEB_ROOT}/templates/{$template}/images/feature1.png">
            </div>
            <div class="col-sm-12 col-md-7">
                <div class="feature-title">Security Guaranteed.</div>
                <div class="feature-subtitle">Get Started Quickly & Easily</div>
                <div class="feature-text">
                    <p>Hostrocket network covers +250 countries and devices ranging from desktops and laptops to smart phones and tablets.</p>
                    <p>As an advertiser you'll get instant access to an intuitive and easy-to-use self-serve interface and have +1 billion users a click away. Choose between a variety of advanced targeting options and set up conversion tracking to keep full control of your ROI</p>
                </div>
                <a class="feature-button" href="#">Select plan</a>
            </div>
        </div>
        <div class="row feature-row">
            <div class="col-sm-12 col-md-5 text-center">
                <img class="feature-image" src="{$WEB_ROOT}/templates/{$template}/images/feature2.png">
            </div>
            <div class="col-sm-12 col-md-7">
                <div class="feature-title">Fast as rocket.</div>
                <div class="feature-subtitle">Get Started Quickly & Easily</div>
                <div class="feature-text">
                    <p>Hostrocket network covers +250 countries and devices ranging from desktops and laptops to smart phones and tablets.</p>

                    <p>As an advertiser you'll get instant access to an intuitive and easy-to-use self-serve interface and have +1 billion users a click away. Choose between a variety of advanced targeting options and set up conversion tracking to keep full control of your ROI</p>
                </div>
                <a class="feature-button" href="#">Select plan</a>
            </div>
        </div>
    </div>
</div>
<div id="starting" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sx-12 col-md-6">
                <h4>Start building your website today!</h4>
            </div>
            <div class="col-sx-12 col-md-3">
                <div class="price-holder">
                    <div class="currency">$</div>
                    <div class="number">
                        <div class="num-big">3</div>
                        <div class="num-small-holder">
                            <div class="plan-info">Starting From</div>
                            <div class="num-small">.38<div class="duration">/mo</div></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sx-12 col-md-3">
                <a class="plan-button" href="#">Select plan</a>
            </div>
        </div>
    </div>
</div>
<div id="reasons" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 row-title">
                <h4>More reasons why you’ll love Hostrocket</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="reason-box">
                    <h5>24/7  Amazing support</h5>
                    <p>Our support staff is available 24/7/365 to assist you via Telephone, LiveChat, or Email with any hosting-related issues</p>
                </div>
                <div class="reason-box">
                    <h5>45 Day Guarantee</h5>
                    <p>Try our services at no risk! If you're not completely satisfied you can cancel within 45 days for a complete refund.</p>
                </div>
                <div class="reason-box">
                    <h5>99.9% uptime</h5>
                    <p>The availability of your website is our top priority. We stand by that fact with our uptime guarantee!</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <iframe class="vimeo" src="https://player.vimeo.com/video/72978544" width="100%" height="310" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</div>
<div id="testimonials" class="container-fluid">
    <div class="container">
        <div class="row text-center">
            <div class="col-xs-12">
                <div class="testimonials-slider">
                    <div class="testimonial-slide">
                        <div class="slide-content">
                            <div class="col-sm-12 col-md-3">
                                <img src="{$WEB_ROOT}/templates/{$template}/images/sample.jpg" alt="">
                            </div>
                            <div class="col-sm-12 col-md-9">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque quos dolores et quas molestias excepturi.<br>
                                    praesentium voluptatum deleniti atque corrupti quos et quas molestias excepturi.</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-slide">
                        <div class="slide-content">
                            <div class="col-sm-12 col-md-3">
                                <img src="{$WEB_ROOT}/templates/{$template}/images/sample.jpg" alt="">
                            </div>
                            <div class="col-sm-12 col-md-9">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque quos dolores et quas molestias excepturi.<br>
                                    praesentium voluptatum deleniti atque corrupti quos et quas molestias excepturi.</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-slide">
                        <div class="slide-content">
                            <div class="col-sm-12 col-md-3">
                                <img src="{$WEB_ROOT}/templates/{$template}/images/sample.jpg" alt="">
                            </div>
                            <div class="col-sm-12 col-md-9">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque quos dolores et quas molestias excepturi.<br>
                                    praesentium voluptatum deleniti atque corrupti quos et quas molestias excepturi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{else}
<div id="top-content" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h3 class="page-title">{$pagetitle}</h3>
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
