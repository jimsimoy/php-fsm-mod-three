# PHP FSM Modulo Three

This project implements a **Finite State Machine (FSM)** in PHP and demonstrates its use by calculating the modulo 3 of a binary string.

## 📁 Project Structure

```
php-fsm-mod-three/
├── cli/
│   └── modThreeCli.php   # CLI script to run FSM
├── src/
│   ├── FSM.php           # Reusable FSM class
│   └── modThree.php      # Mod-3 FSM implementation
├── tests/
│   └── ModThreeTest.php  # PHPUnit test suite
├── composer.json
└── README.md
```

## 🚀 Usage

### Prerequisites

- PHP 8.1
- Composer

### Install Dependencies

```bash
composer install
```

### Run the CLI Script

```bash
php cli/modThreeCli.php 1101
# Output: modThree("1101") = 1
```

### Run Tests

```bash
./vendor/bin/phpunit tests
```

## 🛠 Notes

- The FSM is reusable for other finite automaton-based problems.
- The `modThree()` function uses FSM transitions and does not rely on binary-to-integer conversion.

Enjoy!
