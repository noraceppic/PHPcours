<?php
/*
Travail-01 :

    Réaliser un script qui convertit une température de degré Celsius °C en degré Fahrenheit °F
    Afficher les résultats dans un tableau html table , utiliser la fonction php round pour arrondir à l'unité supérieur
    Voici le tableau de conversion que vous devez avoir :

| °C | °F |
|--- |--- |
| 25 | 77 |
| 03 | 37.4 |
| 35 | 95 |
| 11 | 51.8 |
 */


echo '<table border="1">';
$f='';
$tab=[25,03,35,11];

echo '<tr>';

    echo'<td>°C</td>';
    
    echo'<td>°F</td>';
  
    echo '</tr>';
    
for ($i=0; $i < count($tab) ; $i++) 
{ 
    
$f=$tab[$i]*9/5+32;
echo'<tr>';

echo '<td>'.$tab[$i].'</td>';

echo '<td>'.$f.'</td>';

echo '</tr>';



} 

echo '</table>';
?>
