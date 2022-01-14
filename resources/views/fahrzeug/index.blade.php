@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>CyberLifeCity 2022 UCP</h1>
@stop

@section('content')
    <div class="card-body">

        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Charakter ID</th>
                <th>Modell</th>
                <th>Kennzeichen</th>
                <th>Eingeparkt</th>
                <th>Tankstand</th>
                <th>Tacho/Kilometer</th>
                <th>Bearbeiten</th>
                <th>Löschen</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($fahrzeug as $cars)
                <tr>
                    <td>{{ $cars->charId }}</td>
                    <td>{{ $cars->model }}</td>
                    <td>{{ $cars->numberPlate }}</td>
                    <td>{{ $cars->parked}}</td>
                    <td>{{ $cars->fill }}</td>
                    <td>{{ $cars->km }}</td>
                    <td>
                        <a href="{{ url('edit-team/'.$cars->id) }}" class="btn btn-primary btn-sm">Bearbeiten</a>
                    </td>
                    <td>
                        <a href="" class="btn btn-danger btn-sm">Löschen</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@stop



@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

@section('footer')
    <strong>Copyright &copy; 2022 <a href="#">CLCUCP</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 0.0.1 alpha
    </div>


@stop
