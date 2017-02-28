<?php
/**
 * 获取地图两个坐标之间的距离
 */
include('../util/origin.inc.php');


define('PI',3.1415926535898);
define('EARTH_RADIUS',6378.137);

function GetDistance($lat1, $lng1, $lat2, $lng2){
  $radLat1 = $lat1 * (PI / 180);
  $radLat2 = $lat2 * (PI / 180);
  $a = $radLat1 - $radLat2;
  $b = ($lng1 * (PI / 180)) - ($lng2 * (PI / 180));
  $s = 2 * asin(sqrt(pow(sin($a/2),2) + cos($radLat1)*cos($radLat2)*pow(sin($b/2),2)));
  $s = $s * EARTH_RADIUS;
  $s = round($s * 10000) / 10000;
  return $s;
}


$uid=intval($_POST['uid']);
$shop=$db->get_One('select lat,lng from `web_shop` where userid='.$uid);
$lat=trim($_POST['lat']);
$lng=trim($_POST['lng']);

$distance=GetDistance($lat,$shop['lat'],$lng,$shop['lng']);

$km=number_format(intval($distance)/1000,2);
print_r($km);