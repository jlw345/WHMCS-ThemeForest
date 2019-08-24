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
<body {if $loginpage eq 1}class="fullpage"{/if}>
{if $loginpage eq 0}
{if $adminMasqueradingAsClient}
    <!-- Return to admin link -->
    <div class="container-fluid admin-message">
        <div class="row">
            <div class="col-xs-12">
                <div class="alert admin-masquerade-notice">
                    {$LANG.adminmasqueradingasclient} <a href="{$WEB_ROOT}/logout.php?returntoadmin=1" class="alert-link">{$LANG.logoutandreturntoadminarea}</a>
                </div>
            </div>
        </div>
    </div>
{elseif $adminLoggedIn}
    <!-- Return to admin link -->
    <div class="container-fluid admin-message">
        <div class="row">
            <div class="col-xs-12">
                <div class="alert admin-masquerade-notice">
                    {$LANG.adminloggedin} <a href="{$WEB_ROOT}/logout.php?returntoadmin=1" class="alert-link">{$LANG.returntoadminarea}</a>
                </div>
            </div>
        </div>
    </div>
{/if}

<nav id="mainNav" class="navbar navbar-default navbar-full">
    <div class="container container-nav">
        <div class="navbar-header">
            <button aria-expanded="false" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="{$WEB_ROOT}/index.php">
                <img class="logo" src="{$WEB_ROOT}/templates/{$template}/images/logo.png" alt="{$companyname}">
            </a>
        </div>
        <div style="height: 1px;" role="main" aria-expanded="false" class="navbar-collapse collapse" id="bs">
             <ul class="nav navbar-nav navbar-right">
                {include file="$template/includes/navbar.tpl" navbar=$primaryNavbar}
                {include file="$template/includes/navbar.tpl" navbar=$secondaryNavbar}
                <li><a class="chat-button" href="#">Chat now</a></li>
            </ul>
        </div>
    </div>
</nav>
    
{$headeroutput}

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
        </div>
    </div>
</section>

{if $templatefile == 'homepage'}
<div id="top-content" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div id="main-slider">
                    <div class="slide domainsearch-slide" title="Welcome !">
                        {if $registerdomainenabled || $transferdomainenabled}
                        <div class="image-holder"><img src="{$WEB_ROOT}/templates/{$template}/images/bg1.png" alt="" /></div>
                        <div class="b-title">Find a personal or professional domain<br>
that stands out.</div>
                        <div class="domain-search-holder">
                            <form id="domain-search" method="post" action="domainchecker.php">
                                <input id="domain-text" type="text" name="domain" placeholder="Search a domain name here" />
                                <ul>
                                {if $registerdomainenabled}
                                    <li><input id="search-btn" type="submit" value="{$LANG.search}" /></li>
                                {/if}
                                {if $transferdomainenabled}
                                    <li><input id="transfer-btn" type="submit" name="transfer" class="transfer" value="{$LANG.domainstransfer}" /></li>
                                {/if}
                                </ul>
                            </form>
                            <div class="captcha-holder">{include file="$template/includes/captcha.tpl"}</div>
                        </div>
                        {else}
                        <div class="toparea-space"></div>
                        {/if}
                    </div>
                    <div class="slide info-slide1" title="Features">
                        <div class="image-holder"><img src="{$WEB_ROOT}/templates/{$template}/images/main-slide-img1.png" alt="" /></div>
                        <div class="text-holder">Take your career to the next level<br>
Get your website today.</div>
                        <div class="button-holder"><a href="signup.html" class="blue-button">Sign up now</a></div>
                    </div>
                    <div class="slide info-slide2" title="Get started">
                        <div class="image-holder"><img src="{$WEB_ROOT}/templates/{$template}/images/main-slide-img2.png" alt="" /></div>
                        <div class="text-holder">Take your career to the next level<br>
Get your website today.</div>
                        <div class="button-holder"><a href="signup.html" class="blue-button">Sign up now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="info" class="container-fluid">
    <canvas id="infobg" data-paper-resize="true"></canvas>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">Regret-free choise<br>
The best of the best in all times!
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="info-text">adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure.</div>
                
                <a href="#" class="white-green-shadow-button">All Features</a>
            </div>
        </div>
    </div>
</div>
<div id="features" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">What makes Hostino the best choise for you?</div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <div class="icon-bg"><img src="{$WEB_ROOT}/templates/{$template}/images/clouds-light.png" alt="" /></div>
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="mfeature-title">Uptime 100%. Guaranteed.</div>
                    <div class="mfeature-details">Mauris at libero sed justo pretium maximus ac non ex. Donec sit amet ultrices dolo.</div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="mfeature-box active">
                    <div class="mfeature-icon">
                        <div class="icon-bg"><img src="{$WEB_ROOT}/templates/{$template}/images/clouds-light.png" alt="" /></div>
                        <i class="fa fa-ticket"></i>
                    </div>
                    <div class="mfeature-title">Readymade templates</div>
                    <div class="mfeature-details">Mauris at libero sed justo pretium maximus ac non ex. Donec sit amet ultrices dolo.</div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <div class="icon-bg"><img src="{$WEB_ROOT}/templates/{$template}/images/clouds-light.png" alt="" /></div>
                        <i class="fa fa-comments-o"></i>
                    </div>
                    <div class="mfeature-title">Amazing support</div>
                    <div class="mfeature-details">Mauris at libero sed justo pretium maximus ac non ex. Donec sit amet ultrices dolo.</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a class="light-blue-button" href="#">About us</a>
            </div>
        </div>    
    </div>
</div>
<div id="apps" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title" title="One-Click Install">+ The best applications on the web, with one click install.</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="apps-holder">
                    <div class="apps-links-holder">
                        <div class="app-icon-holder app-icon-holder1 opened" data-id="1">
                            <div class="app-icon"><img src="{$WEB_ROOT}/templates/{$template}/images/wordpress.png" alt="wordpress"></div>
                            <div class="app-title">Wordpress</div>
                        </div>
                        <div class="app-icon-holder app-icon-holder2" data-id="2">
                            <div class="app-icon"><img src="{$WEB_ROOT}/templates/{$template}/images/joomla.png" alt="joomla"></div>
                            <div class="app-title">Joomla</div>
                        </div>
                        <div class="app-icon-holder app-icon-holder3" data-id="3">
                            <div class="app-icon"><img src="{$WEB_ROOT}/templates/{$template}/images/drupal.png" alt="drupal"></div>
                            <div class="app-title">Drupal</div>
                        </div>
                        <div class="app-icon-holder app-icon-holder4" data-id="4">
                            <div class="app-icon"><img src="{$WEB_ROOT}/templates/{$template}/images/magento.png" alt="magento"></div>
                            <div class="app-title">Magento</div>
                        </div>
                    </div>
                    <div class="apps-details-holder">
                        <div class="app-details">
                            <div class="app-details1 show-details">
                                <div class="app-title">Wordpress Hosting</div>
                                <div class="app-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                            </div>
                            <div class="app-details2">
                                <div class="app-title">Joomla Hosting</div>
                                <div class="app-text">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                            </div>
                            <div class="app-details3">
                                <div class="app-title">Drupal Hosting</div>
                                <div class="app-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</div>
                            </div>
                            <div class="app-details4">
                                <div class="app-title">Magento Hosting</div>
                                <div class="app-text">emo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, mo enim ipsam voluptatem quia voluptas sit.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="testimonials" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="row-title" title="Testimonials">Testimonials</div>
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
                <div class="row-title" title="Great features">And more other great features</div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <div class="icon-bg"><img src="{$WEB_ROOT}/templates/{$template}/images/cloud-light.png" alt="" /></div>
                        <div class="icon-img"><img src="{$WEB_ROOT}/templates/{$template}/images/feature1.png" alt="" /></div>
                    </div>
                    <div class="mfeature-title">%99.9 Uptime</div>
                    <div class="mfeature-details">Mauris at libero sed justo pretium maximus ac non ex. Donec sit amet ultrices dolo.</div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <div class="icon-bg"><img src="{$WEB_ROOT}/templates/{$template}/images/cloud-light.png" alt="" /></div>
                        <div class="icon-img"><img src="{$WEB_ROOT}/templates/{$template}/images/feature2.png" alt="" /></div>
                    </div>
                    <div class="mfeature-title">Domain Names</div>
                    <div class="mfeature-details">Mauris at libero sed justo pretium maximus ac non ex. Donec sit amet ultrices dolo.</div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <div class="icon-bg"><img src="{$WEB_ROOT}/templates/{$template}/images/cloud-light.png" alt="" /></div>
                        <div class="icon-img"><img src="{$WEB_ROOT}/templates/{$template}/images/feature3.png" alt="" /></div>
                    </div>
                    <div class="mfeature-title">Envirmoent Friendly</div>
                    <div class="mfeature-details">Mauris at libero sed justo pretium maximus ac non ex. Donec sit amet ultrices dolo.</div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <div class="icon-bg"><img src="{$WEB_ROOT}/templates/{$template}/images/cloud-light.png" alt="" /></div>
                        <div class="icon-img"><img src="{$WEB_ROOT}/templates/{$template}/images/feature4.png" alt="" /></div>
                    </div>
                    <div class="mfeature-title">Secure Servers</div>
                    <div class="mfeature-details">Mauris at libero sed justo pretium maximus ac non ex. Donec sit amet ultrices dolo.</div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <div class="icon-bg"><img src="{$WEB_ROOT}/templates/{$template}/images/cloud-light.png" alt="" /></div>
                        <div class="icon-img"><img src="{$WEB_ROOT}/templates/{$template}/images/feature5.png" alt="" /></div>
                    </div>
                    <div class="mfeature-title">Page Builder</div>
                    <div class="mfeature-details">Mauris at libero sed justo pretium maximus ac non ex. Donec sit amet ultrices dolo.</div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <div class="icon-bg"><img src="{$WEB_ROOT}/templates/{$template}/images/cloud-light.png" alt="" /></div>
                        <div class="icon-img"><img src="{$WEB_ROOT}/templates/{$template}/images/feature6.png" alt="" /></div>
                    </div>
                    <div class="mfeature-title">E-commerce Ready</div>
                    <div class="mfeature-details">Mauris at libero sed justo pretium maximus ac non ex. Donec sit amet ultrices dolo.</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="bluebg-info" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text">Ready to rock with Hostino,<br>
Register Today.</div>
                <a href="signup.html" class="white-button">Register</a>
            </div>
        </div>
    </div>
</div>
{else}
<div id="page-head" class="container-fluid inner-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="page-title">{$pagetitle}</div>
            </div>
        </div>
    </div>
</div>
{/if}

{include file="$template/includes/verifyemail.tpl"}
<div id="main-body-holder" class="container-fluid">
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
{/if}