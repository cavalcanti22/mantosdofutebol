       
       <div class="row">
        <div class="col-md-12">
            <div class="card">
                <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
                <?php $atributos = 'class = form-horizontal'; ?>
                <?php 
                echo form_open('Cupons/saveCupom/'.md5($cupom->id),$atributos);
                 ?>
                <div class="card-header card-header-text">
                    <h4 class="card-title">Editar Cupom</h4>
                </div>

                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Título</label>
                        <div class="col-sm-4">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label"></label>
                                <input type="text" class="form-control" value="<?=$cupom->title;?>" name="title">
                                <span class="help-block">Título</span>
                            </div>
                        </div>
                        <label class="col-sm-2 label-on-left">Valor do Desconto</label>
                        <div class="col-sm-4">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label"></label>
                                <input type="text" class="form-control" value="<?=$cupom->value;?>" name="value">
                                <span class="help-block">Valor do Desconto</span>
                            </div>
                        </div>
                        <label class="col-sm-2 label-on-left">Código Cupom</label>
                        <div class="col-sm-4">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label"></label>
                                <input type="text" class="form-control" value="<?=$cupom->code;?>" name="code">
                                <span class="help-block">Código Cupom</span>
                            </div>
                        </div>
                        <label class="col-sm-2 label-on-left">Texto Botão</label>
                        <div class="col-sm-4">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label"></label>
                                <input type="text" class="form-control" value="<?=$cupom->button;?>" name="button">
                                <span class="help-block">Texto Botão</span>
                            </div>
                        </div>
                          <label class="col-sm-2 label-on-left">Link</label>
                        <div class="col-sm-4">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label"></label>
                                <input type="text" class="form-control" value="<?=$cupom->link;?>" name="link">
                                <span class="help-block">Link</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Texto 1</label>
                        <div class="col-sm-4">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label"></label>
                                <textarea type="text" class="form-control" rows="5"  name="text1"> 
                                    <?=$cupom->text1;?>
                                </textarea>
                                <span class="help-block">Texto 1</span>
                            </div>
                        </div>
                        <label class="col-sm-2 label-on-left">Texto 2</label>
                        <div class="col-sm-4">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label"></label>
                                <textarea type="text" class="form-control" rows="5"  name="text2"> 
                                    <?=$cupom->text2;?>
                                </textarea>
                                <span class="help-block">Texto 2</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Texto 3</label>
                        <div class="col-sm-4">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label"></label>
                                <textarea type="text" class="form-control" rows="5"  name="text3"> 
                                    <?=$cupom->text3;?>
                                </textarea>
                                <span class="help-block">Texto 3</span>
                            </div>
                        </div>
                        <label class="col-sm-2 label-on-left">Texto 4</label>
                        <div class="col-sm-4">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label"></label>
                                <textarea type="text" class="form-control" rows="5"  name="text4"> 
                                    <?=$cupom->text4;?>
                                </textarea>
                                <span class="help-block">Texto 4</span>
                            </div>
                        </div>
                        <button  type="submit" class="btn btn-primary pull-right" name="submit"> 
                          Atualizar
                      </button>
                  </div>
              </form>
          </div>
      </div>
  </div>
    