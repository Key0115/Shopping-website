<!doctype html>
<html>
  <head>
    <title>Update Cheese</title>
  </head>
  <body>
  <!--<h1>Hello <?= $userName?></h1>-->
  <h1>Welcome to AdminPage!</h1>
    <h1> Enter cheese you want to Update</h1>
    <?php if ($status): ?>
      <p style="color: green"><?=$status?></p>
    <?php endif ?>
    <form action="updateList.php" method="post">
      cheeseID: <input name="cheeseID" placeholder="Enter cheeseName"/><br/>
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
    <a href="../controller/AdminList.php">Add new cheese</a>
    <a href="../controller/loginList.php">Logout</a>
  </body>
</html>