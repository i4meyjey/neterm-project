<?php
include("classes/DomDocumentParser.php");
function followLinks($url){
	$parser = new DomDocumentParser($url);
	$linkList = $parser -> getlinks();
	foreach($linkList as $link){
		$href = $link -> getAttribute("href");
		echo $href . "<br>";
	}
}

$startUrl = "https://www.techtarget.com";
followLinks($startUrl);
?>