<?php
function resultsForm() {
    return <<<FORM
 <form action="result.php" method="POST">
 	<h1>Degree Calculator</h1>
 	<p><em>Disclaimer: Completely innaccurate!!</em><p>
   <p>
     <input type='text' name='name' placeholder='name'>
   </p>
   <fieldset>
     <legend>Level 5</legend>
     <p>
       <input type='number' name='L5-1' placeholder='Module 1'>
     </p>
     <p>
       <input type='number' name='L5-2' placeholder='Module 2'>
     </p>
     <p>
       <input type='number' name='L5-3' placeholder='Module 3'>
     </p>
     <p>
       <input type='number' name='L5-4' placeholder='Module 4'>
     </p>
     <p>
       <input type='number' name='L5-5' placeholder='Module 5'>
     </p>
     <p>
       <input type='number' name='L5-6' placeholder='Module 6'>
     </p>
   </fieldset>
   <fieldset>
     <legend>Level 6</legend>
     <p>
       <input type='number' name='project' placeholder='Project mark'>
     </p>
     <p>
       <input type='number' name='L6-1' placeholder='Module 1'>
     </p>
     <p>
       <input type='number' name='L6-2' placeholder='Module 2'>
     </p>
     <p>
       <input type='number' name='L6-3' placeholder='Module 3'>
     </p>
     <p>
       <input type='number' name='L6-4' placeholder='Module 4'>
     </p>
   </fieldset>
     <input type="submit" value='submit'>
 </form>
FORM;
}