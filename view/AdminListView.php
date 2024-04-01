<!doctype html>
<html>
  <head>
    <title>Add Cheese</title>
  </head>
  <body>
    <!--Figure out how to show userName by using Session valuable-->
    <h1>Welcome to AdminPage!
      <?php 
      if(isset($_SESSION["user"])){
        $_SESSION["user"];
      }
      ?></h1>
  <h1> Enter cheese you want to Add</h1>
    <?php if ($status): ?>
      <p style="color: green"><?=$status?></p>
    <?php endif ?>
    <form action="AdminList.php" method="post">
      cheeseName: <input name="cheeseName" placeholder="Enter cheeseName"/><br/>
      type: <input name="type" placeholder="Enter type of cheese"/><br/>
      soft or hard: <input name="softness" placeholder="Enter soft or hard"/><br/>
      origin: <input name="origin" placeholder="Enter country of origin of cheese"/><br/>
      strength: <input name="strength" placeholder="Enter 1-5"/><br/>
      price: <input name="price" placeholder="Enter price"/><br/>
      pairing: <input name="pairing" placeholder="Enter pairing for cheese"/><br/>
      stocks: <input name="stocks" placeholder="Enter stocks for cheese"/><br/>
      ImageURL: <input name="image" placeholder="Enter ImageURL of cheese"/><br/>
      <input type="submit"/>
    </form>
    <a href="../controller/updateList.php">Update the existing cheese</a>
    <a href="../controller/loginList.php">Logout</a>
  </body>
</html>