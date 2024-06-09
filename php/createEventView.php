<?php
include_once "data.php";
?>

<form action="createEvent.php" method="get">
        <?php
        foreach ($users as $user) {
                if($user->getRole() == "2")
                {
                    echo '<input type="checkbox" name="performers[]" value="'.$user->getID().'">';
                    echo '<label for="performers">'.$user->getEmail().' </label>';
                }
            }
        ?>
    <label for="capacity">Férőhelyek száma</label>
    <input type="number" name="capacity" min="1">
    <label for="startDate">Kezdő időpont</label>
    <input type="datetime-local" name="startDate" min="<?=date('Y-m-d\Th:i')?>">
    <label for="endDate">Végzés időpont</label>
    <input type="datetime-local" name="endDate" min="<?=date('Y-m-d\Th:i')?>">
    <select name="locationID" id="">
        <?php foreach ($locations as $location): ?>
            <option value="<?= $location->getID() ?>"><?= $location->getName() ?></option>
        <?php endforeach; ?>
    </select>
    <button type="submit">Esemény létrehozása</button>
</form>
