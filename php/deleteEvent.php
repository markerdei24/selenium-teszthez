<?php

include "data.php";

$sql = "DELETE FROM esemeny WHERE ID='".$_GET["deleteEvent"]."'";
$result = mysqli_query($con,$sql);
$sqlq = "DELETE FROM esemeny_eloado WHERE esemeny_id='".$_GET["deleteEvent"]."'";
$res = mysqli_query($con,$sqlq);

if($result && $res)
{
    echo "<script>alert('Sikeres mentés!'); window.location.href = 'index.php';</script>";
}
else
{
    echo "Valami hiba van a mátrixban!";
    die();
}