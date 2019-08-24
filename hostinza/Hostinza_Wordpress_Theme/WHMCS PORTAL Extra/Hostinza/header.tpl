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
        {if $templatefile == 'homepage'}
            <div class="header-transparent">
            {else}
                <div class="header-transparent not-home">

                {/if}
                <!-- topBar section -->
                <div class="xs-top-bar">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="xs-top-bar-info">
                                    <li>
                                        <p><i class="icon icon-phone3"></i>009-215-5596</p>
                                    </li>
                                    <li>
                                        <a href="mailto:info@domain.com"><i class="icon icon-envelope4"></i>info@domain.com</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="top-nav top-menu">
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
                                                                <i class="fas fa-fw fa-{if $alert->getSeverity() == 'danger'}exclamation-circle{elseif $alert->getSeverity() == 'warning'}warning{elseif $alert->getSeverity() == 'info'}info-circle{else}check-circle{/if}"></i>
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
                                            <a href="{$WEB_ROOT}/clientarea.php"><i class="icon icon-key2"></i> {$LANG.login}</a>
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
                                                <i class="fas fa-sign-out"></i>
                                            </a>
                                        </li>
                                    {/if}
                                </ul>
                            </div>
                        </div><!-- .row END -->
                    </div><!-- .container END -->
                </div>    <!-- End topBar section -->
                <!-- header section -->
                <header class="xs-header">
                    <div class="container">
                         <div class="row">
                            <div class="col-lg-2">
                                <div class="xs-logo-wraper">
                                    {if $assetLogoPath}
                                        <a href="{$WEB_ROOT}/index.php" class="logo"><img src="{$assetLogoPath}" alt="{$companyname}"></a>
                                        {else}
                                        <a href="{$WEB_ROOT}/index.php" class="logo logo-text">{$companyname}</a>
                                    {/if}
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <section id="main-menu">

                                    <nav id="nav" class="navbar navbar-default navbar-main xs-menus" role="navigation">
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                        </div>

                                        <!-- Collect the nav links, forms, and other content for toggling -->
                                        <div class="collapse navbar-collapse nav-menus-wrapper" id="main-nav">
                                            <ul class="nav navbar-nav navbar-right">
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">Pages</a></li>
                                            <li><a href="#">Hosting</a></li>
                                            <li><a href="#">News</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="http://whmcs.finesttheme.com/" target="_blank">Whmcs</a></li>
                                            </ul>
                                        </div><!-- /.navbar-collapse -->
                                    </nav>
                                </section>
                            </div>
                        </div><!-- .row END -->
                    </div><!-- .container END -->
                </header>    <!-- End header section -->

                <!-- header section -->
                <header class="xs-header whmcs-submenu">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <section id="main-menu">

                                    <nav id="nav" class="navbar navbar-default navbar-main" role="navigation">
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
                                    </nav>

                                </section>
                            </div>

                        </div><!-- .row END -->
                    </div><!-- .container END -->
                </header>    <!-- End header section -->
            </div>



            {if $templatefile == 'homepage'}
                <section id="home-banner">
                    <div class="icon-bg" style="background-image: url({$WEB_ROOT}/templates/{$template}/img/xs-home-bg.png);"></div>
                    <div class="container text-center">
                        <div class="col-md-10 col-md-offset-1">
                            {if $registerdomainenabled || $transferdomainenabled}
                                <h2>{$LANG.homebegin}</h2>
                                <form method="post" action="domainchecker.php">
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                                            <div class="input-group input-group-lg">
                                                <input type="text" class="form-control" name="domain" placeholder="{$LANG.exampledomain}" autocapitalize="none" />
                                                <span class="input-group-btn">
                                                    {if $registerdomainenabled}
                                                        <input type="submit" class="btn search" value="{$LANG.search}" />
                                                    {/if}
                                                    {if $transferdomainenabled}
                                                        <input type="submit" name="transfer" class="btn transfer" value="{$LANG.domainstransfer}" />
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
                <div class="home-shortcuts">

                    <div class="container">
                        <div class="row">
                            <div class="hidden-sm hidden-xs text-center">
                                <p class="lead">
                                    {$LANG.howcanwehelp}
                                </p>
                            </div>
                            <div class="col-sm-12 col-md-12">
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
                                            <i class="fas fa-hdd"></i>
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
                                            <i class="fas fa-envelope"></i>
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
            {if $templatefile == 'homepage'}
                <section id="main-body" class="xs-main-body">
                {else}
                    <section id="main-body">
                    {/if}
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
