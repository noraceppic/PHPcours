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
/* array_push($tableau,'voiture');//ajout de voiture au tableau 
echo count($tableau);//nombre des elements dans un tableau 
echo '<br>'; */
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
/* $nombres=[];

for ($i=34; $i<79; $i++)
{
     //$nombres[]=$i;
     array_push($nombres,$i);
}
$nombres[3] = 100;
$nombres[0]='kiwi';
print_r($nombres); */



//tableau assoiatif
$fruits =['banane'=> 'jaune' ,'pomme'=>'rouge','kiwi'=> 'vert'];
//echo 'la couleur d\'une pomme  est '  .  $fruits['pomme'];
//echo 'la longeur du tableau $fruits est de : ' . sizeof($fruits);
$age =['lucie'=>34 , 'michel'=>12 , 'mouloud' => 45];
print_r($age);
$chaine =implode('-',$age);//assemble les valeurs du tableaux en une chaine de caractere
echo $chaine;
echo '<br>';
$age2=explode('-',$chaine);//transforme une chaine de caractere en un tableau en precisant un delmiteur('-')
print_r($age2);
echo'<hr>';
$age['paul']= 22;//ajout d'un vouvel element au tableau 
$age['lucie']=12;
/* print_r($age);
foreach($age as $clef=>$valeur){
    echo $clef.' a ' . $valeur .' ans<br>';
} */

/* $html ='<ul>';
foreach($age as $key => $value){
    $html .= '<li>' .$key . ' a ' .$value . 'ans</li>';
}
$html .='</lu>';
echo $html;

echo '</pre>'; */

/* $note=['nora' => 10, 'anis' => 12, 'julien' => 8, 'marie' => 14 ];
$html='<ul>';

foreach($note as $key =>$value){
    $html .='<li>' . $key . ' a obtenu ' . $value . '/20</li>';
  
}
$html.='<lu>';

echo $html;
$tabl4 = array_merge($age, $note); 
print_r($tabl4) */
/* $planetes =['mars','terre','pluton','venus','jupiter'];
print_r($planetes);
asort($planetes);//tri des valeurs d'un tableau par ordre croissant
print_r($planetes);
rsort($planetes);//tri des valeurs d'un tableau par ordre decroissant
print_r($planetes);
krsort($planetes);//tris les index du tableau par ordre decroissant
print_r($planetes); 
arsort($planetes);//tris les index du tableau par ordre croissant
print_r($planetes); */

$mois=['janvier' ,'fevrier','mars','avril','mai', 'juin','juillet', 'aout','septembre','octobre','novembre','decembre'];
echo $mois[4];
echo('<br>');
echo $mois[10];
echo('<br>');

$mois[3]=('Avril');
print_r($mois);

$departement=['14'=> 'Calvados' ,'27'=>'eure', '50'=>'manche', '76'=>'saine-martime '];
print_r($departement);
echo $departement[27];




echo'<pre>';
