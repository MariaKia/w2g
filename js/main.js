function validaEmail(email){
    var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return regex.test(email);
}


function limitaCaracteres(txt,tam){
	if (str.length > tam) {
		str = str.substring(0,tam);
	} 
}


function pressionado(){
	if ($('input[name=gender]:checked').length > 0) {
    // do something here
    /*
	    input limits it to input tags.
		[name=gender] limits it to tags with the name gender within the previous group.
		:checked limits it to checkboxes/radio buttons that are selected within the previous group.
	*/
	}
}


function validaSenhaCriada(senha){
    if (senha.length < 6) {
        return("A senha digitada deve ter pelo menos 6 caracteres");
    } else if (senha.length > 50) {
        return("A senha digitada é muito longa");
    } else if (senha.search(/\d/) == -1) {
        return("A senha digitada precisa possuir números");
    } else if (senha.search(/[a-zA-Z]/) == -1) {
        return("A senha digitada deve possuir letras");
    } else if (senha.search(/[^a-zA-Z0-9\!\@\#\$\%\^\&\*\(\)\_\+]/) != -1) {
        return("A senha digitada não deve conter caracteres especiais");
    }
    return("valido");
}


function validaLogin(){
    var login=$("#login");
    var em = login.val();
    if (!validaEmail(em)){
        login.addClass('error');
        //window.alert("O login deve ser um e-mail!");// O que acontece caso seja invalido
    } else {
        //o que acontece caso seja válido        
    }

    var senha = $("#senha");
    var sen = senha.val();

}

function validaCadastro(){
    var nome = $("#cadastro-nome");
    var sobrenome = $("#cadastro-sobrenome");
    var email = $("#cadastro-email");

    if (nome.val().length <=0){//valida nome
        nome.addClass('error');
        window.alert("Nome não pode estar vazio!");
        return false;
    }
    if (sobrenome.val().length <=0){//valida nome
        window.alert("Sobrenome não pode estar vazio!");
        return false;
    }
    if (!validaEmail(email.val())){//valida nome
        window.alert("O email deve ser válido!");
        return false;
    }

    var umPressionado = $("input[name='unidade']").is(':checked');
    if (!umPressionado){
        window.alert("Pelo menos uma unidade deve ser selecionada!"); 
        return false;       
    }

    umPressionado = $("input[name='curso']").is(':checked');
    if (!umPressionado){
        window.alert("Pelo menos um curso deve ser selecionado!");   
        return false;     
    }

    var senha = $("#cadastro-senha");
    var confirmaSenha = $("#cadastro-confirma-senha");

    var validaSenha = validaSenhaCriada( senha.val() );
    if (validaSenha!='valido'){
        window.alert(validaSenha);
        return false;
    }

    if (senha.val() != confirmaSenha.val()){
        window.alert("Senha não está compatível com a confirmação da senha");
        return false;
    }

    if (!$('#termos').is(":checked")){
        window.alert("Aceite os termos!!!");
        return false;
    }

    /*
        Cria conta!!!
    */
    return true;
}

function limitaCharPost(foo){
        var sel = $("#" + foo);
        console.log(sel.val());
        sel.val(sel.val().substring(0,200));
}
