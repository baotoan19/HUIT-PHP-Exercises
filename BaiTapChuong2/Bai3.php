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
    include "PhanSo.php";
    $TuSo1 = isset($_POST["txt_ts1"]) ? $_POST["txt_ts1"] : "";
    $MauSo1 = isset($_POST["txt_ms1"]) ? $_POST["txt_ms1"] : "";
    $TuSo2 = isset($_POST["txt_ts2"]) ? $_POST["txt_ts2"] : "";
    $MauSo2 = isset($_POST["txt_ms2"]) ? $_POST["txt_ms2"] : "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $phanSo1 = new PhanSo($TuSo1, $MauSo1);
        $phanSo2 = new PhanSo($TuSo2, $MauSo2);

        if (isset($_POST["tinhTong"])) {
            $result = $phanSo1->tinhtong($phanSo2);
        } elseif (isset($_POST["tinhHieu"])) {
            $result = $phanSo1->tinhHieu($phanSo2);
        } elseif (isset($_POST["tinhTich"])) {
            $result = $phanSo1->tinhNhan($phanSo2);
        } elseif (isset($_POST["tinhThuong"])) {
            $result = $phanSo1->tinhThuong($phanSo2);
        }
    }

?>

<body>
    <form action="Bai3.php" method="post">
        <table border="1px">
            <h1>TÍNH TOÁN</h1>  
            <tr>
                <td>Input Tử PSố1</td>
                <td colspan="4"> <input type="text" name="txt_ts1" id="" value="<?php echo $TuSo1 ?>"> </td>
            </tr>

            <tr>
                <td>Input Mẫu PSố1</td>
                <td colspan="4"> <input type="text" name="txt_ms1" value="<?php echo $MauSo1 ?>"> </td>
            </tr>

            <tr>
                <td>Input Tử PSố2</td>
                <td colspan="4"> <input type="text" name="txt_ts2" id="" value="<?php echo $TuSo2 ?>"> </td>
            </tr>

            <tr>
                <td>Input Mẫu PSố2</td>
                <td colspan="4"> <input type="text" name="txt_ms2" value="<?php echo $MauSo2 ?>"> </td>
            </tr>

            <tr>
                <td>Kết quả</td>
                <td colspan="4"> <input type="text" value="<?php echo isset($result) ? $result->tuSo . '/' . $result->mauSo : ''; ?>"> </td>
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