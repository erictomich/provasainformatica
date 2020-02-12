<?php

namespace Source\App;

use League\Plates\Engine;

class UI_Comp_Formulario extends FormValidacao {

    private $param; 
    private $templates;
    private $msgValidacao;

    public function __construct($validaScript=false) {
        $this->validaForm = $validaScript;
        $this->templates = new Engine('views');
    }

    public function renderer($param=false) {


       if($this->validaForm) {
        $onSubmit = '  ';
       } else {
        $onSubmit = '';
       } 

       $vars = $param;
       $vars['data'] = ""; 
       $vars['texto'] = ""; 
       $vars['texto_grande'] = ""; 
       $vars['onsubmit']=$onSubmit;

       if( $param ) {
        
        $this->param = $param;
        $this->validate();

        echo $this->templates->render('form', $vars);

       } else {
            
            echo $this->templates->render('form', $vars);
            
       }
      
    }

    public function validate() {
        
        $this->msgValidacao = "";

        if(!$this->checkFormatDate($this->param['data'])) {
            $this->msgValidacao += "Formato de data inválida";
        }

        if(!$this->campoMinusculas($this->param['texto'])) {
            $this->msgValidacao += "Campo texto: Use apenas letras minúsculas e espaços";
        }

        if(!$this->campoMaiusculasNumeros($this->param['texto_grande'])) {
            $this->msgValidacao += "Campo texto grande: Use apenas letras maiúsculas, números e espaços";
        }


        if($this->msgValidacao) {
            return false;
        } else {
            return true;
        }
    }



}