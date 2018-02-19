<?php

require_once('assets/classes/class.TwitchUserAPI.php');

$twitchUserAPI 	= new TwitchUserAPI();
$userData 		  = $twitchUserAPI->initialiseAPI();
$countUsers     = count($userData);

?>
<div class="header"> 
	<div class="row">
		<div class="col-md-12">
			<p class="logo"><img src="assets/img/twitch_logo.png" style="width: 150px; height: auto;"> API GAMES</p>
		</div>
	</div>
</div>
<div class='split-pane col-xs-12 col-sm-6 uiux-side'>
  <div>
    <div class='text-content'>
    	<div class="bold">Welcome to</div>
      	<div class='big'>TWITCH API GAMES</div>
      	<br />
        <p> Here you can find serveral games about Twitch with REAL-TIME data. <p>
        <p> Games like 'Viewcount' or 'GuessTheEmote' will test you how good your twitch knowledge is. </p> 
     
    </div>
  </div>
</div>
<div class='split-pane col-xs-12 col-sm-6 frontend-side'>
  <div class="gameList">

    <div class="rightRowBox">
      <div class="gameDisplay">
        <div class="row">
          <div class="col-md-12">
              <div class='text-content'>
                <div class="bold">a homage to The Higher Lower Game</div>
                <div class='big'>Viewer Count </div>
              </div>
              <a href="?page=viewcount" class="button">
                <i class="fa fa-play"></i> PLAY
              </a>
          </div>
        </div>
      </div>
    </div>

    <div class="rightRowBox">
      <div class="gameDisplay">
        <div class="row">
          <div class="col-md-12">
              <div class='text-content'>
                <div class="bold"></div>
                <div class='big'>Guess The Emote</div>
              </div>
              <button>
                <i class="fa fa-times"></i> Not available yet
              </button>
          </div>
        </div>
      </div>
    </div>

    <div class="rightRowBox">
      <div class="gameDisplay">
        <div class="row">
          <div class="col-md-12">
              <div class='text-content'>
                <div class="bold"></div>
                <div class='big'>Streamers in Game</div>
              </div>
              <button>
                <i class="fa fa-times"></i> Not available yet
              </button>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<!--<div id='split-pane-or'>
  <div>
    <img src='assets/img/vs-icon_transparent.png'>
  </div>
</div>-->

<?php 
session_destroy();
?>