         <div class="row">
            <div class="col-md-12">
                <center>
                    <?php 
                    if (isset($_SESSION['feedback'])) {
                        echo $_SESSION['feedback'];
                        unset($_SESSION['feedback']);
                    }
                    ?>
                </center>
                <div class="card">
                    <div class="card-content">
                        <h4 class="card-title">Lista de Usuários</h4>
                        <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                        </div>
                        <div class="material-datatables">
                            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <!-- <th>Foto</th> -->
                                        <th>Imagem</th>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th class="disabled-sorting text-right">Ação</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <!-- <th>Foto</th> -->
                                        <th>Imagem</th>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th class="text-right">Ação</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php foreach ($usuarios as $usuario): ?>
                                        <tr>
                                            <!-- <td><?=$usuario->foto?></td> -->
                                       
                                                <td>
                                                  <?php  if($usuario->imagem == ''){ ?>
                                                    <img src="<?=base_url()?>/assets/admin/img/sem_foto.png" alt="$usuario->nome" style="width:6em;height: auto;">

                                                <?php } else{ ?>

                                                    <img src="<?=base_url().$usuario->imagem?>" style="width:6em;height: auto;">       

                                                <?php }  ?>
                                            </td>
                                                 <td><?=$usuario->nome?></td>
                                            <td><?=$usuario->email?></td>
                                            <td class="text-right">
                                                <a href="<?=base_url()?>Usuarios/getOne/<?=md5($usuario->id)?>/<?=limpar($usuario->nome) ?>" class="btn btn-simple btn-success btn-icon">
                                                   <i class="material-icons">visibility</i>
                                               </a>
                                                <a href="<?=base_url()?>Usuarios/edit/<?=md5($usuario->id)?>/<?=limpar($usuario->nome) ?>" class="btn btn-simple btn-warning btn-icon">
                                                   <i class="material-icons">border_color</i>
                                               </a>
                                               <a href="<?=base_url()?>Usuarios/remove/<?=md5($usuario->id)?>/<?=limpar($usuario->nome) ?>" class="btn btn-simple btn-danger btn-icon"><i class="material-icons">close</i></a>
                                           </td>
                                       </tr>
                                   <?php endforeach ?>
                               </tbody>
                           </table>
                       </div>
                   </div>
                   <!-- end content-->
               </div>
               <!--  end card  -->
           </div>
           <!-- end col-md-12 -->
       </div>