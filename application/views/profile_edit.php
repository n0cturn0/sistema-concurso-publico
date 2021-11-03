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




<div class="container">
  
 
  <div class="row">
    <div class="col-md-12">
    <div class="row">
     <div class="control-label col-sm-5">
     
    </div>
    </div>
      <section>      

         <?php 

        $attributes = array('class' => 'form-horizontal', 'id' => 'validade', 'name' => 'validade');
        echo form_open('welcome/sendccc', $attributes);
        ?>
               
      <script>
      cpfCheck = function (el) {
    document.getElementById('cpfResponse').innerHTML = is_cpf(el.value)? '<span style="color:green"><input name="Submit"  value="REGISTRAR" type="submit" value="Cadastrar" class="btn btn-primary"></span>' : '<span style="color:red">Entre com CPF válido, para ativar o botão</span>';
    if(el.value=='') document.getElementById('cpfResponse').innerHTML = '';
}
      </script>

          <div class="form-group">
          <label class="control-label col-sm-3">  <span class="text-danger"></span></label>
          <div class="col-md-8 col-sm-9">
          <div class="input-group"></div>
           </div>
          </div>
         
       
          <hr>
          
           
            
           
         
         
         
         
           <hr>
          

           



        
           <?php 

           foreach ($u->result() as  $value) {
            
           
           ?>


         <div class="form-group">
          <label class="control-label col-sm-3">Responsável <span class="text-danger">*</span></label>
          <div class="col-xs-8">
            <div class="form-inline">
             
              <div class="form-group">
                <select name="parentesco" class="form-control">
                  <option value="Responsavel">RESPONSÁVEL</option>
                  <option value="pai">PAI</option>
                  <option value="mae">MÃE</option>
                  
                  </select>
              </div>
            
            </div>
          </div>
        </div>













        <div class="form-group">
          <label class="control-label col-sm-3">Nome Completo <span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-4">
            <input type="text" value="<?php echo $value->nome; ?>" class="form-control" name="nome" id="mem_name" placeholder="Nome Completo" required="">
          </div>
        </div>


         <div class="form-group">
          <label class="control-label col-sm-3">Data de Nascimento <span class="text-danger">*</span></label>
          <div class="col-xs-8">
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
                  <option value="1955" >1955 </option><option value="1956" >1956 </option><option value="1957" >1957 </option><option value="1958" >1958 </option><option value="1959" >1959 </option><option value="1960" >1960 </option><option value="1961" >1961 </option><option value="1962" >1962 </option><option value="1963" >1963 </option><option value="1964" >1964 </option><option value="1965" >1965 </option><option value="1966" >1966 </option><option value="1967" >1967 </option><option value="1968" >1968 </option><option value="1969" >1969 </option><option value="1970" >1970 </option><option value="1971" >1971 </option><option value="1972" >1972 </option><option value="1973" >1973 </option><option value="1974" >1974 </option><option value="1975" >1975 </option><option value="1976" >1976 </option><option value="1977" >1977 </option><option value="1978" >1978 </option><option value="1979" >1979 </option><option value="1980" >1980 </option><option value="1981" >1981 </option><option value="1982" >1982 </option><option value="1983" >1983 </option><option value="1984" >1984 </option><option value="1985" >1985 </option><option value="1986" >1986 </option><option value="1987" >1987 </option><option value="1988" >1988 </option><option value="1989" >1989 </option><option value="1990" >1990 </option><option value="1991" >1991 </option><option value="1992" >1992 </option><option value="1993" >1993 </option><option value="1994" >1994 </option><option value="1995" >1995 </option><option value="1996" >1996 </option><option value="1997" >1997 </option><option value="1998" >1998 </option><option value="1999" >1999 </option><option value="2000" >2000 </option><option value="2001" >2001 </option><option value="2002" >2002 </option><option value="2003" >2003 </option><option value="2004" >2004 </option><option value="2005" >2005 </option><option value="2006" >2006 </option>                </select>
              </div>
            </div>
          </div>
        </div>




        <div class="form-group">
          <label class="control-label col-sm-3">Cpf <span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-8">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
             <input id="cpf" class="form-control" value="<?php echo $value->cpf; ?>" placeholder="SOMENTE NÚMEROS" name="cpf" type="text" onkeyup="cpfCheck(this)" maxlength="18" /> 
           </div>   
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Identidade <span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-8">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
             <input type="text" class="form-control" value="<?php echo $value->identidade; ?>" name="identidade" id="mem_name" placeholder="Número de Identidade" required="">
            </div>  
          </div>
        </div>
























<!--

         <div class="form-group">
          <label class="control-label col-sm-3">CPF <span class="text-danger">*</span></label>
          <div class="col-md-3 col-sm-3">
           
            <input id="cpf" class="form-control" placeholder="Número Cpf" name="cpf" type="text" onkeyup="cpfCheck(this)" maxlength="18" /> 
          </div>
        </div>
        <div id="r"></div>

         <div class="form-group">
          <label class="control-label col-sm-3">Identidade<span class="text-danger">*</span></label>
          <div class="col-md-3 col-sm-3">
            <input type="text" class="form-control" name="identidade" id="mem_name" placeholder="Número de Identidade" required="">
          </div>
        </div> -->
        <hr>

        <div class="form-group">
          <label class="control-label col-sm-3"><span class="text-danger"></span></label>
          <div class="col-md-3 col-sm-3">
           <h2>Informações de Contato</h2>
          </div>
        </div>

          <div class="form-group">
          <label class="control-label col-sm-3">Logradouro<span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-4">
            <input type="text" class="form-control" value="<?php echo $value->logradouro; ?>" name="logradouro" id="mem_name" placeholder="Nome da Rua" value="" required="">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-3">Número<span class="text-danger">*</span></label>
          <div class="col-md-3 col-sm-4">
            <input type="text" class="form-control" name="numero" id="mem_name" placeholder="00000" value="<?php echo $value->numero; ?>" required="">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-3">Bairro<span class="text-danger">*</span></label>
          <div class="col-md-3 col-sm-4">
            <input type="text" class="form-control" name="bairro" id="mem_name" placeholder="Nome do seu Bairro" value="<?php echo $value->bairro; ?>" required="">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-3">Cep<span class="text-danger">*</span></label>
          <div class="col-md-3 col-sm-4">
            <input type="text" class="form-control" name="cep" id="mem_name" placeholder="Seu Cep" value="<?php echo $value->cep; ?>">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-3">Complemento<span class="text-danger">*</span></label>
          <div class="col-md-3 col-sm-4">
            <input type="text" class="form-control" name="complemento" id="mem_name" placeholder="Complemento" value="<?php echo $value->complemento; ?>">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-3">Cidade<span class="text-danger">*</span></label>
          <div class="col-md-3 col-sm-4">
            <input type="text" class="form-control" name="cidade" id="mem_name" placeholder="Cidade" value="<?php echo $value->cidade; ?>" required="">
          </div>
        </div>


           <div class="form-group">
          <label class="control-label col-sm-3">Estado <span class="text-danger">*</span></label>
          <div class="col-xs-8">
            <div class="form-inline">
             
              <div class="form-group">
                <select name="estado" class="form-control">
                  <option value="Acre">ACRE</option>
                  <option value="Alagoas">ALAGOAS</option>
                  <option value="Amapá">AMAPÁ</option>
                  <option value="Amazonas">AMAZONAS</option>
                  <option value="Bahia">BAHIA</option>
                  <option value="Ceara">CEARA</option>
                  <option value="Distrito Federal">DISTRITO FEDERAL</option>
                  <option value="Espírito Santo">ESPÍRITO SANTO</option>
                  <option value="Goiás">GOIÀS</option>
                  <option value="Maranhão">MARANHÃO</option>
                  <option value="Mato Grosso">MATO GROSSO</option>
                  <option value="Mato Grosso do Sul">MATO GROSSO DO SUL</option>
                  <option value="Minas Gerais">Minas Gerais</option>
                  <option value="Pará">PARÁ</option>
                  <option value="Paraíba">PARAÍBA</option>
                  <option value="Paraná">PARANÁ</option>
                  <option value="Pernambuco">PERNAMBUCO</option>
                  <option value="Piauí">PIAUÍ</option>
                  <option value="Rio de Janeiro">RIO DE JANEIRO</option>
                  <option value="Rio Grande do Norte">RIO GRANDE DO NORTE</option>
                  <option value="Rio Grande do Sul ">RIO GRANDE DO SUL</option>
                  <option value="Rondônia">RONDÔNIA</option>
                  <option value="Roraima">RORAIMA</option>
                  <option value="Santa Catarina">SANTA CATARINA</option>
                  <option value="São Paulo">SÃO PAULO</option>
                  <option value="Sergipe">SERGIPE</option>
                  </select>
              </div>
            
            </div>
          </div>
        </div>






















        <div class="form-group">
          <label class="control-label col-sm-3">Email <span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-4">
              <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              <input type="email" class="form-control" name="email" id="emailid" placeholder="Seu E-mail@" value="<?php echo $value->email; ?>" required="">
            </div>
            <small> Seu Email será mantido em sigilo. </small> </div>
        </div>

        



        <div class="form-group">
          <label class="control-label col-sm-3">Telefone <span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-8">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
            <input type="text" class="form-control" name="telefone_1" id="contactnum" placeholder="Entre com o número para contato" value="<?php echo $value->telefone; ?>">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-3">Telefone Alternativo <span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-8">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
            <input type="text" class="form-control" name="telefone_2" id="contactnum" placeholder="Entre com o número para contato" value="<?php echo $value->celular; ?>" required="">
            </div>
          </div>
        </div>




<!--
        
        <div class="form-group">
          <label class="control-label col-sm-3">Crie Uma Senha <span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-8">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input type="password" class="form-control" name="password" id="password" placeholder="*********" value="">
           </div>   
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Confirme Sua Senha <span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-8">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="*********" value="">
            </div>  
          </div>
        </div> -->
        
       
       <!-- <div class="form-group">
          <label class="control-label col-sm-3">Gender <span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
            <label>
            <input name="gender" type="radio" value="Male" checked>
            Male </label>
               
            <label>
            <input name="gender" type="radio" value="Female" >
            Female </label>
          </div>
        </div> -->
        







      <!--  <div class="form-group">
          <label class="control-label col-sm-3">Alternate No. <br>
          <small>(if any)</small></label>
          <div class="col-md-5 col-sm-8">
            <input type="text" class="form-control" name="contactnum2" id="contactnum2" placeholder="Any other or Landline no (if any)" value="">
          </div>
        </div> 
        <div class="form-group">
          <label class="control-label col-sm-3">Profile Photo <br>
          <small>(optional)</small></label>
          <div class="col-md-5 col-sm-8">
            <div class="input-group"> <span class="input-group-addon" id="file_upload"><i class="glyphicon glyphicon-upload"></i></span>
              <input type="file" name="file_nm" id="file_nm" class="form-control upload" placeholder="" aria-describedby="file_upload">
            </div>
          </div>
        </div> 
        <div class="form-group">
          <label class="control-label col-sm-3">Security Code </label>
          <div class="col-md-5 col-sm-8">
            <div >
                
                <input type="text" name="captcha" id="captcha" class="form-control label-warning"  />                
              </div>
          </div>
        </div> -->
       <!-- <div class="form-group">
          <div class="col-xs-offset-3 col-md-8 col-sm-9"><span class="text-muted"><span class="label label-danger">Note:-</span> By clicking Sign Up, you agree to our <a href="#">Terms</a> and that you have read our <a href="#">Policy</a>, including our <a href="#">Cookie Use</a>.</span> </div>
        </div> -->
        <div class="form-group">
          <div class="col-xs-offset-3 col-xs-10">

          <span id="cpfResponse"></span>
            <?php } ?>
          </div>
        </div>
      </form>
    </div>
</div>
</div>
 
<style type="text/css">
@import url(http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700);
@import url(http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700);

body {
    background: #fff;
  font-family: 'Roboto', sans-serif;
  color:#333;
  line-height: 22px;  
}
h1, h2, h3, h4, h5, h6 {
  font-family: 'Roboto Condensed', sans-serif;
  font-weight: 400;
  color:#111;
  margin-top:5px;
  margin-bottom:5px;
}
h1, h2, h3 {
  text-transform:uppercase;
}

input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 12px;
    cursor: pointer;
    opacity: 1;
    filter: alpha(opacity=1);    
}

.form-inline .form-group{
    margin-left: 0;
    margin-right: 0;
}
.control-label {
    color:#333333;
}
</style>
</body>



   <script>
function is_cpf (c) {

  if((c = c.replace(/[^\d]/g,"")).length != 11)
    return false

  if (c == "00000000000")
    return false;

  var r;
  var s = 0;

  for (i=1; i<=9; i++)
    s = s + parseInt(c[i-1]) * (11 - i);

  r = (s * 10) % 11;

  if ((r == 10) || (r == 11))
    r = 0;

  if (r != parseInt(c[9]))
    return false;

  s = 0;

  for (i = 1; i <= 10; i++)
    s = s + parseInt(c[i-1]) * (12 - i);

  r = (s * 10) % 11;

  if ((r == 10) || (r == 11))
    r = 0;

  if (r != parseInt(c[10]))
    return false;

  return true;
}

</script>









</body>
</html>
