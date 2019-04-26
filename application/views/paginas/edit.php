<div class="col-md-12">
    <div class="card">
        <div class="card-content">
            <h4 class="card-title">Página : <?=$pagina->nome; ?></h4>
            <?php
            echo validation_errors('<div class="alert alert-danger">','</div>'); 
            echo form_open_multipart('Paginas/savePagina/'.md5($pagina->id));
            ?>
            <input type="hidden" class="form-control" id="id" name="id" value="<?=md5($pagina->id)?>">

            <div class="form-group label-floating col-md-6">
                <label class="control-label">Nome</label>
                <input type="text" class="form-control" name="nome" value="<?=$pagina->nome;?>">
            </div>
            <div class="form-group label-floating col-md-6">
                <label class="control-label">Título</label>
                <input type="text" class="form-control" name="titulo" value="<?=$pagina->titulo;?>">
            </div>
            <div class="form-group label-floating col-md-6">
                <label class="control-label">Subtítulo</label>
                <input type="text" class="form-control" name="subtitulo" value="<?=$pagina->subtitulo;?>">
            </div>
            <div class="form-group label-floating col-md-6">
                <label class="control-label">Telefone</label>
                <input type="text" class="form-control" name="telefone" value="<?=$pagina->telefone;?>">
            </div>
            <div class="form-group label-floating col-md-6">
                <label class="control-label">Endereço</label>
                <input type="text" class="form-control" name="endereco" value="<?=$pagina->endereco;?>">
            </div>
            <div class="form-group label-floating col-md-6">
                <label class="control-label">Cidade</label>
                <input type="text" class="form-control" name="cidade" value="<?=$pagina->cidade;?>">
            </div>
            <div class="form-group label-floating col-md-6">
                <label class="control-label">facebook</label>
                <input type="text" class="form-control" name="facebook" value="<?=$pagina->facebook;?>">
            </div>
            <div class="form-group label-floating col-md-6">
                <label class="control-label">Instagram</label>
                <input type="text" class="form-control" name="instagram" value="<?=$pagina->instagram;?>">
            </div>
            <div class="form-group label-floating col-md-6">
                <label class="control-label">Email address</label>
                <input type="email" class="form-control" name="email" value="<?=$pagina->email;?>">
            </div>
               <div class="form-group label-floating col-md-6">
                <label class="control-label">Link </label>
                <input type="text" class="form-control" name="texto1" value="<?=$pagina->texto1;?>">
            </div>
               <div class="form-group label-floating col-md-6">
                <label class="control-label">Texto  2</label>
                <input type="text" class="form-control" name="texto2" value="<?=$pagina->texto2;?>">
            </div>
               <div class="form-group label-floating col-md-6">
                <label class="control-label">Texto  3</label>
                <input type="text" class="form-control" name="texto3" value="<?=$pagina->texto3;?>">
            </div>
                 <div class="form-group label-floating col-md-6">
                <label class="control-label">Texto  4</label>
                <input type="text" class="form-control" name="texto4" value="<?=$pagina->texto4;?>">
            </div>
            <div class="form-group label-floating col-md-6">
                <label class="control-label">Imagem</label>

                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                    <div class="fileinput-new thumbnail" style="width: 40%;">
                      <?php  if($pagina->imagem == ''){ ?>
                        <img src="<?=base_url()?>/assets/admin/img/image_placeholder.jpg" alt="$pagina->nome">

                    <?php } else{ ?>

                        <img src="<?=base_url().$pagina->imagem?>" >       

                    <?php }  ?>
                </div>

                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                <div>
                    <span class="btn btn-round btn-file">
                        <span class="fileinput-new">Escolha a imagem</span>

                        <span class="fileinput-exists">Trocar</span>

                        <input type="file" name="imagem" />
                    </span>
                    <a href="<?=base_url()?>Paginas/removeImagem/<?=md5($pagina->id)?>"><span class="fileinput-new"><i class="material-icons">delete_forever</i>Imagem</span></a>
                    <a href="advanced-elements.html#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remover</a>
                </div>

            </div>
        </div>

        <div class="form-group label-floating col-md-12">
         <label class="control-label">Texto 5</label>
         <textarea type="text" class="form-control" rows="5"  name="texto"> 
          <?=$pagina->texto?>
      </textarea>
  </div>
  <div class="form-group label-floating col-md-12">
    <button class="btn btn-primary pull-right" type="submmit">Atualizar</button>

    <a href="<?=base_url()?>Paginas" class="btn pull-right">
        <span class="btn-label ">
            <i class="material-icons">keyboard_arrow_left</i>
        </span>
        Retornar
    </a>
</div>

</form>
</div>
</div>
</div>

