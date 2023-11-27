<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regis</title>
    <link rel="stylesheet" href="frontend.css">
</head>

<body>
    <div>
        <p class="welcome">ระบบส่งเอกสารออนไลน์</p>
    </div>
    <div>
        <form action="regis.php" method="GET">
            <table>
                <tr>
                    <td><label>Username</label></td>
                    <td><input type="text" value="" name="u_user" /></td>
                </tr>
                <tr>
                    <td><label>Password</label></td>
                    <td><input type="text" value="" name="p_user" /></td>
                </tr>
                <tr>
                    <td><label>คำนำหน้า</label></td>
                    <td>
                        <select name="pre_user">
                            <option selected value="นาย">นาย</option>
                            <option value="นางสาว">นางสาว</option>
                            <option value="นาง">นาง</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>ชื่อ</label></td>
                    <td><input type="text" value="" name="fname_user" /></td>
                </tr>
                <tr>
                    <td><label>นามสกุล</label></td>
                    <td> <input type="text" value="" name="lname_user" /></td>
                </tr>
                <tr>
                    <td><label>email</label></td>
                    <td> <input type="text" value="" name="email_user" /></td>
                </tr>
                <tr>
                    <td> <label>Tel</label></td>
                    <td> <input type="text" value="" name="tel_user" /></td>
                </tr>
                <tr>
                    <td> </td>
                    <td> <input type="submit" value="ลงทะเบียน" name="regis" /></td>
                </tr>

            </table>

        </form>
    </div>
</body>

</html>