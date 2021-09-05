<?php

$ssotoken=$_POST['ssotoken'];
$uniqueid=$_POST['uniqueid'];

$logincred = fopen("logincred.php", "w") or die("Unable to open file!");
$creds='<?php
$ssoToken="'.$ssotoken.'";
$uniqueid="'.$uniqueid.'";
?>
';
fwrite($logincred, $creds);
fclose($logincred);

header('Location: index.php?msg=Log In Successfull');
?>