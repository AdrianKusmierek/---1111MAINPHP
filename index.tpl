<html>
<head>
    <title>i officially despise php</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="ico.ico" type="image/x-icon">
<head>
<body>
    <main>
        <div class="week-days">
            <p>{$title} 2022</p>
            <form action="index.php" method="get">
                <label>Choose the month:</label>
                <input type="number" name="m" value="1" max="12" min="1">
                <input type="submit">
            </form>
            <hr>
            <div class="days">
                <div class="week">Mo</div>
                <div class="week">Tu</div>
                <div class="week">We</div>
                <div class="week">Th</div>
                <div class="week">Fr</div>
                <div class="week">Sa</div>
                <div class="week">Su</div>
            </div>
        </div>
        <div class="week-dates">
            {$html}
        </div>
    </main>
</body>
</html>