<?php

namespace Source\App;

use League\Plates\Engine;

class UI_Comp_Formulario extends FormValidacao {

    private $param; 
    private $templates;
    private $msgValidacao = "";
    private $validaForm = false;

    public function __construct() {
        $this->templates = new Engine('views');
    }

    public function UI_Comp_Formulario($validaScript=false) {
        $this->validaForm = $validaScript;
    }

    public function renderer($param=false) { 

       $vars['validaForm'] = $this->validaForm;       

       if( $param ) {
                   
            $vars = $param;
            
            $this->param = $param;
            if($this->validate()) {
                $vars['msgValidacao'] = $this->msgValidacao;
            } 

            echo $this->templates->render('form', $vars);

       } else {
            
            $vars['data'] = ""; 
            $vars['texto'] = "";
            $vars['check'] = ""; 
            $vars['texto_grande'] = ""; 

            echo $this->templates->render('form', $vars);
                
       }
      
    }

    public function validate() {
        
        $msgValidacao = "";

        if(!$this->checkFormatDate($this->param['data'])) {
            $msgValidacao = $msgValidacao."<li>Formato de data inválida</li>";
        }

        if(!$this->campoMinusculas($this->param['texto'])) {
            $msgValidacao = $msgValidacao."<li>Campo texto: Use apenas letras minúsculas e espaços</li>";
        }

        if(strlen($this->param['texto'])>144) {
            $msgValidacao = $msgValidacao."<li>O texto pode ter no máximo 144 caracteres</li>";
        }

        if(!$this->campoMaiusculasNumeros($this->param['texto_grande'])) {
            $msgValidacao = $msgValidacao."<li>Campo texto grande: Use apenas letras maiúsculas, números e espaços</li>";
        }

        if(strlen($this->param['texto_grande'])>255) {
            $msgValidacao = $msgValidacao."<li>O texto grande pode ter no máximo 255 caracteres</li>";
        }

        $this->msgValidacao = $msgValidacao;

        if(!empty($msgValidacao)) {
            return true;
        } else {
            return false;
        }
    }



}