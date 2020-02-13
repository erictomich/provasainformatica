<?php $this->layout('template', ['title' => 'Formulário de Teste']) ?>


<header>
    <div class="container txt-vertical-center">
        <h1>Formulário de Teste</h1>
    </div>
</header>

<section>   
    <form action="<?= URL_BASE ?>" method="post" <?php if($this->e($validaForm)) { echo 'onsubmit="return validaForm(this)"'; } ?> >
        <div class="container">

            <div class="row"> 
                <div class="col col-lg-3">
                    <label for="data">Data:</label>  
                </div>  
                <div class="col col-lg-9">  
                    <input type="text" name="data" id="data" value="<?=$this->e($data)?>" placeholder="mm-dd-AAAA"> 
                </div>  
            </div>
            <div class="row"> 
                <div class="col col-lg-3">
                    <label for="texto">Texto:</label>
                </div>
                <div class="col col-lg-9">
                    <input type="text" name="texto" value="<?=$this->e($texto)?>">
                </div>
            </div>
            <div class="row"> 
                <div class="col col-lg-3">
                    <label for="check">Checkbox:</label>
                </div>
                <div class="col col-lg-9">
                    <input type="checkbox" name="check" <?=($this->e($check)?'checked':'')?>>
                </div>
            </div>
            <div class="row"> 
            <div class="col col-lg-3">
                <label for="texto_grande">Texto grande:</label>
            </div>
            <div class="col col-lg-9">
                <textarea name="texto_grande"><?=$this->e($texto_grande)?></textarea>
            </div>
        </div>
            <div class="row"> 
                <div class="col col-lg-3">
                </div>
                <div class="col col-lg-9">
                    <button type="submit">Enviar</button>
                </div>
            </div>
            <div class="row">
            <?php if($this->e($msgValidacao)): ?>
                <ul>
                <?=html_entity_decode($this->e($msgValidacao))?>
                </ul>
            <?php endif; ?>    
            </div>
            
            
        </div>    
        <div class="container txt-out">
        Teste de formulário
        </div>
    </form>    
</section>   

<script src="<?=URL_BASE?>/vendor/components/jquery/jquery.min.js"></script>
<script src="<?=URL_BASE?>/vendor/igorescobar/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
<script src="<?=URL_BASE?>/views/js/masks.js"></script>

<?php if($this->e($validaForm)): ?>

<script src="<?=URL_BASE?>/views/js/valida.js"></script>

<?php endif; ?>

