@extends('layout.layout')
@section('content')
    <div class="mdl-grid">

        <div class="mdl-cell mdl-cell--3-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
        <div class="mdl-cell mdl-cell--8-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
            <h5 style="padding:5px;">Rotulos</h5>

            <button id="btnNovo" class="mdl-button mdl-js-button mdl-button--primary">
                Novo rotulo
            </button>
            <hr>
            <div class="background-cinza">
                <!-- Tabela com rotulos cadastrados... -->
                <table class="mdl-data-table mdl-js-data-table mdl-shadow--4dp ">
                    <thead>
                    <tr>
                        <th>Rotulos</th>
                        <th>Cor</th>
                        <th class="mdl-data-table__cell--non-numeric">Opções</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($rotulos as $rotulo)
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">{{ $rotulo->name }}</td>
                            <td class="mdl-data-table__cell--non-numeric" style="color:{{$rotulo->cor}}">{{ $rotulo->cor }}</td>
                            <td>
                                <a href="{{ route('rotulo.show',['id'=>$rotulo->id])}}" class="mdl-button mdl-js-button mdl-button--primary">
                                    Detalhes
                                </a>
                                <a href="{{ route('rotulo.edit',['id'=>$rotulo->id])}}"  class="mdl-button mdl-js-button mdl-button--primary">
                                    Editar
                                </a>
                                <a href="{{ route('rotulo.del',['id'=>$rotulo->id])}}" class="mdl-button mdl-js-button mdl-button--primary">
                                    Apagar
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <!-- Tabela -->
            </div>
        </div>
    </div>
@endsection
@section('script')

    <script type="text/javascript">

        document.getElementById("btnNovo").addEventListener("click",function() {
            window.location.href = "{{route('rotulo.create')}}";
        });

    </script>
@endsection