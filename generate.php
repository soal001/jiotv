<?php
$playlist = fopen("playlist.m3u", "w") or die("Unable to open file!");
$ipadd=$_GET["ipadd"];

$modlist =
'#EXTM3U url-tvg="https://kodi.botallen.com/tv/epg.xml"

#EXTINF: -1 tvg-id="144" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_HD.png" group-title=" Entertainment", Colors HD
https://'.$ipadd.'/live.php?c=Colors_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="291" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_HD.png" group-title=" Entertainment", Sony HD
https://'.$ipadd.'/live.php?c=Sony_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="167" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_TV_HD.png" group-title=" Entertainment", Zee TV HD
https://'.$ipadd.'/live.php?c=Zee_TV_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="154" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_SAB.png" group-title=" Entertainment", Sony SAB
https://'.$ipadd.'/live.php?c=Sony_SAB&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="472" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/And_TV_HD.png" group-title=" Entertainment", And TV HD
https://'.$ipadd.'/live.php?c=And_TV_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="279" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Rishtey.png" group-title=" Entertainment", Rishtey
https://'.$ipadd.'/live.php?c=Rishtey&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="473" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Anmol.png" group-title=" Entertainment", Zee Anmol
https://'.$ipadd.'/live.php?c=Zee_Anmol&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="474" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Pal.png" group-title=" Entertainment", Sony Pal
https://'.$ipadd.'/live.php?c=Sony_Pal&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="471" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_SAB_HD.png" group-title=" Entertainment", Sony SAB HD
https://'.$ipadd.'/live.php?c=Sony_SAB_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="481" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Epic_HD.png" group-title=" Entertainment", Epic
https://'.$ipadd.'/live.php?c=Epic_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="527" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/ID.PNG" group-title=" Entertainment", Investigation Discovery
https://'.$ipadd.'/live.php?c=ID&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="528" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD_India.png" group-title=" Entertainment", DD India
https://'.$ipadd.'/live.php?c=DD_India&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="202" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD_National.png" group-title=" Entertainment", DD National
https://'.$ipadd.'/live.php?c=DD_National&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="532" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Dabangg.png" group-title=" Entertainment", Dabangg
https://'.$ipadd.'/live.php?c=Dabangg&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="536" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Madhya_Pradesh.png" group-title=" Entertainment", DD Madhya Pradesh
https://'.$ipadd.'/live.php?c=DD_Madhya_Pradesh&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="538" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Rajasthan_Jaipur.png" group-title=" Entertainment", DD Rajasthan (Jaipur)
https://'.$ipadd.'/live.php?c=DD_Rajasthan_Jaipur&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="533" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_Pariwar.png" group-title=" Entertainment", Raj Pariwar
https://'.$ipadd.'/live.php?c=Raj_Pariwar&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="539" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Bihar.png" group-title=" Entertainment", DD Bihar
https://'.$ipadd.'/live.php?c=DD_Bihar&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="540" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Uttar_Pradesh.png" group-title=" Entertainment", DD Uttar Pradesh
https://'.$ipadd.'/live.php?c=DD_Uttar_Pradesh&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="963" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Arre.png" group-title=" Entertainment", Arre HD
https://'.$ipadd.'/live.php?c=Arre&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="1076" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Andy_Haryana.png" group-title=" Entertainment", Andy Haryana
https://'.$ipadd.'/live.php?c=Andy_Haryana&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="534" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Dillagi_TV.png" group-title=" Entertainment", Dillagi TV
https://'.$ipadd.'/live.php?c=Dillagi_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="535" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Dhamaal_TV.png" group-title=" Entertainment", Dhamaal TV
https://'.$ipadd.'/live.php?c=Dhamaal_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1279" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Manoranjan_Grand.png" group-title=" Entertainment", Manoranjan Grand
https://'.$ipadd.'/live.php?c=Manoranjan_Grand&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1393" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Wah.png" group-title=" Entertainment", Sony Wah
https://'.$ipadd.'/live.php?c=Sony_Wah&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1396" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_SD.png" group-title=" Entertainment", Sony SD
https://'.$ipadd.'/live.php?c=Sony_SD&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="476" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Max_HD.png" group-title=" Movies", Sony Max HD
https://'.$ipadd.'/live.php?c=Sony_Max_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="289" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/SET_MAX.png" group-title=" Movies", Sony Max SD
https://'.$ipadd.'/live.php?c=Sony_Max_SD&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="165" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Cinema_HD.png" group-title=" Movies", Zee Cinema HD
https://'.$ipadd.'/live.php?c=Zee_Cinema_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="482" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Cineplex.png" group-title=" Movies", Colors Cineplex
https://'.$ipadd.'/live.php?c=Colors_Cineplex&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="483" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_MAX2.png" group-title=" Movies", Sony MAX2
https://'.$ipadd.'/live.php?c=Sony_MAX2&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="185" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/And_Pictures_HD.png" group-title=" Movies", And Pictures HD
https://'.$ipadd.'/live.php?c=And_Pictures_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="484" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Cinema.png" group-title=" Movies", Zee Cinema
https://'.$ipadd.'/live.php?c=Zee_Cinema&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="182" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/B4U_Movies.png" group-title=" Movies", B4U Movies
https://'.$ipadd.'/live.php?c=B4U_Movies&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="487" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Classic.png" group-title=" Movies", Zee Bollywood
https://'.$ipadd.'/live.php?c=Zee_Classic&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="485" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Enterr_10.png" group-title=" Movies", Enterr 10
https://'.$ipadd.'/live.php?c=Enterr_10&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="488" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Action.png" group-title=" Movies", Zee Action
https://'.$ipadd.'/live.php?c=Zee_Action&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="415" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Anmol_Cinema.png" group-title=" Movies", Zee Anmol Cinema
https://'.$ipadd.'/live.php?c=Zee_Anmol_Cinema&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="809" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Maha_Movies.png" group-title=" Movies", Maha Movies
https://'.$ipadd.'/live.php?c=Maha_Movies&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1258" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Surya_Cinema.png" group-title=" Movies", Surya Cinema
https://'.$ipadd.'/live.php?c=Surya_Cinema&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1266" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Bflix_Movies.png" group-title=" Movies", Bflix Movies
https://'.$ipadd.'/live.php?c=Bflix_Movies&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1268" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/ABZY_Dhakad.png" group-title=" Movies", ABZY Dhakad
https://'.$ipadd.'/live.php?c=ABZY_Dhakad&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1269" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/ABZY_Cool.png" group-title=" Movies", ABZY Cool
https://'.$ipadd.'/live.php?c=ABZY_Cool&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1270" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/ABZY_Movies.png" group-title=" Movies", ABZY Movies
https://'.$ipadd.'/live.php?c=ABZY_Movies&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1276" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Box_Cinema.png" group-title=" Movies", Box Cinema
https://'.$ipadd.'/live.php?c=Box_Cinema&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1280" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Manoranjan_TV.png" group-title=" Movies", Manoranjan TV
https://'.$ipadd.'/live.php?c=Manoranjan_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1295" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/B4U_Kadak.png" group-title=" Movies", B4U Kadak
https://'.$ipadd.'/live.php?c=B4U_Kadak&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1450" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Rishtey_Cineplex.png" group-title=" Movies", Rishtey Cineplex
https://'.$ipadd.'/live.php?c=Rishtey_Cineplex&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1477" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Color_Cineplex_HD.png" group-title=" Movies", Colors Cineplex HD
https://'.$ipadd.'/live.php?c=Colors_Cineplex_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="1145" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/MTV_HD_Plus.png" group-title=" Music", MTV HD Plus
https://'.$ipadd.'/live.php?c=MTV_HD_Plus&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="753" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/MTV_Beats_HD.png" group-title=" Music", MTV Beats HD
https://'.$ipadd.'/live.php?c=MTV_Beats_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="584" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Mastiii.png" group-title=" Music", Mastiii
https://'.$ipadd.'/live.php?c=Mastiii&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="585" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Zing.png" group-title=" Music", Zing
https://'.$ipadd.'/live.php?c=Zing&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="587" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/9XM.jpg" group-title=" Music", 9XM
https://'.$ipadd.'/live.php?c=9XM&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="591" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/E_24.png" group-title=" Music", E 24
https://'.$ipadd.'/live.php?c=E_24&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="183" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/B4U_Music.png" group-title=" Music", B4U Music
https://'.$ipadd.'/live.php?c=B4U_Music&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="248" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/MTV.png" group-title=" Music", MTV
https://'.$ipadd.'/live.php?c=MTV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="440" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/9X_Jalwa.png" group-title=" Music", 9X Jalwa
https://'.$ipadd.'/live.php?c=9X_Jalwa&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="250" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Music_India.png" group-title=" Music", Music India
https://'.$ipadd.'/live.php?c=Music_India&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1192" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Brit_Asia.png" group-title=" Music", Brit Asia
https://'.$ipadd.'/live.php?c=Brit_Asia&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1103" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/PEACE_MUSIC.png" group-title=" Music", PEACE MUSIC
https://'.$ipadd.'/live.php?c=PEACE_MUSIC&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="962" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Boogle_Bollywood.png" group-title=" Music", Boogle Bollywood
https://'.$ipadd.'/live.php?c=Boogle_Bollywood&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1267" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/iLove.png" group-title=" Music", iLove
https://'.$ipadd.'/live.php?c=iLove&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1286" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Insync.png" group-title=" Music", Insync
https://'.$ipadd.'/live.php?c=Insync&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1411" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/SongDew_TV.png" group-title=" Music", SongDew TV
https://'.$ipadd.'/live.php?c=SongDew_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="173" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Aaj_Tak.png" group-title=" News", Aaj Tak
https://'.$ipadd.'/live.php?c=Aaj_Tak&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="177" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/ABP_News_India.png" group-title=" News", ABP News India
https://'.$ipadd.'/live.php?c=ABP_News_India&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="231" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/IBN_7.png" group-title=" News", News 18 India
https://'.$ipadd.'/live.php?c=IBN_7&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="235" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/India_TV.png" group-title=" News", India TV
https://'.$ipadd.'/live.php?c=India_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="504" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_News.png" group-title=" News", Zee News
https://'.$ipadd.'/live.php?c=Zee_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="501" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/News_24.png" group-title=" News", News 24
https://'.$ipadd.'/live.php?c=News_24&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="499" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/News_Nation.png" group-title=" News", News Nation
https://'.$ipadd.'/live.php?c=News_Nation&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="498" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/India_news.png" group-title=" News", India news
https://'.$ipadd.'/live.php?c=India_news&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="502" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Tez.png" group-title=" News", Tez
https://'.$ipadd.'/live.php?c=Tez&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="531" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_RAJASTHAN.png" group-title=" News", News18 RAJASTHAN
https://'.$ipadd.'/live.php?c=ETV_RAJASTHAN&q=800&e=junk.m3u8
';

fwrite($playlist, $modlist);


$modlist='
#EXTINF: -1 tvg-id="792" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/News_State_UK_UP.png" group-title=" News", News State UK UP
https://'.$ipadd.'/live.php?c=News_State_UK_UP&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="529" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_MP.png" group-title=" News", News18 MP
https://'.$ipadd.'/live.php?c=ETV_MP&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="770" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Kashish_News.png" group-title=" News", Kashish News
https://'.$ipadd.'/live.php?c=Kashish_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="658" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_News_MP_Chattisgarh.png" group-title=" News", Zee News MP Chattisgarh
https://'.$ipadd.'/live.php?c=Zee_News_MP_Chattisgarh&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="659" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Rajasthan.png" group-title=" News", Zee Rajasthan
https://'.$ipadd.'/live.php?c=Zee_Rajasthan&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="530" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_UP.png" group-title=" News", News18 UP
https://'.$ipadd.'/live.php?c=ETV_UP&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="203" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD_News.png" group-title=" News", DD News
https://'.$ipadd.'/live.php?c=DD_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="512" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/India_News_UP.png" group-title=" News", India News UP
https://'.$ipadd.'/live.php?c=India_News_UP&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="768" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Jan_TV.png" group-title=" News", Jan TV
https://'.$ipadd.'/live.php?c=Jan_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="516" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/India_News_Haryana.png" group-title=" News", India News Haryana
https://'.$ipadd.'/live.php?c=India_News_Haryana&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="513" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/India_News_Rajasthan.png" group-title=" News", India News Rajasthan
https://'.$ipadd.'/live.php?c=India_News_Rajasthan&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="509" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sahara_Samay_Bihar.png" group-title=" News", Sahara Samay Bihar
https://'.$ipadd.'/live.php?c=Sahara_Samay_Bihar&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="652" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_SANGAM.png" group-title=" News", Zee Hindustan
https://'.$ipadd.'/live.php?c=Zee_SANGAM&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="808" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Hindi_Khabar.png" group-title=" News", Hindi Khabar
https://'.$ipadd.'/live.php?c=Hindi_Khabar&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="927" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/First_India_News.png" group-title=" News", First India News
https://'.$ipadd.'/live.php?c=First_India_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="882" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/News11.png" group-title=" News", News11
https://'.$ipadd.'/live.php?c=News11&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="507" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/SAHARA_SAMAY_MP.png" group-title=" News", SAHARA SAMAY MP
https://'.$ipadd.'/live.php?c=SAHARA_SAMAY_MP&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="515" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/India_News_MP.png" group-title=" News", India News MP
https://'.$ipadd.'/live.php?c=India_News_MP&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="572" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Living_Foodz.png" group-title=" News", Zee UP UK
https://'.$ipadd.'/live.php?c=Living_Foodz&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="518" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sudarshan.png" group-title=" News", Sudarshan
https://'.$ipadd.'/live.php?c=Sudarshan&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="789" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/JK_24x7_News.png" group-title=" News", JK 24x7 News
https://'.$ipadd.'/live.php?c=JK_24x7_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="791" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Taaza_TV.png" group-title=" News", Taaza TV
https://'.$ipadd.'/live.php?c=Taaza_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="771" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Live_Today.png" group-title=" News", Live Today
https://'.$ipadd.'/live.php?c=Live_Today&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="506" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sahara_Samay_Rastriya.png" group-title=" News", Sahara Samay Rastriya
https://'.$ipadd.'/live.php?c=Sahara_Samay_Rastriya&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="511" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Mh_One_News.png" group-title=" News", Mh One News
https://'.$ipadd.'/live.php?c=Mh_One_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="655" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Haryana_and_HP_News.png" group-title=" News", News18 Haryana and HP News
https://'.$ipadd.'/live.php?c=ETV_Haryana_and_HP_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="855" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Total_TV.png" group-title=" News", Total TV
https://'.$ipadd.'/live.php?c=Total_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="508" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/SAHARA_SAMAY_UP.png" group-title=" News", SAHARA SAMAY UP
https://'.$ipadd.'/live.php?c=SAHARA_SAMAY_UP&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="918" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Bharat_Samachar.png" group-title=" News", Bhaarat Samachar
https://'.$ipadd.'/live.php?c=Bhaarat_Samachar&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="783" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/K_News_India.png" group-title=" News", K News India
https://'.$ipadd.'/live.php?c=K_News_India&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="793" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Samay_Rajasthan.png" group-title=" News", Samay Rajasthan
https://'.$ipadd.'/live.php?c=Samay_Rajasthan&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="522" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Loksabha_TV.png" group-title=" News", Loksabha TV
https://'.$ipadd.'/live.php?c=Loksabha_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="520" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Rajyasabha.png" group-title=" News", DD Rajyasabha
https://'.$ipadd.'/live.php?c=DD_Rajyasabha&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="936" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/News_1_India.png" group-title=" News", News 1 India
https://'.$ipadd.'/live.php?c=News_1_India&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="917" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/APN_News.png" group-title=" News", APN News
https://'.$ipadd.'/live.php?c=APN_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="916" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/TV_100.png" group-title=" News", TV 100
https://'.$ipadd.'/live.php?c=TV_100&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1179" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Bansal_News.png" group-title=" News", Bansal News
https://'.$ipadd.'/live.php?c=Bansal_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="788" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/India_Voice.png" group-title=" News", India Voice
https://'.$ipadd.'/live.php?c=India_Voice&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="926" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/A1_TV_Rajasthan.png" group-title=" News", A1 TV Rajasthan
https://'.$ipadd.'/live.php?c=A1_TV_Rajasthan&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="957" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/INH_24x7.png" group-title=" News", INH 24x7
https://'.$ipadd.'/live.php?c=INH_24x7&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="850" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/News_India_24_X_7.png" group-title=" News", News India 24x7
https://'.$ipadd.'/live.php?c=News_India_24_X_7&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="831" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Living_India_News.png" group-title=" News", Living India News
https://'.$ipadd.'/live.php?c=Living_India_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="851" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/SMBC_TV.png" group-title=" News", SMBC TV
https://'.$ipadd.'/live.php?c=SMBC_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="519" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sadhna_News_Plus.png" group-title=" News", Sadhna News Plus
https://'.$ipadd.'/live.php?c=Sadhna_News_Plus&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="921" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Prime_News.png" group-title=" News", Prime News
https://'.$ipadd.'/live.php?c=Prime_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="966" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/PrudentHD.png" group-title=" News", Prudent
https://'.$ipadd.'/live.php?c=PrudentHD&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="915" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Khabar_Fast.png" group-title=" News", Khabar Fast
https://'.$ipadd.'/live.php?c=Khabar_Fast&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="920" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Channel_One_News.png" group-title=" News", Channel One News
https://'.$ipadd.'/live.php?c=Channel_One_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="974" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/HNN_24x7.png" group-title=" News", HNN 24x7
https://'.$ipadd.'/live.php?c=HNN_24x7&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="958" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/DNN.png" group-title=" News", DNN
https://'.$ipadd.'/live.php?c=DNN&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="975" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Jantantra.png" group-title=" News", Jantantra
https://'.$ipadd.'/live.php?c=Jantantra&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1551" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/P_News.png" group-title=" News", P News
https://'.$ipadd.'/live.php?c=P_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1553" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/ABSTAR_News.png" group-title=" News", AB Star News
https://'.$ipadd.'/live.php?c=ABSTAR_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1205" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/ABP_Ganga.png" group-title=" News", ABP Ganga
https://'.$ipadd.'/live.php?c=ABP_Ganga&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1251" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/TV9_BHARATVARSH.png" group-title=" News", TV9 Bharatvarsh
https://'.$ipadd.'/live.php?c=TV9_Bharatvarsh&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1257" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Surya_Samachar.png" group-title=" News", Surya Samachar
https://'.$ipadd.'/live.php?c=Surya_Samachar&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1263" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Total_Tv_Haryana.png" group-title=" News", Total Tv Haryana
https://'.$ipadd.'/live.php?c=Total_Tv_Haryana&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1287" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/ANB_News.png" group-title=" News", ANB News
https://'.$ipadd.'/live.php?c=ANB_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1431" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/BBC_Hindi.png" group-title=" News", BBC News Hindi
https://'.$ipadd.'/live.php?c=BBC_Hindi&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1451" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/9_Bharat_Samachar.png" group-title=" News", 9 Bharat Samachar
https://'.$ipadd.'/live.php?c=9_Bharat_Samachar&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1528" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Network_10.png" group-title=" News", Network 10
https://'.$ipadd.'/live.php?c=Network_10&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1538" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Samachar_Today.png" group-title=" News", Samachar Today
https://'.$ipadd.'/live.php?c=Samachar_Today&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1550" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/AB_News.png" group-title=" News", AB News
https://'.$ipadd.'/live.php?c=AB_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="657" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Business.png" group-title=" Business News", Zee Business
https://'.$ipadd.'/live.php?c=Zee_Business&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="143" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/CNBC_Tv18_Prime_HD.png" group-title=" Business News", CNBC Tv18 Prime HD
https://'.$ipadd.'/live.php?c=CNBC_Tv18_Prime_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="190" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/CNBC_Awaaz.png" group-title=" Business News", CNBC Awaaz
https://'.$ipadd.'/live.php?c=CNBC_Awaaz&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="489" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/CNBC_Tv_18.png" group-title=" Business News", CNBC Tv 18
https://'.$ipadd.'/live.php?c=CNBC_Tv_18&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="545" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Hindi.png" group-title=" Kids", Nick Hindi
https://'.$ipadd.'/live.php?c=Nick_Hindi&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="559" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Pogo_Hindi.png" group-title=" Kids", Pogo Hindi
https://'.$ipadd.'/live.php?c=Pogo_Hindi&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="816" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Cartoon_Network_Hindi.png" group-title=" Kids", Cartoon Network Hindi
https://'.$ipadd.'/live.php?c=Cartoon_Network_Hindi&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="815" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/sonic_Hindi.png" group-title=" Kids", Sonic Hindi
https://'.$ipadd.'/live.php?c=sonic_Hindi&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="872" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Yay_Hindi.png" group-title=" Kids", Sony Yay Hindi
https://'.$ipadd.'/live.php?c=Sony_Yay_Hindi&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="547" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Nickelodeon.png" group-title=" Kids", Nickelodeon
https://'.$ipadd.'/live.php?c=Nickelodeon&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1079" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/CN_HD_English.png" group-title=" Kids", CN HD+ English
https://'.$ipadd.'/live.php?c=CN_HD_English&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="554" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Kids_2.png" group-title=" Kids", Discovery Kids 2
https://'.$ipadd.'/live.php?c=Discovery_Kids_2&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="544" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Junior.png" group-title=" Kids", Nick Junior
https://'.$ipadd.'/live.php?c=Nick_Junior&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="551" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Toonami.png" group-title=" Kids", Testton
https://'.$ipadd.'/live.php?c=Toonami&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="548" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Nickelodeon_Jr.png" group-title=" Kids", Nickelodeon Jr.
https://'.$ipadd.'/live.php?c=Nickelodeon_Jr&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1216" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Highbrow.png" group-title=" Kids", Highbrow
https://'.$ipadd.'/live.php?c=Highbrow&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1226" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Nick_HD+.png" group-title=" Kids", Nick HD+
https://'.$ipadd.'/live.php?c=Nick_HD_Plus&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="1430" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_KIDS.png" group-title=" Kids", KIDS
https://'.$ipadd.'/live.php?c=Jio_KIDS&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="430" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket.png" group-title=" Sports", Cricket HD English
https://'.$ipadd.'/live.php?c=Jio_Cricket&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="438" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket_Hindi.png" group-title=" Sports", Cricket HD Hindi
https://'.$ipadd.'/live.php?c=Jio_Cricket_Hindi&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="1160" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket_1_HD.png" group-title=" Sports", Cricket 1 HD
https://'.$ipadd.'/live.php?c=Jio_Cricket_1_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="1161" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket_2_HD.png" group-title=" Sports", Cricket 2 HD
https://'.$ipadd.'/live.php?c=Jio_Cricket_2_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="1166" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket_3.png" group-title=" Sports", Cricket 3 HD
https://'.$ipadd.'/live.php?c=Jio_Cricket_3_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="1272" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket_4_HD.png" group-title=" Sports", Cricket 4 HD
https://'.$ipadd.'/live.php?c=Jio_Cricket_4_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="1709" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket_5_HD.png" group-title=" Sports", Cricket 5 HD
https://'.$ipadd.'/live.php?c=Jio_Cricket_5_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="1711" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket_6_HD.png" group-title=" Sports", Cricket 6 HD
https://'.$ipadd.'/live.php?c=Jio_Cricket_6_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="1156" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Esports_HD.png" group-title=" Sports", Esports HD
https://'.$ipadd.'/live.php?c=Jio_Esports_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="1156" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football.png" group-title=" Sports", Football HD Eng
https://'.$ipadd.'/live.php?c=Jio_Football&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="1165" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_Hindi_HD.png" group-title=" Sports", Football HD Hin
https://'.$ipadd.'/live.php?c=Jio_Football_Hindi_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="1239" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_Bangali_HD.png" group-title=" Sports", Football HD Ban
https://'.$ipadd.'/live.php?c=Jio_Football_Bangali_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="1237" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_Kannada_HD.png" group-title=" Sports", Football HD Kan
https://'.$ipadd.'/live.php?c=Jio_Football_Kannada_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="1236" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_Malayalam_HD.png" group-title=" Sports", Football HD Mal
https://'.$ipadd.'/live.php?c=Jio_Football_Malayalam_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="1235" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_Tamil_HD.png" group-title=" Sports", Football HD Tam
https://'.$ipadd.'/live.php?c=Jio_Football_Tamil_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="1238" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_Telugu_HD.png" group-title=" Sports", Football HD Tel
https://'.$ipadd.'/live.php?c=Jio_Football_Telugu_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="1234" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_1.png" group-title=" Sports", Football 1 HD
https://'.$ipadd.'/live.php?c=Jio_Football_1&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1167" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_2.png" group-title=" Sports", Football 2 HD
https://'.$ipadd.'/live.php?c=Jio_Football_2&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1168" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_3.png" group-title=" Sports", Football 3 HD
https://'.$ipadd.'/live.php?c=Jio_Football_3&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="155" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Six_HD.png" group-title=" Sports", Sony Six HD
https://'.$ipadd.'/live.php?c=Six_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="155" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Six_HD_Bengali.png" group-title=" Sports", Sony Six HD Bengali
https://'.$ipadd.'/live.php?c=Sony_Six_HD_Bengali&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="155" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Six_HD_Malayalam.png" group-title=" Sports", Sony Six HD Malayalam
https://'.$ipadd.'/live.php?c=Sony_Six_HD_Malayalam&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="525" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Six_SD_Malayalam.png" group-title=" Sports", Sony Six SD Malayalam
https://'.$ipadd.'/live.php?c=Sony_Six_SD_Malayalam&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="162" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Ten_4_HD_Tamil.png" group-title=" Sports", Ten 4 HD Tamil
https://'.$ipadd.'/live.php?c=Ten_4_HD_Tamil&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="162" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Ten_4_HD_Telugu.png" group-title=" Sports", Ten 4 HD Telugu
https://'.$ipadd.'/live.php?c=Ten_4_HD_Telugu&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="162" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Ten_4_Telugu.png" group-title=" Sports", Ten 4 HD Telugu
https://'.$ipadd.'/live.php?c=Ten_4_Telugu&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="162" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Ten_4_Tamil.png" group-title=" Sports", Ten 4 HD Telugu
https://'.$ipadd.'/live.php?c=Ten_4_Tamil&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="162" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Ten_HD.png" group-title=" Sports", Ten 1 HD
https://'.$ipadd.'/live.php?c=Ten_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="891" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Ten2_HD.png" group-title=" Sports", Ten 2 HD
https://'.$ipadd.'/live.php?c=Ten2_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="892" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Ten3_HD.png" group-title=" Sports", Ten 3 HD
https://'.$ipadd.'/live.php?c=Ten3_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="875" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Dsports_HD.png" group-title=" Sports", Eurosport HD
https://'.$ipadd.'/live.php?c=Dsports_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="514" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Ten_1.png" group-title=" Sports", Ten 1
https://'.$ipadd.'/live.php?c=Ten_1&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="523" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Ten_2.png" group-title=" Sports", Ten 2
https://'.$ipadd.'/live.php?c=Ten_2&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="524" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Ten_3.png" group-title=" Sports", Ten 3
https://'.$ipadd.'/live.php?c=Ten_3&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="525" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Six_SD.png" group-title=" Sports", Sony Six SD
https://'.$ipadd.'/live.php?c=Sony_Six_SD&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="204" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Sports.png" group-title=" Sports", DD Sports
https://'.$ipadd.'/live.php?c=DD_Sports&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1294" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Dsports.png" group-title=" Sports", Eurosport
https://'.$ipadd.'/live.php?c=Dsports&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1425" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/1Sports.png" group-title=" Sports", 1Sports
https://'.$ipadd.'/live.php?c=1Sports&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1529" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/MI_TV.png" group-title=" Sports", MI TV
https://'.$ipadd.'/live.php?c=MI_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="463" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_HD_World.png" group-title=" Infotainment", Discovery HD World
https://'.$ipadd.'/live.php?c=Discovery_HD_World&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="821" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_BBC_Earth_HD.png" group-title=" Infotainment", Sony BBC Earth HD
https://'.$ipadd.'/live.php?c=Sony_BBC_Earth_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="146" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/History_HD.png" group-title=" Infotainment", History TV18 HD
https://'.$ipadd.'/live.php?c=History_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="286" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Animal_Planet_HD.png" group-title=" Infotainment", Animal Planet HD World
https://'.$ipadd.'/live.php?c=Animal_Planet_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="164" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Travel_XP_HD.png" group-title=" Infotainment", Travel XP HD
https://'.$ipadd.'/live.php?c=Travel_XP_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="566" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Animal_Planet_Hindi.png" group-title=" Infotainment", Animal Planet Hindi
https://'.$ipadd.'/live.php?c=Animal_Planet_Hindi&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="575" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Channel_Hindi.png" group-title=" Infotainment", Discovery Channel Hindi
https://'.$ipadd.'/live.php?c=Discovery_Channel_Hindi&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="578" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/History_18_Hindi.png" group-title=" Infotainment", History TV18 HD Hindi
https://'.$ipadd.'/live.php?c=History_18_Hindi&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="568" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Science.png" group-title=" Infotainment", Discovery Science
https://'.$ipadd.'/live.php?c=Discovery_Science&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="871" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Events.png" group-title=" Infotainment", Events HD
https://'.$ipadd.'/live.php?c=Jio_Events&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="567" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Animal_Planet_English.png" group-title=" Infotainment", Animal Planet English
https://'.$ipadd.'/live.php?c=Animal_Planet_English&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="242" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Discovery.png" group-title=" Infotainment", Discovery
https://'.$ipadd.'/live.php?c=Discovery&q=800&e=junk.m3u8
';

fwrite($playlist, $modlist);


$modlist='
#EXTINF: -1 tvg-id="823" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_BBC_Earth_SD.png" group-title=" Infotainment", Sony BBC Earth SD
https://'.$ipadd.'/live.php?c=Sony_BBC_Earth_SD&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="583" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Kisan.png" group-title=" Infotainment", DD Kisan
https://'.$ipadd.'/live.php?c=DD_Kisan&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="541" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Turbo.png" group-title=" Infotainment", Discovery Turbo
https://'.$ipadd.'/live.php?c=Discovery_Turbo&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="852" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_BBC_Earth_HD_English.png" group-title=" Infotainment", Sony BBC Earth HD English
https://'.$ipadd.'/live.php?c=Sony_BBC_Earth_HD_English&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="580" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD_bharati.png" group-title=" Infotainment", DD bharati
https://'.$ipadd.'/live.php?c=DD_bharati&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="582" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Care_World.png" group-title=" Infotainment", Care World
https://'.$ipadd.'/live.php?c=Care_World&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="888" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Insight.png" group-title=" Infotainment", Insight
https://'.$ipadd.'/live.php?c=Insight&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1444" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/YTV_INDIA.png" group-title=" Infotainment", YTV India
https://'.$ipadd.'/live.php?c=YTV_INDIA&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1471" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/History_TV18_SD.png" group-title=" Infotainment", History TV18 SD
https://'.$ipadd.'/live.php?c=History_TV18_SD&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="479" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/TLC_HD_World.png" group-title=" Lifestyle", TLC HD
https://'.$ipadd.'/live.php?c=TLC_HD_World&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="561" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Food_Food.png" group-title=" Lifestyle", Food Food
https://'.$ipadd.'/live.php?c=Food_Food&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="562" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Travel_XP.png" group-title=" Lifestyle", Travel XP HD Hindi
https://'.$ipadd.'/live.php?c=Travel_XP&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="574" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/TLC_English.png" group-title=" Lifestyle", TLC English
https://'.$ipadd.'/live.php?c=TLC_English&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="571" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/TLC_Hindi.png" group-title=" Lifestyle", TLC Hindi
https://'.$ipadd.'/live.php?c=TLC_Hindi&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1225" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Click_Life.png" group-title=" Lifestyle", Click Life
https://'.$ipadd.'/live.php?c=Click_Life&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1290" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/StarTell.png" group-title=" Lifestyle", Stars Tell
https://'.$ipadd.'/live.php?c=StarTell&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1292" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Wellness_TV.png" group-title=" Lifestyle", Wellness
https://'.$ipadd.'/live.php?c=Wellness_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="175" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Aastha.png" group-title=" Devotional", Aastha
https://'.$ipadd.'/live.php?c=Aastha&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="594" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Aastha_Bhajan.png" group-title=" Devotional", Aastha Bhajan
https://'.$ipadd.'/live.php?c=Aastha_Bhajan&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="288" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sanskar.png" group-title=" Devotional", Sanskar
https://'.$ipadd.'/live.php?c=Sanskar&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1201" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sadhguru_Television.png" group-title=" Devotional", Sadhguru Television HD
https://'.$ipadd.'/live.php?c=Sadhguru_Television&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="794" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Peace_of_Mind.png" group-title=" Devotional", Peace of Mind
https://'.$ipadd.'/live.php?c=Peace_of_Mind&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="801" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Divya_TV.png" group-title=" Devotional", Divya TV
https://'.$ipadd.'/live.php?c=Divya_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="602" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Paras_tv.png" group-title=" Devotional", Paras tv
https://'.$ipadd.'/live.php?c=Paras_tv&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="593" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sadhna.png" group-title=" Devotional", Sadhna
https://'.$ipadd.'/live.php?c=Sadhna&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="597" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Satsang_TV.png" group-title=" Devotional", Satsang TV
https://'.$ipadd.'/live.php?c=Satsang_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="596" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Jinvani_TV.png" group-title=" Devotional", Jinvani TV
https://'.$ipadd.'/live.php?c=Jinvani_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="828" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Shubh_TV.png" group-title=" Devotional", Shubh TV
https://'.$ipadd.'/live.php?c=Shubh_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1407" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sai_Leela.png" group-title=" Devotional", Sai Leela
https://'.$ipadd.'/live.php?c=Sai_Leela&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="466" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Arihant_TV.png" group-title=" Devotional", Arihant TV
https://'.$ipadd.'/live.php?c=Arihant_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="599" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Disha_tv.png" group-title=" Devotional", Disha tv
https://'.$ipadd.'/live.php?c=Disha_tv&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="856" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Vedic_TV.png" group-title=" Devotional", Vedic TV
https://'.$ipadd.'/live.php?c=Vedic_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="611" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Darshan_24.png" group-title=" Devotional", Darshan 24
https://'.$ipadd.'/live.php?c=Darshan_24&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="939" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Bhaktisagar_2.png" group-title=" Devotional", Bhaktisagar 2
https://'.$ipadd.'/live.php?c=Bhaktisagar_2&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="601" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Ishwar_TV.png" group-title=" Devotional", Ishwar TV
https://'.$ipadd.'/live.php?c=Ishwar_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="879" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Harekrsna.png" group-title=" Devotional", Hare krsna
https://'.$ipadd.'/live.php?c=Harekrsna&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="887" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Garv_Swaminarayan.png" group-title=" Devotional", Swar Shree
https://'.$ipadd.'/live.php?c=Garv_Swaminarayan&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="608" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Shubhsandesh_TV.png" group-title=" Devotional", Shubhsandesh TV
https://'.$ipadd.'/live.php?c=Shubhsandesh_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="912" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Katyayani.png" group-title=" Devotional", Katyayani
https://'.$ipadd.'/live.php?c=Katyayani&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="972" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sarv_Dharam_Sangam.png" group-title=" Devotional", Sarv Dharam Sangam
https://'.$ipadd.'/live.php?c=Sarv_Dharam_Sangam&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1077" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Lord_Buddha.png" group-title=" Devotional", Lord Buddha
https://'.$ipadd.'/live.php?c=Lord_Buddha&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="964" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Om_Shanti.png" group-title=" Devotional", Om Shanti
https://'.$ipadd.'/live.php?c=Om_Shanti&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1078" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Soham_TV.png" group-title=" Devotional", Soham TV
https://'.$ipadd.'/live.php?c=Soham_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1175" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Awakening.png" group-title=" Devotional", Awakening
https://'.$ipadd.'/live.php?c=Awakening&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1176" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/SRMD.png" group-title=" Devotional", SRMD HD
https://'.$ipadd.'/live.php?c=SRMD&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1193" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Hare_Krsna_music.png" group-title=" Devotional", Hare Krsna Music
https://'.$ipadd.'/live.php?c=Hare_Krsna_music&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1523" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/GSB_Worldwide.png" group-title=" Devotional", G S B Worldwide
https://'.$ipadd.'/live.php?c=GSB_Worldwide&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1449" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Parmarth_TV.png" group-title=" Devotional", Parmarth TV
https://'.$ipadd.'/live.php?c=Parmarth_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1482" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Amma.png" group-title=" Devotional", AMMA TV
https://'.$ipadd.'/live.php?c=Amma&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1526" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Vedant_TV.png" group-title=" Devotional", Vedant TV
https://'.$ipadd.'/live.php?c=Vedant_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1549" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/DharmaGranth_TV.png" group-title=" Devotional", Dharm Granth TV
https://'.$ipadd.'/live.php?c=DharmaGranth_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1554" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sanatan_TV.png" group-title=" Devotional", Sanatan TV
https://'.$ipadd.'/live.php?c=Sanatan_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1559" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Jigyasa_TV.png" group-title=" Devotional", Jigyasa TV
https://'.$ipadd.'/live.php?c=Jigyasa_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1568" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Atmadarshan_TV.png" group-title=" Devotional", Aatmadarshan TV
https://'.$ipadd.'/live.php?c=Atmadarshan_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1212" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Hare_Krsna_Pravachan.png" group-title=" Devotional", Hare Krsna Pravachan
https://'.$ipadd.'/live.php?c=Hare_Krsna_Pravachan&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1220" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Rajyoga_TV.png" group-title=" Devotional", Rajyoga TV
https://'.$ipadd.'/live.php?c=Rajyoga_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1224" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Nimbark.png" group-title=" Devotional", Nimbark TV
https://'.$ipadd.'/live.php?c=Nimbark&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1241" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/God_TV.png" group-title=" Devotional", God TV
https://'.$ipadd.'/live.php?c=God_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1259" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Surya_Bhakti.png" group-title=" Devotional", Surya Bhakti
https://'.$ipadd.'/live.php?c=Surya_Bhakti&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1278" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Prarthana_Bhawan.png" group-title=" Devotional", Prarthana Bhawan
https://'.$ipadd.'/live.php?c=Prarthana_Bhawan&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1315" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/HHDL.png" group-title=" Devotional", HHDL
https://'.$ipadd.'/live.php?c=HHDL&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1426" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Santvani.png" group-title=" Devotional", Santvani
https://'.$ipadd.'/live.php?c=Santvani&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1440" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Krishna_Vani.png" group-title=" Devotional", Krishna Vani
https://'.$ipadd.'/live.php?c=Krishna_Vani&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1543" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Subharti.png" group-title=" Devotional", Subharti
https://'.$ipadd.'/live.php?c=Subharti&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1546" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sarvamangala.png" group-title=" Devotional", Sarvamangala
https://'.$ipadd.'/live.php?c=Sarvamangala&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1414" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Prati_Shirdi_Saibaba.png" group-title=" Darshan", Prati Shirdi Saibaba
https://'.$ipadd.'/live.php?c=Prati_Shirdi_Saibaba&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1415" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Ganga_Darshan_Varanasi.png" group-title=" Darshan", Ganga Darshan Varanasi
https://'.$ipadd.'/live.php?c=Ganga_Darshan_Varanasi&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1418" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Ichhapuran_Balaji_Rajasthan.png" group-title=" Darshan", Ichhapuran Balaji Rajasthan
https://'.$ipadd.'/live.php?c=Ichhapuran_Balaji_Rajasthan&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1421" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Karani_Mata_Rajasthan.png" group-title=" Darshan", Karani Mata Rajasthan
https://'.$ipadd.'/live.php?c=Karani_Mata_Rajasthan&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1173" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Siddhivinayak.png" group-title=" Darshan", Shree Siddhivinayak
https://'.$ipadd.'/live.php?c=Siddhivinayak&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1159" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Tulja_Bhavani.png" group-title=" Darshan", Tulja Bhavani
https://'.$ipadd.'/live.php?c=Tulja_Bhavani&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1524" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Ashtavinayak.png" group-title=" Darshan", Ashtavinayak
https://'.$ipadd.'/live.php?c=Ashtavinayak&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1533" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Chardham_Darshan.png" group-title=" Darshan", Chardham Darshan
https://'.$ipadd.'/live.php?c=Chardham_Darshan&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1548" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Khandoba_Majha_Jejuri.png" group-title=" Darshan", Jejuri
https://'.$ipadd.'/live.php?c=Khandoba_Majha_Jejuri&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1217" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/LordShri_Vitthal.png" group-title=" Darshan", Lord Shri Vitthal Rukmini
https://'.$ipadd.'/live.php?c=LordShri_Vitthal&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1222" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/GovindDevji_Jaipur.png" group-title=" Darshan", Mandir Shri Govinddevji-Jaipur
https://'.$ipadd.'/live.php?c=GovindDevji_Jaipur&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1223" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Dagdusheth_Pune.png" group-title=" Darshan", Dagdusheth Ganpati - Pune
https://'.$ipadd.'/live.php?c=Dagdusheth_Pune&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1228" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Ambabai_Temple.png" group-title=" Darshan", Ambabai Temple-Kolhapur
https://'.$ipadd.'/live.php?c=Ambabai_Temple&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1271" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Udupi_Krishna_Temple.png" group-title=" Darshan", Sh Krishna Matta Adamaru Paryaya UDUPI
https://'.$ipadd.'/live.php?c=Udupi_Krishna_Temple&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1283" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Hanuman_Mahavir_Temple.png" group-title=" Darshan", Mahavir Mandir Patna
https://'.$ipadd.'/live.php?c=Hanuman_Mahavir_Temple&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1288" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Omkareshwar_Temple.png" group-title=" Darshan", Shri Omkareshwar Mandir
https://'.$ipadd.'/live.php?c=Omkareshwar_Temple&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1316" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Iskon_Temples_New.png" group-title=" Darshan", ISKCON Darshan
https://'.$ipadd.'/live.php?c=Iskon_Temples_New&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1463" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Moti_Doongri.png" group-title=" Darshan", Shree Ganesh - Moti Doongri Jaipur
https://'.$ipadd.'/live.php?c=Moti_Doongri&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1479" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Nakoda_Temple.png" group-title=" Darshan", Shri Jain Nakoda Parshwanath Tirth
https://'.$ipadd.'/live.php?c=Nakoda_Temple&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1483" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Braj_Darshan.png" group-title=" Darshan", Braj Darshan
https://'.$ipadd.'/live.php?c=Braj_Darshan&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1412" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Shani_Shingnapur.png" group-title=" Darshan", Shani Shingnapur
https://'.$ipadd.'/live.php?c=Shani_Shingnapur&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1416" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Ashtavinayak_Ozar.png" group-title=" Darshan", Ashtavinayak Ozar
https://'.$ipadd.'/live.php?c=Ashtavinayak_Ozar&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1419" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Iskon_Girgaon.png" group-title=" Darshan", Iskon Girgaon
https://'.$ipadd.'/live.php?c=Iskon_Girgaon&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1420" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Ashtavinayak_Ranjangaon.png" group-title=" Darshan", Ashtavinayak Ranjangaon
https://'.$ipadd.'/live.php?c=Ashtavinayak_Ranjangaon&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1422" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Mahalaxmi_Mumbai.png" group-title=" Darshan", Mahalaxmi Mumbai
https://'.$ipadd.'/live.php?c=Mahalaxmi_Mumbai&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1423" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Babulnaath_Mumbai.png" group-title=" Darshan", Babulnaath Mumbai
https://'.$ipadd.'/live.php?c=Babulnaath_Mumbai&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1424" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Mumbadevi_Mumbai.png" group-title=" Darshan", Mumbadevi Mumbai
https://'.$ipadd.'/live.php?c=Mumbadevi_Mumbai&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="968" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Millionlights.png" group-title=" Educational", Millionlights
https://'.$ipadd.'/live.php?c=Millionlights&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1433" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/India_Science.png" group-title=" Educational", India Science
https://'.$ipadd.'/live.php?c=India_Science&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="980" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_01.png" group-title=" Educational", Swayam Prabha 01
https://'.$ipadd.'/live.php?c=Swayam_Prabha_01&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="981" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_02.png" group-title=" Educational", Swayam Prabha 02
https://'.$ipadd.'/live.php?c=Swayam_Prabha_02&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="982" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_03.png" group-title=" Educational", Swayam Prabha 03
https://'.$ipadd.'/live.php?c=Swayam_Prabha_03&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="984" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_04.png" group-title=" Educational", Swayam Prabha 04
https://'.$ipadd.'/live.php?c=Swayam_Prabha_04&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="986" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_05.png" group-title=" Educational", Swayam Prabha 05
https://'.$ipadd.'/live.php?c=Swayam_Prabha_05&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="987" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_06.png" group-title=" Educational", Swayam Prabha 06
https://'.$ipadd.'/live.php?c=Swayam_Prabha_06&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="985" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_07.png" group-title=" Educational", Swayam Prabha 07
https://'.$ipadd.'/live.php?c=Swayam_Prabha_07&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="983" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_08.png" group-title=" Educational", Swayam Prabha 08
https://'.$ipadd.'/live.php?c=Swayam_Prabha_08&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="988" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_09.png" group-title=" Educational", Swayam Prabha 09
https://'.$ipadd.'/live.php?c=Swayam_Prabha_09&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="989" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_10.png" group-title=" Educational", Swayam Prabha 10
https://'.$ipadd.'/live.php?c=Swayam_Prabha_10&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="990" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_11.png" group-title=" Educational", Swayam Prabha 11
https://'.$ipadd.'/live.php?c=Swayam_Prabha_11&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="991" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_12.png" group-title=" Educational", Swayam Prabha 12
https://'.$ipadd.'/live.php?c=Swayam_Prabha_12&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="992" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_13.png" group-title=" Educational", Swayam Prabha 13
https://'.$ipadd.'/live.php?c=Swayam_Prabha_13&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="993" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_14.png" group-title=" Educational", Swayam Prabha 14
https://'.$ipadd.'/live.php?c=Swayam_Prabha_14&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="995" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_15.png" group-title=" Educational", Swayam Prabha 15
https://'.$ipadd.'/live.php?c=Swayam_Prabha_15&q=800&e=junk.m3u8
';

fwrite($playlist, $modlist);


$modlist='
#EXTINF: -1 tvg-id="994" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_16.png" group-title=" Educational", Swayam Prabha 16
https://'.$ipadd.'/live.php?c=Swayam_Prabha_16&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="996" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_17.png" group-title=" Educational", Swayam Prabha 17
https://'.$ipadd.'/live.php?c=Swayam_Prabha_17&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="999" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_18.png" group-title=" Educational", Swayam Prabha 18
https://'.$ipadd.'/live.php?c=Swayam_Prabha_18&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="401" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_19.png" group-title=" Educational", Swayam Prabha 19
https://'.$ipadd.'/live.php?c=Swayam_Prabha_19&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="403" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_20.png" group-title=" Educational", Swayam Prabha 20
https://'.$ipadd.'/live.php?c=Swayam_Prabha_20&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="997" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_21.png" group-title=" Educational", Swayam Prabha 21
https://'.$ipadd.'/live.php?c=Swayam_Prabha_21&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="998" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_22.png" group-title=" Educational", Swayam Prabha 22
https://'.$ipadd.'/live.php?c=Swayam_Prabha_22&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="400" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/evidya_1.png" group-title=" Educational", PM e Vidya 01
https://'.$ipadd.'/live.php?c=evidya_1&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="402" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/evidya_2.png" group-title=" Educational", PM e Vidya 02
https://'.$ipadd.'/live.php?c=evidya_2&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="405" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/evidya_3.png" group-title=" Educational", PM e Vidya 03
https://'.$ipadd.'/live.php?c=evidya_3&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="406" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/evidya_4.png" group-title=" Educational", PM e Vidya 04
https://'.$ipadd.'/live.php?c=evidya_4&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="407" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/evidya_5.png" group-title=" Educational", PM e Vidya 05
https://'.$ipadd.'/live.php?c=evidya_5&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="408" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/evidya_6.png" group-title=" Educational", PM e Vidya 06
https://'.$ipadd.'/live.php?c=evidya_6&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="404" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/evidya_7.png" group-title=" Educational", PM e Vidya 07
https://'.$ipadd.'/live.php?c=evidya_7&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="409" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/_evidya_8.png" group-title=" Educational", PM e Vidya 08
https://'.$ipadd.'/live.php?c=_evidya_8&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="410" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/_evidya_9.png" group-title=" Educational", PM e Vidya 09
https://'.$ipadd.'/live.php?c=_evidya_9&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="411" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/evidya_10.png" group-title=" Educational", PM e Vidya 10
https://'.$ipadd.'/live.php?c=evidya_10&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1410" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/evidya_11.png" group-title=" Educational", PM e Vidya 11
https://'.$ipadd.'/live.php?c=evidya_11&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1532" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/evidya_12.png" group-title=" Educational", PM e Vidya 12
https://'.$ipadd.'/live.php?c=evidya_12&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1337" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Top_Tutor.png" group-title=" Educational", Top Tutor
https://'.$ipadd.'/live.php?c=Top_Tutor&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1456" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Manipur_Educational_Channel.png" group-title=" Educational", Lairik
https://'.$ipadd.'/live.php?c=Manipur_Educational_Channel&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1447" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/TV_Teacher.png" group-title=" Educational", TV Teacher
https://'.$ipadd.'/live.php?c=TV_Teacher&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1434" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Utkarsh_Primary.png" group-title=" Educational", Utkarsh Primary
https://'.$ipadd.'/live.php?c=Utkarsh_Primary&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1435" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Utkarsh_Middle.png" group-title=" Educational", Utkarsh HSBTE
https://'.$ipadd.'/live.php?c=Utkarsh_Middle&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1436" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Utkarsh_Secondary.png" group-title=" Educational", Utkarsh Secondary
https://'.$ipadd.'/live.php?c=Utkarsh_Secondary&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1437" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Utkarsh_Higher.png" group-title=" Educational", Utkarsh Higher
https://'.$ipadd.'/live.php?c=Utkarsh_Higher&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1439" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Meluha.png" group-title=" Educational", Meluha
https://'.$ipadd.'/live.php?c=Meluha&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1465" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Dnyanganga_3_4_Mar_Eng_Urdhu.png" group-title=" Educational", Dnyanganga 3rd-4th Mar-Eng-Urdu
https://'.$ipadd.'/live.php?c=Dnyanganga_3_4_Mar_Eng_Urdhu&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1466" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Dnyanganga_5_Mar_Eng_Urdhu.png" group-title=" Educational", Dnyanganga 5th Mar-Eng-Urdu
https://'.$ipadd.'/live.php?c=Dnyanganga_5_Mar_Eng_Urdhu&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1467" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Dnyanganga_6_Mar_Eng_Urdhu.png" group-title=" Educational", Dnyanganga 6th Mar-Eng-Urdu
https://'.$ipadd.'/live.php?c=Dnyanganga_6_Mar_Eng_Urdhu&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1468" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Dnyanganga_7_Mar_Eng_Urdhu.png" group-title=" Educational", Dnyanganga 7th Mar-Eng-Urdu
https://'.$ipadd.'/live.php?c=Dnyanganga_7_Mar_Eng_Urdhu&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1469" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Dnyanganga_8_Mar_Eng_Urdhu.png" group-title=" Educational", Dnyanganga 8th Mar-Eng-Urdu
https://'.$ipadd.'/live.php?c=Dnyanganga_8_Mar_Eng_Urdhu&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1472" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Dnyanganga_9_English_Medium.png" group-title=" Educational", Dnyanganga 9th English
https://'.$ipadd.'/live.php?c=Dnyanganga_9_English_Medium&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1445" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Mahawani_10th_English.png" group-title=" Educational", Dnyanganga 10th English
https://'.$ipadd.'/live.php?c=Mahawani_10th_English&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1443" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Mahawani_English.png" group-title=" Educational", Dnyanganga 12th Science
https://'.$ipadd.'/live.php?c=Mahawani_English&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1480" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/IMS_School.png" group-title=" Educational", IMS Schools Grade 1 - 8
https://'.$ipadd.'/live.php?c=IMS_School&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1493" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/School_Education_Nagaland.png" group-title=" Educational", School Education Nagaland
https://'.$ipadd.'/live.php?c=School_Education_Nagaland&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1521" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Birla_Brainiacs.png" group-title=" Educational", Birla Brainiacs
https://'.$ipadd.'/live.php?c=Birla_Brainiacs&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1531" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Gyanvani_1.png" group-title=" Educational", Gyanvani 1
https://'.$ipadd.'/live.php?c=Gyanvani_1&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1542" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Tute.png" group-title=" Educational", Tute
https://'.$ipadd.'/live.php?c=Tute&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1547" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/AAS_Vidyalaya.png" group-title=" Educational", AAS Vidyalaya
https://'.$ipadd.'/live.php?c=AAS_Vidyalaya&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1562" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Himshiksha_Elementary.png" group-title=" Educational", Himshiksha Elementary
https://'.$ipadd.'/live.php?c=Himshiksha_Elementary&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1563" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Himshiksha_Higher.png" group-title=" Educational", Himshiksha Higher
https://'.$ipadd.'/live.php?c=Himshiksha_Higher&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1564" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Himshiksha_Vocational.png" group-title=" Educational", Himshiksha Vocational
https://'.$ipadd.'/live.php?c=Himshiksha_Vocational&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1565" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/AP_BIE_ARTS.png" group-title=" Educational", AP-BIE-ARTS
https://'.$ipadd.'/live.php?c=AP_BIE_ARTS&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1566" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/AP_BIE_SCIENCE.png" group-title=" Educational", AP-BIE-SCIENCE
https://'.$ipadd.'/live.php?c=AP_BIE_SCIENCE&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1567" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/AP_CIE_SIVE.png" group-title=" Educational", AP-CIE-SIVE
https://'.$ipadd.'/live.php?c=AP_CIE_SIVE&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1590" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sanskritam.png" group-title=" Educational", Sanskrit
https://'.$ipadd.'/live.php?c=Sanskritam&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1446" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/M_lead.png" group-title=" Educational", M-LEAD
https://'.$ipadd.'/live.php?c=M_lead&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1544" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Shiksha_Darshan.png" group-title=" Educational", Shiksha Darshan
https://'.$ipadd.'/live.php?c=Shiksha_Darshan&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1171" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/PTC_Punjabi.png" group-title=" Punjabi", PTC Punjabi
https://'.$ipadd.'/live.php?c=PTC_Punjabi&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1189" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/PTC_Music.png" group-title=" Punjabi", PTC Music
https://'.$ipadd.'/live.php?c=PTC_Music&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="906" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Desi_Channel.png" group-title=" Punjabi", Desi Channel
https://'.$ipadd.'/live.php?c=Desi_Channel&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="609" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/mh1_Shraddha.png" group-title=" Punjabi", mh1 Shraddha
https://'.$ipadd.'/live.php?c=mh1_Shraddha&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1191" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/PTC_Simran.png" group-title=" Punjabi", PTC Simran
https://'.$ipadd.'/live.php?c=PTC_Simran&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="904" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sanjha_TV.png" group-title=" Punjabi", Sanjha TV
https://'.$ipadd.'/live.php?c=Sanjha_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="951" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/GarvPunjabi.png" group-title=" Punjabi", Garv Punjabi
https://'.$ipadd.'/live.php?c=GarvPunjabi&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="959" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/JUSPunjabi.png" group-title=" Punjabi", JUSPunjabi
https://'.$ipadd.'/live.php?c=JUSPunjabi&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1260" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/CTVN_AKD_Plus.png" group-title=" Punjabi", CTVN AKD Plus
https://'.$ipadd.'/live.php?c=Ctvn_Akd_Plus&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="715" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Punjabi.png" group-title=" Punjabi", DD Punjabi
https://'.$ipadd.'/live.php?c=DD_Punjabi&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="946" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Pitaara.png" group-title=" Punjabi", Pitaara
https://'.$ipadd.'/live.php?c=Pitaara&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1190" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/PTC_Punjabi_Gold.png" group-title=" Punjabi", PTC Punjabi Gold
https://'.$ipadd.'/live.php?c=PTC_Punjabi_Gold&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1172" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/PTC_Chak_De.png" group-title=" Punjabi", PTC Chak De
https://'.$ipadd.'/live.php?c=PTC_Chak_De&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="732" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/9X_Tashan.png" group-title=" Punjabi", 9X Tashan
https://'.$ipadd.'/live.php?c=9X_Tashan&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1188" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/PTC_DHOL_TV.png" group-title=" Punjabi", PTC DHOL TV
https://'.$ipadd.'/live.php?c=PTC_DHOL_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="742" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/mh1_Music.png" group-title=" Punjabi", mh1 (Music)
https://'.$ipadd.'/live.php?c=mh1_Music&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="903" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Only_Music.png" group-title=" Punjabi", Only Music
https://'.$ipadd.'/live.php?c=Only_Music&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="905" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/PBN_Music.png" group-title=" Punjabi", PBN Music
https://'.$ipadd.'/live.php?c=PBN_Music&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1184" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Steelbird_Music.png" group-title=" Punjabi", Steelbird Music
https://'.$ipadd.'/live.php?c=Steelbird_Music&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="952" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/GarvGurbani.jpg" group-title=" Punjabi", Garv Punjabi Gurbani
https://'.$ipadd.'/live.php?c=GarvGurbani&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1174" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Fateh_TV.png" group-title=" Punjabi", Fateh TV
https://'.$ipadd.'/live.php?c=Fateh_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="961" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/JUSOne.png" group-title=" Punjabi", JUSOne
https://'.$ipadd.'/live.php?c=JUSOne&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="654" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Punjabi_HP_Haryana.png" group-title=" Punjabi", Zee Punjabi HP Haryana
https://'.$ipadd.'/live.php?c=Zee_Punjabi_HP_Haryana&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="517" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Chardikla_Time_TV.png" group-title=" Punjabi", Chardikla Time TV
https://'.$ipadd.'/live.php?c=Chardikla_Time_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1170" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/PTC_News.png" group-title=" Punjabi", PTC News
https://'.$ipadd.'/live.php?c=PTC_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="960" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/JUS24x7.png" group-title=" Punjabi", JUS 24x7
https://'.$ipadd.'/live.php?c=JUS24x7&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1478" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Akal_Academy_Group.png" group-title=" Punjabi", Akal Academy Group
https://'.$ipadd.'/live.php?c=Akal_Academy_Group&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1527" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Haryanvi_Hits.png" group-title=" Punjabi", Haryanvi Hits
https://'.$ipadd.'/live.php?c=Haryanvi_Hits&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1545" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Punjab_School_TV.png" group-title=" Punjabi", Punjab School TV
https://'.$ipadd.'/live.php?c=Punjab_School_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1230" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/VR_360.png" group-title=" Punjabi", PTC VR
https://'.$ipadd.'/live.php?c=VR_360&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1265" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Global_Sanjh.png" group-title=" Punjabi", Global Sanjh
https://'.$ipadd.'/live.php?c=Global_Sanjh&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1281" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Manoranjan_Movies.png" group-title=" Punjabi", Manoranjan Movies
https://'.$ipadd.'/live.php?c=Manoranjan_Movies&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1291" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/ABP_Sanjha.png" group-title=" Punjabi", ABP Sanjha
https://'.$ipadd.'/live.php?c=ABP_Sanjha&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1317" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sri_Patna_Sahib.png" group-title=" Punjabi", Takht Sri Patna Sahib - Patna
https://'.$ipadd.'/live.php?c=Sri_Patna_Sahib&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1441" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Wah_Punjabi.png" group-title=" Punjabi", Wah Punjabi
https://'.$ipadd.'/live.php?c=Wah_Punjabi&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1453" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Balle_Balle_TV.png" group-title=" Punjabi", Balle Balle TV
https://'.$ipadd.'/live.php?c=Balle_Balle_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1457" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/News_Only.png" group-title=" Punjabi", News Only
https://'.$ipadd.'/live.php?c=News_Only&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1458" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Gurkebaani.png" group-title=" Punjabi", Gurkibani
https://'.$ipadd.'/live.php?c=Gurkebaani&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1534" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/World_Punjab.png" group-title=" Punjabi", World  Punjabi
https://'.$ipadd.'/live.php?c=World_Punjab&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1539" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sangat_TV.png" group-title=" Punjabi", Sangat TV
https://'.$ipadd.'/live.php?c=Sangat_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="866" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Exclusive.png" group-title=" English Entertainment", Exclusive HD
https://'.$ipadd.'/live.php?c=Jio_Exclusive&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1157" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Comedy_Central_HD.png" group-title=" English Entertainment", Comedy Central HD
https://'.$ipadd.'/live.php?c=Comedy_Central_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="1158" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Infinity_HD.png" group-title=" English Entertainment", Colors Infinity HD
https://'.$ipadd.'/live.php?c=Colors_Infinity_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="1066" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/QYOUHD.png" group-title=" English Entertainment", The Q India
https://'.$ipadd.'/live.php?c=QYOUHD&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1232" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Hi_Dost.png" group-title=" English Entertainment", Hi Dost!
https://'.$ipadd.'/live.php?c=Hi_Dost&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1325" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Infinity_SD.png" group-title=" English Entertainment", Colors Infinity SD
https://'.$ipadd.'/live.php?c=Colors_Infinity_SD&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1327" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Comedy_Central_SD.png" group-title=" English Entertainment", Comedy Central SD
https://'.$ipadd.'/live.php?c=Comedy_Central_SD&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="833" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/HBO_HD.png" group-title=" English Entertainment", HBO HD
https://'.$ipadd.'/live.php?c=HBO_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="762" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Pix_HD.png" group-title=" English Entertainment", Sony Pix HD
https://'.$ipadd.'/live.php?c=Sony_Pix_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="834" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/WB.png" group-title=" English Entertainment", WB
https://'.$ipadd.'/live.php?c=WB&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1530" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Pix_SD.png" group-title=" English Entertainment", Sony Pix SD
https://'.$ipadd.'/live.php?c=Sony_Pix_SD&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="492" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/CNN_NEWS_18.png" group-title=" English News", CNN NEWS 18
https://'.$ipadd.'/live.php?c=CNN_NEWS_18&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="858" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Republic_TV.png" group-title=" English News", Republic TV
https://'.$ipadd.'/live.php?c=Republic_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="493" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/India_Today.png" group-title=" English News", India Today
https://'.$ipadd.'/live.php?c=India_Today&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="142" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/BBC_World_News.png" group-title=" English News", BBC World News
https://'.$ipadd.'/live.php?c=BBC_World_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="495" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/News_X.png" group-title=" English News", News X
https://'.$ipadd.'/live.php?c=News_X&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="193" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/CNN.png" group-title=" English News", CNN
https://'.$ipadd.'/live.php?c=CNN&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="494" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/AL_Jazeera.png" group-title=" English News", AL Jazeera
https://'.$ipadd.'/live.php?c=AL_Jazeera&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="412" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Wion.png" group-title=" English News", Wion
https://'.$ipadd.'/live.php?c=Wion&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="496" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/dw.png" group-title=" English News", dw
https://'.$ipadd.'/live.php?c=dw&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="885" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/TV_5_Monde.png" group-title=" English News", TV5 Monde
https://'.$ipadd.'/live.php?c=TV_5_Monde&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="656" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/News_9.png" group-title=" English News", News 9
https://'.$ipadd.'/live.php?c=News_9&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="907" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/GoodNews_Channel.png" group-title=" English News", GoodNews Channel
https://'.$ipadd.'/live.php?c=GoodNews_Channel&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="764" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Channel_News_Asia_International.png" group-title=" English News", Channel News Asia International
https://'.$ipadd.'/live.php?c=Channel_News_Asia_International&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="421" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Goa365.png" group-title=" English News", GOA 365
https://'.$ipadd.'/live.php?c=Goa365&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="837" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Euro_News.png" group-title=" English News", Euro News
https://'.$ipadd.'/live.php?c=Euro_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1102" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/RDX_News.png" group-title=" English News", RDX Goa
https://'.$ipadd.'/live.php?c=RDX_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="787" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/CVR_English.png" group-title=" English News", CVR English
https://'.$ipadd.'/live.php?c=CVR_English&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1338" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/RT_TV.png" group-title=" English News", RT TV
https://'.$ipadd.'/live.php?c=RT_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="636" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Polimer_News.png" group-title=" Tamil", Polimer News
https://'.$ipadd.'/live.php?c=Polimer_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="628" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Tamil.png" group-title=" Tamil", Zee Tamil
https://'.$ipadd.'/live.php?c=Zee_Tamil&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="429" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Tamil_HD.png" group-title=" Tamil", Colors Tamil HD
https://'.$ipadd.'/live.php?c=Colors_Tamil_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="830" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Thanthi_TV.png" group-title=" Tamil", Thanthi TV
https://'.$ipadd.'/live.php?c=Thanthi_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="420" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Jaya_Max.png" group-title=" Tamil", Jaya Max
https://'.$ipadd.'/live.php?c=Jaya_Max&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="546" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Tamil.png" group-title=" Tamil", Nick Tamil
https://'.$ipadd.'/live.php?c=Nick_Tamil&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="542" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Pogo_Tamil.png" group-title=" Tamil", Pogo Tamil
https://'.$ipadd.'/live.php?c=Pogo_Tamil&q=800&e=junk.m3u8
';

fwrite($playlist, $modlist);


$modlist='
#EXTINF: -1 tvg-id="817" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Cartoon_Network_Tamil.png" group-title=" Tamil", Cartoon Network Tamil
https://'.$ipadd.'/live.php?c=Cartoon_Network_Tamil&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="569" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Channel_Tamil.png" group-title=" Tamil", D Tamil
https://'.$ipadd.'/live.php?c=Discovery_Channel_Tamil&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="579" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/History_18_Tamil.png" group-title=" Tamil", History TV18 HD Tamil
https://'.$ipadd.'/live.php?c=History_18_Tamil&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="814" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Travel_XP_Tamil.png" group-title=" Tamil", Travel XP Tamil
https://'.$ipadd.'/live.php?c=Travel_XP_Tamil&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="853" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_BBC_Earth_HD_Tamil.png" group-title=" Tamil", Sony BBC Earth HD Tamil
https://'.$ipadd.'/live.php?c=Sony_BBC_Earth_HD_Tamil&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="937" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/SaiTV.png" group-title=" Tamil", Sai TV
https://'.$ipadd.'/live.php?c=SaiTV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="835" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Angel_TV_HD.png" group-title=" Tamil", Angel TV HD
https://'.$ipadd.'/live.php?c=Angel_TV_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="419" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Jaya_TV_HD.png" group-title=" Tamil", Jaya TV HD
https://'.$ipadd.'/live.php?c=Jaya_TV_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="847" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/MK_TV.png" group-title=" Tamil", MK TV
https://'.$ipadd.'/live.php?c=MK_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="857" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Vendhar_TV.png" group-title=" Tamil", Vendhar TV
https://'.$ipadd.'/live.php?c=Vendhar_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="796" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Peppers_TV.png" group-title=" Tamil", Peppers TV
https://'.$ipadd.'/live.php?c=Peppers_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="824" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Puthu_Yugam.png" group-title=" Tamil", Puthu Yugam
https://'.$ipadd.'/live.php?c=Puthu_Yugam&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="705" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Polimer_TV.png" group-title=" Tamil", Polimer TV
https://'.$ipadd.'/live.php?c=Polimer_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="707" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_TV.png" group-title=" Tamil", Raj TV
https://'.$ipadd.'/live.php?c=Raj_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="708" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Makkal_TV.png" group-title=" Tamil", Makkal TV
https://'.$ipadd.'/live.php?c=Makkal_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="711" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Captain_tv.png" group-title=" Tamil", Captain tv
https://'.$ipadd.'/live.php?c=Captain_tv&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="726" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD5_Podhigai.png" group-title=" Tamil", DD5 Podhigai
https://'.$ipadd.'/live.php?c=DD5_Podhigai&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="727" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Vasanth_TV.png" group-title=" Tamil", Vasanth TV
https://'.$ipadd.'/live.php?c=Vasanth_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="417" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/J_Movies.png" group-title=" Tamil", J Movies
https://'.$ipadd.'/live.php?c=J_Movies&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="683" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_Digital_Plus.png" group-title=" Tamil", Raj Digital Plus
https://'.$ipadd.'/live.php?c=Raj_Digital_Plus&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="677" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Puthiya_Thalimurai.png" group-title=" Tamil", Puthiya Thalimurai
https://'.$ipadd.'/live.php?c=Puthiya_Thalimurai&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="673" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/News7_Tamil.png" group-title=" Tamil", News7 Tamil
https://'.$ipadd.'/live.php?c=News7_Tamil&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="615" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/News_18_Tamilnadu.png" group-title=" Tamil", News 18 Tamilnadu
https://'.$ipadd.'/live.php?c=News_18_Tamilnadu&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="845" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/MK_Music.png" group-title=" Tamil", MK Music
https://'.$ipadd.'/live.php?c=MK_Music&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="803" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Tunes_6.png" group-title=" Tamil", Tunes 6
https://'.$ipadd.'/live.php?c=Tunes_6&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="748" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_Musix.png" group-title=" Tamil", Raj Musix
https://'.$ipadd.'/live.php?c=Raj_Musix&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="749" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sahana_Music.png" group-title=" Tamil", Sahana Music
https://'.$ipadd.'/live.php?c=Sahana_Music&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="418" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Jaya_Plus.png" group-title=" Tamil", Jaya Plus
https://'.$ipadd.'/live.php?c=Jaya_Plus&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="826" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Malai_Murasu.png" group-title=" Tamil", Malai Murasu
https://'.$ipadd.'/live.php?c=Malai_Murasu&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="290" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/sonic_Tamil.png" group-title=" Tamil", sonic Tamil
https://'.$ipadd.'/live.php?c=sonic_Tamil&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="550" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Kids_Tamil.png" group-title=" Tamil", Discovery Kids Tamil
https://'.$ipadd.'/live.php?c=Discovery_Kids_Tamil&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="603" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Nambikkai.png" group-title=" Tamil", Nambikkai
https://'.$ipadd.'/live.php?c=Nambikkai&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="645" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Captain_News.png" group-title=" Tamil", Captain News
https://'.$ipadd.'/live.php?c=Captain_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="671" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sathiyam.png" group-title=" Tamil", Sathiyam TV
https://'.$ipadd.'/live.php?c=Sathiyam&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="913" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Lotus_News.png" group-title=" Tamil", Lotus News
https://'.$ipadd.'/live.php?c=Lotus_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="843" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Madhimugam_TV.png" group-title=" Tamil", Madhimugam TV
https://'.$ipadd.'/live.php?c=Madhimugam_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="970" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Win_TV.png" group-title=" Tamil", Win TV
https://'.$ipadd.'/live.php?c=Win_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="767" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_News_24x7.png" group-title=" Tamil", Raj News 24x7
https://'.$ipadd.'/live.php?c=Raj_News_24x7&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="873" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Yay_Tamil.png" group-title=" Tamil", Sony Yay Tamil
https://'.$ipadd.'/live.php?c=Sony_Yay_Tamil&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1081" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/CN_HD_Tamil.png" group-title=" Tamil", CN HD+ Tamil
https://'.$ipadd.'/live.php?c=CN_HD_Tamil&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1209" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Kalaignar_TV.png" group-title=" Tamil", Kalaignar TV
https://'.$ipadd.'/live.php?c=Kalaignar_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1210" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Kalaignar_Seithigal_.png" group-title=" Tamil", Kalaignar Seithigal
https://'.$ipadd.'/live.php?c=Kalaignar_Seithigal_&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1219" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Animal_Planet_HD_Tamil.png" group-title=" Tamil", Animal Planet HD Tamil
https://'.$ipadd.'/live.php?c=Animal_Planet_HD_Tamil&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1255" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Aastha_Tamil.png" group-title=" Tamil", Aastha Tamil
https://'.$ipadd.'/live.php?c=Aastha_Tamil&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1417" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/SVBC2.png" group-title=" Tamil", SVBC2
https://'.$ipadd.'/live.php?c=SVBC2&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1438" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Velukkudi_Discourses.png" group-title=" Tamil", Velukkudi Discourses
https://'.$ipadd.'/live.php?c=Velukkudi_Discourses&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1515" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/News_J.png" group-title=" Tamil", News J
https://'.$ipadd.'/live.php?c=News_J&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1537" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/RadheKrishna_TV.png" group-title=" Tamil", RadheKrishna TV
https://'.$ipadd.'/live.php?c=RadheKrishna_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="618" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/TV9_Telugu_News.png" group-title=" Telugu", TV9 Telugu
https://'.$ipadd.'/live.php?c=TV9_Telugu_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="638" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Telugu.png" group-title=" Telugu", Zee Telugu
https://'.$ipadd.'/live.php?c=Zee_Telugu&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="413" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Cinemalu.png" group-title=" Telugu", Zee Cinemalu
https://'.$ipadd.'/live.php?c=Zee_Cinemalu&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="629" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Telugu.png" group-title=" Telugu", ETV Telugu
https://'.$ipadd.'/live.php?c=ETV_Telugu&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="632" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sakshi_tv.png" group-title=" Telugu", Sakshi tv
https://'.$ipadd.'/live.php?c=Sakshi_tv&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="646" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/NTV.png" group-title=" Telugu", NTV
https://'.$ipadd.'/live.php?c=NTV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="543" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Telugu.png" group-title=" Telugu", Nick Telugu
https://'.$ipadd.'/live.php?c=Nick_Telugu&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="576" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Channel_Telugu.png" group-title=" Telugu", Discovery Channel Telugu
https://'.$ipadd.'/live.php?c=Discovery_Channel_Telugu&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="577" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/History_18_Telugu.png" group-title=" Telugu", History TV18 HD Telugu
https://'.$ipadd.'/live.php?c=History_18_Telugu&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="854" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_BBC_Earth_HD_Telugu.png" group-title=" Telugu", Sony BBC Earth HD Telugu
https://'.$ipadd.'/live.php?c=Sony_BBC_Earth_HD_Telugu&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="565" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Abhiruchi.png" group-title=" Telugu", ETV Abhiruchi
https://'.$ipadd.'/live.php?c=ETV_Abhiruchi&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="776" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Bhakti_TV.png" group-title=" Telugu", Bhakti TV
https://'.$ipadd.'/live.php?c=Bhakti_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="598" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sri_Venkateshwar_Bhakti.png" group-title=" Telugu", Sri Venkateshwar Bhakti
https://'.$ipadd.'/live.php?c=Sri_Venkateshwar_Bhakti&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="772" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/CVR_OM_Spiritual.png" group-title=" Telugu", CVR OM Spiritual
https://'.$ipadd.'/live.php?c=CVR_OM_Spiritual&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="777" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Aradhana_TV.png" group-title=" Telugu", Aradhana TV
https://'.$ipadd.'/live.php?c=Aradhana_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1591" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Saileela_TV_Telugu.png" group-title=" Telugu", Saileela TV Telugu
https://'.$ipadd.'/live.php?c=Saileela_TV_Telugu&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="955" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Hindu_Dharmam.png" group-title=" Telugu", Hindu Dharmam
https://'.$ipadd.'/live.php?c=Hindu_Dharmam&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="607" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Subhavartha_TV.png" group-title=" Telugu", Subhavartha TV
https://'.$ipadd.'/live.php?c=Subhavartha_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="934" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Divya_Vani.png" group-title=" Telugu", Divya Vani
https://'.$ipadd.'/live.php?c=Divya_Vani&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="977" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Calvary.png" group-title=" Telugu", Calvary
https://'.$ipadd.'/live.php?c=Calvary&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="692" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Plus.png" group-title=" Telugu", ETV Plus
https://'.$ipadd.'/live.php?c=ETV_Plus&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="706" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Saptagiri.png" group-title=" Telugu", DD Saptagiri
https://'.$ipadd.'/live.php?c=DD_Saptagiri&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="734" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Vissa_TV.png" group-title=" Telugu", Vissa TV
https://'.$ipadd.'/live.php?c=Vissa_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="252" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Cinema.png" group-title=" Telugu", ETV Cinema
https://'.$ipadd.'/live.php?c=ETV_Cinema&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="666" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/ABN_Andhra_Jyothi.png" group-title=" Telugu", ABN Andhra Jyothi
https://'.$ipadd.'/live.php?c=ABN_Andhra_Jyothi&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="769" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/V6_News.png" group-title=" Telugu", V6 News
https://'.$ipadd.'/live.php?c=V6_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="614" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Andhra_pradesh.png" group-title=" Telugu", ETV Andhra pradesh
https://'.$ipadd.'/live.php?c=ETV_Andhra_pradesh&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="737" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_Music_Telugu.png" group-title=" Telugu", Raj Music Telugu
https://'.$ipadd.'/live.php?c=Raj_Music_Telugu&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="832" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/10_TV.png" group-title=" Telugu", 10 TV
https://'.$ipadd.'/live.php?c=10_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="668" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/TV_5_News.png" group-title=" Telugu", TV 5 News
https://'.$ipadd.'/live.php?c=TV_5_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="784" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/CVR_News.png" group-title=" Telugu", CVR News
https://'.$ipadd.'/live.php?c=CVR_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="667" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/T_News.png" group-title=" Telugu", T News
https://'.$ipadd.'/live.php?c=T_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="630" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Telangana.png" group-title=" Telugu", ETV Telangana
https://'.$ipadd.'/live.php?c=ETV_Telangana&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="800" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Maha_News.png" group-title=" Telugu", Maha News
https://'.$ipadd.'/live.php?c=Maha_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="665" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/HM_TV.png" group-title=" Telugu", HM TV
https://'.$ipadd.'/live.php?c=HM_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="166" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Cartoon_Network_Telugu.png" group-title=" Telugu", Cartoon Network Telugu
https://'.$ipadd.'/live.php?c=Cartoon_Network_Telugu&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="570" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Life.png" group-title=" Telugu", ETV Life
https://'.$ipadd.'/live.php?c=ETV_Life&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="775" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Vanitha.png" group-title=" Telugu", Vanitha
https://'.$ipadd.'/live.php?c=Vanitha&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="774" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/CVR_Health.png" group-title=" Telugu", CVR Health
https://'.$ipadd.'/live.php?c=CVR_Health&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="581" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/TV1.png" group-title=" Telugu", TV1
https://'.$ipadd.'/live.php?c=TV1&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="790" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/I_News.png" group-title=" Telugu", I News
https://'.$ipadd.'/live.php?c=I_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="664" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_News_Telugu.png" group-title=" Telugu", Raj News Telugu
https://'.$ipadd.'/live.php?c=Raj_News_Telugu&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="874" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Yay_Telugu.png" group-title=" Telugu", Sony Yay Telugu
https://'.$ipadd.'/live.php?c=Sony_Yay_Telugu&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1080" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/CN_HD_Telugu.png" group-title=" Telugu", CN HD+ Telugu
https://'.$ipadd.'/live.php?c=CN_HD_Telugu&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1461" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Vidya.png" group-title=" Telugu", Vidya
https://'.$ipadd.'/live.php?c=Vidya&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1462" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Nipuna.png" group-title=" Telugu", Nipuna
https://'.$ipadd.'/live.php?c=Nipuna&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1242" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sonic_Telugu.png" group-title=" Telugu", Sonic Telugu
https://'.$ipadd.'/live.php?c=Sonic_Telugu&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1254" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Aastha_Telugu.png" group-title=" Telugu", Aastha Telugu
https://'.$ipadd.'/live.php?c=Aastha_Telugu&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1274" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Studio_One.png" group-title=" Telugu", Studio One
https://'.$ipadd.'/live.php?c=Studio_One&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1277" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Nireekshana_TV.png" group-title=" Telugu", Nireekshana TV
https://'.$ipadd.'/live.php?c=Nireekshana_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="196" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Gujarati.png" group-title=" Gujarati", Colors Gujarati
https://'.$ipadd.'/live.php?c=Colors_Gujarati&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="886" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Lakshya_TV.png" group-title=" Gujarati", Lakshya TV
https://'.$ipadd.'/live.php?c=Lakshya_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="714" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Girnar.png" group-title=" Gujarati", DD Girnar
https://'.$ipadd.'/live.php?c=DD_Girnar&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="620" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_News_Gujarati.png" group-title=" Gujarati", News18 Gujarati
https://'.$ipadd.'/live.php?c=ETV_News_Gujarati&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="616" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Tv_9_Gujarat.png" group-title=" Gujarati", Tv 9 Gujarat
https://'.$ipadd.'/live.php?c=Tv_9_Gujarat&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="641" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/ABP_Asmita.png" group-title=" Gujarati", ABP Asmita
https://'.$ipadd.'/live.php?c=ABP_Asmita&q=800&e=junk.m3u8
';

fwrite($playlist, $modlist);


$modlist='
#EXTINF: -1 tvg-id="642" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/VTV_Gujarati.png" group-title=" Gujarati", VTV Gujarati
https://'.$ipadd.'/live.php?c=VTV_Gujarati&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="782" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sandesh_News.png" group-title=" Gujarati", Sandesh News
https://'.$ipadd.'/live.php?c=Sandesh_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="929" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_24_Kalak.png" group-title=" Gujarati", Zee 24 Kalak
https://'.$ipadd.'/live.php?c=Zee_24_Kalak&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="490" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/CNBC_Bazaar_MNO.png" group-title=" Gujarati", CNBC Bazaar (MNO)
https://'.$ipadd.'/live.php?c=CNBC_Bazaar_MNO&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1187" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Valambhakti.png" group-title=" Gujarati", Valam TV
https://'.$ipadd.'/live.php?c=Valambhakti&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1186" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Kartavya_Tv.png" group-title=" Gujarati", Kartavya TV
https://'.$ipadd.'/live.php?c=Kartavya_Tv&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1099" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Hamari_Sanskruti_TV.png" group-title=" Gujarati", Hamari Sanskruti
https://'.$ipadd.'/live.php?c=Hamari_Sanskruti_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1069" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_1.png" group-title=" Gujarati", Vande Gujarat 1
https://'.$ipadd.'/live.php?c=Vande_Gujarat_1&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1070" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_2.png" group-title=" Gujarati", Vande Gujarat 2
https://'.$ipadd.'/live.php?c=Vande_Gujarat_2&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1082" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_3.png" group-title=" Gujarati", Vande Gujarat 3
https://'.$ipadd.'/live.php?c=Vande_Gujarat_3&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1071" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_4.png" group-title=" Gujarati", Vande Gujarat 4
https://'.$ipadd.'/live.php?c=Vande_Gujarat_4&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1083" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_5.png" group-title=" Gujarati", Vande Gujarat 5
https://'.$ipadd.'/live.php?c=Vande_Gujarat_5&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1084" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_6.png" group-title=" Gujarati", Vande Gujarat 6
https://'.$ipadd.'/live.php?c=Vande_Gujarat_6&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1085" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_7.png" group-title=" Gujarati", Vande Gujarat 7
https://'.$ipadd.'/live.php?c=Vande_Gujarat_7&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1086" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_8.png" group-title=" Gujarati", Vande Gujarat 8
https://'.$ipadd.'/live.php?c=Vande_Gujarat_8&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1087" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_9.png" group-title=" Gujarati", Vande Gujarat 9
https://'.$ipadd.'/live.php?c=Vande_Gujarat_9&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1088" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_10.png" group-title=" Gujarati", Vande Gujarat 10
https://'.$ipadd.'/live.php?c=Vande_Gujarat_10&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1089" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_11.png" group-title=" Gujarati", Vande Gujarat 11
https://'.$ipadd.'/live.php?c=Vande_Gujarat_11&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1090" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_12.png" group-title=" Gujarati", Vande Gujarat 12
https://'.$ipadd.'/live.php?c=Vande_Gujarat_12&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1091" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_13.png" group-title=" Gujarati", Vande Gujarat 13
https://'.$ipadd.'/live.php?c=Vande_Gujarat_13&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1092" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_14.png" group-title=" Gujarati", Vande Gujarat 14
https://'.$ipadd.'/live.php?c=Vande_Gujarat_14&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1093" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_15.png" group-title=" Gujarati", Vande Gujarat 15
https://'.$ipadd.'/live.php?c=Vande_Gujarat_15&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1094" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_16.png" group-title=" Gujarati", Vande Gujarat 16
https://'.$ipadd.'/live.php?c=Vande_Gujarat_16&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="643" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/GS_TV.png" group-title=" Gujarati", GS TV
https://'.$ipadd.'/live.php?c=GS_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="944" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Mantavya_News.png" group-title=" Gujarati", Mantavya News
https://'.$ipadd.'/live.php?c=Mantavya_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1343" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Gujarati.png" group-title=" Gujarati", Nick Gujarati
https://'.$ipadd.'/live.php?c=Nick_Gujarati&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1347" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sonic_Gujarati.png" group-title=" Gujarati", Sonic Gujarati
https://'.$ipadd.'/live.php?c=Sonic_Gujarati&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1227" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Digishala.png" group-title=" Gujarati", Digishala
https://'.$ipadd.'/live.php?c=Digishala&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1459" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Home_Learning_Gujarat1.png" group-title=" Gujarati", Home Learning Gujarat Standard-10
https://'.$ipadd.'/live.php?c=Home_Learning_Gujarat1&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1454" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Shiksha_TV.png" group-title=" Gujarati", Shiksha TV
https://'.$ipadd.'/live.php?c=Shiksha_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="503" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/IBC-24.png" group-title=" Malayalam", IBC 24
https://'.$ipadd.'/live.php?c=IBC24&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="563" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Kaumudy_TV.png" group-title=" Malayalam", Kaumudy TV
https://'.$ipadd.'/live.php?c=Kaumudy_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="844" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Mazavali_Manorama_HD.png" group-title=" Malayalam", Mazavali Manorama HD
https://'.$ipadd.'/live.php?c=Mazavali_Manorama_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="634" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Flower_TV.png" group-title=" Malayalam", Flower TV
https://'.$ipadd.'/live.php?c=Flower_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="648" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Mazhavil_Manorama.png" group-title=" Malayalam", Mazhavil Manorama
https://'.$ipadd.'/live.php?c=Mazhavil_Manorama&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="699" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Malayalam.png" group-title=" Malayalam", DD Malayalam
https://'.$ipadd.'/live.php?c=DD_Malayalam&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="710" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Kairali_TV.png" group-title=" Malayalam", Kairali TV
https://'.$ipadd.'/live.php?c=Kairali_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="723" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Amrita_TV.png" group-title=" Malayalam", Amrita TV
https://'.$ipadd.'/live.php?c=Amrita_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="725" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Kairali_People_TV.PNG" group-title=" Malayalam", Kairali News
https://'.$ipadd.'/live.php?c=Kairali_People_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="731" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Kairali_WE_TV.png" group-title=" Malayalam", Kairali WE TV
https://'.$ipadd.'/live.php?c=Kairali_WE_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="662" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Manorama_News.png" group-title=" Malayalam", Manorama News
https://'.$ipadd.'/live.php?c=Manorama_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="780" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Mathrubhumi_News.png" group-title=" Malayalam", Mathrubhumi News
https://'.$ipadd.'/live.php?c=Mathrubhumi_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="786" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Kappa_TV.png" group-title=" Malayalam", Kappa TV
https://'.$ipadd.'/live.php?c=Kappa_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="739" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_Music_Malayalam.png" group-title=" Malayalam", Raj Music Malayalam
https://'.$ipadd.'/live.php?c=Raj_Music_Malayalam&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="910" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Media_One_TV.png" group-title=" Malayalam", Media One TV
https://'.$ipadd.'/live.php?c=Media_One_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="810" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Janam_TV.png" group-title=" Malayalam", Janam TV
https://'.$ipadd.'/live.php?c=Janam_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="965" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/News_18_Kerala.png" group-title=" Malayalam", News 18 Kerala
https://'.$ipadd.'/live.php?c=News_18_Kerala&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="953" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Propex_TV.png" group-title=" Malayalam", Propex TV
https://'.$ipadd.'/live.php?c=Propex_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="797" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sakhi_TV.png" group-title=" Malayalam", testii
https://'.$ipadd.'/live.php?c=Sakhi_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="606" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Shalom.png" group-title=" Malayalam", Shalom
https://'.$ipadd.'/live.php?c=Shalom&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="465" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Jaihind_tv.png" group-title=" Malayalam", Jaihind tv
https://'.$ipadd.'/live.php?c=Jaihind_tv&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="842" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Jeevan_TV.png" group-title=" Malayalam", Jeevan TV
https://'.$ipadd.'/live.php?c=Jeevan_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="650" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_News_Malayalam.png" group-title=" Malayalam", Raj News Malayalam
https://'.$ipadd.'/live.php?c=Raj_News_Malayalam&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="443" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Asianet.png" group-title=" Malayalam", Asianet HD
https://'.$ipadd.'/live.php?c=Asianet&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="181" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Asianet_Plus.png" group-title=" Malayalam", Asianet Plus HD
https://'.$ipadd.'/live.php?c=Asianet_Plus&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="459" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Asianet_Movies_HD.png" group-title=" Malayalam", Asianet Movies HD
https://'.$ipadd.'/live.php?c=Asianet_Movies_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="1340" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Malayalam.png" group-title=" Malayalam", Nick Malayalam
https://'.$ipadd.'/live.php?c=Nick_Malayalam&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1344" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sonic_Malayalam.png" group-title=" Malayalam", Sonic Malayalam
https://'.$ipadd.'/live.php?c=Sonic_Malayalam&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1429" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/KITE_Victers.png" group-title=" Malayalam", KITE VICTERS
https://'.$ipadd.'/live.php?c=KITE_Victers&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1552" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Malnadu_TV.png" group-title=" Malayalam", Malanadu TV
https://'.$ipadd.'/live.php?c=Malnadu_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1221" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Rajyoga_Malayalam.png" group-title=" Malayalam", Rajyoga Malayalam
https://'.$ipadd.'/live.php?c=Rajyoga_Malayalam&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1250" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/TWENTY_FOUR_NEWS.png" group-title=" Malayalam", Twenty Four News
https://'.$ipadd.'/live.php?c=TWENTY_FOUR_NEWS&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1284" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Vignesh_TV.PNG" group-title=" Malayalam", Vignesh TV
https://'.$ipadd.'/live.php?c=Vignesh_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1408" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Reporter_TV.png" group-title=" Malayalam", Reporter TV
https://'.$ipadd.'/live.php?c=Reporter_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1455" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Janapriyam_News.png" group-title=" Malayalam", Janapriyam
https://'.$ipadd.'/live.php?c=Janapriyam_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1514" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Kannur_one.png" group-title=" Malayalam", Kannur One
https://'.$ipadd.'/live.php?c=Kannur_one&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="619" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/TV9_Karnataka.png" group-title=" Kannada", TV9 Karnataka
https://'.$ipadd.'/live.php?c=TV9_Karnataka&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="757" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Kannada_HD.png" group-title=" Kannada", Colors Kannada HD
https://'.$ipadd.'/live.php?c=Colors_Kannada_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="689" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Kannada.png" group-title=" Kannada", Zee Kannada
https://'.$ipadd.'/live.php?c=Zee_Kannada&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="778" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Public_TV.png" group-title=" Kannada", Public TV
https://'.$ipadd.'/live.php?c=Public_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="938" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/BTV.png" group-title=" Kannada", BTV
https://'.$ipadd.'/live.php?c=BTV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="773" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Public_Music.png" group-title=" Kannada", Public Music
https://'.$ipadd.'/live.php?c=Public_Music&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1073" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Samara_News.png" group-title=" Kannada", Samara News
https://'.$ipadd.'/live.php?c=Samara_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1075" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Ayush_TV.png" group-title=" Kannada", Ayush TV
https://'.$ipadd.'/live.php?c=Ayush_TV&q=800&e=junk.m3u8
';

fwrite($playlist, $modlist);


$modlist='
#EXTINF: -1 tvg-id="829" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sri_Sankara.png" group-title=" Kannada", Sri Sankara
https://'.$ipadd.'/live.php?c=Sri_Sankara&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="785" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Super.png" group-title=" Kannada", Colors Super
https://'.$ipadd.'/live.php?c=Colors_Super&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="713" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD9_chandana_kannada.png" group-title=" Kannada", DD9 chandana (kannada)
https://'.$ipadd.'/live.php?c=DD9_chandana_kannada&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="730" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Kasturi.png" group-title=" Kannada", Kasturi
https://'.$ipadd.'/live.php?c=Kasturi&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1144" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Namma_TV.png" group-title=" Kannada", Namma TV
https://'.$ipadd.'/live.php?c=Namma_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="923" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Dighvijay_TV.png" group-title=" Kannada", Dighvijay TV
https://'.$ipadd.'/live.php?c=Dighvijay_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="653" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Kannada_News.png" group-title=" Kannada", News18 Kannada
https://'.$ipadd.'/live.php?c=ETV_Kannada_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="956" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/TV_5_Kannada.png" group-title=" Kannada", TV 5 Kannada
https://'.$ipadd.'/live.php?c=TV_5_Kannada&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="743" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_Music_Kannada.png" group-title=" Kannada", Raj Music Kannada
https://'.$ipadd.'/live.php?c=Raj_Music_Kannada&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="954" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Prajaa_TV.png" group-title=" Kannada", Prajaa TV
https://'.$ipadd.'/live.php?c=Prajaa_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="651" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_News_Kannada.png" group-title=" Kannada", Raj News Kannada
https://'.$ipadd.'/live.php?c=Raj_News_Kannada&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="370" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Suvarna.png" group-title=" Kannada", Suvarna HD
https://'.$ipadd.'/live.php?c=Suvarna&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="458" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Asianet_Suvarna_HD.png" group-title=" Kannada", Suvarna Plus HD
https://'.$ipadd.'/live.php?c=Asianet_Suvarna_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="1557" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Express_TV.png" group-title=" Kannada", Express TV
https://'.$ipadd.'/live.php?c=Express_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1558" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Express_TV_Shikshana.png" group-title=" Kannada", Express Shikshana
https://'.$ipadd.'/live.php?c=Express_TV_Shikshana&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1243" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sonic_Kannada.png" group-title=" Kannada", Sonic Kannada
https://'.$ipadd.'/live.php?c=Sonic_Kannada&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1244" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Kannada.png" group-title=" Kannada", Nick Kannada
https://'.$ipadd.'/live.php?c=Nick_Kannada&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1256" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Aastha_Kannada.png" group-title=" Kannada", Aastha Kannada
https://'.$ipadd.'/live.php?c=Aastha_Kannada&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1464" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Daijiworld_TV_24X7.png" group-title=" Kannada", Daijiworld TV 24x7
https://'.$ipadd.'/live.php?c=Daijiworld_TV_24X7&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1555" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/News_First.png" group-title=" Kannada", News First
https://'.$ipadd.'/live.php?c=News_First&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="672" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/ABP_Ananda.png" group-title=" Bengali", ABP Ananda
https://'.$ipadd.'/live.php?c=ABP_Ananda&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="625" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Bangla.png" group-title=" Bengali", Zee Bangla
https://'.$ipadd.'/live.php?c=Zee_Bangla&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="756" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Bengali_HD.png" group-title=" Bengali", Colors Bengali HD
https://'.$ipadd.'/live.php?c=Colors_Bengali_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="464" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/24_Ghanta_TV.png" group-title=" Bengali", 24 Ghanta TV
https://'.$ipadd.'/live.php?c=24_Ghanta_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="740" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sangeet_Bangla.png" group-title=" Bengali", Sangeet Bangla
https://'.$ipadd.'/live.php?c=Sangeet_Bangla&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="573" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Channel_Bengali.png" group-title=" Bengali", Discovery Channel Bengali
https://'.$ipadd.'/live.php?c=Discovery_Channel_Bengali&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="690" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Bangla.png" group-title=" Bengali", DD Bangla
https://'.$ipadd.'/live.php?c=DD_Bangla&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="697" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_aath.png" group-title=" Bengali", Sony aath
https://'.$ipadd.'/live.php?c=Sony_aath&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="698" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Aakaash_bangla.png" group-title=" Bengali", Aakash Aath
https://'.$ipadd.'/live.php?c=Aakaash_bangla&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="685" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Bangla_Cinema.png" group-title=" Bengali", Zee Bangla Cinema
https://'.$ipadd.'/live.php?c=Zee_Bangla_Cinema&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1101" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Amaar_Cinema.png" group-title=" Bengali", Amaar Cinema
https://'.$ipadd.'/live.php?c=Amaar_Cinema&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="717" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Bangla_News.png" group-title=" Bengali", News18 Bangla News
https://'.$ipadd.'/live.php?c=ETV_Bangla_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="687" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/News_Time_TV.png" group-title=" Bengali", News Time TV
https://'.$ipadd.'/live.php?c=News_Time_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="976" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Bangla_Time.png" group-title=" Bengali", Bangla Time
https://'.$ipadd.'/live.php?c=Bangla_Time&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="950" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/RPLUS.png" group-title=" Bengali", R Plus
https://'.$ipadd.'/live.php?c=RPLUS&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1149" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sadhna_Aryan_News.png" group-title=" Bengali", Sadhna News TV
https://'.$ipadd.'/live.php?c=Sadhna_Aryan_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1341" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Bangla.png" group-title=" Bengali", Nick Bangla
https://'.$ipadd.'/live.php?c=Nick_Bangla&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1345" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sonic_Bangla.png" group-title=" Bengali", Sonic Bangla
https://'.$ipadd.'/live.php?c=Sonic_Bangla&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1560" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/35mm.png" group-title=" Bengali", 35mm
https://'.$ipadd.'/live.php?c=35mm&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1708" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/SKY_12.png" group-title=" Bengali", SKY 12
https://'.$ipadd.'/live.php?c=SKY_12&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1561" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sristi_TV.png" group-title=" Bengali", Sristi TV
https://'.$ipadd.'/live.php?c=Sristi_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1246" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Tripura_News.png" group-title=" Bengali", Headlines Tripura
https://'.$ipadd.'/live.php?c=Tripura_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1261" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Calcutta_News.png" group-title=" Bengali", Calcutta News
https://'.$ipadd.'/live.php?c=Calcutta_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1253" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Kolkata_LIVE.png" group-title=" Bengali", Kolkata Live
https://'.$ipadd.'/live.php?c=Kolkata_Live&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1264" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Kolkata_TV.png" group-title=" Bengali", Kolkata TV
https://'.$ipadd.'/live.php?c=Kolkata_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1282" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Khusboo_TV.png" group-title=" Bengali", Khushboo TV
https://'.$ipadd.'/live.php?c=Khusboo_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1285" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Orange_TV.png" group-title=" Bengali", Orange TV
https://'.$ipadd.'/live.php?c=Orange_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1494" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Bhoomi_TV.png" group-title=" Bengali", BHOOMI 24x7
https://'.$ipadd.'/live.php?c=Bhoomi_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1155" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/BBC_Marathi.png" group-title=" Marathi", BBC Marathi
https://'.$ipadd.'/live.php?c=BBC_Marathi&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="612" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/ABP_Majha.png" group-title=" Marathi", ABP Majha
https://'.$ipadd.'/live.php?c=ABP_Majha&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="445" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Marathi.png" group-title=" Marathi", Zee Marathi
https://'.$ipadd.'/live.php?c=Zee_Marathi&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="755" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Marathi_HD.png" group-title=" Marathi", Colors Marathi HD
https://'.$ipadd.'/live.php?c=Colors_Marathi_HD&q=1200&e=junk.m3u8
#EXTINF: -1 tvg-id="414" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Yuva.png" group-title=" Marathi", Zee Yuva
https://'.$ipadd.'/live.php?c=Zee_Yuva&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="617" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/TV9_Maharashtra.png" group-title=" Marathi", TV9 Maharashtra
https://'.$ipadd.'/live.php?c=TV9_Maharashtra&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="442" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_24_Taas.png" group-title=" Marathi", Zee 24 Taas
https://'.$ipadd.'/live.php?c=Zee_24_Taas&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="691" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Saam_Tv.png" group-title=" Marathi", Saam Tv
https://'.$ipadd.'/live.php?c=Saam_Tv&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1146" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Marathi_SD.png" group-title=" Marathi", Sony Marathi SD
https://'.$ipadd.'/live.php?c=Sony_Marathi_SD&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="695" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Sahayadri.png" group-title=" Marathi", DD Sahayadri
https://'.$ipadd.'/live.php?c=DD_Sahayadri&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="736" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Maiboli.png" group-title=" Marathi", Maiboli
https://'.$ipadd.'/live.php?c=Maiboli&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1151" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Rangamanch.png" group-title=" Marathi", Rangamanch
https://'.$ipadd.'/live.php?c=Rangamanch&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="153" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Talkies.png" group-title=" Marathi", Zee Talkies
https://'.$ipadd.'/live.php?c=Zee_Talkies&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="738" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Fakt_Marathi.png" group-title=" Marathi", Fakt Marathi
https://'.$ipadd.'/live.php?c=Fakt_Marathi&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="232" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/IBN_Lokmat.png" group-title=" Marathi", IBN Lokmat
https://'.$ipadd.'/live.php?c=IBN_Lokmat&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="735" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sangeet_Marathi.png" group-title=" Marathi", Sangeet Marathi
https://'.$ipadd.'/live.php?c=Sangeet_Marathi&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="441" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/9x_Jhakaas.png" group-title=" Marathi", 9x Jhakaas
https://'.$ipadd.'/live.php?c=9x_Jhakaas&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="422" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/InGoa24x7.png" group-title=" Marathi", In Goa 24x7
https://'.$ipadd.'/live.php?c=InGoa24x7&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="846" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/MK_News.png" group-title=" Marathi", MKN
https://'.$ipadd.'/live.php?c=MK_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1342" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Marathi.png" group-title=" Marathi", Nick Marathi
https://'.$ipadd.'/live.php?c=Nick_Marathi&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1346" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sonic_Marathi.png" group-title=" Marathi", Sonic Marathi
https://'.$ipadd.'/live.php?c=Sonic_Marathi&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1470" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Dnyanganga_9_Marathi_Medium.png" group-title=" Marathi", Dnyanganga 9th Marathi
https://'.$ipadd.'/live.php?c=Dnyanganga_9_Marathi_Medium&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1442" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Mahawani_Marathi.png" group-title=" Marathi", Dnyanganga 10th Marathi
https://'.$ipadd.'/live.php?c=Mahawani_Marathi&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1273" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sugran.png" group-title=" Marathi", Sugran
https://'.$ipadd.'/live.php?c=Sugran&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1293" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Lokshahi_News.png" group-title=" Marathi", Lokshahi News
https://'.$ipadd.'/live.php?c=Lokshahi_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="613" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Newslive.png" group-title=" Assamese", Newslive
https://'.$ipadd.'/live.php?c=Newslive&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="765" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Jonack.png" group-title=" Assamese", Jonack
https://'.$ipadd.'/live.php?c=Jonack&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="623" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Rang.png" group-title=" Assamese", Rang
https://'.$ipadd.'/live.php?c=Rang&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="635" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Rengoni.png" group-title=" Assamese", Rengoni
https://'.$ipadd.'/live.php?c=Rengoni&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="720" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD13_Guwahati_NE.png" group-title=" Assamese", DD13 Guwahati NE
https://'.$ipadd.'/live.php?c=DD13_Guwahati_NE&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="908" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Indradhanu.png" group-title=" Assamese", Indradhanu
https://'.$ipadd.'/live.php?c=Indradhanu&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="633" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/DY_365.png" group-title=" Assamese", DY 365
https://'.$ipadd.'/live.php?c=DY_365&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="647" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Pratidin_News.png" group-title=" Assamese", Prime Time News
https://'.$ipadd.'/live.php?c=Pratidin_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="627" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/News_18_Assam.png" group-title=" Assamese", News 18 Assam
https://'.$ipadd.'/live.php?c=News_18_Assam&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="624" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Prag_News.png" group-title=" Assamese", Prag News
https://'.$ipadd.'/live.php?c=Prag_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="639" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Ramdhenu.png" group-title=" Assamese", Ramdhenu
https://'.$ipadd.'/live.php?c=Ramdhenu&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="675" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Assam_Talks.png" group-title=" Assamese", Assam Talks
https://'.$ipadd.'/live.php?c=Assam_Talks&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="637" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/North_East_Live.png" group-title=" Assamese", North East Live
https://'.$ipadd.'/live.php?c=North_East_Live&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1428" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Gyan_Brikshya.png" group-title=" Assamese", Gyan Brikshya
https://'.$ipadd.'/live.php?c=Gyan_Brikshya&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1432" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/TIME8.png" group-title=" Assamese", TIME8
https://'.$ipadd.'/live.php?c=TIME8&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="595" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Prathana_TV.png" group-title=" Odia", Prathana TV
https://'.$ipadd.'/live.php?c=Prathana_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="751" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Tarang_Music.png" group-title=" Odia", Tarang Music
https://'.$ipadd.'/live.php?c=Tarang_Music&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="722" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sarthak_TV.png" group-title=" Odia", Zee Odisha
https://'.$ipadd.'/live.php?c=Sarthak_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="198" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Oriya.png" group-title=" Odia", Colors Oriya
https://'.$ipadd.'/live.php?c=Colors_Oriya&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="702" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Oriya.png" group-title=" Odia", DD Oriya
https://'.$ipadd.'/live.php?c=DD_Oriya&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="703" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Tarang_TV.png" group-title=" Odia", Tarang TV
https://'.$ipadd.'/live.php?c=Tarang_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="704" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/OTV_Odisha_TV.png" group-title=" Odia", OTV (Odisha TV)
https://'.$ipadd.'/live.php?c=OTV_Odisha_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="686" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Alankar_TV.png" group-title=" Odia", Alankar TV
https://'.$ipadd.'/live.php?c=Alankar_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="718" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Kanak_TV.png" group-title=" Odia", Kanak News
https://'.$ipadd.'/live.php?c=Kanak_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="724" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Kalinga.png" group-title=" Odia", Zee Kalinga
https://'.$ipadd.'/live.php?c=Zee_Kalinga&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="779" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Prameya_News_7.png" group-title=" Odia", Prameya News 7
https://'.$ipadd.'/live.php?c=Prameya_News_7&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="696" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_News_Oriya.png" group-title=" Odia", News18 Oriya
https://'.$ipadd.'/live.php?c=ETV_News_Oriya&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="781" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Kalinga_TV.png" group-title=" Odia", Kalinga TV
https://'.$ipadd.'/live.php?c=Kalinga_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="631" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/MBC.png" group-title=" Odia", MBC
https://'.$ipadd.'/live.php?c=MBC&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="799" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Naxatra_News.png" group-title=" Odia", Naxatra News
https://'.$ipadd.'/live.php?c=Naxatra_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1299" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Manjari_TV.png" group-title=" Odia", Manjari TV
https://'.$ipadd.'/live.php?c=Manjari_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1427" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Nandighosha.png" group-title=" Odia", Nandighosha
https://'.$ipadd.'/live.php?c=Nandighosha&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1481" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Argus_TV.png" group-title=" Odia", Argus News
https://'.$ipadd.'/live.php?c=Argus_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="486" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Bhojpuri_Cinema.png" group-title=" Bhojpuri", Bhojpuri Cinema
https://'.$ipadd.'/live.php?c=Bhojpuri_Cinema&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="741" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Sangeet_Bhojpuri.png" group-title=" Bhojpuri", Sangeet Bhojpuri
https://'.$ipadd.'/live.php?c=Sangeet_Bhojpuri&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="919" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Anjan_TV.png" group-title=" Bhojpuri", Anjan TV
https://'.$ipadd.'/live.php?c=Anjan_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="701" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Dangal.png" group-title=" Bhojpuri", Dangal
https://'.$ipadd.'/live.php?c=Dangal&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1100" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Dishum_TV.png" group-title=" Bhojpuri", Dishum TV
https://'.$ipadd.'/live.php?c=Dishum_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="883" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Osar_Movies.png" group-title=" Bhojpuri", Oscar Movies
https://'.$ipadd.'/live.php?c=Osar_Movies&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="693" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_BIHAR.png" group-title=" Bhojpuri", News18 BIHAR
https://'.$ipadd.'/live.php?c=ETV_BIHAR&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="661" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Purvaiya.png" group-title=" Bhojpuri", Zee Purvaiya
https://'.$ipadd.'/live.php?c=Zee_Purvaiya&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1296" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/B4U_Bhojpuri.png" group-title=" Bhojpuri", B4U Bhojpuri
https://'.$ipadd.'/live.php?c=B4U_Bhojpuri&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1535" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Surya_Bhojpuri.png" group-title=" Bhojpuri", Surya Bhojpuri
https://'.$ipadd.'/live.php?c=Surya_Bhojpuri&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="924" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Rujumargam_TV.png" group-title=" Urdu", Mercy TV
https://'.$ipadd.'/live.php?c=Rujumargam_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="712" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD_urdu.png" group-title=" Urdu", DD urdu
https://'.$ipadd.'/live.php?c=DD_urdu&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="716" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Kashir.png" group-title=" Urdu", DD Kashir
https://'.$ipadd.'/live.php?c=DD_Kashir&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="728" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Salaam.png" group-title=" Urdu", Zee Salaam
https://'.$ipadd.'/live.php?c=Zee_Salaam&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="605" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Channel_Win.png" group-title=" Urdu", Channel Win
https://'.$ipadd.'/live.php?c=Channel_Win&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="807" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Gulistan_News.png" group-title=" Urdu", Gulistan News
https://'.$ipadd.'/live.php?c=Gulistan_News&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="694" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Urdu.png" group-title=" Urdu", News18 Urdu
https://'.$ipadd.'/live.php?c=ETV_Urdu&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="933" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/4_TV.png" group-title=" Urdu", 4 TV
https://'.$ipadd.'/live.php?c=4_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1473" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Dnyanganga_9_Urdhu_Medium.png" group-title=" Urdu", Dnyanganga 9th Urdu
https://'.$ipadd.'/live.php?c=Dnyanganga_9_Urdhu_Medium&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1474" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Dnyanganga_10_Urdhu_Medium.png" group-title=" Urdu", Dnyanganga 10th Urdu
https://'.$ipadd.'/live.php?c=Dnyanganga_10_Urdhu_Medium&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="1252" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/TEHZEEB_TV.png" group-title=" Urdu", Tehzeeb TV
https://'.$ipadd.'/live.php?c=TEHZEEB_TV&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="719" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/Nepal_one.png" group-title=" Nepali", Nepal one
https://'.$ipadd.'/live.php?c=Nepal_one&q=800&e=junk.m3u8
#EXTINF: -1 tvg-id="838" tvg-logo="https://jiotv.catchup.cdn.jio.com/dare_images/images/France_24.png" group-title=" French", France 24
https://'.$ipadd.'/live.php?c=France_24&q=800&e=junk.m3u8
';


fwrite($playlist, $modlist);
fclose($playlist);

$ip = fopen("ip.php", "w") or die("Unable to open file!");
$ipw='<?php
$ip="'.$ipadd.'";
?>
';
fwrite($ip, $ipw);
fclose($ip);
header('Location: index.php?msg=Playlist Generation Successfull');
?>
