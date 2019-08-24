<!-- Styling -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600%7CRaleway:400,700%7CRoboto:300,400,500,700,900%7CMontserrat:700" rel="stylesheet">
<link href="{$WEB_ROOT}/templates/{$template}/css/all.min.css?v={$versionHash}" rel="stylesheet">
<link href="{$WEB_ROOT}/templates/{$template}/css/custom.css" rel="stylesheet">

<!-- Theme Styling -->
<link href="{$WEB_ROOT}/templates/{$template}/css/theme/fakeLoader.css" rel="stylesheet">
<link href="{$WEB_ROOT}/templates/{$template}/css/theme/theme.css" rel="stylesheet">
<link href="{$WEB_ROOT}/templates/{$template}/css/theme/theme-responsive.css" rel="stylesheet">
<link href="{$WEB_ROOT}/templates/{$template}/css/theme/theme-overrides.css" rel="stylesheet">
<link href="{$WEB_ROOT}/templates/{$template}/css/theme/theme-color-8.css" rel="stylesheet">

<!-- Custom Styling -->
<link rel="stylesheet" href="{$WEB_ROOT}/templates/{$template}/css/custom.css">

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
