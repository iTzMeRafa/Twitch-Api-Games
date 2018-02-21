<?php

class TwitchSubscriberEmotesAPI {
	

	public function initialiseAPI() {
		$ch 	= curl_init();
			curl_setopt($ch, CURLOPT_URL, 'https://api.twitch.tv/kraken/chat/emoticon_images?emotesets=29712');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
		  	//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'Accept: application/vnd.twitchtv.v5+json',
	        'Client-ID: '. Config::$client_ID .''
		));

		// Convert results from json to array and return them
		$data =curl_exec($ch);
		return $data;

		curl_close($ch);
	} 
}


?>