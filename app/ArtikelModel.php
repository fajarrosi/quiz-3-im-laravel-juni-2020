<?php

namespace App;

use Illuminate\Support\Facades\DB;
class ArtikelModel
{
    public static function get_all(){
		$data = DB::table('articles')->get();
		return $data;
	}

	public static function save($data){
		$data = DB::table('articles')->insert($data);
		return $data;
	}

	public static function get_by_id($id){
		$data = DB::table('articles')->where('id', $id)->first();
		return $data;
	}

	public static function update($id, $data){
		$data = DB::table('articles')
					->where('id', $id)
					->update($data);
		return $data;
	}

	public static function destroy($id){
		$data = DB::table('articles')->where('id', $id)->delete();
		return $data;
	}
}
