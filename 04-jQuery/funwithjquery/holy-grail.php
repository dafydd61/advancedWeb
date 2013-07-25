<?php

$name = $_GET['yourName'];
$age = $_GET['age'];
$color = $_GET['favColour'];

?>


<div class="response" style="background-color: <?php echo ($color); ?>;">
  <p>Your name is <?php echo($name); ?></p>
  <p>You are <?php echo($age); ?> years old.</p>
</div>