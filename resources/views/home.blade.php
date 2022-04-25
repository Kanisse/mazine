@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          
          
        </div>
    </div>
</div>
@endsection

@section('admin')
        <h1>Vous etes admin</h1>
        <a href="{{ route('reg') }}"> Enregistrement </a>
    @endsection

@section('user')
    <h1>vous etes user</h1>
@endsection
