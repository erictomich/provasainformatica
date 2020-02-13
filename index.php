<?php

require __DIR__ . "/vendor/autoload.php";

use Source\App\UI_Comp_Formulario;


$form = new UI_Comp_Formulario();
$form->UI_Comp_Formulario(true);

if(isset($_POST)) {
    $form->renderer($_POST);
} else {
    $form->renderer();
}




?>

