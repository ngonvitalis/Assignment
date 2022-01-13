<?php
$rows = array_map('str_getcsv', file('examples/combination_count.csv'));
$header = array_shift($rows);
$csv = array();
foreach ($rows as $row) {
    $csv[] = array_combine($header, $row);
}
print_r(json_encode($csv));
