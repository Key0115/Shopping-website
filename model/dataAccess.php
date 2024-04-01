<?php
$pdo = new PDO("mysql:host=localhost;dbname=db_k2280068", 
               "k2280068", "weengige",
               [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]                                   
);

function getAllCheeses(){
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM cheese");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"cheese");
    return $results;
}
#Cheese search function (1st functional requirement)
function getCheeseByID($cheeseID){
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM cheese WHERE cheeseID = ?");
    $statement->execute([$cheeseID]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS, "cheese");
    return $results[0];
}
function getCheeseByName($cheeseName){
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM cheese WHERE cheeseName = ?");
    $statement->execute([$cheeseName]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS, "cheese");
    return $results;
}
#cheeseNameAJAX
function getCheeseByStartOfCheeseName($partialCheeseName)
{
  global $pdo;
  $statement = $pdo->prepare('SELECT DISTINCT cheeseName FROM cheese
                              WHERE cheeseName LIKE ?');
  $partialCheeseNameWithWildCard = $partialCheeseName."%";
  $statement->execute([$partialCheeseNameWithWildCard]);
  $cheese = $statement->fetchAll(PDO::FETCH_COLUMN,0);
  return $cheese;
}

function getCheeseByType($type){
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM cheese WHERE type = ?");
    $statement->execute([$type]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS, "cheese");
    return $results;
}

function getCheeseBySoftness($softness){
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM cheese WHERE softness = ?");
    $statement->execute([$softness]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS, "cheese");
    return $results;
}

function getCheeseByOrigin($origin){
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM cheese WHERE origin = ?");
    $statement->execute([$origin]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS, "cheese");
    return $results;
}

function getCheeseByStrength($strength){
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM cheese WHERE strength = ?");
    $statement->execute([$strength]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS, "cheese");
    return $results;
}

function getCheeseByPrice($price){
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM cheese WHERE price = ?");
    $statement->execute([$price]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS, "cheese");
    return $results;
}

function getImage($image){
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM cheese WHERE ImageURL = ?");
    $statement->execute([$image]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS, "cheese");
    return $results;
}
#Add cheese to the basket(4nd functional requirement)

#Add new cheese and update
function addCheese($cheese){
    global $pdo;
    if($cheese != null){
        $insert = $pdo->prepare("INSERT INTO cheese (cheeseName,type,softness,origin,strength,price,pairing,stocks,ImageURL) VALUES (?,?,?,?,?,?,?,?,?)");
        $insert->execute([$cheese->cheeseName,$cheese->type,$cheese->softness,$cheese->origin,$cheese->strength,$cheese->price,$cheese->pairing,$cheese->stocks,$cheese->ImageURL]);   
    }

}

function updateCheese($cheeseUpdate){
    global $pdo;
    if($cheeseUpdate != null){
        $update = $pdo->prepare("UPDATE cheese SET cheeseName=?, type=?, softness=?,origin=?,strength=?,price=?,pairing=?,stocks=?,ImageURL=? 
        WHERE cheeseID = ?");
        $update->execute([$cheeseUpdate->cheeseName,$cheeseUpdate->type,$cheeseUpdate->softness,$cheeseUpdate->origin,$cheeseUpdate->strength,$cheeseUpdate->price,$cheeseUpdate->pairing,$cheeseUpdate->stocks,$cheeseUpdate->ImageURL,$cheeseUpdate->cheeseID]);
    }
}

#user details
function getAllUsers(){
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM user");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"user");
    return $results;
}
function getUserByID($userID){
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM user WHERE UserID = ?");
    $statement->execute([$userID]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS, "user");
    return $results[0];
}
function addUser($user){
    global $pdo;
    if($user != null){
        $insert = $pdo->prepare("INSERT INTO user (firstname,lastname,address,email,city,country,state,postcode,phonenumber) VALUES (?,?,?,?,?,?,?,?,?)");
        $insert->execute([$user->firstname,$user->lastname,$user->address,$user->email,$user->city,$user->country,$user->state,$user->postcode,$user->phonenumber]);   
    }

}
#Admin
#Login details
function getUserName($userName){
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM Admin WHERE userName = ? ");
    $statement->execute([$userName]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS, "user");
    return $results[0];

}

function getPassword($password){
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM Admin WHERE password = ? ");
    $statement->execute([$password]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS, "user");
    return $results;

}

function getUserNameAndPassword($userName,$password){
    global $pdo;
    $statement = $pdo-> prepare("SELECT * FROM Admin WHERE userName = ? AND password = ?");
    $statement->execute([$userName, $password]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS, "user");
    return $results;
}



?>