<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

//use Illuminate\Database\Eloquent\Model;

class Answer //extends Model
{
    

    public static function get_all() {
        $items = DB::table('answers')->get();
        return $items;
    }

    public static function save($data) {
        unset($data['_token']);
        $new_item = DB::table('answers')->insert($data);
        return $new_item;
    }

    public static function get($id) {
        // $jawaban = DB::table('questions')
        //             ->join('answers', 'questions.id', '=', 'answers.question_id')
        //             ->select('questions.*','answers.*')
        //             ->where('answers.question_id',$id)
        //             ->get();
        $jawaban = DB::table('answers')->where('question_id', $id)->get();
        return $jawaban;
        
    }
}
