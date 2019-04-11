              <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-content">
                            <div class="row">
                                <label class="col-sm-2 label-on-left"><b>Título:</b></label>
                                <div class="col-sm-4">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <p class="form-control-static"><?=$cupom->title;?></p>
                                        <span class="help-block">Título</span>
                                    </div>
                                </div>
                                <label class="col-sm-2 label-on-left"><b>Valor do Desconto:</b></label>
                                <div class="col-sm-4">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <p class="form-control-static"><?=$cupom->value;?></p>
                                        <span class="help-block">Valor do Desconto</span>
                                    </div>
                                </div>
                                <label class="col-sm-2 label-on-left"><b>Código Cupom:</b></label>
                                <div class="col-sm-4">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <p class="form-control-static"><?=$cupom->code;?></p>
                                        <span class="help-block">Código Cupom</span>
                                    </div>
                                </div>
                                <label class="col-sm-2 label-on-left"><b>Texto Botão:</b></label>
                                <div class="col-sm-4">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <p class="form-control-static"><?=$cupom->button;?></p>
                                        <span class="help-block">Texto Botão</span>
                                    </div>
                                </div>
                                    <label class="col-sm-2 label-on-left"><b>Link:</b></label>
                                <div class="col-sm-4">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <p class="form-control-static"><?=$cupom->link;?></p>
                                        <span class="help-block">Link do site</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-left"><b>Texto 1:</b></label>
                                <div class="col-sm-4">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <p class="form-control-static"><?=$cupom->text1;?></p>
                                        <span class="help-block">Texto 1</span>
                                    </div>
                                </div>
                                <label class="col-sm-2 label-on-left"><b>Texto 2:</b></label>
                                <div class="col-sm-4">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <p class="form-control-static"><?=$cupom->text2;?></p>

                                        <span class="help-block">Texto 2</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 label-on-left"><b>Texto 3:</b></label>
                                <div class="col-sm-4">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <p class="form-control-static"><?=$cupom->text3;?></p>

                                        <span class="help-block">Texto 3</span>
                                    </div>
                                </div>
                                <label class="col-sm-2 label-on-left"><b>Texto 4:</b></label>
                                <div class="col-sm-4">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <p class="form-control-static"><?=$cupom->text4;?></p>

                                        <span class="help-block">Texto 4</span>
                                    </div>
                                </div>
                              
                          </div>
                             <div class="row">
                             
                                <label class="col-sm-2 label-on-left"><b>Horário da postagem:</b></label>
                                <div class="col-sm-4">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <p class="form-control-static">
                                            <?                   
                                            $t = $cupom->tempo;
                                            $dateTime = new DateTime($t);
                                            echo $dateTime->format('H:i:s - d/m/Y');?>
                                            
                                        </p>
                                        
                                        <span class="help-block">Horário</span>
                                    </div>
                                </div>
                                  <a href="<?=base_url()?>Cupons" class="btn btn-primary pull-right">
                                  Retornar
                              </a>
                            </div>

                      </form>
                  </div>
              </div>
          </div>


