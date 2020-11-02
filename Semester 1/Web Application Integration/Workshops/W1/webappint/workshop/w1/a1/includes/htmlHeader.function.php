<?php
function htmlHeader($title, $stylesheet) {
return<<<HEADER
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>$title</title>
        <link href="../assets/$stylesheet" rel="stylesheet" type="text/css">
    </head>
    <body>
HEADER;
}