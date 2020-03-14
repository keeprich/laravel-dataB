<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
   public function list() {
       // creating customer array

       

    $customers = [
        'kenneth',
        'Esther',
        'Elike',
        'sefakor'
    ];

    return view('internals.customers', [
        'customers' => $customers,

        // getting costomers from database
        
    ]);
   }
}
