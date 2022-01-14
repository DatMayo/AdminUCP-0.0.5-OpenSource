@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
    <center><p>Programmierungsfortschritt</p></center>
    <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 3%;" aria-valuenow="3" aria-valuemin="0" aria-valuemax="100">3%</div>
    </div>
    <center>
    <br>
    <div class="col-md-12">
        <br>
        <p>Alles was hier zu sehen ist; Unterliegt der Verschwiegenheit!</p>
        <a href="team" class="btn btn-outline-success">Team</a>
        <a href="#" class="btn btn-outline-success">Accounts</a>
        <a href="characters" class="btn btn-outline-success">Charaktere</a>
        <a href="fahrzeug" class="btn btn-outline-success">Fahrzeuge</a>
        <a href="fragebogen" class="btn btn-outline-success">Fragebogen Whitelist</a>




    </div>

        <div class="col-md-12">
            <br>
            <p>Hinzufügen von Elementen</p>
            <a href="add-team" class="btn btn-outline-success">Teammitglied Hinzufügen</a>
            <a href="add-account" class="btn btn-outline-success">Account hinzufügen</a>
            <a href="add-characters" class="btn btn-outline-success">Charaktere hinzufügen</a>
            <a href="fragebogen-edit" class="btn btn-outline-success">Fragebogen Whitelist bearbeiten</a>




        </div>
    </center>

@stop



@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop

@section('footer')
    <a href="admin">Adminbereich</a> | <a href="support/login">Supportbereich</a> | <b>Version</b> 0.0.1 alpha
    <div class="float-right d-none d-sm-inline-block">
        | <strong>Copyright &copy; 2022 <a href="#">CLCUCP</a>.</strong>
        All rights reserved.
    </div>


@stop
