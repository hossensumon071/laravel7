<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
   


    function myname($firstName, $middleName, $lastName){



        return "First Name : ". $firstName ." Middle Name: ". $middleName. "Last Name: ". $lastName;
    }



}
