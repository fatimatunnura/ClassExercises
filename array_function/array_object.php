
<?php
require_once 'Benchmark/Timer.php';

define('KEYS', 10000);

function fill(&$arr) {
    for ($i = 1; $i <= KEYS; $i++) {
        $arr['key-' . $i] = $i;
    }
}

function read_key(&$arr) {
    for ($i = 1; $i <= KEYS; $i++) {
        $v = $arr['key-' . $i];
    }
}

function fe(&$arr) {
    foreach ($arr as $key => $value) {
        $v = $value;
    }
}
?>