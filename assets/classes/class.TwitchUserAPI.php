<?php 
require_once('class.Tools.php');
require_once('class.Config.php');

class TwitchUserAPI {

	public $points 			= 0;

	public function initialiseAPI() {

		$usersString = implode('&login=', Config::$userList);
		// Connect to Twitch API with userlist
		$ch 	= curl_init();
			curl_setopt($ch, CURLOPT_URL, 'https://api.twitch.tv/helix/users?login='. $usersString);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
		  	//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'Accept: application/vnd.twitchtv.v5+json',
	        'Client-ID: '. Config::$client_ID .''
		));

		// Convert results from json to array and return them
		$data = json_decode(curl_exec($ch), TRUE);
		return $data['data'];

		curl_close($ch);
	}

	public function getRandomStreamer(array $userData) {

		$randomIndex 			= array_rand($userData);
		$randomStreamer 		= $userData[$randomIndex]; 

		return $randomStreamer;

	}

	public function checkGuess($guess) {
		$text = "hallo";
		return $text;
		/*$streamer1 	= $_SESSION['streamer1'];
		$streamer2 	= $_SESSION['streamer1'];
		$guess 		= $guess;
		return var_dump($streamer1, $streamer2, $guess).exit;

		if($streamer1['view_count'] > $streamer2['view_count']) {

		}*/

	}



}

?>