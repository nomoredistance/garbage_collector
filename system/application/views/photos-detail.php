<div id="photos-detail" class="">

<div class="row">
  <div class="span12">
    <!--<h1 style="margin-bottom: 12px;" class="title"><span class="icon-camera-retro"></span> Unwanted Garbage Pile</h1>-->
    <h3 style="margin-bottom: 18px;" class="title"><span class="icon-user"></span> 30 people have requested an action on this issue:</h3>
    <div class="row">
      <div class="span4">
        <div class="thumbnail">
          <img src="<?=base_url();?>assets/images/360x260.gif" />
          <div class="caption">
            <p>Lots of garbage piling up since last month. Please do something!</p>
            <p>People living two blocks away have been throwing their garbage here since 
               there is nobody to pick up their garbage for at least two months now.
            </p>
            <p>Posted: 3 days ago by <strong>Andy</strong></p>
          </div>
        </div>
      </div>
      <div class="span8">
        <div class="well">
          <h3>Status</h3>
          <p style="color: green; font-size: larger;"><span class="icon-ok"></span> Resolved</p>
          <p style="font-size: larger;"><span class="icon-eye-open"></span> Needs review from authority</p>
          <h3>Response from authority:</h3>
          <!-- response -->
          <p>None yet.</p>
          <!-- form if logged in as authority -->
          <p>Editing a response as: <strong>Clean Jakarta Society (LSM Jakarta Bersih)</strong></p>
          <form method="post">
            <textarea class="input-xlarge">None yet.</textarea>
            <input type="submit" class="btn btn-large btn-primary" value="Save" />
          </form>
        </div>
        <div class="well">
          <p>If this is troubling you, click here:</p>
          <p><a class="btn btn-large btn-primary" href="<?=site_url('photos/request_action/1234')?>">Request an Action</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

</div>

<script type="text/javascript">
function makeGMap() {
  var s = document.querySelector('#status');
  
  if (s.className == 'success') {
    // not sure why we're hitting this twice in FF, I think it's to do with a cached result coming back    
    return;
  }
  
  s.innerHTML = "found you!";
  s.className = 'success';
  
  var mapcanvas = document.createElement('div');
  mapcanvas.id = 'mapcanvas';
  mapcanvas.style.height = '400px';
  mapcanvas.style.width = '560px';
    
  document.querySelector('article').appendChild(mapcanvas);
  
  var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
  var myOptions = {
    zoom: 15,
    center: latlng,
    mapTypeControl: false,
    navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(document.getElementById("mapcanvas"), myOptions);
  
  var marker = new google.maps.Marker({
      position: latlng, 
      map: map, 
      title:"You are here! (at least within a "+position.coords.accuracy+" meter radius)"
  });
}
</script>
