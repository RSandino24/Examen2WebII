@extends('layouts.app')

@section('title', 'Lista de Especies')

@section('content')
<div class="container">
    <h1>Especies</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Período</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
            @foreach($especies as $especie)
            <tr>
                <td>{{ $especie->nombre }}</td>
                <td>{{ $especie->periodo }}</td>
                <td>{{ $especie->descripcion }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
