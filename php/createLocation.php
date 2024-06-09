<?php
include "db.php";

if($_POST["locationName"] && isset($_POST["locationCapacity"]) !== null)
{
    $sql = "INSERT INTO helyszin (nev,ferohely) VALUES ('".$_POST["locationName"]."','".$_POST["locationCapacity"]."')";
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