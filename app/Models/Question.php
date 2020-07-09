<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

//use Illuminate\Database\Eloquent\Model; // ini ngga ada di contoh

class Question // extends Model
{
    

    public static function get_all() {
        $items = DB::table('questions')->get();
        return $items;
    }

    public static function get_id($id) {
        $question = DB::table('questions')->where('id', $id)->first();
        return $question;
    }

    public static function simpan($data) {
        unset($data['_token']);
        $new_item = DB::table('questions')->insert($data);
        return $new_item;
    }

    public static function edit($request, $id) {
        unset($request['_token']);
        $question = DB::table('questions')->where('id', $id)->update([
            'title' => $request["title"],
            'bodytext' => $request["bodytext"],
            'updated_at' => $request["updated_at"]
            ]);
        return $question;
    }

    public static function hapus($id) {
        $delete = DB::table('questions')->where('id', $id)->delete();
        return $delete;
    }
}
