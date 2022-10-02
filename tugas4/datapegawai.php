<?php 
    require 'codetugas4.php';

    $p1 = new Pegawai('19550838','Daffa','Manager','Islam','Menikah');
    $p2 = new Pegawai('18283899','Adil','Asmen','Hindu','Belum Menikah');
    $p3 = new Pegawai('11581718','Manaf','Staff','Kristen','Menikah');
    
    $p1->mencetak();
    $p2->mencetak();
    $p3->mencetak();


?>