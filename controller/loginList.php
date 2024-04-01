<?php
require_once "../model/dataAccess.php";
require_once "../model/user.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = $_REQUEST["userName"];
    $password = $_REQUEST["password"];
    $result = getUserNameAndPassword($userName, $password);

    if (!empty($result)) {
        // Assuming the function returns a valid admin object or array
        $_SESSION['admin_user'] = $userName; // Store some identifying information in session
        require_once "../controller/AdminList.php";
        exit();
    } else {
        $_SESSION['login_error'] = 'Invalid username or password';
        require_once "../view/loginListView.php";
    }
} else {
    require_once "../view/loginListView.php";
}




?>