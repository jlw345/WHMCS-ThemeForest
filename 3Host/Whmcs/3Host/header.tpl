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
    
<section id="header">

    <!-- Top Panel -->
    <div class="top-panel static">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <ul class="list-inline top-panel-info">
                    <li><a href="#"><i class="fa fa-mobile"></i> +1234567890</a></li>
                    <li><a href="#"><i class="fa fa-envelope-o"></i> support@iwthemes.com</a></li>
                </ul>
            </div>

            <div class="col-lg-6 col-md-6">
                <!-- Social Panel -->
                <ul class="list-inline right top-panel-social">
                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                    <li><a href="#"><i class="fa fa-server"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                </ul>
                <!--/Social Panel -->
            </div>
        </div>
    </div>
    <!--/Top Panel -->

    <!-- Menu - Logo -->
    <div class="menulogo-panel static">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="logo">
                    <h1><a href="{$WEB_ROOT}/index.php">3Host</a></h1>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <div id="top-nav">
                    <ul class="list-inline right menu">
                        <li><a data-scroll href="http://html.iwthemes.com/3Host/run/">Home</a></li>
                        <li><a data-scroll href="http://html.iwthemes.com/3Host/run/#services">Services</a></li>
                        <li><a data-scroll href="http://html.iwthemes.com/3Host/run/#company">Company</a></li>
                        <li><a data-scroll href="http://html.iwthemes.com/3Host/run/#pricing">Pricing</a></li>
                        <li><a data-scroll href="http://html.iwthemes.com/3Host/run/#promo">Promo</a></li>
                        <li><a data-scroll href="http://html.iwthemes.com/3Host/run/#contact">Contact Us</a></li>
                        <!-- Language -->
                        <li>
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
                        </li>
                        <!--/Language-->
                        
                        <!-- Shopping Cart -->
                        <li>
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
                        </li>
                        <!--/Shopping Cart -->
                        
                        <!--Login/Account Notifications -->
                        <li>
                            {if $loggedin}
                            <div class="pull-right nav">
                                <a href="#" class="quick-nav login" data-toggle="popover" id="accountNotifications" data-placement="bottom" title="{lang key="notifications"}"><i class="fa fa-info"></i> {$LANG.notifications} ({$clientAlerts|count})</a>
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
                                <a href="#" class="quick-nav login" data-toggle="popover" id="loginOrRegister" data-placement="bottom"><i class="fa fa-user"></i> {$LANG.login}</a>
                                <div id="loginOrRegisterContent" class="hidden">
                                    <form action="{if $systemsslurl}{$systemsslurl}{else}{$systemurl}{/if}dologin.php" method="post" role="form" class="form-whmcs">
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
                        </li>
                        <!--/Login/Account Notifications -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /Menu - Logo -->
</section>

<section id="main-menu">

    <nav id="nav" class="navbar navbar-default navbar-main bg-gray" role="navigation">
        <div class="row">
            <div class="col-lg-12">
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
        </div>
    </nav>

</section>

{if $templatefile == 'homepage'}
<section id="home-banner">
        <div class="opacity">
            <div class="container text-center">
            {if $registerdomainenabled || $transferdomainenabled}
                <h2>{$LANG.homebegin}</h2>
                <form method="post" action="domainchecker.php" class="domaincheckerclass">
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
        </div>
    </section>
    
<div class="home-shortcuts bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-3 hidden-sm hidden-xs text-center">
                <h2 class="lead">
                    {$LANG.howcanwehelp}
                </h2>
            </div>
            <div class="col-sm-12 col-md-9">
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
