@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>CyberLifeCity 2022 UCP</h1>
@stop

@section('content')
    <div class="card-body">

        <table class="col-md-12">
            <thead>
            <tr>
                <th>Frage 1</th>
                <th>Frage 2</th>
                <th>Frage 3</th>
                <th>Frage 4</th>
                <th>Frage 5</th>
                <th>Frage 6</th>
                <th>Frage 7</th>
                <th>Frage 8</th>
                <th>Frage 9</th>
                <th>Frage 10</th>
                <th>Aktionen</th>

            </tr>
            </thead>
            <tbody>
            @foreach ($whitelist as $fragen)
                <tr>
                    <td>{{ $fragen->frage1 }}</td>
                    <td>{{ $fragen->frage2 }}</td>
                    <td>{{ $fragen->frage3 }}</td>
                    <td>{{ $fragen->frage4}}</td>
                    <td>{{ $fragen->frage5 }}</td>
                    <td>{{ $fragen->frage6 }}</td>
                    <td>{{ $fragen->frage7 }}</td>
                    <td>{{ $fragen->frage8 }}</td>
                    <td>{{ $fragen->frage9 }}</td>
                    <td>{{ $fragen->frage10 }}</td>
                    <td>
                        <a href="{{ url('edit-whitelist/'.$fragen->id) }}" class="btn btn-primary btn-sm">Bearbeiten</a>
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
