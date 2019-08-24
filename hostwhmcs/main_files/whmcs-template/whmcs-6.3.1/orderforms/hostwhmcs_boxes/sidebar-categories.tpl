<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><span class="fa fa-shopping-cart"></span> &nbsp; Categories</h3>
    </div>
    <div class="list-group">
        {foreach from=$productgroups item=productgroup}
            <a href="cart.php?gid={$productgroup.gid}" class="list-group-item{if $productgroup.gid eq $gid} active{/if}">{$productgroup.name}</a>
        {/foreach}
        {if $loggedin}
            <a href="cart.php?gid=addons" class="list-group-item{if $gid eq "addons"} active{/if}">{$LANG.cartproductaddons}</a>
        {/if}
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><span class="fa fa-plus"></span> &nbsp; Actions</h3>
    </div>
    <div class="list-group">
        {if $loggedin && $renewalsenabled}
            <a href="cart.php?gid=renewals" class="list-group-item{if $gid eq "renewals"} active{/if}"><i class="fa fa-refresh fa-fw"></i> {$LANG.domainrenewals}</a>
        {/if}
        {if $registerdomainenabled}
            <a href="cart.php?a=add&domain=register" class="list-group-item{if $domain eq "register"} active{/if}"><i class="fa fa-globe fa-fw"></i> {$LANG.navregisterdomain}</a>
        {/if}
        {if $transferdomainenabled}
            <a href="cart.php?a=add&domain=transfer" class="list-group-item{if $domain eq "transfer"} active{/if}"><i class="fa fa-share fa-fw"></i> {$LANG.transferinadomain}</a>
        {/if}
        <a href="cart.php?a=view" class="list-group-item"><i class="fa fa-shopping-cart fa-fw"></i> {$LANG.viewcart}</a>
    </div>
</div>

{if !$loggedin && $currencies}
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><span class="fa fa-plus"></span> &nbsp; {$LANG.choosecurrency}</h3>
        </div>
        <div class="panel-body">
            <form method="post" action="cart.php?gid={$gid}">
                <select name="currency" onchange="submit()" class="form-control">
                    {foreach from=$currencies item=curr}
                        <option value="{$curr.id}"{if $curr.id eq $currency.id} selected{/if}>{$curr.code}</option>
                    {/foreach}
                </select>
            </form>
        </div>
    </div>
{/if}
