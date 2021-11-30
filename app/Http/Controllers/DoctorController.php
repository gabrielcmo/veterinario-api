<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    public function getDoctor($id){
        return Doctor::find($id);
    }
    
    public function getDoctorPhone($id){
        return Doctor::find($id)->phone;
    }
}
