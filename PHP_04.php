<?php
function cekInput($angka1, $angka2) {
    $bilanganGanjil = array();


    if ($angka1 > $angka2) {
        $temp = $angka1;
        $angka1 = $angka2;
        $angka2 = $temp;
    }


    for ($i = $angka1; $i <= $angka2; $i++) {
        if ($i % 2 != 0) {
            $bilanganGanjil[] = $i;
        }
    }

    return $bilanganGanjil;
}


$angka1 = 2;
$angka2 = 5;
$result = cekInput($angka1, $angka2);
print_r($result);
?>
