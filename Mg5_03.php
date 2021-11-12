<?php

$angka1 = 1;
$angka2 = 50;
echo "Bilangan Prima dari 1-50, yaitu: ". "<br>". "<br>";
for($i = $angka1; $i <= $angka2; $i++){
    $faktor = 0;
    for ($p = 1; $p <= $i; $p++){
        if($i % $p ==0){
            $faktor++;
        }
    }
    if ($faktor==2){
        echo "".$i."<br>";
    }
}
?>