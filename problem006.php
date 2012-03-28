<?php
/*
 * What is the difference between the sum of the squares and the square of the sums?
 * Solution: 25164150
 */
$sum_of_squares = 0;
$square_of_sum = 0;
for ($i = 1; $i <= 100; $i++)
{
    $sum_of_squares += ($i * $i);
    $square_of_sum += $i;
}
echo ($square_of_sum * $square_of_sum) - $sum_of_squares;
?>
