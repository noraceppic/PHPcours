<?php
// Tableau indexé
 // declaration d'un tableau
$tableau = array();
$tableau = [];
$tableau2 = array('Lundi','Mardi',45,67.8,false);
$tableau = [true,45,'Terre',56,[45,67,78]];
$tableau = [
    true,
    45,
    'Terre',
    56,
    [45,67,78]
];
echo '<pre>';
// print_r($tableau2);

$tableau[] = 'Janvier';
$tableau[] = 45;
$tableau[] = false;
array_push($tableau,'voiture');//ajout de voiture au tableau 
echo count($tableau);//nombre des elements dans un tableau 
echo '<br>';
// var_dump($tableau);

// echo $tableau[0];

$notes = [12,5,16,7];
// Afficher la moyenne des notes 
$sommeNotes = $notes[0] + $notes[1] + $notes[2] + $notes[3];
$moyenne = $sommeNotes / 4;
// echo $moyenne;
/* for($i=0; $i < count($tableau2);$i++){
    echo $tableau2[$i] . '<br>';
} */
$fruits =['banane','kiwi','pomme','poire'];
/* $html='.';
for($i = 0; $i < count($fruits);$i++){
    $html .= $fruits[$i] . ',';
}
echo $html; */
/* foreach($fruits as $value)
{
    echo $value .'<br>';

} */
//construire un tableau à l'aide de la boucle fore des nombre de34 à 78
$nombres=[];

for ($i=34; $i<79; $i++)
{
     $nombres[]=$i;
}
print_r($nombres);
echo '</pre>';
