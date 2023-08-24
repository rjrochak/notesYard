<?php
 require('connection.php');
 session_start();
        $id = $_SESSION['id'];
        if(empty($id)){
            header('location:login.php');
            exit();
        }
$id = $_GET['id'];
$data = mysqli_query($connect,"SELECT * from user where id='$id'");
if(mysqli_num_rows($data)!=0){
    $result = mysqli_fetch_assoc($data);
    $id = $result["id"];
    $username = $result["username"]; 
    $email = $result["email"]; 
    $password = $result["password"];
}else{
    echo mysqli_error($result);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile management</title>
</head>    
<body>

<h1  align="center">Update Your Information</h1>
    <form action="" align="center" method="POST">
        <input type="hidden" name="id" value="<?php echo $id ?>">
     username :<br>
     <input type="text" name="username" id="" value="<?php echo $username ?>"><br><br>
     email:<br>
     <input type="email" name="email" value="<?php echo $email ?>"><br><br>
     password:<br>
     <input type="password" name="password" id="" value="<?php echo $password  ?>"><br><br>
    <input type="submit" value="Update">
    </form>

  
    
</body>
</html> 
<?php
 if($_POST){
    extract($_POST);
    $update = mysqli_query($connect,"UPDATE user set username='$username',email='$email',password='$password' where id='$id'");
    if($update){

        header('location:login.php');
    }else{
        mysqli_error($update);
    }
    
}


?>