<form action="index.php" method="GET">
<table>
    <tr>
        <td>
            <input type="hidden" value="1" name="menu"/>
            <input type="search" value="" name="name_topic"/>
            <input type="submit" value="ค้นหาข้อมูลตามชื่อแบบสำรวจ"  name="submit"/>
        </td>
    </tr>
</table>
</form>

<hr>

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
            <?php 
                $status_topic = $row['status_topic']; 
                $message = "";
                if($status_topic == '1'){
                    $message = "เปิดใช้งาน";
                }else {
                    $message = "ระงับการใช้งาน";
                }
                echo $message;
            ?>
        </td>
    </tr>
    <?php
        }
   } ?>

    
   </table>
   <hr>
   <div>
        <p>รายงานข้อมูลแบบสำรวจทั้งหมด</p>
       
   <?php
        $sql = "SELECT COUNT(id_topic) as amount FROM topic";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            if ($row = $result->fetch_assoc()) {  ?>
                 <label>แบบสำรวจทั้งหมดมี <?php echo $row['amount'];  ?> แบบสำรวจ</label>
                 <?php
            }
        }
    ?>
   
   </div>
