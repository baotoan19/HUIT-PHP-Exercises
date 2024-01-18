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
    }

    form {
        margin-top: 50px;
    }

    table {
        border-collapse: collapse;
        width: 50%;
        margin: 0 auto;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        color: #333;
    }

    td {
        padding: 10px;
        text-align: left;
    }

    input {
        width: 70%;
        padding: 8px;
        box-sizing: border-box;
        font-size: 15px;
    }

    button {
        background-color: #4caf50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        font-size: 16px;
        border-radius: 5px;
    }

    button:hover {
        background-color: #45a049;
    }
    </style>

</head>

<?php

class HinhChuNhat
{
    public $chieuDai ;
    public $chieuRong ;

    public function __construct($chieudai, $chieurong)
    {
        $this->chieuDai = $chieudai;
        $this->chieuRong = $chieurong;
    }

    public function tinhChuViHCN()
    {
        return ($this->chieuDai + $this->chieuRong) * 2;
    }

    public function dienTichHCN()
    {
        return $this->chieuDai * $this->chieuRong;
    }
}

$chieuDai = isset($_POST['txt_cd']) ? $_POST['txt_cd'] : "";
$chieuRong = isset($_POST['txt_cr']) ? $_POST['txt_cr'] : "";
$chuVi = "";
$dienTich = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $HCN = new HinhChuNhat($chieuDai, $chieuRong);

    $chuVi = $HCN->tinhChuViHCN();
    $dienTich = $HCN->dienTichHCN();
}

?>

<body>
    <form action="Bai1.php" method="post" align="center">
        <table border="1px" align="center">
            <h2>HÌNH CHỮ NHẬT</h2>
            <tr>
                <td>Chiều dài: </td>
                <td colspan="3"> <input type="number" name="txt_cd" value="<?php echo  $chieuDai ?>"> </td>
            </tr>
            <tr>
                <td>Chiều rộng: </td>
                <td colspan="3"> <input type="number" name="txt_cr" value="<?php echo  $chieuRong ?>"> </td>
            </tr>
            <tr>
                <td>Chu vi: </td>
                <td colspan="3"> <input type="text" value="<?php echo $chuVi ?>" readonly> </td>
            </tr>
            <tr>
                <td>Diện tích: </td>
                <td colspan="3"> <input type="text" value="<?php echo $dienTich ?>" readonly> </td>
            </tr>
            <tr>
                <td colspan="3">
                    <button type="submit" name="submit">
                        Tính
                    </button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>