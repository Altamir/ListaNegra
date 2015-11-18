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
                    <h2 class="mdl-card__title-text">Cadastro Hospede</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach ($errors->all() as $erro)
                                <li>{{$erro }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <div class="erros" id='erros'>

                    </div>
                    {!! Form::open(['route' => 'hospede.store', 'id'=> 'form']) !!}
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" required="required" type="text" id="name" name="name" value="{{old('name')}}" />
                        <label class="mdl-textfield__label" for="name">Nome:</label>
                    </div>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <select name="documento.name" class="mdl-textfield__input">
                            @foreach($nameDocs as $nameDoc)
                                <option value="{{$nameDoc}}">{{$nameDoc}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" required="required" type="number" id="documento.num" name="documento.num" value="{{old('documento.num')}}" />
                        <label class="mdl-textfield__label" for="documento.num">Numero Documento:</label>
                    </div>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="tel"  pattern="-?[0-9]*(\.[0-9]+)?" maxlength="15"
                               required="required" id="telefone" name="telefone" value="{{ old('telefone')}}" />
                        <label class="mdl-textfield__label" for="telefone">Telefone</label>
                    </div>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <select name="rotulo_id" class="mdl-textfield__input">
                            @foreach($rotulos as $rotulo)
                                <option value="{{$rotulo->id}}">{{$rotulo->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <textarea class="mdl-textfield__input" required="required"
                                  id="descri" name="descri"></textarea>
                        <label class="mdl-textfield__label" for="descri">Descrição:</label>
                    </div>
                    {!! Form::close() !!}
                </div>
                <div class="mdl-card__actions mdl-card--border" >
                    <div id='btnSalvar'>
                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" id='salvar'>
                            Salvar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('js/jquery.maskedinput.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/validateForms.js') }}"></script>
    <script type="text/javascript">
        function ValidaCampos()
        {
            document.getElementById('erros').style.display = "none";
            erros = [];
            validaNomeHospede();
            validaTelefone();

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
            if(!validaNomeHospede()){
                var divErro =  document.getElementById('erros');
                document.getElementById('erros').innerHTML = "<span>Erros: "+erros+" </span>";
                divErro.style.display = "inline";
                $this.parent('div').addClass('is-invalid');
            }
        });

        document.getElementById('erros').style.display = "none";
        document.getElementById("salvar").addEventListener("click", ValidaCampos);

    </script>
@endsection