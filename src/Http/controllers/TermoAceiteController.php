<?php

namespace ApplySystem\TermosAceite\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use ApplySystem\TermosAceite\Models\TermosAceite;
use Illuminate\Support\Facades\Auth;


class TermoAceiteController extends Controller
{

    public function index(TermosAceite $termos)
    {
        $termo = $termos->orderBy('id', 'DESC')->first();
        return view('termoAceite::termoAceite',[
            "termo" => $termo
        ]);
    }

    public function create()
    {
        return view('termoAceite::createTermoAceite');
    }

    public function store(Request $request, TermosAceite $termos)
    {
        $termo = $termos->create([
            "termo" => $request->input("termoAceite"),
            "user_id" => Auth::id(),
            "version" => $request->input("version")
        ]);

        if($termo) {
            return redirect('/');
        } else {
            return "deu merda";
        }
    }
}
