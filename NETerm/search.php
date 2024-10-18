<?php
	if (isset($_GET["term"])) {
		$term = $_GET["term"];
	}
	else{
		exit("You must enter a search term");
	}

	if (isset($_GET["type"])) {
		$type = $_GET["type"];
	}
	else{
		$type = "sites";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
	<div class="wrapper">
		<div class="header">
			<div class="headerContent">
				<div class="logoContainer">
					<a href="index.php">
						<img src="assets/images/neterm.png">
					</a>
				</div>
				<div class="searchContainer">
					<form action="search.php" method="GET">
						<div class="searchBarContainer">
							<input class="searchBox" type="text" name="term">
							<button class="searchButton">
								<i class="fa-solid fa-magnifying-glass"></i>
							</button>
						</div>
					</form>
				</div>
			</div>
			<div class="tabsContainer">
				<ul class="tabList">
					<li class="<?php echo $type == 'sites' ? 'active' : '' ?>">
						<a href='<?php echo "search.php?term=$term&type=sites"; ?>'>Sites</a>
					</li>
					<li class="<?php echo $type == 'images' ? 'active' : '' ?>">
						<a href='<?php echo "search.php?term=$term&type=images"; ?>'>Images</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>