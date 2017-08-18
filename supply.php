<?php
require "./supply-model.php";

$Nos = [];
$SubNos = [];
$LeaderLVs = [];
$MinMemNums = [];
$WatingTime = [];
$times = [];
$Humans = [];
$Bullets = [];
$Foods = [];
$Parts = [];

////QuickRepair, QuickMarionette, Marionette, Arms, Coin
$QuickRepair = [];
$QuickMarionette = [];
$Marionette = [];
$Arms = [];
$Coin = [];

$supplymodel = new SupplyModel();

$supplyArr = $supplymodel->all();

foreach ($supplyArr as $key => $value)
{
  $hour = floor($value["WatingTime"]/60);
  $hour = str_pad($hour,"2","0",STR_PAD_LEFT);
  $minute = $value["WatingTime"]%60;
  $minute = str_pad($minute,"2","0",STR_PAD_LEFT);
  $Totalval = $value["Human"] + $value["Bullet"] + $value["Food"] + ($value["Part"]*3);

  $Nos[] = $value["No"];
  $SubNos[] = $value["SubNo"];
  $LeaderLVs[] = $value["LeaderLV"];
  $MinMemNums[] = $value["MinMemNum"];
  $WatingTime[] = $value["WatingTime"];
  $times[] = $hour.":".$minute;
  $Humans[] = $value["Human"];
  $Bullets[] = $value["Bullet"];
  $Foods[] = $value["Food"];
  $Parts[] = $value["Part"];

  $Total[] = $Totalval;
  $Efficiency[] = round($Totalval*180/$value["WatingTime"]);

  //아이템 이름을 받아온다
  $ItemNames = $supplymodel->getItemName($value["ItemCode"]);

  foreach ($ItemNames as $key => $value) {
    //QuickRepair, QuickMarionette, Marionette, Arms, Coin

    $QuickRepair[] = $value["QuickRepair"];
    $QuickMarionette[] = $value["QuickMarionette"];
    $Marionette[] = $value["Marionette"];
    $Arms[] = $value["Arms"];
    $Coin[] = $value["Coin"];
    // switch ($key) {
    //   case 'QuickRepair':
    //   $QuickRepair[] = $value["QuickRepair"];
    //     break;
    //   case 'QuickMarionette':
    //   $QuickMarionette[] = $value["QuickMarionette"];
    //     break;
    //   case 'Marionette':
    //   $Marionette[] = $value["Marionette"];
    //     break;
    //   case 'Arms':
    //   $Arms[] = $value["Arms"];
    //     break;
    //   case 'Coin':
    //   $Coin[] = $value["Coin"];
    //     break;
    //   default:
    //     # code...
    //     break;
    // }

  }


}

include "./supply-view.php";

?>
