<?php

include "data.php";

$sql = "DELETE FROM felhasznalo WHERE ID='".$_GET["deleteUser"]."'";
$result = mysqli_query($con,$sql);

if($result)
{
    echo "<script>alert('Sikeres mentés!'); window.location.href = 'index.php';</script>";
}
else
{
    echo "Valami hiba van a mátrixban!";
    die();
}