<?php
if (isset($_GET['number'])) {
    $num = $_GET['number'];
    $is_prime = true;

    if ($num < 2) {
        $is_prime = false;
    } else {
        for ($i = 2; $i < $num; $i++) {
            if ($num % $i == 0) {
                $is_prime = false;
                break;
            }
        }
    }

    if ($is_prime) {
        echo("$num is a prime number.");
    } else {
        echo("$num is not a prime number.");
    }
}
?>