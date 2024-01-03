<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $name=$_POST["txt_name"];
        $phone=$_POST["txt_phone"];
        $content=$_POST["txt_content"];
        if(!empty($name) && !empty($phone) && !empty($content)){
            $file = fopen("Data2.txt","w");
            fwrite($file,"$name\n");
            fwrite($file,"$phone\n");
            fwrite($file,"$content\n");
            fclose($file);
            echo"<p style='color:red;'>Dữ liệu đã được ghi vào tệp tin thành công.</p>";
        }
    }
    else{
        echo"<p style='color: red;'>Vui lòng nhập đầy đủ thông tin!</p>";
    }
?>
<body>
    <form action="" align="center" method="post" action="Bai14b.php">
        <h1 style="color:blue;">THU NHẬP THÔNG TIN NGƯỜI DÙNG</h1>
        <input name="txt_name" value="" type="text" style="width:50%; height: 40px; font-size:25px;" placeholder="Your name or Email"> <br> <br> <br>
        <input name="txt_phone" value="" type="text" style="width:50%; height: 40px; font-size:25px;" placeholder="Phone number"> <br> <br> <br>
        <textarea style="width:50%; font-size:25px;" name="txt_content" id="" cols="30" rows="10" placeholder="Content"></textarea> <br> <br> <br>
        <input  style="width:10%;height:40px;font-size:25px;background-color:aquamarine;" type="submit" name="submit" value="Write To File">  <br><br><br>
    </form>
</body>
</html>