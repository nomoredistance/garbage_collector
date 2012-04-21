<div id="photos" class="">

<div class="row">
  <div class="span12">
    <h2>Garbage Piling in City</h2>

    <div class="row">
      <div class="span12">
        <ul class="thumbnails">
          <?php for($i = 0; $i < 20; $i++): ?>
            <li class="span3">
              <div class="thumbnail">
                <img src="<?=base_url();?>assets/images/360x260.gif" />
                <div class="caption">
                  <!--<h3>Unwanted Garbage Pile</h3>-->
                  <p>
                    Lots of garbage piling up since last month. Please do something!
                  </p>
                  <p><span class="icon-user"></span> 30 </p>
                  <p><a href="<?=site_url('photos/view/1234')?>" class="goto-step btn btn-large">View</a></p>
                </div>
              </div>
            </li>
          <?php endfor; ?>

        </ul>
      </div>
    </div>
  </div>
</div>

</div>
