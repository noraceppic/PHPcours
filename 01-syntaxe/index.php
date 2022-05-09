<h1>un titre</h1>
<?php
// echo/print
// echo 'Texte en php'   ' Autre texte <br>';
// print 'Texte en php avec print<br>' ,Autre texte avec print;

$variable='une variable';
$variable='une autre variable';

// $3var=34;
$_3var=35;
echo $_3var;
$camlCase='une variable en camle case';
$snack_case = 'en variable en snake case';
$pascaleCase ='une variable en pascale case';
$var = 'une variable en  kebab-case';

// string
$nom ='mohamed';
$nombre=34;
//int 
$nombre=34;
//  float
$nobreDecimale=23.7;
//bool
$vrai= true;
$faux=false;

//array/objet
$tableau =['groug',34,45,6,false];
//null
$variable =null;
// imple/double  guillemets (quates)
// $message ="aujourd'huit";
$message ='aujourd\'huit';
$txt ='bonjour';
echo '$txt bonjour tout le monde <br>';
echo "$txt bonjour tout le monde <br>";

//concatination
$fruit1='kiwi';
$fruit1='pomme';
$fruit2='banane';
$fruit2.= 'Poire';

//  echo $fruit1 . '<br>' . $fruit2;
//  echo $fruit2 .'<br>';
$html ='<h1> cours du php </h1>';


 $html .='<h1> ajout d\un texte dans un  pargraphe </h1>';

$data1='Hello';
$data2='les terriens';
$data3 ='mars';
$data4 = 'plante';

echo '<p>'. $data1 . ', ' . $data2  . '. '  . 'je viens du la' .' '. $data4  . ' ' . $data3 .'. </p>'; 




?>
<!-- 
    $data1= 'hello';
    $data2 = 'les terriens';
    $data3 ='mars';
    $data4 = 'plante' ;
    avec les methode de concatenation ecrire la phrase dans un  pragraphe  : hello, les terriens.je viens de la palanet mars
 -->
 <p>
     <?= $data1 . ', ' . $data2  . '. '  . 'je viens du la' .' '. $data4  . ' ' . $data3 . '.' ;

     ?>
 </p>
 <?php
 $html = '';
 $html .= '<p>' .$data1 . ', ' .$data2;
 $html .= '. je vien du la ' .$data4 . ' ' . $data3. '.</p>';
 echo $html;