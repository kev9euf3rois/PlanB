<?php

session_start();

include('./includes/connect.php');
include('./includes/functions.php');

$pageName = "About";

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
<div class="container px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="./images/about_img.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">What is this about?</h1>
        <p class="lead">As my first examination project may not be accepted by the university, this repository contains my plan b. In the worst case, the examination office will advise me to redo a project, so everything in this repository will be in a universal design and language.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <a href="mailto:kevin.tamme@iu-study.org" class="btn btn-primary btn-lg px-4 me-md-2">Contact me</a>
          <a href="https://github.com/kev9euf3rois/PlanB" class="btn btn-outline-secondary btn-lg px-4">GitHub</a>
        </div>
      </div>
    </div>
  </div>
  <div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">About this project</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="feature col">
        <h3 class="fs-2">Featured title 1</h3>
        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
      </div>
      <div class="feature col">
        <h3 class="fs-2">Featured title 2</h3>
        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
      </div>
      <div class="feature col">
        <h3 class="fs-2">Featured title 3</h3>
        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
      </div>
    </div>
  </div>
<?php include('./components/footer.php');?>
  </div>   
</body>
</html>