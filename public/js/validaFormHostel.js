function ValidaCampos()
{
    document.getElementById('erros').style.display = "none";
    erros = [];
    validaNomeUser();
    validaTelefone();
    validEmail();
    validaDescricao();
    //computa erros e apresenta
    if(erros.length > 0){
        var divErro =  document.getElementById('erros');
        document.getElementById('erros').innerHTML = "<span>Erros: "+erros+" </span>";
        divErro.style.display = "inline";
    }else{
        $('#form').submit();
    }
}



$('#name').blur(function()
{
    erros = [];
    var $this = $(this);
    document.getElementById('erros').style.display = "none";
    if(!validaNomeUser()){
        var divErro =  document.getElementById('erros');
        document.getElementById('erros').innerHTML = "<span>Erros: "+erros+" </span>";
        divErro.style.display = "inline";
        $this.parent('div').addClass('is-invalid');
    }
});

document.getElementById('erros').style.display = "none";
document.getElementById("salvar").addEventListener("click", ValidaCampos);