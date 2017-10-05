<?php
  require __DIR__ . '/../app/src/app.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
  	<!-- FONT AWESOME -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- BULMA CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.1/css/bulma.min.css">
</head>
<body>
  <?php 
    include('../app/views/header.php');
    include('../app/views/content.php');
    include('../app/views/footer.php'); 
  ?>
</body>
</html>
