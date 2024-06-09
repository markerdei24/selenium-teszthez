<table>
    <thead>
    <tr>
        <th>
            Email címek
        </th>
        <th>
            Jelszavak
        </th>
        <th>
            Jogosultság
        </th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($users as $user):
        ?>
        <tr>
            <td>
                <?= $user->getEmail() ?>
            </td>
            <td>
                <?= $user->getPassword() ?>
            </td>
            <td>
                <?= $user->getRole() ?>
            </td>
            <td>
                <a href="updateUserView.php?updateUser=<?= $user->getID() ?>">
                    <button type="button">Szerkesztés</button>
                </a>
            </td>
            <td>
                <button type="button" onclick="if(confirm('Biztos törölni akarod ezt a rekordot?')){ window.location = `deleteUser.php?deleteUser=<?= $user->getID() ?>` }">
                    Törlés
                </button>
            </td>
        </tr>
    <?php
    endforeach;
    ?>
    </tbody>
</table>