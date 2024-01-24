<?php
class PhanSo
{
    public $tuSo;
    public $mauSo;

    public function __construct($tu_so, $mau_so)
    {
        $this->tuSo = $tu_so;
        $this->mauSo = $mau_so;
    }

    public function timUCLN($a, $b)
    {
        while ($b != 0) {
            $temp = $a % $b;
            $a = $b;
            $b = $temp;
        }
        return abs($a);
    }

    public function rutGonPS()
    {
        $ucln = $this->timUCLN($this->tuSo, $this->mauSo);
        $this->tuSo /= $ucln;
        $this->mauSo /= $ucln;
        return $this;
    }

    public function tinhtong(PhanSo $ps)
    {
        $tuSo_new = $this->tuSo * $ps->mauSo + $ps->tuSo * $this->mauSo;
        $mauSo_new = $this->mauSo * $ps->mauSo;
        $phanSo_new = new PhanSo($tuSo_new, $mauSo_new);
        return $phanSo_new->rutGonPS();
    }

    public function tinhHieu(PhanSo $ps)
    {
        $tuSo_new = $this->tuSo * $ps->mauSo - $ps->tuSo * $this->mauSo;
        $mauSo_new = $this->mauSo * $ps->mauSo;
        $phanSo_new = new PhanSo($tuSo_new, $mauSo_new);
        return $phanSo_new->rutGonPS();
    }

    public function tinhNhan(PhanSo $ps)
    {
        $tuSo_new = $this->tuSo * $ps->tuSo;
        $mauSo_new = $this->mauSo * $ps->mauSo;
        $phanSo_new = new PhanSo($tuSo_new, $mauSo_new);
        return $phanSo_new->rutGonPS();
    }

    public function tinhThuong(PhanSo $ps)
    {
        if ($ps->tuSo != 0) {
            $tuSo_new = $this->tuSo * $ps->mauSo;
            $mauSo_new = $this->mauSo * $ps->tuSo;
            $phanSo_new = new PhanSo($tuSo_new, $mauSo_new);
            return $phanSo_new->rutGonPS();
        } else {
            return "Error /0 ";
        }
    }
}
