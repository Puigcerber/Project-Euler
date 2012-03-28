<?php
/*
 * Calculate the sum of all the primes below two million.
 * Solution: 142913828922
 */
$sum = 2;//Number 2 it's already counted as is the only even prime
$i = 1;
while ($i < 2000000)
{
    $i = $i + 2;
    if (is_prime($i))
    {
        $sum += $i;
    }
}
echo $sum;

function is_prime($num)
{
    for ($i = 3; $i * $i <= $num; $i = $i + 2) {
        if ($num % $i == 0)
        {
            return false;
        }
    }
    return true;
}
?>
