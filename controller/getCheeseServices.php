<?php
header('Content-Type: application/json');
require_once "../model/cheese.php";
require_once "../model/dataAccess.php";

#CheeseNameAJAX
if (!isset($_REQUEST["cheeseName"]))
{
  echo json_encode([]); // send empty array
}
else {
  $names = getCheeseByStartOfCheeseName($_REQUEST["cheeseName"]);
  // use the
  echo json_encode($names);
}
?>
