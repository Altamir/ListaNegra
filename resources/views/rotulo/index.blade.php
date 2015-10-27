@extends('layout.layout')
@section('content')
    <div class="mdl-grid">

        <div class="mdl-cell mdl-cell--3-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
        <div class="mdl-cell mdl-cell--8-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
            <h5 style="padding:5px;">Rotulos</h5>
            <div class="background-cinza">
                <!-- Tabela com rotulos cadastrados... -->
                <table class="mdl-data-table mdl-js-data-table mdl-shadow--4dp ">
                    <thead>
                    <tr>
                        <th>Rotulos</th>
                        <th>Cor</th>
                        <th>Descrição Default</th>
                        <th>Opções</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($rotulos as $rotulo)
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">{{ $rotulo->name }}</td>
                            <td class="mdl-data-table__cell--non-numeric">{{ $rotulo->cor }}</td>
                            <td class="mdl-data-table__cell--non-numeric">{{ $rotulo->descri }}</td>
                            <td><a href="{{ route('rotulo.edit',['id'=>$rotulo->id])}}">Editar</a> | <a>Apagar</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <!-- Tabela -->
            </div>
        </div>
    </div>
@endsection