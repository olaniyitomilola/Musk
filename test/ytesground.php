<?php 
function swap(&$a, $b)
{
    $temp = $a;
    $a = $b;
    $b = $temp;
}

$a = 3;
$b = 5;

swap($a, $b);

echo $a;
echo $b;

?>