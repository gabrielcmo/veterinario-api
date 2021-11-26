<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dog;

class DogController extends Controller
{
    function getDog($id){
        return Dog::find($id);
    }

    function getDogOwner($id){
        return Dog::find($id)->user;
    }

    function getDogTreatments($id){
        return Dog::find($id)->treatments;
    }
}
