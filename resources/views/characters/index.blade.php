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
                <th>ID</th>
                <th>AccountID</th>
                <th>Whitelist</th>
                <th>Adminrank</th>
                <th>Vorname</th>
                <th>Nachname</th>
                <th>Geld</th>
                <th>Gang</th>
                <th>Gangrang</th>
                <th>Fraktion</th>
                <th>Bearbeiten</th>
                <th>Löschen</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($characters as $character)
                <tr>
                    <td>{{ $character->id }}</td>
                    <td>{{ $character->accountID }}</td>
                    <td>{{ $character->whitelisted }}</td>
                    <td>{{ $character->adminRank }}</td>
                    <td>{{ $character->firstname }}</td>
                    <td>{{ $character->lastname }}</td>
                    <td>{{ $character->money }}</td>
                    <td>{{ $character->gang }}</td>
                    <td>{{ $character->gangrang }}</td>
                    <td>{{ $character->faction }}</td>
                    <td>
                        <a href="{{ url('edit-character/'.$character->id) }}" class="btn btn-primary btn-sm">Bearbeiten</a>
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
        <b>Version</b> 0.0.1 alph
    </div>


@stop
