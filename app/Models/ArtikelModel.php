<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class ArtikelModel 
{
    public static function get_all(){
    	$items=DB::table("article")->get();
    	return $items;
    }

    public static function save($data){
    	$new_item= DB::table("article")->insert($data);
    	return $new_item;
    }

    public static function find_by_id($id){
    	$items= DB::table("article")->where('id',$id)->first();
    	return $items;
    }


    public static function find_by_uid($id){
        $items= DB::table("article")->where('user_id',$id)->get();
        return $items;
    }

    public static function update($id,$data){
    	$items= DB::table("article")->where('id',$id)->update($data);
    	return $items;
    }

    public static function destroy($id){
    	$items= DB::table("article")->where('id',$id)->delete();
    	return $items;
    }

}