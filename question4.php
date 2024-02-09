<?php 
include "database.php";

$porsesh = $db->query("SELECT * FROM `questions` ");
$total = $porsesh->num_rows;

$porsesh_table = $db->query(" SELECT * FROM questions WHERE id = 2 "); // یک جدولی که یک رکورد دارد
$porsesh_ha = $porsesh_table->fetch_assoc(); // یک رکورد!!!

$pasokh_ha = $db->query("SELECT * FROM answers WHERE question_id	= 2"); // این تیبل کامل لازم است

?>


<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.rtl.css" type="text/css">
    <title>quiz box</title>
</head>
<body>
    
<div class="card">

<div class="card-header">
    سوالات

    <?php echo $porsesh_ha["id"]; ?>
    از
    <?php echo $total; ?>
  </div>
  <div class="card-body">
    <h5 class="card-title">
      <?php echo $porsesh_ha["text"];  ?>
    </h5>
    
<!-- this is form : -->

    <form action="" method="">

<!-- radio`s php side :  -->

<?php foreach($pasokh_ha as $pasokh) : ?>

<br>

<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
<?php echo $pasokh["text"]; ?>
</label>
</div>
<br>

<?php endforeach; ?> 

<!-- end of radios`s -->

<!-- submit btn : -->
<button type="submit" class="btn btn-primary"> submit </button>

<a href="Question3.php">next</a>

    </form>
  </div>
</div>

<script scr="bootstrap.bundle.js"></script>
</body>
</html>