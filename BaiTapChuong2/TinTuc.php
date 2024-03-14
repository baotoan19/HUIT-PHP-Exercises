
<?php
 class TinTuc{
    public $stt,$tieuDe,$noiDung,$anh;
    public function __construct($stt,$tieude,$noidung,$anh)
    {
        $this->stt = $stt;
        $this->tieuDe = $tieude;
        $this->noiDung = $noidung;
        $this->anh = $anh;
    }
}
?>