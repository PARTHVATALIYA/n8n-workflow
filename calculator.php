<?php

class Calculator {

    public function add($a, $b) {
        return $a + $b;
    }

    public function subtract($a, $b) {
        return $a - $b;
    }

    public function multiply($a, $b) {
        return $a * $b;
    }

    public function divide($a, $b) {
        // BUG: No division by zero check
        return $a / $b;
    }

    public function average($numbers) {
        // BUG: Wrong logic (sum not initialized, count issue)
        foreach ($numbers as $num) {
            $sum += $num;
        }
        return $sum / count($numbers);
    }
}


// Demo usage
$calc = new Calculator();

echo "Add: " . $calc->add(10, 5) . PHP_EOL;
echo "Divide: " . $calc->divide(10, 0) . PHP_EOL; // will break
echo "Average: " . $calc->average([10, 20, 30]) . PHP_EOL;