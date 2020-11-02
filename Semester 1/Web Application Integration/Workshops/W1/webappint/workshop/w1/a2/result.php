<?php
include 'includes/includes.php';

$data = getData();
$result = calculateResult($data);
$class = classify($result);

echo htmlHeader("KF6012", "resources/style.css");
echo presentResults($data['name'], $result, $class);
echo htmlFooter();