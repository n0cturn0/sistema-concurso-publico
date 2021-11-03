/*********************************************************************/
/*********************** VALIDADORES INDIVIDUAIS *********************/
/*********************************************************************/
/** 
 * Verifica se o CPF é válido de acordo com a funcao importada do 
 * site da receita federal e se está preenchido
 * @param {String} theCpf no formato 999.999.999-99
 * @returns {Boolean}
 */
function ifCpfValido( theCpf ) {        
    theCpf.style.border = "2px solid #ff0000";
    theCpf.style.color = "#ff0000";
    if(!validaCpf(theCpf.value)){
        alert("Campo \'CPF \' incorreto.");
        theCpf.focus();
        return false;
    }else if (vazio(theCpf.value)){
        alert("Campo \'CPF \' deve ser preenchido.");
        theCpf.focus();
        return false;
    }
    theCpf.style.border = "";
    theCpf.style.color = "";
    return true;
}

/**
 * Verifica se um e-mail é valido
 * @param {String} theMail
 * @returns {Boolean}
 */
function ifMailValido( theMail ) {        
    theMail.style.border = "2px solid #ff0000";
    theMail.style.color = "#ff0000";
    if(!emailValido(theMail.value)){
        alert("Endereço de e-mail incorreto1s.");
        theMail.focus();
        return false;
    }
    theMail.style.border = "";
    theMail.style.color = "";
    return true;

}

/**
 * Funcao identica a funcao ifMailValido, so foi assim criada para ser utilizada
 * no formulario e nao informa dois avisos identicos
 * @param {String} theMail
 * @returns {Boolean}
 */
function ifMailValidoForm( theMail ) {        
    return ifMailValido(theMail);
}



/**
 * Verifica dois campos sao iguais e nao vazios, caso nao seja, apaga ambos e 
 * seta para o primeiro
 * @param {type} id1
 * @param {type} id2
 * @param {type} nome
 * @returns {Boolean}
 */
function ifCamposIguais( id1,id2,nome ) {        
    if(stringsIguais(id1.value,id2.value) && 
            !vazio(id1.value) && !vazio(id2.value) ){
        id1.style.border = "";
        id1.style.color = "";
        id2.style.border = "";
        id2.style.color = "";
        return true;
    }
    alert("Os campos "+nome+" não correspondem.");
        id1.style.border = "2px solid #ff0000";
        id1.style.color = "#ff0000";
        id2.style.border = "2px solid #ff0000";
        id2.style.color = "#ff0000";
        id1.focus();
        return false;
}

/**
 * Verifica se as senha são validas
 * @param {type} s1
 * @param {type} s2
 * @returns {Boolean}
 */
function ifSenhasValidas(s1, s2) {
    s1.style.border = "2px solid #ff0000";
    s1.style.color = "#ff0000";
    if ( vazio(s1.value)){
        alert("Campo \'Senha \' deve ser preenchido.");
        s1.focus();
        return false;        
    }else if ( !alfanumerico(s1.value)){
        alert("Campo \'Senha \' deve conter somente caracters alfanuméricos (A-Z,a-z e 0-9).");
        s1.focus();
        return false;  
    }else if ( s1.value.length < 6){
        alert("Campo \'Senha \' deve conter no mínimo 6 caracteres de (A-Z,a-z e 0-9).");
        s1.focus();
        return false; 
    //Compara senhas
    }else if ( !stringsIguais(s1.value,s2.value) ){
        s2.style.border = "2px solid #ff0000";
        s2.style.color = "#ff0000";
        alert("As senhas não conferem.");
        s1.focus();
        return false; 
    }
    s1.style.border=s2.style.border = "";
    s1.style.color=s2.style.color = "";
    return true;
}


 
/**
 * Verifica se o CEP é valido e nao esta vazio
 * @param {type} id
 * @returns {Boolean}
 */
function ifCepValido( id ){
    id.style.border = "2px solid #ff0000";
    id.style.color = "#ff0000";
    if(!CEPValido(id.value)){
        alert("Campo CEP incorreto.");
        id.focus();
        return false;
    }
    id.style.border = "";
    id.style.color = "";
    return true;
}

/**
 * Retorna true se o campo nao for vazio e  conter somente numeros
 * @param {type} id
 * @param {type} nome
 * @returns {Boolean}
 */
function ifNaoVazioSomenteNumeros( id,nome ){
    id.style.border = "2px solid #ff0000";
    id.style.color = "#ff0000";
    if(somenteNumeros(id.value)){
        alert("Campo \'"+nome+"\' não pode conter somente números.");
        id.focus();
        return false;
    }else if (vazio(id.value)){
        alert("Campo \'"+nome+"\' deve ser preenchido.");
        id.focus();
        return false;
    }
    id.style.border = "";
    id.style.color = "";
    return true;
}


/**
 * Retorna true se o campo nao for vazio e  conter somente numeros
 * @param {type} id
 * @param {type} nome
 * @returns {Boolean}
 */
function docidtValido( id ){
    id.style.border = "2px solid #ff0000";
    id.style.color = "#ff0000";
    if(!somenteNumeros(id.value)){
        alert("Campo Doc Idt deve conter somente números.");
        id.focus();
        return false;
    }
    id.style.border = "";
    id.style.color = "";
    return true;
}

/**
 * Valida uma data completa valida no formato DD/MM/AAAA e se o ano esta dentro
 * do intervalo passado
 * @param {type} id
 * @param {type} anoInicio
 * @param {type} anoFim
 * @returns {Boolean}
 */
function validaNascimento( id, anoInicio, anoFim) {        
    id.style.border = "2px solid #ff0000";
    id.style.color = "#ff0000";
    var ano = id.value.substring(6,10);
    if (vazio(id.value)){
        alert("Campo \'Nascimento \' deve ser preenchido.");
        id.focus();
        return false; 
    }else if (!dataCompletaValida(id.value)){
        alert("Campo \'Nascimento \' incorreto.");
        id.focus();
        return false;                
    }else if(!valorNoIntervalo(ano,anoInicio,anoFim)){
        alert("Idade não aceitável.");
        id.focus();
        return false;
    }
    id.style.border = "";
    id.style.color = "";
    
    return true;
}

/*********************************************************************/
/*********************** VALIDADORES DE FORMULARIOS ******************/
/*********************************************************************/
/**
 * Valida os campos do formuário de cadastro
 * @param {type} f
 * @returns {Boolean}
 */
function validaFormCadastro( f ) {
	//alert("alerta 1");
    with( f ){
        //NOME
        if (!ifNaoVazioSomenteNumeros(ijs_nome,"Nome") ) {
            return false;
        //Data de nascimento
        }else if(!validaNascimento(ijs_nascimento,"1900","1996")){
            return false;            
        //CPF
        }else if( !ifCpfValido(ijs_cpf)){
            return false;      
         //DOC IDT
        }else if(!docidtValido(ijs_docidt)){    
            return false;      
        //logradouro
        }else if  ( !ifNaoVazioSomenteNumeros(ijs_logradouro,"Logradouro")){
            return false;
        //Numero
        }else if ( vazioFormataCampo(ijs_num)){
            alert("Campo \'Num \' deve ser preenchido.");
            ijs_num.focus();
            return false;
        //Bairro
        }else if ( vazioFormataCampo(ijs_bairro)){
            alert("Campo \'Bairro \' deve ser preenchido.");
            ijs_bairro.focus();
            return false;
        //CEP
        }else if ( !ifCepValido(ijs_cep) ){
            return false;
        //COMPLEMENTO
        }else if ( somenteNumeros(ijs_complemento.value)){
            alert("Campo \'Comlemento\' não pode conter somente números.");
            ijs_complemento.focus();
            return false;        
        //Cidade
        }else if ( vazioFormataCampo(ijs_cidade)){
            alert("Campo \'Cidade \' deve ser preenchido.");
            ijs_cidade.focus();
            return false;
        //E-mail
        }else if (!ifMailValido(ijs_mail)){
            return false;
       //Compara e-mail
        }else if ( !ifCamposIguais(ijs_mail,ijs_mailc,"E-mail") ){
            return false;
        //Telefone
        }else if ( vazioFormataCampo(ijs_telefone)){
            alert("Campo \'Telefone \' deve ser preenchido com um \n\
                número próprio ou para contato.");
            ijs_telefone.focus();
            return false;
        //Celular
        }else if ( vazioFormataCampo(ijs_celular)){
            alert("Campo \'Celular \' deve ser preenchido.");
            ijs_celular.focus();
            return false;
        //Senha
        }else if ( !ifSenhasValidas(ijs_senha,ijs_senha2)){
            return false;        
        //Senha
        }else if ( vazio(ijs_captcha.value)){
            alert("Captcha deve ser preenchido.");
            ijs_captcha.focus();
            return false;                
        }
	}
	//alert("alerta 2");
	var p = document.createElement("input");
	f.appendChild(p);
	p.name = "p";
	p.type = "hidden";
	p.value = hex_sha512(ijs_senha.value);
	//alert(p.value);
	//alert("alerta 3");
	f.submit();
    return true;
}

/**
 * Valida o formulario de login
 * @param {type} f
 * @returns {Boolean}
 */
function validaFormLogin( f ) {        
    with( f ){       
      if( !ifCpfValido(cpf)){
        return false;      
      }else if(vazioFormataCampo(senha)){
          alert("Campo \'Senha \' deve ser preenchido.");
          return false;
      }
      return true;
    }
    return true;
}

function validaFormInscricao( f ) {

     with( f ){    

	// Ano da matricula
	hoje = new Date();
	ano_matricula = hoje.getFullYear() + 1;
	// Ano base e limite para o 6 ano
	ano_base_6ano = ano_matricula - 13;
	ano_lim_6ano = ano_matricula - 10;
	// Ano base e limite para o 1 ano  
	ano_base_1ano = ano_matricula - 18; 
	ano_lim_1ano = ano_matricula - 15; 
        
	//CONCURSO
        if ( insc_concurso_id.value === "0"){
            alert("Escolha o concurso de admissão.");
            insc_concurso_id.focus();
            return false;
        //NOME         
        }else if (!ifNaoVazioSomenteNumeros(insc_nome,"Nome") ) {
            return false;
        //Data de nascimento ao 6 ano
	}else if(insc_concurso_id.value === "2" && !validaNascimento(insc_nascimento,ano_base_6ano,ano_lim_6ano)){
	    return false;
        //Data de nascimento ao 1 ano
	}else if(insc_concurso_id.value === "3" && !validaNascimento(insc_nascimento,ano_base_1ano,ano_lim_1ano)){
            return false;
        //DOC IDT
        }else if(!docidtValido(insc_docidt)){
            return false;      
        }else if ( insc_declaracao.value!=="1" ){
            alert("Necessário solicitar requerimento de inscrição.");
            insc_declaracao.focus();
            return false;     
        }else {
            return true;
        }
    }
    return false;
}

function validaFormPesqInsc( f ) {        
    with( f ){       
      if(vazio(p_cpf.value)){
        alert("Campo \'CPF \' deve ser preenchido.");
        p_cpf.focus();
        return false;      
      }else if(!validaCpf(p_cpf.value)){
            alert("Campo \'CPF \' incorreto.");
            p_cpf.focus();
            return false; 
       }        
    }
    return true;
}

function validaFormUpdateSenha( f ) {    
 
    with( f ){       
        //Senha
        if ( vazio(senha_atual.value)){
            alert("Campo \'Senha \' deve ser preenchido.");
            senha_atual.focus();
            return false;        
       }else if ( !alfanumerico(senha_nova.value)){
           alert("Campo \'Senha \' deve conter somente caracters alfanuméricos (A-Z,a-z e 0-9).");
           senha_nova.focus();
           return false;                
       //Compara senhas
       }else if ( !stringsIguais(senha_nova.value,senha_nova2.value) ){
           alert("As senhas não conferem.");
           senha_nova.focus();
           return false;                    
       }
    }
	
	// Create a new element input, this will be our hashed password field. 
	var s1 = document.createElement("input");
	var s2 = document.createElement("input");

	// Add the new element to our form. 
	f.appendChild(s1);
	s1.name = "s1";
	s1.type = "hidden";
	s1.value = hex_sha512(senha_atual.value);
	//alert(s1.value);

	f.appendChild(s2);
	s2.name = "s2";
	s2.type = "hidden";
	s2.value = hex_sha512(senha_nova.value);
	//alert(s2.value);

	// Make sure the plaintext password doesn't get sent. 
	senha_atual.value = "";
	senha_nova.value = "";
	f.submit();
	return true;
}

function validaFormRecuperaSenha( f ) {

	with( f ){ 
		//CPF
        if( !ifCpfValido(recupera_cpf)){
            return false;      
        //E-mail
        }else if (!ifMailValido(recupera_mail)){
            return false;
		//Data de nascimento
        }else if(!validaNascimento(recupera_dtnasc,"1900","1997")){
            return false; 
		}
    }
	
	// Create a new element input, this will be our hashed password field. 
	var c = document.createElement("input");
	var m = document.createElement("input");
	var d = document.createElement("input");

	// Add the new element to our form. 
	f.appendChild(c);
	c.name = "c";
	c.type = "hidden";
	c.value = recupera_cpf.value;
	//alert(c.value);

	f.appendChild(m);
	m.name = "m";
	m.type = "hidden";
	m.value = recupera_mail.value;
	//alert(m.value);

	// Add the new element to our form. 
	f.appendChild(d);
	d.name = "d";
	d.type = "hidden";
	d.value = recupera_dtnasc.value;
	//alert(d.value);

	// Make sure the plaintext password doesn't get sent.
	recupera_cpf.value = "";
	recupera_mail.value = "";
	recupera_dtnasc.value = "";

	f.submit();
	return true;

}

/* 
 * Copyright (C) 2013 peredur.net
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

function formhash(form, password) {
    // Create a new element input, this will be our hashed password field. 
    var p = document.createElement("input");

    // Add the new element to our form.
    form.appendChild(p);
    p.name = "p";
    p.type = "hidden";
    p.value = hex_sha512(password.value);

	//alert(p.value);

    // Make sure the plaintext password doesn't get sent. 
    password.value = "";

    // Finally submit the form. 
    form.submit();
}

function regformhash(form, uid, cpf, password, conf) {
    // Check each field has a value
    if (uid.value == '' || cpf.value == '' || password.value == '' || conf.value == '') {
        alert('Tente novamente');
        return false;
    }
    
    // Check the username
    //re = /^\w+$/; 
    //if(!re.test(form.username.value)) { 
    //    alert("Username must contain only letters, numbers and underscores. Please try again"); 
    //    form.username.focus();
    //    return false; 
    //}
    
    // Check that the password is sufficiently long (min 6 chars)
    // The check is duplicated below, but this is included to give more
    // specific guidance to the user
    if (password.value.length < 6) {
        alert('Passwords must be at least 6 characters long.  Please try again');
        form.password.focus();
        return false;
    }
    
    // At least one number, one lowercase and one uppercase letter 
    // At least six characters 
    //var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/; 
    //if (!re.test(password.value)) {
    //    alert('Passwords must contain at least one number, one lowercase and one uppercase letter.  Please try again');
    //    return false;
    //}
    
    // Check password and confirmation are the same
    if (password.value != conf.value) {
        alert('Your password and confirmation do not match. Please try again');
        form.password.focus();
        return false;
    }
        
    // Create a new element input, this will be our hashed password field. 
    var p = document.createElement("input");

    // Add the new element to our form. 
    form.appendChild(p);
    p.name = "p";
    p.type = "hidden";
    p.value = hex_sha512(password.value);

    // Make sure the plaintext password doesn't get sent. 
    password.value = "";
    conf.value = "";

    // Finally submit the form. 
    form.submit();
    return true;
}



