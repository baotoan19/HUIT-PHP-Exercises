<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Result</title>
</head>
<body>
    <form align="center" method="post" style="font-size: 25px;">
        <h2>PHÉP TÍNH TRÊN HAI SỐ</h2>
        <label>Chọn phép tính: </label>
        <span><?php echo isset($_SESSION['operation']) ? $_SESSION['operation'] : ''; ?></span>
      <br> <br>  
        <label >
            <span>Chọn số thứ nhất: </span>
            <input style="width:300px;height:30px;font-size:20px;" type="text" name="number1" readonly value="<?php echo isset($_SESSION['number1']) ? $_SESSION['number1'] : ''; ?>">
        </label> <br> <br>
        <label >
            <span>Chọn số thứ nhì: </span>
            <input style="width:300px;height:30px;font-size:20px;" type="text" name="number2" readonly value="<?php echo isset($_SESSION['number2']) ? $_SESSION['number2'] : ''; ?>">
        </label> <br> <br>
        <label>
            <span>Kết quả: </span>
            <input style="width:300px;height:30px;font-size:20px;" type="text" name="result" readonly value="<?php echo isset($_SESSION['result']) ? $_SESSION['result'] : ''; ?>">
        </label> <br> <br>
        <a href="Bai22.php">Quay Lại Trang Trước</a>
    </form>
</body>
</html>
