<!doctype html>
<html lang="pt-br">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?=$header->texto2;?>">
  <meta name="keywords" content="<?=$header->texto3;?>">
  <meta name="author" content="Gemini Web Floripa">
<!-- twitter -->
  <meta name="twitter:title" content="<?=$header->titulo;?>| Desconto em camisas de futebol">
  <meta name="twitter:description" content="<?=$header->texto2;?>">
  <meta name="twitter:image" content="<?=$superbanner->imagem;?>">
  <meta name="twitter:card" content="summary_large_image">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
  rel="stylesheet">

  <link rel="icon" href="assets/site/Logo-Mantos_header.png"  type="image/png">

  <!-- <title><?=$titulo?></title> -->
  <title><?=$header->titulo;?>| Desconto em camisas de futebol</title>

  <style type="text/css">
   .tra{
    width: 20%; /*can be in percentage also.*/
    height: auto;
    margin: 0 auto;
    padding: 10px;
    position: relative;
  }

  .imagemCenter{
    display: block;
    margin-left: auto;
    margin-right: auto;
  }

  .bannerFooter{
    width:75%;
  }

  .cormenu{
    background-color: #122740!important;
    color: #fff!important;
  }

  .logotopo{
    width:20%;
  }

  @media only screen and (max-width: 768px) {

    .tra{
      width: 100%; /*can be in percentage also.*/
      height: auto;
      margin: 0 auto;
      padding: 10px;
      position: relative;
    }

    .logotopo{
      width:40%;
    }
  }

  @media screen and (max-width: 321px) {
    .botao {
      font-size: 0.8em;
    }

    .bannerFooter{
      width:100%;
    }

    
  }


</style>


</head>
<body >



  <?php 
  $this->load->view($view);
  ?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


