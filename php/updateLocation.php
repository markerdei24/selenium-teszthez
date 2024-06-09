<?php
include "data.php";

if($_POST["locationName"] && isset($_POST["locationCapacity"]) !== null)
{

    $sql = "UPDATE helyszin SET nev='".$_POST["locationName"]."', ferohely='".$_POST["locationCapacity"]."' WHERE ID = '".$_POST["locationID"]."'";
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