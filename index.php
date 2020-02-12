<?php

require __DIR__ . "/vendor/autoload.php";

use Source\App\UI_Comp_Formulario;


$form = new UI_Comp_Formulario(true);
$form->renderer($_POST);

?>

