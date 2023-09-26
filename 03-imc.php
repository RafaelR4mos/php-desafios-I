<?php

$altura = 1.82;
$peso = 90;
$imc = $peso / $altura ** 2;

echo "Seu IMC = $imc. \nSeu IMC é considerado: ";

if ($imc <  18.5) {
  echo "Magreza.";
} else if ($imc >= 18.5 && $imc < 24.9) {
  echo "Normal.";
} else if ($imc >= 24.9 && $imc < 30) {
  echo "Sobrepeso.";
} else if ($imc >= 30) {
  echo "Obesidade.";
} else {
  echo "Desculpe, o valor do seu IMC não foi encontrado!";
}