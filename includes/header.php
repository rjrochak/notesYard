<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Noteyard</title>
</head>
<body>
  <header class="header">
    <div class="logo"><img  class="img_logo" src=".\uploads\logo.jpg" alt="logo" >
      <h3>Noteyard</h3>
    </div>
    <nav class="nav">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Login</a></li>
        <li><a href="#">Signup</a></li>
      </ul>
    </nav>
  </header>



    <style>
       body {
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: column;
  min-height: 100vh;  
}

.main {
  flex: 1; 
  margin-top:20px; 
}

.footer {
  background-color: #f0f0f0;
  padding: 20px;
  text-align: center;
  width: 100%;
  margin-top:auto;
}
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
height: 75px;
width: 100px;
mix-blend-mode: multiply;
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
  </footer>

</body>
</html>