<!DOCTYPE html>
<html lang="en">
<head>
    <title>cheese list</title>
    <!-- <meta name="viewport" content="width-device-width, initial-scale-1"> -->
    <link type="text/css" rel="stylesheet" href="../CSS/mainStyle.css"/>
    <script type="text/javascript" src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../JavaScript/clientcode.js"></script>
</head>
<body>
    <header class="header">
        <nav>
          <form action="userList.php" method="post">
              Search by Name:
              <div id ="searchName">
                <input type="text" placeholder="Search" name="searchName"/> <input type="submit" value="Search"/>
                <div class = "results">
                  <div class="result">cheese</div>
              </div>
              </div>
              <input name="searchType" placeholder="Search by type:"/> <input type="submit" value="Search"/><br/>
              <input name="searchSoft" placeholder="Search by consistency:"/> <input type="submit" value="Search"/><br/>
              <input name="searchOrigin" placeholder="Search by origin:"/> <input type="submit" value="Search"/><br/>
              <input name="searchPrice" placeholder="Search by price:"/> <input type="submit" value="Search"/><br/>
          </form>
         </nav>
         <article>
         <img id="icon" src="../ImageAsset/cheese.png">
         </article>
    </header>
    <form action="userList.php" method="post" name="reset"><button type="submit" name="reset">Reset</button></form>
    </div>
    <?php if (count($lastsearch) != 0): ?>
      <form action="userList.php" method="post">
        Past searches: <select name="searchName">
          <?php foreach ($lastsearch as $searchitem): ?>
            <option value="<?=$searchitem?>"><?=$searchitem?></option></li> 
          <?php endforeach ?>
        </select>
        <input type="submit" value="Search"/>
      </form>
    <?php endif ?>
    <table id="resultstable">
    <thead>
        <tr>
            <th>ID</th>
            <th>Cheese Name</th>
            <th>Type</th>
            <th>Softness</th>
            <th>Origin</th>
            <th>Strength</th>
            <th>Pairing</th>
            <th>Price(per 100g)</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($results as $cheese): ?>
            <tr>
                <td><?= $cheese->cheeseID?></td>
                <td><?= $cheese->cheeseName?></td>
                <td><?= $cheese->type?></td>
                <td><?= $cheese->softness?></td>
                <td><?= $cheese->origin?></td>
                <td><?= $cheese->strength ?></td>
                <td><?= $cheese->pairing?></td>
                <td>£<?= $cheese->price?></td>
                <!--use form to prevent error from href(redirecting previous session)-->
            </tr>
        <?php endforeach?>
    </tbody>
    </table>
    <?php if (sizeof($_SESSION["basket"]) != 0): ?> <!-- only show this bit if there's people in the basket --> 
      <p><b>Item in the basket:</b><p>
      <table>
        <tr>
          <th>Items</th>
          <th>price</th>     
        </tr>
          <?php foreach ($_SESSION["basket"] as $item): ?>
          <tr>
            <td><?=$item->cheeseName?></td>
            <td>£<?=$item->price?></td>
          </tr>
          <?php endforeach ?>
          <td><form method="post" action="../controller/basketList.php"><button type="submit" name = "viewBasket">Go to basket</button></form>
      </table>
    <?php endif ?>



    <main>
      <h1 class="title">Cheese World</h1>
      <div class="container">
      <?php foreach ($results as $cheese): ?>
        <div class="cell">
          <img class="cell-img" src="<?=$cheese->ImageURL?>"/>
          <div class="container-text">
            <h3><?=$cheese->cheeseName?></h3>
            <p>Type: <?=$cheese->type?> </p>
            <p>consistency: <?=$cheese->softness?> </p>
            <p>country of origin: <?=$cheese->origin?> </p>
            <p>strength: <?=$cheese->strength?></p>
            <p>pairing: <?=$cheese->pairing?></p>
            <p>Price (per 100g): <?=$cheese->price?> </p>
            <form method="post" action="../controller/userList.php"><button type="submit" name="shortlist" value=<?=$cheese->cheeseID?>>Add to basket</button</form>
          </div>
        </div>
      <?php endforeach?>
      </div>
    </main>
  </body>
</html>