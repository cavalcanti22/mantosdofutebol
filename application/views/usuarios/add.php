  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <!--      Wizard container        -->
        <div class="wizard-container">
            <div class="card wizard-card" data-color="rose" id="wizardProfile">
                <?php
                echo validation_errors('<div class="alert alert-danger">','</div>'); 
                echo form_open_multipart('usuarios/add');
                ?>
                <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
                <div class="wizard-header">
                    <h3 class="wizard-title">
                        Cadastrar novo usuários
                    </h3>
                    <h5>Preencha com seus dados pessoais.</h5>
                </div>
                <div class="wizard-navigation">
                    <ul>
                        <li>
                            <a href="form-wizard.html#about" data-toggle="tab">Sobre</a>
                        </li>
                           <!--  <li>
                                <a href="form-wizard.html#account" data-toggle="tab">Profissão</a>
                            </li> -->
                            <li>
                                <a href="form-wizard.html#address" data-toggle="tab">Senha</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane" id="about">
                            <div class="row">
                                <h4 class="info-text">Informações Básicas</h4>
                                <div class="col-sm-4 col-sm-offset-1">
                                   <center> <legend>Foto Perfil</legend></center>
                                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">
                                                    <img src="<?=base_url()?>/assets/admin/img/placeholder.jpg" alt="...">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail "></div>
                                                <div>
                                                    <span class="btn btn-round btn-file">
                                                        <span class="fileinput-new">Add Imagem</span>
                                                    <span class="fileinput-exists">Trocar</span>
                                                    <input type="file" name="imagem" />
                                                    </span>
                                                    <br />
                                                    <a href="advanced-elements.html#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remover</a>
                                                </div>
                                            </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">face</i>
                                        </span>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Seu Nome
                                               <small>(Obrigatório)</small>
                                           </label>
                                           <input name="nome" type="text" class="form-control" value="<?= set_value('nome') ?>">
                                       </div>
                                   </div>
                                   <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">email</i>
                                    </span>
                                    <div class="form-group label-floating">
                                        <label class="control-label">Email
                                           <small>(Obrigatório)</small>
                                       </label>
                                       <input name="email" type="email" class="form-control" value="<?= set_value('email') ?>">
                                   </div>
                               </div>
                           </div>
                                               <!--      <div class="col-lg-10 col-lg-offset-1">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
																<i class="material-icons">email</i>
															</span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Email
																	<small>(required)</small>
																</label>
                                                                <input name="email" type="email" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                  <!--           <div class="tab-pane" id="account">
                                                <h4 class="info-text"> O que você faz? </h4>
                                                <div class="row">
                                                    <div class="col-lg-10 col-lg-offset-1">
                                                        <div class="col-sm-4">
                                                            <div class="choice" data-toggle="wizard-checkbox">
                                                                <input type="checkbox" name="profissao" value="Design">
                                                                <div class="icon">
                                                                    <i class="fa fa-pencil"></i>
                                                                </div>
                                                                <h6>Design</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="choice" data-toggle="wizard-checkbox">
                                                                <input type="checkbox" name="profissao" value="Code">
                                                                <div class="icon">
                                                                    <i class="fa fa-terminal"></i>
                                                                </div>
                                                                <h6>Code</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="choice" data-toggle="wizard-checkbox">
                                                                <input type="checkbox" name="profissao" value="Develop">
                                                                <div class="icon">
                                                                    <i class="fa fa-laptop"></i>
                                                                </div>
                                                                <h6>Develop</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class="tab-pane" id="address">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h4 class="info-text"> Escolha sua senha secreta </h4>
                                                    </div>
                                                    <div class="form-group label-floating col-sm-12">
                                                        <label class="control-label">
                                                            Senha
                                                            <small>*</small>
                                                        </label>
                                                        <input class="form-control" name="senha" id="registerPassword" type="password" required="true" />
                                                    </div>
                                                    <div class="form-group label-floating col-sm-12">
                                                        <label class="control-label">
                                                            Confirmar Senha
                                                            <small>*</small>
                                                        </label>
                                                        <input class="form-control" name="csenha" id="registerPasswordConfirmation" type="password" required="true"  />
                                                        <!-- equalTo="#registerPassword" -->
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wizard-footer">
                                            <div class="pull-right">
                                                <input type='button' class='btn btn-next btn-fill btn-default btn-wd' name='next' value='Próximo' />
                                                <button type='submmit' class='btn btn-finish btn-fill btn-primary btn-wd' name='finish' value='Cadastrar' />Cadastrar</div>
                                                
                                            </div>
                                            <div class="pull-left">
                                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Anterior' />
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- wizard container -->
                        </div>
                    </div>