<?php
include("vendor/smarty/smarty/libs/Smarty.class.php");

$smarty = new Smarty;

$smarty->assign("ml", cal_days_in_month(CAL_GREGORIAN,date("m"),2005));
$smarty->assign("pml", cal_days_in_month(CAL_GREGORIAN,date("m") - 1,2005));
$smarty->assign("nml", cal_days_in_month(CAL_GREGORIAN,date("m") + 1,2005));
$smarty->assign("fday", date_format(date_create(date("Y-m-01")), "N"));

$smarty->display("index.tpl");
?>