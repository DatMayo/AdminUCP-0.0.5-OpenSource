@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>CyberLifeCity 2022 UCP</h1>
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif

                <div class="card">
                    <div class="card-body">

                        <form action="{{ url('add-fragebogen') }}" method="POST">
                            @csrf

                            <div class="form-group mb-12">
                                <label for="">Charaktername Vor&Nachname</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Alter deines Charakters</label>
                                <input type="text" name="old" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Was ist VDM?</label>
                                <input type="text" name="vdm" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Was ist RDM?</label>
                                <input type="text" name="rdm" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Was ist ScriptRP?</label>
                                <input type="text" name="srp" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Was ist Roleplay?</label>
                                <input type="text" name="roleplay" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Absenden</button>
                                <button type="#" class="btn btn-close">Abbrechen</button>
                            </div>

                            <p>Bitte beachte das der Fragebogen nur zur Einschätzung deines RP Verständnisses Dient!</p>
                            <p>Begebe dich nun in unseren Teamspeak Server um das Whitelist Verfahren fortzuführen.</p>
                        </form>
<br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop



@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop

@section('footer')
    <strong>Copyright &copy; 2022 <a href="#">CLCUCP</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 0.0.5 alpha
    </div>


@stop
