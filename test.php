<?php
    $host = "localhost";
    $user = "root";
    $pass = "Bananek@1223";
    $db = "main";

    try {
        $con = new PDO("mysql:host=localhost;dbname=$db", "root", "Bananek@1223");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = $con->prepare("select name, start, end from events where disabled != true;");
        $sql->execute();

        while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
            $_namePointer = $row["name"];
            $_startPointer = $row["start"];
            $_endPointer = $row["end"];

            $sDate = date("Y-m-d", strtotime($_startPointer));
            $eDate = date("Y-m-d", strtotime($_endPointer));

            echo "<br>$_namePointer, starts: $sDate, end: $eDate";
        }
    } catch (PDOException $err) {
        echo "Connection Failed: " . $err->getMessage();
    }

    $begin = new DateTime("2022-10-01");
    $end = new DateTime("2022-12-03");
    $now = date("Y-12-02");
    
    $interval = DateInterval::createFromDateString('1 day');
    $period = new DatePeriod($begin, $interval, $end);

    echo "<br>";
    
    foreach ($period as $dt) {
        if ($now == $dt->format("Y-m-d")) {
            echo 1;
        } else {
            echo 0;
        }
    }
?>