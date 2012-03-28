<?php
/*
 * Add all the natural numbers below one thousand that are multiples of 3 or 5.
 * Solution: 233168
 */
$sum = 8;
for ($i=6; $i < 1000; $i++)
{
    if (($i % 3 == 0) || ($i % 5 == 0))
    {
        $sum += $i;
    }   
}
echo $sum."\r\n";
/*
 * Optimized version
 */
function SumDivisibleBy($n)
{
    $p = intval(999 / $n);
    return intval(($n * ($p * ($p + 1))) / 2);
}

echo SumDivisibleBy(3) + SumDivisibleBy(5) - SumDivisibleBy(15);
?>
