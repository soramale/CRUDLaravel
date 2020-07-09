<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// ini adalah model custom
use App\Models\Question;

// ini adalah model eloquent
//use App\Question;


class PertanyaanController extends Controller
{
    public function index() {
        $questions = Question::get_all(); // using custom model
        //$questions = Question::all();
        return view('question.index', compact('questions'));
    }

    public function create() {
        return view('question.create');
    }

    public function store(Request $request) {
        $data = $request->all();
        $question = Question::simpan($data);
        return redirect('/pertanyaan');
    }

    public function edit($id) {
        $question = Question::get_id($id);
        return view('question.edit', compact('question'));
    }

    public function update(Request $request, $id) {
        $update = Question::edit($request->all(), $id);
        return redirect('/pertanyaan');
    }

    public function destroy($id) {
        $delete = Question::hapus($id);
        return redirect('/pertanyaan');
    }
}
