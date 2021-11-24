<?php
$playlist = fopen("playlist.m3u", "w") or die("Unable to open file!");
$ipadd=$_GET["ipadd"];

$modlist =
'#EXTM3U
#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Color_Cineplex_HD.png" group-title="JioTV",Colors Cineplex HD
http://'.$ipadd.'/autoq.php?c=Colors_Cineplex_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD_National.png" group-title="JioTV",DD National
http://'.$ipadd.'/autoq.php?c=DD_National

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_HD.png" group-title="JioTV",Sony HD
http://'.$ipadd.'/autoq.php?c=Sony_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_SAB_HD.png" group-title="JioTV",Sony SAB HD
http://'.$ipadd.'/autoq.php?c=Sony_SAB_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_SAB.png" group-title="JioTV",Sony SAB
http://'.$ipadd.'/autoq.php?c=Sony_SAB

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/And_TV_HD.png" group-title="JioTV",And TV HD
http://'.$ipadd.'/autoq.php?c=And_TV_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_TV_HD.png" group-title="JioTV",Zee TV HD
http://'.$ipadd.'/autoq.php?c=Zee_TV_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Colors_HD.png" group-title="JioTV",Colors HD
http://'.$ipadd.'/autoq.php?c=Colors_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Anmol.png" group-title="JioTV",Zee Anmol
http://'.$ipadd.'/autoq.php?c=Zee_Anmol

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Rishtey.png" group-title="JioTV",Rishtey
http://'.$ipadd.'/autoq.php?c=Rishtey

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Pal.png" group-title="JioTV",Sony Pal
http://'.$ipadd.'/autoq.php?c=Sony_Pal

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ID.PNG" group-title="JioTV",Investigation Discovery
http://'.$ipadd.'/autoq.php?c=ID

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Arre.png" group-title="JioTV",Arre HD
http://'.$ipadd.'/autoq.php?c=Arre

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Dangal.png" group-title="JioTV",Dangal
http://'.$ipadd.'/autoq.php?c=Dangal

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD_Kisan.png" group-title="JioTV",DD Kisan
http://'.$ipadd.'/autoq.php?c=DD_Kisan

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Infinity_HD.png" group-title="JioTV",Colors Infinity HD
http://'.$ipadd.'/autoq.php?c=Colors_Infinity_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Comedy_Central_HD.png" group-title="JioTV",Comedy Central HD
http://'.$ipadd.'/autoq.php?c=Comedy_Central_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Housefull_Movies.png" group-title="JioTV",Housefull Movies
http://'.$ipadd.'/autoq.php?c=Housefull_Movies

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/India_Science.png" group-title="JioTV",India Science
http://'.$ipadd.'/autoq.php?c=India_Science

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football.png" group-title="JioTV",Jio Football HD
http://'.$ipadd.'/autoq.php?c=Jio_Football

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket.png" group-title="JioTV",Jio Cricket English HD
http://'.$ipadd.'/autoq.php?c=Jio_Cricket

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Gyan_Brikshya.png" group-title="JioTV",Gyan Brikshya
http://'.$ipadd.'/autoq.php?c=Gyan_Brikshya

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket_1_HD.png" group-title="JioTV",Jio Cricket 1 HD
http://'.$ipadd.'/autoq.php?c=Jio_Cricket_1_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Max_HD.png" group-title="JioTV",Sony Max HD
http://'.$ipadd.'/autoq.php?c=Sony_Max_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Cinema_HD.png" group-title="JioTV",Zee Cinema HD
http://'.$ipadd.'/autoq.php?c=Zee_Cinema_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Cinema.png" group-title="JioTV",Zee Cinema
http://'.$ipadd.'/autoq.php?c=Zee_Cinema

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_1.png" group-title="JioTV",Jio Football 1 HD
http://'.$ipadd.'/autoq.php?c=Jio_Football_1

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_2.png" group-title="JioTV",Jio Football 2 HD
http://'.$ipadd.'/autoq.php?c=Jio_Football_2

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_3.png" group-title="JioTV",Jio Football 3 HD
http://'.$ipadd.'/autoq.php?c=Jio_Football_3

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Classic.png" group-title="JioTV",Zee Bollywood
http://'.$ipadd.'/autoq.php?c=Zee_Classic

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/And_Pictures_HD.png" group-title="JioTV",And Pictures HD
http://'.$ipadd.'/autoq.php?c=And_Pictures_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Action.png" group-title="JioTV",Zee Action
http://'.$ipadd.'/autoq.php?c=Zee_Action

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/B4U_Movies.png" group-title="JioTV",B4U Movies
http://'.$ipadd.'/autoq.php?c=B4U_Movies

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_MAX2.png" group-title="JioTV",Sony MAX2
http://'.$ipadd.'/autoq.php?c=Sony_MAX2

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Enterr_10.png" group-title="JioTV",Enterr 10
http://'.$ipadd.'/autoq.php?c=Enterr_10

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Cineplex.png" group-title="JioTV",Colors Cineplex
http://'.$ipadd.'/autoq.php?c=Colors_Cineplex

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Anmol_Cinema.png" group-title="JioTV",Zee Anmol Cinema
http://'.$ipadd.'/autoq.php?c=Zee_Anmol_Cinema

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/BOX_CINEMA.png" group-title="JioTV",Box Cinema
http://'.$ipadd.'/autoq.php?c=Box_Cinema

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Maha_Movies.png" group-title="JioTV",Maha Movies
http://'.$ipadd.'/autoq.php?c=Maha_Movies

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Pix_HD.png" group-title="JioTV",Sony Pix HD
http://'.$ipadd.'/autoq.php?c=Sony_Pix_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/HBO_HD.png" group-title="JioTV",HBO HD
http://'.$ipadd.'/autoq.php?c=HBO_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/WB.png" group-title="JioTV",WB
http://'.$ipadd.'/autoq.php?c=WB

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Hi_Dost.png" group-title="JioTV",Hi Dost!
http://'.$ipadd.'/autoq.php?c=Hi_Dost

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Channel_One_News.png" group-title="JioTV",Channel One News
http://'.$ipadd.'/autoq.php?c=Channel_One_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/K_News_India.png" group-title="JioTV",K News India
http://'.$ipadd.'/autoq.php?c=K_News_India

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DNN.png" group-title="JioTV",DNN
http://'.$ipadd.'/autoq.php?c=DNN

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD_Sports.png" group-title="JioTV",DD Sports
http://'.$ipadd.'/autoq.php?c=DD_Sports

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Ten_HD.png" group-title="JioTV",Ten 1 HD
http://'.$ipadd.'/autoq.php?c=Ten_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Ten_1.png" group-title="JioTV",Ten 1
http://'.$ipadd.'/autoq.php?c=Ten_1

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Ten2_HD.png" group-title="JioTV",Ten 2 HD
http://'.$ipadd.'/autoq.php?c=Ten2_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Ten_2.png" group-title="JioTV",Ten 2
http://'.$ipadd.'/autoq.php?c=Ten_2

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Ten3_HD.png" group-title="JioTV",Ten 3 HD
http://'.$ipadd.'/autoq.php?c=Ten3_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Ten_3.png" group-title="JioTV",Ten 3
http://'.$ipadd.'/autoq.php?c=Ten_3

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Six_HD.png" group-title="JioTV",Sony Six HD
http://'.$ipadd.'/autoq.php?c=Six_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Six_SD.png" group-title="JioTV",Sony Six SD
http://'.$ipadd.'/autoq.php?c=Sony_Six_SD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Dsports.png" group-title="JioTV",Eurosport
http://'.$ipadd.'/autoq.php?c=Dsports

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Dsports_HD.png" group-title="JioTV",Eurosport HD
http://'.$ipadd.'/autoq.php?c=Dsports_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Manjari_TV.png" group-title="JioTV",Manjari TV
http://'.$ipadd.'/autoq.php?c=Manjari_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/HHDL.png" group-title="JioTV",HHDL
http://'.$ipadd.'/autoq.php?c=HHDL

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Top_Tutor.png" group-title="JioTV",Top Tutor
http://'.$ipadd.'/autoq.php?c=Top_Tutor

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/RT_TV.png" group-title="JioTV",RT TV
http://'.$ipadd.'/autoq.php?c=RT_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Reporter_TV.png" group-title="JioTV",Reporter TV
http://'.$ipadd.'/autoq.php?c=Reporter_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jio_KIDS.png" group-title="JioTV",Jio KIDS
http://'.$ipadd.'/autoq.php?c=Jio_KIDS

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Utkarsh_Primary.png" group-title="JioTV",Utkarsh Primary
http://'.$ipadd.'/autoq.php?c=Utkarsh_Primary

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Utkarsh_Middle.png" group-title="JioTV",Utkarsh HSBTE
http://'.$ipadd.'/autoq.php?c=Utkarsh_Middle

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Utkarsh_Secondary.png" group-title="JioTV",Utkarsh Secondary
http://'.$ipadd.'/autoq.php?c=Utkarsh_Secondary

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Utkarsh_Higher.png" group-title="JioTV",Utkarsh Higher
http://'.$ipadd.'/autoq.php?c=Utkarsh_Higher

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Shiksha_TV.png" group-title="JioTV",Shiksha TV
http://'.$ipadd.'/autoq.php?c=Shiksha_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Janapriyam_News.png" group-title="JioTV",Janapriyam
http://'.$ipadd.'/autoq.php?c=Janapriyam_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Moti_Doongri.png" group-title="JioTV",Shree Ganesh - Moti Doongri Jaipur
http://'.$ipadd.'/autoq.php?c=Moti_Doongri

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Daijiworld_TV_24X7.png" group-title="JioTV",Daijiworld TV 24x7
http://'.$ipadd.'/autoq.php?c=Daijiworld_TV_24X7

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/News_J.png" group-title="JioTV",News J
http://'.$ipadd.'/autoq.php?c=News_J

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD_News.png" group-title="JioTV",DD News
http://'.$ipadd.'/autoq.php?c=DD_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ABP_News_India.png" group-title="JioTV",ABP News India
http://'.$ipadd.'/autoq.php?c=ABP_News_India

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Aaj_Tak.png" group-title="JioTV",Aaj Tak
http://'.$ipadd.'/autoq.php?c=Aaj_Tak

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_News.png" group-title="JioTV",Zee News
http://'.$ipadd.'/autoq.php?c=Zee_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/India_TV.png" group-title="JioTV",India TV
http://'.$ipadd.'/autoq.php?c=India_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/News_24.png" group-title="JioTV",News 24
http://'.$ipadd.'/autoq.php?c=News_24

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/IBN_7.png" group-title="JioTV",News 18 India
http://'.$ipadd.'/autoq.php?c=IBN_7

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_SANGAM.png" group-title="JioTV",Zee Hindustan
http://'.$ipadd.'/autoq.php?c=Zee_SANGAM

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/India_news.png" group-title="JioTV",India news
http://'.$ipadd.'/autoq.php?c=India_news

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ABP_Ganga.png" group-title="JioTV",ABP Ganga
http://'.$ipadd.'/autoq.php?c=ABP_Ganga

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/News_Nation.png" group-title="JioTV",News Nation
http://'.$ipadd.'/autoq.php?c=News_Nation

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Euro_News.png" group-title="JioTV",Euro News
http://'.$ipadd.'/autoq.php?c=Euro_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Total_TV.png" group-title="JioTV",Total TV
http://'.$ipadd.'/autoq.php?c=Total_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Live_Today.png" group-title="JioTV",Live Today
http://'.$ipadd.'/autoq.php?c=Live_Today';



fwrite($playlist, $modlist);


$modlist='
#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sahara_Samay_Rastriya.png" group-title="JioTV",Sahara Samay Rastriya
http://'.$ipadd.'/autoq.php?c=Sahara_Samay_Rastriya

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/India_News_Haryana.png" group-title="JioTV",India News Haryana
http://'.$ipadd.'/autoq.php?c=India_News_Haryana

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Taaza_TV.png" group-title="JioTV",Taaza TV
http://'.$ipadd.'/autoq.php?c=Taaza_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Living_India_News.png" group-title="JioTV",Living India News
http://'.$ipadd.'/autoq.php?c=Living_India_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sudarshan.png" group-title="JioTV",Sudarshan
http://'.$ipadd.'/autoq.php?c=Sudarshan

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Kashish_News.png" group-title="JioTV",Kashish News
http://'.$ipadd.'/autoq.php?c=Kashish_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/SMBC_TV.png" group-title="JioTV",SMBC TV
http://'.$ipadd.'/autoq.php?c=SMBC_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/SAHARA_SAMAY_MP.png" group-title="JioTV",SAHARA SAMAY MP
http://'.$ipadd.'/autoq.php?c=SAHARA_SAMAY_MP

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/SAHARA_SAMAY_UP.png" group-title="JioTV",SAHARA SAMAY UP
http://'.$ipadd.'/autoq.php?c=SAHARA_SAMAY_UP

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sadhna_News_Plus.png" group-title="JioTV",Sadhna News Plus
http://'.$ipadd.'/autoq.php?c=Sadhna_News_Plus

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sahara_Samay_Bihar.png" group-title="JioTV",Sahara Samay Bihar
http://'.$ipadd.'/autoq.php?c=Sahara_Samay_Bihar

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Samay_Rajasthan.png" group-title="JioTV",Samay Rajasthan
http://'.$ipadd.'/autoq.php?c=Samay_Rajasthan

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/JK_24x7_News.png" group-title="JioTV",JK 24x7 News
http://'.$ipadd.'/autoq.php?c=JK_24x7_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Pratidin_News.png" group-title="JioTV",Prime Time News
http://'.$ipadd.'/autoq.php?c=Pratidin_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Mh_One_News.png" group-title="JioTV",Mh One News
http://'.$ipadd.'/autoq.php?c=Mh_One_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/India_News_UP.png" group-title="JioTV",India News UP
http://'.$ipadd.'/autoq.php?c=India_News_UP

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/News_State_UK_UP.png" group-title="JioTV",News State UK UP
http://'.$ipadd.'/autoq.php?c=News_State_UK_UP

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/India_News_MP.png" group-title="JioTV",India News MP
http://'.$ipadd.'/autoq.php?c=India_News_MP

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/India_News_Rajasthan.png" group-title="JioTV",India News Rajasthan
http://'.$ipadd.'/autoq.php?c=India_News_Rajasthan

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Living_Foodz.png" group-title="JioTV",Zee UP UK
http://'.$ipadd.'/autoq.php?c=Living_Foodz

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Lokshahi_News.png" group-title="JioTV",Lokshahi News
http://'.$ipadd.'/autoq.php?c=Lokshahi_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/India_Voice.png" group-title="JioTV",India Voice
http://'.$ipadd.'/autoq.php?c=India_Voice

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/evidya_12.png" group-title="JioTV",PM e Vidya 12
http://'.$ipadd.'/autoq.php?c=evidya_12

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Hindi_Khabar.png" group-title="JioTV",Hindi Khabar
http://'.$ipadd.'/autoq.php?c=Hindi_Khabar

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jan_TV.png" group-title="JioTV",Jan TV
http://'.$ipadd.'/autoq.php?c=Jan_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/News_India_24_X_7.png" group-title="JioTV",News India 24x7
http://'.$ipadd.'/autoq.php?c=News_India_24_X_7

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Tez.png" group-title="JioTV",Tez
http://'.$ipadd.'/autoq.php?c=Tez

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Business.png" group-title="JioTV",Zee Business
http://'.$ipadd.'/autoq.php?c=Zee_Business

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/CNBC_Awaaz.png" group-title="JioTV",CNBC Awaaz
http://'.$ipadd.'/autoq.php?c=CNBC_Awaaz

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Loksabha_TV.png" group-title="JioTV",Loksabha TV
http://'.$ipadd.'/autoq.php?c=Loksabha_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD_Rajyasabha.png" group-title="JioTV",DD Rajyasabha
http://'.$ipadd.'/autoq.php?c=DD_Rajyasabha

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/India_Today.png" group-title="JioTV",India Today
http://'.$ipadd.'/autoq.php?c=India_Today

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/CNN_NEWS_18.png" group-title="JioTV",CNN NEWS 18
http://'.$ipadd.'/autoq.php?c=CNN_NEWS_18

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/News_X.png" group-title="JioTV",News X
http://'.$ipadd.'/autoq.php?c=News_X

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Wion.png" group-title="JioTV",Wion
http://'.$ipadd.'/autoq.php?c=Wion

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Republic_TV.png" group-title="JioTV",Republic TV
http://'.$ipadd.'/autoq.php?c=Republic_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD_India.png" group-title="JioTV",DD India
http://'.$ipadd.'/autoq.php?c=DD_India

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/CNBC_Tv18_Prime_HD.png" group-title="JioTV",CNBC Tv18 Prime HD
http://'.$ipadd.'/autoq.php?c=CNBC_Tv18_Prime_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/CNBC_Tv_18.png" group-title="JioTV",CNBC Tv 18
http://'.$ipadd.'/autoq.php?c=CNBC_Tv_18

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/News_9.png" group-title="JioTV",News 9
http://'.$ipadd.'/autoq.php?c=News_9

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/CNN.png" group-title="JioTV",CNN
http://'.$ipadd.'/autoq.php?c=CNN

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/BBC_World_News.png" group-title="JioTV",BBC World News
http://'.$ipadd.'/autoq.php?c=BBC_World_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/sonic_Hindi.png" group-title="JioTV",Sonic Hindi
http://'.$ipadd.'/autoq.php?c=sonic_Hindi

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/AL_Jazeera.png" group-title="JioTV",AL Jazeera
http://'.$ipadd.'/autoq.php?c=AL_Jazeera

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Channel_News_Asia_International.png" group-title="JioTV",Channel News Asia International
http://'.$ipadd.'/autoq.php?c=Channel_News_Asia_International

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/France_24.png" group-title="JioTV",France 24
http://'.$ipadd.'/autoq.php?c=France_24

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TV_5_Monde.png" group-title="JioTV",TV5 Monde
http://'.$ipadd.'/autoq.php?c=TV_5_Monde

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/dw.png" group-title="JioTV",dw
http://'.$ipadd.'/autoq.php?c=dw

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Kids_2.png" group-title="JioTV",Discovery Kids 2
http://'.$ipadd.'/autoq.php?c=Discovery_Kids_2

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sonic_Kannada.png" group-title="JioTV",Sonic Kannada
http://'.$ipadd.'/autoq.php?c=Sonic_Kannada

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sonic_Telugu.png" group-title="JioTV",Sonic Telugu
http://'.$ipadd.'/autoq.php?c=Sonic_Telugu

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Malayalam.png" group-title="JioTV",Nick Malayalam
http://'.$ipadd.'/autoq.php?c=Nick_Malayalam

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Bangla.png" group-title="JioTV",Nick Bangla
http://'.$ipadd.'/autoq.php?c=Nick_Bangla

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Marathi.png" group-title="JioTV",Nick Marathi
http://'.$ipadd.'/autoq.php?c=Nick_Marathi

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Gujarati.png" group-title="JioTV",Nick Gujarati
http://'.$ipadd.'/autoq.php?c=Nick_Gujarati

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/CN_HD_Tamil.png" group-title="JioTV",CN HD+ Tamil
http://'.$ipadd.'/autoq.php?c=CN_HD_Tamil

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Cartoon_Network_Tamil.png" group-title="JioTV",Cartoon Network Tamil
http://'.$ipadd.'/autoq.php?c=Cartoon_Network_Tamil

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Pogo_Tamil.png" group-title="JioTV",Pogo Tamil
http://'.$ipadd.'/autoq.php?c=Pogo_Tamil

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Tamil.png" group-title="JioTV",Nick Tamil
http://'.$ipadd.'/autoq.php?c=Nick_Tamil

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/sonic_Tamil.png" group-title="JioTV",sonic Tamil
http://'.$ipadd.'/autoq.php?c=sonic_Tamil

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Yay_Tamil.png" group-title="JioTV",Sony Yay Tamil
http://'.$ipadd.'/autoq.php?c=Sony_Yay_Tamil

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Kids_Tamil.png" group-title="JioTV",Discovery Kids Tamil
http://'.$ipadd.'/autoq.php?c=Discovery_Kids_Tamil

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Kannada.png" group-title="JioTV",Nick Kannada
http://'.$ipadd.'/autoq.php?c=Nick_Kannada

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/CN_HD_Telugu.png" group-title="JioTV",CN HD+ Telugu
http://'.$ipadd.'/autoq.php?c=CN_HD_Telugu

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Cartoon_Network_Telugu.png" group-title="JioTV",Cartoon Network Telugu
http://'.$ipadd.'/autoq.php?c=Cartoon_Network_Telugu

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Telugu.png" group-title="JioTV",Nick Telugu
http://'.$ipadd.'/autoq.php?c=Nick_Telugu

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Hindi.png" group-title="JioTV",Nick Hindi
http://'.$ipadd.'/autoq.php?c=Nick_Hindi

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Yay_Telugu.png" group-title="JioTV",Sony Yay Telugu
http://'.$ipadd.'/autoq.php?c=Sony_Yay_Telugu

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/CN_HD_English.png" group-title="JioTV",CN HD+ English
http://'.$ipadd.'/autoq.php?c=CN_HD_English

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Cartoon_Network_Hindi.png" group-title="JioTV",Cartoon Network Hindi
http://'.$ipadd.'/autoq.php?c=Cartoon_Network_Hindi

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Nick_HD+.png" group-title="JioTV",Nick HD+
http://'.$ipadd.'/autoq.php?c=Nick_HD_Plus

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Pogo_Hindi.png" group-title="JioTV",Pogo Hindi
http://'.$ipadd.'/autoq.php?c=Pogo_Hindi

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Nickelodeon.png" group-title="JioTV",Nickelodeon
http://'.$ipadd.'/autoq.php?c=Nickelodeon

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sonic_Malayalam.png" group-title="JioTV",Sonic Malayalam
http://'.$ipadd.'/autoq.php?c=Sonic_Malayalam

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sonic_Bangla.png" group-title="JioTV",Sonic Bangla
http://'.$ipadd.'/autoq.php?c=Sonic_Bangla

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sonic_Marathi.png" group-title="JioTV",Sonic Marathi
http://'.$ipadd.'/autoq.php?c=Sonic_Marathi

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sonic_Gujarati.png" group-title="JioTV",Sonic Gujarati
http://'.$ipadd.'/autoq.php?c=Sonic_Gujarati

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Junior.png" group-title="JioTV",Nick Junior
http://'.$ipadd.'/autoq.php?c=Nick_Junior

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Nickelodeon_Jr.png" group-title="JioTV",Nickelodeon Jr.
http://'.$ipadd.'/autoq.php?c=Nickelodeon_Jr

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Yay_Hindi.png" group-title="JioTV",Sony Yay Hindi
http://'.$ipadd.'/autoq.php?c=Sony_Yay_Hindi

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_HD_World.png" group-title="JioTV",Discovery HD World
http://'.$ipadd.'/autoq.php?c=Discovery_HD_World

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Discovery.png" group-title="JioTV",Discovery
http://'.$ipadd.'/autoq.php?c=Discovery';


fwrite($playlist, $modlist);


$modlist='
#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Channel_Tamil.png" group-title="JioTV",D Tamil
http://'.$ipadd.'/autoq.php?c=Discovery_Channel_Tamil

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Animal_Planet_HD.png" group-title="JioTV",Animal Planet HD World
http://'.$ipadd.'/autoq.php?c=Animal_Planet_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Animal_Planet_English.png" group-title="JioTV",Animal Planet English
http://'.$ipadd.'/autoq.php?c=Animal_Planet_English

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Science.png" group-title="JioTV",Discovery Science
http://'.$ipadd.'/autoq.php?c=Discovery_Science

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/History_HD.png" group-title="JioTV",History TV18 HD
http://'.$ipadd.'/autoq.php?c=History_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/History_18_Hindi.png" group-title="JioTV",History TV18 HD Hindi
http://'.$ipadd.'/autoq.php?c=History_18_Hindi

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_BBC_Earth_HD.png" group-title="JioTV",Sony BBC Earth HD
http://'.$ipadd.'/autoq.php?c=Sony_BBC_Earth_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Epic_HD.png" group-title="JioTV",Epic
http://'.$ipadd.'/autoq.php?c=Epic_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TLC_HD_World.png" group-title="JioTV",TLC HD
http://'.$ipadd.'/autoq.php?c=TLC_HD_World

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TLC_English.png" group-title="JioTV",TLC English
http://'.$ipadd.'/autoq.php?c=TLC_English

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TLC_Hindi.png" group-title="JioTV",TLC Hindi
http://'.$ipadd.'/autoq.php?c=TLC_Hindi

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sadhguru_Television.png" group-title="JioTV",Sadhguru Television HD
http://'.$ipadd.'/autoq.php?c=Sadhguru_Television

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Turbo.png" group-title="JioTV",Discovery Turbo
http://'.$ipadd.'/autoq.php?c=Discovery_Turbo

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Mahawani_10th_English.png" group-title="JioTV",Dnyanganga 10th English
http://'.$ipadd.'/autoq.php?c=Mahawani_10th_English

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Travel_XP_HD.png" group-title="JioTV",Travel XP HD
http://'.$ipadd.'/autoq.php?c=Travel_XP_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TV_Teacher.png" group-title="JioTV",TV Teacher
http://'.$ipadd.'/autoq.php?c=TV_Teacher

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Travel_XP.png" group-title="JioTV",Travel XP HD Hindi
http://'.$ipadd.'/autoq.php?c=Travel_XP

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Food_Food.png" group-title="JioTV",Food Food
http://'.$ipadd.'/autoq.php?c=Food_Food

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Care_World.png" group-title="JioTV",Care World
http://'.$ipadd.'/autoq.php?c=Care_World

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Animal_Planet_HD_Tamil.png" group-title="JioTV",Animal Planet HD Tamil
http://'.$ipadd.'/autoq.php?c=Animal_Planet_HD_Tamil

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Dnyanganga_9_English_Medium.png" group-title="JioTV",Dnyanganga 9th English
http://'.$ipadd.'/autoq.php?c=Dnyanganga_9_English_Medium

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Dnyanganga_9_Urdhu_Medium.png" group-title="JioTV",Dnyanganga 9th Urdu
http://'.$ipadd.'/autoq.php?c=Dnyanganga_9_Urdhu_Medium

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Dnyanganga_10_Urdhu_Medium.png" group-title="JioTV",Dnyanganga 10th Urdu
http://'.$ipadd.'/autoq.php?c=Dnyanganga_10_Urdhu_Medium

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Parmarth_TV.png" group-title="JioTV",Parmarth TV
http://'.$ipadd.'/autoq.php?c=Parmarth_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Events.png" group-title="JioTV",Jio Events HD
http://'.$ipadd.'/autoq.php?c=Jio_Events

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Exclusive.png" group-title="JioTV",Jio Exclusive HD
http://'.$ipadd.'/autoq.php?c=Jio_Exclusive

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/MTV_HD_Plus.png" group-title="JioTV",MTV HD Plus
http://'.$ipadd.'/autoq.php?c=MTV_HD_Plus

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/MTV.png" group-title="JioTV",MTV
http://'.$ipadd.'/autoq.php?c=MTV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/9XM.jpg" group-title="JioTV",9XM
http://'.$ipadd.'/autoq.php?c=9XM

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/E_24.png" group-title="JioTV",E 24
http://'.$ipadd.'/autoq.php?c=E_24

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_BBC_Earth_HD_English.png" group-title="JioTV",Sony BBC Earth HD English
http://'.$ipadd.'/autoq.php?c=Sony_BBC_Earth_HD_English

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/MTV_Beats_HD.png" group-title="JioTV",MTV Beats HD
http://'.$ipadd.'/autoq.php?c=MTV_Beats_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/B4U_Music.png" group-title="JioTV",B4U Music
http://'.$ipadd.'/autoq.php?c=B4U_Music

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/etc.png" group-title="JioTV",Zee etc
http://'.$ipadd.'/autoq.php?c=etc

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Mastiii.png" group-title="JioTV",Mastiii
http://'.$ipadd.'/autoq.php?c=Mastiii

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zing.png" group-title="JioTV",Zing
http://'.$ipadd.'/autoq.php?c=Zing

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Music_India.png" group-title="JioTV",Music India
http://'.$ipadd.'/autoq.php?c=Music_India

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/9X_Jalwa.png" group-title="JioTV",9X Jalwa
http://'.$ipadd.'/autoq.php?c=9X_Jalwa

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Animal_Planet_Hindi.png" group-title="JioTV",Animal Planet Hindi
http://'.$ipadd.'/autoq.php?c=Animal_Planet_Hindi

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Channel_Hindi.png" group-title="JioTV",Discovery Channel Hindi
http://'.$ipadd.'/autoq.php?c=Discovery_Channel_Hindi

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Bflix_Movies.png" group-title="JioTV",Bflix Movies
http://'.$ipadd.'/autoq.php?c=Bflix_Movies

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Manoranjan_TV.png" group-title="JioTV",Manoranjan TV
http://'.$ipadd.'/autoq.php?c=Manoranjan_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/B4U_Kadak.png" group-title="JioTV",B4U Kadak
http://'.$ipadd.'/autoq.php?c=B4U_Kadak

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/B4U_Bhojpuri.png" group-title="JioTV",B4U Bhojpuri
http://'.$ipadd.'/autoq.php?c=B4U_Bhojpuri

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/MI_TV.png" group-title="JioTV",MI TV
http://'.$ipadd.'/autoq.php?c=MI_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Raj_Pariwar.png" group-title="JioTV",Raj Pariwar
http://'.$ipadd.'/autoq.php?c=Raj_Pariwar

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Orange_TV.png" group-title="JioTV",Orange TV
http://'.$ipadd.'/autoq.php?c=Orange_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Insync.png" group-title="JioTV",Insync
http://'.$ipadd.'/autoq.php?c=Insync

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/iLove.png" group-title="JioTV",iLove
http://'.$ipadd.'/autoq.php?c=iLove

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ANB_News.png" group-title="JioTV",ANB News
http://'.$ipadd.'/autoq.php?c=ANB_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Prarthana_Bhawan.png" group-title="JioTV",Prarthana Bhawan
http://'.$ipadd.'/autoq.php?c=Prarthana_Bhawan

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Shubhsandesh_TV.png" group-title="JioTV",Shubhsandesh TV
http://'.$ipadd.'/autoq.php?c=Shubhsandesh_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Darshan_24.png" group-title="JioTV",Darshan 24
http://'.$ipadd.'/autoq.php?c=Darshan_24

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Divya_TV.png" group-title="JioTV",Divya TV
http://'.$ipadd.'/autoq.php?c=Divya_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/School_Education_Nagaland.png" group-title="JioTV",School Education Nagaland
http://'.$ipadd.'/autoq.php?c=School_Education_Nagaland

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Birla_Brainiacs.png" group-title="JioTV",Birla Brainiacs
http://'.$ipadd.'/autoq.php?c=Birla_Brainiacs

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Network_10.png" group-title="JioTV",Network 10
http://'.$ipadd.'/autoq.php?c=Network_10

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Pix_SD.png" group-title="JioTV",Sony Pix SD
http://'.$ipadd.'/autoq.php?c=Sony_Pix_SD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Gyanvani_1.png" group-title="JioTV",Gyanvani 1
http://'.$ipadd.'/autoq.php?c=Gyanvani_1

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Chardham_Darshan.png" group-title="JioTV",Chardham Darshan
http://'.$ipadd.'/autoq.php?c=Chardham_Darshan

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Tute.png" group-title="JioTV",Tute
http://'.$ipadd.'/autoq.php?c=Tute

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Himshiksha_Elementary.png" group-title="JioTV",Himshiksha Elementary
http://'.$ipadd.'/autoq.php?c=Himshiksha_Elementary

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Himshiksha_Higher.png" group-title="JioTV",Himshiksha Higher
http://'.$ipadd.'/autoq.php?c=Himshiksha_Higher

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Himshiksha_Vocational.png" group-title="JioTV",Himshiksha Vocational
http://'.$ipadd.'/autoq.php?c=Himshiksha_Vocational

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/AP_BIE_ARTS.png" group-title="JioTV",AP-BIE-ARTS
http://'.$ipadd.'/autoq.php?c=AP_BIE_ARTS

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/AP_BIE_SCIENCE.png" group-title="JioTV",AP-BIE-SCIENCE
http://'.$ipadd.'/autoq.php?c=AP_BIE_SCIENCE

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/AP_CIE_SIVE.png" group-title="JioTV",AP-CIE-SIVE
http://'.$ipadd.'/autoq.php?c=AP_CIE_SIVE

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Infinity_SD.png" group-title="JioTV",Colors Infinity SD
http://'.$ipadd.'/autoq.php?c=Colors_Infinity_SD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Comedy_Central_SD.png" group-title="JioTV",Comedy Central SD
http://'.$ipadd.'/autoq.php?c=Comedy_Central_SD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Wah.png" group-title="JioTV",Sony Wah
http://'.$ipadd.'/autoq.php?c=Sony_Wah

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_SD.png" group-title="JioTV",Sony SD
http://'.$ipadd.'/autoq.php?c=Sony_SD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/SongDew_TV.png" group-title="JioTV",SongDew TV
http://'.$ipadd.'/autoq.php?c=SongDew_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/1Sports.png" group-title="JioTV",1Sports
http://'.$ipadd.'/autoq.php?c=1Sports

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Santvani.png" group-title="JioTV",Santvani
http://'.$ipadd.'/autoq.php?c=Santvani

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Nandighosha.png" group-title="JioTV",Nandighosha
http://'.$ipadd.'/autoq.php?c=Nandighosha

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Velukkudi_Discourses.png" group-title="JioTV",Velukkudi Discourses
http://'.$ipadd.'/autoq.php?c=Velukkudi_Discourses

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Mahawani_Marathi.png" group-title="JioTV",Dnyanganga 10th Marathi
http://'.$ipadd.'/autoq.php?c=Mahawani_Marathi

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Mahawani_English.png" group-title="JioTV",Dnyanganga 12th Science
http://'.$ipadd.'/autoq.php?c=Mahawani_English

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/M_lead.png" group-title="JioTV",M-LEAD
http://'.$ipadd.'/autoq.php?c=M_lead

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Rishtey_Cineplex.png" group-title="JioTV",Rishtey Cineplex
http://'.$ipadd.'/autoq.php?c=Rishtey_Cineplex

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Balle_Balle_TV.png" group-title="JioTV",Balle Balle TV
http://'.$ipadd.'/autoq.php?c=Balle_Balle_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Dnyanganga_3_4_Mar_Eng_Urdhu.png" group-title="JioTV",Dnyanganga 3rd-4th Mar-Eng-Urdu
http://'.$ipadd.'/autoq.php?c=Dnyanganga_3_4_Mar_Eng_Urdhu

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Dnyanganga_5_Mar_Eng_Urdhu.png" group-title="JioTV",Dnyanganga 5th Mar-Eng-Urdu
http://'.$ipadd.'/autoq.php?c=Dnyanganga_5_Mar_Eng_Urdhu';
fwrite($playlist, $modlist);

$modlist='

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Dnyanganga_6_Mar_Eng_Urdhu.png" group-title="JioTV",Dnyanganga 6th Mar-Eng-Urdu
http://'.$ipadd.'/autoq.php?c=Dnyanganga_6_Mar_Eng_Urdhu

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Dnyanganga_7_Mar_Eng_Urdhu.png" group-title="JioTV",Dnyanganga 7th Mar-Eng-Urdu
http://'.$ipadd.'/autoq.php?c=Dnyanganga_7_Mar_Eng_Urdhu

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Dnyanganga_8_Mar_Eng_Urdhu.png" group-title="JioTV",Dnyanganga 8th Mar-Eng-Urdu
http://'.$ipadd.'/autoq.php?c=Dnyanganga_8_Mar_Eng_Urdhu

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Dnyanganga_9_Marathi_Medium.png" group-title="JioTV",Dnyanganga 9th Marathi
http://'.$ipadd.'/autoq.php?c=Dnyanganga_9_Marathi_Medium

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/History_TV18_SD.png" group-title="JioTV",History TV18 SD
http://'.$ipadd.'/autoq.php?c=History_TV18_SD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Surya_Bhojpuri.png" group-title="JioTV",Surya Bhojpuri
http://'.$ipadd.'/autoq.php?c=Surya_Bhojpuri

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/RadheKrishna_TV.png" group-title="JioTV",RadheKrishna TV
http://'.$ipadd.'/autoq.php?c=RadheKrishna_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Subharti.png" group-title="JioTV",Subharti
http://'.$ipadd.'/autoq.php?c=Subharti

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Shiksha_Darshan.png" group-title="JioTV",Shiksha Darshan
http://'.$ipadd.'/autoq.php?c=Shiksha_Darshan

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Punjab_School_TV.png" group-title="JioTV",Punjab School TV
http://'.$ipadd.'/autoq.php?c=Punjab_School_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/News_First.png" group-title="JioTV",News First
http://'.$ipadd.'/autoq.php?c=News_First

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ABP_Sanjha.png" group-title="JioTV",ABP Sanjha
http://'.$ipadd.'/autoq.php?c=ABP_Sanjha

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/IBN_Lokmat.png" group-title="JioTV",IBN Lokmat
http://'.$ipadd.'/autoq.php?c=IBN_Lokmat

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Aastha.png" group-title="JioTV",Aastha
http://'.$ipadd.'/autoq.php?c=Aastha

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Siddhivinayak.png" group-title="JioTV",Shree Siddhivinayak
http://'.$ipadd.'/autoq.php?c=Siddhivinayak

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sanskar.png" group-title="JioTV",Sanskar
http://'.$ipadd.'/autoq.php?c=Sanskar

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Disha_tv.png" group-title="JioTV",Disha tv
http://'.$ipadd.'/autoq.php?c=Disha_tv

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Paras_tv.png" group-title="JioTV",Paras tv
http://'.$ipadd.'/autoq.php?c=Paras_tv

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/mh1_Shraddha.png" group-title="JioTV",mh1 Shraddha
http://'.$ipadd.'/autoq.php?c=mh1_Shraddha

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sadhna.png" group-title="JioTV",Sadhna
http://'.$ipadd.'/autoq.php?c=Sadhna

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Peace_of_Mind.png" group-title="JioTV",Peace of Mind
http://'.$ipadd.'/autoq.php?c=Peace_of_Mind

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jinvani_TV.png" group-title="JioTV",Jinvani TV
http://'.$ipadd.'/autoq.php?c=Jinvani_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Arihant_TV.png" group-title="JioTV",Arihant TV
http://'.$ipadd.'/autoq.php?c=Arihant_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Ishwar_TV.png" group-title="JioTV",Ishwar TV
http://'.$ipadd.'/autoq.php?c=Ishwar_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Satsang_TV.png" group-title="JioTV",Satsang TV
http://'.$ipadd.'/autoq.php?c=Satsang_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Shubh_TV.png" group-title="JioTV",Shubh TV
http://'.$ipadd.'/autoq.php?c=Shubh_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Aastha_Bhajan.png" group-title="JioTV",Aastha Bhajan
http://'.$ipadd.'/autoq.php?c=Aastha_Bhajan

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vedic_TV.png" group-title="JioTV",Vedic TV
http://'.$ipadd.'/autoq.php?c=Vedic_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ETV_UP.png" group-title="JioTV",News18 UP
http://'.$ipadd.'/autoq.php?c=ETV_UP

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ETV_BIHAR.png" group-title="JioTV",News18 BIHAR
http://'.$ipadd.'/autoq.php?c=ETV_BIHAR

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Dabangg.png" group-title="JioTV",Dabangg
http://'.$ipadd.'/autoq.php?c=Dabangg

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sangeet_Bhojpuri.png" group-title="JioTV",Sangeet Bhojpuri
http://'.$ipadd.'/autoq.php?c=Sangeet_Bhojpuri

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Osar_Movies.png" group-title="JioTV",Oscar Movies
http://'.$ipadd.'/autoq.php?c=Oscar_Movies

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Bhojpuri_Cinema.png" group-title="JioTV",Bhojpuri Cinema
http://'.$ipadd.'/autoq.php?c=Bhojpuri_Cinema

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Dishum_TV.png" group-title="JioTV",Dishum TV
http://'.$ipadd.'/autoq.php?c=Dishum_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ETV_RAJASTHAN.png" group-title="JioTV",News18 RAJASTHAN
http://'.$ipadd.'/autoq.php?c=ETV_RAJASTHAN

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Rajasthan.png" group-title="JioTV",Zee Rajasthan
http://'.$ipadd.'/autoq.php?c=Zee_Rajasthan

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/First_India_News.png" group-title="JioTV",First India News
http://'.$ipadd.'/autoq.php?c=First_India_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ETV_MP.png" group-title="JioTV",News18 MP
http://'.$ipadd.'/autoq.php?c=ETV_MP

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/IBC-24.png" group-title="JioTV",IBC24
http://'.$ipadd.'/autoq.php?c=IBC-24

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_News_MP_Chattisgarh.png" group-title="JioTV",Zee News MP Chattisgarh
http://'.$ipadd.'/autoq.php?c=Zee_News_MP_Chattisgarh

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Bansal_News.png" group-title="JioTV",Bansal News
http://'.$ipadd.'/autoq.php?c=Bansal_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Urdu.png" group-title="JioTV",News18 Urdu
http://'.$ipadd.'/autoq.php?c=ETV_Urdu

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Salaam.png" group-title="JioTV",Zee Salaam
http://'.$ipadd.'/autoq.php?c=Zee_Salaam

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Channel_Win.png" group-title="JioTV",Channel Win
http://'.$ipadd.'/autoq.php?c=Channel_Win

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Gulistan_News.png" group-title="JioTV",Gulistan News
http://'.$ipadd.'/autoq.php?c=Gulistan_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD_bharati.png" group-title="JioTV",DD bharati
http://'.$ipadd.'/autoq.php?c=DD_bharati

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD_Bihar.png" group-title="JioTV",DD Bihar
http://'.$ipadd.'/autoq.php?c=DD_Bihar

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD_Madhya_Pradesh.png" group-title="JioTV",DD Madhya Pradesh
http://'.$ipadd.'/autoq.php?c=DD_Madhya_Pradesh

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD_Rajasthan_Jaipur.png" group-title="JioTV",DD Rajasthan (Jaipur)
http://'.$ipadd.'/autoq.php?c=DD_Rajasthan_Jaipur

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Barker.png" group-title="JioTV",Jio Promo HD
http://'.$ipadd.'/autoq.php?c=Barker

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Marathi_HD.png" group-title="JioTV",Colors Marathi HD
http://'.$ipadd.'/autoq.php?c=Colors_Marathi_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Marathi.png" group-title="JioTV",Zee Marathi
http://'.$ipadd.'/autoq.php?c=Zee_Marathi

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ABP_Majha.png" group-title="JioTV",ABP Majha
http://'.$ipadd.'/autoq.php?c=ABP_Majha

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_24_Taas.png" group-title="JioTV",Zee 24 Taas
http://'.$ipadd.'/autoq.php?c=Zee_24_Taas

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Yuva.png" group-title="JioTV",Zee Yuva
http://'.$ipadd.'/autoq.php?c=Zee_Yuva

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Talkies.png" group-title="JioTV",Zee Talkies
http://'.$ipadd.'/autoq.php?c=Zee_Talkies

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Marathi_SD.png" group-title="JioTV",Sony Marathi SD
http://'.$ipadd.'/autoq.php?c=Sony_Marathi_SD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Saam_Tv.png" group-title="JioTV",Saam Tv
http://'.$ipadd.'/autoq.php?c=Saam_Tv

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/9x_Jhakaas.png" group-title="JioTV",9x Jhakaas
http://'.$ipadd.'/autoq.php?c=9x_Jhakaas

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Maiboli.png" group-title="JioTV",Maiboli
http://'.$ipadd.'/autoq.php?c=Maiboli

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TV9_Maharashtra.png" group-title="JioTV",TV9 Maharashtra
http://'.$ipadd.'/autoq.php?c=TV9_Maharashtra';

fwrite($playlist, $modlist);

$modlist='
#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sangeet_Marathi.png" group-title="JioTV",Sangeet Marathi
http://'.$ipadd.'/autoq.php?c=Sangeet_Marathi

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Fakt_Marathi.png" group-title="JioTV",Fakt Marathi
http://'.$ipadd.'/autoq.php?c=Fakt_Marathi

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/MK_News.png" group-title="JioTV",MKN
http://'.$ipadd.'/autoq.php?c=MK_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Amaar_Cinema.png" group-title="JioTV",Amaar Cinema
http://'.$ipadd.'/autoq.php?c=Amaar_Cinema

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sadhna_Aryan_News.png" group-title="JioTV",Sadhna News TV
http://'.$ipadd.'/autoq.php?c=Sadhna_Aryan_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Channel_Bengali.png" group-title="JioTV",Discovery Channel Bengali
http://'.$ipadd.'/autoq.php?c=Discovery_Channel_Bengali

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD_Sahayadri.png" group-title="JioTV",DD Sahayadri
http://'.$ipadd.'/autoq.php?c=DD_Sahayadri

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ABP_Ananda.png" group-title="JioTV",ABP Ananda
http://'.$ipadd.'/autoq.php?c=ABP_Ananda

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Bengali_HD.png" group-title="JioTV",Colors Bengali HD
http://'.$ipadd.'/autoq.php?c=Colors_Bengali_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Bangla.png" group-title="JioTV",Zee Bangla
http://'.$ipadd.'/autoq.php?c=Zee_Bangla

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Aakaash_bangla.png" group-title="JioTV",Aakash Aath
http://'.$ipadd.'/autoq.php?c=Aakaash_bangla

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/24_Ghanta_TV.png" group-title="JioTV",24 Ghanta TV
http://'.$ipadd.'/autoq.php?c=24_Ghanta_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_aath.png" group-title="JioTV",Sony aath
http://'.$ipadd.'/autoq.php?c=Sony_aath

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sangeet_Bangla.png" group-title="JioTV",Sangeet Bangla
http://'.$ipadd.'/autoq.php?c=Sangeet_Bangla

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Bangla_Cinema.png" group-title="JioTV",Zee Bangla Cinema
http://'.$ipadd.'/autoq.php?c=Zee_Bangla_Cinema

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Bangla_News.png" group-title="JioTV",News18 Bangla News
http://'.$ipadd.'/autoq.php?c=ETV_Bangla_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/News_Time_TV.png" group-title="JioTV",News Time TV
http://'.$ipadd.'/autoq.php?c=News_Time_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sakshi_tv.png" group-title="JioTV",Sakshi tv
http://'.$ipadd.'/autoq.php?c=Sakshi_tv

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Telugu.png" group-title="JioTV",Zee Telugu
http://'.$ipadd.'/autoq.php?c=Zee_Telugu

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Studio_One.png" group-title="JioTV",Studio One
http://'.$ipadd.'/autoq.php?c=Studio_One

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Telugu.png" group-title="JioTV",ETV Telugu
http://'.$ipadd.'/autoq.php?c=ETV_Telugu

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Andhra_pradesh.png" group-title="JioTV",ETV Andhra pradesh
http://'.$ipadd.'/autoq.php?c=ETV_Andhra_pradesh

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jaya_TV_HD.png" group-title="JioTV",Jaya TV HD
http://'.$ipadd.'/autoq.php?c=Jaya_TV_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TV_5_News.png" group-title="JioTV",TV 5 News
http://'.$ipadd.'/autoq.php?c=TV_5_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TV9_Telugu_News.png" group-title="JioTV",TV9 Telugu News
http://'.$ipadd.'/autoq.php?c=TV9_Telugu_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/NTV.png" group-title="JioTV",NTV
http://'.$ipadd.'/autoq.php?c=NTV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ABN_Andhra_Jyothi.png" group-title="JioTV",ABN Andhra Jyothi
http://'.$ipadd.'/autoq.php?c=ABN_Andhra_Jyothi

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/T_News.png" group-title="JioTV",T News
http://'.$ipadd.'/autoq.php?c=T_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Puthu_Yugam.png" group-title="JioTV",Puthu Yugam
http://'.$ipadd.'/autoq.php?c=Puthu_Yugam

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/V6_News.png" group-title="JioTV",V6 News
http://'.$ipadd.'/autoq.php?c=V6_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/MK_TV.png" group-title="JioTV",MK TV
http://'.$ipadd.'/autoq.php?c=MK_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Bhakti_TV.png" group-title="JioTV",Bhakti TV
http://'.$ipadd.'/autoq.php?c=Bhakti_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Subhavartha_TV.png" group-title="JioTV",Subhavartha TV
http://'.$ipadd.'/autoq.php?c=Subhavartha_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Nireekshana_TV.png" group-title="JioTV",Nireekshana TV
http://'.$ipadd.'/autoq.php?c=Nireekshana_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Telangana.png" group-title="JioTV",ETV Telangana
http://'.$ipadd.'/autoq.php?c=ETV_Telangana

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/HM_TV.png" group-title="JioTV",HM TV
http://'.$ipadd.'/autoq.php?c=HM_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Cinema.png" group-title="JioTV",ETV Cinema
http://'.$ipadd.'/autoq.php?c=ETV_Cinema

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Plus.png" group-title="JioTV",ETV Plus
http://'.$ipadd.'/autoq.php?c=ETV_Plus

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Life.png" group-title="JioTV",ETV Life
http://'.$ipadd.'/autoq.php?c=ETV_Life

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Abhiruchi.png" group-title="JioTV",ETV Abhiruchi
http://'.$ipadd.'/autoq.php?c=ETV_Abhiruchi

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Cinemalu.png" group-title="JioTV",Zee Cinemalu
http://'.$ipadd.'/autoq.php?c=Zee_Cinemalu

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Raj_News_24x7.png" group-title="JioTV",Raj News&nbsp;24x7
http://'.$ipadd.'/autoq.php?c=Raj_News_24x7

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/CVR_English.png" group-title="JioTV",CVR English
http://'.$ipadd.'/autoq.php?c=CVR_English

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/CVR_News.png" group-title="JioTV",CVR News
http://'.$ipadd.'/autoq.php?c=CVR_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/CVR_Health.png" group-title="JioTV",CVR Health
http://'.$ipadd.'/autoq.php?c=CVR_Health

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/CVR_OM_Spiritual.png" group-title="JioTV",CVR OM Spiritual
http://'.$ipadd.'/autoq.php?c=CVR_OM_Spiritual

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Raj_News_Telugu.png" group-title="JioTV",Raj News Telugu
http://'.$ipadd.'/autoq.php?c=Raj_News_Telugu

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vissa_TV.png" group-title="JioTV",Vissa TV
http://'.$ipadd.'/autoq.php?c=Vissa_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/10_TV.png" group-title="JioTV",10 TV
http://'.$ipadd.'/autoq.php?c=10_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Aradhana_TV.png" group-title="JioTV",Aradhana TV
http://'.$ipadd.'/autoq.php?c=Aradhana_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vanitha.png" group-title="JioTV",Vanitha
http://'.$ipadd.'/autoq.php?c=Vanitha

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Raj_Music_Telugu.png" group-title="JioTV",Raj Music Telugu
http://'.$ipadd.'/autoq.php?c=Raj_Music_Telugu

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TV1.png" group-title="JioTV",TV1
http://'.$ipadd.'/autoq.php?c=TV1

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/I_News.png" group-title="JioTV",I News
http://'.$ipadd.'/autoq.php?c=I_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/MK_Music.png" group-title="JioTV",MK Music
http://'.$ipadd.'/autoq.php?c=MK_Music

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/History_18_Tamil.png" group-title="JioTV",History TV18 HD Tamil
http://'.$ipadd.'/autoq.php?c=History_18_Tamil

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_BBC_Earth_HD_Tamil.png" group-title="JioTV",Sony BBC Earth HD Tamil
http://'.$ipadd.'/autoq.php?c=Sony_BBC_Earth_HD_Tamil

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD_Saptagiri.png" group-title="JioTV",DD Saptagiri
http://'.$ipadd.'/autoq.php?c=DD_Saptagiri

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Tamil.png" group-title="JioTV",Zee Tamil
http://'.$ipadd.'/autoq.php?c=Zee_Tamil

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Kalaignar_TV.png" group-title="JioTV",Kalaignar TV
http://'.$ipadd.'/autoq.php?c=Kalaignar_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Raj_TV.png" group-title="JioTV",Raj TV
http://'.$ipadd.'/autoq.php?c=Raj_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Puthiya_Thalimurai.png" group-title="JioTV",Puthiya Thalimurai
http://'.$ipadd.'/autoq.php?c=Puthiya_Thalimurai

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vasanth_TV.png" group-title="JioTV",Vasanth TV
http://'.$ipadd.'/autoq.php?c=Vasanth_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jaya_Max.png" group-title="JioTV",Jaya Max
http://'.$ipadd.'/autoq.php?c=Jaya_Max

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Polimer_TV.png" group-title="JioTV",Polimer TV
http://'.$ipadd.'/autoq.php?c=Polimer_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Thanthi_TV.png" group-title="JioTV",Thanthi TV
http://'.$ipadd.'/autoq.php?c=Thanthi_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Makkal_TV.png" group-title="JioTV",Makkal TV
http://'.$ipadd.'/autoq.php?c=Makkal_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jaya_Plus.png" group-title="JioTV",Jaya Plus
http://'.$ipadd.'/autoq.php?c=Jaya_Plus

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/J_Movies.png" group-title="JioTV",J Movies
http://'.$ipadd.'/autoq.php?c=J_Movies

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/News7_Tamil.png" group-title="JioTV",News7 Tamil
http://'.$ipadd.'/autoq.php?c=News7_Tamil

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Polimer_News.png" group-title="JioTV",Polimer News
http://'.$ipadd.'/autoq.php?c=Polimer_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/News_18_Tamilnadu.png" group-title="JioTV",News 18 Tamilnadu
http://'.$ipadd.'/autoq.php?c=News_18_Tamilnadu

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Kalaignar_Seithigal_.png" group-title="JioTV",Kalaignar Seithigal 
http://'.$ipadd.'/autoq.php?c=Kalaignar_Seithigal_

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Raj_Digital_Plus.png" group-title="JioTV",Raj Digital Plus
http://'.$ipadd.'/autoq.php?c=Raj_Digital_Plus

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Raj_Musix.png" group-title="JioTV",Raj Musix
http://'.$ipadd.'/autoq.php?c=Raj_Musix

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Tamil_HD.png" group-title="JioTV",Colors Tamil HD
http://'.$ipadd.'/autoq.php?c=Colors_Tamil_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Dighvijay_TV.png" group-title="JioTV",Dighvijay TV
http://'.$ipadd.'/autoq.php?c=Dighvijay_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sathiyam.png" group-title="JioTV",Sathiyam TV
http://'.$ipadd.'/autoq.php?c=Sathiyam';

fwrite($playlist, $modlist);

$modlist='
#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Captain_News.png" group-title="JioTV",Captain News
http://'.$ipadd.'/autoq.php?c=Captain_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Malai_Murasu.png" group-title="JioTV",Malai Murasu
http://'.$ipadd.'/autoq.php?c=Malai_Murasu

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Captain_tv.png" group-title="JioTV",Captain tv
http://'.$ipadd.'/autoq.php?c=Captain_tv

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sahana_Music.png" group-title="JioTV",Sahana Music
http://'.$ipadd.'/autoq.php?c=Sahana_Music

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Nambikkai.png" group-title="JioTV",Nambikkai
http://'.$ipadd.'/autoq.php?c=Nambikkai

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Travel_XP_Tamil.png" group-title="JioTV",Travel XP Tamil
http://'.$ipadd.'/autoq.php?c=Travel_XP_Tamil

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vendhar_TV.png" group-title="JioTV",Vendhar TV
http://'.$ipadd.'/autoq.php?c=Vendhar_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD5_Podhigai.png" group-title="JioTV",DD5 Podhigai
http://'.$ipadd.'/autoq.php?c=DD5_Podhigai

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Kannada_HD.png" group-title="JioTV",Colors Kannada HD
http://'.$ipadd.'/autoq.php?c=Colors_Kannada_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TV9_Karnataka.png" group-title="JioTV",TV9 Karnataka
http://'.$ipadd.'/autoq.php?c=TV9_Karnataka

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Kannada.png" group-title="JioTV",Zee Kannada
http://'.$ipadd.'/autoq.php?c=Zee_Kannada

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Kasturi.png" group-title="JioTV",Kasturi
http://'.$ipadd.'/autoq.php?c=Kasturi

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Public_TV.png" group-title="JioTV",Public TV
http://'.$ipadd.'/autoq.php?c=Public_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Kannada_News.png" group-title="JioTV",News18 Kannada News
http://'.$ipadd.'/autoq.php?c=ETV_Kannada_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Super.png" group-title="JioTV",Colors Super
http://'.$ipadd.'/autoq.php?c=Colors_Super

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Raj_Music_Kannada.png" group-title="JioTV",Raj Music Kannada
http://'.$ipadd.'/autoq.php?c=Raj_Music_Kannada

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sri_Sankara.png" group-title="JioTV",Sri Sankara
http://'.$ipadd.'/autoq.php?c=Sri_Sankara

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Public_Music.png" group-title="JioTV",Public Music
http://'.$ipadd.'/autoq.php?c=Public_Music

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Raj_News_Kannada.png" group-title="JioTV",Raj News Kannada
http://'.$ipadd.'/autoq.php?c=Raj_News_Kannada

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Maha_News.png" group-title="JioTV",Maha News
http://'.$ipadd.'/autoq.php?c=Maha_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/History_18_Telugu.png" group-title="JioTV",History TV18 HD Telugu
http://'.$ipadd.'/autoq.php?c=History_18_Telugu

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_BBC_Earth_HD_Telugu.png" group-title="JioTV",Sony BBC Earth HD Telugu
http://'.$ipadd.'/autoq.php?c=Sony_BBC_Earth_HD_Telugu

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Channel_Telugu.png" group-title="JioTV",Discovery Channel Telugu
http://'.$ipadd.'/autoq.php?c=Discovery_Channel_Telugu

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sri_Venkateshwar_Bhakti.png" group-title="JioTV",Sri Venkateshwar Bhakti
http://'.$ipadd.'/autoq.php?c=Sri_Venkateshwar_Bhakti

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Divya_Vani.png" group-title="JioTV",Divya Vani
http://'.$ipadd.'/autoq.php?c=Divya_Vani

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD9_chandana_kannada.png" group-title="JioTV",DD9 chandana (kannada)
http://'.$ipadd.'/autoq.php?c=DD9_chandana_kannada

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Gujarati.png" group-title="JioTV",Colors Gujarati
http://'.$ipadd.'/autoq.php?c=Colors_Gujarati

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Tv_9_Gujarat.png" group-title="JioTV",Tv 9 Gujarat
http://'.$ipadd.'/autoq.php?c=Tv_9_Gujarat

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/GS_TV.png" group-title="JioTV",GS TV
http://'.$ipadd.'/autoq.php?c=GS_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sandesh_News.png" group-title="JioTV",Sandesh News
http://'.$ipadd.'/autoq.php?c=Sandesh_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/CNBC_Bazaar_MNO.png" group-title="JioTV",CNBC Bazaar (MNO)
http://'.$ipadd.'/autoq.php?c=CNBC_Bazaar_MNO

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ETV_News_Gujarati.png" group-title="JioTV",News18 Gujarati
http://'.$ipadd.'/autoq.php?c=ETV_News_Gujarati

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ABP_Asmita.png" group-title="JioTV",ABP Asmita
http://'.$ipadd.'/autoq.php?c=ABP_Asmita

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/VTV_Gujarati.png" group-title="JioTV",VTV Gujarati
http://'.$ipadd.'/autoq.php?c=VTV_Gujarati

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_24_Kalak.png" group-title="JioTV",Zee 24 Kalak
http://'.$ipadd.'/autoq.php?c=Zee_24_Kalak

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD_Girnar.png" group-title="JioTV",DD Girnar
http://'.$ipadd.'/autoq.php?c=DD_Girnar

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Oriya.png" group-title="JioTV",Colors Oriya
http://'.$ipadd.'/autoq.php?c=Colors_Oriya

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Tarang_TV.png" group-title="JioTV",Tarang TV
http://'.$ipadd.'/autoq.php?c=Tarang_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Tarang_Music.png" group-title="JioTV",Tarang Music
http://'.$ipadd.'/autoq.php?c=Tarang_Music

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/OTV_Odisha_TV.png" group-title="JioTV",OTV (Odisha TV)
http://'.$ipadd.'/autoq.php?c=OTV_Odisha_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sarthak_TV.png" group-title="JioTV",Zee Odisha
http://'.$ipadd.'/autoq.php?c=Sarthak_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Prathana_TV.png" group-title="JioTV",Prathana TV
http://'.$ipadd.'/autoq.php?c=Prathana_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Kalinga.png" group-title="JioTV",Zee Kalinga
http://'.$ipadd.'/autoq.php?c=Zee_Kalinga

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Kanak_TV.png" group-title="JioTV",Kanak News
http://'.$ipadd.'/autoq.php?c=Kanak_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Kalinga_TV.png" group-title="JioTV",Kalinga TV
http://'.$ipadd.'/autoq.php?c=Kalinga_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Prameya_News_7.png" group-title="JioTV",Prameya News 7
http://'.$ipadd.'/autoq.php?c=Prameya_News_7

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ETV_News_Oriya.png" group-title="JioTV",News18 Oriya
http://'.$ipadd.'/autoq.php?c=ETV_News_Oriya

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Alankar_TV.png" group-title="JioTV",Alankar TV
http://'.$ipadd.'/autoq.php?c=Alankar_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/MBC.png" group-title="JioTV",MBC
http://'.$ipadd.'/autoq.php?c=MBC

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Naxatra_News.png" group-title="JioTV",Naxatra News
http://'.$ipadd.'/autoq.php?c=Naxatra_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD_Oriya.png" group-title="JioTV",DD Oriya
http://'.$ipadd.'/autoq.php?c=DD_Oriya

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Asianet_SD.png" group-title="JioTV",Asianet
http://'.$ipadd.'/autoq.php?c=Asianet_SD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Amrita_TV.png" group-title="JioTV",Amrita TV
http://'.$ipadd.'/autoq.php?c=Amrita_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Mazavali_Manorama_HD.png" group-title="JioTV",Mazavali Manorama HD
http://'.$ipadd.'/autoq.php?c=Mazavali_Manorama_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Mazhavil_Manorama.png" group-title="JioTV",Mazhavil Manorama
http://'.$ipadd.'/autoq.php?c=Mazhavil_Manorama

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Kairali_TV.png" group-title="JioTV",Kairali TV
http://'.$ipadd.'/autoq.php?c=Kairali_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/mh1_Music.png" group-title="JioTV",mh1 (Music)
http://'.$ipadd.'/autoq.php?c=mh1_Music

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Kairali_People_TV.PNG" group-title="JioTV",Kairali News
http://'.$ipadd.'/autoq.php?c=Kairali_People_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Manorama_News.png" group-title="JioTV",Manorama News
http://'.$ipadd.'/autoq.php?c=Manorama_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Mathrubhumi_News.png" group-title="JioTV",Mathrubhumi News
http://'.$ipadd.'/autoq.php?c=Mathrubhumi_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jaihind_tv.png" group-title="JioTV",Jaihind tv
http://'.$ipadd.'/autoq.php?c=Jaihind_tv

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jeevan_TV.png" group-title="JioTV",Jeevan TV
http://'.$ipadd.'/autoq.php?c=Jeevan_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Kappa_TV.png" group-title="JioTV",Kappa TV
http://'.$ipadd.'/autoq.php?c=Kappa_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Flower_TV.png" group-title="JioTV",Flower TV
http://'.$ipadd.'/autoq.php?c=Flower_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/GoodNews_Channel.png" group-title="JioTV",GoodNews Channel
http://'.$ipadd.'/autoq.php?c=GoodNews_Channel

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Janam_TV.png" group-title="JioTV",Janam TV
http://'.$ipadd.'/autoq.php?c=Janam_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Shalom.png" group-title="JioTV",Shalom
http://'.$ipadd.'/autoq.php?c=Shalom

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Kaumudy_TV.png" group-title="JioTV",Kaumudy TV
http://'.$ipadd.'/autoq.php?c=Kaumudy_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Kairali_WE_TV.png" group-title="JioTV",Kairali WE TV
http://'.$ipadd.'/autoq.php?c=Kairali_WE_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/News_18_Kerala.png" group-title="JioTV",News 18 Kerala
http://'.$ipadd.'/autoq.php?c=News_18_Kerala

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Raj_Music_Malayalam.png" group-title="JioTV",Raj Music Malayalam
http://'.$ipadd.'/autoq.php?c=Raj_Music_Malayalam

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Raj_News_Malayalam.png" group-title="JioTV",Raj News Malayalam
http://'.$ipadd.'/autoq.php?c=Raj_News_Malayalam

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Dillagi_TV.png" group-title="JioTV",Dillagi TV
http://'.$ipadd.'/autoq.php?c=Dillagi_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Dhamaal_TV.png" group-title="JioTV",Dhamaal TV
http://'.$ipadd.'/autoq.php?c=Dhamaal_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Andy_Haryana.png" group-title="JioTV",Andy Haryana
http://'.$ipadd.'/autoq.php?c=Andy_Haryana

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Manoranjan_Grand.png" group-title="JioTV",Manoranjan Grand
http://'.$ipadd.'/autoq.php?c=Manoranjan_Grand

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Purvaiya.png" group-title="JioTV",Zee Purvaiya
http://'.$ipadd.'/autoq.php?c=Zee_Purvaiya

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Punjabi_HP_Haryana.png" group-title="JioTV",Zee Punjabi HP Haryana
http://'.$ipadd.'/autoq.php?c=Zee_Punjabi_HP_Haryana

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/PTC_News.png" group-title="JioTV",PTC News
http://'.$ipadd.'/autoq.php?c=PTC_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Haryana_and_HP_News.png" group-title="JioTV",News18 Haryana and HP News
http://'.$ipadd.'/autoq.php?c=ETV_Haryana_and_HP_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/PTC_Punjabi.png" group-title="JioTV",PTC Punjabi
http://'.$ipadd.'/autoq.php?c=PTC_Punjabi

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/PTC_Chak_De.png" group-title="JioTV",PTC Chak De
http://'.$ipadd.'/autoq.php?c=PTC_Chak_De

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/9X_Tashan.png" group-title="JioTV",9X Tashan
http://'.$ipadd.'/autoq.php?c=9X_Tashan

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Chardikla_Time_TV.png" group-title="JioTV",Chardikla Time TV
http://'.$ipadd.'/autoq.php?c=Chardikla_Time_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Pitaara.png" group-title="JioTV",Pitaara
http://'.$ipadd.'/autoq.php?c=Pitaara

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Manoranjan_Movies.png" group-title="JioTV",Manoranjan Movies
http://'.$ipadd.'/autoq.php?c=Manoranjan_Movies

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Khusboo_TV.png" group-title="JioTV",Khushboo TV
http://'.$ipadd.'/autoq.php?c=Khusboo_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD_Punjabi.png" group-title="JioTV",DD Punjabi
http://'.$ipadd.'/autoq.php?c=DD_Punjabi

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DY_365.png" group-title="JioTV",DY 365
http://'.$ipadd.'/autoq.php?c=DY_365

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Nepal_one.png" group-title="JioTV",Nepal one
http://'.$ipadd.'/autoq.php?c=Nepal_one

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Rang.png" group-title="JioTV",Rang
http://'.$ipadd.'/autoq.php?c=Rang

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jonack.png" group-title="JioTV",Jonack
http://'.$ipadd.'/autoq.php?c=Jonack

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/News_18_Assam.png" group-title="JioTV",News 18 Assam
http://'.$ipadd.'/autoq.php?c=News_18_Assam

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Ramdhenu.png" group-title="JioTV",Ramdhenu
http://'.$ipadd.'/autoq.php?c=Ramdhenu

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Assam_Talks.png" group-title="JioTV",Assam Talks
http://'.$ipadd.'/autoq.php?c=Assam_Talks

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Rengoni.png" group-title="JioTV",Rengoni
http://'.$ipadd.'/autoq.php?c=Rengoni

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/North_East_Live.png" group-title="JioTV",North East Live
http://'.$ipadd.'/autoq.php?c=North_East_Live

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TWENTY_FOUR_NEWS.png" group-title="JioTV",Twenty Four News
http://'.$ipadd.'/autoq.php?c=Twenty_Four_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TV9_BHARATVARSH.png" group-title="JioTV",TV9 Bharatvarsh
http://'.$ipadd.'/autoq.php?c=TV9_Bharatvarsh

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TEHZEEB_TV.png" group-title="JioTV",Tehzeeb TV
http://'.$ipadd.'/autoq.php?c=Tehzeeb_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Kolkata_LIVE.png" group-title="JioTV",Kolkata Live
http://'.$ipadd.'/autoq.php?c=Kolkata_Live

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Aastha_Telugu.png" group-title="JioTV",Aastha Telugu
http://'.$ipadd.'/autoq.php?c=Aastha_Telugu

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Aastha_Tamil.png" group-title="JioTV",Aastha Tamil
http://'.$ipadd.'/autoq.php?c=Aastha_Tamil

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Aastha_Kannada.png" group-title="JioTV",Aastha Kannada
http://'.$ipadd.'/autoq.php?c=Aastha_Kannada

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Surya_Samachar.png" group-title="JioTV",Surya Samachar
http://'.$ipadd.'/autoq.php?c=Surya_Samachar

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Surya_Cinema.png" group-title="JioTV",Surya Cinema
http://'.$ipadd.'/autoq.php?c=Surya_Cinema

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Surya_Bhakti.png" group-title="JioTV",Surya Bhakti
http://'.$ipadd.'/autoq.php?c=Surya_Bhakti

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/CTVN_AKD_Plus.png" group-title="JioTV",Ctvn Akd Plus
http://'.$ipadd.'/autoq.php?c=Ctvn_Akd_Plus

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Calcutta_News.png" group-title="JioTV",Calcutta News
http://'.$ipadd.'/autoq.php?c=Calcutta_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Total_Tv_Haryana.png" group-title="JioTV",Total Tv Haryana
http://'.$ipadd.'/autoq.php?c=Total_Tv_Haryana

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Kolkata_TV.png" group-title="JioTV",Kolkata TV
http://'.$ipadd.'/autoq.php?c=Kolkata_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/SET_MAX.png" group-title="JioTV",Sony Max SD
http://'.$ipadd.'/autoq.php?c=SET_MAX

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sony_BBC_Earth_SD.png" group-title="JioTV",Sony BBC Earth SD
http://'.$ipadd.'/autoq.php?c=Sony_BBC_Earth_SD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/BBC_Marathi.png" group-title="JioTV",BBC Marathi
http://'.$ipadd.'/autoq.php?c=BBC_Marathi

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Millionlights.png" group-title="JioTV",Millionlights
http://'.$ipadd.'/autoq.php?c=Millionlights

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_01.png" group-title="JioTV",Swayam Prabha 01
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_01

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_02.png" group-title="JioTV",Swayam Prabha 02
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_02

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_03.png" group-title="JioTV",Swayam Prabha 03
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_03

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cinema.png" group-title="JioTV",JioCinema
http://'.$ipadd.'/autoq.php?c=Jio_Cinema

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/BTV.png" group-title="JioTV",BTV
http://'.$ipadd.'/autoq.php?c=BTV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Newslive.png" group-title="JioTV",Newslive
http://'.$ipadd.'/autoq.php?c=Newslive

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/PTC_Music.png" group-title="JioTV",PTC Music
http://'.$ipadd.'/autoq.php?c=PTC_Music

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Samara_News.png" group-title="JioTV",Samara News
http://'.$ipadd.'/autoq.php?c=Samara_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Ayush_TV.png" group-title="JioTV",Ayush TV
http://'.$ipadd.'/autoq.php?c=Ayush_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Desi_Channel.png" group-title="JioTV",Desi Channel
http://'.$ipadd.'/autoq.php?c=Desi_Channel

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/SaiTV.png" group-title="JioTV",Sai TV
http://'.$ipadd.'/autoq.php?c=SaiTV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Lakshya_TV.png" group-title="JioTV",Lakshya TV
http://'.$ipadd.'/autoq.php?c=Lakshya_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Angel_TV_HD.png" group-title="JioTV",Angel TV HD
http://'.$ipadd.'/autoq.php?c=Angel_TV_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/PTC_Simran.png" group-title="JioTV",PTC Simran
http://'.$ipadd.'/autoq.php?c=PTC_Simran

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sai_Leela.png" group-title="JioTV",Sai Leela
http://'.$ipadd.'/autoq.php?c=Sai_Leela

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Hindu_Dharmam.png" group-title="JioTV",Hindu Dharmam
http://'.$ipadd.'/autoq.php?c=Hindu_Dharmam

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Rujumargam_TV.png" group-title="JioTV",Mercy TV
http://'.$ipadd.'/autoq.php?c=Rujumargam_TV';

fwrite($playlist, $modlist);

$modlist='
#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Calvary.png" group-title="JioTV",Calvary
http://'.$ipadd.'/autoq.php?c=Calvary

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_04.png" group-title="JioTV",Swayam Prabha 04
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_04

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_05.png" group-title="JioTV",Swayam Prabha 05
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_05

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_06.png" group-title="JioTV",Swayam Prabha 06
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_06

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_07.png" group-title="JioTV",Swayam Prabha 07
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_07

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_08.png" group-title="JioTV",Swayam Prabha 08
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_08

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_09.png" group-title="JioTV",Swayam Prabha 09
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_09

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_10.png" group-title="JioTV",Swayam Prabha 10
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_10

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_11.png" group-title="JioTV",Swayam Prabha 11
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_11

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_12.png" group-title="JioTV",Swayam Prabha 12
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_12

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_13.png" group-title="JioTV",Swayam Prabha 13
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_13

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_14.png" group-title="JioTV",Swayam Prabha 14
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_14

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_15.png" group-title="JioTV",Swayam Prabha 15
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_15

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_16.png" group-title="JioTV",Swayam Prabha 16
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_16

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_17.png" group-title="JioTV",Swayam Prabha 17
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_17

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_18.png" group-title="JioTV",Swayam Prabha 18
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_18

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_19.png" group-title="JioTV",Swayam Prabha 19
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_19

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_20.png" group-title="JioTV",Swayam Prabha 20
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_20

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_21.png" group-title="JioTV",Swayam Prabha 21
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_21

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_22.png" group-title="JioTV",Swayam Prabha 22
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_22

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/evidya_1.png" group-title="JioTV",PM e Vidya 01
http://'.$ipadd.'/autoq.php?c=evidya_1

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/evidya_2.png" group-title="JioTV",PM e Vidya 02
http://'.$ipadd.'/autoq.php?c=evidya_2

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/evidya_3.png" group-title="JioTV",PM e Vidya 03
http://'.$ipadd.'/autoq.php?c=evidya_3

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/evidya_4.png" group-title="JioTV",PM e Vidya 04
http://'.$ipadd.'/autoq.php?c=evidya_4

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/evidya_5.png" group-title="JioTV",PM e Vidya 05
http://'.$ipadd.'/autoq.php?c=evidya_5

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/evidya_6.png" group-title="JioTV",PM e Vidya 06
http://'.$ipadd.'/autoq.php?c=evidya_6

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/evidya_7.png" group-title="JioTV",PM e Vidya 07
http://'.$ipadd.'/autoq.php?c=evidya_7

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD_Uttar_Pradesh.png" group-title="JioTV",DD Uttar Pradesh
http://'.$ipadd.'/autoq.php?c=DD_Uttar_Pradesh

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sanjha_TV.png" group-title="JioTV",Sanjha TV
http://'.$ipadd.'/autoq.php?c=Sanjha_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Anjan_TV.png" group-title="JioTV",Anjan TV
http://'.$ipadd.'/autoq.php?c=Anjan_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/GarvPunjabi.png" group-title="JioTV",Garv Punjabi
http://'.$ipadd.'/autoq.php?c=GarvPunjabi

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/JUSPunjabi.png" group-title="JioTV",JUSPunjabi
http://'.$ipadd.'/autoq.php?c=JUSPunjabi

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Peppers_TV.png" group-title="JioTV",Peppers TV
http://'.$ipadd.'/autoq.php?c=Peppers_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD_Bangla.png" group-title="JioTV",DD Bangla
http://'.$ipadd.'/autoq.php?c=DD_Bangla

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD_Malayalam.png" group-title="JioTV",DD Malayalam
http://'.$ipadd.'/autoq.php?c=DD_Malayalam

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD_urdu.png" group-title="JioTV",DD urdu
http://'.$ipadd.'/autoq.php?c=DD_urdu

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD_Kashir.png" group-title="JioTV",DD Kashir
http://'.$ipadd.'/autoq.php?c=DD_Kashir

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DD13_Guwahati_NE.png" group-title="JioTV",DD13 Guwahati NE
http://'.$ipadd.'/autoq.php?c=DD13_Guwahati_NE

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/QYOUHD.png" group-title="JioTV",The Q India
http://'.$ipadd.'/autoq.php?c=TheQIndia

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Namma_TV.png" group-title="JioTV",Namma TV
http://'.$ipadd.'/autoq.php?c=Namma_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Rangamanch.png" group-title="JioTV",Rangamanch
http://'.$ipadd.'/autoq.php?c=Rangamanch

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/PTC_Punjabi_Gold.png" group-title="JioTV",PTC Punjabi Gold 
http://'.$ipadd.'/autoq.php?c=PTC_Punjabi_Gold

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Indradhanu.png" group-title="JioTV",Indradhanu
http://'.$ipadd.'/autoq.php?c=Indradhanu

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Prag_News.png" group-title="JioTV",Prag News
http://'.$ipadd.'/autoq.php?c=Prag_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TV_5_Kannada.png" group-title="JioTV",TV 5 Kannada
http://'.$ipadd.'/autoq.php?c=TV_5_Kannada

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Tunes_6.png" group-title="JioTV",Tunes 6
http://'.$ipadd.'/autoq.php?c=Tunes_6

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/PTC_DHOL_TV.png" group-title="JioTV",PTC DHOL TV
http://'.$ipadd.'/autoq.php?c=PTC_DHOL_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Only_Music.png" group-title="JioTV",Only Music
http://'.$ipadd.'/autoq.php?c=Only_Music

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/PBN_Music.png" group-title="JioTV",PBN Music
http://'.$ipadd.'/autoq.php?c=PBN_Music

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Brit_Asia.png" group-title="JioTV",Brit Asia
http://'.$ipadd.'/autoq.php?c=Brit_Asia

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/PEACE_MUSIC.png" group-title="JioTV",PEACE MUSIC
http://'.$ipadd.'/autoq.php?c=PEACE_MUSIC

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Steelbird_Music.png" group-title="JioTV",Steelbird Music
http://'.$ipadd.'/autoq.php?c=Steelbird_Music

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Prajaa_TV.png" group-title="JioTV",Prajaa TV
http://'.$ipadd.'/autoq.php?c=Prajaa_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Bangla_Time.png" group-title="JioTV",Bangla Time
http://'.$ipadd.'/autoq.php?c=Bangla_Time

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Media_One_TV.png" group-title="JioTV",Media One TV
http://'.$ipadd.'/autoq.php?c=Media_One_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/InGoa24x7.png" group-title="JioTV",In Goa 24x7
http://'.$ipadd.'/autoq.php?c=InGoa24x7

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Boogle_Bollywood.png" group-title="JioTV",Boogle Bollywood
http://'.$ipadd.'/autoq.php?c=Boogle_Bollywood

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Propex_TV.png" group-title="JioTV",Propex TV
http://'.$ipadd.'/autoq.php?c=Propex_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sakhi_TV.png" group-title="JioTV",testii
http://'.$ipadd.'/autoq.php?c=Sakhi_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Bhaktisagar_2.png" group-title="JioTV",Bhaktisagar 2
http://'.$ipadd.'/autoq.php?c=Bhaktisagar_2

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Harekrsna.png" group-title="JioTV",Hare krsna
http://'.$ipadd.'/autoq.php?c=Harekrsna

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Garv_Swaminarayan.png" group-title="JioTV",Swar Shree
http://'.$ipadd.'/autoq.php?c=Garv_Swaminarayan

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Katyayani.png" group-title="JioTV",Katyayani
http://'.$ipadd.'/autoq.php?c=Katyayani

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Tulja_Bhavani.png" group-title="JioTV",Tulja Bhavani
http://'.$ipadd.'/autoq.php?c=Tulja_Bhavani

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sarv_Dharam_Sangam.png" group-title="JioTV",Sarv Dharam Sangam
http://'.$ipadd.'/autoq.php?c=Sarv_Dharam_Sangam

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Lord_Buddha.png" group-title="JioTV",Lord Buddha
http://'.$ipadd.'/autoq.php?c=Lord_Buddha

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/GarvGurbani.jpg" group-title="JioTV",Garv Punjabi Gurbani
http://'.$ipadd.'/autoq.php?c=GarvGurbani

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Fateh_TV.png" group-title="JioTV",Fateh TV
http://'.$ipadd.'/autoq.php?c=Fateh_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Valambhakti.png" group-title="JioTV",Valam TV
http://'.$ipadd.'/autoq.php?c=Valambhakti

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Om_Shanti.png" group-title="JioTV",Om Shanti
http://'.$ipadd.'/autoq.php?c=Om_Shanti

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Kartavya_Tv.png" group-title="JioTV",Kartavya TV
http://'.$ipadd.'/autoq.php?c=Kartavya_Tv

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Hamari_Sanskruti_TV.png" group-title="JioTV",Hamari Sanskruti
http://'.$ipadd.'/autoq.php?c=Hamari_Sanskruti_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/JUSOne.png" group-title="JioTV",JUSOne
http://'.$ipadd.'/autoq.php?c=JUSOne

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Soham_TV.png" group-title="JioTV",Soham TV
http://'.$ipadd.'/autoq.php?c=Soham_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Awakening.png" group-title="JioTV",Awakening
http://'.$ipadd.'/autoq.php?c=Awakening

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/SRMD.png" group-title="JioTV",SRMD HD
http://'.$ipadd.'/autoq.php?c=SRMD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Hare_Krsna_music.png" group-title="JioTV",Hare Krsna Music
http://'.$ipadd.'/autoq.php?c=Hare_Krsna_music

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/_evidya_8.png" group-title="JioTV",PM e Vidya 08
http://'.$ipadd.'/autoq.php?c=_evidya_8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/_evidya_9.png" group-title="JioTV",PM e Vidya 09
http://'.$ipadd.'/autoq.php?c=_evidya_9

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/evidya_10.png" group-title="JioTV",PM e Vidya 10
http://'.$ipadd.'/autoq.php?c=evidya_10

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/evidya_11.png" group-title="JioTV",PM e Vidya 11
http://'.$ipadd.'/autoq.php?c=evidya_11

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_1.png" group-title="JioTV",Vande Gujarat 1
http://'.$ipadd.'/autoq.php?c=Vande_Gujarat_1

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_2.png" group-title="JioTV",Vande Gujarat 2
http://'.$ipadd.'/autoq.php?c=Vande_Gujarat_2

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_3.png" group-title="JioTV",Vande Gujarat 3
http://'.$ipadd.'/autoq.php?c=Vande_Gujarat_3

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_4.png" group-title="JioTV",Vande Gujarat 4
http://'.$ipadd.'/autoq.php?c=Vande_Gujarat_4

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_5.png" group-title="JioTV",Vande Gujarat 5
http://'.$ipadd.'/autoq.php?c=Vande_Gujarat_5

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_6.png" group-title="JioTV",Vande Gujarat 6
http://'.$ipadd.'/autoq.php?c=Vande_Gujarat_6

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_7.png" group-title="JioTV",Vande Gujarat 7
http://'.$ipadd.'/autoq.php?c=Vande_Gujarat_7

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_8.png" group-title="JioTV",Vande Gujarat 8
http://'.$ipadd.'/autoq.php?c=Vande_Gujarat_8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_9.png" group-title="JioTV",Vande Gujarat 9
http://'.$ipadd.'/autoq.php?c=Vande_Gujarat_9

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_10.png" group-title="JioTV",Vande Gujarat 10
http://'.$ipadd.'/autoq.php?c=Vande_Gujarat_10

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_11.png" group-title="JioTV",Vande Gujarat 11
http://'.$ipadd.'/autoq.php?c=Vande_Gujarat_11

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_12.png" group-title="JioTV",Vande Gujarat 12
http://'.$ipadd.'/autoq.php?c=Vande_Gujarat_12

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_13.png" group-title="JioTV",Vande Gujarat 13
http://'.$ipadd.'/autoq.php?c=Vande_Gujarat_13

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_14.png" group-title="JioTV",Vande Gujarat 14
http://'.$ipadd.'/autoq.php?c=Vande_Gujarat_14

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_15.png" group-title="JioTV",Vande Gujarat 15
http://'.$ipadd.'/autoq.php?c=Vande_Gujarat_15

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_16.png" group-title="JioTV",Vande Gujarat 16
http://'.$ipadd.'/autoq.php?c=Vande_Gujarat_16

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/GSB_Worldwide.png" group-title="JioTV",G S B Worldwide
http://'.$ipadd.'/autoq.php?c=GSB_Worldwide

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Ashtavinayak.png" group-title="JioTV",Ashtavinayak
http://'.$ipadd.'/autoq.php?c=Ashtavinayak

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Toonami.png" group-title="JioTV",Testton
http://'.$ipadd.'/autoq.php?c=Toonami

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/News11.png" group-title="JioTV",News11
http://'.$ipadd.'/autoq.php?c=News11

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/RPLUS.png" group-title="JioTV",R Plus
http://'.$ipadd.'/autoq.php?c=RPLUS

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Lotus_News.png" group-title="JioTV",Lotus News
http://'.$ipadd.'/autoq.php?c=Lotus_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TEST1_HD.png" group-title="JioTV",TEST1 HD
http://'.$ipadd.'/autoq.php?c=TEST1_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TEST2_HD.png" group-title="JioTV",TEST2 HD
http://'.$ipadd.'/autoq.php?c=TEST2_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Bharat_Samachar.png" group-title="JioTV",Bharat Samachar
http://'.$ipadd.'/autoq.php?c=Bharat_Samachar

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Madhimugam_TV.png" group-title="JioTV",Madhimugam TV
http://'.$ipadd.'/autoq.php?c=Madhimugam_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Win_TV.png" group-title="JioTV",Win TV
http://'.$ipadd.'/autoq.php?c=Win_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Mantavya_News.png" group-title="JioTV",Mantavya News
http://'.$ipadd.'/autoq.php?c=Mantavya_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/4_TV.png" group-title="JioTV",4 TV
http://'.$ipadd.'/autoq.php?c=4_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/News_1_India.png" group-title="JioTV",News 1 India
http://'.$ipadd.'/autoq.php?c=News_1_India

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/APN_News.png" group-title="JioTV",APN News
http://'.$ipadd.'/autoq.php?c=APN_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TV_100.png" group-title="JioTV",TV 100
http://'.$ipadd.'/autoq.php?c=TV_100

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/A1_TV_Rajasthan.png" group-title="JioTV",A1 TV Rajasthan
http://'.$ipadd.'/autoq.php?c=A1_TV_Rajasthan

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/INH_24x7.png" group-title="JioTV",INH 24x7
http://'.$ipadd.'/autoq.php?c=INH_24x7

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Goa365.png" group-title="JioTV",GOA 365
http://'.$ipadd.'/autoq.php?c=Goa365

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Prime_News.png" group-title="JioTV",Prime News
http://'.$ipadd.'/autoq.php?c=Prime_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/PrudentHD.png" group-title="JioTV",Prudent
http://'.$ipadd.'/autoq.php?c=PrudentHD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Khabar_Fast.png" group-title="JioTV",Khabar Fast
http://'.$ipadd.'/autoq.php?c=Khabar_Fast

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/JUS24x7.png" group-title="JioTV",JUS 24x7
http://'.$ipadd.'/autoq.php?c=JUS24x7

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/RDX_News.png" group-title="JioTV",RDX Goa
http://'.$ipadd.'/autoq.php?c=RDX_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/HNN_24x7.png" group-title="JioTV",HNN 24x7
http://'.$ipadd.'/autoq.php?c=HNN_24x7

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jantantra.png" group-title="JioTV",Jantantra
http://'.$ipadd.'/autoq.php?c=Jantantra

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Insight.png" group-title="JioTV",Insight
http://'.$ipadd.'/autoq.php?c=Insight

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Asianet.png" group-title="JioTV",Asianet HD
http://'.$ipadd.'/autoq.php?c=Asianet

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jalsa_Movies_HD.png" group-title="JioTV",Jalsha Movies HD
http://'.$ipadd.'/autoq.php?c=Jalsa_Movies_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Digishala.png" group-title="JioTV",Digishala
http://'.$ipadd.'/autoq.php?c=Digishala

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Manipur_Educational_Channel.png" group-title="JioTV",Lairik
http://'.$ipadd.'/autoq.php?c=Manipur_Educational_Channel

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Meluha.png" group-title="JioTV",Meluha
http://'.$ipadd.'/autoq.php?c=Meluha

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vidya.png" group-title="JioTV",Vidya
http://'.$ipadd.'/autoq.php?c=Vidya

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Nipuna.png" group-title="JioTV",Nipuna
http://'.$ipadd.'/autoq.php?c=Nipuna

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Home_Learning_Gujarat1.png" group-title="JioTV",Home Learning Gujarat Standard-10
http://'.$ipadd.'/autoq.php?c=Home_Learning_Gujarat1

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/KITE_Victers.png" group-title="JioTV",KITE VICTERS
http://'.$ipadd.'/autoq.php?c=KITE_Victers

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Akal_Academy_Group.png" group-title="JioTV",Akal Academy Group
http://'.$ipadd.'/autoq.php?c=Akal_Academy_Group

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/IMS_School.png" group-title="JioTV",IMS Schools Grade 1 - 8
http://'.$ipadd.'/autoq.php?c=IMS_School

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Amma.png" group-title="JioTV",AMMA TV
http://'.$ipadd.'/autoq.php?c=Amma

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vedant_TV.png" group-title="JioTV",Vedant TV
http://'.$ipadd.'/autoq.php?c=Vedant_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Haryanvi_Hits.png" group-title="JioTV",Haryanvi Hits
http://'.$ipadd.'/autoq.php?c=Haryanvi_Hits

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/AAS_Vidyalaya.png" group-title="JioTV",AAS Vidyalaya
http://'.$ipadd.'/autoq.php?c=AAS_Vidyalaya

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Khandoba_Majha_Jejuri.png" group-title="JioTV",Khandoba Majha, Jejuri
http://'.$ipadd.'/autoq.php?c=Khandoba_Majha_Jejuri

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/DharmaGranth_TV.png" group-title="JioTV",Dharm Granth TV
http://'.$ipadd.'/autoq.php?c=DharmaGranth_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/P_News.png" group-title="JioTV",P News
http://'.$ipadd.'/autoq.php?c=P_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Malnadu_TV.png" group-title="JioTV",Malanadu TV
http://'.$ipadd.'/autoq.php?c=Malnadu_TV


#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sanatan_TV.png" group-title="JioTV",Sanatan TV
http://'.$ipadd.'/autoq.php?c=Sanatan_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Express_TV.png" group-title="JioTV",Express TV
http://'.$ipadd.'/autoq.php?c=Express_TV';

fwrite($playlist, $modlist);

$modlist='
#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Express_TV_Shikshana.png" group-title="JioTV",Express Shikshana
http://'.$ipadd.'/autoq.php?c=Express_TV_Shikshana

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Jigyasa_TV.png" group-title="JioTV",Jigyasa TV
http://'.$ipadd.'/autoq.php?c=Jigyasa_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/35mm.png" group-title="JioTV",35mm
http://'.$ipadd.'/autoq.php?c=35mm

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sristi_TV.png" group-title="JioTV",Sristi TV
http://'.$ipadd.'/autoq.php?c=Sristi_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Atmadarshan_TV.png" group-title="JioTV",Aatmadarshan TV
http://'.$ipadd.'/autoq.php?c=Atmadarshan_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TEST3_HD.png" group-title="JioTV",TEST3 HD
http://'.$ipadd.'/autoq.php?c=TEST3_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TEST4_HD.png" group-title="JioTV",TEST4 HD
http://'.$ipadd.'/autoq.php?c=TEST4_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TEST5_HD.png" group-title="JioTV",TEST5 HD
http://'.$ipadd.'/autoq.php?c=TEST5_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TEST6_HD.png" group-title="JioTV",TEST6 HD
http://'.$ipadd.'/autoq.php?c=TEST6_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TEST7_HD.png" group-title="JioTV",TEST7 HD
http://'.$ipadd.'/autoq.php?c=TEST7_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TEST8_HD.png" group-title="JioTV",TEST8 HD
http://'.$ipadd.'/autoq.php?c=TEST8_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Hare_Krsna_Pravachan.png" group-title="JioTV",Hare Krsna Pravachan
http://'.$ipadd.'/autoq.php?c=Hare_Krsna_Pravachan

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/JioCinema_Shows.png" group-title="JioTV",JioCinema Shows
http://'.$ipadd.'/autoq.php?c=JioCinema_Shows

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/JioCinema_Action.png" group-title="JioTV",JioCinema Action
http://'.$ipadd.'/autoq.php?c=JioCinema_Action

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/JioCinema_Comedy.png" group-title="JioTV",JioCinema Comedy
http://'.$ipadd.'/autoq.php?c=JioCinema_Comedy

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Highbrow.png" group-title="JioTV",Highbrow
http://'.$ipadd.'/autoq.php?c=Highbrow

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/LordShri_Vitthal.png" group-title="JioTV",Lord Shri Vitthal Rukmini
http://'.$ipadd.'/autoq.php?c=LordShri_Vitthal

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Rajyoga_TV.png" group-title="JioTV",Rajyoga TV
http://'.$ipadd.'/autoq.php?c=Rajyoga_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Rajyoga_Malayalam.png" group-title="JioTV",Rajyoga Malayalam
http://'.$ipadd.'/autoq.php?c=Rajyoga_Malayalam

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/GovindDevji_Jaipur.png" group-title="JioTV",Mandir Shri Govinddevji-Jaipur
http://'.$ipadd.'/autoq.php?c=GovindDevji_Jaipur

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Dagdusheth_Pune.png" group-title="JioTV",Dagdusheth Ganpati - Pune
http://'.$ipadd.'/autoq.php?c=Dagdusheth_Pune

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Nimbark.png" group-title="JioTV",Nimbark TV
http://'.$ipadd.'/autoq.php?c=Nimbark

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Click_Life.png" group-title="JioTV",Click Life
http://'.$ipadd.'/autoq.php?c=Click_Life

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Ambabai_Temple.png" group-title="JioTV",Ambabai Temple-Kolhapur
http://'.$ipadd.'/autoq.php?c=Ambabai_Temple

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TEST9_HD.png" group-title="JioTV",TEST9 HD
http://'.$ipadd.'/autoq.php?c=TEST9_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TEST10_HD.png" group-title="JioTV",TEST10 HD
http://'.$ipadd.'/autoq.php?c=TEST10_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/God_TV.png" group-title="JioTV",God TV
http://'.$ipadd.'/autoq.php?c=God_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Tripura_News.png" group-title="JioTV",Headlines Tripura
http://'.$ipadd.'/autoq.php?c=Tripura_News

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Global_Sanjh.png" group-title="JioTV",Global Sanjh
http://'.$ipadd.'/autoq.php?c=Sanjh_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ABZY_Dhakad.png" group-title="JioTV",ABZY Dhakad
http://'.$ipadd.'/autoq.php?c=ABZY_Dhakad

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ABZY_Cool.png" group-title="JioTV",ABZY Cool
http://'.$ipadd.'/autoq.php?c=ABZY_Cool

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/ABZY_Movies.png" group-title="JioTV",ABZY Movies
http://'.$ipadd.'/autoq.php?c=ABZY_Movies

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Udupi_Krishna_Temple.png" group-title="JioTV",Sh Krishna Matta Adamaru Paryaya UDUPI
http://'.$ipadd.'/autoq.php?c=Udupi_Krishna_Temple

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sugran.png" group-title="JioTV",Sugran
http://'.$ipadd.'/autoq.php?c=Sugran

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Hanuman_Mahavir_Temple.png" group-title="JioTV",Mahavir Mandir Patna
http://'.$ipadd.'/autoq.php?c=Hanuman_Mahavir_Temple

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Vignesh_TV.PNG" group-title="JioTV",Vignesh TV
http://'.$ipadd.'/autoq.php?c=Vignesh_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Omkareshwar_Temple.png" group-title="JioTV",Shri Omkareshwar Mandir
http://'.$ipadd.'/autoq.php?c=Omkareshwar_Temple

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/StarTell.png" group-title="JioTV",Stars Tell
http://'.$ipadd.'/autoq.php?c=StarTell

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Wellness_TV.png" group-title="JioTV",Wellness
http://'.$ipadd.'/autoq.php?c=Wellness_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Iskon_Temples_New.png" group-title="JioTV",ISKCON Darshan
http://'.$ipadd.'/autoq.php?c=Iskon_Temples_New

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sri_Patna_Sahib.png" group-title="JioTV",Takht Sri Patna Sahib - Patna
http://'.$ipadd.'/autoq.php?c=Sri_Patna_Sahib

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Shani_Shingnapur.png" group-title="JioTV",Shani Shingnapur
http://'.$ipadd.'/autoq.php?c=Shani_Shingnapur

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Prati_Shirdi_Saibaba.png" group-title="JioTV",Prati Shirdi Saibaba
http://'.$ipadd.'/autoq.php?c=Prati_Shirdi_Saibaba

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Ganga_Darshan_Varanasi.png" group-title="JioTV",Ganga Darshan Varanasi
http://'.$ipadd.'/autoq.php?c=Ganga_Darshan_Varanasi

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Ashtavinayak_Ozar.png" group-title="JioTV",Ashtavinayak Ozar
http://'.$ipadd.'/autoq.php?c=Ashtavinayak_Ozar

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/SVBC2.png" group-title="JioTV",SVBC2
http://'.$ipadd.'/autoq.php?c=SVBC2

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Ichhapuran_Balaji_Rajasthan.png" group-title="JioTV",Ichhapuran Balaji Rajasthan
http://'.$ipadd.'/autoq.php?c=Ichhapuran_Balaji_Rajasthan

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Iskon_Girgaon.png" group-title="JioTV",Iskon Girgaon
http://'.$ipadd.'/autoq.php?c=Iskon_Girgaon

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Ashtavinayak_Ranjangaon.png" group-title="JioTV",Ashtavinayak Ranjangaon
http://'.$ipadd.'/autoq.php?c=Ashtavinayak_Ranjangaon

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Karani_Mata_Rajasthan.png" group-title="JioTV",Karani Mata Rajasthan
http://'.$ipadd.'/autoq.php?c=Karani_Mata_Rajasthan

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Mahalaxmi_Mumbai.png" group-title="JioTV",Mahalaxmi Mumbai
http://'.$ipadd.'/autoq.php?c=Mahalaxmi_Mumbai

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Babulnaath_Mumbai.png" group-title="JioTV",Babulnaath Mumbai
http://'.$ipadd.'/autoq.php?c=Babulnaath_Mumbai

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Mumbadevi_Mumbai.png" group-title="JioTV",Mumbadevi Mumbai
http://'.$ipadd.'/autoq.php?c=Mumbadevi_Mumbai

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/BBC_Hindi.png" group-title="JioTV",BBC News Hindi
http://'.$ipadd.'/autoq.php?c=BBC_Hindi

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TIME8.png" group-title="JioTV",TIME8
http://'.$ipadd.'/autoq.php?c=TIME8

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Krishna_Vani.png" group-title="JioTV",Krishna Vani
http://'.$ipadd.'/autoq.php?c=Krishna_Vani

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Wah_Punjabi.png" group-title="JioTV",Wah Punjabi
http://'.$ipadd.'/autoq.php?c=Wah_Punjabi

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/YTV_INDIA.png" group-title="JioTV",YTV India
http://'.$ipadd.'/autoq.php?c=YTV_INDIA

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/9_Bharat_Samachar.png" group-title="JioTV",9 Bharat Samachar
http://'.$ipadd.'/autoq.php?c=9_Bharat_Samachar

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/News_Only.png" group-title="JioTV",News Only
http://'.$ipadd.'/autoq.php?c=News_Only

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Gurkebaani.png" group-title="JioTV",Gurkibani
http://'.$ipadd.'/autoq.php?c=Gurkebaani

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TEST11_HD.png" group-title="JioTV",TEST11 HD
http://'.$ipadd.'/autoq.php?c=TEST11_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TEST12_HD.png" group-title="JioTV",TEST12 HD
http://'.$ipadd.'/autoq.php?c=TEST12_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Nakoda_Temple.png" group-title="JioTV",Shri Jain Nakoda Parshwanath Tirth
http://'.$ipadd.'/autoq.php?c=Nakoda_Temple

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Argus_TV.png" group-title="JioTV",Argus News
http://'.$ipadd.'/autoq.php?c=Argus_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Braj_Darshan.png" group-title="JioTV",Braj Darshan
http://'.$ipadd.'/autoq.php?c=Braj_Darshan

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Bhoomi_TV.png" group-title="JioTV",BHOOMI 24x7
http://'.$ipadd.'/autoq.php?c=Bhoomi_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Kannur_one.png" group-title="JioTV",Kannur One
http://'.$ipadd.'/autoq.php?c=Kannur_one

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/TEST13_HD.png" group-title="JioTV",TEST13 HD
http://'.$ipadd.'/autoq.php?c=TEST13_HD

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/World_Punjab.png" group-title="JioTV",World  Punjabi
http://'.$ipadd.'/autoq.php?c=World_Punjab

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Samachar_Today.png" group-title="JioTV",Samachar Today
http://'.$ipadd.'/autoq.php?c=Samachar_Today

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sangat_TV.png" group-title="JioTV",Sangat TV
http://'.$ipadd.'/autoq.php?c=Sangat_TV

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/Sarvamangala.png" group-title="JioTV",Sarvamangala
http://'.$ipadd.'/autoq.php?c=Sarvamangala

#EXTINF:-1 tvg-logo="http://sgdccdnems04.cdnsrv.jio.com/jiotv.catchup.cdn.jio.com/dare_images/images/AB_News.png" group-title="JioTV",AB News
http://'.$ipadd.'/autoq.php?c=AB_News
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