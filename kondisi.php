<?php

$x = 19;
echo "x = $x </br>";

//menggunakan statement if-else
if($x %2 == 0){
    echo "$x adalah bilangan genap";
} else{
    echo "$x adalah bilangan gajil";
}

echo "</br></br>";

//menggunakan statement if-elseif-else
$tahun = "2018";

if ($tahun == "2015") {
    echo "sekarang tahun 2015";
} elseif ($tahun == "2016") {
    echo "sekarang tahun 2016";
} elseif ($tahun == "2017") {
    echo "sekarang tahun 2017";
} else {
    echo "sekarang tahun 2018";
}

?>