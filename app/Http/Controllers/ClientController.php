<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Promo;

class ClientController extends Controller
{
   public function index(){
   	
   	 return view('client.acceuil');
   	
   }

   public function propos(){
   	return view('client.propos');
   }

   public function promoCours($vue){
   	return view('client.promoCours' , ['vue' => $vue]);
   }
   public function edit($id){
      $promo = Promo::findOrFail($id);
      $img = getLienImageAll($id);
      return view('client.editPromo' , ['promo' => $promo, "images" => $img]);
   }
}
