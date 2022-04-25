@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
           
         <form method="POST">
          
              @foreach($heure as $value)
             <button value="" class="btn btn-success">
             {{Carbon\Carbon :: parse($value ->heure) -> format('H:i')}}</button> 
             @endforeach

             

           </form>            
        </div>
    </div>
</div>



@endsection
