<?php
require "./supply-model.php";

$Nos = [];
$SubNos = [];
$LeaderLVs = [];
$MinMemNums = [];
$times = [];
$Humans = [];
$Bullets = [];
$Foods = [];
$Parts = [];
$ItemCodes = [];

$supplymodel = new SupplyModel();

$supplyArr = $supplymodel->all();

foreach ($supplyArr as $key => $value)
{
  $hour = floor($value["WatingTime"]/60);
  $hour = str_pad($hour,"2","0",STR_PAD_LEFT);
  $minute = $value["WatingTime"]%60;
  $minute = str_pad($minute,"2","0",STR_PAD_LEFT);
  $Totalval = $value["Human"] + ($value["Bullet"]*2) + $value["Food"] + ($value["Part"]*3);

  $Nos[] = $value["No"];
  $SubNos[] = $value["SubNo"];
  $LeaderLVs[] = $value["LeaderLV"];
  $MinMemNums[] = $value["MinMemNum"];
  $times[] = $hour.":".$minute;
  $Humans[] = $value["Human"];
  $Bullets[] = $value["Bullet"];
  $Foods[] = $value["Food"];
  $Parts[] = $value["Part"];

  $Total[] = $Totalval;
  $Efficiency[] = round($Totalval*180/$value["WatingTime"]);
  $ItemCodes[] = $value["ItemCode"];


}

include "./supply-view.php";

?>
