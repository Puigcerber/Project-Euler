<?php
/*
 * Find the largest prime factor of a composite number.
 * Solution: 6857
 */
$composite = 600851475143;
$factorization = factorize($composite);
echo $factorization[0];

/**
 * @author <csaba@alum.mit.edu>
 * @link http://www.php.net/manual/es/language.operators.arithmetic.php#98183 
 */
function factorize($num) 
{ 
    // Returns a sorted array of the prime factorization of $num 
    // Caches prior results.  Returns empty array for |$num|<2 
    // eg. factorize(360) => [5, 3, 3, 2, 2, 2] 
    static $aFactors = array(); 
    if (2>$num=abs($num)) return array();  // negatives, 1, 0 

    if ($aFactors[$key = "x$num"]) {     // handles doubles 
        // Been there, done that 
        if (($factor=$aFactors[$key])==$num) return array($num); 
        return array_merge(factorize($num/$factor),array($factor)); 
    } 
  
    // Find a smallest factor 
    for ($sqrt = sqrt($num),$factor=2;$factor<=$sqrt;++$factor) 
        if (floor($num/$factor)==$num/$factor) 
            return array_merge(factorize($num/$factor), 
                 array($aFactors[$key] = $factor)); 

    return (array($aFactors[$key] = $num));  
}  // $num is prime
?>
