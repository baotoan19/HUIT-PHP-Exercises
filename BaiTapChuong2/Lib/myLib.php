<?php
    function readF($fname){
        $f = fopen($fname,'r');
        while(!feof($f)){
            $text = fgets($f);
            echo $text.'<br>';
        }
    }

    function readF_Arr($fname){
        $arr = array();
        $f = fopen($fname,'r');
        while (!feof($f)){
            $text = fgets($f);
            array_push($arr,$text);
            echo "<script> console.log(".$text.")</script>";
        }
        return $arr;
    }
?>