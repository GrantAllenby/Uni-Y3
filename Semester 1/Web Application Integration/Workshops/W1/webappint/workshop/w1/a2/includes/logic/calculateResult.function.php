<?php
/**
 *
 * Function calculateResult
 *
 * This function can still be improved to correctly calculate the result.
 * It does not address borderline cases and may not follow the exact algorithm
 * that the University uses
 *
 * @param $data is an associate array:
 *   $data["level5"] is an array of integers representing module marks
 *   $data["level6"] is an array of integers representing module marks
 *   $data["project"] is a integer representing a mark
 *
 */

/**
 * @param $data - the arrays for calculating the result.
 * @return mixed
 */
function calculateResult($data) {

    /**
     * The min function finds the lowest number within a set of numbers. (In this case the lowest mark in the array.)
     * With this, we then subtract that from the total sum, which means that the total for level 5 as well as 6 has
     * the lowest mark removed.
     *
     * array_sum is just the total sum of the values in the array.
     */

        $totalL5 = array_sum($data["level5"]) - min($data["level5"]);
        $totalL6 = array_sum($data["level6"]) - min($data["level6"]);

    /**
     * This is just simply collecting the mark from the project and doubling it.
     */
        $totalProject = $data["project"] * 2;

        $resultA = (($totalL5/5) * 0.4) + ((($totalL6 + $totalProject)/5) * 0.6);
        $resultB = ($totalL6 + $totalProject) /5;


    /**
     * This is returning the highest value from the aforementioned equations.
     */
        return max($resultA, $resultB);
}