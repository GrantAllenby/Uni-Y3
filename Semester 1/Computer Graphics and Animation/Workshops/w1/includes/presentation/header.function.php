<?php
function htmlHeader($stylesheet) {
return <<<HEADER
<!doctype html>
    <html lang="en-gb">
    <head>
        <title>KF6018 - W1</title>
        <link rel="stylesheet" href="../../resources/$stylesheet">
        <style>
            
        </style>
    </head>
HEADER;
}