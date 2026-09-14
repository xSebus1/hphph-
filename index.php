<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $name = "Sebastian";
        $age = 15;
        $country = "Polsce";
        echo "<bold>ZADANIE 1 -></bold> Nazywam się $name mam $age lat, i mieszkam w $country";
        
        $width = 8;
        $heigth = 5;
        $pole = $width * $heigth;
        echo "<br><bold>ZADANIE 2 -></bold> Pole prostokąta wynosi: $pole";
        
        $liczba = 10;
        $liczba += 1;
        echo "<br> <bold>ZADANIE 3 -></bold> $liczba<br> <bold>ZADANIE 4 -></bold> ";

        $isMember = false;
        echo var_dump($isMember);
    
        $l1 = 10;
        $l2 = 51;

        $suma = $l1 + $l2;
        $roznica = $l2 - $l1;
        $iloczyn = $l1 * $l2;
        $reszta = $l1 % $l2;

        echo "<br> ZADANIE 5 -> Suma: $suma, Róznica: $roznica, Iloczyn: $iloczyn, Reszta: $reszta";

        echo "<br><br>|| --> WARUNKOWE <-- ||<br><br>";

        $age = 18;

        if ($age >= 18) {
            echo TRUE;
        } else {
            echo FALSE;
        }

        echo " Uwaga! -> 1 = TRUE // 0 = FALSE (ciekawostka :D)";

        $temperatura = -1;

        echo "<br>";

        if ($temperatura < 0) {
            echo "Ujemna!";
        } elseif ($temperatura > 0) {
            echo "Dodatnia!";
        } else {
            echo "Ziroo!";
        }

        echo "<br>";

        $favcolor = "czerwony";

        switch ($favcolor) {
        case "czerwony":
            echo "zielony";
            break;
        case "zielony":
            echo "niebieski";
            break;
        default:
            echo "inny kolor";
        }

        echo "<br>";

        $grade = 10;

        if ($grade >= 50) {
            echo "Zdany";
        } else {
            echo "Nie zdany";
        }

        $username = "";

        if (empty($username)) {
            $username = "gsgshgushguhsghs";
        }

        echo "<br>$username";

        echo "<br>PETLE";

        for ($i = 1; $i < 11; $i++) {
            echo "<br>$i";
        }

        $num = 2;
        while ($num < 20 +1) {
            if ($num % 2 == 0) {
                echo "<br>parzysta $num";
            }
            $num++;
        }

        $rzeczy = ["xd1", "xd2", "xd3", "xd4", "xd5"];
        foreach ($rzeczy as $rzecz) {
            echo "<br>". $rzecz . "\n";
        }

        $num = 10;
        do {
            echo "<br>Wykonuje się (WHILE) --> $num < 20!" . "\n";
            $num += 2;
        } while ($num < 20);
        echo "<br>Koniec! $num = 20!";

        $sum = 0;
        for ($i = 1; $i < 101; $i++) {
            $sum = $sum + $i;
        }

        echo "<br>Suma (1 - 100) = $sum";

        echo "<br>TABLICE";

        $tabel = ["zielony", "niebieski", "bialy"];
        echo "<br>$tabel[0]";

        $product = [
            'name' => 'Jabłko',
            'price' => 35,
            'in_stock' => 5
        ];

        $numbers = [1, 2, 3, 4];
        $int = 1;
        array_push($numbers, $int);
        foreach ($numbers as $num) {
            echo "<br>$num";
        }

        $fruits = ["banan", "jabłko"];
        $nazwa = "banan";

        if (in_array('banan', $fruits)) {
            echo "<br>->". TRUE;
        }

        foreach (array_keys($product) as $key) {
            echo "<br>$key";
        }

    ?>
</body>
</html>
