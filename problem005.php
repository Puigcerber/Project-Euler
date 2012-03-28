<?php
/*
 * What is the smallest number divisible by each of the numbers 1 to 20?
 * Solution: 232792560
 */
$i = 2520;
do
{
    $i++;
    $divisible = true;
    for ($j = 1; $j <= 20; $j++)
    {
        if ($i % $j != 0)
        {
            $divisible = false;
            break;
        }
    }
}
while(!$divisible);
echo $i;
?>
