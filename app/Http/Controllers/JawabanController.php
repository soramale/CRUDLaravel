<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;

class JawabanController extends Controller
{
    public function index(Request $request, $id) {
        $answers =  Answer::get($id);
        //dd($answers);
        return view('answer.index', compact('answers'));
    }

    public function create($id) {
        return view('answer.create', compact('id'));
    }

    public function store(Request $request, $id) {
        $question = Answer::save($request->all());
        return redirect('/jawaban/'.$id);
    }

    
}
