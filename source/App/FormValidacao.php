<?php

namespace Source\App;

class FormValidacao {

    public function checkFormatDate($data) {
        $mes = substr($data, 0, 2);
        $dia = substr($data, 3, 2);
        $ano = substr($data, 6, 4);

        if($ano >= 1000) {
            if($mes >= 1 && $mes <=12) {
                
                if($mes==1 || $mes== 3 || $mes == 5 || $mes == 7 || $mes == 8 || $mes == 10 || $mes == 12) {
                    if ( !($dia >= 1 && $dia <= 31) ) {
                        return false;
                    }
                } else if ( $mes == 2 ) {
    
                    // verifica ano bissexto 
                    if (($ano % 4 == 0) && (($ano % 100 != 0) || ($ano % 400 == 0))) {
                        if ( !($dia >= 1 && $dia <= 29) ) {
                            return false;
                        }
                    } else {
                        if ( !($dia >= 1 && $dia <= 28) ) {
                            return false;
                        }
                    }
    
    
                } else {
                    if ( !($dia >= 1 && $dia <= 30) ) {
                        return false;
                    }
                }
    
            } else {
                return false;
            }
        } else {
            return false;
        }

        return true;
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