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

<div class="nuhost-template-demo"><!-- start demo content -->
    <a class="settingbutton active"><i class="fa fa-cog" aria-hidden="true"></i></a>
    <div class="body-demo-t">
        <div class="nuhost-template-skin-body">
            <div class="demo-t-logo">
                <a href=""><img id="preset_color_sw_logo" alt="Image" src="{$WEB_ROOT}/templates/{$template}/img/header/logo-b.png" /></a>
            </div>
			
            <div class="nuhost-template-header-styles-demo" id="nuhost-template-header-styles-demo">
                <a id="first-demo-style" class="active" href="#"><img src="{$WEB_ROOT}/templates/{$template}/img/demo/linear/1.jpg" alt=""></a>
                <a id="second-demo-style" href="#"><img src="{$WEB_ROOT}/templates/{$template}/img/demo/linear/2.jpg" alt=""></a>
                <a id="third-demo-style" href="#"><img src="{$WEB_ROOT}/templates/{$template}/img/demo/linear/3.jpg" alt=""></a>
                <a id="fourth-demo-style" href="#"><img src="{$WEB_ROOT}/templates/{$template}/img/demo/linear/4.jpg" alt=""></a>
                <a id="fiveth-demo-style" href="#"><img src="{$WEB_ROOT}/templates/{$template}/img/demo/linear/5.jpg" alt=""></a>
                <a id="sixth-demo-style" href="#"><img src="{$WEB_ROOT}/templates/{$template}/img/demo/linear/6.jpg" alt=""></a>
            </div>
		</div>
    </div>
    </div><!-- end demo content -->
	
	<!-- start preloader -->
    <div class="preloader">
        <svg class="spinner" id="pageloader_anime" width="32px" height="32px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
            <circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
        </svg>
    </div>
	<!-- end preloader -->
	
{$headeroutput}

<!-- start header -->
    <div id="header"  class="{if $templatefile == 'homepage'}{else}whmcs-not-index-template{/if}">
        <!-- start search block -->
        <div class="search-header-block">

            <form id="pitursrach-header" name="formsearch" role="form" method="post" action="{routePath('knowledgebase-search')}">
                <input name="search" id="search" type="text" class="text" value="" placeholder="What can we help you with?">
                <button type="submit" class="submit"><span class="fa fa-search"></span></button>
                <a class="closesrch-her-block np-dsp-block">
                    <span class="first-stright"></span>
                    <span class="second-stright"></span>
                </a>
            </form>

        </div>
        <!-- end search block -->

        <!-- start header animations -->
        <div class="header-animation">
            <canvas class="backgroundssdlo"></canvas>
			{if $templatefile == 'homepage'}
            <span class="moon-bg-her"></span>
			<span class="courve-gb-hdr-top"></span>

            <!------- header support ring ------->
            <a class="support-header-ring" href="contact.php"><img src="{$WEB_ROOT}/templates/{$template}/img/svgs/support.svg" alt="" /> <span>support team</span></a>
            <!------- end header support ring ------->
			{/if}
        </div>
        <!-- end header animations -->

		<!-- start top header area -->
        <div class="header-top-menu">
            <div class="container">
                <ul>
                    <li><a><i class="fa fa-at"></i> support@coodiv.net</a></li>
                    <li><a><i class="fa fa-phone"></i> 00213-123-45-67-89</a></li>
                </ul>

                <div class="ml-auto fl-right phone-no-display">
                    <ul>
                     {if $languagechangeenabled && count($locales) > 1}
                     <li>
                      <a href="#" class="choose-language" data-toggle="popover" id="languageChooser">
			<i class="fa fa-globe"></i>
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
						
                      {if !$loggedin}
                      <li>
                      <a href="{$WEB_ROOT}/clientarea.php"><i class="fa fa-user"></i> {$LANG.login}</a>
                      </li>
                      {if $condlinks.allowClientRegistration}
                      <li>
                        <a href="{$WEB_ROOT}/register.php"><i class="fa fa-users"></i> {$LANG.register}</a>
                       </li>
                       {/if}
                       <li class="primary-action">
                       <a href="{$WEB_ROOT}/cart.php?a=view">
					   <i class="fa fa-shopping-basket"></i>
                       {$LANG.viewcart}
                       </a>
                       </li>
					   {else}
					    <li class="nav-item  no-dslp-phon">
                            <a class="nav-link" href="company.html">About us</a>
                        </li>
                        <li class="nav-item  no-dslp-phon">
                            <a class="nav-link" href="news.html">Anouncement</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{$WEB_ROOT}/cart.php?a=view"><i class="fa fa-shopping-basket"></i> {$LANG.viewcart}</a>
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

            </div>
        </div>
		<!-- end top header area -->

        <div class="top-header-nav-home">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light header-nav-algo-coodiv header-nav-algo-coodiv-v2">
				        <!-- start logo place -->
                        <a class="navbar-brand" href="index.php">
                        <img class="black-bg-logo" src="{$WEB_ROOT}/templates/{$template}/img/header/logo.png" alt="{$companyname}" />
                        <!-- black background logo -->
                        <img class="white-bg-logo" src="{$WEB_ROOT}/templates/{$template}/img/header/logo-b.png" alt="{$companyname}" />
                        <!-- white background logo -->
                        <span>Top Hosting Provider</span>
						</a>
						<!-- end logo place -->
						
						<!-- start header account  -->
                    <ul class="account-place-header-nav navbar-right">
                        <li class="nav-item dropdown">
						{if $loggedin}
						    {if count($clientAlerts) > 0}<span data-toggle="popover" id="accountNotifications" data-placement="bottom" class="infonexsheader">new</span>{else}<span data-toggle="popover" id="accountNotifications" data-placement="bottom" class="infonexsheader" data-toggle="tooltip" data-placement="left" title="{$LANG.notifications}">0</span>{/if}
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
                                <li style="color:#fff;" class="none">
                                {$LANG.notificationsnone}
                                </li>
                                {/foreach}
                                </ul>
                                </div>
							{/if}	   
								   
                            <a data-toggle="dropdown" aria-haspopup="true" id="customarea" aria-expanded="false" class="accouting-h dropdown-toggle" href="#"><img src="{$WEB_ROOT}/templates/{$template}/img/svgs/avatar.svg" alt="" /></a>
                            <div class="dropdown-menu login-drop-down-header" aria-labelledby="customarea">
                            {if $loggedin}
									<div class="row liginned-user-menu">
									<a class="top-links col-md-4" data-toggle="tooltip" data-placement="bottom" title="{$LANG.clientareanavhome}" href="clientarea.php" class="col-md-4 acount-top-header-acc"><i class="fas fa-home"></i></a>
									<a class="top-links col-md-4" data-toggle="tooltip" data-placement="bottom" title="{$LANG.navtickets}" href="supporttickets.php"  href="#" class="col-md-4 acount-top-header-acc"><i class="fas fa-ticket-alt"></i></a>
									<a class="top-links col-md-4" data-toggle="tooltip" data-placement="bottom" title="{$LANG.navinvoices}" href="clientarea.php?action=invoices" href="#" class="col-md-4 acount-top-header-acc np-bord-right"><i class="fas fa-dollar-sign"></i></a>
									</div>
									<ul class="user-menu-dro">
									<li><a href="clientarea.php" title="{$LANG.clientareanavdetails}">{$LANG.clientareanavhome}</a></li>
									<li><a href="clientarea.php?action=details" title="{$LANG.clientareanavdetails}">{$LANG.clientareanavdetails}</a></li>
									<li><a href="clientarea.php?action=contacts" title="{$LANG.clientareanavdetails}">{$LANG.clientareanavcontacts}</a></li>
									<li><a href="clientarea.php?action=changepw" title="{$LANG.clientareanavdetails}">{$LANG.clientareanavchangepw}</a></li>
									<li><a href="logout.php" title="Logout">{$LANG.logouttitle}</a></li>
									</ul>									
                            {else}
							
							<form method="post" action="{$systemurl}dologin.php" role="form" data-form="validate">
                             <div class="form-group">
                             <input type="email" name="username" id="inputEmail" placeholder="{$LANG.enteremail}" class="form-control" required autofocus>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" name="password" id="inputPassword" placeholder="{$LANG.clientareapassword}" autocomplete="off" class="form-control" required>
                                    </div>
									
									<div class="checkbox d-none">
                  					<label>
                 					<input type="checkbox" name="rememberme" checked />{$LANG.loginrememberme}
                  					</label>
                					</div>

                                    <p class="help-block"><a href="pwreset.php">{$LANG.forgotpw}</a> <a href="register.php">{$LANG.register}</a></p>
                                    <button type="submit" class="btn btn-block btn-default text-uppercase">{$LANG.loginbutton}</button>

                            </form>
						{/if}
                            </div>
                        </li>
                    </ul>
					<!-- end header account  -->
					
					
                    <button class="navbar-toggle offcanvas-toggle menu-btn-span-bar ml-auto" data-toggle="offcanvas" data-target="#offcanvas-menu-home">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
					<!-- start collapse navbar -->
                    <div class="navbar-offcanvas navbar-right" id="offcanvas-menu-home">
					<!-- start navbar -->
                        <ul class="navbar-nav ml-auto">
							{include file="$template/includes/navbar.tpl" navbar=$primaryNavbar}
                            <li class="nav-item">
                                <a data-toggle="tooltip" data-placement="bottom" title="search" class="search-headr" href="#"><img src="{$WEB_ROOT}/templates/{$template}/img/svgs/search.svg" alt="" /></a>
                            </li>

                        </ul>
						<!-- end navbar -->

                    </div>
					<!-- end collapse navbar -->
                </nav>
            </div><!-- end container -->
        </div><!-- end main header section -->
		
		{if $templatefile == 'homepage'}
        <div class="header-heeadline"><!-- start main header domain search -->
            <div class="outliner-middl-ha">

                <h5><span class="blok-on-phon">perfect domain name for</span> <span id="typed"></span></h5><!-- main header domain search title -->
                <p>Cheapest prices in the market, Secure, And the best support team</p><!-- main header domain search text -->

				{if $registerdomainenabled || $transferdomainenabled}
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <form action="domainchecker.php" method="post" id="domain-search" class="wow fadeIn" data-wow-delay="0.5s"><!-- main header domain search form -->
                            <span class="space-men"></span><!-- the space men icon -->
                            <input type="text" id="domain-text" name="domain" placeholder="{$LANG.exampledomain}" autocapitalize="none" /><!-- search input -->
                            <span class="inline-button">
							{if $registerdomainenabled}
                            <button id="search-btn" type="submit" name="submit" value="{$LANG.search}"> <img src="{$WEB_ROOT}/templates/{$template}/img/svgs/search.svg" alt="search icon" /></button><!-- search button -->
                            {/if}
                            {if $transferdomainenabled}
							<button id="transfer-btn" type="submit" name="transfer" value="{$LANG.domainstransfer}"> <img src="{$WEB_ROOT}/templates/{$template}/img/svgs/transfer.svg" alt="transfer icon" /></button><!-- transfer button -->
                            {/if}
							</span>
                            <div class="domain-price-header mr-auto">

                                <a>
                                    <img src="{$WEB_ROOT}/templates/{$template}/img/domain/com.png" alt="domain" /><!-- domain name -->
                                    <span>$14.99</span><!-- domain price -->
                                </a>

                                <a>
                                    <img src="{$WEB_ROOT}/templates/{$template}/img/domain/net.png" alt="domain" /><!-- domain name -->
                                    <span>$9.99</span><!-- domain price -->
                                </a>

                                <a>
                                    <img src="{$WEB_ROOT}/templates/{$template}/img/domain/org.png" alt="domain" /><!-- domain name -->
                                    <span>$0.99</span><!-- domain price -->
                                </a>

                                <a class="no-phon-dsply">
                                    <img src="{$WEB_ROOT}/templates/{$template}/img/domain/store.png" alt="domain" /><!-- domain name -->
                                    <span>$8.99</span><!-- domain price -->
                                </a>

                            </div>

                        </form><!-- end main header domain search form -->

                    </div><!-- end col -->
                </div><!-- end row -->
				{/if}
            </div>
        </div><!-- end main header domain search -->
	{/if}
    </div> <!-- end header -->

	{if $templatefile == 'homepage'}
	<section class="first-items-home"><!-- section services -->
        <div class="container">
            <div class="row justify-content-left">
                <div class="col-md-4 item-icons">
                    <span class="free-badje">free</span><!-- free badge -->
                    <span class="nomber-overlow"><b>01</b></span><!-- service number -->
                    <i class="icon flaticon-063-circuit color-1"></i><!-- service icon -->
                    <h5> {$LANG.buyadomain}</h5><!-- service title -->
                    <p>We have 100's of domains to choose from, not to mention prices that other companies only dream about.</p><!-- service text -->
                    <div class="badje-link-footer"><a href="domainchecker.php">see more  <i class="far fa-arrow-alt-circle-right"></i> </a></div><!-- service link -->
                </div>

                <div class="col-md-4 item-icons">
                    <span class="nomber-overlow"><b>02</b></span><!-- service number -->
                    <i class="icon flaticon-063-server color-2"></i><!-- service icon -->
                    <h5>{$LANG.orderhosting}</h5>
                    <p>Without hosting, no one can see your website. To get your website online, order one and upload your content. </p><!-- service text -->
                    <div class="badje-link-footer"><a href="cart.php">see more  <i class="far fa-arrow-alt-circle-right"></i> </a></div><!-- service link -->
                </div>

                <div class="col-md-4 item-icons">
                    <span class="nomber-overlow"><b>03</b></span><!-- service number -->
                    <i class="icon flaticon-063-flashlight color-3"></i><!-- service icon -->
                    <h5>{$LANG.getsupport}</h5><!-- service title -->
                    <p>We Offer 24/7 Premium Support via Phone, support tickets, Live Chat and Email. With reply in less than two hours. </p><!-- service text -->
                    <div class="badje-link-footer"><a href="submitticket.php">see more  <i class="far fa-arrow-alt-circle-right"></i> </a></div><!-- service link -->
                </div>
				

            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section services -->
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
