<?php
include("classes/webpage.class.php");

$title = "KF6012";
$heading1 = "KF6012 - Week 2 Session B";
$footer = "Grant";
$css = "styles/style.css";

$webPage = new WebPage("$title","$css","$heading1","$footer");

$webPage->addToBody("<h2>W2 - B</h2>");
$webPage->addToBody("<h3>PHP OOP to create webpages</h3>");
$webPage->addToBody("<p>You can create classes that hide the implementation and ordering complexity of
 creating web pages dynamically.<br> Using OOP in this way provides code that is better designed,
  has a strong organisational structure, and aids re-usability and efficiency. </p>");

echo $webPage->get_page();
