<?php 
function multiplication ($nombre1, $nombre2)
{
  return nombre1 * nombre2;
}
echo(multiplication(10,20));

function leplusgrand ($nombre1, $nombre2)
{
  if ($nombre1>$nombre2){
    return $nombre1;
  }
  else
  {
    return $nombre2;
  }
  
}
echo(leplusgrand(23,354));


function inverse($mot){
    return $mot.split("").reverse().join("");
}
echo(inverse("ange"));


function compter ($phrase){
  return $phrase.split(" ").length-1;
}
echo(compter("toto part en bus !"));

function majuscule($string) {
    return $string.toUpperCase();
}
echo(majuscule("Digital"));

function concatenation ($str1,$str2,$str3){
  return $str1.concat ($str2,$str3);
}
echo(concatenation("toto","tata","titi"));
?>