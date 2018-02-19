<?php 

class Scores {

	public static function addScoreViewcount($score) {
		$file = fopen('assets/scores/scores_Viewcount.txt', 'a+');
		fwrite($file, $score.PHP_EOL);
		fclose($file);
	}

	public static function getAvgScoreViewcount() {
		$avgScore = 0;
		$entrys = 0;
		$file = fopen("assets/scores/scores_Viewcount.txt", "r");
		while(! feof($file))  {
			$result = (int)fgets($file);
			$avgScore += $result;
			$entrys++;
  		}

  		return round($avgScore/$entrys, 2);
	    
	}

}

?>