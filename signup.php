<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.signup-container {
    background-color: #ffffff;
    border-radius: 10px;
    padding: 30px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
    width: 400px;
    
}

h2 {
    margin-bottom: 20px;
    text-align: center;

}

label {
    font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="password"],
select {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

input[type="submit"] {
    background-color: #007bff;
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

    </style>

</head>
<body>
    <div class="signup-container">
        <h2>SIGN UP !</h2>
        <form action="" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required name= "username"><br><br>

            <label for="gender">gender:</label>
            <select id="gender" name="gender" required>
                <option value="male" name= "maler">male</option>
                <option value="female" name= "female">female</option>
                <option value="other" name= "other">other</option>
            </select><br><br>


            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required name="email"><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required name="password"><br><br>

            <!-- <div class="container height-100 d-flex justify-content-center align-items-center"> <div class="position-relative"> <div class="card p-2 text-center"> <h6>Please enter the OTP ! <br> </h6> <div> <span>A code has been sent to</span> <small>*******9897</small> </div> <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2" > <input class="m-2 text-center form-control rounded" type="text" id="first" maxlength="1" /> <input class="m-2 text-center form-control rounded" type="text" id="second" maxlength="1"  /> <input class="m-2 text-center form-control rounded" type="text" id="third" maxlength="1" /> <input class="m-2 text-center form-control rounded" type="text" id="fourth" maxlength="1" /> <input class="m-2 text-center form-control rounded" type="text" id="fifth" maxlength="1" /> <input class="m-2 text-center form-control rounded" type="text" id="sixth" maxlength="1" /> </div> <div class="mt-4"> <button class="btn btn-danger px-4 validate">Validate</button> </div> </div> <div class="card-2"> <div class="content d-flex justify-content-center align-items-center"> <span>Didn't get the code</span> <a href="#" class="text-decoration-none ms-3">Resend(1/3)</a> </div> </div> </div><br><br>
          </div> -->

            <label class="form-label" for="customFile">upload image</label>
            <input type="file" class="form-control" id="customFile" /><br><br>
            
            <label for="role">Role:</label>
            <select id="role" name="role" required>
                <option value="user" name= "user">User</option>
                <option value="admin" name= "admin">Admin</option>
            </select><br><br>

            <input type="submit" value="Sign Up">
        </form>
    </div>
<script src="../js/bootstrap.js"></script>
<script src="../js/popper.js"></script>

<!-- <?php
  $hostname = "localhost";
  $username = "root";
  $gender = "";
  $email = "";
  $password = "";
  $database = "notesyard";
  
  
  $connect = mysqli_connect($hostname,$username,$gender,$email,$password,$database);

  if($_POST){
    extract($_POST);

  }
  ?>


?> -->
  

</body>
</html>