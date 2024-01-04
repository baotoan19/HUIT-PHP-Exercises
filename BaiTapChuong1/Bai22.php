
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHÉP TÍNH TRÊN HAI SỐ</title>
</head>

<body>
    <form align="center" method="post" style="font-size: 25px;">
        <h2>PHÉP TÍNH TRÊN HAI SỐ</h2>
        <label>Chọn phép tính: </label>
        <label>
            <input type="radio" name="operation" value="addition">
            Cộng
        </label>
        <label>
            <input type="radio" name="operation" value="subtraction">
            Trừ
        </label>
        <label>
            <input type="radio" name="operation" value="multiplication">
            Nhân
        </label>
        <label>
            <input type="radio" name="operation" value="division">
            Chia
        </label> <br> <br>  
        <label >
            <span>Chọn số thứ nhất: </span>
            <input style="width:300px;height:30px;font-size:20px;" type="text" name="number1" value="<?php echo isset($number1) ? $number1 : ''; ?>">
        </label> <br> <br>
        <label >
            <span>Chọn số thứ nhì: </span>
            <input style="width:300px;height:30px;font-size:20px;" type="text" name="number2" value="<?php echo isset($number2) ? $number2 : ''; ?>">
        </label> <br> <br>
        <input style="width:100px;height:50px;font-size:20px;" type="submit" name="result" value="Tính">
    </form>
    <?php
        session_start();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number1 = isset($_POST['number1']) ? $_POST['number1'] : 0;
            $number2 = isset($_POST['number2']) ? $_POST['number2'] : 0;
            $operation = isset($_POST['operation']) ? $_POST['operation'] : 0;
            
            // Validate and sanitize inputs (you may want to enhance this)
            $number1 = filter_var($number1, FILTER_SANITIZE_NUMBER_FLOAT);
            $number2 = filter_var($number2, FILTER_SANITIZE_NUMBER_FLOAT);

            switch ($operation) {
                case 'addition':
                    $result = $number1 + $number2;
                    break;
                case 'subtraction':
                    $result = $number1 - $number2;
                    break;
                case 'multiplication':
                    $result = $number1 * $number2;
                    break;
                case 'division':
                    $result = ($number2 != 0) ? $number1 / $number2 : 'Error Divison 0 !!!';
                    break;
            }

            $_SESSION['number1'] = $number1;
            $_SESSION['number2'] = $number2;
            $_SESSION['operation'] = $operation;
            $_SESSION['result'] = $result;

            header('Location: GetBai22.php');
            exit();
        }
    ?>
</body>
</html>
