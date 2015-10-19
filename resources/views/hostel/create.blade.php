@extends('layout.layout')
@section('head')
<style>
        .lista-card-square.mdl-card {
          height: 100%;
        }
        .lista-card-square > .mdl-card__title {
          color: #fff;
          height: 275px;
          background:
            url('https://myetalent.s3-us-west-2.amazonaws.com/linker/img/novo-usuario--placeholder.png') bottom right 15% no-repeat #46B6AC;
        }
        .mdl-card
        {
            width:500px;
        }
        .mdl-textfield--floating-label{
            width:500px;
        }
        .erros{
            color:red;
        }
        </style>
@endsection
@section('content')
<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--4-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
    <div class="mdl-cell mdl-cell--8-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
        <div class="lista-card-square mdl-card mdl-shadow--2dp">
            <div class="mdl-card__title mdl-card--expand">
                <h2 class="mdl-card__title-text">Cadastro Hostel</h2>
            </div>
            <div class="mdl-card__supporting-text">
               <form action="#">
                    <div class="erros" id='erros'>
                        
                    </div>  
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="name" />
                        <label class="mdl-textfield__label" for="name">Nome:</label>
                    </div>
                      
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="email" id="email" />
                        <label class="mdl-textfield__label" for="email">Email</label>
                    </div>
                     
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="phone"  pattern="-?[0-9]*(\.[0-9]+)?" id="telefone" />
                        <label class="mdl-textfield__label" for="telefone">Telefone</label>
                    </div>
                     
                    <div class="mdl-textfield mdl-js-textfield  mdl-textfield--floating-label">
                        <textarea class="mdl-textfield__input" type="text" rows= "5" cols="70"  id="descri" ></textarea>
                        <label class="mdl-textfield__label" for="descri" >Descrição</label>
                    </div>
                      
                </form>
            </div>
            <div class="mdl-card__actions mdl-card--border" >
                <div id='btnSalvar'>
                   <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" id='salvar'>
                        Salvar
                    </a> 
                    <div class="mdl-tooltip" for="btnSalvar">
                    Salvar novo Hostel.
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript" DEFER="DEFER">
    function ValidaCampos()
        {
            document.getElementById('erros').style.display = "none";
            var erros = [];
            var nome = document.getElementById('name');
            if(nome.value.length < 3 ){
                if(nome.value == ''){
                    erros.push('Preencha o nome ') 
                }else{
                    erros.push('O nome deve ter mais de 3 caracteres ') 
                }
                
            }
            var email = document.getElementById('email');
            if(email.value == ''){
                erros.push('Preencha o email ');
            }
            var telefone = document.getElementById('telefone');
            if(telefone.value == ''){
                erros.push('Preencha o telefone');
            }
            
            if(erros.length > 0){
                var divErro =  document.getElementById('erros');
                document.getElementById('erros').innerHTML = "<span>Erros: "+erros+" </span>"; 
                divErro.style.display = "inline";
            }
            
        }
        
        document.getElementById('erros').style.display = "none";
 
         
        var btn = document.getElementById("salvar");
 
        btn.addEventListener("click", ValidaCampos);
</script>
@endsection