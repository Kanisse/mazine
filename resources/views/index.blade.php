@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
           <h4>La journée du  {{ $jour}}</h4>
         <form>
         
           <button disabled value="" class="btn btn-warning">
            {{ $dates }}</button>  

           <button value="" class="btn btn-primary">
             {{ $dates0 }}</button>  

           
          
          

           </form>            
        </div>
    </div>
</div>



@endsection
