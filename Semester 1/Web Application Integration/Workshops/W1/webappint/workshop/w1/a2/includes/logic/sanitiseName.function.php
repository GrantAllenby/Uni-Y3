<?php
function sanitiseName($x) {
    return substr(trim(filter_var($x, FILTER_SANITIZE_STRING)), 0, 70);
}