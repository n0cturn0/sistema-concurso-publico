<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets_admin/vendors/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets_admin/vendors/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets_admin/vendors/nprogress/nprogress.css'); ?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets_admin/build/css/custom.min.css'); ?>" rel="stylesheet">

    
  </head>
  <body>
        <div class="container">
            
        <div class="alert alert-success" role="alert"></div>


        </div>


                        <div class="container">
    <div class="row text-center">
        <div class="col-sm-6 col-sm-offset-3">
         <img src="<?php echo base_url('assets/images/logo.gif'); ?>">
          <h3>Concurso Colégio Militar de Campo Grande</h3>
        <br><br> <h2 style="font-size:20px;color:#0fad00;"></h2>
       
       
        <p style="font-size:20px;color:#0fad00;"> </p>
        
        
        <?php  
          echo $candidato_cpf;
       
           ?>
        
    <br><br>
        </div>
        
    </div>
</div>




  </body>
  </html>