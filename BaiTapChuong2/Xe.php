<?php

    interface TocDo{
        public function VanToc();
    }    

    abstract class Xe{
        public $Color;

        public function __construct($color)
        {
            $this->Color = $color;
        }

        public function getMau(){
            return $this->Color;
        }

        abstract public function SoBanh();
    }

     class XeDap extends Xe implements TocDo{
        public function SoBanh()
        {
            return 2;
        }
        public function VanToc()
        {
            return 20;
        }
    }

    class XeMay extends Xe implements TocDo{
        public function SoBanh()
        {
            return 2;
        }
        public function VanToc()
        {
            return 50;
        }
    }

    class XeHoi extends Xe implements TocDo{
        public function SoBanh(){
            return 4;
        }
        public function VanToc()
        {
            return 100;
        }
    }

    class XeXichLo extends Xe implements TocDo{
        public function SoBanh()
        {
            return 3;
        }
        public function VanToc()
        {
            return 30;
        }
    }

?>