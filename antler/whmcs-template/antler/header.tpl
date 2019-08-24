<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="{$charset}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="templates/{$template}/assets/img/favicon.ico" >
    <title>{if $kbarticle.title}{$kbarticle.title} - {/if}{$pagetitle} - {$companyname}</title>

    {include file="$template/includes/head.tpl"}

    {$headoutput}

</head>
<body data-phone-cc-input="{$phoneNumberInputStyle}">

{$headeroutput}
<!-- 
*******************
NAV MENU
*******************
-->
<div id="main-menu" class="menu-wrap">
  <section id="header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="top-nav">
              {if $languagechangeenabled && count($locales) > 1}
                  <li>
                      <a href="#" class="choose-language" data-toggle="popover" id="languageChooser">
                          <i class="fas fa-globe-americas"></i>
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
                          <i class="fas fa-bell"></i>
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
                      <a href="{$WEB_ROOT}/logout.php" class="btn btn-default-yellow-fill question">
                          {$LANG.clientareanavlogout}
                      </a>
                  </li>
              {else}
                  <li>
                      <a href="{$WEB_ROOT}/cart.php?a=view">
                          <i class="fas fa-shopping-cart"></i>
                          {$LANG.viewcart}
                      </a>
                  </li>
                  {if $condlinks.allowClientRegistration}
                      <li class="primary-action">
                          <a href="{$WEB_ROOT}/register.php"><i class="fas fa-user-edit"></i> {$LANG.register}</a>
                      </li>
                  {/if}
                  <li>
                      <a class="btn btn-default-yellow-fill question" href="{$WEB_ROOT}/clientarea.php"><i class="fas fa-lock pr-1"></i> {$LANG.login}</a>
                  </li>
              {/if}
              {if $adminMasqueradingAsClient || $adminLoggedIn}
                  <li>
                      <a href="/whmcs/logout.php?returntoadmin=1" class="btn btn-logged-in-admin" data-toggle="tooltip" data-placement="bottom" title="{if $adminMasqueradingAsClient}{$LANG.adminmasqueradingasclient} {$LANG.logoutandreturntoadminarea}{else}{$LANG.adminloggedin} {$LANG.returntoadminarea}{/if}">
                          <i class="fas fa-sign-out-alt"></i>
                      </a>
                  </li>
              {/if}   
            </ul>
          </div>
        </div>
      </div>
    </section>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-3">
        <a href="{$WEB_ROOT}/index.php">
          <img src="{$WEB_ROOT}/templates/{$template}/assets/img/logo.svg" class="svg logo-menu" alt="{$companyname}"/>
        </a>
        <div class="navbar-header">
          <button id="nav-toggle" type="button" class="navbar-toggle menu-toggle" data-toggle="collapse" data-target="#primary-nav">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
          </button>
        </div>
      </div>
      <div class="col-sm-12 col-md-9">
        <section id="main-menu">
          <nav id="nav" class="navbar navbar-default navbar-main" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="primary-nav">
              <ul class="nav navbar-nav">
                {include file="$template/includes/navbar.tpl" navbar=$primaryNavbar}
                <li class="infos">
                  <a href="tel:+0000000000"><p class="c-grey">Phone: + (123) 1300-656-1046</p></a>
                  <a href="mailto:antler@mail.com"><p class="c-grey">Email: antler@mail.com</p></a>
                  <a href="/whmcs/clientarea.php"><div class="btn btn-default-yellow-fill">Login</div></a>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </nav>
        </section>
      </div>
    </div>
  </div>
</div>

<!--
*******************
OWL Carousel
*******************
-->
{if $templatefile == 'homepage'}
<section id="owl-demo" class="owl-carousel owl-theme owl-loaded owl-drag">
    <div class="full h-100">
      <div class="total-grad-grey"></div>
      <div class="vc-parent">
        <div class="vc-child">
          <div class="top-banner">
            <div class="container">
              <img class="svg custom-img-right" src="{$WEB_ROOT}/templates/{$template}/assets/patterns/rack.svg" alt="Dedicated Server">
              <div class="heading">Dedicated Server <div class="animatype">With <span id="typed3"></span></div></div>
              <h3 class="subheading">Powerful servers with high-end resources <br>that will guarantee resource exclusivity, <br>starting at just <b class="c-pink">$90.22/mo</b><br>
              </h3>
              <a href="http://inebur.com/antler/template/dedicated" class="btn btn-default-yellow-fill mr-3">Get Prices</a>
              <a href="http://inebur.com/antler/template/dedicated" class="btn btn-default-pink-fill">Learn more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="full h-100 overlay-video">
      <div class="vc-parent">
        <div class="vc-child">
          <div class="top-banner">
            <div class="container">

              <div class="container-video">
                <video class="covervid-video" autoplay loop muted poster="{$WEB_ROOT}/templates/{$template}/assets/img/topbanner06.jpg">
                  <source src="{$WEB_ROOT}/templates/{$template}/assets/videos/planet.mp4" type="video/mp4">
                </video>
              </div>

              <img class="svg custom-img-right" src="{$WEB_ROOT}/templates/{$template}/assets/patterns/domains.svg" alt="Domains">
              <h1 class="heading">Your Perfect <br>Domain Name</h1>
              <h3 class="subheading">Search a domain of your choice from <b class="c-pink">$6.00/yr</b></h3>
              <div class="row">

                <form method="post" action="domainchecker.php" id="frmDomainHomepage">
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="general-input w-50">
                      <input type="text" class="fill-input" name="domain" placeholder="{$LANG.exampledomain}" autocapitalize="none" data-toggle="tooltip" data-placement="left" data-trigger="manual" title="{lang key='orderForm.required'}" />
                      {if $registerdomainenabled}
                      <input type="submit" class="btn btn-default-yellow-fill search{$captcha->getButtonClass($captchaForm)}" value="{$LANG.search}" />
                      {/if}
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="pull-left">
                        {if $transferdomainenabled}
                        <input type="submit" name="transfer" class="btn btn-default-fill transfer{$captcha->getButtonClass($captchaForm)}" value="{$LANG.domainstransfer}" />
                        {/if}
                    </div>
                  </div>
                </form>

              </div>
              <div class="domain-prices">
                <ul>
                  <li class="tld">.com <div class="price"><sup>$</sup>14.00</div></li>
                  <li class="tld">.net <div class="price"><sup>$</sup>12.00</div></li>
                  <li class="tld">.org <div class="price"><sup>$</sup>8.00</div></li>
                  <li class="tld">.us <div class="price"><sup>$</sup>6.00</div></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="full h-100">
      <div class="total-grad-grey-inverse"></div>
      <div class="vc-parent">
        <div class="vc-child">
          <div class="top-banner">
            <div class="container">
              <img class="svg custom-img-right" src="{$WEB_ROOT}/templates/{$template}/assets/patterns/cloudvps.svg" alt="Cloud VPS Server">
              <h1 class="heading">Virtual <br>Cloud Servers</h1>
              <h3 class="subheading"><span class="c-pink">&#9679;</span> Immediate scalability<br><span class="c-pink">&#9679;</span> High performance <br><span class="c-pink">&#9679;</span> Fast deployment<br></h3>
              <a href="cart.php?gid=2" class="btn btn-default-yellow-fill mr-3">Get Prices</a>
              <a href="http://inebur.com/antler/template/vps" class="btn btn-default-pink-fill">Learn more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<!--
*******************
PRICING TABLES
*******************
-->
<section class="pricing special sec-up-slider">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4">
          <div class="wrapper first text-left">
            <div class="top-content">
              <img class="svg mb-3" src="templates/{$template}/assets/fonts/svg/cloudfiber.svg" >
              <div class="title">Shared Hosting</div>
              <div class="fromer">Starting at:</div>
              <div class="price"><sup>$</sup>8.19 <span class="period">/month</span></div>
              <a href="cart.php?gid=1" class="btn btn-default-yellow-fill">All plans</a>
            </div>
            <ul class="list-info">
              <li><i class="icon-drives"></i> <span class="c-purple">DISK</span><br> <span>250GB SSD</span></li>
              <li><i class="icon-speed"></i> <span class="c-purple">DATA</span><br> <span>1TB Bandwidth</span></li>
              <li><i class="icon-emailopen"></i> <span class="c-purple">EMAIL</span><br> <span>120 Emails</span></li>
              <li><i class="icon-domains"></i> <span class="c-purple">TLD</span><br> <span>30 Domains</span></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
          <div class="wrapper text-left">
            <div class="plans badge feat bg-pink">recommended</div>
            <div class="top-content">
              <img class="svg mb-3" src="templates/{$template}/assets/fonts/svg/dedicated.svg" alt="">
              <div class="title">Dedicated Server</div>
              <div class="fromer">annually get (20% discount)</div>
              <div class="price"><sup>$</sup>82.00 <span class="period">/month</span></div>
              <a href="http://inebur.com/antler/template/configurator" class="btn btn-default-yellow-fill">Configure</a>
            </div>
            <ul class="list-info bg-purple">
              <li><i class="icon-cpu"></i> <span class="c-pink">CPU</span><br> <span>4x 3.20Ghz 2 Cores</span></li>
              <li><i class="icon-ram"></i> <span class="c-pink">RAM</span><br> <span>16GB (up to 32GB)</span></li>
              <li><i class="icon-drivessd"></i> <span class="c-pink">DRIVES</span><br> <span>2 x 1TB SATA 3.5</span></li>
              <li><i class="icon-git"></i> <span class="c-pink">UPLINK</span><br> <span>1Gbps - 20TB</span></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
          <div class="wrapper third text-left">
            <div class="top-content">
              <img class="svg mb-3" src="templates/{$template}/assets/fonts/svg/vps.svg" alt="">
              <div class="title">Cloud VPS</div>
              <div class="fromer">Starting at:</div>
              <div class="price"><sup>$</sup>9.99 <span class="period">/month</span></div>
              <a href="cart.php?gid=2" class="btn btn-default-yellow-fill">All plans</a>
            </div>
            <ul class="list-info">
              <li><i class="icon-cpu"></i> <span class="c-purple">CPU</span><br> <span>2 Cores</span></li>
              <li><i class="icon-ram"></i> <span class="c-purple">RAM</span><br> <span>2GB Memory</span></li>
              <li><i class="icon-drives"></i> <span class="c-purple">DISK</span><br> <span>20GB SSD Space</span></li>
              <li><i class="icon-speed"></i> <span class="c-purple">DATA</span><br> <span>1TB Bandwidth</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</section>

<!--
*******************
FEATURES
*******************
-->
<section class="services sec-normal sec-grad-yellow-to-grey-left">
    <img class="path-left" src="templates/{$template}/assets/patterns/motpath.svg" alt="">
    <div class="container">
      <div class="service-wrap">
        <div class="row">
          <div class="col-sm-12 text-left">
            <h2 class="section-heading">{$LANG.howcanwehelp}</h2>
            <p class="section-subheading">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
          </div>
          <div class="col-sm-12 col-md-4 wow animated fadeInUp fast">
            {if $registerdomainenabled || $transferdomainenabled}
            <div class="service-section">
              <img class="svg" src="templates/{$template}/assets/fonts/svg/domains.svg" alt="">
              <div class="title">{$LANG.buyadomain}</div>
              <p class="subtitle">
                {$LANG.homebegin}.
              </p>
              <a id="btnBuyADomain" href="domainchecker.php" class="btn btn-default-yellow-fill">{$LANG.buyadomain}</a>
            </div>
            {/if}
          </div>
          <div class="col-sm-12 col-md-4 wow animated fadeInUp">
            <div class="service-section">
              <img class="svg" src="templates/{$template}/assets/fonts/svg/cloudfiber.svg" alt="">
              <div class="title">{$LANG.orderhosting}</div>
              <p class="subtitle">
                {$LANG.orderForm.chooseFromRange}
              </p>
              <a id="btnOrderHosting" href="cart.php?gid=1" class="btn btn-default-yellow-fill">{$LANG.orderhosting}</a>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 wow animated fadeInUp fast">
            <div class="service-section">
              <div class="plans badge feat bg-pink">Premium</div>
              <img class="svg" src="templates/{$template}/assets/fonts/svg/helpdesk.svg" alt="">
              <div class="title">{$LANG.getsupport}</div>
              <p class="subtitle">
                {$LANG.supportticketsintro}
              </p>
              <a id="btnGetSupport" href="submitticket.php" class="btn btn-default-yellow-fill">{$LANG.getsupport}</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
{else}

<!--
*******************
BANNER
*******************
-->
<div class="top-header item7 overlay">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <div class="wrapper">
            <h1 class="heading">Antler WHMCS Template</h1>
            <h3 class="subheading">Best Hosting Provider with Support Premium 24/7/365.</h3>
          </div>
        </div>
      </div>
    </div>
</div>
{/if}

<!--
*******************************
COLORS
*******************************
-->
<section>
    <ul class="color-scheme">            
      <li class="pink"><a href="#" data-rel="pink" class="styleswitch"></a></li>
      <li class="blue"><a href="#" data-rel="blue" class="styleswitch"></a></li>
      <li class="green"><a href="#" data-rel="green" class="styleswitch"></a></li>
    </ul> 
</section>

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
