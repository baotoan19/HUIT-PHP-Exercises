<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start(); 

        $fullname = isset($_GET['txt_fullname']) ? urldecode($_GET['txt_fullname']) : '';
        $email = isset($_GET['txt_email']) ? urldecode($_GET['txt_email']) : '';
        $username = isset($_GET['txt_username']) ? urldecode($_GET['txt_username']) : '';
        $password = isset($_GET['txt_password']) ? urldecode($_GET['txt_password']) : '';

        $_SESSION['txt_fullname'] = $fullname;
        $_SESSION['txt_email'] = $email;
        $_SESSION['txt_username'] = $username;
        $_SESSION['txt_password'] = $password;
    ?>
     <div style="background-color:darkorange; color:white; width:600px; height:270px; margin: 0 auto;padding-top:10px;font-size:20px;" align="center" >
        <p>Xin chào <?php echo $fullname ?></p>
        <p>Email <?php echo $email ?></p>
        <p>Tên Đăng Nhập <?php echo $username ?></p>
        <p>Mật Khẩu <strong style="font-weight:bold;font-style:italic;"><?php echo $password ?></strong> </p>
        <a href="Bai21.php" style="color: blue;">Quay về trang đăng nhập</a>
    </div>
    
    <?php 
    session_unset();
    session_destroy();
    ?>
</body>
</html>