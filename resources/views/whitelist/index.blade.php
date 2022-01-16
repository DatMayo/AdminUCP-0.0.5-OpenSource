@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')

    <div class="card-body">

        
            @foreach ($whitelist as $whitelist)
                <form>
                    <div class="form-group">
                        <label>frage1</label> <input type="text" class="form-control" name="{{ $whitelist->quest1 }}" placeholder="Gib die Frage an">
                    </div>

                    <div class="form-group">
                        <label>Beschriftung Textfeld</label> <input type="text" class="form-control" name="{{ $whitelist->quest2 }}" placeholder="Placeholder Textfeld">
                    </div>

                    <div class="form-group">
                        <label>Beschriftung Textfeld</label> <input type="text" class="form-control" name="{{ $whitelist->quest3 }}" placeholder="Placeholder Textfeld">
                    </div>

                    <div class="form-group">
                        <label>Beschriftung Textfeld</label> <input type="text" class="form-control" name="{{ $whitelist->quest4 }}" placeholder="Placeholder Textfeld">
                    </div>

                    <div class="form-group">
                        <label>Beschriftung Textfeld</label> <input type="text" class="form-control" name="{{ $whitelist->quest5 }}" placeholder="Placeholder Textfeld">
                    </div>

                    <div class="form-group">
                        <label>Beschriftung Textfeld</label> <input type="text" class="form-control" name="{{ $whitelist->quest6 }}" placeholder="Placeholder Textfeld">
                    </div>

                    <div class="form-group">
                        <label>Beschriftung Textfeld</label> <input type="text" class="form-control" name="{{ $whitelist->quest7 }}" placeholder="Placeholder Textfeld">
                    </div>

                    <div class="form-group">
                        <label>Beschriftung Textfeld</label> <input type="text" class="form-control" name="{{ $whitelist->quest8 }}" placeholder="Placeholder Textfeld">
                    </div>

                    <div class="form-group">
                        <label>Beschriftung Textfeld</label> <input type="text" class="form-control" name="{{ $whitelist->quest9 }}" placeholder="Placeholder Textfeld">
                    </div>

                    <div class="form-group">
                        <label>Beschriftung Textfeld</label> <input type="text" class="form-control" name="{{ $whitelist->quest10 }}" placeholder="Placeholder Textfeld">
                    </div>
                </form>
            @endforeach


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
