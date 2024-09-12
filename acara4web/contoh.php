<?php
$nilai = [90, 85, 78, 92, 88];
$total = 0;

foreach ($nilai as $n) {
    $total += $n;
}

$rataRata = $total / count($nilai);
echo "Rata-rata nilai: $rataRata";
?>