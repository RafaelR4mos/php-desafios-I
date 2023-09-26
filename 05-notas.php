<?php

$nota1 = 10;
$nota2 = 7;
$nota3 = 10;

$media = ($nota1 + $nota2 + $nota3) / 3;
$avaliacao = "";

echo "Sua média = $media\nSeu conceito de avaliação foi: ";

if($media >= 8 && $media <= 10) {
  echo "A";
} else if($media >= 6 && $media < 8) {
  echo "B";
} else if($media >= 3 && $media < 6) {
  echo "C";
} else if($media >= 0 && $media < 3) {
  echo "D";
} else {
  echo "Nota indefinida. Tente novamente";
}

//Solução alternativa

