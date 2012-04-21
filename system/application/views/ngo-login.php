
<div id="ngo-login" class="">
  <div class="title">
  </div>

  <div class="row">
    <div class="span3">
      <h4 style="margin-bottom: 12px;">Organization Login</h4>
      <?php if(validation_errors()): ?><p style="color: #a00;" class=""><span class="icon-remove"></span> Wrong username / password</p><?php endif;?>
      <form method="post" action="<?=site_url('user/ngo_login')?>" id="form-ngo-login" class="form form-horizontal" style="">
        <p><label for="my-email">Email</label><input id="my-email" name="my-email" type="text" class="input-large" value="<?=set_value('my-email')?>" /></p>
        <p><label for="my-password">Password</label><input id="my-password" name="my-password" type="password" class="input-large" /></p>
        <p><input type="submit" class="btn btn-large btn-primary" value="Login" /></p>
        <!--<p><a href="#add-photos" class="goto-step btn btn-large btn-primary">Go</a></p>-->
      </form>
    </div>
    <div class="span6">
      <div class="well">
        <h3>If you are an organization :</h3>
        <ul>
          <li>Lorem ipsum dolor sit amet conceptutar</li>
          <li>Lorem ipsum dolor sit amet conceptutar</li>
          <li>Lorem ipsum dolor sit amet conceptutar</li>
          <li>Lorem ipsum dolor sit amet conceptutar</li>
        </ul>
        <p>Contact us at <strong>mrclean@garbagecollectorapp.com</strong> to get an access.</p>
      </div>
    </div>
  </div>
</div>

