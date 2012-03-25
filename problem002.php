<?php
/*
 * By considering the terms in the Fibonacci sequence whose values do not exceed 
 * four million, find the sum of the even-valued terms.
 * Solution: 4613732
 */
$sum = 0;
$x = 1;
for ($y = 2; $x <= 4000000; $y = $f + $y)
{
    if($x % 2 == 0)
    {
        $sum += $x;
    }
    $f = $x;
    $x = $y;   
}
echo $sum."\r\n";
/*
 * Optimized version
 */
$sum = 0;
$a = 1;
$b = 1;
$c = $a + $b;
while ($c < 4000000)
{
    $sum += $c;
    $a = $b + $c;
    $b = $c + $a;
    $c = $a + $b;
}
echo $sum."\r\n";
?>
