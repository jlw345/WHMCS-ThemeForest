{if $sent}
    {include file="$template/includes/alert.tpl" type="success" msg=$LANG.contactsent textcenter=true}
{/if}

{if $errormessage}
    {include file="$template/includes/alert.tpl" type="error" errorshtml=$errormessage}
{/if}

{if !$sent}
    <form method="post" action="contact.php" class="sky-form" role="form">
        <input type="hidden" name="action" value="send" />

            <fieldset>
			<div class="row">
              <section class="col col-6">
                <label for="inputName" class="label">{$LANG.supportticketsclientname}</label>
                <label class="input"> <i class="icon-append fa fa-user"></i>
                  <input type="text" name="name" value="{$name}" id="inputName">
                </label>
              </section>
              <section class="col col-6">
                <label for="inputEmail" class="label">{$LANG.supportticketsclientemail}</label>
                <label class="input"> <i class="icon-append fa fa-envelope-o"></i>
                  <input type="email" name="email" value="{$email}" id="inputEmail">
                </label>
              </section>
            </div>
			<section>
              <label for="inputSubject" class="label">{$LANG.supportticketsticketsubject}</label>
              <label class="input"> <i class="icon-append fa fa-tags"></i>
                <input type="text" name="subject" value="{$subject}" id="inputSubject">
              </label>
            </section>
            <section>
              <label for="inputMessage" class="label">{$LANG.contactmessage}</label>
              <label class="textarea"> <i class="icon-append fa fa-comment"></i>
                <textarea rows="4" name="message" id="inputMessage">{$message}</textarea>
              </label>
            </section>

            <div class="row">
                <div class="col-sm-offset-3 col-sm-9">
                    {include file="$template/includes/captcha.tpl"}
                </div>
            </div>

            <div class="form-group">
                <div class="text-center">
                    <button type="submit" class="button">{$LANG.contactsend}</button>
                </div>
            </div>
			</fieldset>

    </form>

{/if}
