<?php
	if (isset($_GET["term"])) {
		$term = $_GET["term"];
	}
	else{
		exit("You must enter a search term");
	}
?>