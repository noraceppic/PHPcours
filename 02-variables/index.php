<?php
// constantes
define('HOST','localhost');
define('USER','root');
//echo HOST;
//var_dump(HOST);
// print_r(USER);
$x = 4;
$y = 2;
$z = 5;
//$calcul = $x + $y;
//$calcul =$x *$y;
//$calcul =$x/$y;
// $calcul =$x%$y;
// $calcul =$y**$y;


// echo $calcul;
//affectation
$a=5;
$b=7;
//$a+=6;
// $a -=$b;
// $a*=$b;
//  $a/=$b;
// $a =$a % $b;
// echo round ($a,3);
/* 
$PHT = 172 ;
$TVA = 20 ;
$PTT = $PHT+($PHT*$TVA /100) ;
echo'le prix en HT est'. $PHT. '€'.'<br>';
echo 'TVA= '. $TVA . ' % '.'<br>';
echo 'le prix en TTC est ' .$PTT. '€'; */
//calculer l'age d'une personne en renseigant son année de naissance ,
// utiliser la fonction date

$anneDeNaissance= 1990;
$anneEnCours=date("Y");

$age = $anneEnCours - $anneDeNaissance;
echo 'votre age est '. $age .' ans <br>';
//incrementation /decrementation 
$i=0;
$i +=1;
$i++;
/* 
$j =10;
si j=-=1;
echo $j;

?>
 */
