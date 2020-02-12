<?php $this->layout('template', ['title' => 'Formulário de Teste']) ?>


<header>
    <div class="container txt-vertical-center">
        <h1>Formulário de Teste</h1>
    </div>
</header>

<section>   
    <form action="<?= URL_BASE ?>" method="post" onsubmit="return validaForm(this)">
        <div class="container">

            <div class="row"> 
                <div class="col col-lg-4">
                    <label for="data">Data:</label>  
                </div>  
                <div class="col col-lg-8">  
                    <input type="text" name="data" id="data" value="<?=$this->e($data)?>" placeholder="mm-dd-AAAA"> 
                </div>  
            </div>
            <div class="row"> 
                <div class="col col-lg-4">
                    <label for="texto">Texto:</label>
                </div>
                <div class="col col-lg-8">
                    <input type="text" name="texto" value="<?=$this->e($texto)?>">
                </div>
            </div>
            <div class="row"> 
                <div class="col col-lg-4">
                    <label for="texto">Checkbox:</label>
                </div>
                <div class="col col-lg-8">
                    <input type="checkbox" name="check">
                </div>
            </div>
            <div class="row"> 
            <div class="col col-lg-4">
                <label for="texto_grande">Texto grande:</label>
            </div>
            <div class="col col-lg-8">
                <textarea name="texto_grande"><?=$this->e($texto_grande)?></textarea>
            </div>
        </div>
            <div class="row"> 
                <div class="col col-lg-4">
                </div>
                <div class="col col-lg-8">
                    <button type="submit">Enviar</button>
                </div>
            </div>
            
            
        </div>    
    </form>    
</section>   

<script src="<?=URL_BASE?>/vendor/components/jquery/jquery.min.js"></script>
<script src="<?=URL_BASE?>/vendor/igorescobar/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
<script src="<?=URL_BASE?>/views/js/valida.js"></script>
<script src="<?=URL_BASE?>/views/js/masks.js"></script>

