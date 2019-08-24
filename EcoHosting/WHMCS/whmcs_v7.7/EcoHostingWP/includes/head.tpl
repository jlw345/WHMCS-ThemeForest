<!-- Styling -->
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,600|Raleway:400,700">
<link rel="stylesheet" href="{$WEB_ROOT}/templates/{$template}/css/all.min.css?v={$versionHash}">
<link href="{$WEB_ROOT}/assets/css/fontawesome-all.min.css" rel="stylesheet">

<!-- EcoHosting Styling -->
<link rel="stylesheet" href="{$WEB_ROOT}/templates/{$template}/css/ecohosting-style.css">
<link rel="stylesheet" href="{$WEB_ROOT}/templates/{$template}/css/ecohosting-style-responsive.css">
<link rel="stylesheet" href="{$WEB_ROOT}/templates/{$template}/css/colors/theme-color-1.css" id="theme_color">

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
        saving = '{lang key="markdown.saving"}',
        whmcsBaseUrl = "{\WHMCS\Utility\Environment\WebHelper::getBaseUrl()}",
        requiredText = '{lang key="orderForm.required"}',
        recaptchaSiteKey = "{if $captcha}{$captcha->recaptcha->getSiteKey()}{/if}";
</script>
<script src="{$WEB_ROOT}/templates/{$template}/js/scripts.min.js?v={$versionHash}"></script>

{if $templatefile == "viewticket" && !$loggedin}
  <meta name="robots" content="noindex" />
{/if}
