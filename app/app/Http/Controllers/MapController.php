<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use JavaScript;

class MapController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            $user = Auth::user();
            $roles = $user->roles->toArray();

            JavaScript::put([ 'roles' => $roles ]);
        } else {
            JavaScript::put([ 'roles' => 'none' ]);
        }

        return view('map');
    }
}
