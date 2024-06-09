<?php
include "db.php";

if($_POST["userEmail"] && isset($_POST["userPassword"]) && isset($_POST["userRole"]) !== null)
{
    $sql = "INSERT INTO felhasznalo (email,jelszo,jogosultsagID) VALUES ('".$_POST["userEmail"]."','".$_POST["userPassword"]."','".$_POST["userRole"]."')";
    $result = mysqli_query($con,$sql);

    if(!$result)
    {
        echo "Hiba van a mátrixban";
        die();
    }
    else
    {
        echo "<script>alert('Sikeres mentés!'); window.location.href = 'index.php';</script>";
    }

}
