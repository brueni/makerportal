<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">
  <script type="text/javascript">
	function ctrl_script(aktion) {
		var commandurl = "./" + aktion;
		$.get(commandurl, function(data) {
		});
	}
  </script>

  <title>Makerportal</title>

  <!-- Bootstrap core CSS -->
  <link href="dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap theme -->
  <link href="dist/css/bootstrap-theme.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/theme.css" rel="stylesheet">
</head>
<?php include('config.inc.php'); ?>
  <body role="document">
