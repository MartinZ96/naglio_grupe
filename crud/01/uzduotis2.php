<?php


        // 1.sukurkite masyvą. užpildykite 30čia atsitiktinių skaičių nuo 20 iki 40.


echo "1.";
echo "<br>";
echo "<br>";

$masyvas = [];

for ($i=0; $i < 30; $i++) { 
    $masyvas[] = rand(20,40);
}

print_r($masyvas);
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

            // 1b. atspausdinkite masyvo skaičius vienoje eilutėje atsirtus tarpais.

for ($i=0; $i < count($masyvas); $i++) { 
    echo $masyvas[$i]." ";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

            // 2. sukurkite masyvą su 10 skaičių nuo 0 iki 9

$masyvas1 = [];

for ($i=0; $i < 10; $i++) { 
    $masyvas1[$i] = rand(0,9);
}

print_r($masyvas1);


echo "<br>";
echo "<br>";
echo "2.";
echo "<br>";
echo "<br>";

//           2b. sukurkite kitą masyvą su 10 skaičių nuo 10 iki 19


$masyvas2 = [];

for ($i=10; $i < 20; $i++) { 
    $masyvas2[] = $i;
}

print_r($masyvas2);


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


//             2c. pasinaudoję ciklu atspausdinkite 100 atsitiktinių skaičių iš 2b masyvo.

for ($i=0; $i < 50 ; $i++) { 
   echo $masyvas2[array_rand($masyvas2)]; 
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

//            3. sukurkite dvimatį masyvą. pirmas matmuo - 10 elementų. antras 10 elementų.

$masyvas3 = [];

for ($i=0; $i < 10; $i++) { 
    for ($a=0; $a < 20; $a++) { 
        $masyvas3[$i][] = $a;
    }
}
print_r($masyvas3);
echo "<br>";
echo "<br>";
echo "3.";
echo "<br>";
echo "<br>";


//              3b. atspausdinkite duomenis. (gausis skaičių stačiakampis).

for ($i=0; $i <count($masyvas3) ; $i++) { 
    for ($a=0; $a < count($masyvas3[$i]) ; $a++) { 
        echo $masyvas3[$i][$a].' ';
    }
    echo '<br>';
}
 echo '<br>';
//              3c. padarykite tą patį, ką  darėte 3b, tik spausdinkite tuos skaičius pakeltus kvadratu

for ($i=0; $i <count($masyvas3) ; $i++) { 
    for ($a=0; $a < count($masyvas3[$i]) ; $a++) { 
        echo $masyvas3[$i][$a] * $masyvas3[$i][$a].' ';

    }
   echo '<br>'; 
}

echo "<br>";
echo "<br>";
echo "4.";
echo "<br>";
echo "<br>";

$gyvunas = ['species'=>'kengaroo','age'=>'3',
            'name'=>'Skippy','description'=>'Well.. it likes to jump a lot.'];
 
echo $gyvunas['description'];

echo "<br>";
echo "<br>";
echo "5.";
echo "<br>";
echo "<br>";

$names = ["vardas1","vardas2","vardas3"]; 
$species = ["kengūra","gazelė","liūtas"];
$descriptions = ["gražus bet piktas","pastoviai miega","šauniai maskuojasi"];

$zoo = [];

for ($i=0; $i < 20; $i++) { 
    $zoo[$i]['name'] = $names[ rand(0, count($names)-1 ) ];
    $zoo[$i]['species'] = $species[ rand(0, count($species)-1 ) ];
    $zoo[$i]['age'] = rand(0,12);
    $zoo[$i]['description'] = $descriptions[ rand(0, count($descriptions)-1 ) ];
}
foreach ($zoo as $animal) {
    echo $animal['species'].' '.$animal['age'].' '.$animal['name'].' '.$animal['description'].' ';
    echo '<br>';
}

echo "<br>";
echo "<br>";
echo "6.";
echo "<br>";
echo "<br>";

for ($i=0; $i < 9 ; $i++) { 
    for ($a=0; $a < 9 ; $a++) { 
        echo $i*$a." ";
    }
}
echo "<hr>";

echo "<br>";
echo "<br>";
echo "1.";
echo "<br>";
echo "<br>";

sayHi();
function sayHi(){
    echo "Sveiki<br>";
}

sayHiYou("Petras");
$vardas = "Jonas";

sayHiYou($vardas);


function sayHiYou($name){
    echo "Labas ".$name."<br>";
}

echo myPi();
echo "<br>";
$piNum = myPi();
echo $piNum;
echo "<br>";


function myPi(){
    return 3.1415926;
}

echo multiply(60, multiply(60, multiply(365,24) ) );
echo "<br>";
echo multiply (multiply(60, 60 ) , multiply(365,24)) ;
echo "<br>";


function multiply($a, $b){
    return $a * $b;
}

function circleArea($r = 0){
    return  myPi() * ($r * $r);
}

function circleLength ($r = 0){
    return 2* myPi() * $r;
}

echo "<br>".circleArea(10)."<br>";

echo circleLength(10)."<br>";

function circleInfo($r){
    echo "apskritimo ilgis: " . circleLength($r) . "<br>";
    echo "apskritimo plotas: " . circleArea($r) . "<br>";
}

circleInfo(24);

?>
