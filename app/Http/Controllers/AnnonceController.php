<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
     public function Requetes(){

        $query1= Annonce::where('user_id',1)->get();
        echo "<h1>Question 1:</h1>";
        foreach($query1 as $val){
            echo $val -> description ." : ". $val -> price. "<br>";
        }
        echo "<h1>Question 2:</h1>";
        $query2= Annonce::where('valide',1)->get();
        foreach($query2 as $val){
            echo $val-> valide ." ".$val -> description ." : ". $val -> price. "<br>";
        }
     }
}
