@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>CyberLifeCity 2022 UCP</h1>
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif

                <div class="card">
                    <div class="card-body">

                        <form action="{{ url('fragen-add') }}" method="POST">
                            @csrf

                            <div class="form-group mb-3">
                                <label for="">Frage 1</label>
                                <input type="text" name="frage1" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Frage 2</label>
                                <input type="text" name="frage2" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Frage 3</label>
                                <input type="text" name="frage3" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Frage 4</label>
                                <input type="text" name="frage4" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Frage 5</label>
                                <input type="text" name="frage5" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Frage 6</label>
                                <input type="text" name="frage6" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Frage 7</label>
                                <input type="text" name="frage7" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Frage 8</label>
                                <input type="text" name="frage8" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Frage 0</label>
                                <input type="text" name="frage9" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Frage 10</label>
                                <input type="text" name="frage10" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Speichern</button>
                            </div>

                        </form>

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
    <script> console.log('Hi!'); </script>
@stop

@section('footer')
    <strong>Copyright &copy; 2022 <a href="#">CLCUCP</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 0.0.1 alph
    </div>


@stop
