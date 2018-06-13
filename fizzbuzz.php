<?php

for($a = 1; $a <= 100; $a++) {
   echo fizzbuzz($a),"<br/>";
}

function fizzbuzz($n)
{
   
   if($n % 3 == 0) 
      return 'fizz';
   if($n % 5 == 0) 
      return 'buzz';
   if($n % 15 == 0) 
      return 'fizzbuzz';
   return $n;
}

?>
