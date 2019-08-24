{include file="orderforms/standard_cart/common.tpl"}

<div id="order-standard_cart">

    <div class="row">

        <div class="pull-md-right col-md-12">

            <div class="header-lined">
                <h1>
                    {$LANG.thereisaproblem}
                </h1>
            </div>

        </div>

        <div class="col-md-3 pull-md-right sidebar hidden-xs hidden-sm">

            {include file="orderforms/standard_cart/sidebar-categories.tpl"}

        </div>

        <div class="col-md-9 pull-md-left">

            {include file="orderforms/standard_cart/sidebar-categories-collapsed.tpl"}

            <div class="alert alert-danger error-heading">
                <i class="fas fa-exclamation-triangle"></i>
                {$errortitle}
            </div>

            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">

                    <p class="margin-bottom">{$errormsg}</p>

                    <div class="text-center">
                        <a href="javascript:history.go(-1)" class="btn btn-default">
                            <i class="fas fa-arrow-left"></i>&nbsp;
                            {$LANG.problemgoback}
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
