<!doctype html>
<html>
  <head>
    <title>User</title>
  </head>
  <body>
    <h1>Enter your personal Details</h1>
    <?php if ($status): ?>
      <p style="color: green"><?=$status?></p>
    <?php endif ?>
    <form action="userDetailsList.php" method="post">
      firstname: <input name="fname" placeholder="Enter firstname"/><br/>
      lastname: <input name="lname" placeholder="Enter lastname"/><br/>
      address: <input name="address" placeholder="Enter Address"/><br/>
      email: <input name="email" placeholder="Enter email"/><br/>
      city: <input name="city" placeholder="Enter city"/><br/>
      country: <input name="country" placeholder="Enter country"/><br/>
      state: <input name="state" placeholder="Enter state"/><br/>
      postcode: <input name="postcode" placeholder="Enter stocks for cheese"/><br/>
      phone: <input name="phone" placeholder="Enter phonenumber"/><br/>
    </form>
    <form method="post" action="../controller/userList.php"><button type="submit" name="back">Go back to the mainpage</button></form>
  </body>
</html>