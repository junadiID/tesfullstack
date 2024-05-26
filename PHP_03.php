<?php


$array = array(790, 483, 281, 224, 483, 60, 698, 483, 790, 168);

function cariDuplikat($array) {
    $duplicates = array();
    $counted = array();

    foreach ($array as $number) {
        if (!isset($counted[$number])) {
            $counted[$number] = 1;
        } else {
            $counted[$number]++;
        }
    }


    foreach ($counted as $key => $value) {
        if ($value > 1) {
            $duplicates[] = $key;
        }
    }

    return $duplicates;
}

$duplicateNumbers = cariDuplikat($array);
echo "Angka yang muncul lebih dari satu kali: ";
foreach ($duplicateNumbers as $number) {
    echo $number . " ";
}
?>
