
<!--Plugin CSS file with desired skin-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/css/ion.rangeSlider.min.css"/>
<link rel="stylesheet" id="slider-1-css" type="text/css" href="{$WEB_ROOT}/templates/orderforms/slider_cart_1/css/slider1.css" media="all" />

<div id="order-standard_cart">




    <div class="row">

        <div class="pull-md-right col-md-12">

            <div class="header-lined">
                <h1>
                    {if $productGroup.headline}
                        {$productGroup.headline}
                    {else}
                        {$productGroup.name}
                    {/if}
                </h1>
                {if $productGroup.tagline}
                    <p>{$productGroup.tagline}</p>
                {/if}
            </div>
            {if $errormessage}
                <div class="alert alert-danger">
                    {$errormessage}
                </div>
            {/if}
        </div>

        <div class="col-md-9 pull-md-left">

            {include file="orderforms/standard_cart/sidebar-categories-collapsed.tpl"}

            {foreach $hookAboveProductsOutput as $output}
                <div>
                    {$output}
                </div>
            {/foreach}

            {*<pre style="text-align: left"> {$products|@print_r}</pre>*}

            <div class="slider-container slider_container_outer1 bg_color_fafafa">

                <!-- Package names -->
              {*  <div class="price_rangetxt">
                    {foreach $products as $key => $p}
                        <div id="icon-{$key}" class="icon"><span>{$p.name}</span></div>
                        {if $p.isFeatured}
                            {assign var=isFeatured value={$p@iteration}}
                        {/if}
                    {/foreach}
                    <div class="clear"></div>
                </div> *}
                <!-- EOF Package names -->

                <!--Slider Bar-->

                {*<input type="text" class="js-range-slider" name="my_range" value="{($isFeatured) ? $isFeatured : 1}"
                       data-min="1"
                       data-max="{count($products)}"
                       data-grid="true"
                       data-step = "1"
                />*}



        <div class="range_slider1_input">
                <input type="text" class="js-range-slider" name="my_range"/>
        </div>

                <!-- EOF Slider Bar-->

                {foreach $products as $key => $p}
                    <div id="product_stats_{$p@iteration}" class="product_stats price_content" style="display: none;">
                        <div class="price-box-section col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <!-- Package features if defined -->
                            {foreach $p.features as $feature => $value}
                                <div class="smallbox">
                                    <div class="value_text">{$feature}<span class="value">{$value}</span></div>
                                    <!--smallbox-->
                                </div>
                            {/foreach}
                            <div class="clearfix"></div>
                            <!--smallbox-->
                        </div>
                        <!-- Package features if defined -->

                        <!-- features description  if defined any featured defined -->
                        {if count($p.features) > 0}
                            {if $p.featuresdesc}
                                <p id="product{$p@iteration}-description">
                                    {$p.featuresdesc}
                                </p>
                            {/if}
                        <!-- EOF features description  if defined any featured defined -->
                        <!-- Package description  if no featured defined -->
                        {else}
                            <p id="product{$p@iteration}-description">
                                {$p.description}
                            </p>
                        {/if}
                        <!-- EOF Package description  if no featured defined -->

<div class="pricebox">
                        <!-- Bundle Price if defined-->
                        {if $p.bid}
                            {$LANG.bundledeal}
                            {if $p.displayprice}
                                <span class="numeric1 price_val">{$p.displayprice}</span>
                            {/if}
                        <!-- EOF Bundle Price if defined-->
                        <!-- Normal price if package not a bundle-->
                        {else}
                            <div class="price_txt smallbox">
                                <!-- setup fee price if defined-->
                                {if $p.pricing.minprice.setupFee}
                                    <span class="pull-right text-right price-setupfee">
                                        <span class="numeric1 price_val">{$p.pricing.minprice.setupFee->toPrefixed()}</span>
                                        <small>{$LANG.ordersetupfee} / </small>
                                    </span>
                                {/if}
                                <!-- EOF setup fee price if defined-->
                                <span class="numeric1 price_val">{$p.pricing.minprice.price}</span>
                                <small>
                                    {if $p.pricing.minprice.cycle eq "monthly"}
                                        {$LANG.orderpaymenttermmonthly}
                                    {elseif $p.pricing.minprice.cycle eq "quarterly"}
                                        {$LANG.orderpaymenttermquarterly}
                                    {elseif $p.pricing.minprice.cycle eq "semiannually"}
                                        {$LANG.orderpaymenttermsemiannually}
                                    {elseif $p.pricing.minprice.cycle eq "annually"}
                                        {$LANG.orderpaymenttermannually}
                                    {elseif $p.pricing.minprice.cycle eq "biennially"}
                                        {$LANG.orderpaymenttermbiennially}
                                    {elseif $p.pricing.minprice.cycle eq "triennially"}
                                        {$LANG.orderpaymenttermtriennially}
                                    {/if}
                                </small>
                            </div>
                        {/if}
                        <!-- EOF Normal price if package not a bundle-->

                        <!-- If package out of stock -->
                        {if $p.qty eq "0"}
                            <span class="order-button unavailable">
                                {$LANG.outofstock}
                            </span>
                        <!-- EOF If package out of stock -->
                        <!-- Order link -->
                        {else}
                            <a href="{$smarty.server.PHP_SELF}?a=add&amp;{if $p.bid}bid={$p.bid}{else}pid={$p.pid}{/if}"
                               class="btn btn-default btn-lg btn-3d">
                                {$LANG.ordernowbutton}
                            </a>
                        {/if}
                        <!-- EOF Order link -->
</div>

                        <div class="clear"></div>
                        <!--price_content-->
                    </div>
                {/foreach}
                <!--slider-container-->
            </div>

            {foreach $hookBelowProductsOutput as $output}
                <div>
                    {$output}
                </div>
            {/foreach}

        </div>

        <div class="col-md-3 pull-md-right sidebar hidden-xs hidden-sm">
            {include file="orderforms/standard_cart/sidebar-categories.tpl"}
        </div>
    </div>
</div>
<!--Plugin JavaScript file-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/js/ion.rangeSlider.min.js"></script>
<script type="text/javascript">
    var previousVal = 0;
    var packagesArr = new Array();
    {foreach $products as $key => $p}
    packagesArr.push('{$p.name}');
    {/foreach}
    //console.log(packagesArr);
    var $slider = $(".js-range-slider");
    $slider.ionRangeSlider({
        grid: "true",
        step:1,
        values: packagesArr,
        onChange: function (data) {
            $('.product_stats').hide();
            $('#product_stats_'+(data.from+1)).show();
        },
        onStart: function (data) {
            // fired then range slider is ready
            $('.product_stats').hide();
            $('#product_stats_'+(data.from+1)).show();
        },

        onFinish: function (data) {
            // fired on pointer release
            $('.product_stats').hide();
            $('#product_stats_'+(data.from+1)).show();
            $('.irs-grid .irs-grid-text').each(function( index ) {
                $(this).addClass('icon');
                $(this).attr('id','icon-'+index);
            });
        
        },
        onUpdate: function (data) {
            // fired on changing slider with Update method
            $('.product_stats').hide();
            $('#product_stats_'+(data.from+1)).show();
            if(previousVal == data.from ){
                $('.irs-grid .irs-grid-text').each(function( index ) {
                $(this).addClass('icon');
                $(this).attr('id','icon-'+index);
                if(index==data.from)
                    $(this).addClass('active');
                });
            }

        }
    });
    var from2 =0;


    $slider.on("change", function (e) {
        //var from = $(this).prop("value"); // reading input value
        //var from2 = $(this).data("from"); // reading input data-from attribute
        from2 = $(this).data("from");
        previousVal = from2;
        $('.irs-grid .irs-grid-text').each(function( index ) {
            $(this).addClass('icon');
            $(this).attr('id','icon-'+index);
            if(index==from2)
                $(this).addClass('active');
        });

    });




    $('.irs-grid .irs-grid-text').each(function( index ) {
        $(this).addClass('icon');
        $(this).attr('id','icon-'+index);
    });

    var sliderInstence = $slider.data("ionRangeSlider");
    $(document).on('click','.icon',function() {
        $('.icon').removeClass('active');
        $(this).addClass('active');
        ch_value= parseInt(this.id.slice(5));
        sliderInstence.update({
            from: ch_value
        });
    });
</script>