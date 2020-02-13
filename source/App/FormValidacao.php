<?php

namespace Source\App;

class FormValidacao {

    public function checkFormatDate($data) {
        $mes = substr($data, 0, 2);
        $dia = substr($data, 3, 2);
        $ano = substr($data, 6, 4);

        return checkdate ( $mes , $dia , $ano );
    }

    public function campoMinusculas($data) {
        
        if(!preg_match("/[^a-z ]/", $data)) {
            return true;
        }
        
        return false;
    }

    public function campoMaiusculasNumeros($data) {
        
        if(!preg_match("/[^A-Z0-9 ]/", $data)) {
            return true;
        }
        return false;
    }

}