 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
      .btn-color{
    background-color: #0e1c36;
    color: #fff;
    
  }
  
  .profile-image-pic{
    height: 200px;
    width: 200px;
    object-fit: cover;
  }
  
  
  
  .cardbody-color{
    background-color: #ebf2fa;
  }
  
  a{
    text-decoration: none;
  }
    </style>
</head>
<body>
    <header>
    <?php include("includes/header.php"); ?>
    </header>
    <section>
    <?php
    include("connection.php");
     if($_POST){
      extract($_POST);
      $query = mysqli_query($connect, "SELECT * from user where username= '$username' and password='$password'");
      if(mysqli_num_rows($query)!= 0){
        $result = mysqli_fetch_assoc($query);
        session_start();
        $_SESSION['id'] = $result['id'];
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>THANK YOU!!</strong> DATA SAVED SUCCESFULLY.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';

    }else{
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>OOPS!!</strong> SOMETHING WENT WRONG.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
}
?>
    <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5">Login Form</h2>
        <div class="text-center mb-5 text-dark">Made with bootstrap</div>
        <div class="card my-5">

          <form class="card-body cardbody-color p-lg-5" action="" method="post">

            <div class="text-center">
              <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>

            <div class="mb-3">
              <input type="text" class="form-control" id="Username" aria-describedby="emailHelp"
                placeholder="User Name" name="username">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="password" placeholder="password" name ="password" >
            </div>
            <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100">Login</button></div>
            <div id="emailHelp" class="form-text text-center mb-5 text-dark">Not
              Registered? <a href="signup.php" class="text-dark fw-bold"> Create an
                Account</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
    </section>
   
    <?php include("includes/footer.php"); ?>
    <script src="js/bootstrap.js"></script>
    <script src="js/popper.js"></script>
</body>
</html>
