<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class OrderController extends Controller {

    public function submitted(Request $request) {
        $choice = $request->choice;
        $ico = $request->ico;
        $name = $request->name;
        $lastname = $request->lastname;
        $bday = $request->bday;



        if ($choice == 'ic_on') {
            $results = array($ico);
            return redirect('order-ic')->with('results', $results);
        } else if ($choice == 'person_on') {
            $results = array($name, $lastname, $bday);
            return redirect('order-person')->with('results', $results);
        }
    }
}
