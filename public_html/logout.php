<!-- https://ra-biitch.blogspot.com/ - Kunjungi Blog Kami Untuk Mendapatkan Update Script Lainnya -->
<?php
    session_start();

    $helper = array_keys($_SESSION);
    foreach ($helper as $key){
        unset($_SESSION[$key]);
    }
header('location:index.php');
?>