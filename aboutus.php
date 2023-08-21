<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
    <?php include("includes/header.php"); ?>
    </header>
<section>
  <?php
  session_start();
  $id =$_SESSION['id'];
  $name =$_SESSION['naam'];
  echo "Hello $name tumhari id $id hai";
  ?>
</section>
   
    <?php include("includes/footer.php"); ?>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/popper.js"></script>
</body>
</html>