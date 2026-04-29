<?php
$arr = [
    [1, 2, 3],
    [1, 2],
    [1],
    ['A'],
    ['B', 'C'],
    ['D', 'E', 'F']
];

foreach ($arr as $row) {
    foreach ($row as $val) {
        echo $val . " ";
    }
    echo "<br>";
}
?>