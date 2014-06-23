<?php
if (isset($_POST['action'])) {
    $action =  $_POST['action'];
} else {
    $action =  'start_app';
}

switch ($action) {
    case 'start_app':
        $number1 = 78;
        $number2 = -105.33;
        $number3 = 0.0049;

        $message = 'Enter some numbers and click on the Submit button.';
        break;
    case 'process_data':
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $number3 = $_POST['number3'];

        // make sure the user enters three numbers

        // make sure the numbers are valid

        // get the ceiling and floor for $number2

        // round $number3 to 3 decimal places

        // get the max and min values of all three numbers

        // generate a random integer between 1 and 100

        // format the message
        $message =
            "Number 1: $number1\n" .
            "Number 2: $number2\n" .
            "Number 3: $number3\n" .
            "\n" .
            "Number 2 ceiling: $number2_ceil\n" .
            "Number 2 floor: $number2_floor\n" .
            "Number 3 rounded: $number3_rounded\n" .
            "\n" .
            "Min: $min\n" .
            "Max: $max\n" .
            "\n" .
            "Random: $random\n";

        break;
}
include 'number_tester.php';
?>