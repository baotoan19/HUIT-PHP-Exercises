<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Diện Tích Hình Chữ Nhật</title>
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
            width: 100px;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>

<?php
    $length =0;
    $width =0;
    $acreage=0;
    if  ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["txt_length"]) && isset($_POST["txt_width"]))
    {
        $length =$_POST["txt_length"];
        $width =$_POST["txt_width"];
        $acreage = $length * $width;
    }    
?>
<body>
    <form name="f1" method="post" action="Bai3.php">
        <table>
            <tr>
                <th colspan="2">TÍNH DIỆN TÍCH HÌNH CHỮ NHẬT</th>
            </tr>
            <tr>
                <td>Length</td>
                <td><input class="textbox" type="text" name="txt_length" value="<?php echo $length ?>"> </td>
            </tr>
            <tr>
                <td>Width</td>
                <td> <input class="textbox" type="text" name="txt_width" value="<?php echo $width ?>"> </td>
            </tr>
            <tr>
                <td>Acreage</td>
                <td> <input class="textbox" type="text" name="txt_acreage" value="<?php echo $acreage ?>" readonly> </td>
            </tr>
            <tr >
                <td class="btn" colspan="2"> <input type="submit" name="submit" value="TÍNH"></td>
            </tr>
        </table>
    </form>
</body>

</html>