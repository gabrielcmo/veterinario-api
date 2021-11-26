<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dog;

class DogController extends Controller
{
    /*
        Retorna o cachorro associado a esse ID
    */
    function getDog($id){
        return Dog::find($id);
    }
    
    /*
        Retorna o usuário dono do cachorro associado a esse ID
    */
    function getDogOwner($id){
        return Dog::find($id)->user;
    }

    /*
        Retorna todos os tratamentos feitos pelo cachorro
    */
    function getDogTreatments($id){
        return Dog::find($id)->treatments;
    }
}
