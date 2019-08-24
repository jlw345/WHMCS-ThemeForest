<link type="text/css" rel="stylesheet" href="{$WEB_ROOT}/templates/orderforms/{$carttpl}/css/style.css" property="stylesheet" />
<script>
$(document).ready(function () {
    $('#btnShowSidebar').click(function () {
        if ($(".product-selection-sidebar").is(":visible")) {
            $('.row-product-selection').css('left','0');
            $('.product-selection-sidebar').fadeOut();
            $('#btnShowSidebar').html('<i class="fa fa-arrow-circle-right"></i> {$LANG.showMenu}');
        } else {
            $('.product-selection-sidebar').fadeIn();
            $('.row-product-selection').css('left','300px');
            $('#btnShowSidebar').html('<i class="fa fa-arrow-circle-left"></i> {$LANG.hideMenu}');
        }
    });
});
</script>

{if $showSidebarToggle}
    <button type="button" class="btn btn-default btn-sm" id="btnShowSidebar">
        <i class="fa fa-arrow-circle-right"></i>
        {$LANG.showMenu}
    </button>
{/if}

<div id="pricing" class="row row-product-selection">
    <div class="col-xs-3 product-selection-sidebar" id="premiumComparisonSidebar">
        {include file="orderforms/standard_cart/sidebar-categories.tpl"}
    </div>
    <div class="col-xs-12">

        <div id="order-hostbox_cart" class="page-container">
            <div class="txt-center txt-title">
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
                <ul id="sub-pricing">
                    {foreach $products as $product}
                        {assign var="counter" value=$product@iteration}
                        {if $counter>4}
                    		{assign var=counter value=1}
                		{/if}
                        <li id="product{$product@iteration}" class="col-md-3 col-sm-6">
                            <div class="price-table pr-color{$counter}">
                                <div class="price-top-bar">
                                    <div class="pbar color{$counter}-bg"></div>
                                    <div class="diamond">
                                        <div class="diamond-back"><div class="color{$counter}-bg"></div></div>
                                        <div class="diamond-top"><div class="color{$counter}-bg"></div></div>
                                        <div class="diamond-bottom"><div class="color{$counter}-bg"></div></div>
                                    </div>
                                </div>
                                <div id="product{$product@iteration}-name" class="price-title color{$counter}-bg">{$product.name}</div>

                                <div class="price accent-color-text">
                                    {if $product.isFeatured}
                                        <div class="popular-plan">
                                            <div class="plan-container">
                                                <div class="txt-container">{$LANG.featuredProduct|upper}</div>
                                            </div>
                                        </div>
                                    {/if}
                                    {if $product.tagLine}
                                        <p id="product{$product@iteration}-tag-line">{$product.tagLine}</p>
                                    {/if}
                                    <span class="monthly-num">
                                        <div class="price">
                                            {if $product.bid}
                                                {$LANG.bundledeal}
                                                {if $product.displayprice}
                                                    <span class="amount">{$product.displayPriceSimple}</span>
                                                {/if}
                                            {elseif $product.paytype eq "free"}
                                                    <span class="amount">{$LANG.orderfree}</span>
                                            {elseif $product.paytype eq "onetime"}
                                                    <span class="amount">{$product.pricing.onetime} {$LANG.orderpaymenttermonetime}</span>
                                            {else}
                                                {if $product.pricing.hasconfigoptions}
                                                    {$LANG.from}
                                                {/if}
                                                    <span class="amount">{$product.pricing.minprice.cycleText}</span>
                                                {if $product.pricing.minprice.setupFee}
                                                    <span class="amount">{$product.pricing.minprice.setupFee->toPrefixed()} {$LANG.ordersetupfee}</span>
                                                {/if}
                                            {/if}
                                        </div>
                                    </span>
                                </div>
                                <ul id="productDescription{$product@iteration}">
                                    {foreach $product.features as $feature => $value}
                                        <li id="product{$product@iteration}-feature{$value@iteration}">
                                            <span>{$value}</span> {$feature}
                                        </li>
                                    {foreachelse}
                                        <li id="product{$product@iteration}-description">
                                            {$product.description}
                                        </li>
                                    {/foreach}
                                </ul>
                                {if $product.qty eq "0"}
                                <a class="price-btn unavailable" href="#" id="product{$product@iteration}-unavailable"><div class="pr-signup-button accent-color-bg">{$LANG.outofstock}</div></a>
                                {else}
                                    <a class="price-btn" href="{$smarty.server.PHP_SELF}?a=add&amp;{if $product.bid}bid={$product.bid}{else}pid={$product.pid}{/if}" id="product{$product@iteration}-order-button">
                                        <div class="pr-signup-button accent-color-bg">{$LANG.ordernowbutton}</div>
                                    </a>
                                {/if}
                            </div>
                        </li>
                    {/foreach}
                </ul>
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
