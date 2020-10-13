
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	  <title>Store</title>
  	  <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="stylesheet" href="css/styl.css" type="text/css">

  <!--  bootstrap css  -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet/less" type="text/css" href="css/styl.less" >

  <!-- bootstrap js -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!--leaflets-->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css">
  <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>

</head>

<body>
   <nav class="navbar navbar-expand-md navbar-dark navbar-custom  bg-dark">
    <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
     <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Filters click
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="index2.php?filter=open&latitude=<?php echo $latitude ?>&longitude=<?php echo $longitude ?>">Open Now</a>
          <a class="dropdown-item" href="index2.php?filter=recently&latitude=<?php echo $latitude ?>&longitude=<?php echo $longitude ?>">Recently opened</a>

        </div>
      </li>
    </ul>
  </div>
</div>
</nav>



	<!--header image -->
    <header>
      
        <img class="banner" src="assets/banner.jpeg" alt="store">
    </header>
