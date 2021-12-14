<?php

include "ip.php";
include "logincred.php";
$cont= 'http://'.$ip.'/token.php';
$p= @file_get_contents($cont); 

if(@$_REQUEST["key"]!="")
{
	$opts = [
    "http" => [
        "method" => "GET",
        "header" => "User-Agent: JioTV\r\n" .
		"lbcookie: 300\r\n" .
"devicetype: phone\r\n" .
"os: Android\r\n" .
"appkey: NzNiMDhlYzQyNjJm\r\n" .
"deviceId: 2f5f4c6443fe0800\r\n" .
"versionCode: 226\r\n" .
"osVersion: 9\r\n" .
"isott: true\r\n" .
"languageId: 6\r\n" .
"uniqueId: $uniqueid\r\n" . 
"srno: 200206173037\r\n" .
"usergroup: tvYR7NSNn7rymo3F\r\n" .
"channelid: 472\r\n" .
"ssotoken: $ssoToken\r\n" 
	    
    ]
];


$cache=str_replace("/","_",$_REQUEST["key"]);

if(!file_exists($cache)){

$context = stream_context_create($opts);
$haystack = file_get_contents("https://tv.media.jio.com/streams_live/"  . $_REQUEST["key"] . $p,false,$context);

}
else
{
$haystack=file_get_contents($cache);

}
echo $haystack;
}


if(@$_REQUEST["ts"]!="")
{
header("Content-Type: video/mp2t");
header("Connection: keep-alive");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Expose-Headers: Content-Length,Content-Range");
header("Access-Control-Allow-Headers: Range");
header("Accept-Ranges: bytes");
	$opts = [
    "http" => [
        "method" => "GET",
        "header" => "User-Agent: plaYtv/5.3.2 (Linux;Android 5.1.1) ExoPlayerLib/2.3.0/2.3.0\r\n" 


    ]
];

$context = stream_context_create($opts);
$haystack = file_get_contents("http://mumsite.cdnsrv.jio.com/jiotv.live.cdn.jio.com/"  . $_REQUEST["ts"],false,$context);
echo $haystack;

}

?>
