<?php
include "data.php";

foreach ($users as $user):
    if($user->getID() == $_GET["updateUser"]):
?>
<form action="updateUser.php" method="post">
    <input type="email" name="userEmail" value="<?= $user->getEmail() ?>" placeholder="<?= $user->getEmail() ?>">
    <input type="password" name="userPassword" value="<?= $user->getPassword() ?>" placeholder="<?= $user->getPassword() ?>">
    <input type="number" name="userRole" min="1" max="3" value="<?= $user->getRole() ?>">
    <input type="hidden" name="userID" value="<?= $user->getID() ?>">
    <button type="submit">Mentés</button>
</form>
<?php
endif;
endforeach;

?>
