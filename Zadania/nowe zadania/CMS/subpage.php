<?php
$myfile = 'data.csv';

$fin = fopen($myfile, 'r');
$data = array();


$data[] = fgetcsv($fin, 1000);

while ($line = fgetcsv($fin, 1000)) {
    echo join(', ', $line).'<br>';
    for($i = 4, $k = count($line); $i < $k; $i++) {
        if ($line[$i] < 1000) {
            $line[$i] = 10000;
        }
    }
    $data[] = $line;
}

fclose($fin);

$fout = fopen($myfile, 'w');
foreach ($data as $line) {
    fputcsv($fout, $line);
}
fclose($fout);