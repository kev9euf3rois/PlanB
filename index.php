<?php

session_start();

include('./includes/connect.php');
include('./includes/functions.php');

$pageName = "Home";

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
<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Welcome to PlanB</h1>
        <p class="lead text-muted">As my first examination project may not be accepted by the university, this website contains my plan b to get on the second try.</p>
        <p>
          <a href="#" class="btn btn-primary my-2">Call to action</a>
          <a href="#" class="btn btn-secondary my-2">Secondary action</a>
        </p>
      </div>
    </div>
  </section>
  <div class="album py-5 bg-white">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        
        <div class="col">
          <div class="card shadow-sm">
          <img src="./images/placeholder.png" style="height: 225px">

            <div class="card-body">
              <p class="card-text">This is the space for some usefull informations about this card.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Button 1</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Button 2</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>

      </div>
      
    </div>
  </div>
<?php include('./components/footer.php');?>
  </div>   
</body>
</html>