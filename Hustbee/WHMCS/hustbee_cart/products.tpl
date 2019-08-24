<link type="text/css" rel="stylesheet" href="{$WEB_ROOT}/templates/orderforms/{$carttpl}/css/style.css" property="stylesheet" />
<script>
jQuery(document).ready(function () {
    jQuery('#btnShowSidebar').click(function () {
        if (jQuery(".product-selection-sidebar").is(":visible")) {
            jQuery('.row-product-selection').css('left','0');
            jQuery('.product-selection-sidebar').fadeOut();
            jQuery('#btnShowSidebar').html('<i class="fas fa-arrow-circle-right"></i> {$LANG.showMenu}');
        } else {
            jQuery('.product-selection-sidebar').fadeIn();
            jQuery('.row-product-selection').css('left','300px');
            jQuery('#btnShowSidebar').html('<i class="fas fa-arrow-circle-left"></i> {$LANG.hideMenu}');
        }
    });
});
</script>

{if $showSidebarToggle}
    <button type="button" class="btn btn-default btn-sm" id="btnShowSidebar">
        <i class="fas fa-arrow-circle-right"></i>
        {$LANG.showMenu}
    </button>
{/if}

<div class="row row-product-selection">
    <div class="col-xs-3 product-selection-sidebar" id="premiumComparisonSidebar">
        {include file="orderforms/standard_cart/sidebar-categories.tpl"}
    </div>
    <div class="col-xs-12">
        <div id="order-hustbee_cart" class="page-container sub-pricing">
            <div class="txt-center">
                <h3 id="headline">
                    {if $productGroup.headline}
                        {$productGroup.headline}
                    {else}
                        {$productGroup.name}
                    {/if}
                </h3>
                {if $productGroup.tagline}
                    <h5 id="tagline">
                        {$productGroup.tagline}
                    </h5>
                {/if}
                {if $errormessage}
                    <div class="alert alert-danger">
                        {$errormessage}
                    </div>
                {/if}
            </div>
            <div id="products" class="price-table-container">
                <div class="pricing-holder">
                    <div class="row">
                        {foreach $products as $product}
                        <div id="product{$product@iteration}" class="col-sm-6 col-md-4">
                            <div class="pricing-box inner{if $product.isFeatured} featured{/if}">
                                <div id="product{$product@iteration}-name" class="pricing-title">{$product.name}</div>
                                {if $product.tagLine}
                                    <div id="product{$product@iteration}-tag-line" class="pricing-tagline">{$product.tagLine}</div>
                                {/if}
                                <div class="pricing-price">
                                    <div id="product{$product@iteration}-price" class="price">
                                        {if $product.bid}
                                            {$LANG.bundledeal}
                                            {if $product.displayprice}
                                                <br /><br /><span>{$product.displayPriceSimple}</span>
                                            {/if}
                                        {elseif $product.paytype eq "free"}
                                            <span class="num">{$LANG.orderfree}</span>
                                        {elseif $product.paytype eq "onetime"}
                                            <span class="num">{$product.pricing.onetime}</span><span class="duration">{$LANG.orderpaymenttermonetime}</span>
                                        {else}
                                            {if $product.pricing.hasconfigoptions}
                                                <span class="num">{$LANG.from}</span>
                                            {/if}
                                            <span class="duration">{$product.pricing.minprice.cycleText}</span>
                                            <br>
                                            {if $product.pricing.minprice.setupFee}
                                                <small>{$product.pricing.minprice.setupFee->toPrefixed()} {$LANG.ordersetupfee}</small>
                                            {/if}
                                        {/if}
                                    </div>
                                </div>
                                <div class="pricing-button">
                                    {if $product.qty eq "0"}
                                        <span id="product{$product@iteration}-unavailable" class="order-button unavailable">
                                            {$LANG.outofstock}
                                        </span>
                                    {else}
                                        <a href="{$smarty.server.PHP_SELF}?a=add&amp;{if $product.bid}bid={$product.bid}{else}pid={$product.pid}{/if}" id="product{$product@iteration}-order-button">
                                            {$LANG.ordernowbutton}
                                        </a>
                                    {/if}
                                </div>
                                <div class="pricing-details">
                                    {foreach $product.features as $feature => $value}
                                        <div id="product{$product@iteration}-feature{$value@iteration}">
                                            <span>{$value}</span> {$feature}
                                        </div>
                                    {foreachelse}
                                        {$product.description}
                                    {/foreach}  
                                </div>
                            </div>
                        </div>
                        {/foreach}
                    </div>
                </div>
            </div>

            {if count($productGroup.features) > 0}
                <div class="includes-features">
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <div class="head-area">
                                <span>
                                    {$LANG.orderForm.includedWithPlans}
                                </span>
                            </div>
                            <ul class="list-features">
                                {foreach $productGroup.features as $features}
                                    <li>{$features.feature}</li>
                                {/foreach}
                            </ul>
                        </div>
                    </div>
                </div>
            {/if}

        </div>
    </div>
</div>
