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

   echo getNumberOfDice();
?>