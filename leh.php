<?php 
$date= date("d/m/y");
$date1= date("d");
$file=file_get_contents("http://14.139.247.11/citywx/city_weather.php?id=42034");
$file=str_replace('<center>','',$file);
$file=str_replace('Past 24 Hours Weather Data','',$file);
$file=str_replace('img/leh.gif','',$file);
$file=str_replace('Local Weather Report and Forecast For:','',$file);
$file=str_replace('<FONT color=blue>Leh</Font>','============<br>*Leh*',$file);
$file=str_replace('<B>Dated :','Date: _',$file);
$file=str_replace('2017</b>','2017_<br>============',$file);
$file=str_replace('<table','<span',$file);
$file=str_replace('tr','br',$file);
$file=str_replace('</tr>','',$file);
$file=str_replace('</br>','',$file);
$file=str_replace('<img','<imgs',$file);
$file=str_replace('<IMG','<IMGS',$file);
$file=str_replace('font','fonts',$file);
$file=str_replace('<br><td','<td',$file);
$file=str_replace("7 Day's","============<br>7 Day's",$file);
$file=str_replace('<a href="http://www.imd.gov.in/section/climate/exbreme/leh2.htm">Exbreme & Climatological Information</a>','',$file);
$file=str_replace('( )','',$file);
$file=str_replace('Recorded. on ','',$file);
$file=str_replace('(Recorded from 0830 hrs IST <BR>of yesterday to 0830 hrs IST of today)','',$file);
$file=str_replace('with possibility of','or',$file);
echo $file;
echo "</b>";
?>