
        <div class="after-header">
            <div class="container"> 
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <ul class="list-inline text-center">
                            <li class="active"><a href="domainchecker.php">Buy a Domain</a></li>
                            <li><a href="cart.php">Order Hosting</a></li>
                            <li><a href="clientarea.php">Make Payment</a></li>
                            <li><a href="submitticket.php">Get Support</a></li>
                        </ul>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end after-header -->

        <section class="section pricingbg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="domainsearchwrapper text-center">
                            {if $registerdomainenabled || $transferdomainenabled}
                                <h2>{$LANG.homebegin}</h2>
                                <form class="" method="post" action="domainchecker.php">
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                                            <div class="input-group input-group-lg">
                                                <input type="text" class="form-control checkdomain" name="domain" placeholder="{$LANG.exampledomain}" autocapitalize="none" />
                                                <span class="input-group-btn">
                                                    {if $registerdomainenabled}
                                                        <input type="submit" class="btn btn-primary" value="{$LANG.search}" />
                                                    {/if}
                                                    {if $transferdomainenabled}
                                                        <input type="submit" name="transfer" class="btn btn-default" value="{$LANG.domainstransfer}" />
                                                    {/if}
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    {include file="$template/includes/captcha.tpl"}
                                </form>
                            {else}
                                <h2>{$LANG.doToday}</h2>
                            {/if}
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="smallsec">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 text-center">
                        <h3>Have a pre-sale question for our packages?</h3>
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="contact.php" class="btn btn-primary btn-lg"><i class="fa fa-comments-o"></i> Contact Us</a>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

 