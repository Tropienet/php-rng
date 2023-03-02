<?php
    function getNumberOfDice() {
        $number_of_dice = $_GET["number-of-dice"];

        /*if($number_of_dice>0&&$number_of_dice<10) {
            return $number_of_dice;
        }else {
            return "Please enter the number of dice between 1 and 10";
        } */

        return ($number_of_dice>0&&$number_of_dice<10) ? $number_of_dice : "Please enter the number of dice between 1 and 10";
    }

    function getTypeOfDice() {
        $type_of_dice = $_GET["type-of-dice"];

        return ($type_of_dice != "" ) ? $type_of_dice : "please choose another type of dice";
    }

    function rollDice( $number_of_dice, $type_of_dice ) {
        $max = 0;

        switch ($type_of_dice) {
            case "d6":
                $max = 6;
                break;
            case "d8":
                $max = 8;
                break;
            case "d10":
                $max = 10;
                break;
            case "d12":
                $max = 12;
                break;
            case "d20":
                $max = 20;
                break;
            default:
                $max = 0;
            }

            function calculateSum( $number_of_dice, $max ) {
                $sum = 0;

                for ($i = 0; $i < $number_of_dice; $i++) {
                    $sum += rand(1, $max);
                }

                return $sum;
            }

            echo "The number of dice rolled is " . $number_of_dice . ", The type of dice rolled is " . $type_of_dice 
            . ", the total count is " . calculateSum($number_of_dice, $max);
    }

    rollDice(getNumberOfDice(), getTypeOfDice());
?>