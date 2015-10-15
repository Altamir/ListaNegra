@extends('layout.layout')

@section('head')
<style>

.mdl-card__media > img {
  max-width: 100%;
  
}

.centralizado{
    display: block;
    margin-left: auto;
    margin-right: auto
}

</style>
@endsection

@section('content')


<div class='mdl-grid'>
    
    <div class="mdl-cell mdl-cell--4-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>

    <div class="mdl-card mdl-cell mdl-cell--4-col mdl-cell--3-col-tablet mdl-shadow--3dp ">
        
        <div class="mdl-card__media ">
            <img src="https://lh3.googleusercontent.com/-K17E_frBxmA/VK1kGyS4poI/AAAAAAAAFj4/IR9vR7gf-uc/w506-h407/lista%2Bnegra.png" class='centralizado' alt="Lista Negra" />
        </div>
        
        <div class="mdl-card__title">
            <h1 class="mdl-card__title-text">Bem vindo a Lista Negra de Hospedes</h1>
        </div>
        
        <div class="mdl-card__supporting-text">
            <p>O projeto proposto baseia-se na ideia de usar as informações fornecidas
            pelos hostels para alimentar um sistema central onde alem das informações 
            dos hospedes conterá comentários dos estabelecimentos sobre os fatos ocorridos. 
            Ainda existira a possibilidade de avisar os hostels sobre a tentativa de check in de 
            hospede cadastrado no sistema.</p>
        </div>
        
        <div class="mdl-card__actions mdl-card--border">
            <!-- Place this tag where you want the button to render. -->
            <a class="github-button mdl-button " href="https://github.com/Altamir/listanegra/archive/master.zip" data-style="mega" aria-label="Download Altamir/listanegra on GitHub">Download</a>
        </div>
        
    </div>
</div>

<!-- Place this tag right after the last button or just before your close body tag. -->
<script async defer id="github-bjs" src="https://buttons.github.io/buttons.js"></script>
@endsection