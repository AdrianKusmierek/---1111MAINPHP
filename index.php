<?php
include("vendor/smarty/smarty/libs/Smarty.class.php");

if (!isset($_GET["m"])) $_GET["m"] = 1;

$smarty = new Smarty;
$html = "";
$pointer = $_GET["m"];
$month_length = cal_days_in_month(CAL_GREGORIAN, $_GET["m"], 2022);
$month_length_next = ($_GET["m"] == 1) ? cal_days_in_month(CAL_GREGORIAN, 1, 2022) : cal_days_in_month(CAL_GREGORIAN, $_GET["m"] - 1, 2022);
$month_length_prev = ($_GET["m"] == 12) ? cal_days_in_month(CAL_GREGORIAN, 1, 2022) : cal_days_in_month(CAL_GREGORIAN, $_GET["m"] + 1, 2022);
$y = date_format(date_create(date("Y-$pointer-01")), "N");

for ($i = $month_length_prev + 2 - $y; $i <= $month_length_prev; $i++) {
    $html .= "<div class='pm-days'>" . $i . "</div>";
}

for ($i = 1; $i <= $month_length; $i++) {
    $_x = date("N");

    if ($i == date("d") && date("m") == $_GET["m"]) {
        $html .= "<div class='now days' style='grid-column: $_x'>" . $i . "</div>";
    } else if ($i == 1) {
        $html .= "<div class='days' style='grid-column: $y'>" . $i . "</div>";
    } else {
        $html .= "<div class='days'>" . $i . "</div>";
    }
}

for ($i = 1; $i <= $month_length_next - (18 + $y); $i++) {
    if ($pointer == 1 && $i == 7) {
        continue;
    } else {
        $html .= "<div class='nm-days'>" . $i . "</div>";
    }
}

$smarty->assign("title", DateTime::createFromFormat('!m', $_GET["m"])->format("F"));
$smarty->assign("html", $html);
$smarty->display("index.tpl");
?>