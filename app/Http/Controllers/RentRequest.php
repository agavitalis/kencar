<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RentRequest extends Controller
{
    public function rentRequestStore(Request $request)
    {
        
        $validatedData = $request->validate([
            'location' => 'required|max:255',
            'date_from' => 'required|date',
            'date_to' => 'required|date',
            'elect_cartype' => 'required',
        ]);

    }
}
