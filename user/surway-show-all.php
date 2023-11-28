
<?php
    if(isset($_GET['submit']) && $_GET['submit'] == "ค้นหาข้อมูลตามชื่อแบบสำรวจ") {
        $name_topic = $_GET['name_topic'];
        $sql = "SELECT  id_topic,name_topic,detail_topic,status_topic
                FROM topic
                WHERE name_topic like '%$name_topic%'";
    }else {
        $sql = "SELECT  id_topic,name_topic,detail_topic,status_topic
                FROM topic";
    }
    include_once('../system/db.php');
    
    $result = $conn->query($sql);
    ?>
<table>
    <tr>
        <td>รหัสแบบสำรวจ</td>
        <td>ชื่อแบบสำรวจ</td>
        
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
    </tr>
    <?php
        }
   } ?>

    
   </table>
   
