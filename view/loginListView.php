<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="#"/>
    <title>SignIn</title>
</head>
<body>
  <?php require_once "../controller/loginList.php"; ?>  
</body>
<header class = "header">
    <h1>LOGIN</h1>
    <form action= "loginList.php" method="POST">
        <div class= "forms">
            <div>UserName <input type="text" name="userName" required></div>
            <div>Password <input type="text" name="password" required></div>
            <input type="submit" value="Login"/>
            <p>Are you user?</p>
            <p><a href="../controller/userList.php">User Access</a>
        </div>
</header>
</html>