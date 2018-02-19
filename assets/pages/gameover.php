<?php

if(!isset($_SESSION['points'])) {
	echo("<script>location.href = '?page=home';</script>");
	exit();
}
require_once('assets/classes/class.TwitchUserAPI.php');

$twitchUserAPI 	= new TwitchUserAPI();
$userData 		= $twitchUserAPI->initialiseAPI();

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
    	<br>
    	<div class="bold">Of all players, you are in the top:</div>
      	<div class='big'>XYZ %</div>
      	<br>
      	<p style="font-size: 20px;"> The average score is: xyz points. </p>
     
    </div>
  </div>
</div>
<div class='split-pane col-xs-12 col-sm-6 frontend-side'>
  <div>
    <div class='text-content'>
      <div class="bold">Your Score:</div>
      <div class='big'><?= $_SESSION['points']; ?></div>
    </div>
    <a href="?page=home" class="button">
      <i class="fa fa-home"></i> BACK TO HOME
    </a>
   <a href="?page=viewcount" class="button">
       <i class="fa fa-sync"></i> PLAY AGAIN
    </a>
  </div>
</div>
<div id='split-pane-or'>
  <div>
    <img src='assets/img/vs-icon_transparent.png'>
  </div>
</div>

<?php

session_destroy();

?>