
<?php 
if (isset($_SESSION['feedback'])) {
    echo $_SESSION['feedback'];
    unset($_SESSION['feedback']);
}
?>         <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-content">
                <h4 class="card-title">Lista de Páginas</h4>
                <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                </div>
                <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                        <thead>
                            <tr>
                                <th>Página</th>
                                <th>Imagem</th>
                                <th class="disabled-sorting text-right">Ação</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Página</th>
                                <th>Imagem</th>
                                <th class="text-right">Ação</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php foreach ($paginas as $pagina): ?>
                                <tr>
                                    <td><?=$pagina->nome?></td>
                                    <td>
                                      <?php  if($pagina->imagem == ''){ ?>
                                        <img src="<?=base_url()?>/assets/admin/img/sem_foto.png" alt="$pagina->nome" style="width:12em;height: auto;">

                                    <?php } else{ ?>

                                        <img src="<?=base_url().$pagina->imagem?>" style="width:12em;height: auto;">       

                                    <?php }  ?>

                                </td>
                                
                                <td class="text-right">
                                    <a href="<?=base_url()?>Paginas/edit/<?=md5($pagina->id)?>/<?=limpar($pagina->nome)?>" class="btn btn-simple btn-warning btn-icon "> <i class="material-icons">border_color</i></a>
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