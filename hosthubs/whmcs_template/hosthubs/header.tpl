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

{$headeroutput}


<!-- START HOSTHUBS -->

        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 text-left cenmobile">
                        <div class="topmenu">
                            <span><i class="fa fa-envelope-o"></i> <a href="mailto:#">hello@hosthubs.com</a></span>
                            <span><i class="fa fa-phone"></i> +90 987 654 32 10</span>
                            <span class="hidden-xs"><i class="fa fa-comments-o"></i> <a href="hosting-chat.html">Online Chat</a></span>
                        </div><!-- end callus -->
                    </div>

                    <div class="col-md-6 col-sm-12 text-right cenmobile">
                        <span><a style="color: #787878;
                        font-size: 13px;
                        margin: 0;
                        padding: 0;" href="{$WEB_ROOT}/cart.php?a=view" class="quick-nav"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs">{$LANG.viewcart} (</span><span id="cartItemCount">{$cartitemcount}</span><span class="hidden-xs">)</span></a></span>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end topbar -->
        </div><!-- end topbar -->

        <header class="header header-affix">
            <div class="container-fluid">
                <nav class="navbar navbar-default yamm">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="{$WEB_ROOT}/index.php"><img src="{$WEB_ROOT}/templates/{$template}/assets/images/logo.png" alt="{$companyname}"></a>
                        </div>

                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-left">
                                {include file="$template/includes/navbar.tpl" navbar=$primaryNavbar}
                                {if $loggedin}
                                    {include file="$template/includes/navbar.tpl" navbar=$secondaryNavbar}
                                {/if}
                            </ul>

                            <ul class="nav navbar-nav navbar-right">
                                {if !$loggedin}
                                <li><a class="button" href="clientarea.php">Login</a></li>
                                <li><a class="link" href="register.php">Register</a></li>
                                {else}
                                <li><a class="link" href="logout.php">Logout</a></li>
                                {/if}
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </nav><!-- end nav -->
            </div><!-- end container -->
        </header><!-- end header -->

<!-- END HOSTHUBS -->

{if $templatefile == 'homepage'}

{include file="$template/includes/revslider.tpl"}

{/if}

{include file="$template/includes/verifyemail.tpl"}


<section id="main-body">
<div class="container">
    <div class="row">
        {if !$inShoppingCart && ($primarySidebar->hasChildren() || $secondarySidebar->hasChildren())}
            {if $primarySidebar->hasChildren()}
                <div class="col-md-12 clearfix">
                    {include file="$template/includes/pageheader.tpl" title=$displayTitle desc=$tagline showbreadcrumb=true}
                </div>
            {/if}
            <div class="col-md-3 pull-right sidebar">
                {include file="$template/includes/sidebar.tpl" sidebar=$primarySidebar}
{if !$inShoppingCart && $secondarySidebar->hasChildren()}
{include file="$template/includes/sidebar.tpl" sidebar=$secondarySidebar}
{/if}
                
            </div>
        {/if}
        <!-- Container for main page display content -->
        <div class="{if !$inShoppingCart && ($primarySidebar->hasChildren() || $secondarySidebar->hasChildren())}col-md-9 pull-left{else}col-xs-12{/if} main-content">
            {if !$primarySidebar->hasChildren() && !$showingLoginPage && !$inShoppingCart && $templatefile != 'homepage'}
                {include file="$template/includes/pageheader.tpl" title=$displayTitle desc=$tagline showbreadcrumb=true}
            {/if}



