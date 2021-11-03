<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Intranet Colégio Militar de Campo Grande </title>

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
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
           

        <A href="<?php echo base_url('index.php/admin/logout'); ?>" >DESCONECTAR</A>
       <br>



      </div>
        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-1 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $user->nome; ?> - <?php echo $user->username; ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-1 col-lg-1 " align="center"> <img alt="User Pic" src="<?php echo base_url('assets/images/logo.gif'); ?>" class="img-circle img-responsive"> </div>
                
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
                    <thead>
                    <th>NOME</th><th>SÉRIE</th><th>CPF</th><th>EMITIR</th><th>Status</th>
                    </thead>
                    <?php foreach ($candidatos->result() as $key ) {
                      # code...
                     // print_r($key);
                     ?>
                     <tr>
                       
                      <td>

                      <a href="<?php echo base_url('index.php/candidato/edita/'.$key->idcandidatos); ?>">

                        <font style="font-size:16px;">
                        <?php echo $key->candidato_nome; ?></a>
                        </font>

                        </td>
                        <td> <font style="font-size:16px;"><?php echo $key->serie; ?></font></td>
                        <td> <font style="font-size:16px;"><?php echo $key->cpf; ?></font></td> 
                        <td>
                        <?php 
                         if ($key->status=='0' || $key->status=='3'){

                         ?> 
                        <a href="<?php echo base_url('index.php/boleto/emite/'.$key->idcandidatos); ?>"> <img alt="User Pic" src="<?php echo base_url('assets/images/bb.png'); ?>"  class="img-circle img-responsive" height="50" width="50"  ></a>
                        <?php } else {
                          ?>
                         <a href="<?php echo base_url('index.php/boleto/cci/'.$key->idcandidatos); ?>"> <img alt="User Pic" src="<?php echo base_url('assets/images/printer.png'); ?>"  class="img-circle img-responsive" height="50" width="50"  ></a>
                          <?php 
                          } ?>

                        </td>
                        <td>
                        <?php
                        if ($key->status=='0') 
                        { ?>
                      <img width="30" height="30" src="<?php echo base_url('assets/images/negativo.gif'); ?>">
                      <?php
                         
                        } else { ?>
                        <img src="<?php echo base_url('assets/images/confirmado.png'); ?>">
                        <?php
                            
                           
                           
                        }

                        ?>


                        </td>
                      </tr>
                      
                     <?php } ?>
                    </tbody>
                  </table>
              
                 
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a  href="<?php echo base_url('index.php/admin/'); ?>" data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-step-backward"></i></a>
                     <!--   <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span> -->
                    </div>
            
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
  </body>
  </html>
