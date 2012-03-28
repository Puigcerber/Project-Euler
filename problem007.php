<?php
/*
 * Find the 10001st prime.
 * Solution: 104743
 */
$count = 1;//Number 2 it's already counted as is the only even prime
$i = 1;
while ($count < 10001)
{
    $i = $i + 2;
    if (is_prime($i))
    {
        $count++;
    }
}
echo $i;
     
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
