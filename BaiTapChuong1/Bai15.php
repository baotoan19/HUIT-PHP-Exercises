<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $filedata2=fopen("Data2.txt","r");
        $data2Content=fread($filedata2,filesize("Data2.txt"));
        fclose($filedata2);

        $filedata3 = fopen("Data3.txt","w");
        fwrite($filedata3,$data2Content);
        fclose($filedata3);

        $filedata3=fopen("Data3.txt","r");
        while(!feof($filedata3)){
            echo fgets($filedata3). "<br>";
        }
        fclose($filedata3);
    ?>

</body>
</html>