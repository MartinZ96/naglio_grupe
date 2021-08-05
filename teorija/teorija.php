<?php

// 1.sukurkite masyvą. užpildykite 30čia atsitiktinių skaičių nuo 20 iki 40.
// 1b. atspausdinkite masyvo skaičius vienoje eilutėje atsirtus tarpais.

$arr = [];
$arr['vardas'] = "Kestas";
$arr[0] = "Jonas";
$arr[20] = "Gabrielė";
$arr["daina"] = "3m";
$arr[] = "Petras";
print_r($arr);
echo "<hr>";

$arr1 = [];
for ($i=0; $i < 30; $i++) { 
    $arr1[] = rand(20,40);
}
print_r($arr1);
echo "<hr>";
for ($i=0; $i < count($arr1); $i++) { 
    echo $arr1[$i]." ";
}
echo "<hr>";

// 2. sukurkite masyvą su 10 skaičių nuo 0 iki 9
// 2b. sukurkite kitą masyvą su 10 skaičių nuo 10 iki 19
// 2c. pasinaudoję ciklu atspausdinkite 100 atsitiktinių skaičių iš 2b masyvo.
// t.y kiekvienoje ciklo iteracijoje imkite atsitiktinį 2b masyvo skaičių.


$arr2 = [];
for ($i=0; $i < 10; $i++) { 
   $arr2[] = $i; 
}

print_r($arr2);
echo "<hr>";

$arr3 = [];
for ($i=10; $i < 20; $i++) { 
    $arr3[] = $i;
}

print_r($arr3);
echo "<hr>";



 $minVal = 0;
 $maxVal = count($arr3) -1;

for ($i=0; $i < 100; $i++) { 
    $randomPosition = rand($minVal,$maxVal);
    $rndNum = $arr3[ $randomPosition ];
   echo  $rndNum  ." ";
}
echo "<hr>";


for ($i=0; $i < 100; $i++) { 
  echo  $arr3[ rand(0,count($arr3)-1 )] ." ";
}


echo "<hr>";


for ($i=0; $i < 100; $i++) { 
    echo $arr3[ array_rand($arr3)] ." ";
  }
  
  
  echo "<hr>";




// 3. sukurkite dvimatį masyvą. pirmas matmuo - 10 elementų. antras 10 elementų.
// reikšmės - skaičiai nuo 0 iki 9.
// 3b. atspausdinkite duomenis. (gausis skaičių stačiakampis).
// 3c. padarykite tą patį, ką  darėte 3b, tik spausdinkite tuos skaičius pakeltus kvadratu


$arr4 = [];


for ($i=0; $i < 10; $i++) { 
    $arrMin = [];
    for ($a=0; $a < 10; $a++) { 
      $arrMin[] = rand(0,9); 
    }
    $arr4[] = $arrMin;
}
// echo "<pre>";
print_r($arr4);
// echo "</pre>";
echo "<hr>";

$arr5 = [];
for ($i=0; $i < 10; $i++) {  // i = 0; i = 1
    for ($a=0; $a < 10; $a++) { // a nuo 0 iki 10;
      $arr5[$i][] = $a;  //$arr5[1][0] = 1; $arr5[1][1] = 1; $arr5[1][2] = 1;
    }
}
print_r($arr5);
echo "<hr>";

for ($i=0; $i < count($arr5); $i++) {
    for ($a=0; $a < count($arr5[$i]) ; $a++) { 
       echo $arr5[$i][$a]." ";
    }
    echo "<br>";
}
echo "<hr>";


for ($i=0; $i < count($arr5); $i++) {
    for ($a=0; $a < count($arr5[$i]) ; $a++) { 
        // echo $arr5[$i][$a] * $arr5[$i][$a]." ";
        echo pow($arr5[$i][$a],2)." ";
    }
    echo "<br>";
}
echo "<hr>";


// 4. sukurkite masyvą pavadinimu $gyvunas; suteikite jam reikšmes key + value principu.
// raktažodžiai (key): "species","age", "name", "description". Tai bus vienas objektas,
// vienas gyvūnas, su rūšimi, amžiumi, vardu ir aprašu.

$gyvunas = [];
$gyvunas['species'] = 'kengaroo';
$gyvunas['age'] = '3';
$gyvunas['name'] = 'Skippy';
$gyvunas['description'] = 'Well.. it likes to jump a lot.';

$gyvunas2 = ['species'=>'kengaroo','age'=>'3',
            'name'=>'Skippy','description'=>'Well.. it likes to jump a lot.'];


// $arr6=[];
// $arr6[] = 7;
// $arr6[] = 14;
// $arr6[] = 3;

// $arr7 = [7,14,3];
// $arr7 = [0=>7, 1=>14, 2=>3];

print_r($gyvunas);
echo "<hr>";
echo $gyvunas['name'];


// 5. sukurkite tris masyvus:
// $names = ["vardas1","vardas2","vardas3"....] vardus sugalvokite patys. jų reikia 10.
// $species = ["kengūra","gazelė","liūtas"....] gyvūnus sugalvokite patys. jų reikia 10.
// $descriptions = ["gražus bet piktas","pastoviai miega","šauniai maskuojasi"....] 
// aprašus sugalvokite patys. jų reikia 10.

$names = ["vardas1","vardas2","vardas3"]; //3
$species = ["kengūra","gazelė","liūtas"];
$descriptions = ["gražus bet piktas","pastoviai miega","šauniai maskuojasi"];

// 5b. sukurkite dvimatį masyvą iš 20 elementų.  didžiąjame masyve bus sudėti mažesni masyvai,
// iš eilės. maži masyvai bus tokie patys kaip 4. užduotyje. jų reikšmes užpildykite 5. 
// masyvų reikšmėmis. t.y imate random vardą, ir priskiriate konstruojamam gyvūnui ir tt.

// 5c. atvaizduokite gyvūnus iš 5b masyvo. vienas gyvūnas - viena eilutė.

$zoo = [];

for ($i=0; $i < 20; $i++) { 
    $zoo[$i]['name'] = $names[ rand(0, count($names)-1 ) ];
    $zoo[$i]['species'] = $species[ rand(0, count($species)-1 ) ];
    $zoo[$i]['age'] = rand(0,12);
    $zoo[$i]['description'] = $descriptions[ rand(0, count($descriptions)-1 ) ];
}
// for ($i=0; $i < 20; $i++) { 
//     $animal = [];
//     $animal['name'] = $names[ rand(0, count($names)-1 ) ];
//     $animal['species'] = $species[ rand(0, count($species)-1 ) ];
//     $animal['age'] = rand(0,12);
//     $animal['description'] = $descriptions[ rand(0, count($descriptions)-1 ) ];

//     $zoo[] =  $animal;
// }

for ($i=0; $i < count($zoo); $i++) { 
    echo $zoo[$i]['name'] ." ".$zoo[$i]['species'] 
    ." ".$zoo[$i]['age'] ." ".$zoo[$i]['description']."<br>";
}

echo "<hr>";

// for ($i=0; $i < count($zoo); $i++) { 
//     echo $zoo[$i]['name'] ." ".$zoo[$i]['species'] 
//     ." ".$zoo[$i]['age'] ." ".$zoo[$i]['description']."<br>";
// }


for ($i=1; $i < 10; $i++) { 
    for ($a=1; $a < 10; $a++) { 
        echo $i*$a." ";
    }
    echo "<br>";
}
echo "<hr>";





// 1. sukurkite funkciją kuri išspausdina kokį nors tekstą.
// 1b. sukurkite funkciją kuri priima vieną parametrą ir išspausdina tekstas "labas" +
//  tas paduotas kintamasis
// 1c. sukurkite funkciją kuri gražina skaičiaus PI pirmus 8 skaičius
// 1d. sukurkite funkciją kuri gražina dviejų parametrų sąndaugą.
// 1e. sukurkite funkciją kuri apskaičiuoja skritulio PLOTĄ. ši funkcija priima 1 parametrą
// bei naudoja 1c. funkciją savo viduje, kad gautų PI reikšmę.
// 1f. sukurkite funkciją kuri apskaičiuoja skritulio ILGĮ. ši funkcija priima 1 parametrą
// bei naudoja 1c. funkciją savo viduje, kad gautų PI reikšmę.
// 1g. sukurkite funkciją kuri: priima vieną parametrą. savyje iškviecia 1e ir 1f funkcijas
// ir atspausdina:
//  apskritimo ilgis: (tai ka gražino funkcija 1f)
//  apskritimo plotas: (tai ka gražino funkcija 1g)

sayHi();
function sayHi(){
    echo "hi<hr>";
}

sayHiYou("Petras");
$vardas = "Jonas";

sayHiYou($vardas);

function sayHiYou($name){
    echo "Labas ".$name."<hr>";
}

echo myPi();
echo "<hr>";
$piNum = myPi();
echo $piNum;
echo "<hr>";

function myPi(){
    return 3.1415926;
}

echo multiply(60, multiply(60, multiply(365,24) ) );
echo "<hr>";
echo multiply (multiply(60, 60 ) , multiply(365,24)) ;
echo "<hr>";

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