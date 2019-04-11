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
                                        <th>Título</th>
                                        <th>Desconto</th>
                                        <th>Código</th>
                                        <th>Data</th>
                                        <th class="disabled-sorting text-right">Ação</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <!-- <th>Foto</th> -->
                                        <th>Título</th>
                                        <th>Desconto</th>
                                        <th>Código</th>
                                        <th>Data</th>
                                        <th class="text-right">Ação</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php foreach ($cupons as $cupom): ?>
                                        <tr>
                                            <!-- <td><?=$cupom->foto?></td> -->
                                       
                                            <td><?=$cupom->title?></td>
                                            <td><?=$cupom->value?></td>
                                            <td><?=$cupom->code?></td>
                                             <td>
                                              <?php 
                                                   $t = $cupom->tempo;
                                                   $dateTime = new DateTime($t);
                                                   echo $dateTime->format('H:i:s - d/m/Y');
                                               ?>
                                           </td>
                                            <td class="text-right">
                                                <a href="<?=base_url()?>Cupons/getOne/<?=md5($cupom->id)?>/<?=limpar($cupom->title) ?>" class="btn btn-simple btn-success btn-icon">
                                                   <i class="material-icons">visibility</i>
                                               </a>
                                                <a href="<?=base_url()?>Cupons/edit/<?=md5($cupom->id)?>/<?=limpar($cupom->title) ?>" class="btn btn-simple btn-warning btn-icon">
                                                   <i class="material-icons">border_color</i>
                                               </a>
                                               <a href="<?=base_url()?>Cupons/remove/<?=md5($cupom->id)?>/<?=limpar($cupom->title) ?>" class="btn btn-simple btn-danger btn-icon"><i class="material-icons">close</i></a>
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