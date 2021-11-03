<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $boleto; ?></title>

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
        <br><br> <h2 style="font-size:20px;color:#0fad00;"><?php echo $msg_success;  ?></h2>
       
       
        <p style="font-size:20px;color:#0fad00;"><?php echo $msg_incricao; ?> </p>
        
        
        <?php  

        if ($boleto === '100'){
            //echo anchor('admin/login', 'Log in', array('class' => 'btn btn-success')); 
           ?>
           <a href="<?php echo base_url('index.php/admin/'); ?>"> <img height="100" width="100" src="<?php echo base_url('assets/images/boleto.png'); ?>"> </a>
           <?php
            } elseif($boleto !== '100') { ?>
           <a href=""> FAZ NADA </a>
            <?php
            }
        ?>
    <br><br>
        </div>
        
    </div>
</div>




  </body>
  </html>
