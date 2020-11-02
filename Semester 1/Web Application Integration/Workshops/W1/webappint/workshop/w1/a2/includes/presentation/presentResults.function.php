<?php
function presentResults($name, $result, $class) {
    return <<<RESULTS
<section class='result'>
 <h1>Degree result for $name</h1>
 <p>Result: $result </p>
 <p>Class: $class </p>
 <p><a href='index.php'>Back to form</a></p>
</section>
RESULTS;
}