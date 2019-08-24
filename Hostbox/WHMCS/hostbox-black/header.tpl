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
<body onload="init();">

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
            <a href="{$WEB_ROOT}/index.php" class="logo logo-text logo-link"><canvas id="logo-canvas" width="50" height="50"></canvas>
          <div class="logo-txt">{$companyname}</div></a>
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

                </ul>

            </div><!-- /.navbar-collapse -->
        </div>
    </nav>

</section>
    

<div id="top-content" class="container-fluid">
  <div class="color-overlay accent-color-bg"></div>
  <div class="container">
    <div class="row header-content">
      <div class="col-xs-12 text-center">
      {if $templatefile == 'homepage'}
        <div class="header-text-1"> 
          <div class="word">Affordable</div>
        </div>
        <div class="header-text-2">Shared Hosting</div>
        {if $registerdomainenabled || $transferdomainenabled}
            <h2>{$LANG.homebegin}</h2>
            <form method="post" action="domainchecker.php">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="input-group input-group-lg">
                            <input type="text" class="form-control domain-check-input" name="domain" placeholder="{$LANG.exampledomain}" />
                            <span class="input-group-btn">
                                {if $registerdomainenabled}
                                    <input type="submit" class="check-button" value="{$LANG.search}" />
                                {/if}
                                {if $transferdomainenabled}
                                    <input type="submit" name="transfer" class="check-button" value="{$LANG.domainstransfer}" />
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
      {else}
      	<div class="header-text-1"> 
        	{$pagetitle}
        </div>
      {/if}
      </div>
    </div>
  </div>
</div>

{if $templatefile == 'homepage'}
<div id="partners" class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="partners-slider">
          <div><img src="templates/{$template}/images/partners/1.jpg" alt=""></div>
          <div><img src="templates/{$template}/images/partners/2.jpg" alt=""></div>
          <div><img src="templates/{$template}/images/partners/3.jpg" alt=""></div>
          <div><img src="templates/{$template}/images/partners/4.jpg" alt=""></div>
          <div><img src="templates/{$template}/images/partners/5.jpg" alt=""></div>
          <div><img src="templates/{$template}/images/partners/6.jpg" alt=""></div>
          <div><img src="templates/{$template}/images/partners/7.jpg" alt=""></div>
          <div><img src="templates/{$template}/images/partners/8.jpg" alt=""></div>
          <div><img src="templates/{$template}/images/partners/9.jpg" alt=""></div>
          <div><img src="templates/{$template}/images/partners/10.jpg" alt=""></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="features" class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 row-title accent-color-text"> Our Hosting Features </div>
    </div>
    <div class="row feature-buttons-holder">
      <div class="box3d">
        <div class="box3d-top box3d-part accent-color-bg"></div>
        <div class="box3d-left box3d-part accent-color-bg"></div>
        <div class="box3d-right box3d-part accent-color-bg"></div>
      </div>
      <div class="feature-button feature1 color1-bg inside-box-left" data-num="1">
        <div class="feature-icon"><img src="templates/{$template}/images/feature1.png" alt=""></div>
        <div class="feature-title">Custom</div>
        <div class="feature-line color1-border feature-line-hide"></div>
        <div class="feature-star fa fa-star color1 feature-star-hide"></div>
      </div>
      <div class="feature-button feature2 color2-bg inside-box-left" data-num="2">
        <div class="feature-icon"><img src="templates/{$template}/images/feature2.png" alt=""></div>
        <div class="feature-title">Smart</div>
        <div class="feature-line color2-border feature-line-hide"></div>
        <div class="feature-star fa fa-star color2 feature-star-hide"></div>
      </div>
      <div class="feature-button feature3 color3-bg inside-box-right" data-num="3">
        <div class="feature-icon"><img src="templates/{$template}/images/feature3.png" alt=""></div>
        <div class="feature-title">Free Space</div>
        <div class="feature-line color3-border feature-line-hide"></div>
        <div class="feature-star fa fa-star color3 feature-star-hide"></div>
      </div>
      <div class="feature-button feature4 color4-bg inside-box-right" data-num="4">
        <div class="feature-icon"><img src="templates/{$template}/images/feature4.png" alt=""></div>
        <div class="feature-title">Award Win</div>
        <div class="feature-line color4-border feature-line-hide"></div>
        <div class="feature-star fa fa-star color4 feature-star-hide"></div>
      </div>
    </div>
  </div>
</div>
<div id="feature-details1" class="container-fluid f-details color1-bg hide-f-details">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="feature-icon"><img src="templates/{$template}/images/feature1.png" alt=""></div>
        <div class="feature-title">Custom</div>
        <div class="feature-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </div>
      </div>
    </div>
  </div>
</div>
<div id="feature-details2" class="container-fluid f-details color2-bg hide-f-details">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="feature-icon"><img src="templates/{$template}/images/feature2.png" alt=""></div>
        <div class="feature-title">Smart</div>
        <div class="feature-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </div>
      </div>
    </div>
  </div>
</div>
<div id="feature-details3" class="container-fluid f-details color3-bg hide-f-details">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="feature-icon"><img src="templates/{$template}/images/feature3.png" alt=""></div>
        <div class="feature-title">Free Space</div>
        <div class="feature-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </div>
      </div>
    </div>
  </div>
</div>
<div id="feature-details4" class="container-fluid f-details color4-bg hide-f-details">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="feature-icon"><img src="templates/{$template}/images/feature4.png" alt=""></div>
        <div class="feature-title">Award Win</div>
        <div class="feature-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </div>
      </div>
    </div>
  </div>
</div>
<div id="info1" class="container-fluid info">
  <div class="container">
    <div class="row">
    	<div class="col-md-8 info-text">
        	<h2 class="info-color1">Cloud Host that made easy</h2>
            <ul class="fa-ul">
            	<li>
                <i class="fa-li fa fa-circle-thin info-color1"><i class="fa fa-check info-color1"></i></i>Duis posuere blandit orci sed tincidunt. Curabitur porttitor nisi ac nunc ornare, in fringilla nisl blandit</li>
                <li><i class="fa-li fa fa-circle-thin info-color1"><i class="fa fa-check info-color1"></i></i>Duis posuere blandit orci sed tincidunt. Curabitur porttitor nisi ac nunc ornare, in fringilla nisl blandit</li>
            </ul>
        </div>
        <div class="col-md-4 info-image">
        	<img src="templates/{$template}/images/computer.png" alt="">
        </div>
    </div>
  </div>
</div>
<div id="info2" class="container-fluid info">
  <div class="container">
    <div class="row">
    	<div class="col-md-4 info-image">
        	<img src="templates/{$template}/images/mobile.png" alt="">
        </div>
    	<div class="col-md-8 info-text">
        	<h2 class="info-color2">Cloud Host that made easy</h2>
            <ul class="fa-ul">
            	<li><i class="fa-li fa fa-circle-thin info-color2"><i class="fa fa-check info-color2"></i></i>Duis posuere blandit orci sed tincidunt. Curabitur porttitor nisi ac nunc ornare, in fringilla nisl blandit</li>
                <li><i class="fa-li fa fa-circle-thin info-color2"><i class="fa fa-check info-color2"></i></i>Duis posuere blandit orci sed tincidunt. Curabitur porttitor nisi ac nunc ornare, in fringilla nisl blandit</li>
            </ul>
        </div>
    </div>
  </div>
</div>
<div id="info3" class="container-fluid info">
  <div class="container">
    <div class="row">
    	<div class="col-md-8 info-text">
        	<h2 class="info-color3">Cloud Host that made easy</h2>
            <ul class="fa-ul">
            	<li><i class="fa-li fa fa-circle-thin info-color3"><i class="fa fa-check info-color3"></i></i>Duis posuere blandit orci sed tincidunt. Curabitur porttitor nisi ac nunc ornare, in fringilla nisl blandit</li>
                <li><i class="fa-li fa fa-circle-thin info-color3"><i class="fa fa-check info-color3"></i></i>Duis posuere blandit orci sed tincidunt. Curabitur porttitor nisi ac nunc ornare, in fringilla nisl blandit</li>
            </ul>
        </div>
        <div class="col-md-4 info-image">
        	<img src="templates/{$template}/images/contact.png" alt="">
        </div>
    </div>
  </div>
</div>
<div id="testimonials" class="container-fluid">
  <div class="container">
    <div class="row">
    	<div class="col-xs-12 message-icon-holder">
        	<div class="message-icon">
            	<div class="message-icon-body accent-color-bg">...</div>
                <div class="message-icon-arrow accent-color-border"></div>
            </div>
        </div>
        <div class="col-xs-12 testimonial-text-holder">
        	<div class="testimonial-text t1 accent-color-text">
            	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            </div>
            <div class="testimonial-text t2 accent-color-text testimonial-text-hide">
            	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
            </div>
            <div class="testimonial-text t3 accent-color-text testimonial-text-hide">
            	<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,</p>
            </div>
            <div class="testimonial-text t4 accent-color-text testimonial-text-hide">
            	<p>nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
            </div>
            <div class="testimonial-text t5 accent-color-text testimonial-text-hide">
            	<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="testimonial-text t6 accent-color-text testimonial-text-hide">
            	<p>sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam</p>
            </div>
        </div>
        <div class="col-xs-12">
        	 <div class="people-slider">
          		<div class="person-details person-details-show" data-num="1">
                	<div class="person-image-holder">
                		<img class="person-image" src="templates/{$template}/images/people/1.jpg" alt="">
                    </div>
                    <div class="person-details-holder">
                    	<div class="person-name">Jane Doe</div>
                        <div class="person-title">Job Title</div>
                    </div>
                </div>
                <div class="person-details" data-num="2">
                	<div class="person-image-holder">
                		<img class="person-image" src="templates/{$template}/images/people/2.jpg" alt="">
                    </div>
                    <div class="person-details-holder">
                    	<div class="person-name">Jane Doe</div>
                        <div class="person-title">Job Title</div>
                    </div>
                </div>
                <div class="person-details" data-num="3">
                	<div class="person-image-holder">
                		<img class="person-image" src="templates/{$template}/images/people/3.jpg" alt="">
                    </div>
                    <div class="person-details-holder">
                    	<div class="person-name">Jane Doe</div>
                        <div class="person-title">Job Title</div>
                    </div>
                </div>
                <div class="person-details" data-num="4">
                	<div class="person-image-holder">
                		<img class="person-image" src="templates/{$template}/images/people/4.jpg" alt="">
                    </div>
                    <div class="person-details-holder">
                    	<div class="person-name">Jane Doe</div>
                        <div class="person-title">Job Title</div>
                    </div>
                </div>
                <div class="person-details" data-num="5">
                	<div class="person-image-holder">
                		<img class="person-image" src="templates/{$template}/images/people/1.jpg" alt="">
                    </div>
                    <div class="person-details-holder">
                    	<div class="person-name">Jane Doe</div>
                        <div class="person-title">Job Title</div>
                    </div>
                </div>
                <div class="person-details" data-num="6">
                	<div class="person-image-holder">
                		<img class="person-image" src="templates/{$template}/images/people/2.jpg" alt="">
                    </div>
                    <div class="person-details-holder">
                    	<div class="person-name">Jane Doe</div>
                        <div class="person-title">Job Title</div>
                    </div>
                </div>
        	</div>
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
