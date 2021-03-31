<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationFormRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class LocatairePController extends Controller
{
    public function addLocP(RegistrationFormRequest $request)
    {
        $user = new User();
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->email = $request->email;
        $user->CIN = $request->CIN;
        $user->role = $request->role;
        $user->adresse = $request->adresse;
        $user->telephone = $request->telephone;
        $user->password = bcrypt($request->password);
        //$user->image = $request->image->store('public');
        $user->save();

        /* foreach ($request->dataarray as $document) {
            $path = Storage::disk();
        }
        $user->documents()->attach();*/
        return response()->json([
            'message' => 'user successfully registed',
            'user' => $user
        ], 201);
    }
    public function getLocPhyActif()
    {

        return  User::all()->where('role', '=', 'locataire')->where('archive', '=', '0');
    }
    public function getLocPhyArchive()
    {

        return  User::all()->where('role', '=', 'locataire')->where('archive', '=', '1');
    }
}
