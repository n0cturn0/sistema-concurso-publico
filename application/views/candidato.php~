
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
   <!-- Bootstrap -->
    <link href="<?php echo base_url('assets_admin/vendors/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets_admin/vendors/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets_admin/vendors/nprogress/nprogress.css'); ?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets_admin/build/css/custom.min.css'); ?>" rel="stylesheet">
 
     <script src="<?php echo base_url('assets_admin/vendors/jquery/dist/jquery.min.js'); ?>"></script>

      <script src="<?php echo base_url('assets/js/request_formulario.js'); ?>"></script>
      <script src="<?php echo base_url('assets/js/jquery.cpf-validate.1.0.min.js'); ?>"></script>
  

</head>
<body>


<div class="container">

  <div class="row">
    <div class="col-md-12">
    <div class="row">
     <div class="control-label col-sm-5">
     
    </div>
    </div>
      <section>      

        
         
       
        <hr>
        <?php 

        $attributes = array('class' => 'form-horizontal', 'id' => 'validade', 'name' => 'validade');
        echo form_open('candidato/inserir', $attributes);
        ?>
               
<script>
            
            cpfCheck = function (el) {
    document.getElementById('cpfResponse').innerHTML = is_cpf(el.value)? '<span style="color:green"><input name="Submit"  value="Cadastrar" type="submit" value="Cadastrar" class="btn btn-primary"></span>' : '<span style="color:red">Entre com CPF válido, para ativar o botão</span>';
    if(el.value=='') document.getElementById('cpfResponse').innerHTML = '';
}
          </script>




              <div class="form-group">
          <label class="control-label col-sm-3">  <span class="text-danger"></span></label>
          <div class="col-md-8 col-sm-9">
              <div class="input-group">
             <img class="img-responsive center-block" src="<?php echo base_url('assets_admin/images/logo.gif'); ?>" alt="">
 <h1 class="text-center">Inscrição para o Concurso de admissão 2018</h1> 
  <h2 class="text-center">Colégio Militar de Campo Grande</h2> 
            </div>
           
        </div>
        </div>


        <hr>



            <!-- PASSA PARA A TABELA O VALOR 100 QUE REFERE QUE O BOLETO NÃO FOI EMITIDO -->
            <input type="hidden"  name="boleto" value="100" >

            <div class="form-group">
          <label class="control-label col-sm-3"><span class="text-danger"></span></label>
          <div class="col-md-3 col-sm-3">
           <h2>Preencha os dados do candidato</h2>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-3">Nome Completo <span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-4">
            <input type="text" class="form-control" name="nome" id="mem_name" placeholder="Nome Completo" required="">
          </div>
        </div>
        <input type="hidden" name="id_responsavel" value="<?php echo $id; ?>" >




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
                  
                  <option value="2005" >2005 </option>
                  <option value="2006" >2006 </option>  
                  <option value="2007" >2007 </option>
                  <option value="2008" >2008 </option>        
                  </select>
              </div>
            </div>
          </div>
        </div>

























        <div class="form-group">
          <label class="control-label col-sm-3">Cpf <span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-8">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
             <input id="cpf" class="form-control" placeholder="SOMENTE NÚMEROS" name="cpf" type="text" onkeyup="cpfCheck(this)" maxlength="18" /> 
           </div>   
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Identidade <span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-8">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
             <input type="text" class="form-control" name="identidade" id="mem_name" placeholder="Número de Identidade" required="">
            </div>  
          </div>
        </div>




          



         <div class="form-group">
          <label class="control-label col-sm-3">Sexo <span class="text-danger">*</span></label>
          <div class="col-xs-8">
            <div class="form-inline">
              <div class="form-group">
                <select name="sexo" class="form-control">
                  <option value="">ESCOLHA O SEXO</option>
                  <option value="Masculino" >Masculino </option> 
                  <option value="Feminino" >Feminino </option>
                 </select>
              </div>
            </div>
          </div>
        </div>





         <div class="form-group">
          <label class="control-label col-sm-3">SÉRIE <span class="text-danger">*</span></label>
          <div class="col-xs-8">
            <div class="form-inline">
              <div class="form-group">
                <select name="serie" class="form-control">
                  <option value="">ESCOLHA A SÉRIE</option>
                  <option value="6º Ano" >6º Ano </option>
                 

                  </select>
              </div>  <span class="glyphicon glyphicon-hand-left" aria-hidden="true"></span>
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
</html>
