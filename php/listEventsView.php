<table>
    <thead>
    <tr>
        <th>
            Helyszín
        </th>
        <th>
            Férőhely
        </th>
        <th>
            Kezdés
        </th>
        <th>
            Befejezés ideje
        </th>
    </tr>
    </thead>
    <tbody>
        <?php foreach ($events as $event): ?>
        <tr>
            <td>
                <?php foreach ($locations as $location) {
                    if($event->getLocationID() == $location->getID())
                    {
                        echo $location->getName();
                    }
                } ?>
            </td>
            <td>
                <?= $event->getCapacity() ?>
            </td>
            <td>
                <?= $event->getStartDate() ?>
            </td>
            <td>
                <?= $event->getEndDate() ?>
            </td>
            <td>
                <a href="updateEventView.php?updateEvent=<?= $event->getID() ?>">
                    <button type="button">Szerkesztés</button>
                </a>
            </td>
            <td>
                <button type="button" onclick="if(confirm('Biztos törölni akarod ezt a rekordot?')){ window.location = `deleteEvent.php?deleteEvent,=<?= $event->getID() ?>` }">
                    Törlés
                </button>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
