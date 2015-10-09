@extends('layout.layout')
@section('content')
        <div class="mdl-cell mdl-cell--4-col espaco-interno-300">
	        <h5 style="padding:5px;">Hostels Cadastrados</h5>
            <div class="background-cinza">
				<!-- Tabela -->
				<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp ">
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
@endsection