@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
            <form action="{{ route('search') }}" method="POST">
                @csrf
                <label>Veuillez choisir une date</label>
                <input type="date" name="jour">

                <input type="submit" value="Rechercher" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection
