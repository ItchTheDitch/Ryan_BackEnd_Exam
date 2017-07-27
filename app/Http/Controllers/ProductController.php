<?php

namespace App\Http\Controllers;
use App\UnitRumah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
  public function getUnit(){
    $unitlist = DB::table('unit')->get();

  }

  public function createUnit(Request $request){

      $kavling = $request->input('kavling');
      $blok = $request->input('blok');
      $norumah = $request->input('no_rumah');
      $hargarumah = $request->input('harga_rumah');
      $luastanah = $request->input('luas_tanah');
      $luasbangunan = $request->input('luas_bangunan');

      $ulist = new UnitRumah;
      $ulist->kavling = $kavling;
      $ulist->blok = $blok;
      $ulist->no_rumah = $norumah;
      $ulist->harga_rumah = $hargarumah;
      $ulist->luas_tanah = $luastanah;
      $ulist->luas_bangunan = $luasbangunan;
      $ulist->save();
  }
  public function deleteUnit({$id}){
    $delete = DB::delete('delete from unit where id = ?',[$id]);
  }
}
