<table>
<thead>
<tr>
    <th>Helyszín neve</th>
    <th>Férőhely</th>
</tr>
</thead>
    <tbody>
    <?php
    foreach ($locations as $location): ?>
    <tr>
        <td>
            <?= $location->getName() ?>
        </td>
        <td>
            <?= $location->getCapacity() ?>
        </td>
        <td>
            <a href="updateLocationView.php?updateLocation=<?= $location->getID() ?>">
                <button type="button">Szerkesztés</button>
            </a>
        </td>
        <td>
            <button type="button" onclick="if(confirm('Biztos törölni akarod ezt a rekordot?')){ window.location = `deleteLocation.php?deleteLocation=<?= $location->getID() ?>` }">
                Törlés
            </button>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
