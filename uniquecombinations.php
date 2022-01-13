<?php
$rows = array_map('str_getcsv', file('examples/products_comma_separated.csv'));
$header = array_shift($rows);
$csv = array();
foreach ($rows as $row) {
    $csv[] = array_combine($header, $row);
}
$j_data = json_encode($csv);


foreach ( $csv as $key ):
    $o[implode(', ', $key)][] = null;
    foreach ($o as $key1) {
        $g[implode(', ', $key)] = count($key1);
    }
endforeach;
print_r(json_encode($g));

