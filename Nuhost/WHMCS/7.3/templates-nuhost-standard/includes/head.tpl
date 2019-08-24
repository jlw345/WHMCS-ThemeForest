<!-- Styling -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600|Raleway:400,700" rel="stylesheet">
<link href="{$WEB_ROOT}/templates/{$template}/css/all.min.css?v={$versionHash}" rel="stylesheet">

<link href="{$WEB_ROOT}/templates/{$template}/icons/flaticon.css" rel="stylesheet">
<link href="{$WEB_ROOT}/templates/{$template}/icons-t/flaticon.css" rel="stylesheet">
<link href="{$WEB_ROOT}/templates/{$template}/css/main.css" rel="stylesheet">
<link href="{$WEB_ROOT}/templates/{$template}/css/bootstrap.offcanvas.min.css" rel="stylesheet">
<link href="{$WEB_ROOT}/templates/{$template}/css/animate.css" rel="stylesheet">
<link href="{$WEB_ROOT}/templates/{$template}/css/responsive.css" rel="stylesheet">	
	
<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet"><!-- Nunito font -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700" rel="stylesheet"><!-- Montserrat font -->
<link href="https://fonts.googleapis.com/css?family=Heebo:300,400,500,700" rel="stylesheet"><!-- Heebo font -->

<link rel="stylesheet" href="{$WEB_ROOT}/templates/{$template}/css/flickity.min.css">

<link rel="stylesheet" href="{$WEB_ROOT}/templates/{$template}/css/modal-video.min.css">
<script src="{$WEB_ROOT}/templates/{$template}/js/modal-video.min.js"></script>
		
<link rel="stylesheet" href="{$WEB_ROOT}/templates/{$template}/owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="{$WEB_ROOT}/templates/{$template}/owlcarousel/assets/owl.theme.default.min.css">


<link href="{$WEB_ROOT}/templates/{$template}/css/custom.css" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<script type="text/javascript">
    var csrfToken = '{$token}',
        markdownGuide = '{lang key="markdown.title"}',
        locale = '{if !empty($mdeLocale)}{$mdeLocale}{else}en{/if}',
        saved = '{lang key="markdown.saved"}',
        saving = '{lang key="markdown.saving"}';
</script>
<script src="{$WEB_ROOT}/templates/{$template}/js/scripts.min.js?v={$versionHash}"></script>

{if $templatefile == "viewticket" && !$loggedin}
  <meta name="robots" content="noindex" />
{/if}
