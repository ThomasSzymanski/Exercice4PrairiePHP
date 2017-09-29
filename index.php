<?php

$trois = 3;
$cinq = 5;
$Fizz = 'Fizz';
$Buzz = 'Buzz';
$FizzBuzz = 'FizzBuzz';


    for ($nombre=0; $nombre<=100; $nombre++)
{
      if (($nombre / $trois) == 0)
      {
          echo $Fizz;
      }

      if (($nombre / $cinq) == 0)
      {
          echo $Buzz;
      }

      if (($nombre / $trois) == 0 && ($nombre / $cinq) == 0)
      {
          echo $FizzBuzz;
      }

      echo $nombre;



  }



 ?>
