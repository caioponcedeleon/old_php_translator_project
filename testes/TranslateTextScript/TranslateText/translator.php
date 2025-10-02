<?php
function getstring($a,$b,$c){ 
$y = explode($b,$a);
$x = explode($c,$y[1]);
return $x[0];
}
// Check if form has been submitted
if($_REQUEST['txt']){
	ini_set("max_execution_time", 0);  	// no time-outs!
	ignore_user_abort(true);			// Continue downloading even after user closes the browser.
	//$text = stripslashes($_REQUEST['txt']);
	$text = $_REQUEST['txt'];
	//$text = str_replace(' ', '+', $text);
	$lang1 = $_REQUEST['lang1'];
	$lang2 = $_REQUEST['lang2'];
echo translate($text,$lang1,$lang2);
} 
else { echo "<center>You can't access this file directly! redirecting to home page now.</center>"; 	
?><meta http-equiv="REFRESH" content="3;url=index.php"><?
exit;}
        function translate($text,$lang1,$lang2){

$query = "js=n&prev=_t&hl=en&ie=UTF-8&text=$text&file=&sl=$lang1&tl=$lang2";

        $ch=curl_init();
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, "http://translate.google.com/?");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0");
        curl_setopt($ch, CURLOPT_ENCODING , "UTF-8");
        $output = curl_exec($ch);
//       echo $output;
        curl_close($ch);
if ($lang2=="ar" || $lang2=="iw") {
$body = getstring($output, "overflow:auto\">", "</textarea></div>");
if ($body==""){
$body = getstring($output, "'#fff'\">", "</span></span></div>");
}
$prefix="<br><br>";
$body=$prefix.$body;
return $body;
//return $output;
	}

if ($lang2=="fr") {
$body = getstring($output, "overflow:auto\">", "</textarea></div>");
if ($body==""){
$body = getstring($output, "'#fff'\">", "</span></span></div>");
}
$prefix="<br><br>";
$body=$prefix.$body;
//return $output;
$body = str_replace('&amp;#39;', "'", $body);
return str_replace("Ã©", "é", $body); 
}

else {
$body = getstring($output, "overflow:auto\">", "</textarea></div>");
if ($body==""){
$body = getstring($output, "'#fff'\">", "</span></span></div>");
}
$prefix="<br><br>";
$body=$prefix.$body;
return str_replace("Ã©", "é", $body); 
//return $output;
}
}
?>