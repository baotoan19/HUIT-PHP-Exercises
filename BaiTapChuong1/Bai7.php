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
            width: 180%; 
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
    $stringS1 = isset($_POST["txt_s1"]) ? $_POST["txt_s1"] : "";
    $stringS2 = isset($_POST["txt_s2"]) ? $_POST["txt_s2"] : "";
    $outputString="";
    if (!empty($stringS1) && !empty($stringS2))
    {
        $resul = strnatcasecmp($stringS1,$stringS2);
        if($resul == 0){
            $outputString = "Chuỗi 1 và Chuỗi 2 bằng nhau !";
        }
        else if ($resul < 0){
            $outputString = "Chuỗi 1 nhỏ hơn Chuỗi 2";
        }
        else{
            $outputString = "Chuỗi 1 lớn hơn Chuỗi 2";
        }
    }
?>
<body>
    <form name="f1" method="post" action="Bai7.php">
        <table>
            <tr>
                <th colspan="2">SO SÁNH CHUỖI</th>
            </tr>
            <tr>
                <td>Chuỗi 1</td>
                <td><input class="textbox" type="text" name="txt_s1" value="<?php echo $stringS1 ?>"> </td>
            </tr>
            <tr>
                <td>Chuỗi 2</td>
                <td> <input class="textbox" type="text" name="txt_s2" value="<?php echo $stringS2 ?>"> </td>
            </tr>
            <tr >
                <td class="btn" colspan="2"> <input type="submit" name="submit" value="So Sánh"></td>
            </tr>
            <tr>
                <td>Kết quả</td>
                <td> <input style="color: red;" class="textbox" type="text" value="<?php echo $outputString  ?>" readonly> </td>
            </tr>
        </table>
    </form>
</body>

</html>