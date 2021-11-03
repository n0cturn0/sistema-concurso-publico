
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Concursos CMCG</title>
    <meta http-equiv="Content-Language" content="English" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        body {width: 700px;   margin-left: 20px; margin-top: 20px; font-size: 12px; }
        h1 {font-size: 18px;}
        h2{font-size: 14px; line-height: 6px;}         
        h3 {font-size: 18px; line-height: 15px; border-bottom: 1px solid #000; }
        h4 {font-size: 14px; line-height: 22px; border-bottom: 1px solid #000; width: 90%;}
        p {text-align: justify;}

        #corpo { border: 3px solid #000; padding: 10px; }
        .campo { font-weight: bold; line-height: 30px; padding: 5px; }
        .campo_texto { }
        br {line-height: 20px;}
        #foto {width: 3cm; height: 4cm; border: 1px solid; float: right; text-align: center; margin-right: 10px;}
        #info {width:215px; float: left;}
    </style>
</head>
    

<body> 
   
    <div id="corpo">            
         <img src="<?php echo base_url('assets/images/cmsm.jpg') ?>" style="float:left; "/>
        <div style="text-align:center; width: 600px;">
            <h2>MINIST&Eacute;RIO DA DEFESA</h2>
            <h2>EX&Eacute;RCITO BRASILEIRO</h2>
            <h2>DECEx - DEPA</h2>           
            <h2>COLEGIO MILITAR DE CAMPO GRANDE</h2> 
            <h2>Concurso de admissão ao CMCG 2017/2018</h2>
            <h2>CCI - Cartão de Confirmação de Inscri&ccedil;&atilde;o</h2>        
        </div>
         
        <br/>
        <h3>Dados do Candidato</h3>        
        <div id="foto">
            <br/><br/><br/>
            FOTO 3X4            
        </div>
         <?php 
    foreach ($informacao->result() as $row) { ?>
        <label class="campo">Inscri&ccedil;&atilde;o:</label>         
        <label class="campo_texto"><?php echo $row->idcandidatos; ?></label>      
        <br/>
               
        <label class="campo">Nome:</label>               
        <label class="campo_confirma"><?php echo $row->candidato_nome; ?></label>
        <br/>

        <label class="campo">Doc Idt:</label>         
        <label class="campo_confirma"><?php echo $row->identidade; ?></label>      
        <br/>
        
        <label class="campo">Nascimento:</label> 
        <label class="campo_confirma"><?php echo $row->data_nascimento; ?></label>  
        <br/>

		<label class="campo">Candidato ao:</label>         
        <label class="campo_confirma">CACMCG 2017/2018</label>
        <br/>
        
        <h3>Informações adicionais</h3>   
        <div id="info">
            
        </div>
        
        <div id="info">
            
        </div>
        
        <div id="info">
            
        </div>
        
        <br style="clear:both;"/>
        <strong style="color: red;"> *</strong> <label class="campo">Horário de fechamento dos portões e início da Ambientação e das provas, conforme Anexo B do Manual do Candidato.</label>     
        
        <hr/>
        <div style='text-align:center;'>
            Campo Grande,Ms <br/>
            Av Presidente Vargas, 2800, Bairro Coophatrabalho<br/>
            CEP 79.115-80 - Fone 67 3368-4844 -  Ramal 4844</br>
        </div>
    </div>
    <br/>
    <div style='text-align:right;'>
        <a href="javascript:self.print()">[IMPRIMIR]</a>
    </div>
     
    <?php } ?>
</body>
</html>

    	
