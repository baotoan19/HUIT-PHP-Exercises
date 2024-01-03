<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SetCookie</title>
</head>
<body>
    <?php
        setcookie('userName','Admin',time() + 600 , '/');
        setcookie('pass','123456',time()+600,'/');
    ?>
    <p>Bấm để xem cookie 'username' và 'pass' .<a href="GetBai20.php">Xem Cookie</a> </p>
</body>
</html>