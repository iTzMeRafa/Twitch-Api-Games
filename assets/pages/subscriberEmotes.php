<?php
$TwitchSubscriberEmotesAPI = new TwitchSubscriberEmotesAPI();
$subscriberData = $TwitchSubscriberEmotesAPI->initialiseAPI();
var_dump($subscriberData);



?>
<div class="header"> 
  <div class="row">
    <div class="col-md-12">
      <p class="logo"><img src="assets/img/twitch_logo.png" style="width: 150px; height: auto;"> API GAMES</p>
    </div>
  </div>
</div>
<div class='split-pane col-xs-12 col-sm-6 uiux-side'>

    <div class='text-content'>
     <img src="https://static-cdn.jtvnw.net/emoticons/v1/521050/4.0" style="width: 200px; height: auto;">
     
    </div>
 
</div>
<div class='split-pane col-xs-12 col-sm-6 frontend-side'>
  <div>
    <div class='text-content'>
      <div class="bold">
        <input type="text" class="form-control" placeholder="Guess the Channelname..." name="guess"  >
      </div>
      <div class='big'></div>
    </div>
    <form method="POST">
      <button type="submit" href="?page=home" class="button">
        <i class="fa fa-home"></i> GUESS
      </button>
    </form>
  </div>
</div>
<div id='split-pane-or'>
  <div>
    <!--<img src='assets/img/vs-icon_transparent.png'>-->
  </div>
</div>
