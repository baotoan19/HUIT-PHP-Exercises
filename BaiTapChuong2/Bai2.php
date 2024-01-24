<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-top: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            display: block;
            /* Make the buttons block-level elements */
            margin-bottom: 10px;
            /* Add some spacing between buttons */
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<?php
    include "TinhToan.php";
    $soA = isset($_POST["txt_a"]) ? $_POST["txt_a"] : "";
    $soB = isset($_POST["txt_b"]) ? $_POST["txt_b"] : "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $tinhToan = new TinhToan($soA,$soB);

        $tinhTong = $tinhToan->tinhTong();
        $tinhHieu = $tinhToan->tinhHieu();
        $tinhTich = $tinhToan->tinhTich();
        $tinhThuong = $tinhToan->tinhThuong();

        if (isset($_POST["tinhTong"])) {
            $result = $tinhTong;
        } elseif (isset($_POST["tinhHieu"])) {
            $result = $tinhHieu;
        } elseif (isset($_POST["tinhTich"])) {
            $result = $tinhTich;
        } elseif (isset($_POST["tinhThuong"])) {
            $result = $tinhThuong;
        }

    }

?>

<body>
    <form action="Bai2.php" method="post">
        <table border="1px">
            <h1>TINH TOÁN</h1>
            <tr>
                <td>a</td>
                <td colspan="4"> <input type="text" name="txt_a" id="" value="<?php echo $soA ?>"> </td>
            </tr>

            <tr>
                <td>b</td>
                <td colspan="4"> <input type="text" name="txt_b" value="<?php echo $soB ?>"> </td>
            </tr>

            <tr>
                <td>Kết quả</td>
                <td colspan="4"> <input type="text" value="<?php echo isset($result) ? $result : ''; ?>"> </td>
            </tr>

            <tr>
                <td>
                    <button type="submit" name="tinhTong">
                        CỘNG
                    </button>
                </td>

                <td>
                    <button type="submit" name="tinhHieu">
                        TRỪ
                    </button>
                </td>

                <td>
                    <button type="submit" name="tinhTich">
                        NHÂN
                    </button>
                </td>

                <td>
                    <button type="submit" name="tinhThuong">
                        CHIA
                    </button>
                </td>
            </tr>
        </table>
    </form>
</body>


</html>