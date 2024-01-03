<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Bai16.php" method="post" enctype="multipart/form-data">
        Select File : 
        <input type="file" name="file_upload" size="20"> <br> <br>
        <input type="submit" value="Upload" name="ok" id="">
    </form>
</body>
<?php
        if(isset($_POST['ok'])){
            if($_FILES['file_upload']['name'] != null){
                if($_FILES['file_upload']['type'] == "image/jpeg"
                || $_FILES['file_upload']['type'] == "image/png"   
                || $_FILES['file_upload']['type'] == "image/gif") {
                    if($_FILES['file_upload']['size'] > 1048576){
                        echo"File không được lớn hơn 1mb";
                    }else{
                        $path="ImagesC1/";
                        $tmp_name=$_FILES['file_upload']['tmp_name'];
                        $name=$_FILES['file_upload']['name'];
                        $type=$_FILES['file_upload']['type'];
                        $size=$_FILES['file_upload']['size'];

                        move_uploaded_file($tmp_name,$path.$name);
                        echo "File uploaded! <br>";
                        echo "Tên File : ".$name." <br>";
                        echo "Kiểu File : ".$type." <br>";
                        echo "File Size : ".$size;
                    }
                }else{
                    echo "Kiểu file không hợp lệ !!!";
                }                                                                               
            }else{
                echo "Vui lòng chọn file !!!";
            }
        }
    ?>
</html>