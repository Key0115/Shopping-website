<?php
  require_once "../model/cheese.php";
  require_once "../model/dataAccess.php";

  session_start();
  if (!isset($_SESSION["lastsearch"]))
  {
    // make it an empty array
    $_SESSION["lastsearch"] = [];
  }
  if (!isset($_SESSION["basket"]) ||isset($_REQUEST["reset"]))
  {
    $_SESSION["basket"] = [];
  }
  if(isset($_REQUEST["viewBasket"])){
    require_once "../controller/basketList.php";
    exit();
  }

  // if they performed a search, i.e. if one of the searchname
  // fields is filled in  
  #Search Name
if (isset($_REQUEST["searchName"])&& $_REQUEST["searchName"] != "")
{
    $results = getCheeseByName($_REQUEST["searchName"]);
}
else if (isset($_REQUEST["searchType"]) && $_REQUEST["searchType"] != "")
{
    $results = getCheeseByType($_REQUEST["searchType"]);
}
else if (isset($_REQUEST["searchSoft"]) && $_REQUEST["searchSoft"] != "")
{
    $results = getCheeseBySoftness($_REQUEST["searchSoft"]);
}
else if (isset($_REQUEST["searchOrigin"]) && $_REQUEST["searchOrigin"] != "")
{
    $results = getCheeseByOrigin($_REQUEST["searchOrigin"]);
}
else if (isset($_REQUEST["searchPrice"]) && $_REQUEST["searchPrice"] != "")
{
    $results = getCheeseByPrice($_REQUEST["searchPrice"]);
}
else
{
    $results = getAllCheeses();
}
$lastsearch = $_SESSION["lastsearch"];
#It is adding 2 items whenever, shortlist=? is loaded for some reasons...
  if (isset($_REQUEST["shortlist"]))
  {
    $customerObject = getCheeseByID($_REQUEST["shortlist"]);
    if($customerObject != null){
      $_SESSION["basket"][] = $customerObject;
    }
    
  }


  require_once "../view/userListView.php";
?>