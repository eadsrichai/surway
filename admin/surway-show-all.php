<?php
    include_once('../system/db.php');
    $sql = "SELECT  id_topic,name_topic,detail_topic,status_topic
    FROM topic";

    $result = $conn->query($sql);
    ?>
<table>
    <tr>
        <td>รหัสแบบสำรวจ</td>
        <td>ชื่อแบบสำรวจ</td>
        <td>รายละเอียดแบบสำรวจ</td>
        <td>สถานะแบบสำรวจ</td>
    </tr>

    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {  ?>
    <tr>
        <td>
            <?php echo $row['id_topic'];  ?>
        </td>
        <td>
            <?php  $id_topic = $row['id_topic']; ?>
            <a href="index.php?menu=4&id_topic=<?php echo $id_topic; ?>&name_topic=<?php echo $row['name_topic']; ?>"><?php echo $row['name_topic']; ?></a>
        </td>
        <td>
            <?php echo $row['detail_topic'];  ?>
        </td>
        <td>
            <?php echo $row['status_topic'];  ?>
        </td>
    </tr>
    <?php
        }
   } ?>

   </table>
