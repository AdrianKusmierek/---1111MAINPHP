<?php
include("vendor/smarty/smarty/libs/Smarty.class.php");
if (!isset($_GET["m"])) $_GET["m"] = 1;

$host = "localhost";
$user = "root";
$pass = "Bananek@1223";
$db = "main";

try {
    $con = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = $con->prepare("select name, start, end from events where disabled != true;");
    $sql->execute();
} catch (PDOException $err) {
    echo "Connection Failed: " . $err->getMessage();
}

$smarty = new Smarty;
$html = "";
$pointer = $_GET["m"];
$month_length = cal_days_in_month(CAL_GREGORIAN, $pointer, 2022);
$month_length_next = ($pointer == 1) ? cal_days_in_month(CAL_GREGORIAN, 12, 2022) : cal_days_in_month(CAL_GREGORIAN, $pointer - 1, 2022);
$month_length_prev = ($pointer == 12) ? cal_days_in_month(CAL_GREGORIAN, 1, 2022) : cal_days_in_month(CAL_GREGORIAN, $pointer + 1, 2022);
$y = date("N", strtotime("2022-$pointer-01"));

function displayEvent($sql, $pointer, $i) {
    $out = "";

    while ($r = $sql->fetch(PDO::FETCH_ASSOC)) {
        $_namePointer = $r["name"];

        if (date("Y-m-d", strtotime("2022-$pointer-$i")) < date("Y-m-d", strtotime($r["end"])) && date("Y-m-d", strtotime("2022-$pointer-$i")) > date("Y-m-d", strtotime($r["start"]))) {
            $out .= "<div class='event event-$i'><p class='etext'>$_namePointer</p></div>";
        }
    }

    return $out;
}

for ($i = $month_length_prev + 2 - $y; $i <= $month_length_prev; $i++) {
    $html .= "<div class='pm-day'>" . $i . "</div>";
}

for ($i = 1; $i <= $month_length; $i++) {
    $_x = date("N");

    if ($i == 1) {
        $html .= "<div class='day' style='grid-column: $y'>" . $i . "<div class='wrapper'>";
        $html .= displayEvent($sql, $pointer, $i);
        $html .= "</div></div>";
    } else if ($i == date("d") && date("m") == $pointer) {
        $html .= "<div class='now day' style='grid-column: $_x'>" . $i . "<div class='wrapper'>";
        $html .= displayEvent($sql, $pointer, $i);
        $html .= "</div></div>";
    } else {
        $html .= "<div class='day'>" . $i . "<div class='wrapper'>";
        $html .= displayEvent($sql, $pointer, $i);
        $html .= "</div></div>";
    }
}

for ($i = 1; $i <= $month_length_next - (18 + $y); $i++) {
    if ($pointer == 1 && $i == 7) {
        continue;
    } else {
        $html .= "<div class='nm-day'>" . $i . "</div>";
    }
}

$smarty->assign("title", DateTime::createFromFormat('!m', $pointer)->format("F"));
$smarty->assign("html", $html);
$smarty->display("index.tpl");
?>