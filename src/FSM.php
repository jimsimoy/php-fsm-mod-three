<?php

class FSM
{
    private array $states;
    private array $alphabet;
    private string $initialState;
    private array $finalStates;
    private array $transitionTable;
    private string $currentState;

    public function __construct(array $states, array $alphabet, string $initialState, array $finalStates, array $transitionTable)
    {
        $this->states = $states;
        $this->alphabet = $alphabet;
        $this->initialState = $initialState;
        $this->finalStates = $finalStates;
        $this->transitionTable = $transitionTable;
        $this->currentState = $initialState;
    }

    public function reset(): void
    {
        $this->currentState = $this->initialState;
    }

    public function input(string $symbol): void
    {
        if (!in_array($symbol, $this->alphabet)) {
            throw new InvalidArgumentException("Invalid input symbol: $symbol");
        }

        $key = $this->currentState . '_' . $symbol;

        if (!isset($this->transitionTable[$key])) {
            throw new RuntimeException("No transition defined for state {$this->currentState} with input $symbol");
        }

        $this->currentState = $this->transitionTable[$key];
    }

    public function process(string $input): string
    {
        $this->reset();
        foreach (str_split($input) as $symbol) {
            $this->input($symbol);
        }
        return $this->currentState;
    }

    public function getCurrentState(): string
    {
        return $this->currentState;
    }
}
