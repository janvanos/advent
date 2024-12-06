<?php
$filePath = 'input.txt';
$lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$location1array = [];
$location2array = [];

foreach ($lines as $line) {
    $columns = preg_split('/\s+/', $line);

    if (count($columns) === 2) {
        $location1array[] = $columns[0];
        $location2array[] = $columns[1];
    }
}

$countNumber = 0;
$totalAmount = 0;

for ($i = 0; $i < count($location1array); $i++) {
    foreach ($location2array as $key => $value) {
        if ($value == $location1array[$i]) {
            $countNumber++;
            $totalAmount += $location1array[$i];
        }
    }

    if ($i == count($location1array)) {
        $totalAmount += $location1array[$i] * $countNumber;
        $countNumber = 0;
    }
}
echo $totalAmount

?>