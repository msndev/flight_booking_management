<head>

	<meta charset="utf-8">

	<title><?php if (isset($title)) {
				echo $title;
			} else {
				echo "Fly High Airlines";
			}
			?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src = "https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<link rel = "stylesheet" type = "text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />
	<script src = "./vendor/js/bootswatch.js"></script>
	<script src = "./vendor/js/mystyle.js"></script>
	<script id="gs-sdk" src='//www.buildquickbots.com/botwidget/v3/demo/static/js/sdk.js?v=3' key="bf4ec0e5-76eb-41d7-8af4-333c37db7f2c" ></script>

		
	<link rel = "stylesheet" type = "text/css" href = "./vendor/css/bootstrap.min.css" media = "screen">
	<link rel = "stylesheet" type = "text/css" href = "./vendor/css/new.css">


<?php 
	$img_query_table = "SELECT * FROM `images`";
	$result = mysql_query($img_query_table);
	mysql_data_seek($result,15);
	$row=mysql_fetch_row($result);
?> 

</head>