
<step id="choose-city" class="step">
  <div class="step-title">
    <h2>What City are You In?</h2>
    <p>Berada di kota mana kamu sekarang?</p>
  </div>

  <div class="row">
    <div class="span8">
      <form id="form-choose-city" class="" style="">
        <p><input type="text" class="name input-xlarge" /></p>
        <p><input type="submit" class="btn btn-large btn-primary" value="See City Hazard &raquo;" /></p>
        <!--<p><a href="#add-photos" class="goto-step btn btn-large btn-primary">Go</a></p>-->
      </form>
    </div>
  </div>
</step>

<script type="text/javascript">
$(document).ready(function(){
  function whereIs (lat, long) {
    var appID = '12345';
    var endPoint = 'http://where.yahooapis.com/geocode?q=' + lat + ',' + long + '&gflags=R&appid=' + appID;
    console.log(endPoint);
    $.ajax({
      type:'get',
      url: endPoint,
      success: function (res) {
        console.log('success');
        console.log(res);
      },
      error: function () {
        console.log('error looking up location');
        console.log(endPoint);
      }
    });
    return true;
  }

  function success (position) {
    console.log(position);
    whereIs(position.coords.latitude, position.coords.longitude);
  }
  function error (msg) {
    var s = document.querySelector('#status');
    s.innerHTML = typeof msg == 'string' ? msg : "failed";
    s.className = 'fail';
  }

  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(success, error);
  } else {
    error('not supported');
  }
});
</script>
