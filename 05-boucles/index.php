<?php
!
$annee1=1970;
$annee2 = date ('Y');
while ($annee1 <=  $annee2){
    
    echo $annee1;
    $annee1++;

};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<ul>
<?php
    $anne1 = 1970;
    $anne2 = 2022;
    $nbJour = 0;
    while($anne1 <= $anne2){
?>
    <li><?=$anne1;?></li>
<?php
    $nbJour += 365;
    $anne1++;
    }
?>   
<li>Le nombre de jour depuis 1970 est : <strong><?=$nbJour - 365;?></strong></li>
</ul>
 
    

</body>
</html>




