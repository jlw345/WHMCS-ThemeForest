<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="{$charset}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{if $kbarticle.title}{$kbarticle.title} - {/if}{$pagetitle} - {$companyname}</title>
    <link href="{$WEB_ROOT}/templates/{$template}/css/style.css" rel="stylesheet">
    <link href="{$WEB_ROOT}/templates/{$template}/css/responsive.css" rel="stylesheet">
    <link href="{$WEB_ROOT}/templates/{$template}/css/animate.css" rel="stylesheet">
    <link href="{$WEB_ROOT}/templates/{$template}/css/new-style.css" rel="stylesheet">
    <link href="{$WEB_ROOT}/templates/{$template}/css/megamenu-style.css" rel="stylesheet">
    <link href="{$WEB_ROOT}/templates/{$template}/css/navigation.css" rel="stylesheet"> 
   <script type="text/javascript" src="{$WEB_ROOT}/templates/bootsnav.js"></script>
    {include file="$template/includes/head.tpl"} {$headoutput}

</head>

<body>
    <div class="maintenance" style="padding: 5px 0;background-color: #f2f2f2;text-align: center;">
        <h4 style="font-size: 14px;color: #555;">PLEASE NOTE : We are still working on this version,it will be available on November 12 - Buy TeraHoster to get it for FREE</h4>
    </div>
    <!--START OF TOP-BAR -->
    <div class="container-fluid top-bar">
        <div class="container">
            <div class="col-sm-5 col-xs-5 top-list">
                <ul>
                    <li>
                        <a href="#"><i aria-hidden="true" class="fa fa-facebook fa-md hvr-grow"></i></a>
                    </li>
                    <li>
                        <a href="#"><i aria-hidden="true" class="fa fa-twitter fa-md hvr-grow"></i></a>
                    </li>
                    <li>
                        <a href="#"><i aria-hidden="true" class="fa fa-google-plus fa-md hvr-grow"></i></a>
                    </li>
                    <li>
                        <a href="#"><i aria-hidden="true" class="fa fa-linkedin fa-md hvr-grow"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-7 col-xs-7 top-list-right">
                <ul>
                    <li class="account"><a href="clientarea.php">My Account</a></li>
                    <li class="toplist-3"><a href="contact.php">Contact</a></li>
                    <li class="toplist-5"><a href="#">TeraHoster</a></li>
                    <li class="toplist-2">hello@themekolor.co</li>
                </ul>
            </div>
        </div>
    </div>
    <!--END OF TOP-BAR  -->

    <section id="header">
        <div class="container">
            <div class="col-sm-3 hidden-xs">
                <p class="welcome-message">WELCOME TO TERAOSTER</p>
            </div>
            <div class="col-sm-9">
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
                    {/if} {if $loggedin}
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
                        <a href="{$WEB_ROOT}/cart.php?a=view">
                            <i class="fa fa-shopping-cart" aria-hidden="true">
                    </i> {$LANG.viewcart}</a>
                    </li>
                    {/if} {if $adminMasqueradingAsClient || $adminLoggedIn}
                    <li>
                        <a href="{$WEB_ROOT}/logout.php?returntoadmin=1" class="btn btn-logged-in-admin" data-toggle="tooltip" data-placement="bottom" title="{if $adminMasqueradingAsClient}{$LANG.adminmasqueradingasclient} {$LANG.logoutandreturntoadminarea}{else}{$LANG.adminloggedin} {$LANG.returntoadminarea}{/if}">
                        <i class="fa fa-sign-out"></i>
                    </a>
                    </li>
                    {/if}
                </ul>
            </div>
        </div>
    </section>

    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-sticky navbar-mobile bootsnav">
        <div class="container">
            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button> {if $assetLogoPath}
                <a href="{$WEB_ROOT}/index.php" class="logo"><img src="{$assetLogoPath}" alt="{$companyname}"></a> {else}
                <a href="{$WEB_ROOT}/index.php" class="logo logo-text"><img class="logo" src="{$WEB_ROOT}/templates/{$template}/img/logo.png" alt="{$companyname}"></a>{/if}
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="slideInUp" data-out="fadeOut">
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                        <ul class="dropdown-menu">
                            <li class="active"><a href="http://themekolor.host/2018/index.html">New For 2018</a></li>
                            <li><a href="http://themekolor.host/enterprise/index.html">Enterprise Version</a></li>
                            <li><a href="http://themekolor.host/v2/index.html">Slider Version</a></li>
                            <li><a href="http://themekolor.host">WHMCS Version</a></li>
                        </ul>
                    </li>
                    <li class="dropdown megamenu-fw">
                        <a href="#" class="dropdown-toggle before" data-toggle="dropdown">Hosting</a>
                        <ul class="dropdown-menu megamenu-content" role="menu">
                            <li>
                                <div class="row">
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Wordpress Hosting</h6>
                                        <div class="content">
                                            <img src="{$WEB_ROOT}/templates/{$template}/img/wp.jpg" alt="ColorHosting" class="img-responsive">
                                            <h5>Starting from <b>$29.99</b></h5>
                                            <p>High performance hosting</p>
                                            <a href="cart.php" class="button btn btn-outline">Buy Now</a>
                                        </div>
                                    </div>
                                    <!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Cloud Hosting</h6>
                                        <div class="content">
                                            <img src="{$WEB_ROOT}/templates/{$template}/img/cloud.jpg" alt="ColorHosting" class="img-responsive">
                                            <h5>Starting from <b>$11.99</b></h5>
                                            <p>High performance Cloud hosting</p>
                                            <a href="cart.php" class="button btn btn-outline">Buy Now</a>
                                        </div>
                                    </div>
                                    <!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Virtual servers</h6>
                                        <div class="content">
                                            <img src="{$WEB_ROOT}/templates/{$template}/img/vps.jpg" alt="ColorHosting" class="img-responsive">
                                            <h5>Starting from <b>$19.99</b></h5>
                                            <p>High performance VPS hosting</p>
                                            <a href="cart.php" class="button btn btn-outline">Buy Now</a>
                                        </div>
                                    </div>
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Dedicated Servers</h6>
                                        <div class="content dedicated">
                                            <h2>SALE 50%</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            <a href="cart.php" class="button btn btn-outline">Read More</a>
                                        </div>
                                    </div>
                                    <!-- end col-3 -->
                                </div>
                                <!-- end row -->
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="cart.php?a=add&domain=register">Domain <span class="new">NEW</span></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Features</a>
                        <ul class="dropdown-menu">
                            <li><a href="cart.php">Testimonials</a></li>
                            <li><a href="cart.php">Style Boxes</a></li>
                            <li><a href="cart.php">Page Headers</a></li>
                            <li><a href="cart.php">Pricing Tables</a></li>
                            <li><a href="cart.php">Working Contact Form</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <ul class="dropdown-menu">
                            <li><a href="cart.php">404 Error</a></li>
                            <li><a href="cart.php">About Us</a></li>
                            <li><a href="cart.php">Contact Page</a></li>
                            <li><a href="cart.php">Web Development</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hosting</a>
                                <ul class="dropdown-menu">
                                    <li><a href="cart.php">Wordpress Hosting</a></li>
                                    <li><a href="cart.php">Cloud Hosting</a></li>
                                    <li><a href="cart.php">Dedicated Servers</a></li>
                                    <li><a href="cart.php">Virtual Servers</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>

        <!-- Side Menu -->
        <div class="side">
            <a href="#" class="close-side"><i class="fa fa-times"></i></a>
            <div class="widget">
                <h6 class="title">MENU 1</h6>
                <ul class="link">
                    <li><a href="affiliates.php">Affilates</a></li>
                    <li><a href="serverstatus.php">Network Status</a></li>
                    <li><a href="knowledgebase.php">Knowledgebase</a></li>
                    <li><a href="announcements.php">Announcements</a></li>
                </ul>
            </div>
            <div class="widget">
                <h6 class="title">MENU 2</h6>
                <ul class="link">
                    <li><a href="affiliates.php">Affilates</a></li>
                    <li><a href="serverstatus.php">Network Status</a></li>
                    <li><a href="knowledgebase.php">Knowledgebase</a></li>
                    <li><a href="announcements.php">Announcements</a></li>
                </ul>
            </div>
        </div>
        <!-- End Side Menu -->
    </nav>
    <!-- End Navigation -->

    {if $templatefile == 'homepage'}
    <section class="new-header">
        <div class="container">
            <div class="domain-container">

                <div class="col-sm-7 domain-form">
                    {if $registerdomainenabled || $transferdomainenabled}
                    <h2>Find your perfect Domain Name</h2>
                    <p>It all starts with a perfect domain name.</p>
                    <br>
                    <form method="post" action="domainchecker.php">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-group input-group-lg">
                                    <span class="ltds">.com $13.99</span> <span class="ltds"> .net $12.99</span> <span class="ltds"> .org $11.99</span> <span class="ltds"> .info $9.99</span>
                                    <input type="text" class="form-control" name="domain" placeholder="{$LANG.exampledomain}" autocapitalize="none" />
                                    <div class="col-sm-12">
                                        <span class="input-group-btn">
                                    {if $registerdomainenabled}
                                        <input type="submit" class="btn search btn-lg btn-domain" value="{$LANG.search}" />
                                    {/if}
                                    <!--
                                    {if $transferdomainenabled}
                                        <input type="submit" name="transfer" class="btn transfer" value="{$LANG.domainstransfer}" />
                                    {/if}
                                    -->
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {include file="$template/includes/captcha.tpl"}
                    </form>
                    {else}
                    <h2>{$LANG.doToday}</h2>
                    {/if}
                </div>
                <div class="col-sm-7">

                </div>
            </div>
        </div>
    </section>
    <!-- start of section -->
    <div class="new-services">
        <div class="container">
            <div class="col-sm-4 border-l">
                <i class="fa fa-3x fa-rocket pull-left"></i>
                <div class="text">
                    <h3>Extreme Speed</h3>
                    <p>Lorem ipsum dolor sit amet conse.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <i class="fa fa-3x fa-cloud pull-left"></i>
                <div class="text">
                    <h3>Cloud Servers</h3>
                    <p>Lorem ipsum dolor sit amet conse.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <i class="fa fa-3x fa-server pull-left"></i>
                <div class="text">
                    <h3>Managed Hosting</h3>
                    <p>Lorem ipsum dolor sit amet conse.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end of section -->

    <section class="partners2">
        <div class="container">
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 border-text">
                <h4>AWESOME <br> PARTNERS</h4>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 border-img">
                <img src="{$WEB_ROOT}/templates/{$template}/img/envato-logo.png" class="img-responsive" alt="">
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 border-img">
                <img src="{$WEB_ROOT}/templates/{$template}/img/envato-logo.png" class="img-responsive" alt="">
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 border-img">
                <img src="{$WEB_ROOT}/templates/{$template}/img/envato-logo.png" class="img-responsive" alt="">
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 border-img">
                <img src="{$WEB_ROOT}/templates/{$template}/img/envato-logo.png" class="img-responsive" alt="">
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 border-img">
                <img src="{$WEB_ROOT}/templates/{$template}/img/envato-logo.png" class="img-responsive" alt="">
            </div>
        </div>
    </section>

    <!-- services 6 -->
    <section class="services6">
        <div class="container">
            <div class="title-new">
                <h2>Know more about our services</h2>
                <p>Et ut pariatur est reprehenderit veniam nostrud deserunt labore cupidatat eiusmod nulla culpa ea.</p>
                <div class="line-title"></div>
                <div class="title-arrow"></div>
            </div>
            <div class="col-sm-4">
                <i class="fa fa-diamond fa-2x pull-left"></i>
                <div class="text-container">
                    <h4>Pixel Perfect</h4>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classica.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <i class="fa fa-line-chart fa-2x pull-left"></i>
                <div class="text-container">
                    <h4>Data Analystics</h4>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <i class="fa fa-cogs fa-2x pull-left"></i>
                <div class="text-container">
                    <h4>SEO Experts</h4>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical.</p>
                </div>
            </div>
            <div class="padding-top-30">
                <div class="col-sm-4">
                    <i class="fa fa-support fa-2x pull-left"></i>
                    <div class="text-container">
                        <h4>Premium Support</h4>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <i class="fa fa-globe fa-2x pull-left"></i>
                    <div class="text-container">
                        <h4>Domain Names</h4>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <i class="fa fa-rocket fa-2x pull-left"></i>
                    <div class="text-container">
                        <h4>Rapid Development</h4>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical.</p>
                    </div>
                </div>
            </div>
            <div class="padding-top-30">
                <div class="col-sm-4">
                    <i class="fa fa-twitter fa-2x pull-left"></i>
                    <div class="text-container">
                        <h4>Social Media</h4>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <i class="fa fa-heart fa-2x pull-left"></i>
                    <div class="text-container">
                        <h4>Lovely Team</h4>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <i class="fa fa-server  fa-2x pull-left"></i>
                    <div class="text-container">
                        <h4>Web Hosting</h4>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services 6 end -->

    <!-- start of section -->
    <section class="arrow-f5-bg">
        <div class="arrow-white"></div>
    </section>
    <section class="why-tera arrow-f5-bg">
        <div class="container">
            <div class="default-title">
                <h3>What Makes Tera Hoster AWESOME </h3>
                <p>We are so proud that we have greatest services</p>
                <div class="line-title"></div>
                <div class="title-arrow"></div>
            </div>
            <div class="col-sm-4">
                <div class="box sl1 fadesimple">
                    <h4 class="wt-1">Big DataCenter</h4>
                    <hr>
                    <ul class="wt-list">
                        <li class="wtl-1">1gb/s port internet</li>
                        <li class="wtl-2">Based on Cloud Technology</li>
                        <li class="wtl-3">Latest Web Servers</li>
                        <li class="wtl-4">Professional Teamwork</li>
                    </ul>
                    <a href="#" class="btn button btn-lg btn-2 red">Read More</a>
                    <a href="#" class="btn button btn-lg btn-2">Buy Now</a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="box sl2 fadesimple">
                    <h4 class="wt-2">Latest Servers</h4>
                    <hr>
                    <ul class="wt-list">
                        <li class="wtl-5">Multi Core CPU</li>
                        <li class="wtl-6">Based on SSD Space</li>
                        <li class="wtl-7">10TB Guranted Bandwidth</li>
                        <li class="wtl-8">Unlimited Free Support</li>
                    </ul>
                    <a href="#" class="btn button btn-lg btn-2 red">Read More</a>
                    <a href="#" class="btn button btn-lg btn-2">Buy Now</a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="box sl3 fadesimple">
                    <h4 class="wt-3">Web Development</h4>
                    <hr>
                    <ul class="wt-list">
                        <li class="wtl-9">Modern and Clean</li>
                        <li class="wtl-10">Latest web framework</li>
                        <li class="wtl-11">Professional Code</li>
                        <li class="wtl-12">Unique Web Design</li>
                    </ul>
                    <a href="#" class="btn button btn-lg btn-2 red">Read More</a>
                    <a href="#" class="btn button btn-lg btn-2">Buy Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end of section -->

    <!-- section start here -->
    <section class="arrow-f5-dark2">
        <div class="arrow-f5"></div>
    </section>
    <section class="list-part">
        <div class="container">
            <div class="default-title">
                <h3>ONE OF THE BEST DATACENTER IN THE WORLD</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="col-sm-6 col-sm-6 col-xs-12 pl-1">
                <div class="col-sm-12 col-xs-12">
                    <i class="fa fa-hdd-o fa-2x pull-left" aria-hidden="true"></i>
                    <div class="text">
                        <h4>Based<span> On SSD Space</span></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <!-- end of section -->
                </div>
                <div class="col-sm-12 col-xs-12">
                    <i class="fa fa-microchip fa-2x pull-left" aria-hidden="true"></i>
                    <div class="text">
                        <h4>Multi CPU <span>Latest Intel Processors</span></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-xs-12">
                    <i class="fa fa-exchange fa-2x pull-left" aria-hidden="true"></i>
                    <div class="text">
                        <h4>Unlimited <span>Bandwidth</span></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-xs-12">
                    <i class="fa fa-database fa-2x pull-left" aria-hidden="true"></i>
                    <div class="text">
                        <h4>Unlimited <span>MySQL and FTP Accounts</span></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-sm-6 col-xs-12 pl-2">
                <div class="col-sm-12 col-xs-12">
                    <i class="fa fa-server fa-2x pull-left" aria-hidden="true"></i>
                    <div class="text">
                        <h4>Fully-Managed<span> Dedicated Server Hosting</span></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-xs-12">
                    <i class="fa fa-code fa-2x pull-left" aria-hidden="true"></i>
                    <div class="text">
                        <h4>Full-Root <span>And Shell Access (SSH)</span></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-xs-12">
                    <i class="fa fa-wordpress fa-2x pull-left" aria-hidden="true"></i>
                    <div class="text">
                        <h4>The Best <span>Performance to Your Apps!</span></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-xs-12">
                    <i class="fa fa-sliders fa-2x pull-left" aria-hidden="true"></i>
                    <div class="text">
                        <h4>Free cPanel <span>With Annual Hosting Plans</span></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </section>
    <!-- section end -->
    <section class="arrow-f5-dark">
        <div class="arrow-red-top-dark"></div>
    </section>
    <!-- new section -->
    <section class="red-section">
        <div class="container">
            <div class="col-sm-10">
                <h3>Fully Managed Hosting Solutions</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint quas perferendis expedita architecto at blanditiis veniam error sit nesciunt accusantium cupiditate.</p>
            </div>
            <div class="col-sm-2">
                <span class="on-salebtn"><a href="#" class="button btn btn-2 btn-lg">Read More</a> </span>
            </div>
        </div>
    </section>
    <!-- end of section -->

    <!-- start of section -->
    <section class="default-pricing">
        <div class="container default-plans">
            <div class="default-title">
                <h3>EVERYTHING YOU NEED TO START A WEBSITE</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente quisquam totam voluptatibus.</p>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6 rt">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <span class="heading">Standard </span>
                            <section class="trng-bg-pricing">
                                <div class="trng trng-pricing"></div>
                            </section>
                            <span class="price-value"><span class="currency">$</span>9.99 <span class="discount">was $12.99</span> <span class="mo">Per Month</span></span>
                        </div>

                        <div class="pricingContent">
                            <ul>
                                <li>50GB Disk Space</li>
                                <li>1 Email Accounts</li>
                                <li>200GB Monthly Bandwidth</li>
                                <li class="uncheck">Unlimited Mysql</li>
                                <li class="uncheck">Unlimited Subdomains</li>
                                <li class="uncheck">1/y Free SSL</li>
                                <li class="uncheck">SSD Space</li>
                            </ul>
                        </div>
                        <!-- /  CONTENT BOX-->

                        <div class="pricingTable-sign-up">
                            <a href="#" class="btn btn-block btn-default">sign up</a>
                        </div>
                        <!-- BUTTON BOX-->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6  rt">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <span class="heading special">Medium</span>
                            <section class="trng-bg-pricing">
                                <div class="trng trng-pricing"></div>
                            </section>
                            <span class="price-value"><span class="currency">$</span>19.99 <span class="discount">was $24.99</span><span class="mo">Per Month</span></span>
                        </div>

                        <div class="pricingContent">
                            <ul>
                                <li>50GB Disk Space</li>
                                <li>1 Email Accounts</li>
                                <li>200GB Monthly Bandwidth</li>
                                <li>Unlimited Mysql</li>
                                <li class="uncheck">Unlimited Subdomains</li>
                                <li class="uncheck">1/y Free SSL</li>
                                <li class="uncheck">SSD Space</li>
                            </ul>
                        </div>
                        <!-- /  CONTENT BOX-->

                        <div class="pricingTable-sign-up">
                            <a href="#" class="btn btn-block btn-default">sign up</a>
                        </div>
                        <!-- BUTTON BOX-->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6  rt">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <span class="heading">Premium</span>
                            <section class="trng-bg-pricing">
                                <div class="trng trng-pricing"></div>
                            </section>
                            <span class="price-value"><span class="currency">$</span>34.99 <span class="discount">was $49.99</span><span class="mo">Per Month</span></span>
                        </div>

                        <div class="pricingContent">
                            <ul>
                                <li>50GB Disk Space</li>
                                <li>1 Email Accounts</li>
                                <li>200GB Monthly Bandwidth</li>
                                <li>Unlimited Mysql</li>
                                <li>Unlimited Subdomains</li>
                                <li class="uncheck">1/y Free SSL</li>
                                <li class="uncheck">SSD Space</li>
                            </ul>
                        </div>
                        <!-- /  CONTENT BOX-->

                        <div class="pricingTable-sign-up">
                            <a href="#" class="btn btn-block btn-default">sign up</a>
                        </div>
                        <!-- BUTTON BOX-->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6  rt">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <span class="heading">Enterprise</span>
                            <section class="trng-bg-pricing">
                                <div class="trng trng-pricing"></div>
                            </section>
                            <span class="price-value"><span class="currency">$</span>79.99 <span class="discount">was $89.99</span><span class="mo">Per Month</span></span>
                        </div>

                        <div class="pricingContent">
                            <ul>
                                <li>50GB Disk Space</li>
                                <li>1 Email Accounts</li>
                                <li>200GB Monthly Bandwidth</li>
                                <li>Unlimited Mysql</li>
                                <li>Unlimited Subdomains</li>
                                <li>1/y Free SSL</li>
                                <li>SSD Space</li>
                            </ul>
                        </div>
                        <!-- /  CONTENT BOX-->

                        <div class="pricingTable-sign-up">
                            <a href="#" class="btn btn-block btn-default">sign up</a>
                        </div>
                        <!-- BUTTON BOX-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of section -->

    <!-- section start here -->
    <div class="home-boxes">
        <div class="container">
            <div class="boxes-content">
                <div class="default-title">
                    <h3>Easy Start and free site Transfer</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci distinctio vel possimus aliquam.</p>
                </div>
                <div class="col-sm-4">
                    <div class="text-container">
                        <i class="fa fa-wordpress fa-4x" aria-hidden="true"></i>
                        <h3>Wordpress Hosting</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis non facere cum eius dignissimos tempora molestias aliquam dolorem, qui.</p>
                        <a href="#" class="button btn btn-lg btn-outline">Read More</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="text-container">
                        <i class="fa fa-server fa-4x" aria-hidden="true"></i>
                        <h3>Dedicated Hosting</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis non facere cum eius dignissimos tempora molestias aliquam dolorem, qui.</p>
                        <a href="#" class="button btn btn-lg btn-outline">Read More</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="text-container">
                        <i class="fa fa-rocket fa-4x" aria-hidden="true"></i>
                        <h3>Cloud Hosting</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis non facere cum eius dignissimos tempora molestias aliquam dolorem, qui.</p>
                        <a href="#" class="button btn btn-lg btn-outline">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of section -->

    <!-- start of section -->
    <section id="features-list" class="features2">
        <div class="default-title">
            <h3> DEDICATED SERVER FEATURES </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi iste laudantium nemo repudiandae.</p>
            <div class="line-title"></div>
            <div class="title-arrow"></div>
        </div>
        <div class="container feature-list-style">
            <div class="col-sm-4 fadesimple">
                <ul>
                    <li>Supermicro Blade Servers</li>
                    <li>Full Root Access / No Limit</li>
                    <li>$100 Google AdWords Offer</li>
                    <li>Troubleshooting & Repairs</li>
                    <li>Email Marketing Constant Contact</li>
                </ul>
            </div>
            <div class="col-sm-4 fadesimple">
                <ul>
                    <li>Get Started Quickly & Easily</li>
                    <li>Instant Server Provisioning</li>
                    <li>Award-Winning Web Hosting!</li>
                    <li>Free Cpanel accounts migrations</li>
                    <li>1gb/s network connection</li>
                </ul>
            </div>
            <div class="col-sm-4 fadesimple">
                <ul>
                    <li>Fully Scalable To Grow With You</li>
                    <li>Start small and grow your hosting</li>
                    <li>Full root access allows total control</li>
                    <li>Dedicated Control & Functionality</li>
                    <li>Scalable CPU and RAM</li>
                </ul>
            </div>
        </div>
        <!-- list container -->
    </section>

    <!-- section 1 -->
    <section class="section1" data-speed="0.6">
        <div class="container-fluid">
            <div class="col-md-6 col-sm-12 text">
                <div class="parts">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="text-container">
                                <div class="title">
                                    <h2>WHY TERAHOSTER</h2>
                                    <h4>Labore exercitation reprehenderit tempor in nisi pariatur laborum reprehenderit do nostrud.</h4>
                                </div>
                                <div class="line-title left"></div>
                                <div class="title-arrow-left"></div>
                                <p>Eiusmod eiusmod duis nostrud et consequat ea enim. Cupidatat ad nisi deserunt irure eiusmod adipisicing esse irure commodo enim. Exercitation elit sint minim id sit esse ea dolor esse laborum proident Lorem.</p>
                                <div class="row">
                                    <div class="col-sm-12 text-col">
                                        <i class="fa fa-rocket  fa-2x pull-left"></i>
                                        <div class="text-lines">
                                            <h4>LiteSpeed Web Servers</h4>
                                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
                                        </div>
                                        <i class="fa fa-envelope  fa-2x pull-left"></i>
                                        <div class="text-lines">
                                            <h4>24/h Unlimited Support</h4>
                                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
                                        </div>
                                        <i class="fa fa-server  fa-2x pull-left"></i>
                                        <div class="text-lines">
                                            <h4>Latest Web Servers</h4>
                                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
                                        </div>
                                        <i class="fa fa-cloud  fa-2x pull-left"></i>
                                        <div class="text-lines">
                                            <h4>Based on Cloud</h4>
                                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 hidden-sm no-padding arrow2">
                <div class="parts image">
                </div>
            </div>
        </div>
    </section>
    <!-- section 1 -->

    <!-- section 2 -->
    <section class="section2">
        <div class="container">
            <div class="title-new">
                <h2>Stunning Cloud Hosting</h2>
                <p>Sunt quis eu aliqua proidentS dunt quis eu aliqua proident </p>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="box">
                        <i class="fa fa-3x fa-bars"></i>
                        <h4>Scalable RAM</h4>
                        <p>Reprehenderit velit nostrud culpa est officia velit velit. Nulla consectetur sint enim deserunt laborum aliqua fugiat qui Esse dolore deserunt laborum aliqua fugiat qui. Esse dolore.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box">
                        <i class="fa fa-3x fa-hdd-o"></i>
                        <h4>Unlimited Space</h4>
                        <p>Reprehenderit velit nostrud culpa est officia velit velit. Nulla consectetur sint enim deserunt laborum aliqua fugiat qui Esse dolore deserunt laborum aliqua fugiat qui. Esse dolore.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box">
                        <i class="fa fa-3x fa-code"></i>
                        <h4>Build for Developers</h4>
                        <p>Reprehenderit velit nostrud culpa est officia velit velit. Nulla consectetur sint enim deserunt laborum aliqua fugiat qui Esse dolore deserunt laborum aliqua fugiat qui. Esse dolore.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="box">
                        <i class="fa fa-3x fa-line-chart"></i>
                        <h4>Data Analystics</h4>
                        <p>Reprehenderit velit nostrud culpa est officia velit velit. Nulla consectetur sint enim deserunt laborum aliqua fugiat qui Esse dolore deserunt laborum aliqua fugiat qui. Esse dolore.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box">
                        <i class="fa fa-3x fa-diamond"></i>
                        <h4>Superior Datacenter</h4>
                        <p>Reprehenderit velit nostrud culpa est officia velit velit. Nulla consectetur sint enim deserunt laborum aliqua fugiat qui Esse dolore deserunt laborum aliqua fugiat qui. Esse dolore.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box">
                        <i class="fa fa-3x fa-send-o"></i>
                        <h4>Unlimited Support</h4>
                        <p>Reprehenderit velit nostrud culpa est officia velit velit. Nulla consectetur sint enim deserunt laborum aliqua fugiat qui Esse dolore deserunt laborum aliqua fugiat qui. Esse dolore.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 2 end -->

    <!-- start of section -->
    <section class="section-dd-ft">
        <div class="container fadesimple">
            <div class="col-sm-4 overflow">
                <i class="fa fa-code fa-3x pull-left"></i>
                <div class="text">
                    <h3>Full Root</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio eius repellendus esse qui, ut, suscipit nesciunt repudiandae eaque</p>
                </div>
            </div>
            <div class="col-sm-4 overflow">
                <i class="fa fa-sliders fa-3x pull-left"></i>
                <div class="text">
                    <h3>Scalable Ram</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio eius repellendus esse qui, ut, suscipit nesciunt repudiandae eaque</p>
                </div>
            </div>
            <div class="col-sm-4 overflow">
                <i class="fa fa-undo fa-3x pull-left"></i>
                <div class="text">
                    <h3>Daily Backups</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio eius repellendus esse qui, ut, suscipit nesciunt repudiandae eaque</p>
                </div>
            </div>
        </div>
        <!-- section -->
    </section>
    <!-- end of section -->

    <!-- start of section -->
    <section class="parallax" data-speed="0.6">
        <div class="container">
            <div class="col-md-7 col-sm-8">
                <div class="text fadesimple">
                    <h3>Let's get started and grow your bussines</h3>
                    <h4>Five centuries later Lorem Ipsum experienced a surge in popularity with the release of Letraset's dry-transfer sheets</h4>
                    <a href="#" class="btn btn-2 red btn-lg">Get Started Now</a>
                </div>
            </div>
            <div class="col-md-5 col-sm-4"></div>
        </div>
    </section>
    <!-- end of section -->

    <!-- faq -->
    <section class="faq-new">
        <div class="container">
            <div class="row">
                <div class="title-new">
                    <h2>Frequently Asked Questions</h2>
                    <p>Sunt quis eu aliqua proidentS dunt quis eu aliqua proident </p>
                    <div class="line-title"></div>
                    <div class="title-arrow"></div>
                </div>
                <div class="col-sm-5">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading red-panel">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Is account registration required?</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading red-panel">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Can I submit my own Bootstrap templates or themes?</a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading red-panel">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">What is the currency used for all transactions?</a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading red-panel">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">What is the currency used for all transactions?</a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading red-panel">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">What is the currency used for all transactions?</a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 blog">
                    <div class="blog-container">
                        <div class="col-sm-6 blog1">
                            <img src="{$WEB_ROOT}/templates/{$template}/img/blog1.jpg" class="img-responsive" alt="">
                            <span class="date">Posted: April/02/2017</span>
                            <h4>New Hosting Center</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s [ . . . ]</p>
                            <a href="#" class="btn button btn-sm btn-outline">Read More</a>
                        </div>
                        <div class="col-sm-6">
                            <img src="{$WEB_ROOT}/templates/{$template}/img/blog2.jpg" class="img-responsive" alt="">
                            <span class="date">Posted: April/01/2017</span>
                            <h4>10 Year Anniversary</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s [ . . . ]</p>
                            <a href="#" class="btn button btn-sm btn-outline">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq end -->

    <!-- start of section -->
    <section id="testimonials-slide">
        <div class="container fadesimple">
            <div class="row">
                <div class='col-md-offset-2 col-md-8 text-center'>
                    <div class="default-title">
                        <h3>WHAT OUR CUSTOMERS <span class="red-text">SAY</span></h3>
                    </div>
                </div>
            </div>
            <hr>
            <div class='row'>
                <div class="col-sm-12">
                    <div class="carousel slide" data-ride="carousel" id="quote-carousel" data-interval="4000">
                        <!-- Bottom Carousel Indicators -->
                        <ol class="carousel-indicators">
                            <li class="active" data-slide-to="0" data-target="#quote-carousel"></li>
                            <li data-slide-to="1" data-target="#quote-carousel"></li>
                            <li data-slide-to="2" data-target="#quote-carousel"></li>
                        </ol>
                        <div class="carousel-inner">
                            <!-- Quote 1 -->
                            <div class="item active">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-4 text-center">
                                            <img class="img-thumbnail img-responsive" alt="..." src="http://themekolor.host/enterprise/img/other/testimonials-slider.jpg"></div>
                                        <div class="col-sm-8">
                                            <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam rem dicta reiciendis ab qui, aut corporis recusandae maiores suscipit, quisquam corrupti. Dignissimos deleniti quia rem voluptatem itaque ex, doloremque dolor.</h5>
                                            <h6>Frank Simone</h6><small>www.webname.com</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- Quote 2 -->
                            <div class="item">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-4 text-center">
                                            <img class="img-thumbnail img-responsive" alt="..." src="http://themekolor.host/enterprise/img/other/testimonials-slider.jpg"></div>
                                        <div class="col-sm-8">
                                            <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis quis, similique possimus fugiat nisi enim iste! Sunt in cum vero voluptatum. Consequuntur odio deleniti reprehenderit maiores porro dicta. Nisi, nostrum.
                                            </h5>
                                            <h6>Frank Simone</h6><small>www.webname.com</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- Quote 3 -->
                            <div class="item">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-4 text-center"><img class="img-thumbnail img-responsive" alt="..." src="http://themekolor.host/enterprise/img/other/testimonials-slider.jpg"></div>
                                        <div class="col-sm-8">
                                            <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur officia, dicta cumque consectetur perspiciatis, reiciendis ad necessitatibus aperiam asperiores ab quasi hic praesentium, ipsum amet modi repellat ducimus obcaecati blanditiis.</h5>
                                            <h6>Frank Simone</h6><small>www.webname.com</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                        </div><a class="left carousel-control" data-slide="prev" href="#quote-carousel"><i class="fa fa-chevron-left"></i></a> <a class="right carousel-control" data-slide="next" href="#quote-carousel"><i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- container -->
    </section>
    <!-- end of section -->

    {/if} {include file="$template/includes/verifyemail.tpl"}
    <div id="main-body-holder" class="container-fluid">
        <section id="main-body">
            <div class="container{if $skipMainBodyContainer}-fluid without-padding{/if}">
                <div class="row">

                    {if !$inShoppingCart && ($primarySidebar->hasChildren() || $secondarySidebar->hasChildren())} {if $primarySidebar->hasChildren() && !$skipMainBodyContainer}
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
                        {if !$primarySidebar->hasChildren() && !$showingLoginPage && !$inShoppingCart && $templatefile != 'homepage' && !$skipMainBodyContainer} {include file="$template/includes/pageheader.tpl" title=$displayTitle desc=$tagline showbreadcrumb=true} {/if}