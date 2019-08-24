
<br />

<p>{$LANG.supportticketsheader}</p>

<br />

<div class="bg-form row">
    <div class="col-sm-12">
        <div class="row">
            {foreach from=$departments key=num item=department}
            <div class="ticket-box col-md-12 margin-bottom">
                <p class="title-tic">
                    <strong>
                            <a href="{$smarty.server.PHP_SELF}?step=2&amp;deptid={$department.id}">
                                <i class="fa fa-navicon"></i>
                                &nbsp;{$department.name}
                            </a>
                        </strong>
                </p>
                {if $department.description}
                <p class="desc-tic">{$department.description}</p>
                {/if}
            </div>
            {if $num % 2 == true}
            <div class="clearfix"></div>
            {/if} {foreachelse} {include file="$template/includes/alert.tpl" type="info" msg=$LANG.nosupportdepartments textcenter=true} {/foreach}
        </div>
    </div>
</div>
