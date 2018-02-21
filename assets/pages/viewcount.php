<?php

$twitchUserAPI 	= new TwitchUserAPI();
$userData 		= $twitchUserAPI->initialiseAPI();

// Create Game Settings
if(!isset($_SESSION['streamer1']) && !isset($_SESSION['streamer2']) && !isset($_SESSION['points'])) {
	$_SESSION['streamer1'] 	= $userData[0]; 
							  unset($userData[0]);
	$_SESSION['streamer2'] 	= $twitchUserAPI->getRandomStreamer($userData);
	$_SESSION['points'] 	= 0;
} 


if(isset($_POST['guess'])) {
	$guess 	= $_POST['guess'];

	if($guess == "higher") {

		if($_SESSION['streamer1']['view_count'] < $_SESSION['streamer2']['view_count']) {
			// correct answer
			$_SESSION['streamer1'] 	= $_SESSION['streamer2'];
			if (($key = array_search($_SESSION['streamer1'], $userData)) !== false) {
   				 unset($userData[$key]);
				}
			$_SESSION['streamer2'] 	= $twitchUserAPI->getRandomStreamer($userData);
			
			$_SESSION['points']++;
		} else {
			echo("<script>location.href = '?page=gameover&game=viewcount';</script>");
			exit();
		}
	}

	if($guess == "lower") {
		if($_SESSION['streamer1']['view_count'] > $_SESSION['streamer2']['view_count']) {
			// correct answer
			$_SESSION['streamer1'] 	= $_SESSION['streamer2'];
			if (($key = array_search($_SESSION['streamer1'], $userData)) !== false) {
   				 unset($userData[$key]);
				}
			$_SESSION['streamer2'] 	= $twitchUserAPI->getRandomStreamer($userData);
			$_SESSION['points']++;

		} else {
			echo("<script>location.href = '?page=gameover&game=viewcount';</script>");
			exit();
		}
	}

}

?>
<div class="header"> 
	<div class="row">
		<div class="col-md-12">
			<p class="logo"><img src="assets/img/twitch_logo.png" style="width: 150px; height: auto;"> API GAMES</p>
			<p class="score">Score: <?= Tools::numberFormat($_SESSION['points']); ?></p>
		</div>
	</div>
</div>
<div class='split-pane col-xs-12 col-sm-6 uiux-side'>
  <div>
    <img src="<?= $_SESSION['streamer1']['profile_image_url']; ?>" style="height: 1.3em;">
    <div class='text-content'>
    	<div class="bold"><?= Tools::numberFormat($_SESSION['streamer1']['view_count']); ?> views</div>
      	<div class='big'><?= $_SESSION['streamer1']['display_name']; ?></div>
      	<br />
     
    </div>
  </div>
</div>
<div class='split-pane col-xs-12 col-sm-6 frontend-side'>
  <div>
    <img src="<?= $_SESSION['streamer2']['profile_image_url']; ?>" style="height: 1.3em;">
    <div class='text-content'>
      <div class="bold"><div class="glitch"></div> </div>
      <div class='big'><?= $_SESSION['streamer2']['display_name']; ?></div>
    </div>
<form method="POST">
    <button type="submit" name="guess" value="higher">
      <i class="fa fa-arrow-up"></i> HIGHER
    </button>
    <button type="submit" name="guess" value="lower">
       <i class="fa fa-arrow-down"></i> LOWER
    </button>
</form>
  </div>
</div>
<div id='split-pane-or'>
  <div>
    <img src='assets/img/vs-icon_transparent.png'>
  </div>
</div>