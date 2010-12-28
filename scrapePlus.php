<?
$list = array(
"la cerise sur le gâteau",
"le vent en poupe",
"grincer des dents",
"la cour des grands",
"un pavé dans la mare",
"la croisée des chemins",
"caracoler en tête",
"l'ironie de l'histoire",
"revoir sa copie",
"attendu au tournant",
"ne connaît pas la crise",
"la balle est dans le camp",
"botte en touche",
"la partie émergée de l'iceberg",
"renverser la vapeur",
"les quatre coins de l'Hexagone",
"à qui profite le crime",
"s'enfoncer dans la crise",
"le risque zéro n'existe pas",
"une affaire à suivre",
"ces images ont fait le tour monde");

$siteURL = "owni.fr";
ini_set('display_errors', 0);

if(isset($_POST['queryString']))
	$siteURL = $_POST['queryString'];

foreach ($list as $term){
	$url = "http://ajax.googleapis.com/ajax/services/search/web?v=1.0&q=site:$siteURL+\"".urlencode(utf8_decode($term))."\"";
	if (returnCount($url))
		$results[$term] = returnCount($url);
}

if (isset($results)){
	$url = "http://ajax.googleapis.com/ajax/services/search/web?v=1.0&q=site:$siteURL";
	$results_site = returnCount($url);
	
	arsort($results);
	
	$count=0;
	foreach ($results as $term=>$result){
		$ratio = round(($result/ $results_site) * 1000, 2);
		$count++;
		if ($count%2 == 1)
			$odd = "odd";
		else
			$odd = "";
		echo "<div class='row $odd'><div class='term text_result'><i>&laquo;".htmlentities(utf8_decode($term))."&raquo;</i></div><div class='result text_result'>$result</div><div class='gcm text_result'>$ratio &permil;</div><div class='link text_result'><a href='http://www.google.com/search?q=site:$siteURL+\"".urlencode(utf8_decode($term))."\"' target=_blank>source</a></div></div>";
	}	

	}else{
		echo "<div class='row odd'>Aucun r&eacute;sultat</div>";
}

function returnCount($url){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_REFERER, "http://windowonthemedia.com/");
	$body = curl_exec($ch);
	curl_close($ch);
	
	$json = json_decode($body);
	
	if ($json->responseData->cursor->estimatedResultCount){
		return $json->responseData->cursor->estimatedResultCount;
	} else 
		return false;
}
?>