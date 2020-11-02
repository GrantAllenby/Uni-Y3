<?php
function htmlHeader($title, $mainHeader, $style) {
    return <<<HEADER
<!doctype html>
<html lang="en-gb">
    <head>
        <title>$title</title>
        <link rel="stylesheet" href="$style">
    </head>
    <body>
        <main>
            <h1>$mainHeader</h1>
HEADER;
}