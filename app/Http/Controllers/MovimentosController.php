<?php

namespace App\Http\Controllers;

use App\Movimento;
use Illuminate\Http\Request;

class MovimentosController extends Controller
{
    public function create() {
        return view('movimento.create');
    }

    public function store (Request $request){

    }

    public function index() {
        $movimentos = Movimento::paginate(20);

        return view('movimento.index', ['movimentos' => $movimentos]);
    }
}
