<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Intranet Colégio Militar de Campo Grande </title>
    <!-- Bootstrap -->
    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets_admin/vendors/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
   
    <!-- Font Awesome -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
     <!-- jQuery -->
    <script src="<?php echo base_url('assets_admin/vendors/jquery/dist/jquery.min.js'); ?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('assets_admin/vendors/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
  </head>
  <body>
<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- logo -->
      <a class="navbar-brand" href="#"><img alt="alternative text" src="<?php echo base_url('assets_admin/images/logo.gif'); ?>"></a>     
    </div>
    <div class="collapse navbar-collapse animated fadeIn" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav animated fadeIn text16">
     <!--   <li class="active"><a href="#"><span class="glyphicon glyphicon-cog"></span></a></li> -->
       
        <li class="dropdown">
       <!--   <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-menu-hamburger"></span> MENU <span class="caret"></span></a> -->
          <ul class="dropdown-menu animated flipInX" role="menu">
            <li><a href="#"><span class="glyphicon glyphicon-list-alt"></span>   PayOptOne Web</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-road"></span>   PayOptTwo Web</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-barcode"></span>  PayOptTree Web</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="<?php echo base_url('index.php/admin/logout'); ?>"><span class="glyphicon glyphicon-off"></span><b> DESCONECTAR</b></a>
         
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>








      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
         

        <A href="<?php echo base_url('index.php/admin/logout'); ?>" >DESCONECTAR</A>
       <br>



      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $user->nome; ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="<?php echo base_url('assets/images/logo.gif'); ?>" class="img-circle img-responsive"> </div>
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                     <tr>
                        <td>PARENTESCO</td>
                        <td><?php echo $user->parentesco; ?></td>
                      </tr>
                      <tr>
                        <td>NOME</td>
                        <td><?php echo $user->nome; ?></td>
                      </tr>
                      <tr>
                        <td>DATA DE NASCIMENTO:</td>
                        <td><?php echo date('d/m/Y',strtotime($user->data_nascimento)); ?></td>
                      </tr>
                      <tr>
                        <td>CPF:</td>
                        <td><?php echo $user->cpf; ?></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>IDENTIDADE</td>
                        <td><?php echo $user->identidade; ?></td>
                      </tr>
                        
                      <tr>
                        <td>EMAIL</td>
                        <td><?php echo $user->email; ?></td>
                      </tr>
                        <td>TELEFONES</td>
                        <td><?php echo $user->telefone; ?><br><br><?php echo $user->celular; ?>
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                <?php  echo anchor('candidato/novo/'.$user->id, 'Adicionar Candidato', array('class' => 'btn btn-primary')); ?>
                 <?php  echo anchor('admin/editar_respo/'.$user->id, 'Editar Informação', array('class' => 'btn btn-warning')); ?>
                <!-- <?php  echo anchor('candidato/cadastrado/'.$user->id, 'Listar Candidatos Cadastrados', array('class' => 'btn btn-primary')); ?> -->
                 <a href="<?php echo base_url('index.php/candidato/cadastrado/'.$user->id); ?>"> <img height="60" width="100" src="<?php echo base_url('assets/images/boleto.png'); ?>"> </a>
                 
                 
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a data-original-title="By Sgt Luiz Augusto" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-step-backward"></i></a>
                       <!-- <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span> -->
                    </div>
            
          </div>
        </div>
      </div>
   







  <style type="text/css">
        .user-row {
    margin-bottom: 14px;
}

.user-row:last-child {
    margin-bottom: 0;
}

.dropdown-user {
    margin: 13px 0;
    padding: 5px;
    height: 100%;
}

.dropdown-user:hover {
    cursor: pointer;
}

.table-user-information > tbody > tr {
    border-top: 1px solid rgb(221, 221, 221);
}

.table-user-information > tbody > tr:first-child {
    border-top: 0;
}


.table-user-information > tbody > tr > td {
    border-top: 0;
}
.toppad
{margin-top:20px;
}

    </style>
    <script type="text/javascript">
        $(document).ready(function() {
    var panels = $('.user-infos');
    var panelsButton = $('.dropdown-user');
    panels.hide();

    //Click dropdown
    panelsButton.click(function() {
        //get data-for attribute
        var dataFor = $(this).attr('data-for');
        var idFor = $(dataFor);

        //current button
        var currentButton = $(this);
        idFor.slideToggle(400, function() {
            //Completed slidetoggle
            if(idFor.is(':visible'))
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
            }
            else
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
            }
        })
    });


    $('[data-toggle="tooltip"]').tooltip();

    $('button').click(function(e) {
        e.preventDefault();
        alert("This is a demo.\n :-)");
    });
});
    </script>













<style type="text/css">
  
/*alteracoes da barra de navegacao principal*/
.navbar-brand img {
    max-width: 100%;
    height: 50px;
    margin-top: -15px;
}
.navbar-inverse {
    background: #4D5061;
    border-bottom: 4px solid #60B078;
    color: #FFF;
}
.navbar-inverse .navbar-brand, .navbar-inverse .navbar-nav > li > a {
    text-shadow: none;
    color: #FFF;
}
.navbar-inverse .navbar-nav>.active>a,
.navbar-inverse .navbar-nav>.open>a,
.navbar-inverse .navbar-nav> ul >li,
.navbar-inverse .navbar-nav>li.focus>a,
.navbar-inverse .navbar-nav > .active > a:focus,
.navbar-inverse .navbar-nav > .active > a:hover,
.navbar-inverse .navbar-nav > .active >a:visited,
.navbar-inverse .navbar-nav>li:hover>a:hover {
    background-image: #60B078;
    background: #60B078;
    background-color: #60B078!important;/*necessario para forcar a regra do bootstrap que tem important*/
    color: #FFF;
    -webkit-transition: all  ease-in .3s;
    -o-transition: all  ease-in .3s;
    -moz-transition: all  ease-in .3s;
    -ms-transition: all  ease-in .3s;
    transition: all  ease-in .3s;

}
.dropdown-menu > li > a:focus, .dropdown-menu > li > a:hover { color: #FFF; text-decoration: none; background-color: #60B078; }
.dropdown-menu >li >a {padding: 5px 20px;}
.dropdown-menu > li > a:focus, .dropdown-menu > li > a:hover {
    margin-top: 0px;
    margin-bottom: 0px;
    color: #FFF;
    font-weight: 200;
    background-color: #60B078;
    background-image: none;
    background-repeat: none;
    -webkit-transition: all  ease-in .3s;
    -o-transition: all  ease-in .3s;
    -moz-transition: all  ease-in .3s;
    -ms-transition: all  ease-in .3s;
    transition: all  ease-in .3s;
}
.iconSpecial {
    font-size: 30px;
    color: #4D5061;
    text-align: center;
}

.btn { border-radius: 0px; }
.text-dark {color: #333;}
.text-light{color: #eee;}
.text16 {font-size: 16px;}

ul.nav.navbar-nav.navbar-right:last-child  {
    margin-right: 50px;
}
/*MENU DE CONTEXTO*/
.navbar-static-top{
    position: relative;
    margin-top: 50px;
    background: #f1ecec;
    box-shadow: 0px -2px 8px 0px #333333;
}
.navbar-static-top .navbar-nav>li>a{color:#4D5061}
.navbar-static-top .navbar-nav>li>a:hover {
    color: #4D5061;
    background-color: #dadada;
    -webkit-transition: all  ease-in .3s;
    -o-transition: all  ease-in .3s;
    -moz-transition: all  ease-in .3s;
    -ms-transition: all  ease-in .3s;
    transition: all  ease-in .3s;
}

.navbar-static-top .navbar-brand {
    font-size: 14px;
    color: #4D5061;
    font-style: normal;
    font-weight: bolder;
}
.navbar-static-top .navbar-brand::after {
  content: "|";
  font-size: 20px;
  color: #4D5061;
  margin-left: 10px;
  font-style: normal;
  font-weight: lighter;
}
.navbar-static-top .dropdown-menu > li > a:focus, .dropdown-menu > li > a:hover {
    margin-top: 0px;
    margin-bottom: 0px;
    color: #4D5061;
    font-weight: 200;
    background-color: #dadada;
    background-image: none;
    background-repeat: none;
    -webkit-transition: all  ease-in .3s;
    -o-transition: all  ease-in .3s;
    -moz-transition: all  ease-in .3s;
    -ms-transition: all  ease-in .3s;
    transition: all  ease-in .3s;
}
.animated {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}
@-webkit-keyframes fadeIn {
  0% {
    opacity: 0;
  }

  100% {
    opacity: 1;
  }
}

@keyframes fadeIn {
  0% {
    opacity: 0;
  }

  100% {
    opacity: 1;
  }
}

.fadeIn {
  -webkit-animation-name: fadeIn;
  animation-name: fadeIn;
}

@-webkit-keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }

  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}
@-webkit-keyframes flipInX {
  0% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
    opacity: 0;
  }

  40% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }

  60% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
    transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
    opacity: 1;
  }

  80% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
    transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
  }

  100% {
    -webkit-transform: perspective(400px);
    transform: perspective(400px);
  }
}

@keyframes flipInX {
  0% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
    opacity: 0;
  }

  40% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }

  60% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
    transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
    opacity: 1;
  }

  80% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
    transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
  }

  100% {
    -webkit-transform: perspective(400px);
    transform: perspective(400px);
  }
}

.flipInX {
  -webkit-backface-visibility: visible !important;
  backface-visibility: visible !important;
  -webkit-animation-name: flipInX;
  animation-name: flipInX;
}

@-webkit-keyframes flipInY {
  0% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
    opacity: 0;
  }

  40% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }

  60% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
    transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
    opacity: 1;
  }

  80% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
  }

  100% {
    -webkit-transform: perspective(400px);
    transform: perspective(400px);
  }
}
#login-dp{
    min-width: 250px;
    padding: 14px 14px 0;
    overflow:hidden;
    background-color:rgba(255,255,255,.8);
}
#login-dp .help-block{
    font-size:12px
}
#login-dp .bottom{
    background-color:rgba(255,255,255,.8);
    border-top:1px solid #ddd;
    clear:both;
    padding:14px;
}
#login-dp .social-buttons{
    margin:12px 0
}
#login-dp .social-buttons a{
    width: 49%;
}
#login-dp .form-group {
    margin-bottom: 10px;
}
.btn-fb{
    color: #fff;
    background-color:#3b5998;
}
.btn-fb:hover{
    color: #fff;
    background-color:#496ebc
}
.btn-tw{
    color: #fff;
    background-color:#55acee;
}
.btn-tw:hover{
    color: #fff;
    background-color:#59b5fa;
}
@media(max-width:768px){
    #login-dp{
        background-color: inherit;
        color: #fff;
    }
    #login-dp .bottom{
        background-color: inherit;
        border-top:0 none;
    }
}

</style>
</body>
</html>
