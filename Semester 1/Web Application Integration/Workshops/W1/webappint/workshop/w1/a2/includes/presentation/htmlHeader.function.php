<?php
function htmlHeader($title, $link) {
    return <<<HEADER
<!DOCTYPE html>
<html lang="en-gb">
<head>
 <title>$title</title>
 <link rel="stylesheet" href=$link>
</head>
<body>
HEADER;
}