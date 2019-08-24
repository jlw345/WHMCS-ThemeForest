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
	<div class="preloader--bounce">
		<div class="preloader-bouncer--1"></div>
		<div class="preloader-bouncer--2"></div>
	</div>
</div>
<!-- Preloader End -->

<!-- Navigation Area Start -->
<nav id="navigation">
    <div class="contact-bar">
        <div class="container">
            <div class="social-icons pull-left">
                <ul class="nav nav-tabs">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="contact-bar--text pull-left">
                <p><a href="mailto:support@example.com"><i class="fa fm fa-envelope"></i>support@example.com</a></p>
            </div>
            <div class="contact-bar--text pull-left">
                <p><a href="tel:+444000000000"><i class="fa fm fa-phone"></i>+444-000-000-000</a></p>
            </div>

            {if $adminLoggedIn || $loggedin }
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
            {else}
                <div class="contact-bar--text text-capitalize pull-right">
                    <p>
                        <a href="{$WEB_ROOT}/clientarea.php"><i class="fa fm fa-user"></i>login</a>
                        <span class="slash">/</span>
                        <a href="{$WEB_ROOT}/register.php"><i class="fa fm fa-user-plus"></i>signup</a>
                    </p>
                </div>
            {/if}
        </div>
    </div>
    <div class="navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Logo Start -->
                <a class="navbar-brand" href="http://themelooks.us/demo/ordomain/html/preview/index.html"><span><i class="fa fa-globe"></i> Or</span>Domain</a>
                <!-- Logo End -->
            </div>
            <div id="navbar" class="navbar-collapse collapse navbar-right reset-padding">
                <!-- Navigation Links Start -->
                <ul class="nav navbar-nav">
                    <li class="active"><a href="http://themelooks.us/demo/ordomain/html/preview/index.html">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hosting <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="http://themelooks.us/demo/ordomain/html/preview/shared-hosting.html">Shared</a></li>
                            <li><a href="http://themelooks.us/demo/ordomain/html/preview/reseller-hosting.html">Reseller</a></li>
                            <li><a href="http://themelooks.us/demo/ordomain/html/preview/vps-hosting-1.html">VPS Style 1</a></li>
                            <li><a href="http://themelooks.us/demo/ordomain/html/preview/vps-hosting-2.html">VPS Style 2</a></li>
                            <li><a href="http://themelooks.us/demo/ordomain/html/preview/dedicated-hosting-1.html">Dedicated Style 1</a></li>
                            <li><a href="http://themelooks.us/demo/ordomain/html/preview/dedicated-hosting-2.html">Dedicated Style 2</a></li>
                        </ul>
                    </li>
                    <li><a href="http://themelooks.us/demo/ordomain/html/preview/domains.html">Domains</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="http://themelooks.us/demo/ordomain/html/preview/about.html">About</a></li>
                            <li><a href="http://themelooks.us/demo/ordomain/html/preview/faq.html">FAQ</a></li>
                            <li><a href="http://themelooks.us/demo/ordomain/html/preview/datacenter.html">Datacenter</a></li>
                            <li><a href="http://themelooks.us/demo/ordomain/html/preview/testimonial.html">Testimonial</a></li>
                            <li><a href="http://themelooks.us/demo/ordomain/html/preview/login.html">Login</a></li>
                            <li><a href="http://themelooks.us/demo/ordomain/html/preview/affiliate.html">Affiliate</a></li>
                            <li><a href="http://themelooks.us/demo/ordomain/html/preview/404.html">404</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="http://themelooks.us/demo/ordomain/html/preview/blog.html">Blog</a></li>
                            <li><a href="http://themelooks.us/demo/ordomain/html/preview/blog_sidebar-left.html">Blog Sidebar Left</a></li>
                            <li><a href="http://themelooks.us/demo/ordomain/html/preview/blog_sidebar-right.html">Blog Sidebar Right</a></li>
                        </ul>
                    </li>
                    <li><a href="http://themelooks.us/demo/ordomain/html/preview/contact.html">Contact</a></li>
                </ul>
                <!-- Navigation Links End -->
            </div>
        </div>
    </div>
</nav>
<!-- Navigation Area End -->

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
    <section id="home-banner" data-bg-img="{$WEB_ROOT}/templates/{$template}/img/pattern-bg.png">
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
