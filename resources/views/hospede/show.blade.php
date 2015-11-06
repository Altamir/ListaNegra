@extends('layout.layout')
@section('head')
    <style>
        .lista-card-square.mdl-card {
            height: 100%;
        }

        .lista-card-square > .mdl-card__title {
            color: #fff;
            height: 175px;
            background: url('http://www.myiconfinder.com/uploads/iconsets/128-128-9b64afd076d757d628e53f6ce664ddea.png') bottom right 15% no-repeat #46B6AC;
        }

        .mdl-card {
            width: 500px;
        }

        .mdl-textfield--floating-label {
            width: 500px;
        }

        .erros {
            color: red;
        }
    </style>
@endsection
@section('content')
    <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--4-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
        <div class="mdl-cell mdl-cell--8-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
            <div class="lista-card-square mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title mdl-card--expand">
                    <h2 class="mdl-card__title-text">Hospede</h2>
                </div>
                <div class="mdl-card__supporting-text">

                    {!! Form::open([ 'id'=> 'form']) !!}

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" readonly="readonly" required="required" type="text"
                               id="name" name="name" value="{{$hospede->name}}"/>
                        <label class="mdl-textfield__label" for="name">Nome:</label>
                    </div>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="tel" maxlength="15"
                               required="required" id="telefone" name="telefone" value="{{ $hospede->telefone}}"/>
                        <label class="mdl-textfield__label" for="telefone">Telefone</label>
                    </div>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" readonly="readonly"
                               id="cadastro" name="cadastro" value="{{$hospede->user->name}}"
                        >
                        <label class="mdl-textfield__label" for="cadastro">Cadastrado por</label>
                    </div>
                    <div>
                        <table class="mdl-data-table mdl-js-data-table">

                            <thead>
                            <tr>
                                <th>Rotulos</th>
                                <th>Descricao</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($hospede->rotulos as $rotulo)
                                <tr style="background-color: {{$rotulo->cor}};color: white">
                                    <td class="mdl-data-table__cel--non--numeric">
                                        {{$rotulo->name}}
                                    </td>
                                    <td>
                                        {{$rotulo->pivot->descri}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    {!! Form::close() !!}
                </div>
                <div class="mdl-card__actions mdl-card--border">
                    <div id='btnSalvar'>
                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" id='salvar'>
                            Ok
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')

    <script type="text/javascript">

        document.getElementById("salvar").addEventListener("click", function () {
            window.location.href = "{{route('rotulo')}}";
        });

    </script>
@endsection