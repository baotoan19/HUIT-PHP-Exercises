<?php
    $tenchuho = isset($_POST["tenchuho"]) ? $_POST["tenchuho"] : '';
    $chisocu = isset($_POST["chisocu"]) ? intval($_POST["chisocu"]) : 0;
    $chisomoi = isset($_POST["chisomoi"]) ? intval($_POST["chisomoi"]) : 0;
    $dongia = isset($_POST["dongia"]) ? floatval($_POST["dongia"]) : 2000;
    $thanhtien='';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($tenchuho) && !empty($chisocu) && !empty($chisomoi)) {
            $thanhtien = ($chisomoi - $chisocu) * $dongia;
        } else {
            echo "VUI LÒNG NHẬP ĐẦY ĐỦ THÔNG TIN";
        }
    }
?>
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
            background-color: yellow;
        }

        th, td {
            padding: 10px 30px;
            text-align: left; 
            font-size: 20px;
        }

        th {
            background-color: orange;
            font-size: 25px;
            height: 50px;
            text-align: center;
        }

        .textbox {
            height: 30px;
            width: 80%; 
            box-sizing: border-box;
            font-size: 20px;
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
    <form method="post" action="Bai23.php">
        <table>
            <tr>
                <th colspan="2">THANH TOÁN TIỀN ĐIỆN</th>
            </tr>
            <tr>
                <td>Tên Chủ Hộ</td>
                <td><input class="textbox" type="text" name="tenchuho" value="<?php echo $tenchuho ?>"> </td>
            </tr>
            <tr>
                <td>Chỉ số cũ</td>
                <td> <input class="textbox" type="text" name="chisocu" value="<?php echo $chisocu ?>"> (Kw) </td>
            </tr>
            <tr>
                <td>Chỉ số mới</td>
                <td> <input class="textbox" type="text" name="chisomoi" value="<?php echo $chisomoi ?>"> (Kw)  </td>
            </tr>
            <tr>
                <td>Đơn giá</td>
                <td> <input class="textbox" type="text" name="dongia" value="<?php echo $dongia ?>"> (VNĐ) </td>
            </tr>
            <tr>
                <td>Số tiền thanh toán</td>
                <td> <input class="textbox" style="background-color: aqua;" type="text" name="sotientt" readonly  value="<?php echo $thanhtien ?>"> (VNĐ) </td>
            </tr>
            <tr >
                <td class="btn" colspan="2"> <input type="submit" name="submit" value="Tính"></td>
            </tr>
        </table>
    </form>
</body>
</html>
