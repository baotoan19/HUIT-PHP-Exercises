<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read File</title>
</head>
<body>
    <?php
        $filename = fopen("Tintuc.txt","r");
        while(! feof($filename)){
            echo fgets($filename). "<br>";
        }
        fclose($filename); 
    ?>
</body>
</html>