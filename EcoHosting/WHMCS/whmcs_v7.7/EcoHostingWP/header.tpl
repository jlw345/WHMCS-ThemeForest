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

<!-- Preloader Start -->
<div id="preloader">
	<div class="preloader--spinners">
		<div class="preloader--spinner preloader--spinner-1"></div>
		<div class="preloader--spinner preloader--spinner-2"></div>
	</div>
</div>
<!-- Preloader End -->

<!-- Menu Area Start -->
<div id="menu">
    <!-- Menu Topbar Start -->
    <div class="menu--topbar">
        <div class="container">
            <!-- Menu Topbar Contact Start -->
            <div class="menu-topbar--contact">
                <ul class="nav navbar-nav">
                    <li><a href="tel:+4440000000"><i class="fa fa-phone"></i>+444 000 0000</a></li>
                    <li><a href="mailto:example@example.com"><i class="fa fa-envelope"></i>example@example.com</a></li>
                </ul>
            </div>
            <!-- Menu Topbar Contact End -->
            <!-- Menu Topbar Social Start -->
            <ul class="menu-topbar--social nav navbar-nav navbar-right">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                <li><a href="#"><i class="fa fa-rss"></i></a></li>
            </ul>
            <!-- Menu Topbar Social End -->
        </div>
    </div>
    <!-- Menu Topbar End -->
    <!-- Primary Menu Start -->
    <nav id="primaryMenu" class="navbar primary-menu-two">
        <div class="container">
            <!-- Logo Start -->
            <div class="primary--logo">
                <h1><a href="http://themelooks.us/demo/ecohosting/wordpress/"><span><i class="fa fa-tree"></i>Eco</span>Hosting</a></h1>
            </div>
            <!-- Logo End -->
            <div class="primary--info clearfix">
                <div class="primary--info-item">
                    <div class="primary--icon">
                        <img src="{$WEB_ROOT}/templates/{$template}/img/top-bar-icons/01.png" alt="" class="img-responsive">
                    </div>
                    <div class="primary--content">
                        <p class="count">24/7 Support</p>
                        <p>Lorem ipsum dolor</p>
                    </div>
                </div>
                <div class="primary--info-item">
                    <div class="primary--icon">
                        <img src="{$WEB_ROOT}/templates/{$template}/img/top-bar-icons/02.png" alt="" class="img-responsive">
                    </div>
                    <div class="primary--content">
                        <p class="count">45 Day Guarantee</p>
                        <p>Lorem ipsum dolor</p>
                    </div>
                </div>
                <div class="primary--info-item">
                    <div class="primary--icon">
                        <img src="{$WEB_ROOT}/templates/{$template}/img/top-bar-icons/03.png" alt="" class="img-responsive">
                    </div>
                    <div class="primary--content">
                        <p class="count">99.9% Uptime</p>
                        <p>Lorem ipsum dolor</p>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Primary Menu End -->

    <!-- Secondary Menu Start -->
    <nav id="secondaryMenu" class="navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#secondaryNavbar" aria-expanded="false" aria-controls="secondaryNavbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="login-btn hidden-lg hidden-md hidden-sm">
                    <a href="{$WEB_ROOT}/clientarea.php" class="btn">Client Area</a>
                </div>
            </div>
            <!-- Secondary Menu Links Start -->
            <div id="secondaryNavbar" class="reset-padding navbar-collapse collapse">
                <ul class="secondary-menu-links nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown">Home<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="http://themelooks.us/demo/ecohosting/wordpress/">Home Version 1</a></li>
                            <li><a href="http://themelooks.us/demo/ecohosting/wordpress/home-version-2/">Home Version 2</a></li>
                            <li><a href="http://themelooks.us/demo/ecohosting/wordpress/home-version-3/">Home Version 3</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown">Hosting<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="http://themelooks.us/demo/ecohosting/wordpress/shared-hosting/">Shared Hosting</a></li>
                            <li><a href="http://themelooks.us/demo/ecohosting/wordpress/reseller-hosting/">Reseller Hosting</a></li>
                            <li><a href="http://themelooks.us/demo/ecohosting/wordpress/vps-hosting/">VPS Hosting</a></li>
                            <li><a href="http://themelooks.us/demo/ecohosting/wordpress/dedicated-hosting/">Dedicated Hosting</a></li>
                        </ul>
                    </li>
                    <li><a href="http://themelooks.us/demo/ecohosting/wordpress/domain/">Domain</a></li>
                    <li class="active"><a href="http://billing.ywhmcs.com/?systpl=EcoHostingWP">WHMCS</a></li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown">Pages<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="http://themelooks.us/demo/ecohosting/wordpress/about/">About</a></li>
                            <li><a href="http://themelooks.us/demo/ecohosting/wordpress/faq/">FAQ</a></li>
                            <li><a href="http://themelooks.us/demo/ecohosting/wordpress/testimonial/">Testimonial</a></li>
                            <li><a href="http://themelooks.us/demo/ecohosting/wordpress/affiliate/">Affiliate</a></li>
                            <li><a href="http://themelooks.us/demo/ecohosting/wordpress/404">404</a></li>
                        </ul>
                    </li>
                    <li><a href="http://themelooks.us/demo/ecohosting/wordpress/blog/">Blog</a></li>
                    <li><a href="http://themelooks.us/demo/ecohosting/wordpress/contact/">Contact</a></li>
                </ul>
                <ul class="secondary-menu-links nav navbar-nav navbar-right hidden-xs">
                    <li><a href="{$WEB_ROOT}/clientarea.php" class="btn">Client Area</a></li>
                </ul>
            </div>
            <!-- Secondary Menu Links End -->
        </div>
    </nav>
    <!-- Secondary Menu End -->
</div>
<!-- Menu Area End -->

<section id="header" class="HeaderAdjust">
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
    </div>
</section>

<section id="main-menu">

    <nav id="nav" class="navbar navbar-default navbar-main" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

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
    <section id="home-banner" data-bg-src="{$WEB_ROOT}/templates/{$template}/img/bg-pattern-white-01.png">
        <div class="container text-center">
            {if $registerdomainenabled || $transferdomainenabled}
                <h2>{$LANG.homebegin}</h2>
                <form method="post" action="domainchecker.php" id="frmDomainHomepage">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                            <div class="input-group input-group-lg">
                                <input type="text" class="form-control" name="domain" placeholder="{$LANG.exampledomain}" autocapitalize="none" data-toggle="tooltip" data-placement="left" data-trigger="manual" title="{lang key='orderForm.required'}" />
                                <span class="input-group-btn">
                                    {if $registerdomainenabled}
                                        <input type="submit" class="btn search{$captcha->getButtonClass($captchaForm)}" value="{$LANG.search}" />
                                    {/if}
                                    {if $transferdomainenabled}
                                        <input type="submit" name="transfer" class="btn transfer{$captcha->getButtonClass($captchaForm)}" value="{$LANG.domainstransfer}" />
                                    {/if}
                                </span>
                            </div>
                        </div>
                    </div>

                    {include file="$template/includes/captcha.tpl"}
                </form>
            {else}
                <h2>{$LANG.doToday}</h2>
            {/if}
        </div>
    </section>
    <div class="home-shortcuts">
        <div class="container">
            <div class="row">
                <div class="col-md-4 hidden-sm hidden-xs text-center">
                    <p class="lead">
                        {$LANG.howcanwehelp}
                    </p>
                </div>
                <div class="col-sm-12 col-md-8">
                    <ul>
                        {if $registerdomainenabled || $transferdomainenabled}
                            <li>
                                <a id="btnBuyADomain" href="domainchecker.php">
                                    <i class="fas fa-globe"></i>
                                    <p>
                                        {$LANG.buyadomain} <span>&raquo;</span>
                                    </p>
                                </a>
                            </li>
                        {/if}
                        <li>
                            <a id="btnOrderHosting" href="cart.php">
                                <i class="far fa-hdd"></i>
                                <p>
                                    {$LANG.orderhosting} <span>&raquo;</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a id="btnMakePayment" href="clientarea.php">
                                <i class="fas fa-credit-card"></i>
                                <p>
                                    {$LANG.makepayment} <span>&raquo;</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a id="btnGetSupport" href="submitticket.php">
                                <i class="far fa-envelope"></i>
                                <p>
                                    {$LANG.getsupport} <span>&raquo;</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
{/if}

{include file="$template/includes/verifyemail.tpl"}

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
