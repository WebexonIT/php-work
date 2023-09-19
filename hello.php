<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   

<?php 

$food = 'Pasta';

echo 'I like to eat ' . $food . '. Pasta is an Italian Food.' . "<br>";

$x = 200;
$y = 500;

echo $x + $y . '<br>'; 

$name = 'Fahima';
$name1 = "it's me";
$age = 30;
$age1= 32.5;
$married = true;
$favoiritePlace= array('Macca', 'South korea', 'Japan', 'Alaska', 'Paris', 'Spain' );

// var_dump($favoiritePlace) . '<br>';


// ---------------------------



//object
class Phone{
    var $model;
    function phoneModel($number){
        global $model;
        $model = $number;
        echo "This is $model <br>";
    }
    
}

$apple = new Phone;
$apple-> phoneModel('iphone 14 Pro');
$samsung= new Phone;
$samsung-> phoneModel('s22 Ultra');

$lG= new Phone;
$lG-> phoneModel('Upcomming');















?>










</body>
</html>
