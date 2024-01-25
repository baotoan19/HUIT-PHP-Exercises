<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giải Phương Trình Bậc Nhất</title>
    <style>
        form {
            width: 30%;
            margin: 25px auto;
            text-align: center;
            border: 1px solid #ddd;
            background-color: bisque;
        }

        h2 {
            margin-top: 0;
            background-color: #f26522;
            color: black;
            padding: 10px;
            margin-bottom: 20px;
        }

        #result {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <?php
    include "IncludeBai12.php";
    $a = isset($_POST["txt_a"]) ? $_POST["txt_a"] : '';
    $b = isset($_POST["txt_b"]) ? $_POST["txt_b"] : '';
    $result = giaiPTBacNhat($a, $b);
    ?>

    <form method="post" action="Bai12.php">
        <h2>GIẢI PHƯƠNG TRÌNH BẬC NHẤT</h2>
        <label for="">Phương Trình</label>
        <input type="text" style="width: 11%" name="txt_a" value=" <?php echo $a ?>"/> x 
            +
        <input type="text" style="width: 11%" name="txt_b" value=" <?php echo $b ?>"/> = 0 <br> <br>
        <label for="">Nghiệm</label> 
        <input type="text" style="width: 40%"  name="" value="<?php echo $result ?>" id="result"/> <br> <br>
        <input type="submit" name="submit" value="GIẢI PHƯƠNG TRÌNH"> <br> <br>
    </form>
</body>

</html>
