<?php
/***
/
/ classify - REQUIRES IMPROVEMENT
/
/ This function should return a classifcation of the
/ degree result as a string e.g. "First Class Honours",
/ "Second Class Honours Upper Division", etc.
/
 ***/
/***
/
/ classify
/
/ This function returns a classifcation of the
/ degree result as a string
/
 ***/
function classify($result) {

    if (($result <= 100) && ($result >= 0)) {

        /*** This command rounds down to nearest integer
         * E.g. 10.1 would be rounded to 10, 11.9 would be 11.
         * It divides the result by 10 to reduce the number of switch cases.
         ***/
        $rounded = floor($result/10);

        switch($rounded) {
            case '10':
                return "First class Honours";
            case '9':
                return "First class Honours";
            case '8':
                return "First class Honours";
            case '7':
                return "First class Honours";
            case '6':
                return "Second Class Honours Upper Division";
            case '5':
                return "Second Class Honours Lower Division";
            case '4':
                return "Third Class Honours";
            default:
                return "Fail";
        }
    } else {
        return "Mark out of range!";
    }
}
