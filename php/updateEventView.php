<?php
include_once "data.php";

foreach ($events as $event):
if ($event->getID() == $_GET["updateEvent"]):

?>
<form action="updateEvent.php">
    <select name="location" id="">
        <?php foreach ($locations as $location) {
            $temp = "";
            if ($location->getID() == $event->getLocationID()) {
                $temp = $location->getID();
                echo '<option value="' . $location->getID() . '" selected>' . $location->getName() . '</option>';
            } else {
                echo '<option value="' . $location->getID() . '">' . $location->getName() . '</option>';
            }
        }
        ?>
    </select>
    <input type="number" min="1" max="<?= $location->getCapacity() ?>" value="<?= $event->getCapacity() ?>">
    <input type="datetime-local" value="<?= $event->getStartDate() ?>" min="<?=date('Y-m-d\Th:i')?>">
    <input type="datetime-local" value="<?= $event->getEndDate() ?>">
</form>
<?php
endif;
endforeach;
?>
