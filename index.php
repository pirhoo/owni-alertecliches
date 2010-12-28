<?
define("DOC_TITLE", "Lâche ton poncif!");
define("DOC_URL", "http://owni.fr/2010/08/13/lache-ton-poncif/");

error_reporting (0);
ini_set('display_errors', 0);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link href="styles.css" rel="stylesheet">
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript"> 
	  google.load("jquery", "1.4.2");
</script>
<script type="text/javascript">
	function lookup() {
		var inputString = $('#inputString').val();
		if(inputString.length == 0) {
			// Hide the suggestion box.
			$('#suggestions').hide();
		} else {
			$("#dvloader").show();
			$('#results').hide();
			$.post("scrapePlus.php", {queryString: ""+inputString+""}, function(data){
				if(data.length >0) {
					$("#dvloader").hide();
					$('#results').show();
					$('#results').html(data);
				}
			});
		}
	}
	
	 function getEmbed() {
                    $(".share").hide();
                    $(".inputEmbed").show();
                    $(':input:eq(0)', '.inputEmbed').select();
                }

                function dropEmbed() {
                    $(".share").show();
                    $(".inputEmbed").hide();
                }
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Lâche ton poncif</title>
</head>
<body>
<input type="text" value="owni.fr" id="inputString">
<input type="submit" onClick="lookup()" id="submit" value="">
<div id="dvloader" style="display:none"></div>
<div id="results">
  <div class="row odd">
    <div class="term text_result"><i>«grincer des dents»</i></div>
    <div class="result text_result">3</div>
    <div class="gcm text_result">0.42 ‰</div>
    <div class="link text_result"><a target="_blank" href="http://www.google.com/search?q=site:owni.fr+&quot;grincer+des+dents&quot;">source</a></div>
  </div>
  <div class="row ">
    <div class="term text_result"><i>«à qui profite le crime»</i></div>
    <div class="result text_result">2</div>
    <div class="gcm text_result">0.28 ‰</div>
    <div class="link text_result"><a target="_blank" href="http://www.google.com/search?q=site:owni.fr+&quot;%E0+qui+profite+le+crime&quot;">source</a></div>
  </div>
  <div class="row odd">
    <div class="term text_result"><i>«botte en touche»</i></div>
    <div class="result text_result">2</div>
    <div class="gcm text_result">0.28 ‰</div>
    <div class="link text_result"><a target="_blank" href="http://www.google.com/search?q=site:owni.fr+&quot;botte+en+touche&quot;">source</a></div>
  </div>
  <div class="row ">
    <div class="term text_result"><i>«la cour des grands»</i></div>
    <div class="result text_result">1</div>
    <div class="gcm text_result">0.14 ‰</div>
    <div class="link text_result"><a target="_blank" href="http://www.google.com/search?q=site:owni.fr+&quot;la+cour+des+grands&quot;">source</a></div>
  </div>
  <div class="row odd">
    <div class="term text_result"><i>«le vent en poupe»</i></div>
    <div class="result text_result">1</div>
    <div class="gcm text_result">0.14 ‰</div>
    <div class="link text_result"><a target="_blank" href="http://www.google.com/search?q=site:owni.fr+&quot;le+vent+en+poupe&quot;">source</a></div>
  </div>
  <div class="row ">
    <div class="term text_result"><i>«revoir sa copie»</i></div>
    <div class="result text_result">1</div>
    <div class="gcm text_result">0.14 ‰</div>
    <div class="link text_result"><a target="_blank" href="http://www.google.com/search?q=site:owni.fr+&quot;revoir+sa+copie&quot;">source</a></div>
  </div>
</div>
<div class="partage"> <span class="share inputEmbed" style="display:none">
  <input value='<a href="http://app.owni.fr/lachetonponcif/" target="_blank"><img src="http://app.owni.fr/warlogs/theme/images/apercu_FR.png" alt="Lâche ton poncif" /></a>' />
  <span onClick="dropEmbed();">Fermer</span> </span> <a class="share mini-embed bg-white " href="#" onClick="getEmbed()"> &lt;intégrer&gt; </a> <a class="share mini-share-mail bg-white" target="_blank" href='http://www.addtoany.com/email?linkurl=<?php echo  rawurlencode(DOC_URL);  ?>&linkname=<?php echo   rawurlencode(DOC_URL);  ?>&t=<?php echo rawurldecode(DOC_TITLE); ?>'> <img alt="share mail" src="http://app.owni.fr/warlogs/theme/images/mini-email.png" /> email </a> <a class="share mini-share-facebook" target="_blank" href="http://www.facebook.com/share.php?u=<?php echo  rawurlencode(DOC_URL);  ?>&t=<?php echo rawurldecode(DOC_TITLE); ?>"> <img alt="facebook" src="http://app.owni.fr/warlogs/theme/images/mini-share-facebook.png" /> </a> <span class="share twitter bg-white">
  <iframe width="90" scrolling="no" height="20" frameborder="0" src="http://api.tweetmeme.com/button.js?url=<?php echo rawurlencode(DOC_URL); ?>&amp;style=compact&amp;hashtags=owni"></iframe>
  </span> </div>
</body>
</html>
