<?php
include("/xampp/htdocs/HUIT-PHP-Exercises/BaiTapChuong2/Lib/myLib.php");
$arr = readF_Arr('Tin_tuc.txt');
$i = 0;
$ttArr = array();
while ($i < count($arr)) {
   $item = explode("|",$arr[$i++]);
   $tt = new TinTuc(str_replace("/*","",$item[0]),$item[1],$item[2],$item[3]);
   array_push($ttArr,$tt);
}
?>