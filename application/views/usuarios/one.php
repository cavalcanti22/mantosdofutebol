  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <!--      Wizard container        -->
        <div class="wizard-container">
            <div class="card wizard-card" data-color="rose" id="wizardProfile">
              
                <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
                <div class="wizard-header">
                    <h3 class="wizard-title">
                        Perfil | <?=$this->session->userlogado->nome; ?>
                    </h3>
                    <h5>Dados pessoais.</h5>
                </div>
                <div class="wizard-navigation" >
                    <ul>
                        <li>
                            <a href="form-wizard.html#about" data-toggle="tab">Sobre</a>
                        </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane" id="about">
                            <div class="row">
                                <h4 class="info-text">Informações Básicas</h4>
                                <div class="col-sm-4 col-sm-offset-1">
                                    <legend>Foto Perfil</legend>
                                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">
                                                            <?php  if($usuario->imagem == ''){ ?>
                                         <img src="<?=base_url()?>/assets/admin/img/image_placeholder.jpg" alt="...">

                                     <?php } else{ ?>

                                        <img src="<?=base_url().$usuario->imagem?>" >       

                                    <?php }  ?>

                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail "></div>
                                            </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">face</i>
                                        </span>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Seu Nome
                                           </label>
                                           <?=$usuario->nome ?>
                                       </div>
                                   </div>
                                   <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">email</i>
                                    </span>
                                    <div class="form-group label-floating">
                                        <label class="control-label">Email
                                       </label>
                                      <?=$usuario->email ?>
                                   </div>

                               </div>
                               
                           </div>

   </div>

                                        </div>
  <a href="<?=base_url()?>Usuarios"><button type='button' class='btn btn-finish btn-fill btn-default pull-right' name='previous' value='Anterior' />Retornar</button></a>
                                            
                                            <div class="clearfix"></div>
                                   
                                     
                                </div>
                            </div>
                            <!-- wizard container -->
                        </div>
                    </div>