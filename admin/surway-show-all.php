
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
        <td>สถานะแบบสำรวจ</td>
        <td>ควบคุมเปิดปิดแบบสำรวจ</td>
        <td></td>
        <td></td>
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
        <td>
            <form action="surway-control-on-off.php" method="GET">
                
                <?php if($status_topic == "1"){ ?>
                    <input type="hidden" value="<?php echo $id_topic ?>" name="id_topic"/>
                    <input type="hidden" value="0" name="status_topic"/>
                    <input type="submit" value="ปิด" name="submit"/>
                    <?php } else {?>
                        <input type="hidden" value="<?php echo $id_topic ?>" name="id_topic"/>
                        <input type="hidden" value="1" name="status_topic"/>
                        <input type="submit" value="เปิด" name="submit"/>
                    <?php } ?>
            </form>
        </td>
        <td><a href="surway-delete.php?id_topic=<?php echo $id_topic;  ?>">Delete</a></td>
        <td><a href="">Update</a></td>
    </tr>
    <?php
        }
   } ?>

    
   </table>
   
