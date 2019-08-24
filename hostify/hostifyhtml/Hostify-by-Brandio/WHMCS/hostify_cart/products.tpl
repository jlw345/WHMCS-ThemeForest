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

<div id="pricing" class="row row-product-selection">
    <div class="col-xs-3 product-selection-sidebar" id="premiumComparisonSidebar">
        {include file="orderforms/standard_cart/sidebar-categories.tpl"}
    </div>
    <div class="col-xs-12">

        <div id="order-hostify_cart" class="page-container">
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
                        {if $counter>3}
                    		{assign var=counter value=1}
                		{/if}
                        <li id="product{$product@iteration}" class="col-md-4">
                            <div class="pricing-box pricing-box-simple pricing-color{$counter}{if $product.isFeatured} bestbuy{/if}" style="width: 100%">
                                <div class="pricing-content">
                                    <div class="pricing-head">
                                        <div id="product{$product@iteration}-name" class="pricing-title">{$product.name}</div>
                                        
                                        {assign var="countava" value=0}
                                        {if $product.pricing.rawpricing.monthly != -1}
                                            {assign var=countava value=$countava+1}
                                        {/if}
                                        {if $product.pricing.rawpricing.quarterly != -1}
                                            {assign var=countava value=$countava+1}
                                        {/if}
                                        {if $product.pricing.rawpricing.semiannually != -1}
                                            {assign var=countava value=$countava+1}
                                        {/if}
                                        {if $product.pricing.rawpricing.annually != -1}
                                            {assign var=countava value=$countava+1}
                                        {/if}
                                        {if $product.pricing.rawpricing.biennially != -1}
                                            {assign var=countava value=$countava+1}
                                        {/if}
                                        {if $product.pricing.rawpricing.triennially != -1}
                                            {assign var=countava value=$countava+1}
                                        {/if}
                                        
                                        <div id="product{$product@iteration}-price">
                                            {if $product.bid}
                                                {$LANG.bundledeal}
                                                {if $product.displayprice}
                                                    <div class="display-price">{$product.displayPriceSimple}</div>
                                                {/if}
                                            {elseif $product.paytype eq "free"}
                                                    <div class="free-plan">{$LANG.orderfree}</div>
                                            {elseif $product.paytype eq "onetime"}
                                                    <div class="one-time">{$product.pricing.onetime->toPrefixed()} {$LANG.orderpaymenttermonetime}</div>
                                            {else}
                                                {if $product.pricing.hasconfigoptions}
                                                    {*
                                                    {$LANG.from}
                                                    *}
                                                {/if}
                                                    {if $countava>1}
                                                        <div class="pricing-options">
                                                            <ul class="nav nav-tabs">
                                                                {if $product.pricing.rawpricing.monthly != -1}
                                                                <li class="active"><a data-toggle="tab" href="#monthly{$product@iteration}">{$LANG.orderpaymenttermmonthly}</a></li>
                                                                {/if}
                                                                {if $product.pricing.rawpricing.quarterly != -1}
                                                                <li><a data-toggle="tab" href="#quarterly{$product@iteration}">{$LANG.orderpaymenttermquarterly}</a></li>
                                                                {/if}
                                                                {if $product.pricing.rawpricing.semiannually != -1}
                                                                <li><a data-toggle="tab" href="#semiannually{$product@iteration}">{$LANG.orderpaymenttermsemiannually}</a></li>
                                                                {/if}
                                                                {if $product.pricing.rawpricing.annually != -1}
                                                                <li><a data-toggle="tab" href="#annualy{$product@iteration}">{$LANG.orderpaymenttermannually}</a></li>
                                                                {/if}
                                                                {if $product.pricing.rawpricing.biennially != -1}
                                                                <li><a data-toggle="tab" href="#biennially{$product@iteration}">{$LANG.orderpaymenttermbiennially}</a></li>
                                                                {/if}
                                                                {if $product.pricing.rawpricing.triennially != -1}
                                                                <li><a data-toggle="tab" href="#triennially{$product@iteration}">{$LANG.orderpaymenttermtriennially}</a></li>
                                                                {/if}
                                                            </ul>
                                                            <div class="tab-content">
                                                                {if $product.pricing.rawpricing.monthly != -1}
                                                                <div id="monthly{$product@iteration}" class="tab-pane fade in active">
                                                                    <div class="pricing-price">{$currency.prefix}{$product.pricing.rawpricing.monthly}
                                                                    </div>
                                                                    <div class="billing-cycle">{$LANG.orderpaymenttermmonthly}</div>
                                                                    {if $product.pricing.rawpricing.msetupfee > 0}
                                                                    <div class="setup-fee">
                                                                    {$currency.prefix}{$product.pricing.rawpricing.msetupfee} {$LANG.ordersetupfee}
                                                                    </div>
                                                                    {/if}
                                                                </div>
                                                                {/if}
                                                                {if $product.pricing.rawpricing.quarterly != -1}
                                                                <div id="quarterly{$product@iteration}" class="tab-pane fade">
                                                                    <div class="pricing-price">{$currency.prefix}{$product.pricing.rawpricing.quarterly}</div>
                                                                    <div class="billing-cycle">{$LANG.orderpaymenttermquarterly}</div>
                                                                    {if $product.pricing.rawpricing.qsetupfee > 0}
                                                                    <div class="setup-fee">
                                                                    {$currency.prefix}{$product.pricing.rawpricing.qsetupfee} {$LANG.ordersetupfee}
                                                                    </div>
                                                                    {/if}
                                                                </div>
                                                                {/if}
                                                                {if $product.pricing.rawpricing.semiannually != -1}
                                                                <div id="semiannually{$product@iteration}" class="tab-pane fade">
                                                                    <div class="pricing-price">{$currency.prefix}{$product.pricing.rawpricing.semiannually}</div>
                                                                    <div class="billing-cycle">{$LANG.orderpaymenttermsemiannually}</div>
                                                                    {if $product.pricing.rawpricing.ssetupfee > 0}
                                                                    <div class="setup-fee">
                                                                    {$currency.prefix}{$product.pricing.rawpricing.ssetupfee} {$LANG.ordersetupfee}
                                                                    </div>
                                                                    {/if}
                                                                </div>
                                                                {/if}
                                                                {if $product.pricing.rawpricing.annually != -1}
                                                                <div id="annualy{$product@iteration}" class="tab-pane fade">
                                                                    <div class="pricing-price">{$currency.prefix}{$product.pricing.rawpricing.annually}</div>
                                                                    <div class="billing-cycle">{$LANG.orderpaymenttermannually}</div>
                                                                    {if $product.pricing.rawpricing.asetupfee > 0}
                                                                    <div class="setup-fee">
                                                                    {$currency.prefix}{$product.pricing.rawpricing.asetupfee} {$LANG.ordersetupfee}
                                                                    </div>
                                                                    {/if}
                                                                </div>
                                                                {/if}
                                                                {if $product.pricing.rawpricing.biennially != -1}
                                                                <div id="biennially{$product@iteration}" class="tab-pane fade">
                                                                    <div class="pricing-price">{$currency.prefix}{$product.pricing.rawpricing.biennially}</div>
                                                                    <div class="billing-cycle">{$LANG.orderpaymenttermbiennially}</div>
                                                                    {if $product.pricing.rawpricing.bsetupfee > 0}
                                                                    <div class="setup-fee">
                                                                    {$currency.prefix}{$product.pricing.rawpricing.bsetupfee} {$LANG.ordersetupfee}
                                                                    </div>
                                                                    {/if}
                                                                </div>
                                                                {/if}
                                                                {if $product.pricing.rawpricing.triennially != -1}
                                                                <div id="triennially{$product@iteration}" class="tab-pane fade">
                                                                    <div class="pricing-price">{$currency.prefix}{$product.pricing.rawpricing.triennially}</div>
                                                                    <div class="billing-cycle">{$LANG.orderpaymenttermtriennially}</div>
                                                                    {if $product.pricing.rawpricing.tsetupfee > 0}
                                                                    <div class="setup-fee">
                                                                    {$currency.prefix}{$product.pricing.rawpricing.tsetupfee} {$LANG.ordersetupfee}
                                                                    </div>
                                                                    {/if}
                                                                </div>
                                                                {/if}
                                                            </div>
                                                        </div>
                                                        <script>
                                                            $('.pricing-options ul.nav li:first-child','#products').addClass('active');
                                                            $('.pricing-options .tab-content .tab-pane:first-child','#products').addClass('in active');
                                                        </script>
                                                    {else}
                                                    <div class="pricing-price">{$product.pricing.minprice.price->toPrefixed()}</div>
                                                    <div class="billing-cycle">{$product.pricing.minprice.cycle}</div>
                                                    {/if}
                                                {if $countava<=1}
                                                    {if $product.pricing.minprice.setupFee}
                                                        <div class="setup-fee">
                                                        {$product.pricing.minprice.setupFee->toPrefixed()} {$LANG.ordersetupfee}
                                                        </div>
                                                    {/if}
                                                {/if}
                                            {/if}
                                        </div>
                                    </div>
                                    <div class="pricing-details">
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
                                    </div>
                                    <script>
                                    $('#product{$product@iteration} .pricing-details > ul > li > br').remove();
                                    $('#product{$product@iteration} .pricing-details .pricing-features').find('br').remove();
                                    $('#product{$product@iteration} .pricing-details .pricing-features').detach().insertAfter('#product{$product@iteration} .pricing-head .pricing-title');
                                    </script>
                                    <div class="pricing-link">
                                        {if $product.qty eq "0"}
                                            <a class="ybtn unavailable" href="#" id="product{$product@iteration}-unavailable">{$LANG.outofstock}</a>
                                        {else}
                                            <a class="ybtn" href="{$smarty.server.PHP_SELF}?a=add&amp;{if $product.bid}bid={$product.bid}{else}pid={$product.pid}{/if}" id="product{$product@iteration}-order-button">
                                                {$LANG.ordernowbutton}
                                            </a>
                                        {/if}
                                    </div>
                                </div>
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
