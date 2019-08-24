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
                        {if count($clientAlerts) > 0}<span class="label label-info">NEW</span>{/if}
                        <b class="caret"></b>
                    </a>
                    <div id="accountNotificationsContent" class="hidden">
                        <ul class="client-alerts">
                        {foreach $clientAlerts as $alert}
                            <li>
                                <a href="{$alert->getLink()}">
                                    <i class="fa fa-fw fa-{if $alert->getSeverity() == 'danger'}exclamation-circle{elseif $alert->getSeverity() == 'warning'}warning{elseif $alert->getSeverity() == 'info'}info-circle{else}check-circle{/if}"></i>
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
                    <a href="{$WEB_ROOT}/cart.php?a=view">
                        {$LANG.viewcart}
                    </a>
                </li>
            {/if}
            {if $adminMasqueradingAsClient || $adminLoggedIn}
                <li>
                    <a href="{$WEB_ROOT}/logout.php?returntoadmin=1" class="btn btn-logged-in-admin" data-toggle="tooltip" data-placement="bottom" title="{if $adminMasqueradingAsClient}{$LANG.adminmasqueradingasclient} {$LANG.logoutandreturntoadminarea}{else}{$LANG.adminloggedin} {$LANG.returntoadminarea}{/if}">
                        <i class="fa fa-sign-out"></i>
                    </a>
                </li>
            {/if}
        </ul>

        

    </div>
</section>

<!--===== FLATHOST NAVIGATION ======-->

<nav class="navbar navbar-default navbar-static-top" role="navigation"> 
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="{$WEB_ROOT}/index.php"> <img src="{$WEB_ROOT}/templates/{$template}/img/logo.png" alt="{$companyname}" /> </a> </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../index.html">HOME</a></li>
        <li class="hidden-sm"><a href="#">FEATURES</a></li>
        <li class="hidden-sm"><a href="#">PARTNERS</a></li>
        <li><a href="#pricing">PRICING</a></li>
        <li><a href="#">CONTACT</a></li>
      </ul>
      </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
    
  </div>
</nav>



<section id="main-menu">

    <nav id="nav" class="navbar navbar-inverse navbar-main" role="navigation">
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
    <section id="home-banner">
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
                                        <input type="submit" class="btn search" value="{$LANG.search}" />
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


{if $templatefile == 'clientareahome'}

<div class="container">
<div class="tiles clearfix">
    <div class="row">
        <div class="col-sm-3 col-xs-6" onclick="window.location='clientarea.php?action=services'">
            <div class="tile services-stats"><a href="clientarea.php?action=services">
                            <div class="icon"><i class="fa fa-cube"></i></div>
                            <div class="stat">{$clientsstats.productsnumactive}</div>
                            <div class="title stats-head">{$LANG.navservices} <span>→</span> </div>
                         </a></div>
        </div>
        {if $registerdomainenabled || $transferdomainenabled}
            <div class="col-sm-3 col-xs-6" onclick="window.location='clientarea.php?action=domains'">
                <div class="tile domains-stats"><a href="clientarea.php?action=domains">
                                    <div class="icon"><i class="fa fa-globe"></i></div>
                                    <div class="stat">{$clientsstats.numactivedomains}</div>
                                    <div class="title stats-head">{$LANG.navdomains} <span>→</span> </div>
                                 </a></div>
            </div>
        {elseif $condlinks.affiliates && $clientsstats.isAffiliate}
            <div class="col-sm-3 col-xs-6" onclick="window.location='affiliates.php'">
                <div class="tile domains-stats"><a href="affiliates.php">
                                    <div class="icon"><i class="fa fa-shopping-cart"></i></div>
                                    <div class="stat">{$clientsstats.numaffiliatesignups}</div>
                                    <div class="title stats-head">{$LANG.affiliatessignups} <span>→</span> </div>
                                 </a></div>
            </div>
        {else}
            <div class="col-sm-3 col-xs-6" onclick="window.location='clientarea.php?action=quotes'">
               <div class="tile domains-stats"> <a href="clientarea.php?action=quotes">
                                   <div class="icon"><i class="fa fa-file-text-o"></i></div>
                                   <div class="stat">{$clientsstats.numquotes}</div>
                                   <div class="title stats-head">{$LANG.quotes} <span>→</span> </div>
                                </a></div>
            </div>
        {/if}
        <div class="col-sm-3 col-xs-6" onclick="window.location='supporttickets.php'">
           <div class="tile tickets-stats"> <a href="supporttickets.php">
                           <div class="icon"><i class="fa fa-comments"></i></div>
                           <div class="stat">{$clientsstats.numactivetickets}</div>
                           <div class="title stats-head">{$LANG.navtickets} <span>→</span> </div>
                        </a></div>
        </div>
        <div class="col-sm-3 col-xs-6" onclick="window.location='clientarea.php?action=invoices'">
           <div class="tile invoices-stats"> <a href="clientarea.php?action=invoices">
                           <div class="icon"><i class="fa fa-credit-card"></i></div>
                           <div class="stat">{$clientsstats.numunpaidinvoices}</div>
                           <div class="title stats-head">{$LANG.navinvoices}<span>→</span> </div>
                        </a></div>
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