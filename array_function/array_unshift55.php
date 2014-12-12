
<?php
$recordMonths[3] = '8/%/2006';
$recordMonths[4] = '7/%/2004';
$recordMonths[0] = '3/%/2007';
$recordMonths[1] = '2/%/2007';
$recordMonths[5] = '12/%/2000';
$recordMonths[6] = '11/%/2000';
$recordMonths[7] = '10/%/2000';
$recordMonths[2] = '1/%/2007';

for($i = 0; $i < count($recordMonths); $i++)
{
    $singleMonth = $recordMonths[$i];
    echo "singleMonth: $singleMonth <br />";
}
array_unshift($recordMonths,'%');
for($i = 0; $i < count($recordMonths); $i++)
{
    $singleMonth = $recordMonths[$i];
    echo "singleMonth: $singleMonth <br />";
}
?>
