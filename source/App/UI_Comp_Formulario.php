<?php

namespace Source\App;

use League\Plates\Engine;

class UI_Comp_Formulario {

    private $param; 
    private $templates;

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
        
       // $this->param = $param;
       // $this->validate();

        echo $this->templates->render('form', $vars);

       } else {
            
            echo $this->templates->render('form', $vars);
            
       }
    

      
    }

    public function validate() {
        
        if($this->param['data']=="12/12/1212") {
            echo "teste teste teste";
        }

        if($this->param['texto']=="eric") {
            echo "eric";
        }

        if($this->param['texto_grande']=="eric") {
            echo "eric";
        }

    }

}