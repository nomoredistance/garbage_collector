<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="<?=site_url('home')?>"><?=config_item('site_title')?></a>
      <div class="nav-collapse">
        <ul class="nav">
          <li class="active"><a href="#">Home</a></li>
        <?php if($this->user_model->is_logged_in()): ?>
          <li><a href="<?=site_url('user/logout')?>">Logout</a></li>
        <?php endif; ?>
        </ul>
      </div>
    </div>
  </div>
</div>

