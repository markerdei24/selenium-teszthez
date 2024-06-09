<?php
include "data.php";

if($_POST["userEmail"] && isset($_POST["userPassword"]) && isset($_POST["userRole"]) !== null)
{

    $sql = "UPDATE felhasznalo SET email='".$_POST["userEmail"]."', jelszo='".$_POST["userPassword"]."', jogosultsagID='".$_POST["userRole"]."' WHERE ID='".$_POST["userID"]."'";
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
?>
