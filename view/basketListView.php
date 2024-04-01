<!DOCTYPE html>
<html lang="en">
<head>
    <title>cheese list</title>
    <link type="text/css" rel="stylesheet" href="#"/>
</head>
<body>
    <header class="header">
    </header>
    <div class="basket">
        <h2>Basket</h2>
        <ul>
            <?php if(isset($_SESSION["basket"]) && count($_SESSION["basket"]) > 0): ?>
                <?php foreach ($_SESSION["basket"] as $item): ?>
                    <li><?= ($item->cheeseName) ?> - £<?= ($item->price) ?></li>
                <?php endforeach?>
                Subtotal: £<?= calculateTotalPrice($_SESSION["basket"]) ?></li>
            <?php else: ?>
                <li>Your basket is empty.</li>
            <?php endif?>
        </ul>
        <?php if(isset($_SESSION["basket"]) && count($_SESSION["basket"]) > 0): ?>
            <td><form method="post" action="../controller/userDetailsList.php"><button type="submit" name = "addUser">Add user details</button></form>
        <?php endif?>
    </div>
</body>
</html>