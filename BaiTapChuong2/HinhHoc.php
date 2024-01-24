<?php
abstract class HinhHoc
{
    public $Kichthuoc;

    abstract public function tinhDienTich();

    abstract public function tinhChuVi();
}

class HinhChuNhat extends HinhHoc
{
    public function __construct($chieudai, $chieurong)
    {
        $this->Kichthuoc = ['chieuDai' => $chieudai, 'chieuRong' => $chieurong];
    }

    public function getChieuDai()
    {
        return $this->Kichthuoc['chieuDai'];
    }

    public function getChieuRong()
    {
        return $this->Kichthuoc['chieuRong'];
    }

    public function tinhDienTich()
    {
        return $this->Kichthuoc['chieuDai'] * $this->Kichthuoc['chieuRong'];
    }

    public function tinhChuVi()
    {
        return 2 * ($this->Kichthuoc['chieuDai'] + $this->Kichthuoc['chieuRong']);
    }
}

class HinhVuong extends HinhHoc
{
    public function __construct($canh)
    {
        $this->Kichthuoc = ['canh' => $canh];
    }

    public function getCanh()
    {
        return $this->Kichthuoc['canh'];
    }

    public function tinhChuVi()
    {
        return $this->Kichthuoc['canh'] * 4;
    }

    public function tinhDienTich()
    {
        return pow($this->Kichthuoc['canh'], 2);
    }
}

class HinhTron extends HinhHoc
{
    public function __construct($bankinh)
    {
        $this->Kichthuoc = ['bankinh' => $bankinh];
    }

    public function getBanKinh()
    {
        return $this->Kichthuoc['bankinh'];
    }

    public function tinhChuVi()
    {
        return M_PI * $this->Kichthuoc['bankinh'] * 2;
    }

    public function tinhDienTich()
    {
        return M_PI * pow($this->Kichthuoc['bankinh'], 2);
    }
}

class HinhThang extends HinhHoc
{
    public function __construct($dayLon, $dayNho, $chieuCao)
    {
        $this->Kichthuoc = ['dayLon' => $dayLon, 'dayNho' => $dayNho, 'chieuCao' => $chieuCao];
    }

    public function getDayLon()
    {
        return $this->Kichthuoc['dayLon'];
    }

    // Getter cho dayNho
    public function getDayNho()
    {
        return $this->Kichthuoc['dayNho'];
    }

    // Getter cho chieuCao
    public function getChieuCao()
    {
        return $this->Kichthuoc['chieuCao'];
    }

    public function tinhChuVi()
    {
        return $this->Kichthuoc['dayLon'] + $this->Kichthuoc['dayNho'] + 2 * $this->Kichthuoc['chieuCao'];
    }

    public function tinhDienTich()
    {
        return $this->Kichthuoc['dayLon'] + $this->Kichthuoc['dayNho'] + $this->Kichthuoc['chieuCao'] / 2;
    }
}
