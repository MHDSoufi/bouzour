<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
   public function index(){
   	
   	 return view('client.acceuil');
   	
   }

   public function propos(){
   	return view('client.propos');
   }

   public function promoCours(){
   	return view('client.promoCours');
   }
}
