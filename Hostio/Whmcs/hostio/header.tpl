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
                <img class="logo" src="{$WEB_ROOT}/templates/{$template}/images/logo.png" alt="Hostio">
            </a>
        </div>
        <div style="height: 1px;" aria-expanded="false" class="navbar-collapse collapse" id="bs">
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
                        <form action="{if $systemsslurl}{$systemsslurl}{else}{$systemurl}{/if}dologin.php" method="post" role="form" class="login-form">
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
                <div class="big-title">Better Web Hosting, For You.</div>
                <div class="sub-title">Morbi libero tortor, interdum fermentum justo et, mollis interdum justo. Morbi a accumsan urna.</div>
                {if $registerdomainenabled || $transferdomainenabled}
                <div class="domain-search-holder">
                    <form id="domain-form" method="post" action="domainchecker.php">
                        <div class="container-fluid">
                            <div class="row">
                                    <input type="text" class="domain-text" name="domain" placeholder="{$LANG.exampledomain}" />
                                    <ul>
                                    {if $registerdomainenabled}
                                        <li><input type="submit" value="{$LANG.search}" /></li>
                                    {/if}
                                    {if $transferdomainenabled}
                                        <li><input type="submit" name="transfer" class="transfer" value="{$LANG.domainstransfer}" /></li>
                                    {/if}
                                    </ul>
                            </div>
                        </div>

                        {include file="$template/includes/captcha.tpl"}
                    </form>
                </div>
                {else}
                <div class="toparea-space"></div>
                {/if}
                <div class="animation">
                    <img src="{$WEB_ROOT}/templates/{$template}/images/laptop.png" alt="laptop" />
                    <ul class="icons-list">
                        <li><a href="#"><i class="fa fa-thumbs-up"></i></a></li>
                        <li><a href="#"><i class="fa fa-commenting"></i></a></li>
                        <li><a href="#"><i class="fa fa-wifi"></i></a></li>
                        <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                        <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                        <li><a href="#"><i class="fa fa-bullhorn"></i></a></li>
                    </ul>
                    <canvas id="hand-animation"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="features" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">World Class Hosting</div>
                <div class="row-subtitle">Sed lectus mauris, interdum at luctus vel, lobortis semper nisi.<br />
                    Integer vel porttitor sem. Aliquam erat volutpat.
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="feature-box">
                    <div class="box-bg"></div>
                    <div class="feature-icon"><i class="hsto hsto-cloud-computing"></i></div>
                    <div class="feature-title">Knowledge base</div>
                    <div class="feature-details">Mauris at libero sed justo pretium maximus ac non ex. Donec sit amet ultrices dolo.</div>
                    <div class="feature-button">
                        <a class="all-feature-button" href="#info">All Features</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box active">
                    <div class="box-bg"></div>
                    <div class="feature-icon"><i class="hsto hsto-mouse"></i></div>
                    <div class="feature-title">Insured Safety</div>
                    <div class="feature-details">Aliquam consectetur aliquet libero, ut viverra velit bibendum a. Nullam et sapien ac eros feugiat sollicitudin.</div>
                    <div class="feature-button">
                        <a class="all-feature-button" href="#info">All Features</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">
                    <div class="box-bg"></div>
                    <div class="feature-icon"><i class="hsto hsto-worldwide"></i></div>
                    <div class="feature-title">Easy steps</div>
                    <div class="feature-details">Sed faucibus lectus quis tellus fermentum gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                    <div class="feature-button">
                        <a class="all-feature-button" href="#info">All Features</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="info" class="container-fluid">
    <div class="container">
        <div class="row rtl-cols">
            <div class="col-sm-4 col-md-4 info-img-holder">
                <img class="info-img" src="{$WEB_ROOT}/templates/{$template}/images/info1.png" alt="info" />
            </div>
            <div class="col-sm-8 col-md-8 info-text-holder">
                <h3>Why Choose Hostio?</h3>
                <p>Aliquam consectetur aliquet libero, ut viverra velit bibendum a. Nullam et sapien ac eros feugiat sollicitudin. Nulla euismod lorem nisi, a tempor diam fringilla ut. Nunc sed consectetur mauris. Nullam ac sem elit. Vestibulum porta odio lacinia mauris pulvinar sagittis. Curabitur id cursus leo.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-md-4 info-img-holder">
                <img class="info-img" src="{$WEB_ROOT}/templates/{$template}/images/info2.png" alt="info" />
            </div>
            <div class="col-sm-8 col-md-8 info-text-holder text-right">
                <h3>Transferring From Another Host?</h3>
                <p>Etiam condimentum metus rhoncus purus pharetra tempor. Sed faucibus lectus quis tellus fermentum gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla egestas dapibus semper. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
            </div>
        </div>
        <div class="row rtl-cols">
            <div class="col-sm-4 col-md-4 info-img-holder">
                <img class="info-img" src="{$WEB_ROOT}/templates/{$template}/images/info3.png" alt="info" />
            </div>
            <div class="col-sm-8 col-md-8 info-text-holder">
                <h3>Why Choose Hostio?</h3>
                <p>Curabitur vulputate dignissim pretium. Integer viverra dignissim elit. Vestibulum aliquam erat eu dictum porttitor. Aliquam feugiat risus lorem, non tempor purus egestas at. Nulla imperdiet tortor id aliquet gravida. Phasellus dapibus id dolor viverra ultricies. Suspendisse ut finibus nulla.</p>
            </div>
        </div>
    </div>
</div>
<div id="more-info" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">Ready to have your own website?</div>
                <div class="row-subtitle">Phasellus accumsan nisi eu arcu condimentum sollicitudin. Nulla auctor quis est at suscipit. <br>
Maecenas ac urna eget magna vulputate interdum.</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="{$WEB_ROOT}/cart.php" class="get-started-button">Get Started</a>
            </div>
        </div>
    </div>
</div>
<div id="more-features" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">Hostio Guarantees</div>
                <div class="row-subtitle">Etiam condimentum metus rhoncus purus pharetra tempor. <br />Sed faucibus lectus quis tellus fermentum gravida.</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <div class="icon-bg"><img src="{$WEB_ROOT}/templates/{$template}/images/cloud1.png" alt="cloud" /></div>
                        <i class="hsto hsto-medal"></i>
                    </div>
                    <div class="mfeature-title">World Class Hosting</div>
                    <div class="mfeature-details">Mauris at libero sed justo pretium maximus ac non ex. Donec sit amet ultrices dolo.</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <div class="icon-bg"><img src="{$WEB_ROOT}/templates/{$template}/images/cloud2.png" alt="cloud" /></div>
                        <i class="hsto hsto-hours-support"></i>
                    </div>
                    <div class="mfeature-title">Great Support</div>
                    <div class="mfeature-details">Aliquam consectetur aliquet libero, ut viverra velit bibendum a. Nullam et sapien ac eros feugiat sollicitudin.</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <div class="icon-bg"><img src="{$WEB_ROOT}/templates/{$template}/images/cloud3.png" alt="cloud" /></div>
                        <i class="hsto hsto-money"></i>
                    </div>
                    <div class="mfeature-title">38 Day Guarantee</div>
                    <div class="mfeature-details">Sed faucibus lectus quis tellus fermentum gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="testimonials" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">Don’t take our word for it</div>
                <div class="row-subtitle">We’re loved by great customers all around the world!<br>
Here’re some of their opinions about us</div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="testimonial-box">
                    <div class="testimonial-image"><img src="{$WEB_ROOT}/templates/{$template}/images/t1.jpg" alt="person" /></div>
                    <div class="testimonial-title">Great Services!</div>
                    <div class="testimonial-details">Lorem Ipsum which looks reasonable generated as default model as and search many web sites pass websites is therefore always.</div>
                    <div class="testimonial-info"><span class="name">John Doe</span> - Manager @ Brandio</div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="testimonial-box">
                    <div class="testimonial-image"><img src="{$WEB_ROOT}/templates/{$template}/images/t2.jpg" alt="person" /></div>
                    <div class="testimonial-title">Great Services!</div>
                    <div class="testimonial-details">Lorem Ipsum which looks reasonable generated as default model as and search many web sites pass websites is therefore always.</div>
                    <div class="testimonial-info"><span class="name">John Doe</span> - Manager @ Brandio</div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="testimonial-box">
                    <div class="testimonial-image"><img src="{$WEB_ROOT}/templates/{$template}/images/t3.jpg" alt="person" /></div>
                    <div class="testimonial-title">Great Services!</div>
                    <div class="testimonial-details">Lorem Ipsum which looks reasonable generated as default model as and search many web sites pass websites is therefore always.</div>
                    <div class="testimonial-info"><span class="name">John Doe</span> - Manager @ Brandio</div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="testimonial-box">
                    <div class="testimonial-image"><img src="{$WEB_ROOT}/templates/{$template}/images/t4.jpg" alt="person" /></div>
                    <div class="testimonial-title">Great Services!</div>
                    <div class="testimonial-details">Lorem Ipsum which looks reasonable generated as default model as and search many web sites pass websites is therefore always.</div>
                    <div class="testimonial-info"><span class="name">John Doe</span> - Manager @ Brandio</div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="testimonial-box">
                    <div class="testimonial-image"><img src="{$WEB_ROOT}/templates/{$template}/images/t5.jpg" alt="person" /></div>
                    <div class="testimonial-title">Great Services!</div>
                    <div class="testimonial-details">Lorem Ipsum which looks reasonable generated as default model as and search many web sites pass websites is therefore always.</div>
                    <div class="testimonial-info"><span class="name">John Doe</span> - Manager @ Brandio</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="get-started" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text">Get started now. Try Hostio Free for 10 days.</div>
                <a href="{$WEB_ROOT}/contact.php" class="gstart">Get Started</a>
            </div>
        </div>
    </div>
</div>
{else}
<div id="top-content" class="container-fluid inner-page">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h3 class="page-title">{$pagetitle}</h3>
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
