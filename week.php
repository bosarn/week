
<?php
$year = (isset($_GET['year'])) ? $_GET['year'] : date("Y");
$week = (isset($_GET['week'])) ? $_GET['week'] : date('W');
if($week > 52) {
    $year++;
    $week = 1;
} elseif($week < 1) {
    $year--;
    $week = 52;
}
?>


<a href="<?php echo $_SERVER['PHP_SELF'].'?week='.($week == 1 ? 52 : $week -1).'&year='.($week == 1 ? $year - 1 : $year); ?>">Vorige Week</a> <br><!--Previous week-->
<a href="<?php echo $_SERVER['PHP_SELF'].'?week='.($week == 52 ? 1 : 1 + $week).'&year='.($week == 52 ? 1 + $year : $year); ?>">Volgende  Week</a><br> <!--Next week-->
<!--/* GETDATA VOOR ALLES IN WEEK, ALLES ELKE DATUM DAT OVEREENKOMT DE  OPDRACHT PRINTEN IN DE DINGES ENAL*/-->

<!--/* Select * from 'taken' where datum like '$d' enal */-->
<table>
<th> DAGEN</th>
    <th> DATUM</th>
<td>
        <?php
        if($week < 10) {
            $week = '0'. $week;
        }
        for($day= 1; $day <= 7; $day++) {
            $d = strtotime($year ."W". $week . $day);

            echo "<tr>". date('l', $d). "</tr>";
            echo "<tr>". date("d/m/Y", $d)."</tr>";
            /* Databank dingen invullen onder variabele naam*/
        }
        ?>
</td>
</table>


/*
    ░░░░░░░░░▓▓▓▓▀█░░░░░░░░░░░░░
    ░░░░░░▄▀▓▓▄██████▄░░░░░░░░░░
    ░░░░░▄█▄█▀░░▄░▄░█▀░░░░░░░░░░
    ░░░░▄▀░██▄░░▀░▀░▀▄░░░░░░░░░░
    ░░░░▀▄░░▀░▄█▄▄░░▄█▄░░░░░░░░░
    ░░░░░░▀█▄▄░░▀▀▀█▀░░░░░░░░░░░
    ░░░░░░█░░░░░░░░▄▀▀░▐░░░░░░░░
    ░░░░▄▀░░░░░░░░▐░▄▄▀░░░░░░░░░
    ░░▄▀░░░▐░░░░░█▄▀░▐░░░░░░░░░░
    ░░█░░░▐░░░░░░░░▄░█░░░░░░░░░░
    ░░░█▄░░▀▄░░░░▄▀▐░█░░░░░░░░░░
    ░░░█▐▀▀▀░▀▀▀▀░░▐░█░░░░░░░░░░
    ░░▐█▐▄░░░░░░░░░▐░█▄▄░░░░░░░░
    ░░░▀▀░░░💩░░░░▐▄▄▄▀░░░░░░░░░*/

</table>

