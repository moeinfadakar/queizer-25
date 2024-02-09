<?php

include "database.php";
 
$porsesh = $db->query("SELECT * FROM `questions` ");
$total = $porsesh->num_rows;


?>


<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="bootstrap.rtl.css" type="text/css">
   <link rel="stylesheet" href="style.css" type="text/css">
    <title>وب سایت ازمونک</title>
</head>
<body>
  <div class="container-fluid">
    <!-- navbar side -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">test</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</div>
<!-- end of navbar -->

<div class="container mt-4">

<div class="row">
<div class="col">
<div class="">
<div class="card">
  <div class="card-header">
    ازمونک
  </div>
  <div class="card-body">
    <h5 class="card-title">به ازمونک خوش آمدی</h5>
    <p class="card-text"> 
      تعداد سوالات این ازمون
        <?php echo $total; ?> 
       تا می باشد 
    </p>
    <p class="card-text">  زمان ازمون 
      <?php echo $total / 2 ; ?>
    دقیقه می باشد    </p>
    <a href="Question.php" class="btn btn-primary">برو بریم </a>
  </div>
</div>

</div>
</div>
</div></div>
</body>
</html>