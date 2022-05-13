<?php

include('./function.php');

//$link = mysqli_connect('','', '',''); // Вбить новое







$template = get_template('./templates/burger.php', []);

echo($template);