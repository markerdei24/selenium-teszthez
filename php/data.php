<?php
include_once "db.php";
include "User.php";
include "Location.php";
include "Event.php";
global $con;

$usersData = $con->query("SELECT * FROM felhasznalo");
$locationsData = $con->query("SELECT * FROM helyszin");
$eventsData = $con->query("SELECT * FROM esemeny");

$users = [];
$locations = [];
$events = [];
while ($row = $usersData->fetch_assoc())
{
    $users[] = new User($row["ID"], $row["email"],$row["jelszo"],$row["jogosultsagID"]);
}
while ($row = $locationsData->fetch_assoc())
{
    $locations[] = new Location($row["ID"],$row["nev"],$row["ferohely"]);
}
while ($row = $eventsData->fetch_assoc())
{
    $events[] = new Event($row["ID"],$row["ferohely"],$row["kezdes"],$row["vegzes"],$row["helyszinID"]);
}


