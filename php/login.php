<?php
include_once "data.php";
foreach ($users as $user) {
    if($user->getEmail() == $_POST["userEmail"] && $user->getPassword() == $_POST["userPassword"])
    {
        session_start();
        $_SESSION["loggedUserID"] = $user->getID();
        header("Location: ./index.html");

    }
}


