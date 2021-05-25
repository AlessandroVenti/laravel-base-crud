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

   public function addGuestFunction() {
       return view('pages.addGuest');
   }

   public function storeFunction(Request $request) {
        $validate = $request ->validate([
            'name' => 'required',
            'lastname' => 'required',
            'date_of_birth' => 'required',
            'document_type' => 'required',
            'document_number' => 'required',
        ]);
        $guest = Ospiti::create($validate);
        return redirect() -> route('guest', $guest -> id);
   }
}
