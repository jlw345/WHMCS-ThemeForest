{foreach $navbar as $item}
    <li menuItemName="{$item->getName()}"
        class="{if $item->hasChildren()}dropdown{/if}{if $item->getClass()} {$item->getClass()}{/if}"
        id="{$item->getId()}">

        <a {if $item->hasChildren()}class="dropdown-toggle" data-toggle="dropdown" href="#"
           {else}href="{$item->getUri()}"{/if}{if $item->getAttribute('target')} target="{$item->getAttribute('target')}"{/if}>
            {if $item->getName() eq 'Home'}
                <span class="sidenav-icons"><i class="fas fa-home"></i></span>
            {elseif $item->getName() eq 'Store'}
                <span class="sidenav-icons"><i class="fas fa-store"></i></span>
            {elseif $item->getName() eq 'Announcements'}
                <span class="sidenav-icons"><i class="fas fa-bullhorn"></i></span>
            {elseif $item->getName() eq 'Knowledgebase'}
                <span class="sidenav-icons"><i class="fas fa-info"></i></span>
            {elseif $item->getName() eq 'Network Status'}
                <span class="sidenav-icons"><i class="fas fa-exclamation-triangle"></i></span>
            {elseif $item->getName() eq 'Contact Us'}
                <span class="sidenav-icons"><i class="fas fa-envelope"></i></span>
            {elseif $item->getName() eq 'Services'}
                <span class="sidenav-icons"><i class="fas fa-cog"></i></span>
            {elseif $item->getName() eq 'Domains'}
                <span class="sidenav-icons"><i class="fas fa-globe"></i></span>
            {elseif $item->getName() eq 'Billing'}
                <span class="sidenav-icons"><i class="fas fa-credit-card"></i></span>
            {elseif $item->getName() eq 'Support'}
                <span class="sidenav-icons"><i class="fas fa-life-ring"></i></span>
            {elseif $item->getName() eq 'Open Ticket'}
                <span class="sidenav-icons"><i class="fas fa-ticket-alt"></i></span>
             {elseif  $item->getName() eq 'Affiliate'}
                <span class="sidenav-icons"><i class="fas fa-dollar-sign"></i></span>
            {elseif  $item->getName() eq 'Affiliates'}
                <span class="sidenav-icons"><i class="fas fa-dollar-sign"></i></span>
            {/if}





            {if $item->hasIcon()}<i class="{$item->getIcon()}"></i>&nbsp;{/if}
            {$item->getLabel()}
            {if $item->hasBadge()}&nbsp;<span class="badge">{$item->getBadge()}</span>{/if}
            {if $item->hasChildren()}&nbsp;<b class="caret"></b>{/if}

        </a>
        {if $item->hasChildren()}
            <ul class="dropdown-menu">
                {foreach $item->getChildren() as $childItem}
                    <li menuItemName="{$childItem->getName()}"{if $childItem->getClass()} class="{$childItem->getClass()}"{/if}
                        id="{$childItem->getId()}">
                        <a href="{$childItem->getUri()}"{if $childItem->getAttribute('target')} target="{$childItem->getAttribute('target')}"{/if}>
                            {if $childItem->hasIcon()}<i class="{$childItem->getIcon()}"></i>&nbsp;{/if}
                            {$childItem->getLabel()}
                            {if $childItem->hasBadge()}&nbsp;<span class="badge">{$childItem->getBadge()}</span>{/if}
                        </a>
                    </li>
                {/foreach}
            </ul>
        {/if}
    </li>
{/foreach}
