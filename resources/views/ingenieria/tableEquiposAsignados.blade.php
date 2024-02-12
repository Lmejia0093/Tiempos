@extends('layouts.app')

@section('content')
    <div class="container">
    <h1>ordenes asignadas por equipos</h1>
    <div class="mb-3 mt-3 table-responsive">
        <table class="table table-bordered  table-sm">
            <thead class="thead-dark ">
                <tr>

                    <th>Equipo</th>
                    <th>Maquina</th>
                    <th>Ord</th>
                    <th>TIempo Ciclo</th>
                    <th>Accion </th>
                   
                </tr>
            </thead>
            <tbody>
                <tr>

                    <td>EM1</td>
                    <td>1</td>
                    <td>222222222</td>
                    <td>320</td>
                    <td><a class="btn btn-warning" href="#">Ver</a></td>
                   
                </tr>


            </tbody>
        </table>
    
</body>
</html>

@endsection