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
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $user->nome; ?> - <?php echo $user->username; ?></h3>
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
                <?php 
                $attributes = array('class' => 'email', 'id' => 'myform');
echo form_open('candidato/atualizarcandidato', $attributes);

?>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                    <?php foreach ($candidato->result() as $key ) {
                      # code...
                     // print_r($key);

                     ?>
                     <input type="hidden" name="id_candidato" value="<?php echo $key->idcandidatos; ?>">
                     <tr>
                       
                      <td>Nome:</td><td><input type="text" class="form-control" name="nome" value="<?php echo $key->candidato_nome; ?>"></td>

                      </tr>
                      
                       <td>CPF</td> <td><input type="text" class="form-control" name="cpf" value="<?php echo $key->cpf; ?>"> </td> 
                      </tr>

                      <tr>

                      
                      </tr>
                       <tr>
                       <td>Identidade</td> <td><input type="text" class="form-control" name="identidade" value="<?php echo $key->identidade; ?>"> </td> 
                      </tr>

                      <tr>
                        <td>Força</td>
                        <td>
          <div class="form-group">
         
         
            <div class="form-inline">
             
                <select name="forca" class="form-control">
                  <option value="">ESCOLHA A FORÇA</option>
                  <option value="Exército" >Exército </option> 
                  <option value="Marinha" >Marinha </option>
                  <option value="Aeronáutica" >Aeronáutica </option>
                  <option value="Polícia Militar " >Polícia Militar </option>
                  <option value="Bombeiro" >Bombeiro </option>

                  </select>
              
            </div>
          
        </div>
        </td>
                      </tr>

                      <td>Sexo</td><td> <div class="col-xs-8">
            
             
                <select name="sexo" class="form-control">
                  <option value="">ESCOLHA O SEXO</option>
                  <option value="Masculino" >Masculino </option> 
                  <option value="Feminino" >Feminino </option>
                 </select>
              
           
          </div></td>




                      <tr>
                      <td>
                      Nascimento</td>
          <td>
          <div class="col-xs-10">
            <div class="form-inline">
              <div class="form-group">
                <select name="dd" class="form-control">
                  <option value="">Dia</option>
                  <option value="01" >01 </option><option value="02" >02 </option><option value="03" >03 </option><option value="04" >04 </option><option value="05" >05 </option><option value="06" >06 </option><option value="07" >07 </option><option value="08" >08 </option><option value="09" >09 </option><option value="10" >10 </option><option value="11" >11 </option><option value="12" >12 </option><option value="13" >13 </option><option value="14" >14 </option><option value="15" >15 </option><option value="16" >16 </option><option value="17" >17 </option><option value="18" >18 </option><option value="19" >19 </option><option value="20" >20 </option><option value="21" >21 </option><option value="22" >22 </option><option value="23" >23 </option><option value="24" >24 </option><option value="25" >25 </option><option value="26" >26 </option><option value="27" >27 </option><option value="28" >28 </option><option value="29" >29 </option><option value="30" >30 </option><option value="31" >31 </option>                </select>
              </div>
              <div class="form-group">
                <select name="mm" class="form-control">
                  <option value="">Mês</option>
                  <option value="01">Jan</option><option value="02">Fev</option><option value="03">Mar</option><option value="04">Abr</option><option value="05">Mai</option><option value="06">Jun</option><option value="07">Jul</option><option value="08">Ago</option><option value="09">Set</option><option value="10">Out</option><option value="11">Nov</option><option value="12">Dez</option>                </select>
              </div>
              <div class="form-group" >
                <select name="yyyy" class="form-control">
                  <option value="0">Ano</option>
                  <option value="2000" >2000 </option><option value="2001" >2001 </option><option value="2002" >2002 </option><option value="2003" >2003 </option><option value="2004" >2004 </option><option value="2005" >2005 </option><option value="2006" >2006 </option>   <option value="2007" >2007 </option> <option value="2008" >2008 </option>             </select>
              </div>
            </div>
          </div>
        </div>
          </td>
                      </tr>


                      <tr>
                      <td>Serie</td>

                      <td>         
                <div class="col-xs-10">
              <div class="form-inline">
                <div class="form-group">
                  <select name="serie" class="form-control">
                    <option value="">ESCOLHA A SÉRIE</option>
                    <option value="1º Ano" >1º Ano Ensino Médio </option> 
                    <option value="6º Ano" >6º Ano </option>
                   </select>
                </div>  <span class="glyphicon glyphicon-hand-left" aria-hidden="true"></span>
              </div>
            </div>
          </td>
                </tr>
                <tr>
                <td></td><td>   <input class="btn btn-warning" type="submit" value="Atualiza Informações"></td>
                </tr>

























                      
                     <?php } ?>
                    </tbody>
                  </table>
              
                 
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a href="<?php echo base_url('index.php/admin/'); ?>" data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-step-backward"></i></a>
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