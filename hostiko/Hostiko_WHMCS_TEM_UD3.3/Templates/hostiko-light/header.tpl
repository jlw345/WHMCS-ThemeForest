<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="{$charset}"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{if $kbarticle.title}{$kbarticle.title} - {/if}{$pagetitle} - {$companyname}</title>

    {include file="$template/includes/head.tpl"}

    {$headoutput}

</head>
<body data-phone-cc-input="{$phoneNumberInputStyle}">

{$headeroutput}
<nav class="navbar navbar-default no-margin">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header fixed-brand">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" id="menu-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        {if $assetLogoPath}
            <a href="{$WEB_ROOT}/index.php" class="logo"><img src="{$assetLogoPath}" alt="{$companyname}"></a>
        {else}
            <a href="{$WEB_ROOT}/index.php" class="logo logo-text">{$companyname}</a>
        {/if}
    </div>

    <!-- navbar-header-->
    <div class="header_content_right " id="bs-example-navbar-collapse-1">

        <ul class="nav navbar-nav">
            <li class="active">
                <button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </li>
        </ul>
        <ul class="top-nav pull-left"> 
            {if $languagechangeenabled && count($locales) > 1}
                <li>
                    <a href="#" class="choose-language" data-toggle="popover" id="languageChooser">
                        <i class="fas fa-language"></i>
                        {* $activeLocale.localisedName *}
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

            {if $adminMasqueradingAsClient || $adminLoggedIn}
                <li>
                    <a href="{$WEB_ROOT}/logout.php?returntoadmin=1" class="btn btn-logged-in-admin"
                       data-toggle="tooltip" data-placement="bottom"
                       title="{if $adminMasqueradingAsClient}{$LANG.adminmasqueradingasclient} {$LANG.logoutandreturntoadminarea}{else}{$LANG.adminloggedin} {$LANG.returntoadminarea}{/if}">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </li>
            {/if}

            {if $loggedin}
                <li>
                    <a href="#" data-toggle="popover" id="accountNotifications" data-placement="bottom">
                        <i class="fas fa-bell"></i>
                        {* $LANG.notifications *}
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
            {/if}
            <li>
                <a href="{$WEB_ROOT}/cart.php?a=view">
                    <i class="fas fa-shopping-cart"></i>
                    {* $LANG.viewcart*}
                </a>
            </li>
            </ul>
            <ul class="top-nav pull-right">
            {include file="$template/includes/navbar.tpl" navbar=$secondaryNavbar}


        </ul>


    </div>


    <!-- bs-example-navbar-collapse-1 -->
</nav>
<div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <div class="collapse navbar-collapse" id="primary-nav">
            <ul class="nav navbar-nav">
            {include file="$template/includes/navbar.tpl" navbar=$primaryNavbar}
            </ul>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid xyz">

                    {if $templatefile == 'homepage'}
                            <div class="header-lined">
                                <h1>{$LANG.howcanwehelp}</h1>
                            </div>


                        <div class="home-shortcuts">
                            <div class="col-sm-12 col-md-12">
                                <div class="row">
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



                        <section id="home-banner" class="col-xs-12">
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

                    {/if}

                    {include file="$template/includes/verifyemail.tpl"}
                    <section id="main-body">
                        <div class="container{if $skipMainBodyContainer}-fluid without-padding{/if}">
                            <div class="row">

                                {if !$inShoppingCart && ($primarySidebar->hasChildren() || $secondarySidebar->hasChildren())}
                                    {if $primarySidebar->hasChildren() && !$skipMainBodyContainer}
                                        <div class="col-md-12 pull-md-left">
                                            {include file="$template/includes/pageheader.tpl" title=$displayTitle desc=$tagline showbreadcrumb=true}
                                        </div>
                                    {/if}
                                    <div class="col-md-3 pull-md-right sidebar">
                                        {include file="$template/includes/sidebar.tpl" sidebar=$primarySidebar}
                                    </div>
                                {/if}
                                <!-- Container for main page display content -->
                                <div class="{if !$inShoppingCart && ($primarySidebar->hasChildren() || $secondarySidebar->hasChildren())}col-md-9 pull-md-right{else}col-xs-12{/if} main-content">
                                    {if !$primarySidebar->hasChildren() && !$showingLoginPage && !$inShoppingCart && $templatefile != 'homepage' && !$skipMainBodyContainer}
                                        {include file="$template/includes/pageheader.tpl" title=$displayTitle desc=$tagline showbreadcrumb=true}
                                    {/if}











