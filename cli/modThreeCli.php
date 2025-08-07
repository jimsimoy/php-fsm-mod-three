#!/usr/bin/env php
<?php
require_once __DIR__ . '/../src/FSM.php';
require_once __DIR__ . '/../src/modThree.php';

$binaryString = $argv[1] ?? null;

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
