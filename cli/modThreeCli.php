#!/usr/bin/env php
<?php
require_once __DIR__ . '/../src/FSM.php';
require_once __DIR__ . '/../src/modThree.php';

$binaryString = $argv[1] ?? null;

//-- trap if there are too many arguments
//-- this is a simple CLI script, so we expect only one argument
if(count($argv) > 2) {
    echo "Usage: php cli/modThreeCli.php <binary_string>\n";
    exit(1);
}

//-- trap if the argument is empty
if ($binaryString === null) {
    echo "Usage: php cli/modThreeCli.php <binary_string>\n";
    exit(1);
}

try {
    $result = modThree($binaryString);
    echo "modThree(\"$binaryString\") = $result\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
    exit(1);
}
