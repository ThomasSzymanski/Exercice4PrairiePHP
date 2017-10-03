<?php
$Fizz = 'Fizz ';
$Buzz = 'Buzz ';
$FizzBuzz = 'FizzBuzz ';
  for ($nombre=0; $nombre<=100; $nombre++){
      switch ($nombre)
      {
          case $nombre % 3 == 0:
              echo $Fizz;
          break;
          case $nombre % 5 == 0:
              echo $Buzz;
          break;
          case $nombre % 3 == 0 AND $nombre % 5 == 0:
              echo $FizzBuzz;
          break;
          default: echo $nombre.' ';
      }
}
      ?>
