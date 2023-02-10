<?php

session_start();

include('./includes/connect.php');
include('./includes/functions.php');

$pageName = "Startseite";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/css/bootstrap.css" rel="stylesheet">
    <title>PlanB | <?php echo $pageName;?></title>
</head>
<body>
<div class="container">
<?php include('./components/navbar.php');?>
  </div>   
</body>
</html>