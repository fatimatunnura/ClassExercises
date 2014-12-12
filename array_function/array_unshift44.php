
<?php

$a = array("f"=>"five", "s" =>"six", "t" =>
    "twenty");

print_r($a);
echo "\n";
foreach($a as $key=>$val)
{
    echo "k: $key v: $val \n";
}

array_unshift($a, "zero");
print_r($a);
echo "\n";
foreach($a as $key=>$val)
{
    echo "k: $key v: $val \n";
}
?>
