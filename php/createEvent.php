<?php
include "db.php";
include "data.php";

if($_GET["performers"] && isset($_GET["capacity"]) && isset($_GET["startDate"]) && isset($_GET["endDate"]) && isset($_GET["locationID"]) !== null)
{
    $sql = "INSERT INTO esemeny (ferohely, kezdes, vegzes, helyszinID) VALUES ('".$_GET["capacity"]."','".$_GET["startDate"]."','".$_GET["endDate"]."','".$_GET["locationID"]."')";
    $result = mysqli_query($con,$sql);
    $esemeny_id = $con->insert_id;
    foreach ($_GET["performers"] as $performer) {
        $sql = "INSERT INTO esemeny_eloado (esemeny_id,felhasznalo_id) VALUES ('$esemeny_id','$performer')";
        $res = mysqli_query($con,$sql);
    }
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