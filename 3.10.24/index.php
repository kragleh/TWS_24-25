<?php
  $a=20;
  $b=5;
  $c=$a+$b;
  $d=$a-$b;
  $e=$a*$b;
  $f=round($a/$b, 2);
  echo "$a + $b = $c<br>";
  echo "$a - $b = $d<br>";
  echo "$a * $b = $e<br>";
  echo "$a / $b = $f<br>";

  $z=$a%$b; // Zvysok po celo ciselnom deleni
  echo "$a % $b = $z<br>";

  $x=10;

  $x=$x+1;
  echo "$x = $x<br>";
  $x++; // Navysenie premennej o jednu - inkrementacia
  echo "$x = $x<br>";

  $x=$x-1;
  echo "$x = $x<br>";
  $x--; // Znizenie premennej o jednu - dekrementacia
  echo "$x = $x<br>";

  $x=$x+5;
  echo "$x = $x<br>";

  $x+=5;
  echo "$x = $x<br>";

  $x-=7;
  echo "$x = $x<br>";
?>