<?php

namespace ApplySystem\TermosAceite\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use ApplySystem\TermosAceite\Models\TermosAceite;
use ApplySystem\TermosAceite\Models\TermosUsers;
use Illuminate\Support\Facades\Auth;


class TermoAceiteController extends Controller
{

    public function index(TermosAceite $termos){
        $termo = $termos->orderBy('id', 'DESC')->first();

        if($termo){
            return view('termoAceite::termoAceite',[
                "termo" => $termo
            ]);
        }
        else{
            return redirect('/');
        }
    }

    public function create(){
        return view('termoAceite::createTermoAceite');
    }

    public function verify(TermosUsers $termosUsers, TermosAceite $termos){

        $termo = $termos->orderBy('id', 'DESC')->first();
        $termoUser = $termosUsers->where('user_id', Auth::user()->id)->where('termo_id', $termo->id)->first();

        return $termoUser ? redirect('/') : redirect()->route('termo.aceite');

    }

    public function termsAccepted(Request $request, $id){

        return $request->all();

        if($request->input('aceite')){
            $termoUser = TermosUsers::create([
                'user_id' => Auth::user()->id,
                'termo_id' => $id
            ]);

            return $termoUser ?
                redirect('/') :
                redirect()->back()->with([
                    'message' => 'erro ao cadastrar o termo de aceite',
                    'type' => 'danger'
                ]);
        }
        else{
            //deslogar usuário
            return "usuário deslogado";
        }
    }

    public function store(Request $request, TermosAceite $termos){
        $termo = $termos->create([
            "termo" => $request->input("termoAceite"),
            "user_id" => Auth::user()->id,
            "version" => $request->input("version")
        ]);

        if($termo) {
            return redirect('/');
        } else {
            return redirect()->back()->with([
                'message' => 'erro ao cadastrar o termo de aceite',
                'type' => 'danger'
            ]);
        }
    }
}
