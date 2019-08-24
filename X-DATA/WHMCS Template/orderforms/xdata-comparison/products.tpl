<link type="text/css" rel="stylesheet" href="{$WEB_ROOT}/templates/orderforms/{$carttpl}/css/style.css" property="stylesheet" />

<div class="row row-product-selection">
    <div class="pull-md-right col-md-9">

        <div class="header-lined">
            <h1>
                {if $productGroup.headline} {$productGroup.headline} {else} {$productGroup.name} {/if}
            </h1>
            {if $productGroup.tagline}
            <p class="tagline">{$productGroup.tagline}</p>
            {/if}
        </div>
        {if $errormessage}
        <div class="alert alert-danger">
            {$errormessage}
        </div>
        {/if}
    </div>

    <div class="col-md-3 pull-md-left sidebar hidden-xs hidden-sm">
        {include file="orderforms/xdata-standard/sidebar-categories.tpl"}
    </div>
    
    <div class="col-xs-9">
        <div id="order-pure_comparison" class="page-container">
            <div class="txt-center">
             {if $errormessage}
                <div class="alert alert-danger">
                    {$errormessage}
                </div>
                {/if}
            </div>
            <div id="products" class="price-table-container">
                <ul>
                    {foreach $products as $product}
                    <li id="product{$product@iteration}">
                        <div class="price-table{if $product.isFeatured} active{/if}">
                            <div class="top-head">
                                <div class="top-area">
                                    <h4 id="product{$product@iteration}-name">
                                        <i class="fa fa-database custom-cart"></i> {$product.name}
                                    </h4>
                                    {if $product.isFeatured}
                                    <div class="popular-plan">
                                        <div class="plan-container">
                                            <div class="txt-container">{$LANG.featuredProduct|upper}</div>
                                        </div>
                                    </div>
                                    {/if} {if $product.tagLine}
                                    <p id="product{$product@iteration}-tag-line">{$product.tagLine}</p>
                                    {/if}
                                </div>
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
                            <div class="price-area">
                                <div class="price" id="product{$product@iteration}-price">
                                    {if $product.bid} {$LANG.bundledeal} {if $product.displayprice}
                                    <br /><br /><span>{$product.displayPriceSimple}</span> {/if} {elseif $product.paytype eq "free"} {$LANG.orderfree} {elseif $product.paytype eq "onetime"} {$product.pricing.onetime} {$LANG.orderpaymenttermonetime} {else} {if $product.pricing.hasconfigoptions} {$LANG.from} {/if} {$product.pricing.minprice.cycleText} {/if}
                                </div>
                                {if $product.qty eq "0"}
                                <span id="product{$product@iteration}-unavailable" class="order-button unavailable">
                                            {$LANG.outofstock}
                                        </span> {else}
                                <a href="{$smarty.server.PHP_SELF}?a=add&amp;{if $product.bid}bid={$product.bid}{else}pid={$product.pid}{/if}" class="order-button" id="product{$product@iteration}-order-button">
                                            {$LANG.ordernowbutton}
                                        </a> {/if}
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