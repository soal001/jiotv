<?php

$ip="ip.php";
$cred="logincred.php";
$pl="playlist.m3u";
!unlink($ip);
!unlink($cred);
!unlink($pl);
header('Location: index.php?msg=Log Out Successfull');
?>