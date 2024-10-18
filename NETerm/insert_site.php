<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="insert_site.php" method="post" enctype="multipart/form-date">
		<table width="500" border="2" cellspacing="2" align="center">
			<tr>
				<td><h2>Inserting new website</h2></td>
			</tr>
			<tr>
				<td>Site Title:</td>
				<td><input type="text" name="site_title"></td>
			</tr>
			<tr>
				<td>Site Link:</td>
				<td><input type="text" name="site_link"></td>
			</tr>
			<tr>
				<td>Site Keyword:</td>
				<td><input type="text" name="site_keyword"></td>
			</tr>
			<tr>
				<td>Site Description:</td>
				<td><input type="text" name="site_desc"></td>
			</tr>
			<tr>
				<td>Site Image:</td>
				<td><input type="file" name="site_image"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Add Site Now"></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php

?>