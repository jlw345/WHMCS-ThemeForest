{if $twitterusername}

    <div class="row mr-tp-40">
	<div class="col-md-12 help-center-header ">
	<h5 style="margin-bottom: 0;" class="help-center-title"><span>from twitter</span> {$LANG.twitterlatesttweets}</h5>
	</div>
	</div>

    <div id="twitterFeedOutput">
        <p class="text-center"><img src="{$BASE_PATH_IMG}/loading.gif" /></p>
    </div>

    <script type="text/javascript" src="templates/{$template}/js/twitter.js"></script>

{elseif $announcements}

	
	<div class="row mr-tp-40">
	<div class="col-md-12 help-center-header ">
	<h5 style="margin-bottom: 0;" class="help-center-title"><span>{$LANG.news}</span></h5>
	</div>
	</div>


    {foreach $announcements as $announcement}
        {if $announcement@index < 2}
            <div class="announcement-single">
                <h3 style="margin-top:0">
				    <a class="title-announcement-single" href="{routePath('announcement-view', $announcement.id, $announcement.urlfriendlytitle)}">{$announcement.title}</a>
                    <span class="label label-announcement-single">
                        {$carbon->translatePassedToFormat($announcement.rawDate, 'M jS')}
                    </span>
                </h3>

                <blockquote>
                    <p>
                        {if $announcement.text|strip_tags|strlen < 350}
                            {$announcement.text}
                        {else}
                            {$announcement.summary}
                            <a href="{routePath('announcement-view', $announcement.id, $announcement.urlfriendlytitle)}" class="label label-warning">{$LANG.readmore} &raquo;</a>
                        {/if}
                    </p>
                </blockquote>

                {if $announcementsFbRecommend}
                    <script>
                        (function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) {
                                return;
                            }
                            js = d.createElement(s); js.id = id;
                            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));
                    </script>
                    <div class="fb-like hidden-sm hidden-xs" data-layout="standard" data-href="{fqdnRoutePath('announcement-view', $announcement.id, $announcement.urlfriendlytitle)}" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
                    <div class="fb-like hidden-lg hidden-md" data-layout="button_count" data-href="{fqdnRoutePath('announcement-view', $announcement.id, $announcement.urlfriendlytitle)}" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
                {/if}
            </div>
        {/if}
    {/foreach}
{/if}
