<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="http://www.urbanui.com/turbo/assets/admin/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?=base_url()?>assets/admin/img/panel.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?=$titulo; ?></title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?=base_url()?>assets/admin/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="<?=base_url()?>assets/admin/css/turbo.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?=base_url()?>assets/admin/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700%7CMaterial+Icons" />
    <!--     <link href="<?=base_url()?>assets/admin/vendors/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">

</head>


<body class="boxed-layout">
    <div class="wrapper">
        <div class="sidebar">
            <div class="logo">
                <a  class="simple-text" href="<?=base_url()?>Cupons">
                    PAINEL DE CONTROLE <br>
                    <!-- <img src="<?php echo $this->session->userlogado->imagem; ?>" alt="..." > <br> -->
                    <!-- <small><?php echo $this->session->userlogado->nome; ?></small> -->

                </a>
            </div>
            <div class="logo logo-mini">
                <a href="#" class="simple-text">
                    PC
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="<?=base_url()?>" target="_blank">
                            <i class="material-icons">language</i>
                            <p>Ir para o site</p>
                        </a>
                    </li>
                       <li>
                        <a href="<?=base_url()?>emails">
                            <i class="material-icons">email</i>
                            <p>Emails</p>
                        </a>
                    </li>
                            <li>
                        <a data-toggle="collapse" href="#cupons" class="collapsed" aria-expanded="false">
                            <i class="material-icons">receipt</i>
                            <p>Cupons
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="cupons" aria-expanded="false" style="height: 0px;">
                            <ul class="nav">
                                <li>
                                    <a  href="<?=base_url()?>Cupons" >
                                        <p>Listar Cupons
                                        </p>
                                    </a>
                                </li> 
                                <li>
                                    <a  href="<?=base_url()?>Cupons/add" >
                                        <p>Add Cupom
                                        </p>
                                    </a>
                                </li> 
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a  href="<?=base_url()?>Paginas" >
                            <i class="material-icons">content_copy</i>
                            <p>Páginas
                            </p>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#usuarios" class="collapsed" aria-expanded="false">
                            <i class="material-icons">person</i>
                            <p>Usuários
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="usuarios" aria-expanded="false" style="height: 0px;">
                            <ul class="nav">
                                <li>
                                    <a  href="<?=base_url()?>Usuarios" >
                                        <p>Listar Usuários
                                        </p>
                                    </a>
                                </li> 
                                <li>
                                    <a  href="<?=base_url()?>Usuarios/add" >
                                        <p>Add Usuário
                                        </p>
                                    </a>
                                </li> 
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="<?=base_url()?>Login/logout">
                            <i class="material-icons">lock_open</i>
                            <p>Logout</p>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-default navbar-absolute" data-topbar-color="blue">
                <div class="container-fluid">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                            <i class="material-icons visible-on-sidebar-regular f-26">keyboard_arrow_left</i>
                            <i class="material-icons visible-on-sidebar-mini f-26">keyboard_arrow_right</i>
                        </button>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> <?=$titulo;?> </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                           <!--  <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i> -->
                                    <!-- <span class="notification"><?php print_r($totaltarefas); ?></span> -->
                           <!--          <p class="hidden-lg hidden-md">
                                        Notifications
                                        <b class="caret"></b>
                                    </p>
                                </a>
                                <ul class="dropdown-menu">
                                 <li>
                                    <a href="<?=base_url()?>Tarefas" style="text-decoration: underline;">ÚLTIMAS TAREFAS:</a> -->
                          <!--       </li>
                                <?php foreach ($tarefas as $tarefa): ?>
                                    <li>
                                        <a href="<?=base_url()?>Tarefas/getOne/<?=md5($tarefa->id) ?>">* <?=$tarefa->titulo?></a>
                                    </li>
                                    <?php endforeach ?> -->
                               <!--  </ul>
                            </li> -->
                            <li>
                             <ul class="dropdown-menu">
                                <li>
                                    <a href="#"><?php echo $this->session->userlogado->nome; ?></a>
                                </li>
                                <li>
                                    <a href="#"><?php echo $this->session->userlogado->email; ?></a>
                                </li>
                            </ul>
                            <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">person</i>
                                <p class="hidden-lg hidden-md">Profile</p>
                                <small></small>
                            </a>
                        </li>
                        <li>
                         <ul class="dropdown-menu">
                            <li>
                                <a href="<?=base_url()?>Login/logout">Logout</a>
                            </li>
                        </ul>
                        <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">lock_open</i>
                            <p class="hidden-lg hidden-md">Profile</p>
                            <small></small>
                        </a>
                    </li>
                    <li class="separator hidden-lg hidden-md"></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="content">
        <div class="container-fluid">
            <?php $this->load->view($view);?>
        </div>
    </div>
    <footer class="footer">
        <div class="container-fluid">
            <nav class="pull-left">
                <ul>
                    <li>
                        <a href="<?=base_url()?>Subscribes">
                            Emails
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>Cupons">
                            Cupons
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>Usuarios">
                            Usuários
                        </a>
                    </li>
                </ul>
            </nav>
            <p class="copyright pull-right">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>
                <a href=http://geminiweb.com.br>Gemini Web Floripa</a> Painel de Controle
            </p>
        </div>
    </footer>
</div>
<div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-cog fa-2x"> </i>
        </a>
        <ul class="dropdown-menu">
            <li class="header-title"> Topbar Filters</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger active-color">
                    <div class="badge-colors text-center">
                        <span class="badge filter badge-default" data-color="default"></span>
                        <span class="badge filter badge-blue" data-color="blue"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-yellow" data-color="yellow"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                        <span class="badge filter badge-white" data-color="white"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Sidebar Background</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="text-center">
                        <span class="badge filter badge-gray" data-color="gray"></span>
                        <span class="badge filter badge-white" data-color="default"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Sidebar Mini</p>
                    <div class="togglebutton switch-sidebar-mini">
                        <label>
                            <input type="checkbox" unchecked>
                        </label>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
        </ul>
    </div>
</div>
</div>
</body>

<?php $this->load->view($js);?>

</html>
