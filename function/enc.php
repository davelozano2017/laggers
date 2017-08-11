<?php
$ky = 'lkirwf897+22#bbtrm8814z5qq=498j5'; 
$iv = '741952hheeyy66#cs!9hjv887mxx7@8y';


function encryptRJ256($key,$iv,$string_to_encrypt)
{
	$rtn = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $string_to_encrypt, MCRYPT_MODE_CBC, $iv);
	$rtn = base64_encode($rtn);
	return($rtn);
}

function decryptRJ256($key,$iv,$string_to_decrypt)
{
	$string_to_decrypt = base64_decode($string_to_decrypt);
	$rtn = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, $string_to_decrypt, MCRYPT_MODE_CBC, $iv);
	$rtn = rtrim($rtn, "\4");
	return($rtn);
}
?>