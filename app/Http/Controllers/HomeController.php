<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $registros = Produto::where([
            'ativo' => 'S'
            ])->get();

        return view('home', compact('registros'));
    }

    public function produto($id = null)
    {
        if( !empty($id) ) {
            $registro = Produto::where([
                'id'    => $id,
                'ativo' => 'S'
                ])->first();

            if( !empty($registro) ) {
                return view('home.produto', compact('registro'));
            }
        }
        return redirect()->route('index');
    }
}
