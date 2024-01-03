<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $rFile = fopen('Data.txt','w');
        fwrite($rFile,'KHANH UYEN'."\n");
        fwrite($rFile,'QUYNH ANH');
        fclose($rFile);
        echo "File được khi thành công ";
    ?>
</body>
</html>