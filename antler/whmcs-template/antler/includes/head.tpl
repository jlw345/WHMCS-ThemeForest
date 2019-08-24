<!-- Styling -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600|Raleway:400,700" rel="stylesheet">
<link href="{$WEB_ROOT}/templates/{$template}/css/all.min.css?v={$versionHash}" rel="stylesheet">
<link href="{$WEB_ROOT}/templates/{$template}/css/custom.css" rel="stylesheet">

<!-- Antler styles -->
<link href="{$WEB_ROOT}/templates/{$template}/assets/fonts/cloudicon/cloudicon.css?v={$versionHash}" rel="stylesheet">
<link href="{$WEB_ROOT}/assets/css/fontawesome-all.min.css" rel="stylesheet">
<link href="{$WEB_ROOT}/templates/{$template}/assets/fonts/opensans/opensans.css?v={$versionHash}" rel="stylesheet">
<link href="{$WEB_ROOT}/templates/{$template}/assets/css/owl.carousel.css?v={$versionHash}" rel="stylesheet">
<link href="{$WEB_ROOT}/templates/{$template}/assets/css/main.css?v={$versionHash}" rel="stylesheet">

<!-- Antler custom color styles -->
<link href="{$WEB_ROOT}/templates/{$template}/assets/css/colors/pink.css" rel="stylesheet" title="pink"/>
<link href="{$WEB_ROOT}/templates/{$template}/assets/css/colors/blue.css" rel="stylesheet" title="blue"/ >
<link href="{$WEB_ROOT}/templates/{$template}/assets/css/colors/green.css" rel="stylesheet" title="green"/>

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
<script src="{$WEB_ROOT}/templates/{$template}/assets/js/main.js?v={$versionHash}"></script>
<script src="{$WEB_ROOT}/templates/{$template}/assets/js/owl.carousel.min.js?v={$versionHash}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.1/typed.min.js"></script>


{if $templatefile == "viewticket" && !$loggedin}
  <meta name="robots" content="noindex" />
{/if}
