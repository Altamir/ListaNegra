@extends('layout.layout')
@section('content')
    <div class="mdl-grid">

        <div class="mdl-cell mdl-cell--3-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
        <div class="mdl-cell mdl-cell--8-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
            <h5 style="padding:5px;">Hostels Cadastrados</h5>
            <div class="background-cinza">
                <!-- Tabela com Hostels cadastrados... -->
                <table class="mdl-data-table mdl-js-data-table mdl-shadow--4dp ">
                    <thead>
                    <tr>
                        <th>Hostel</th>
                        <th>Telefone</th>
                        <th>Cadastrado porh</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($hospedes as $hospede)
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">{{ $hospede->name }}</td>
                            <td>{{ $hospede->telefone }}</td>
                            <td class="mdl-data-table__cell--non-numeric">{{ $hospede->user->name }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <!-- Tabela -->
            </div>
        </div>
    </div>
@endsection