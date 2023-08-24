<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="styles.css"> -->
  <title>Noteyard</title>
</head>
<body>
  <header class="header">
    <div class="logo"><img  class="img_logo" src="reading.png" alt="">
      <h3>Noteyard</h3>
    </div>
    <nav class="nav">
        <ul>
            <!-- Add the three buttons for MyNotes, Profile, and Logout -->
            <li><a href="">MY NOTES</a></li>
            <li><a href="profile.php">MY PROFILE</a></li>
            <li><a href="logout.php">LOGOUT</a></li>
            <style>
                /* Reset some default styles to ensure consistency */
                body, h1, h2, h3, p, ul, li {
  margin: 0;
  padding: 0;
}

 
.header {
  background-color: #333;
  color: #fff;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 20px;
}

.logo {
  font-size: 24px;
  font-weight: bold;
  display: flex;
  align-items: center;
}
.img_logo{
width: 100px;
}

.nav ul {
  list-style: none;
  display: flex;
}

.nav li {
  margin-right: 20px;
}

.nav a {
  text-decoration: none;
  color: #fff;
}

            </style>
        </ul>
    </nav>
  </header>
