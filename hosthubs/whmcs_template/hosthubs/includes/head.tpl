<!-- Bootstrap 
<link href="{$BASE_PATH_CSS}/bootstrap.min.css" rel="stylesheet">
-->


<link href="{$BASE_PATH_CSS}/font-awesome.min.css" rel="stylesheet">

<!-- Styling -->
<link href="{$WEB_ROOT}/templates/{$template}/css/overrides.css" rel="stylesheet">
<link href="{$WEB_ROOT}/templates/{$template}/css/styles.css" rel="stylesheet">

<!-- jQuery -->
<script src="{$BASE_PATH_JS}/jquery.min.js"></script>

<!-- Custom Styling -->
<link rel="stylesheet" href="{$WEB_ROOT}/templates/{$template}/css/custom.css">

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="{$WEB_ROOT}/templates/{$template}/assets/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="{$WEB_ROOT}/templates/{$template}/assets/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="{$WEB_ROOT}/templates/{$template}/assets/images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{$WEB_ROOT}/templates/{$template}/assets/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{$WEB_ROOT}/templates/{$template}/assets/images/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{$WEB_ROOT}/templates/{$template}/assets/images/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{$WEB_ROOT}/templates/{$template}/assets/images/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{$WEB_ROOT}/templates/{$template}/assets/images/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{$WEB_ROOT}/templates/{$template}/assets/images/apple-touch-icon-152x152.png">

    <!-- BOOTSTRAP STYLES -->
    <link rel="stylesheet" type="text/css" href="{$WEB_ROOT}/templates/{$template}/assets/css/bootstrap.css">
    <!-- TEMPLATE STYLES -->
    <link rel="stylesheet" type="text/css" href="{$WEB_ROOT}/templates/{$template}/style.css">
    <!-- RESPONSIVE STYLES -->
    <link rel="stylesheet" type="text/css" href="{$WEB_ROOT}/templates/{$template}/assets/css/responsive.css">
    <!-- CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="{$WEB_ROOT}/templates/{$template}/assets/css/custom.css">
    <!-- WHMCS STYLES -->
    <link rel="stylesheet" type="text/css" href="{$WEB_ROOT}/templates/{$template}/assets/css/whmcs.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

{if !empty($loadMarkdownEditor)}
    <!-- Markdown Editor -->
    <link href="{$BASE_PATH_CSS}/bootstrap-markdown.min.css" rel="stylesheet" />
    <script src="{$BASE_PATH_JS}/bootstrap-markdown.js"></script>
    <script src="{$BASE_PATH_JS}/markdown.min.js"></script>
    <script src="{$BASE_PATH_JS}/to-markdown.js"></script>
    {if !empty($mdeLocale)}
        {$mdeLocale}
    {/if}
{/if}

{if $templatefile == "viewticket" && !$loggedin}
  <meta name="robots" content="noindex" />
{/if}
