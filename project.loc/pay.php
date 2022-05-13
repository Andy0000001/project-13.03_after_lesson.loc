<?php

include('./function.php');

//$link = mysqli_connect('','', '',''); // Вбить новое







$template = get_template('./templates/pay-form.php', []);

echo($template);