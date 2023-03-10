<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <img src="./images/logo.png" style="height: 30px">
        <span class="fs-4">&nbsp PlanB</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="index.php" class="nav-link <?php if ($pageName == "Home") { ?>active <?php } else {}?>" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="about.php" class="nav-link <?php if ($pageName == "About") { ?>active <?php } else {}?>">About</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Tab 3</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Tab 4</a></li>
        <?php if(!isset($_SESSION['user'])) { ?>
        <li class="nav-item"><a href="access.php" class="nav-link <?php if ($pageName == "Access") { ?>active <?php } else {}?>">Access</a></li>
        <?php } else {?>
          <li class="nav-item"><a href="logout.php" class="nav-link <?php if ($pageName == "Logout") { ?>active <?php } else {}?>">Logout</a></li>
        <?php } ?>
      </ul>
    </header>