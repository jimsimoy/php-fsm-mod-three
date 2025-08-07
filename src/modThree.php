<?php

require_once __DIR__ . '/FSM.php';

function modThree(string $binaryString): int
{
    $states = ['S0', 'S1', 'S2'];
    $alphabet = ['0', '1'];
    $initialState = 'S0';
    $finalStates = ['S0', 'S1', 'S2'];
    $transitions = [
        'S0_0' => 'S0',
        'S0_1' => 'S1',
        'S1_0' => 'S2',
        'S1_1' => 'S0',
        'S2_0' => 'S1',
        'S2_1' => 'S2',
    ];

    $fsm = new FSM($states, $alphabet, $initialState, $finalStates, $transitions);
    $finalState = $fsm->process($binaryString);

    return match ($finalState) {
        'S0' => 0,
        'S1' => 1,
        'S2' => 2,
        default => throw new RuntimeException("Unknown final state: $finalState"),
    };
}
