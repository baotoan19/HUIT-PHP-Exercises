<?php
    class TinhToan{
        public $So_a;
        public $So_b;

        public function __construct($a,$b)
        {
            $this->So_a = $a;
            $this->So_b = $b;
        }
        
        public function tinhTong(){
            return $this->So_a + $this->So_b;
        }

        public function tinhHieu(){
            return $this->So_a - $this->So_b;
        }

        public function tinhTich(){
            return $this->So_a * $this->So_b;
        }

        public function tinhThuong() {
            if ($this->So_a != 0) {
                return $this->So_a / $this->So_b;
            } else {
                return "Error: Division by zero.";
            }
        }

    }

?>