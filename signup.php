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
            <input type="text" id="username" name="username" required><br><br>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>

           
            
           

            <input type="submit" value="Sign Up">
        </form>
    </div>
<script src="../js/bootstrap.js"></script>
<script src="../js/popper.js"></script>

<?php

     
     
    

  if($_POST){
    // $user= $_POST['username'];
    // $email = $_POST['email'];
    // $password = $_POST['password'];
    extract($_POST);
    $connect = mysqli_connect("localhost","root","","notesyard");
    // $insert = mysqli_query($connect, "INSERT INTO user VALUES('', '$username,'$email','$password')");
    $insert = mysqli_query($connect,"INSERT into user(username,email,password) VALUES ('$username','$email','$password')");
    if($insert){
        echo "data saved successfully";
    }
    else{
        mysqli_error($insert);
    }
  }
  
  ?>



  

</body>
</html>
