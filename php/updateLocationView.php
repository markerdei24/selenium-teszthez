<?php
include "data.php";

foreach ($locations as $location):
    if($location->getID() == $_GET["updateLocation"]):
        ?>
        <form action="updateLocation.php" method="post">
            <input type="text" name="locationName" value="<?= $location->getName() ?>" placeholder="<?= $location->getName() ?>">
            <input type="number" name="locationCapacity" min="1" value="<?= $location->getCapacity() ?>">
            <input type="hidden" name="locationID" value="<?= $location->getID() ?>">
            <button type="submit">Mentés</button>
        </form>
    <?php
    endif;
endforeach;

?>