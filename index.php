<?php
include('SimpleTable.php');

$string = "
[table th='1' tf='1' border='1px' width='50%']
One|Two|Three|Four|Five;;
One|Two|Three|Four|Five;;
1|2|3|4|5;;
1[attr rowspan='2']|2|3|4|5;;
|2|3-5[attr colspan='3']||;;
1-2[attr colspan='2']||3|4-5[attr colspan='2']|;;
1-2[attr rowspan='3' colspan='2']||3-4[attr rowspan='2' colspan='2']||5;;
|||4|5;;
||3|4|5;;
[/table]";

$string .= "<br><br>
[table th='1' tf='1' border='1px' width='50%' rd='%%%%' cd=',,']
One,,Two,,Three,,Four,,Five%%%%
One,,Two,,Three,,Four,,Five%%%%
1,,2,,3,,4,,5%%%%
1[attr rowspan='2'],,2,,3,,4,,5%%%%
,,2,,3-5[attr colspan='3'],,,,%%%%
1-2[attr colspan='2'],,,,3,,4-5[attr colspan='2'],,%%%%
1-2[attr rowspan='3' colspan='2'],,,,3-4[attr rowspan='2' colspan='2'],,,,5%%%%
,,,,,,4,,5%%%%
,,,,3,,4,,5%%%%
[/table]";

$simpleTable = new SimpleTable($string, null, null, null);
$string = $simpleTable->get();
?>


<!DOCTYPE html>
<html>
    <head>
        <style>
            th {
                text-align: left;
            }
            th, td {
                padding: 5px;
            }
            .simple-table {
                table-layout: fixed;
                border-spacing: 0;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
        <br><br><br>
        <?php 
            // echo htmlspecialchars($string);
            echo $string;
        ?>
    </body>
</html>