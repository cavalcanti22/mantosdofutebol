<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?=$titulo;?></title>
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

      <link rel="icon" href="assets/site/Logo-Mantos_header.png"  type="image/png">
    
</head>

<body>
    <nav class="navbar navbar-primary navbar-transparent navbar-absolute">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?=base_url()?>">Mantos do Futebol Login</a>
            </div>
        </div>
    </nav>
    <div class="wrapper wrapper-full-page">
        <div class="full-page login-page"  data-color="blue">
            <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
            <?php $this->load->view($view);?>
            <footer class="footer">
                <div class="container">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="<?=base_url()?>">
                                    Voltar para o site
                                </a>
                            </li>
                        <!--     <li>
                                <a href="login.html#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="login.html#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="login.html#">
                                    Blog
                                </a>
                            </li> -->
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="http://www.geminiweb.com.br">Gemini Web</a> Florianóplis-Sc
                    </p>
                </div>
            </footer>
        </div>
    </div>
</body>
<?php $this->load->view($js);?>
</html>