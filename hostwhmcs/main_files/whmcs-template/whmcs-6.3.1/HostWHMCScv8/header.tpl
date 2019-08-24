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

<!-- Header Area Start -->
<header id="header">
    <!-- Header Navbar Start -->
    <nav class="header--navbar navbar navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <!-- Navbar Toggle Button Start -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Navbar Toggle Button End -->
                <!-- Logo Start -->
                <a href="index.html" class="header--logo navbar-brand">
                    <span><i class="fa fm fa-rocket"></i>Host</span>WHMCS
                </a>
                <!-- Logo End -->
            </div>
            <!-- Header Nav Start -->
            <div id="headerNav" class="navbar-collapse collapse">
                {if $loggedin}
                    <div class="header--login-btn">
                        <a href="{$WEB_ROOT}/logout.php" class="btn--primary btn--ripple">Logout</a>
                    </div>
                {else}
                    <div class="header--login-btn">
                        <a href="{$WEB_ROOT}/clientarea.php" class="btn--primary btn--ripple">Login</a>
                    </div>
                {/if}
                
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown">Hosting<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="shared-hosting.html">Shared Hosting</a></li>
                            <li><a href="reseller-hosting.html">Reseller Hosting</a></li>
                            <li><a href="vps-hosting.html">VPS Hosting</a></li>
                            <li><a href="dedicated-hosting.html">Dedicated Hosting</a></li>
                        </ul>
                    </li>
                    <li><a href="domain.html">Domain</a></li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown">Pages<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="about.html">About</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="testimonial.html">Testimonial</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="signup.html">Signup</a></li>
                            <li><a href="affiliate.html">Affiliate</a></li>
                            <li><a href="404.html">404</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown">Blog<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-sidebar-left.html">Blog Sidebar Left</a></li>
                            <li><a href="blog-sidebar-right.html">Blog Sidebar Right</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <!-- Header Nav End -->
        </div>
        
        <section id="topNav">
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

        <div id="main-menu">
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
                    </div>
                </div>
            </nav>
        </div>
    </nav>
    <!-- Header Navbar End -->
</header>
<!-- Header Area End -->

{if $templatefile == 'homepage'}
    <section id="home-banner" data-bg-img="{$WEB_ROOT}/templates/{$template}/img/home-banner-img/bg.png">
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

<section id="main-body" class="container">

    <div class="row">
        {if !$inShoppingCart && ($primarySidebar->hasChildren() || $secondarySidebar->hasChildren())}
            {if $primarySidebar->hasChildren()}
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
            {if !$primarySidebar->hasChildren() && !$showingLoginPage && !$inShoppingCart && $templatefile != 'homepage'}
                {include file="$template/includes/pageheader.tpl" title=$displayTitle desc=$tagline showbreadcrumb=true}
            {/if}
