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
                        <h4 class="card-title">Lista de Emails</h4>
                        <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                        </div>
                        <div class="material-datatables">
                            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <!-- <th>Foto</th> -->
                                        <th>Email</th>
                                        <th>Horário</th>
                                        <th>Ação</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <!-- <th>Foto</th> -->
                                        <th>Email</th>
                                        <th>Horário</th>
                                        <th>Ação</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php foreach ($emails as $email): ?>
                                        <tr>
                                          
                                            <td><?=$email->email?></td>
                                            <td>
                                                <?php 
                                                   $t = $email->tempo;
                                                   $dateTime = new DateTime($t);
                                                   echo $dateTime->format('H:i:s - d/m/Y');
                                               ?>
                                                
                                              </td>
                                          <td class="">
                                               <a href="<?=base_url()?>Subscribes/remove/<?=md5($email->id)?>" class="btn btn-simple btn-danger btn-icon"><i class="material-icons">close</i>Remover</a>

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