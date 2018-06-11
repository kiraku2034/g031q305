<?php

for($a = 1; $a <= 100; $a++) {
   if($a % 3 == 0) {
      echo 'fizz';
   }

   if($a % 5 == 0) {
      echo 'buzz';
   }

   if(!($a % 3 == 0) && !($a % 5 == 0)) {
      echo $a ;
   }

   echo "<br/>";
}