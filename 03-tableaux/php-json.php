<?php
$person1= [ 'prenom'=>'carle',
 'nom'=>'awa',
 'email'=>'carwa@yahoo.com',
];
$people = [
    $person1,
   [ 'prenom'=>'mohamed',
    'nom'=>'mourad',
    'email'=>'mohmou@yahoo.com',
],
   ['prenom'=>'lucie',
   'nom'=>'dupond',
   'email'=>'luciedup@yahoo.fr']
];
echo '<pre>';
print_r($people);
//afficcher le nom du famille du lucie 

echo  'le nom du lucieest: ' . $people[2]['nom'] .PHP_EOL; 
echo  'email du lucie est: ' . $people[2]['email'];
echo ('<hr>');
$json_file=json_encode($people);
echo $json_file;

$json_obj='{"prenom"=>"lucie",
    "nom"=>"dupond",
    "email"=>"luciedup@yahoo.fr"

}';
$json_array_php = json_decode($json_obj);
print_r($json_array_php);

echo '</pre>';


?>













