<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $titulo; ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('landingpage/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="<?php echo base_url('landingpage/css/grayscale.min.css'); ?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>

                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                  
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
           <!-- <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                 <!--   <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download">Download</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div> 
            <!-- /.navbar-collapse -->
     <!--   </div> -->
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <!-- <h1 class="brand-heading">Grayscale</h1> -->
                       <!-- <p class="intro-text">A free, responsive, one page Bootstrap theme.
                            <br>Created by Start Bootstrap.</p> -->
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
								<div class="container">
	<div class="row">
        <!-- Boxes de Acoes -->
    	 <div class="col-md-6 col-md-offset-1">
			<div class="box">							
				<div class="icon">
					<img src="<?php echo base_url('landingpage/img/logo.gif'); ?>">
					<div class="info"><br>
						
						
						<a href="#about" class="btn btn-circle page-scroll"> 
                           <i class="fa fa-angle-double-down animated"></i> 
                        </a>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>	    
		<!-- /Boxes de Acoes -->
	</div>
</div>


					
                        
                    </div>
                </div>
            </div>
        </div>
    </header>
	
    <!-- About Section -->
    <section id="about" class="container content-section text-center">
	
        <div class="row">
        <form action="index.php/welcome/valida" method="POST">
			<h2>Concurso de Admiss??o ao CMCG2017/2018</h2>
			
            <div class="col-lg-8 col-lg-offset-2">
                  <ul>
                <li class="text-left"><strong>24/07/2017</strong> Edital do Concurso.</li>
                <li class="text-left"><strong>24/07/2017</strong> Manual do Candidato.</li>
               
                <li class="text-left"><strong>24/07/2017</strong><a href="<?php echo base_url('150DECEX.PDF'); ?>"> -Portaria n?? 150 do DECEx, de 10 de julho de 2017, que aprova as Instru????es Reguladoras do Concurso de Admiss??o e da Matr??cula nos Col??gios Militares, referentes ao concurso de admiss??o para matr??cula em 2018 (IRCAM/CM). </a></li>

                <li class="text-left"><a href="<?php echo base_url('149DECEX.pdf'); ?>"> Port 149 DECEx-IRCAM-CACM</a></li><br>

                <li class="text-left"><strong>CONCURSO DE ADMISS??O CMCG 2017</strong></li>

                <li class="text-left"><strong>Vagas no CMCG:</strong> 10 (Dez) para o 6?? Ano do Ensino Fundamental.</li>

                <li class="text-left"><strong>Valor da Taxa de Inscri????o:</strong> R$ 95,00 (Noventa e Cinco reais)</li>

                <liclass="text-left"><strong>Extrato simplificado do Calend??rio:</strong></li>

             <div class="text-left"> - Processamento das inscri????es: de 24 Jul a 28 Ago 17;<br>
              - Ambienta????o dos candidatos para o Exame Intelectual (EI): 9 Set 17;<br>
              - Realiza????o do EI - prova de Matem??tica (6?? ano/EF): 10 Set 17;<br>
              - Divulga????o do resultado da prova de Matem??tica: 25 Set 17;<br>
              - Realiza????o do EI - prova de L??ngua Portuguesa (6?? ano/EF): 22 Out 17;<br>
              - Divulga????o do resultado da prova de L??ngua Portuguesa: 20 Nov 17;<br> 
              - Divulga????o das notas finais do EI e chamada para a realiza????o de inspe????o de sa??de dos candidatos aprovados e classificados no EI: 04 Dez 17.</div><br>
            </ul>

       
		      <input type="checkbox" name="id" value="1" required="" /> Tenho conhecimento de todas as informa????es aqui citadas. <br>
           
           
            <button class="btn btn-info btn-lg"  class="btn btn-default" type="submit">REALIZAR INSCRI????O</button>

          </form>

            </div>


        </div>
    </section>
   

    <!-- Download Section -->
    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2></h2>
                    <p></p>
                    <a href="#" class="btn btn-default btn-lg">Conhe??a o Col??gio Militar de Campo Grande</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
   <!-- <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact Start Bootstrap</h2>
                <p>Feel free to email us to provide some feedback on our templates, give us suggestions for new templates and themes, or to just say hello!</p>
                <p><a href="mailto:feedback@startbootstrap.com">feedback@startbootstrap.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>-->

    <!-- Map Section -->
    

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Avenida Presidente Vargas, 2800 - Bairro Coophatrabalho - Campo Grande/MS </p>
		<p> (67) 3368-4870 / (67) 3368-4820 </p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php echo base_url('landingpage/vendor/jquery/jquery.js'); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('landingpage/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Theme JavaScript -->
    <script src="<?php echo base_url('landingpage/js/grayscale.min.js') ?>"></script>
   

 <style type="text/css">


@import "//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css";
@import "http://fonts.googleapis.com/css?family=Quicksand:700,400";

.box > .icon { text-align: center; position: relative; }
.box > .icon > .image { position: relative; z-index: 2; margin: auto; width: 88px; height: 88px; border: 8px solid white; line-height: 88px; border-radius: 50%; background: rgb(170,196,196); vertical-align: middle; }
.box > .icon:hover > .image { background: #6CB4C4; }
.box > .icon > .image > i { font-size: 36px !important; color: #fff !important; }
.box > .icon:hover > .image > i { color: white !important; }
.box > .icon > .info { margin-top: -24px; background: rgba(0, 0, 0, 0.04); border: 1px solid #e0e0e0; padding: 15px 0 10px 0; }
.box > .icon:hover > .info { background: rgba(0, 0, 0, 0.04); border-color: #e0e0e0; color: white; }
.box > .icon > .info > h3.title { font-family: "Quicksand",sans-serif !important; font-size: 28px; color: #222; font-weight: 500; }
.box > .icon > .info > p { font-family: "Quicksand",sans-serif !important; font-size: 15px; color: #666; line-height: 1.5em; margin: 20px;}
.box > .icon > .info > .more a { font-family: "Quicksand",sans-serif !important; font-size: 12px; color: #222; line-height: 12px; text-transform: uppercase; text-decoration: none; }
.box > .icon:hover > .info > .more > a { color: #fff; padding: 6px 8px; background-color: #63B76C; }
.box .space { height: 2px; background-color: #6CB4C4;}
.btn-default { font-family: "Quicksand",sans-serif; background-color: #75b1ae; color: #FFFFFF;}
.btn-default:hover { background-color: #FFFFFF; color: black;}
</style>

</body>

</html>
