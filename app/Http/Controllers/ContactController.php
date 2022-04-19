<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(Request $request)
    {
        $request->validate([
           'email' => ['required', 'email:filter', 'max:255'],
           'message' => ['required', 'min:10', 'max:255']
        ]);
        \Log::info([$request->email, $request->message]);
        return redirect('/')->with('contacted', true);
    }
}
