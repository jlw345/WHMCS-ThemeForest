<div class="container"> 
  <!--============== Main Features ==============-->
  
  <div class="row mainFeatures" id="features">
    <div class="col-sm-6 col-md-4">
      <div class="img-thumbnail"> <img src="{$WEB_ROOT}/templates/{$template}/img/secure_img.png" width="85" height="88" alt="secure">
        <div class="caption">
          <h4>Secure &amp; Reliable</h4>
          <p>Flathost servers are having high physical security and power redundancy Your data will be secure with us.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4">
      <div class="img-thumbnail"> <img src="{$WEB_ROOT}/templates/{$template}/img/fast_img.png" width="85" height="88" alt="secure">
        <div class="caption">
          <h4>Super Fast</h4>
          <p>With our ultra mordern servers and optical cables, your data will be transfered to end user in milliseconds.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-0">
      <div class="img-thumbnail"> <img src="{$WEB_ROOT}/templates/{$template}/img/support_img.png" width="85" height="88" alt="secure">
        <div class="caption">
          <h4>Customer Support</h4>
          <p>We have a dedicated team of support for sales and support to help you in anytime. You can also chat with us.</p>
        </div>
      </div>
    </div>
  </div>
  
  <!--============== Other Features ==============-->
  
  <div class="row PageHead">
    <div class="col-md-12">
      <h1>More Features</h1>
      <h3>Flathost comes with lot of features. Here are few of them.</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6 features"> <img src="{$WEB_ROOT}/templates/{$template}/img/setup_icon.png" alt="icon" class="img-responsive">
      <h4>Instant Setup</h4>
      <p>As soon as you make a successful payment via PayPal or Google Checkout, your web hosting and domain names will be activated immediately. No waiting time whatsoever.</p>
    </div>
    <div class="col-sm-6 features"> <img src="{$WEB_ROOT}/templates/{$template}/img/backup_icon.png" alt="icon" class="img-responsive">
      <h4>Constant Backups</h4>
      <p>Your hosting account is backed up 4 times a day as standard, with our backup integration. We use dedicated backup servers, providing fast &amp; easy individual file rollback abilities.</p>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6 features"> <img src="{$WEB_ROOT}/templates/{$template}/img/git_icon.png" alt="icon" class="img-responsive">
      <h4>GIT/SVN Support</h4>
      <p>Web Developers love using version control systems. All of our hosting accounts can use GIT &amp; SVN command line tools on our servers. Simply request SSH access to get started.</p>
    </div>
    <div class="col-sm-6 features"> <img src="{$WEB_ROOT}/templates/{$template}/img/script_icon.png" alt="icon" class="img-responsive">
      <h4>280+ Install Scripts</h4>
      <p>All our hosting accounts allow you to install popular software such as Wordpress, Drupal, Joolma and Magento in one easy step. Upgrading your software is just as easy!</p>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6 features"> <img src="{$WEB_ROOT}/templates/{$template}/img/cpanel_icon.png" alt="icon" class="img-responsive">
      <h4>cPanel Included</h4>
      <p>All hosting accounts come with the latest version of cPanel. This makes life easy for you to do routine tasks such as setting up email addresses and managing MySQL databases.</p>
    </div>
    <div class="col-sm-6 features"> <img src="{$WEB_ROOT}/templates/{$template}/img/php_icon.png" alt="icon" class="img-responsive">
      <h4>Latest PHP &amp; MySQL</h4>
      <p>Our network runs the latest stable and secure versions of PHP &amp; MySQL. We also implement strict security and firewall rules protecting your website from unwanted visitors 24/7.</p>
    </div>
  </div>
</div>

 
{if $twitterusername}

   <div class="PageHead"> <h2>{$LANG.twitterlatesttweets}</h2></div>

    <div id="twitterFeedOutput">
        <p class="text-center"><img src="{$BASE_PATH_IMG}/loading.gif" /></p>
    </div>

    <script type="text/javascript" src="templates/{$template}/js/twitter.js"></script>

{elseif $announcements}

    <h2>{$LANG.news}</h2>

    {foreach $announcements as $announcement}
        {if $announcement@index < 2}
            <div class="announcement-single">
                <h3>
                    <span class="label label-default">
                        {$announcement.rawDate|date_format:"M jS"}
                    </span>
                    <a href="{routePath('announcement-view', $announcement.id, $announcement.urlfriendlytitle)}">{$announcement.title}</a>
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
