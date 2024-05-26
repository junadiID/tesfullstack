<?php

function buatMatrik($n) {
    $matrix = array_fill(0, $n, array_fill(0, $n, '*'));

    $number = $n;
    for ($i = 0; $i < $n; $i++) {
        $matrix[$i][$n - 1 - $i] = $number--;
    }

    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            if ($j != ($n - 1 - $i) && $j != $i) {
                $matrix[$i][$j] = '*';
            }
        }
    }

    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            echo $matrix[$i][$j] . " ";
        }
        echo "<br>";
    }
}


$n = isset($_POST['n']) ? (int)$_POST['n'] : 0;


$n = max(0, min($n, 10));


buatMatrik($n);
?>


<form method="post">
    <label for="n">Masukkan nilai n (1-10):</label><br>
    <input type="text" id="n" name="n"><br>
    <input type="submit" value="Buat Matriks">
</form>
