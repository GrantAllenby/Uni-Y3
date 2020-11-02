<?php
function sanitiseNum($x) {
    return filter_var($x, FILTER_VALIDATE_INT, array("options"=>array("min_range"=>0, "max_range"=>100)));
}