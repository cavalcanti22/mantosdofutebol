 <div class="container">
 <div class="row">
   <div class="col col-md-12" style="margin-top: 2em;">
    <a href="<?=$bannertopo->texto1;?>" target="_blank"><img src="<?=$bannertopo->imagem;?>" class="imagemCenter" style="width:100%;"></a>
  </div>
 </div>
  <div class="row">
   <div class="col col-md-12">
    <img src="<?=$header->imagem; ?>" class="imagemCenter logotopo" style="width:20%;">
  </div>
 </div>
 </div>
 <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow cormenu" >
  <h5 class="my-0 mr-md-auto font-weight-normal">Mantos do Futebol</h5>
  <nav class="my-2 my-md-0 mr-md-3" >
    <a class="p-2 text-dark" href="#" style="color:#fff!important;">Quem Somos</a>
    <a class="p-2 text-dark" href="#" style="color:#fff!important;">Contato</a>
  </nav>
  <!-- <a class="btn btn-outline-primary" href="#">Mantos do Futebol</a> -->
</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4"><?=$header->titulo;?></h1>
  <p class="lead"><?=$header->subtitulo;?></p>
</div>
 

<div class="container">

  <div class="row">

    <div class="col-md-12">
      <?php 
      if (isset($_SESSION['subscribe'])) {
        echo $_SESSION['subscribe'];
        unset($_SESSION['subscribe']);
      }
      ?>
    </div>

    <?php foreach ($cupons as $cupom): ?>
     <!-- Modal -->
     <div class="modal fade" id="<?=$cupom->code;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><?=$cupom->text1;?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           <div class="form-group col col-md-12">
            <h3 id="<?=$cupom->id;?>" class=" text-center"><b><?=$cupom->code;?></b> </h3>

            <a href="<?=$cupom->link;?>"  style="text-decoration: none;" target="_blank"><button onclick="copy('<?=$cupom->id;?>')" class="btn btn-danger btn-lg btn-block botao">Copie o código & Ir para a loja</button> </a>
            <!-- Abre pop up -->
         <!--   <a href="<?=$cupom->link;?>" onclick="javascript:openWindow(this.href);return false;" style="text-decoration: none;" target="_blank"><button onclick="copy('<?=$cupom->id;?>')" class="btn btn-danger btn-lg btn-block botao">Copie o código & Ir para a loja</button> </a> -->

          </div>

          <div id="target" contentEditable="true"></div>
          <script type="text/javascript">
            function copy(element_id){
              var aux = document.createElement("div");
              aux.setAttribute("contentEditable", true);
              aux.innerHTML = document.getElementById(element_id).innerHTML;
              aux.setAttribute("onfocus", "document.execCommand('selectAll',false,null)"); 
              document.body.appendChild(aux);
              aux.focus();
              document.execCommand("copy");
              document.body.removeChild(aux);
            }
          </script>

          <p class="text-center ">
            <a   data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
              Detalhes
            </a>

          </p>
          <div class="collapse" id="collapseExample">
            <div class="card card-body">
              <p class="text-muted">
               <?=$cupom->text2;?>
             </p>
           </div>
         </div>

         <?php echo form_open('Sites/subscribe');?>

         <div class="form-group col col-md-12">
          <label for="exampleInputEmail1"><?=$cupom->text4;?> <b>Inscreva-se abaixo!</b></label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email">
          <!--    <small id="emailHelp" class="form-text text-muted">Nunca perca um desconto da FutFanatics outra vez! Inscreva-se abaixo!</small> -->
        </div>
        <button type="submit" name="submit" class="btn btn-primary float-right"><i class="material-icons md-18">email</i></button>
      </form>
    </div>
    <!--     <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">fechar</button>
          </div> -->
        </div>
      </div>
    </div>
    <!-------------------------------------------- fim do modal -------------------------------->
  </div>
</div>

<div class="container">
  <div class="card-deck mb-3 text-center">
   <div class="card mb-4 box-shadow">
    <div class="card-header" style="background-color: #0F283E;color:#fff;">
      <h4 class="my-0 font-weight-normal"><?=$cupom->title;?></h4>
    </div>
    <div class="card-body">
      <h1 class="card-title pricing-card-title"><?=$cupom->value;?><small class="text-muted">OFF</small></h1>
      <p>
       <?=$cupom->text3;?>
     </p>
     <div class="wrapper tra">
    <button type="button" class="btn btn-lg btn-block btn-outline-primary" data-toggle="modal" data-target="#<?=$cupom->code;?>" >
        <?=$cupom->button;?>
      </button>
    </div>   
  </div>
</div>
</div>
<?php endforeach ?>

<div class="col-md-12" style="margin-bottom: 5em;"> 
  <a href="<?=$superbanner->texto1;?>" target="_blank"><img src="<?=$superbanner->imagem;?>" class="imagemCenter bannerFooter"></a>
</div>
<!---------------------------------------------- footer --------------------------------->
<footer class="pt-4 my-md-5 pt-md-5 border-top" style="box-shadow: 9px -5px 0px 5px #122740;">
  <div class="row">
    <div class="col-12 col-md">
      <img class="mb-2" src="<?=$footer->imagem ?>" alt="" width="100" height="100">
      <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
    </div>
    <div class="col-6 col-md">
      <h5>Destaques</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">Brasileiros</a></li>
        <li><a class="text-muted" href="#">Internacionais</a></li>
        <li><a class="text-muted" href="#">Seleções</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Informações</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">Jogos na tv</a></li>
        <li><a class="text-muted" href="#">Camisas de futebol</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Sobre</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">Quem Somos</a></li>
        <li><a class="text-muted" href="#">Contato</a></li>
      </ul>
    </div>
  </div>
</footer>
</div>