<tr id="<?=$ID?>">
    <td><?=$ID?></td>
    <td><?=$FIO?></td>
    <td><?=$dateAndTime?></td>
    <td><?=$telephone?></td>
    <td><?=$peopleNumber?></td>
    <td><?=gmdate("d.m.Y H:i", $creationDate)?></td>
    <td>
        <form name="form<?=$ID?>" action="scripts/closeOpenRequest.php" method="POST">
            <input type="hidden" name="openRequestID" value="<?=$ID?>">
            <input type="submit" name="submitRequest" value="Закрыть">
        </form>
    </td>
</tr>