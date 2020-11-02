<?php
function htmlHeader($title, $stylesheet) {
    return <<<HEADER
<!DOCTYPE html>
<html lang="en-gb">
<head>
 <title>$title</title>
 <link rel="stylesheet" href=$stylesheet>
</head>
<body>
HEADER;

}