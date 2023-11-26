<?php
    include_once('../system/db.php');
    $sql = "SELECT  id_topic,name_topic,detail_topic,status_topic
    FROM topic";

    $result = $conn->query($sql);
    ?>
<table>
    <?php
    if ($row = $result->fetch_assoc()) {  ?>
    <tr>
        <td>
            <?php echo $row['id_topic'];  ?>
        </td>
        <td>
            <?php echo $row['name_topic'];  ?>
        </td>
    </tr>
    <?php } ?>
</table>