<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPUnit\Exception;
use Spatie\Newsletter\Facades\Newsletter;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'email'=>'required|email'
        ]);
        try {
            if (Newsletter::isSubscribed($request->email)){
                return redirect()->back()->withErrors(['msg' => 'Email ja subscrit']);
            } else{
                Newsletter::subscribe($request->email);
                session()->flash('status','Email subscrit correctament');
            }   return redirect()->route('welcome');
        }catch (Exception $e){
            return redirect()->back()->with('errors',collect([$e->getMessage()]));
        }
    }
}
