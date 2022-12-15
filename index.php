<?php
/////////////////////////////////////////////////////////////////////           ////////
//////                                                         //////                 //
/*                       Connection & Other Shit                   */                 //
//////                                                         //////
/////////////////////////////////////////////////////////////////////                 

include("vendor/smarty/smarty/libs/Smarty.class.php");
if (!isset($_GET["m"])) $_GET["m"] = date("m");
if (!isset($_GET["y"])) $_GET["y"] = date("Y");

$host = "localhost";
$user = "root";
$pass = "Bananek@1223";
$db = "main";
$con = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

try {
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $err) {
    echo "Connection Failed: " . $err->getMessage();
}
                                                                                      //
                                                                                      //
/////////////////////////////////////////////////////////////////////           ////////



/////////////////////////////////////////////////////////////////////           ////////
//////                                                         //////                 //
/*                             Variables                           */                 //
//////                                                         //////
/////////////////////////////////////////////////////////////////////                

$smarty = new Smarty;
$html = "";
$pointer = $_GET["m"];
$pointer_y = $_GET["y"];
$month_length = cal_days_in_month(CAL_GREGORIAN, $pointer, $pointer_y);
$month_length_prev = ($pointer == 12) ? cal_days_in_month(CAL_GREGORIAN, 1, $pointer_y + 1) : cal_days_in_month(CAL_GREGORIAN, $pointer + 1, 2022);
$month_length_next = ($pointer == 1) ? cal_days_in_month(CAL_GREGORIAN, 12, $pointer_y - 1) : cal_days_in_month(CAL_GREGORIAN, $pointer - 1, 2022);
$y = date("N", strtotime("$pointer_y-$pointer-01"));
                                                                                      //
                                                                                      //
/////////////////////////////////////////////////////////////////////           ////////



/////////////////////////////////////////////////////////////////////           ////////
//////                                                         //////                 //
/*                                Main                             */                 //
//////                                                         //////
/////////////////////////////////////////////////////////////////////                 

function displayEvent($pointer, $pointer_y, $i, $con) {
    // $sql = $con->prepare("select name, start, end from events where disabled != true;");
    $a = ($pointer == 1) ? "'" . $pointer_y - 1 . "-12-01'" : "'$pointer_y-$pointer-01'";
    $b = ($pointer == 12) ? "'" . $pointer_y + 1 . "-01-01'" : "'$pointer_y-$pointer-01'";

    $sql = $con->prepare("select name, start, end from events where disabled != true and start <= '$pointer_y-$pointer-01' and end >= '$pointer_y-$pointer-01' or disabled != true and start <= " . $a . " and end >= " . $a . " or disabled != true and start <= " . $b . " and end >= " . $b . ";");
    $sql->execute();

    $out = "";

    while ($r = $sql->fetch(PDO::FETCH_ASSOC)) {
        $_namePointer = $r["name"];

        if (date("Y-m-d", strtotime("2022-$pointer-$i")) < date("Y-m-d", strtotime("+1 day", strtotime($r["end"]))) && date("Y-m-d", strtotime("2022-$pointer-$i")) > date("Y-m-d", strtotime("-1 day", strtotime($r["start"])))) {
            $out .= "<div class='event event-$pointer-$i'><p class='etext'>$_namePointer</p></div>";
        }
    }

    return $out;
}

for ($i = $month_length_prev + 2 - $y; $i <= $month_length_prev; $i++) {
    // $html .= "<div class='pm-day'>" . $i . "</div>";
    $html .= "<div class='pm-day'>" . $i . "<div class='wrapper nc'>";
    $html .= displayEvent($pointer - 1, $pointer_y, $i, $con);
    $html .= "</div></div>";
}

for ($i = 1; $i <= $month_length; $i++) {
    $_x = date("N");

    if ($i == 1) {
        $html .= "<div class='day' style='grid-column: $y'>" . $i . "<div class='wrapper'>";
        $html .= displayEvent($pointer, $pointer_y, $i, $con);
        $html .= "</div></div>";
    } else if ($i == date("d") && date("m") == $pointer) {
        $html .= "<div class='now day' style='grid-column: $_x'>" . $i . "<div class='wrapper'>";
        $html .= displayEvent($pointer, $pointer_y, $i, $con);
        $html .= "</div></div>";
    } else {
        $html .= "<div class='day'>" . $i . "<div class='wrapper'>";
        $html .= displayEvent($pointer, $pointer_y, $i, $con);
        $html .= "</div></div>";
    }
}

for ($i = 1; $i <= $month_length_next - (18 + $y); $i++) {
    if ($pointer == 1 && $i == 7) {
        continue;
    } else {
        $html .= "<div class='nm-day'>" . $i . "<div class='wrapper nc'>";
        ($pointer == 12) ? $html .= displayEvent($pointer, $pointer_y, $i, $con) : $html .= displayEvent($pointer + 1, $pointer_y, $i, $con);;
        $html .= "</div></div>";
    }
}
                                                                                      //
                                                                                      //
/////////////////////////////////////////////////////////////////////           ////////



/////////////////////////////////////////////////////////////////////           ////////
//////                                                         //////                 //
/*                             Displaying                          */                 //
//////                                                         //////                
/////////////////////////////////////////////////////////////////////                

$smarty->assign("title", DateTime::createFromFormat('!m', $pointer)->format("F") . " $pointer_y");
$smarty->assign("html", $html);
$smarty->display("index.tpl");
                                                                                      //
                                                                                      //
/////////////////////////////////////////////////////////////////////           ////////

// Made by: Adrian Kuśmierek (https://github.com/adriankusmierek)
?>