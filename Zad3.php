<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Wyświetli na ekranie 10 kolejnych liczb całkowitych począwszy od 1.";
    for ($i = 1; $i <= 10; $i++)
    {
        echo $i. "<br>";
    }

    echo "<br>";
    echo "Wyświetli na ekranie 10 kolejnych liczb całkowitych począwszy od 10 w kolejności malejącej.";
    echo "<br>";
    for ($i = 10; $i <= 0; $i--)
    {
        echo $i. "<br>";
    }
    echo "<br>";
    echo "Obliczy i wyświetli na ekranie sumę kolejnych 10 liczb całkowitych począwszy od 1.";
    echo "<br>"
    $suma = 0;
    for ($i = 1; $i <= 10; $i++) {
        $suma += $i;
    }
    echo "Suma = " . $suma;
    echo "<br>";
    echo "Wyświetli na ekranie 10 kolejnych parzystych liczb całkowitych począwszy od 2.";
    echo "<br>"
    for ($i = 2; $i <= 20; $i += 2) {
        echo $i . " ";
    }
    echo "<br>";
    echo "Pracownik przez X miesięcy odkłada co miesiąc Y zł. W każdym miesiącu z całej odłożonej na tą chwilę kwoty uzyskuje 8% odsetek. Jaką kwotę zgromadzi pracownik ?";
    echo "<br>"
    $x = (int) readline("Podaj liczbe miesiecy: ");
    $y = (float) readline("Podaj miesieczna wplate: ");

    $kwota = 0;

    for ($i = 1; $i <= $x; $i++) {
        $kwota += $y;
        $kwota *= 1.08;
    }

    echo "Zgromadzona kwota: " . $kwota . " zl";
    echo "<br>";
    echo "Obliczy sumę elementów ciągu arytmetycznego, składającego się ze 100 elementów, z których każdy kolejny jest większy od poprzedniego o 10. Pierwszy element wynosi 5.";
    echo "<br>"

    $suma = 0;
    $element = 5;

    for ($i = 0; $i < 100; $i++) {
        $suma += $element;
        $element += 10;
    }

    echo "Suma = " . $suma;
    echo "<br>";
    echo "Obliczy ilość cegieł w piramidzie o podstawie 10 x 10 cegieł.";
    echo "<br>"
    $suma = 0;

    for ($i = 1; $i <= 10; $i++) {
        $suma += $i * $i;
    }

    echo "Liczba cegiel = " . $suma;

    echo "<br>";
    echo "Obliczy ilość cegieł w ścianie o podstawie X cegieł, wysokości Y rzędów cegieł, gdzie każdy kolejny stawiany rząd cegieł jest o Z cegieł krótszy od poprzedniego (niższego).";
    echo "<br>"

    $x = (int) readline("Podaj X: ");
    $y = (int) readline("Podaj Y: ");
    $z = (int) readline("Podaj Z: ");

    $suma = 0;
    $cegly = $x;

    for ($i = 0; $i < $y; $i++) {
        $suma += $cegly;
        $cegly -= $z;
    }

    echo "Liczba cegiel = " . $suma;
    echo "<br>"
    echo "Oblicza wagę ściany z 8. podpunktu, przy założeniu, że jedna cegła waży K kilogramów.";
    echo "<br>"

    
    $x = (int) readline("Podaj X: ");
    $y = (int) readline("Podaj Y: ");
    $z = (int) readline("Podaj Z: ");
    $k = (float) readline("Podaj wage jednej cegly w kg: ");

    $liczbaCegiel = 0;
    $cegly = $x;

    for ($i = 0; $i < $y; $i++) {
        $liczbaCegiel += $cegly;
        $cegly -= $z;
    }

    $waga = $liczbaCegiel * $k;

    echo "Liczba cegiel = " . $liczbaCegiel . PHP_EOL;
    echo "Waga sciany = " . $waga . " kg";

    echo "<br>"
    echo "Symulujący działanie prostego kalkulatora.";
    echo "<br>"

    $a = (float) readline("Podaj pierwsza liczbe: ");
    $operator = readline("Podaj operator (+, -, *, /): ");
    $b = (float) readline("Podaj druga liczbe: ");

    switch ($operator) {
        case "+":
            echo $a + $b;
        break;

        case "-":
            echo $a - $b;
        break;

        case "*":
            echo $a * $b;
        break;

        case "/":
            if ($b != 0) {
                echo $a / $b;
            } else {
                echo "Nie mozna dzielic przez zero.";
        }
        break;

        default:
        echo "Nieprawidlowy operator.";
}
    echo "<br>"
    echo "Wyświetli na ekranie ciąg arytmetyczny składający się z N elementów, gdzie pierwszy element ma wartość X, a różnica pomiędzy kolejnymi elementami ciągu wynosi Y.";
    echo "<br>"
    $n = (int) readline("Podaj N: ");
    $x = (int) readline("Podaj X: ");
    $y = (int) readline("Podaj Y: ");

    for ($i = 0; $i < $n; $i++) {
        echo ($x + $i * $y) . " ";
    }
    echo "<br>"
    echo "Oblicza sumę dwóch liczb podanych przez użytkownika. Algorytm ma działać tak długo, aż suma podanych liczb będzie wynosiła 0.";
    echo "<br>"
    
    do {
        $a = (int) readline("Podaj pierwsza liczbe: ");
        $b = (int) readline("Podaj druga liczbe: ");
    
        $suma = $a + $b;
    
        echo "Suma = " . $suma . PHP_EOL;
    
    } while ($suma != 0);

    echo "<br>"
    echo "Algorytm oblicza silnię wprowadzonej przez użytkownika liczby.";
    echo "<br>"

    
    $n = (int) readline("Podaj liczbe: ");

    $silnia = 1;

    for ($i = 1; $i <= $n; $i++) {
        $silnia *= $i;
    }

    echo $n . "! = " . $silnia;
    echo "<br>"
    echo "Wypisuje na ekran ciąg n liczb, z których każda kolejna jest kwadratem poprzedniej liczby z ciągu. Wartość pierwszej liczby podaje użytkownik.";
    echo "<br>"

    
    $n = (int) readline("Podaj liczbe elementow: ");
    $liczba = (int) readline("Podaj pierwsza liczbe: ");

    for ($i = 0; $i < $n; $i++) {
        echo $liczba . " ";

    $liczba = $liczba * $liczba;
    }

    echo "<br>"
    echo "Oblicza sumę oraz średnią z 10 losowych liczb z przedziału <50,100>.";
    echo "<br>"

    $suma = 0;

    echo "Wylosowane liczby: ";

    for ($i = 0; $i < 10; $i++) {
        $liczba = rand(50, 100);

        echo $liczba . " ";

        $suma += $liczba;
    }

    $srednia = $suma / 10;

    echo PHP_EOL;
    echo "Suma = " . $suma . PHP_EOL;
    echo "Srednia = " . $srednia;

    ?>
</body>
</html>