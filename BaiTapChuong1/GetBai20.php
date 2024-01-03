<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Cookie</title>
</head>
<body>
    <?php
    if (isset($_COOKIE['userName'])) {
        $userName = $_COOKIE['userName'];
    } else {
        $userName = "Không tồn tại";
    }

    if (isset($_COOKIE['pass'])) {
        $pass = $_COOKIE['pass'];
    } else {
        $pass = "Không tồn tại";
    }
    echo "<p>Gía trị username là: $userName</p>";
    echo "<pre>";
    print_r($_COOKIE);
    echo "</pre>";
    ?>
</body>
</html>
