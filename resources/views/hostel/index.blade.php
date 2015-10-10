@extends('layout.layout')
@section('content')
    <div class="demo-container mdl-grid">

        <div class="mdl-cell mdl-cell--3-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
        <div class="mdl-cell mdl-cell--8-col">
            <h5 style="padding:5px;">Hostels Cadastrados</h5>
            <div class="background-cinza">
                <!-- Tabela -->
                <table class="mdl-data-table mdl-js-data-table mdl-shadow--4dp ">
                    <thead>
                    <tr>
                        <th>Hostel</th>
                        <th>Descrição</th>
                        <th>Telefone</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($hostels as $hostel)
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">{{ $hostel->usuario->name }}</td>
                            <td>{{ $hostel->descri }}</td>
                            <td>{{ $hostel->telefone }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <!-- Tabela -->
            </div>
        </div>
    </div>
@endsection