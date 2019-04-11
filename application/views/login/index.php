<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
       
               <?php
               echo validation_errors('<div class="alert alert-danger">','</div>'); 
               echo form_open('login/index/');
               ?>
               <div class="card card-login card-hidden">
                <div class="card-header text-center">
                          <center>
              <img src="<?=base_url()?>assets/site/Logo-Mantos_header.png" style = "width: 40%">
          
        </center>
                    <h4 class="card-title"><?=$titulo; ?></h4>
                    

                </div>
                <div class="card-content">


                                     <!--    <div class="social-line">
                                        	<h5>Redes Sociais</h5>
                                            <a href="login.html#btn" class="btn btn-just-icon btn-default">
                                                <i class="fa fa-facebook-square"></i>
                                            </a>
                                            <a href="login.html#pablo" class="btn btn-just-icon btn-default">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a href="login.html#eugen" class="btn btn-just-icon btn-default">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </div> -->
									<!-- 	<span class="or-rule">ou</span> 
										<h5 class="text-center">Sua conta</h5>    -->                              
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">email</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Email</label>
                                                <input type="text" class="form-control" name="email">
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">lock_outline</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Senha</label>
                                                <input type="password" class="form-control" name="senha">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">

                                        <button type="submit" class="btn btn-primary btn-wd btn-lg">Login</button>
                                     <!--    <p>Novo Usuário?&nbsp;&nbsp;
                                        	<a href="signup.html">
                                               <i class="material-icons">person_add</i>Cadastrar
                                           </a>
                                       </p> -->

                                   </div>

                               </div>
                           </form>
                       </div>
                   </div>
               </div>
           </div>