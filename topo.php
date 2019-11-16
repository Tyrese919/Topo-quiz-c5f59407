<?php

$Tell = 0;

$hoofdsteden = array(
"Japan"=>"Tokyo",
"Mexico"=>"MexicoCity",
"USA"=>"WashingtonD.C.",
"India"=>"NewDelhi",
"ZuidKorea"=>"Seoul",
"China"=>"Peking",
"Nigeria"=>"Abuja",
"Argentina"=>"BuenosAires",
"Egypte"=>"Cairo",
"UK"=>"Londen");

foreach ($hoofdsteden as $key => $value) {
  echo "Wat is de hoofdstad van $key: ";
  $antwoord = readline();

      if ($value === $antwoord) {
        echo "Correct".PHP_EOL;
          $Tell++;
      }
        else {
          echo "Jammer $antwoord is Fout, het is $value".PHP_EOL;
        }
  }

    echo "Je heb $Tell van de 10 goed!";
