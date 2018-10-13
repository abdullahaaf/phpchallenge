<?php
    /**
     * this class to echo
     */
    include 'MobilKendaraan.php';

    // create object class MobilKendaraan
    $mobilkendaraan = new MobilKendaraan();
    echo $mobilkendaraan->brand("Ferrari");
    echo "<br/>";
    echo $mobilkendaraan->warna("Merah");
    echo "<br/>";    
    echo $mobilkendaraan->buka_pintu();
    echo "<br/>";    
    echo $mobilkendaraan->buka_bagasi();
?>