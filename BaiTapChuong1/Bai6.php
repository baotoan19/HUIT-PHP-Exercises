<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Đăng Nhập</title>
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
            padding: 10px 40px;
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
            width: 340%; 
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
        #textbox_output{
            height: 30px;
            width: 150%;
            background-color: aqua;
            font-size: 20px;
        }
    </style>
</head>

<?php
    $inputString = isset($_POST["txt_input"]) ? $_POST["txt_input"] : "";
    $searchString = isset($_POST["txt_search"]) ? $_POST["txt_search"] : "";
    $posstion = 0;
    if(!empty($inputString) && !empty($searchString))
    {
        $posstion = strpos($inputString,$searchString);
        if($posstion !== false)
        {
            $outputText="Tìm thấy từ '" .$searchString. "' tại vị trí " .$posstion;
        }
        else
        {
            $outputText="Không tìm thấy từ '" .$searchString. "' trong chuỗi";
        }
    }
?>
<body>
    <form name="f1" method="post" action="Bai5.php">
        <table>
            <tr>
                <th colspan="2">TÌM TỪ TRONG CHUỖI</th>
            </tr>
            <tr>
                <td>Nhập Chuỗi</td>
                <td><input class="textbox" type="text" name="txt_input" value="<?php echo $inputString  ?>"> </td>
            </tr>
            <tr>
                <td>Nhập từ</td>
                <td> <input class="textbox" type="text" name="txt_search" value="<?php echo $searchString ?>"> </td>
            </tr>
            <tr >
                <td class="btn" colspan="2"> <input type="submit" name="submit" value="Tìm Kiếm"></td>
            </tr>
            <tr>
                <td> <input id="textbox_output" type="text" name="" value="<?php echo $outputText ?>" readonly> </td>
            </tr>
        </table>
    </form>
</body>

</html>