var erros = [];

function verificaNomeUserExiste(nome)
{
    var retorno;
    $.ajax({
        url: "/validaUser/"+nome,
        type: "GET",
        dataType: "text",
        async: false,
        }).done(function(resposta) {
            console.log(resposta);
            retorno = resposta;
            
        }).fail(function(jqXHR, textStatus ) {
            console.log("Request failed: " + textStatus);
        })
        return retorno;
}
    
function validaNome()
{
    var nome = document.getElementById('name');
            
    if(nome.value.length < 3 ){
        if(nome.value == ''){
            erros.push('Preencha o nome ') 
        }else{
            erros.push('O nome deve ter mais de 3 caracteres ') 
        }
        return false;
    }else{
                
        if(verificaNomeUserExiste(nome.value) == '1'){
            erros.push('O Nome '+nome.value+' já cadastrado ');
            return false;
        }else{
            console.log('O nome '+nome.value+' Permitido...');
            return true;
        }
                
    }
}

function  RemoverCharEspecial(valor)
{
      return valor.replace(/[^0-9]+/g,'');
}

function validaTelefone()
{
    var $this = $('#telefone');
    var tel = RemoverCharEspecial($this.val());
    if(tel == ''){
        erros.push('Preencha o telefone');
    }else{
        if(tel.split("").length < 9){
            erros.push('Numero de telefone invalido ');
        }else{
            $this.parent('div').removeClass('is-invalid').addClass('is-dirty');
        }
    }
}

function validEmail()
{
    var email = $('#email');
   
    if(email.val() == ''){
        
        erros.push('Preencha o email ');
    }else{
        var parte = email.val().split('@');
        if(parte.length == 2){
            var sub = parte[1].split('.');
            console.log(sub);
        }else{
           erros.push('Email invalido '); 
        }
       // console.log(parte);
        //console.log(erros);
    }
}

function validaDescricao()
{
    var descr = $('#descri');
    if(descr.val() ==''){
        erros.push('Descrição não deve estar vazio ');
    }
}

    
    
$('#telefone').blur(function()
{
    validaTelefone();
});

$('#name').blur(function()
{
    var $this = $(this);
    if(!validaNome()){
        $this.parent('div').addClass('is-invalid');
    }
});
    
jQuery(function($)
{
    $("#telefone").mask("(99) 9999-9999?");
});
