<?php
function giaiPTBacNhat($a, $b) {
    $result = "";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if (empty($a) || !is_numeric($a)) {
            $result = "Hệ số a không hợp lệ";
        } else if (empty($b) || !is_numeric($b)) {
            $result = "Hệ số b không hợp lệ";
        } else {
            if ($a == 0 && $b == 0) {
                $result = "Phương trình vô số nghiệm";
            } else if ($a == 0 && $b != 0) {
                $result = "Phương trình vô nghiệm";
            } else {
                $result = "X = " . ((-$b) / $a) . "";
            }
        }
    }
    return $result;
}
?>
