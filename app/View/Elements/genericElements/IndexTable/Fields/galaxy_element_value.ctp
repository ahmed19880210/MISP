<?php
$value = Hash::get($row, $field['data_path']);
$key = Hash::get($row, $field['elementParams']['data_path_key']);

if ($key === 'refs') {
    echo '<a href="' . h($value) . '" rel="noreferrer noopener">' . h($value) . '</a>';
} else if ($key === 'country') {
    echo $this->Icon->countryFlag($item['GalaxyElement']['value']) . ' ' . h($value);
} else {
    echo h($value);
}