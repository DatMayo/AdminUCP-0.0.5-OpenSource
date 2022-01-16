@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')

    <div class="card-body">

        <table class="table table-hover table-dark">
            <thead>
            <tr>
                <th>Frage 1</th>
                <th>Frage 2</th>
                <th>Frage 3</th>
                <th>Frage 4</th>
                <th>Frage 6</th>
                <th>frage 7 </th>
                <th>Frage 8 </th>
                <th>Frage 9 </th>
                <th>Frage 10</th>
                <th>Bearbeiten</th>
                <th>Löschen</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($whitelist as $whitelist)
                
                <tr> <td>{{ $whitelist->quest1 }}</td> </tr>
                    <td>{{ $whitelist->quest2 }}</td>
                    <td>{{ $whitelist->quest3 }}</td>
                    <td>{{ $whitelist->quest4 }}</td>
                    <td>{{ $whitelist->quest5 }}</td>
                    <td>{{ $whitelist->quest6 }}</td>
                    <td>{{ $whitelist->quest7 }}</td>
                    <td>{{ $whitelist->quest8 }}</td>
                    <td>{{ $whitelist->quest9 }}</td>
                    <td>{{ $whitelist->quest10 }}</td>
                    <td>
                        <a href="{{ url('edit-whitelist/'.$whitelist->id) }}" class="btn btn-primary btn-sm">Bearbeiten</a>
                    </td>
                    <td>
                        <a href={{url('delete-whitelist/'.$whitelist->id)}}"" class="btn btn-danger btn-sm">Löschen</a>
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
        <b>Version</b> 0.0.1 alph
    </div>


@stop
