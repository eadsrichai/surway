<?php
    $id_topic = $_GET['id_topic'];
    $name_topic = $_GET['name_topic'];
    include_once('../system/db.php');
    $sql = "SELECT  t.id_topic,t.name_topic,t.detail_topic,t.status_topic,q.id_q,
            q.title_q,q.ch1_q,q.ch2_q,q.ch3_q,q.ch4_q
    FROM    topic t, question q
    WHERE   t.id_topic = q.id_topic
    AND     q.id_topic like '$id_topic'";

    $result = $conn->query($sql);
   
    ?>
    <div>
        <p style="font-size: 32px;">แบบสำรวจ <?php  echo $name_topic; ?></p>
    </div>
    <form action="surway-answer-question.php" method="GET">
        <ul class="surway-show">
        <?php
        
        $i = 1;
        $j = 1;
        while ($row = $result->fetch_assoc()) { ?>
                
                <input type="hidden" value="<?php echo $row['id_topic']; ?>" name="id_topic"/>
                <input type="hidden" value="<?php echo $row['id_q']; ?>" name="id_question<?php echo $j; ?>"/>
                <input type="hidden" value="<?php echo $_SESSION['id_user']; ?>" name="id_user"/>
                <li><?php echo $i++ . ". "; echo  $row['title_q'];  ?></li>
                <li><input type="radio" value="<?php echo  $row['ch1_q'];  ?>" name="user_ans<?php echo $j; ?>"/> <?php echo  $row['ch1_q'];  ?></li>
                <li><input type="radio" value="<?php echo  $row['ch2_q'];  ?>" name="user_ans<?php echo $j; ?>"/><?php echo  $row['ch2_q'];  ?></li>
                <li><input type="radio" value="<?php echo  $row['ch3_q'];  ?>" name="user_ans<?php echo $j; ?>"/><?php echo  $row['ch3_q'];  ?></li>
                <li><input type="radio" value="<?php echo  $row['ch4_q'];  ?>" name="user_ans<?php echo $j++; ?>"/><?php echo  $row['ch4_q'];  ?></li>
                
                <br>
        <?php
        }
        ?>
        </ul>
    <input type="submit" value="ส่งแบบสอบถาม" name="submit"/>
    </form>