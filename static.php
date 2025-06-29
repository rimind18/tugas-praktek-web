<?php

function varstatic() {
    static $x = 1; //mendeklarasikan variabel statis
    echo $x;
    $x++;
    echo "</br>";
}

varstatic(); //memanggil function varstatic
varstatic();
varstatic();

?>