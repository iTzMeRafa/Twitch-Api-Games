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

	public static function getPercentageOfAllPlayers($score) {
		$scoreList = array();
		$file = fopen("assets/scores/scores_Viewcount.txt", "r");
		while(! feof($file)) {
			$result = (int)fgets($file);
			array_push($scoreList, $result);
		}
		asort($scoreList);
		$countScores = count($scoreList);
		$valuePos = array_search($score, $scoreList);

		$countPeopleBetter = $countScores - $valuePos;
		$percentage = ($countPeopleBetter/$countScores)*100;
		return round($percentage, 2);
		
	}

}

?>