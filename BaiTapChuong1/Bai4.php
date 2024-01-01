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
    $userName = isset($_POST["txt_user"]) ? $_POST["txt_user"] : "";
    $passWord = isset($_POST["txt_pass"]) ? $_POST["txt_pass"] : "";
    if (empty($userName) && empty($passWord))
    {
        echo " Please Enter Your User Name/PassWord !";
    }
    else if (empty($userName) || empty($passWord))
    {
        echo "Please Enter Your Full Username And Password!";
    }
    else if ($userName !== "baotoan" || $passWord !== "123")
    {
        echo "Try Again!";
    }
    else{
        echo "Login Successful !";
    }
?>
<body>
    <form name="f1" method="post" action="Bai4.php">
        <table>
            <tr>
                <th colspan="2">ĐĂNG NHẬP</th>
            </tr>
            <tr>
                <td>UserName</td>
                <td><input class="textbox" type="text" name="txt_user" value="<?php echo $userName ?>"> </td>
            </tr>
            <tr>
                <td>PassWord</td>
                <td> <input class="textbox" type="text" name="txt_pass" value="<?php echo $passWord ?>"> </td>
            </tr>
            <tr >
                <td class="btn" colspan="2"> <input type="submit" name="submit" value="LOGIN"></td>
            </tr>
        </table>
    </form>
</body>

</html>