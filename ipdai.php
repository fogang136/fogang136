<?php
//id=1-200
$url="http://www.gdtv.cn/m2o/player/channel_xml.php?id=".$_GET['id'];
$ch = curl_init();
curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 2.0.50727;)');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
$re = curl_exec($ch);
$tmp=json_decode(json_encode(simplexml_load_string($re)),true);
$tmp=str_replace('stream1','nclive',$tmp['drm'].'?url='.$tmp['video']['@attributes']['baseUrl'].$tmp['video']['item'][0]['@attributes']['url'].'live.m3u8');
curl_setopt($ch, CURLOPT_URL, $tmp);
$re = curl_exec($ch);
curl_close($ch);
header('Location:'.$re);
?>
