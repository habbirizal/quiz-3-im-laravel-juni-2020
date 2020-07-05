<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class ItemModel 
{
    public static function get_all(){
    	$items=DB::table('items')->get();
    	return $items;
    }

    public static function save($data){
    	$new_item= DB::table('items')->insert($data);
    	return $new_item;
    }

    public static function find_by_id($id){
    	$items= DB::table('items')->where('id',$id)->first();
    	return $items;
    }

    public static function update($id,$data){
    	$items= DB::table('items')->where('id',$id)->update($data);
    	return $items;
    }

    public static function destroy($id){
    	$items= DB::table('items')->where('id',$id)->delete();
    	return $items;
    }

}