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
    
<div id="header-holder">
    <div class="bottom-gradiant"></div>
    
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
                        <a href="{$WEB_ROOT}/logout.php" class="btn btn-action">
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
                        <a href="{$WEB_ROOT}/cart.php?a=view" class="btn btn-action">
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

            {if $assetLogoPath}
                <a href="{$WEB_ROOT}/index.php" class="logo"><img src="{$assetLogoPath}" alt="{$companyname}"></a>
            {else}
                <a href="{$WEB_ROOT}/index.php" class="logo logo-text"><img class="logo" src="{$WEB_ROOT}/templates/{$template}/images/logo.svg" alt="{$companyname}"></a>
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
                        <li><a class="chat-button" href="#">Chat now</a></li>
                    </ul>

                </div><!-- /.navbar-collapse -->
            </div>
        </nav>

    </section>
    {if $templatefile == 'homepage'}
    <div id="top-content" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {if $registerdomainenabled || $transferdomainenabled}
                    <div class="big-title">Find a space for you.<br>Start today.</div>
                    <div class="domain-search-holder">
                        <form id="domain-search" method="post" action="domainchecker.php">
                            <input id="domain-text" type="text" name="domain" placeholder="{$LANG.exampledomain}" />
                            {if $registerdomainenabled}
                            <span class="inline-button">
                                <input id="search-btn" type="submit" name="submit" value="{$LANG.search}" />
                            </span>
                            {/if}
                            {if $transferdomainenabled}
                            <span class="inline-button">
                                <input id="transfer-btn" type="submit" name="transfer" value="{$LANG.domainstransfer}" />
                            </span>
                            {/if}
                        </form>
                        <div class="captcha-holder">{include file="$template/includes/captcha.tpl"}</div>
                    </div>
                    {else}
                        <div class="toparea-space"></div>
                    {/if}
                </div>
                <div class="col-md-12">
                    <div class="arrow-button-holder">
                        <a href="{$WEB_ROOT}/cart.php?a=view">
                            <div class="arrow-icon">
                                <i class="sphst sphst-arrow-down"></i>
                            </div>
                            <div class="button-text">Go to plans</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {/if}
</div>

{if $templatefile == 'homepage'}
<div class="row-title-only container-fluid more-padding">
    <div class="container">
        <div class="row">
            <div class="row-title">Why you’ll be happy with Space Host?</div>
        </div>
    </div>
</div>
<div id="features" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="feature-box">
                    <div class="feature-icon">
                        <img src="{$WEB_ROOT}/templates/{$template}/images/feature1.svg" alt="">
                    </div>
                    <div class="feature-title">Site Bulilder</div>
                    <div class="feature-details">
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                        <h4>Site Bulilder</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="feature-box">
                    <div class="feature-icon">
                        <img src="{$WEB_ROOT}/templates/{$template}/images/feature2.svg" alt="">
                    </div>
                    <div class="feature-title">100% Uptime</div>
                    <div class="feature-details">
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                        <h4>100% Uptime</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="feature-box">
                    <div class="feature-icon">
                        <img src="{$WEB_ROOT}/templates/{$template}/images/feature3.svg" alt="">
                    </div>
                    <div class="feature-title">Fast Loaded</div>
                    <div class="feature-details">
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                        <h4>Fast Loaded</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="feature-box">
                    <div class="feature-icon">
                        <img src="{$WEB_ROOT}/templates/{$template}/images/feature4.svg" alt="">
                    </div>
                    <div class="feature-title">Upload files</div>
                    <div class="feature-details">
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                        <h4>Upload files</h4>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<div id="partners" class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="row-title">Trusted by the best</div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem<br> accusantium</p>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="partners-slider">
                <div><img src="{$WEB_ROOT}/templates/{$template}/images/partner1.png" alt=""></div>
                <div><img src="{$WEB_ROOT}/templates/{$template}/images/partner2.png" alt=""></div>
                <div><img src="{$WEB_ROOT}/templates/{$template}/images/partner3.png" alt=""></div>
                <div><img src="{$WEB_ROOT}/templates/{$template}/images/partner4.png" alt=""></div>
                <div><img src="{$WEB_ROOT}/templates/{$template}/images/partner5.png" alt=""></div>
                <div><img src="{$WEB_ROOT}/templates/{$template}/images/partner6.png" alt=""></div>
                <div><img src="{$WEB_ROOT}/templates/{$template}/images/partner7.png" alt=""></div>
            </div>
        </div>
    </div>
</div>
<div id="more-features" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">What we offer?</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-title">Web Hosting</div>
                    <div class="mfeature-text bg-color1">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-title">Web Design</div>
                    <div class="mfeature-text bg-color2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-title">Support</div>
                    <div class="mfeature-text bg-color3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</div>
                </div>
            </div>
            
        </div>
    </div>
</div>
{if $registerdomainenabled || $transferdomainenabled}
<div id="search-box" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Ready?<br>
Let’s get strated.</p>
                <div class="domain-search-holder">
                    <form id="domain-search2" method="post" action="domainchecker.php">
                        <input id="domain-text2" type="text" name="domain" placeholder="{$LANG.exampledomain}" />
                        {if $registerdomainenabled}
                        <span class="inline-button">
                            <input id="search-btn2" type="submit" name="submit" value="{$LANG.search}" />
                        </span>
                        {/if}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{/if}
<div id="domain-pricing" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">What you will get with domain names?</div>
            </div>
        </div>
        <div class="row domain-lists-holder">
            <div class="col-sm-12">
                <div class="domain-pricing-holder">
                    <script language="javascript" src="feeds/domainpricing.php"></script>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row-title-only container-fluid">
    <div class="container">
        <div class="row">
            <div class="row-title">What people say about Space Host?</div>
        </div>
    </div>
</div>
<div id="testimonials" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="testimonial-box right-img">
                    <div class="row">
                        <div class="col-xs-3 img-holder dot-color1"><img src="{$WEB_ROOT}/templates/{$template}/images/person1.jpg" alt=""></div>
                        <div class="col-xs-9">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-box right-img">
                    <div class="row">
                        <div class="col-xs-3 img-holder dot-color2"><img src="{$WEB_ROOT}/templates/{$template}/images/person2.jpg" alt=""></div>
                        <div class="col-xs-9">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonials-title">Grow with us<br>
See results.</div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-box left-img">
                    <div class="row">
                        <div class="col-xs-3 img-holder dot-color3"><img src="{$WEB_ROOT}/templates/{$template}/images/person3.jpg" alt=""></div>
                        <div class="col-xs-9">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-box left-img">
                    <div class="row">
                        <div class="col-xs-3 img-holder dot-color4"><img src="{$WEB_ROOT}/templates/{$template}/images/person4.jpg" alt=""></div>
                        <div class="col-xs-9">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="message-with-link" class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <span class="text">Lorem ipsum dolor sit amet, consectetur adipiscing.</span> <a href="{$WEB_ROOT}/contact.php" class="button-bluegrey">Request a Demo</a><a href="{$WEB_ROOT}/register.php" class="button-purple">Create free account</a>
        </div>
    </div>
</div>
{/if}

{include file="$template/includes/verifyemail.tpl"}
<div id="main-body-holder" class="container-fluid {if $templatefile eq 'products'}pricing{/if}">
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
