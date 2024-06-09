<?php

include "data.php";

$sql = "DELETE FROM helyszin WHERE ID='".$_GET["deleteLocation"]."'";
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
