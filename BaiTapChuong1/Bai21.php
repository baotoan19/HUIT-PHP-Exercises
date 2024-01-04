<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form String</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        table {
            width: 600px;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: aquamarine;
        }

        th, td {
            padding: 10px 30px;
            text-align: left; 
            font-size: 20px;
        }

        th {
            background-color: blue;
            font-size: 25px;
            height: 50px;
            text-align: center;
        }

        .textbox {
            height: 30px;
            width: 150%; 
            box-sizing: border-box;
            font-size: 20px;
            margin-left: -200px;
        }

        .btn {
           text-align: center;
        }
        .btn input{
            height: 40px;
            width: 150px;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
    session_start();
    $showInfo = false;
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $_SESSION['txt_fullname'] = $_POST['txt_fullname'];
        $_SESSION['txt_email'] = $_POST['txt_email'];
        $_SESSION['txt_username'] = $_POST['txt_username'];
        $_SESSION['txt_password'] = $_POST['txt_password'];
        $showInfo=true;
    } 
    ?>
     <?php
    $fullname=isset($_SESSION['txt_fullname']) ? $_SESSION['txt_fullname'] : '';
    $email=isset($_SESSION['txt_email']) ? $_SESSION['txt_email'] : '';
    $username=isset($_SESSION['txt_username']) ? $_SESSION['txt_username'] : '';
    $password=isset($_SESSION['txt_password']) ? $_SESSION['txt_password'] : '';
    ?>
    <form name="f1" method="post" action="Bai21.php">
        <table>
            <tr>
                <th colspan="2">THÔNG TIN ĐĂNG NHẬP</th>
            </tr>
            <tr>
                <td>Họ và tên</td>
                <td><input class="textbox" type="text" name="txt_fullname" value="<?php echo $fullname ?>"> </td>
            </tr>
            <tr>
                <td>Email</td>
                <td> <input class="textbox" type="text" name="txt_email" value="<?php echo $email  ?>"> </td>
            </tr>
            <tr>
                <td>Tên ĐN</td>
                <td> <input class="textbox" type="text" name="txt_username" value="<?php echo $username  ?>"> </td>
            </tr>
            <tr>
                <td>Password</td>
                <td> <input class="textbox" type="text" name="txt_password" value="<?php echo $password  ?>"> </td>
            </tr>
            <tr >
                <td class="btn" colspan="2"> <input type="submit" name="submit" value="Đăng Nhập"></td>
            </tr>
        </table>
    </form>
    <br><br><br>
    <?php if ($showInfo) : ?>
        <div style="background-color: aqua; width:600px; height:270px; margin: 0 auto;padding-top:10px;font-size:20px;" align="center" >
        <p>Xin chào <?php echo $fullname ?></p>
        <p>Email <?php echo $email ?></p>
        <p>Tên Đăng Nhập <?php echo $username ?></p>
        <p>Mật Khẩu <strong style="font-weight:bold;font-style:italic;"><?php echo $password ?></strong> </p>
        <a href="GetBai21.php?txt_fullname=<?php echo urlencode($fullname)?>&txt_email=<?php echo urldecode($email)?>&txt_username=<?php echo urldecode($username) ?>&txt_password=<?php echo urldecode($password) ?> " style="color: blue;">Sang trang kế tiếp</a>
    </div>
    <?php endif; ?>
</body>

</html>