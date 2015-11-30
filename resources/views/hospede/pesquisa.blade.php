@extends('layout.layout')
@section('content')
    <div class="mdl-grid">

        <div class="mdl-cell mdl-cell--3-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
        <div class="mdl-cell mdl-cell--8-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
            <h5 style="padding:5px;">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                    <label class="mdl-button mdl-js-button mdl-button--icon" for="pesquisa">
                        <i class="material-icons">search</i>
                    </label>
                    <div class="mdl-textfield__expandable-holder">
                        <input class="mdl-textfield__input" type="text" id="pesquisa">
                        <label class="mdl-textfield__label" for="sample-expandable">Expandable Input</label>
                    </div>
                </div>
            </h5>
            <div class="background-cinza">
                <!-- Tabela com Hostels cadastrados... -->
                <table class="mdl-data-table mdl-js-data-table mdl-shadow--4dp ">
                    <thead>
                    <tr>
                        <th>Hospede</th>
                        <th>Cadastrado Por</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($hospedes))
                        @foreach ($hospedes as $hospede)
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">{{ $hospede->name }} </td>
                                <td class="mdl-data-table__cell--non-numeric">{{ $hospede->user->name }}</td>
                                <td>
                                    <a href="{{ route('hospede.show',['id'=>$hospede->id])}}" class="mdl-button mdl-js-button mdl-button--primary">
                                        Detalhes
                                    </a>
                                    <a href="{{ route('hospede.edit',['id'=>$hospede->id])}}"  class="mdl-button mdl-js-button mdl-button--primary">
                                        Editar
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
                <!-- Tabela -->
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <script type="text/javascript">
        function postAndRedirect(url, postData, method) {
            if (method === undefined) {
                method = 'POST';
            }
            var postFormStr = "<form method='"+method+"' action='" + url + "'>\n";
            for (var key in postData) {
                if (postData.hasOwnProperty(key)) {
                    if (postData[key] !== undefined && postData[key] !== null) {
                        postFormStr += "<input type='hidden' name='" + key + "' value='" + postData[key] + "' />";
                    }
                }
            }
            postFormStr += '<input type="hidden" name="_token" value="{{ csrf_token() }}">'
            postFormStr += "</form>";
            var formElement = $(postFormStr);
            $('body').append(formElement);
            $(formElement).submit();
        }

        $(document).ready(function(){
            $('#pesquisa').keypress(function(e){

                var tecla = (e.keyCode?e.keyCode:e.which);

                if(tecla == 13){

                    campo = $('#pesquisa').val();

                    url = "{{ route('hospede.pesquisa-post') }}";

                    postData = {
                        name: campo,
                    }
                    method = "POST";

                    postAndRedirect(url, postData, method);
                }


            })
        });




    </script>
@endsection