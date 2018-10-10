<?php

    include 'Mobil.php';
    include 'Kendaraan.php';

    /**
     * class ini mengimplementasikan interface kendaraan
     * dan abstract class mobil
     */

    class MobilKendaraan extends Mobil implements Kendaraan
    {
        public function brand($brand)
        {
            return "Brand mobil adalah ".$brand;
        }
    
        public function warna($warna)
        {
            return "Warna mobil adalah ".$warna;
        }
    
        public function buka_pintu()
        {
            return "Buka Pintu mobil";
        }
    
        public function buka_bagasi()
        {
            return "Buka bagasi mobil";
        }
    }
?>