<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="frontend.css">
    <title>Chang  Password</title>
</head>
<body>
    <div>
    <div><p class="header-data">การจัดการเปลี่ยนรหัสผ่าน</p></div>
    <hr>
    </div>
    <form action="../login/user/change-password.php" method="GET">
        <label>รหัสผ่านเดิม</label>
        <input type="text" value="" name="p_memOld"/><br>
        <label>รหัสผ่านใหม่</label>
        <input type="text" value="" name="p_memNew"/><br>
        <input type="submit" value="เปลี่ยนรหัสผ่าน" name="changPassword" />
    </form>
    </div>
</body>
</html>