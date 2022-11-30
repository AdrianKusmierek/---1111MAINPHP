<html>
<head>
    <title>page</title>
    <link rel="stylesheet" href="style.css">
<head>
<body>
    <main>
        <div class="week-days">
            <p>{$smarty.now|date_format:"%B %Y"}</p>
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
            {if date_format(date_create(date("Y-m-01")), "N") eq 1}
                <div class="pm-days">{$pml}</div>
            {elseif date_format(date_create(date("Y-m-01")), "N") eq 2}
                {for $x=$pml to $pml}
                    <div class="pm-days">{$x}</div>
                {/for}
            {elseif date_format(date_create(date("Y-m-01")), "N") eq 3}
                {for $x=$pml-1 to $pml}
                    <div class="pm-days">{$x}</div>
                {/for}
            {elseif date_format(date_create(date("Y-m-01")), "N") eq 4}
                {for $x=$pml-2 to $pml}
                    <div class="pm-days">{$x}</div>
                {/for}
            {elseif date_format(date_create(date("Y-m-01")), "N") eq 5}
                {for $x=$pml-3 to $pml}
                    <div class="pm-days">{$x}</div>
                {/for}
            {elseif date_format(date_create(date("Y-m-01")), "N") eq 6}
                {for $x=$pml-4 to $pml}
                    <div class="pm-days">{$x}</div>
                {/for}
            {elseif date_format(date_create(date("Y-m-01")), "N") eq 7}
                {for $x=$pml-5 to $pml}
                    <div class="pm-days">{$x}</div>
                {/for}
            {/if}
            {for $y=1 to $ml}
                {if $y eq $smarty.now|date_format:"%e"}
                    <div class="now day-{$y}">{$y}</div>
                {elseif date_format(date_create(date("Y-m-{$y}")), "N") eq $fday}
                    <div class="cm-days day-{$y}" style="grid-column: {$fday};">{$y}</div>
                {else}
                    <div class="cm-days day-{$y}">{$y}</div>
                {/if}
            {/for}
            {if date_format(date_create(date("Y-m-{$ml}")), "N") eq 1}
                {for $z=1 to 13}
                    <div class="nm-days">{$z}</div>
                {/for}
            {elseif date_format(date_create(date("Y-m-{$ml}")), "N") eq 2}
                {for $z=1 to 12}
                    <div class="nm-days">{$z}</div>
                {/for}
            {elseif date_format(date_create(date("Y-m-{$ml}")), "N") eq 3}
                {for $z=1 to 11}
                    <div class="nm-days">{$z}</div>
                {/for}
            {elseif date_format(date_create(date("Y-m-{$ml}")), "N") eq 4}
                {for $z=1 to 10}
                    <div class="nm-days">{$z}</div>
                {/for}
            {elseif date_format(date_create(date("Y-m-{$ml}")), "N") eq 5}
                {for $z=1 to 9}
                    <div class="nm-days">{$z}</div>
                {/for}
            {elseif date_format(date_create(date("Y-m-{$ml}")), "N") eq 6}
                {for $z=1 to 8}
                    <div class="nm-days">{$z}</div>
                {/for}
            {/if}
        </div>
    </main>
</body>
</html>