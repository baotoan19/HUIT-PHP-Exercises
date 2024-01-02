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
            width: 250%; 
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

<?php
    $inputString = isset($_POST["txt_input"]) ? $_POST["txt_input"] :"";
    $originalString = isset($_POST["txt_original"]) ? $_POST["txt_original"] : "";
    $replacementString = isset($_POST["txt_replacement"]) ? $_POST["txt_replacement"] : "";
    $ouputString="";
    if(!empty($inputString) && !empty($originalString) && !empty($replacementString))
    {
        $ouputString = str_replace($originalString,$replacementString,$inputString);
    }
    else
    {
        echo "Vui lòng nhập đầy đủ !!!";
    }
?>
<body>
    <form name="f1" method="post" action="Bai6.php">
        <table>
            <tr>
                <th colspan="2">THAY THẾ CHUỖI</th>
            </tr>
            <tr>
                <td>Nhập Chuỗi</td>
                <td><input class="textbox" type="text" name="txt_input" value="<?php echo $inputString  ?>"> </td>
            </tr>
            <tr>
                <td>Nhập chuỗi gốc</td>
                <td> <input class="textbox" type="text" name="txt_original" value="<?php echo $originalString ?>"> </td>
            </tr>
            <tr>
                <td>Nhập chuỗi thay thế</td>
                <td> <input class="textbox" type="text" name="txt_replacement" value="<?php echo $replacementString ?>"> </td>
            </tr>
            <tr >
                <td class="btn" colspan="2"> <input type="submit" name="submit" value="Thay Thế"></td>
            </tr>
            <tr>
                <td>Kết quả</td>
                <td> <input style="color: red;" class="textbox" type="text" value="<?php echo $ouputString ?>" readonly> </td>
            </tr>
        </table>
    </form>
</body>

</html>