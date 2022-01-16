@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>CyberLifeCity 2022 UCP</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-body">

                    <form action="{{ url('edit-whitelist/'.$whitelist) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">AccountID</label>
                            <input type="text" name="accountID" value="{{$whitelist->quest1}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Vorname</label>
                            <input type="text" name="firstname" value="{{$whitelist->quest2}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Nachname</label>
                            <input type="text" name="lastname" value="{{$whitelist->quest3}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Geld</label>
                            <input type="text" name="money" value="{{$whitelist->quest4}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Geld</label>
                            <input type="text" name="money" value="{{$whitelist->quest5}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Geld</label>
                            <input type="text" name="money" value="{{$whitelist->quest6}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Geld</label>
                            <input type="text" name="money" value="{{$whitelist->quest7}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Geld</label>
                            <input type="text" name="money" value="{{$whitelist->quest8}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Geld</label>
                            <input type="text" name="money" value="{{$whitelist->quest9}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Geld</label>
                            <input type="text" name="money" value="{{$whitelist->quest10}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
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
