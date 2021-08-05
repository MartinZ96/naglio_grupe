<?php
//   1.sukurkite masyvą. užpildykite 30čia atsitiktinių skaičių nuo 20 iki 40.

//    1b. atspausdinkite masyvo skaičius vienoje eilutėje atsirtus tarpais

$masyvas = [];

foreach(range(1,30) as $value){
    $masyvas = rand(20,40);
    echo $value.' ';
}


echo '<br>';

//         2. sukurkite masyvą su 10 skaičių nuo 0 iki 9

$masyvasA = [];

for ($i=0; $i < 10 ; $i++) { 
    $masyvasA[] = $i;
    echo $i.' ';
}
echo '<br>';

//         2b. sukurkite kitą masyvą su 10 skaičių nuo 10 iki 19


//          2c. pasinaudoję ciklu atspausdinkite 100 atsitiktinių skaičių iš 2b masyvo.


for ($i=10; $i < 20 ; $i++) { 
    $masyvasA[] = $i;
    echo $i.' ';
        for ($j=0; $j < count($masyvasA); $j++){
            echo $j.' ';
        }
            
        }
    

echo '<br>';

//           3. sukurkite dvimatį masyvą. pirmas matmuo - 10 elementų. antras 10 elementų.
//              reikšmės - skaičiai nuo 0 iki 9.
//             3b. atspausdinkite duomenis. (gausis skaičių stačiakampis).

// $masyvasB = [];

// foreach(range(1,10) as $val){
        
//         foreach(range(1,10) as $val1){
//             $masyvasB[$val][$val1] = range(0,9);
//         }

// }

// echo '<pre>';
// print_r($masyvasB);
// echo '<pre>';
// echo '<br>';
// // print_r($masyvasB*2);



//            !!! 3c. padarykite tą patį, ką  darėte 3b, tik spausdinkite tuos skaičius pakeltus kvadratu


        // 4. sukurkite masyvą pavadinimu $gyvunas; suteikite jam reikšmes key + value principu.
        // raktažodžiai (key): "species","age", "name", "description". Tai bus vienas objektas,
        // vienas gyvūnas, su rūšimi, amžiumi, vardu ir aprašu.



$gyvunas = ["species" => "begemotas", "age" => "22", "name" => "Artis", "description" => "didelis"];
echo '<pre>';
print_r($gyvunas);


//    5. sukurkite tris masyvus:
//         $names = ["vardas1","vardas2","vardas3"....] vardus sugalvokite patys. jų reikia 10.
//         $species = ["kengūra","gazelė","liūtas"....] gyvūnus sugalvokite patys. jų reikia 10.
//         $descriptions = ["gražus bet piktas","pastoviai miega","šauniai maskuojasi"....] 
//         aprašus sugalvokite patys. jų reikia 10.


$names = ["Martynas", "Andrius", "Tomas", "Rūta", "Asta", "Darius", "Mantas", "Inga", "Jonas", "Petras", ];
$species = ["liūtas", "asilas", "panda", "varna", "arklys", "sliekas", "katė", "šuo", "jautis", "tigras", ];
$descriptions = ["gražus bet piktas", "pastoviai miega", "šauniai maskuojasi", "greit bėga", "daug sveria", "yra didelis", "moka skristi", "daug valgo", "toli mato", "viską griauna" ];

print_r($names);
print_r($species);
print_r($descriptions);

//  !!!5b. sukurkite dvimatį masyvą iš 20 elementų.  didžiąjame masyve bus sudėti mažesni masyvai,
//          iš eilės. maži masyvai bus tokie patys kaip 4. užduotyje. jų reikšmes užpildykite 5. 
//          masyvų reikšmėmis. t.y imate random vardą, ir priskiriate konstruojamam gyvūnui ir tt.


$dvimatis = range(1,20);
    foreach($dvimatis as $spinta){
            $spinta = $names;
                foreach($spinta as $stalcius){
                        
        }
    }
print_r($dvimatis);
// var_dump($dvimatis);
var_dump($spinta);
// var_dump($stalcius);

//  !!!5c. atvaizduokite gyvūnus iš 5b masyvo. vienas gyvūnas - viena eilutė.


//     6. padarykite daugybos lentelę nuo 1 iki 9.


//       FUNKCIJOS  1. sukurkite funkciją kuri išspausdina kokį nors tekstą.
echo '<br>';
echo '<br>';


function spausdinti ($tekstas){
    return $tekstas = "Sveiki visi";
}

echo spausdinti ($tekstas);

//   1b. sukurkite funkciją kuri priima vieną parametrą ir išspausdina tekstas "labas" +
//          tas paduotas kintamasis

function spausdinti1 ($tekstas1){
    return $tekstas1 = "kaip gyvi?";
}

echo spausdinti1 ('Labas '.$tekstas1);

//    1c. sukurkite funkciją kuri gražina skaičiaus PI pirmus 8 skaičius

