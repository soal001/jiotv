<?php
error_reporting(E_ERROR | E_PARSE);
$content = file_get_contents('http://api.jio.com/v2/users/me');
$lines = explode('"', $content);
if(!isset($lines[1]))
{
    header('Location: index.php?msg=Auto Log In Failed!Try Manual login&code=0');
}
else
{
$ssotoken=$lines[7];
$uniqueid=$lines[31];

$logincred = fopen("logincred.php", "w") or die("Unable to open file!");
$creds='<?php
$ssoToken="'.$ssotoken.'";
$uniqueid="'.$uniqueid.'";
?>
';
fwrite($logincred, $creds);
fclose($logincred);

header('Location: index.php?msg=Auto Log In Successfull');
}
?>