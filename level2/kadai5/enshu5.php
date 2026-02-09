<?php


$data = ['に','わ','に','は','に','わ','に','わ','と','り'];

$result = array_count_values($data);

print_r($result);

echo 'count_ni=' . $result['に'] . PHP_EOL;
