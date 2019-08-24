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
<body>

{$headeroutput}
<!-- FakeLoader Start -->
<div id="fakeLoader"></div>
<!-- FakeLoader End -->

<!-- Menu Area Start -->
<div id="menu">
    {if !$loggedin}
    <!-- Promo Area Start -->
    <div id="promo" class="alert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    
        <div class="container">
            <p><strong>Cyber Monday! </strong>Up To<strong> 98% Off</strong> All Of Your New Order. Coupon Code: "<strong>cm98</strong>". Time Left: <strong data-counter-down="2017/11/29">00:00:00</strong></p>

            <a href="#" class="btn btn-custom">Click Here</a>
        </div>
    </div>
    <!-- Promo Area End -->
    {/if}

    <!-- Primary Menu Start -->
    <nav id="primaryMenu" class="navbar">
        <div class="container">
            <div id="primaryNavbar" class="reset-padding">
                <!-- Primary Menu Links Start -->
                <ul class="primary-menu-links nav navbar-nav">
                    <li class="hidden-xs"><span>Welcome To CloudServer Template</span></li>
                    <li><span class="phone"><i class="fa fa-phone"></i>123 - 456 - 12348</span></li>
                    <li><span class="email"><i class="fa fa-envelope"></i>info@example.com</span></li>
                </ul>
                <!-- Primary Menu Links End -->
                
                <!-- Primary Social Links Start -->
                <ul class="primary-social-menu-links nav navbar-nav navbar-right">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
                <!-- Primary Social Links End -->
            </div>
        </div>
    </nav>
    <!-- Primary Menu End -->

    <!-- Secondary Menu Start -->
    <nav id="secondaryMenu" class="navbar" data-sticky="true">
        <div class="container">
            <div class="navbar-header">
                <!-- Logo Start -->
                <a href="{$WEB_ROOT}/index.php" class="navbar-brand">
                    <img src="{$WEB_ROOT}/templates/{$template}/img/logo.png" alt="{$companyname}" class="img-responsive" />
                </a>
                <!-- Logo End -->
            </div>
            
            <!-- Off-Canvas Menu Toggle Button Start -->
            <button class="btn menu-toggle-btn">
                <i class="fa fa-navicon"></i> Menu
            </button>
            <!-- Off-Canvas Menu Toggle Button End -->
            
            <!-- Secondary Menu Links Start -->
            <div id="secondaryNavbar" class="navbar-right reset-padding hidden-sm hidden-xs">
                <ul class="secondary-menu-links nav navbar-nav">
                    <li><a href="http://www.themelooks.us/demo/cloudserver/html/preview/index.html">Home</a></li>
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hosting <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="http://www.themelooks.us/demo/cloudserver/html/preview/shared-hosting.html">Shared Hosting</a></li>
                            <li><a href="http://www.themelooks.us/demo/cloudserver/html/preview/reseller-hosting.html">Reseller Hosting</a></li>
                            <li><a href="http://www.themelooks.us/demo/cloudserver/html/preview/vps-hosting.html">VPS Hosting</a></li>
                            <li><a href="http://www.themelooks.us/demo/cloudserver/html/preview/dedicated-hosting.html">Dedicated Hosting</a></li>
                        </ul>
                    </li>
                    <li><a href="http://www.themelooks.us/demo/cloudserver/html/preview/domain.html">Domain</a></li>
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="http://www.themelooks.us/demo/cloudserver/html/preview/about.html">About</a></li>
                            <li><a href="http://www.themelooks.us/demo/cloudserver/html/preview/service-details.html">Service Details</a></li>
                            <li><a href="http://www.themelooks.us/demo/cloudserver/html/preview/gallery.html">Gallery</a></li>
                            <li><a href="http://www.themelooks.us/demo/cloudserver/html/preview/faq.html">FAQ</a></li>
                            <li><a href="http://www.themelooks.us/demo/cloudserver/html/preview/datacenter.html">Datacenter</a></li>
                            <li><a href="http://www.themelooks.us/demo/cloudserver/html/preview/testimonial.html">Testimonial</a></li>
                            <li><a href="http://www.themelooks.us/demo/cloudserver/html/preview/login.html">Login</a></li>
                            <li><a href="http://www.themelooks.us/demo/cloudserver/html/preview/affiliate.html">Affiliate</a></li>
                            <li><a href="http://www.themelooks.us/demo/cloudserver/html/preview/404.html">404</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="http://www.themelooks.us/demo/cloudserver/html/preview/blog.html">Blog</a></li>
                            <li><a href="http://www.themelooks.us/demo/cloudserver/html/preview/blog-details-left.html">Blog Details Left</a></li>
                            <li><a href="http://www.themelooks.us/demo/cloudserver/html/preview/blog-details-right.html">Blog Details Right</a></li>
                        </ul>
                    </li>
                    <li><a href="http://www.themelooks.us/demo/cloudserver/html/preview/contact.html">Contact</a></li>
                </ul>
            </div>
            <!-- Secondary Menu Links End -->
        </div>
    </nav>
    <!-- Secondary Menu End -->
    
    <!-- Off-Canvas Menu Start -->
    <div class="off-canvas-menu">
        <!-- Off-Canvas Menu Close Button Start -->
        <button type="button" class="off-canvas-menu--close-btn"><i class="fa fa-close"></i></button>
        <!-- Off-Canvas Menu Close Button End -->
        
        <!-- Off-Canvas Menu Logo Start -->
        <div class="off-canvas-menu-logo">
            <a href="index.html">
                <img src="{$WEB_ROOT}/templates/{$template}/img/logo-offcanvas.png" alt="" class="img-responsive center-block" />
            </a>
        </div>
        <!-- Off-Canvas Menu Logo End -->
        
        <!-- Off-Canvas Menu Links Start -->
        <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="index.html"><i class="fa fa-fw fa-home"></i> Home</a></li>
            <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-fw fa-server"></i> Hosting <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="shared-hosting.html"><i class="fa fa-fw fa-angle-right"></i> Shared Hosting</a></li>
                    <li><a href="reseller-hosting.html"><i class="fa fa-fw fa-angle-right"></i> Reseller Hosting</a></li>
                    <li><a href="vps-hosting.html"><i class="fa fa-fw fa-angle-right"></i> VPS Hosting</a></li>
                    <li><a href="dedicated-hosting.html"><i class="fa fa-fw fa-angle-right"></i> Dedicated Hosting</a></li>
                </ul>
            </li>
            <li><a href="domain.html"><i class="fa fa-fw fa-at"></i> Domain</a></li>
            <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-copy"></i> Pages <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="about.html"><i class="fa fa-fw fa-angle-right"></i> About</a></li>
                    <li><a href="service-details.html"><i class="fa fa-fw fa-angle-right"></i> Service Details</a></li>
                    <li><a href="gallery.html"><i class="fa fa-fw fa-angle-right"></i> Gallery</a></li>
                    <li><a href="faq.html"><i class="fa fa-fw fa-angle-right"></i> FAQ</a></li>
                    <li><a href="datacenter.html"><i class="fa fa-fw fa-angle-right"></i> Datacenter</a></li>
                    <li><a href="testimonial.html"><i class="fa fa-fw fa-angle-right"></i> Testimonial</a></li>
                    <li><a href="login.html"><i class="fa fa-fw fa-angle-right"></i> Login</a></li>
                    <li><a href="affiliate.html"><i class="fa fa-fw fa-angle-right"></i> Affiliate</a></li>
                    <li><a href="404.html"><i class="fa fa-fw fa-angle-right"></i> 404</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-newspaper-o"></i> Blog <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="blog.html"><i class="fa fa-fw fa-angle-right"></i> Blog</a></li>
                    <li><a href="blog-details-left.html"><i class="fa fa-fw fa-angle-right"></i> Blog Details Left</a></li>
                    <li><a href="blog-details-right.html"><i class="fa fa-fw fa-angle-right"></i> Blog Details Right</a></li>
                </ul>
            </li>
            <li><a href="contact.html"><i class="fa fa-fw fa-envelope-o"></i> Contact</a></li>
        </ul>
        <!-- Off-Canvas Menu Links End -->

        <a href="{$WEB_ROOT}/clientarea.php" class="btn btn-default login-button"><i class="fa fa-user"></i> Login</a>
    </div>
    
    <div class="off-canvas-menu-overlay"></div>
    <!-- Off-Canvas Menu End -->
</div>
<!-- Menu Area End -->

<section id="header">
    <div class="container">
        <!-- Top Bar -->
        <div id="top-nav">
            <!-- Language -->
            {if $languagechangeenabled && count($locales) > 1}
                <div class="pull-right nav">
                    <a href="#" class="quick-nav" data-toggle="popover" id="languageChooser"><i class="fa fa-language"></i> {$LANG.chooselanguage} <span class="caret"></span></a>
                    <div id="languageChooserContent" class="hidden">
                        <ul>
                            {foreach from=$locales item=locale}
                                <li><a href="{$currentpagelinkback}language={$locale.language}">{$locale.localisedName}</a></li>
                            {/foreach}
                        </ul>
                    </div>
                </div>
            {/if}
            <!-- Login/Account Notifications -->
            {if $loggedin}
                <div class="pull-right nav">
                    <a href="#" class="quick-nav" data-toggle="popover" id="accountNotifications" data-placement="bottom" title="{lang key="notifications"}"><i class="fa fa-info"></i> {$LANG.notifications} ({$clientAlerts|count})</a>
                    <div id="accountNotificationsContent" class="hidden">
                        {foreach $clientAlerts as $alert}
                            <div class="clientalert text-{$alert->getSeverity()}">{$alert->getMessage()}{if $alert->getLinkText()} <a href="{$alert->getLink()}" class="btn btn-xs btn-{$alert->getSeverity()}">{$alert->getLinkText()}</a>{/if}</div>
                        {foreachelse}
                            <div class="clientalert text-success"><i class="fa fa-check-square-o"></i> {$LANG.notificationsnone}</div>
                        {/foreach}
                    </div>
                </div>
            {else}
                <div class="pull-right nav">
                    <a href="#" class="quick-nav" data-toggle="popover" id="loginOrRegister" data-placement="bottom"><i class="fa fa-user"></i> {$LANG.login}</a>
                    <div id="loginOrRegisterContent" class="hidden">
                        <form action="{if $systemsslurl}{$systemsslurl}{else}{$systemurl}{/if}dologin.php" method="post" role="form">
                            <div class="form-group">
                                <input type="email" name="username" class="form-control" placeholder="{$LANG.clientareaemail}" required />
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="password" name="password" class="form-control" placeholder="{$LANG.loginpassword}" autocomplete="off" required />
                                    <span class="input-group-btn">
                                        <input type="submit" class="btn btn-primary" value="{$LANG.login}" />
                                    </span>
                                </div>
                            </div>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="rememberme" /> {$LANG.loginrememberme} &bull; <a href="{$WEB_ROOT}/pwreset.php">{$LANG.forgotpw}</a>
                            </label>
                        </form>
                        {if $condlinks.allowClientRegistration}
                            <hr />
                            {$LANG.newcustomersignup|sprintf2:"<a href=\"$WEB_ROOT/register.php\">":"</a>"}
                        {/if}
                    </div>
                </div>
            {/if}
            <!-- Shopping Cart -->
            <div class="pull-right nav">
                <a href="{$WEB_ROOT}/cart.php?a=view" class="quick-nav"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs">{$LANG.viewcart} (</span><span id="cartItemCount">{$cartitemcount}</span><span class="hidden-xs">)</span></a>
            </div>

            {if $adminMasqueradingAsClient}
                <!-- Return to admin link -->
                <div class="alert alert-danger admin-masquerade-notice">
                    {$LANG.adminmasqueradingasclient}<br />
                    <a href="{$WEB_ROOT}/logout.php?returntoadmin=1" class="alert-link">{$LANG.logoutandreturntoadminarea}</a>
                </div>
            {elseif $adminLoggedIn}
                <!-- Return to admin link -->
                <div class="alert alert-danger admin-masquerade-notice">
                    {$LANG.adminloggedin}<br />
                    <a href="{$WEB_ROOT}/logout.php?returntoadmin=1" class="alert-link">{$LANG.returntoadminarea}</a>
                </div>
            {/if}

        </div>
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

                </ul>

            </div><!-- /.navbar-collapse -->
        </div>
    </nav>

</section>

{if $templatefile == 'homepage'}
    <section id="home-banner" data-bg-img="{$WEB_ROOT}/templates/{$template}/img/home-banner-bg.png">
        <div class="container text-center">
            {if $registerdomainenabled || $transferdomainenabled}
                <h2>{$LANG.homebegin}</h2>
                <form method="post" action="domainchecker.php">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                            <div class="input-group input-group-lg">
                                <input type="text" class="form-control" name="domain" placeholder="{$LANG.exampledomain}" autocapitalize="none" />
                                <span class="input-group-btn">
                                    {if $registerdomainenabled}
                                        <input type="submit" class="btn btn-warning" value="{$LANG.search}" />
                                    {/if}
                                    {if $transferdomainenabled}
                                        <input type="submit" name="transfer" class="btn btn-info" value="{$LANG.domainstransfer}" />
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
                                    <i class="fa fa-globe"></i>
                                    <p>
                                        {$LANG.buyadomain} <span>&raquo;</span>
                                    </p>
                                </a>
                            </li>
                        {/if}
                        <li>
                            <a id="btnOrderHosting" href="cart.php">
                                <i class="fa fa-hdd-o"></i>
                                <p>
                                    {$LANG.orderhosting} <span>&raquo;</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a id="btnMakePayment" href="clientarea.php">
                                <i class="fa fa-credit-card"></i>
                                <p>
                                    {$LANG.makepayment} <span>&raquo;</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a id="btnGetSupport" href="submitticket.php">
                                <i class="fa fa-envelope-o"></i>
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
