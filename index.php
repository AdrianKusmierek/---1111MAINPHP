<?php
include("vendor/smarty/smarty/libs/Smarty.class.php");

$smarty = new Smarty;
$mainout = "";

$fday = date_format(date_create(date("Y-m-01")), "N");
$pml = cal_days_in_month(CAL_GREGORIAN,date("m") - 1, date("B"));
$nml = cal_days_in_month(CAL_GREGORIAN,date("m") + 1, date("B"));
$ml = date("t");
$prev_out = [];
$next_out = [];
$out = [];


if (date_format(date_create(date("Y-m-01")), "N") == 1) {
    array_push($prev_out, "<div class='pm-days'>$pml</div>");
} elseif (date_format(date_create(date("Y-m-01")), "N") == 2) {
    for ($x = $pml; $x <= $pml; $x++) {
        array_push($prev_out, "<div class='pm-days'>$x</div>");
    }
} elseif (date_format(date_create(date("Y-m-01")), "N") == 3) {
    for ($x = $pml - 1; $x <= $pml; $x++) {
        array_push($prev_out, "<div class='pm-days'>$x</div>");
    }
} elseif (date_format(date_create(date("Y-m-01")), "N") == 4) {
    for ($x = $pml - 2; $x <= $pml; $x++) {
        array_push($prev_out, "<div class='pm-days'>$x</div>");
    }
} elseif (date_format(date_create(date("Y-m-01")), "N") == 5) {
    for ($x = $pml - 3; $x <= $pml; $x++) {
        array_push($prev_out, "<div class='pm-days'>$x</div>");
    }
} elseif (date_format(date_create(date("Y-m-01")), "N") == 6) {
    for ($x = $pml - 4; $x <= $pml; $x++) {
        array_push($prev_out, "<div class='pm-days'>$x</div>");
    }
} elseif (date_format(date_create(date("Y-m-01")), "N") == 7) {
    for ($x = $pml - 5; $x <= $pml; $x++) {
        array_push($prev_out, "<div class='pm-days'>$x</div>");
    }
}

if (date_format(date_create(date("Y-m-$ml")), "N") == 1) {
    for ($x = 1; $x <= 13; $x++) {
        array_push($next_out, "<div class='pm-days'>$x</div>");
    }
} elseif (date_format(date_create(date("Y-m-$ml")), "N") == 2) {
    for ($x = 1; $x <= 12; $x++) {
        array_push($next_out, "<div class='pm-days'>$x</div>");
    }
} elseif (date_format(date_create(date("Y-m-$ml")), "N") == 3) {
    for ($x = 1; $x <= 11; $x++) {
        array_push($next_out, "<div class='pm-days'>$x</div>");
    }
} elseif (date_format(date_create(date("Y-m-$ml")), "N") == 4) {
    for ($x = 1; $x <= 10; $x++) {
        array_push($next_out, "<div class='pm-days'>$x</div>");
    }
} elseif (date_format(date_create(date("Y-m-$ml")), "N") == 5) {
    for ($x = 1; $x <= 9; $x++) {
        array_push($next_out, "<div class='pm-days'>$x</div>");
    }
} elseif (date_format(date_create(date("Y-m-$ml")), "N") == 6) {
    for ($x = 1; $x <= 8; $x++) {
        array_push($next_out, "<div class='pm-days'>$x</div>");
    }
}

for ($y = 1; $y <= $ml; $y++) {
    if ($y == date("j")) {
        array_push($out, "<div class='now day-{$y}'>{$y}</div>");
    } else if (date_format(date_create(date("Y-m-$x")), "N") == $fday) {
        array_push($out, "<div class='cm-days day-{$y}' style='grid-column: $fday;'>{$y}</div>");
    } else {
        array_push($out, "<div class='cm-days day-{$y}'>{$y}</div>");
    }
}

$smarty->assign("mainout", $mainout);
$smarty->display("index.tpl");
?>