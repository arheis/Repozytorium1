<?php

//deklaracja funkcji bez parametrów
function suma() {
    echo (6 + 6);
}

//funkcje z parametrami

function suma2($a, $b) {
    echo "<br>Suma liczb $a oraz $b wynosi " . ($a + $b);
}
//wartosci domyslne parametrów
function suma3($a = 0, $b = 0) {
    echo "<br>Suma liczb $a oraz $b wynosi " . ($a + $b);
}

//funkcje zwracająca wartość
function suma4($a = false, $b = false) {
    if($a == false || $b == false) {
        return false;
    } else {
        return $a + $b;
    }
}

//wywołanie funkcji
suma();
suma2(4,5);
suma2(1453,5943);

suma3();
suma3(100);
suma3(5,3);

$wynik = suma4(6,7);
echo "<p>wynik: $wynik</p>";
echo "<p>suma 4+5 = " . suma4(4,5);

$wynik = suma(5,8);
if($wynik == false) {
    echo "<p>Brak wyników</p>";
} else {
    echo "<p> Wynik: $wynik</p>";
}


?>