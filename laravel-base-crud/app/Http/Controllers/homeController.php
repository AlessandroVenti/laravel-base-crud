<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Ospiti;

class homeController extends Controller
{
    public function homeFunction() {
        $ospiti = Ospiti::all();
         return view('pages.home',compact('ospiti'));
   }

   public function guestFunction($id) {
    $guest = Ospiti::findOrFail($id);
    return view('pages.guest', compact('guest'));
   }
}
