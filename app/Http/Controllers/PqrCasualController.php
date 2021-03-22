<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePqrRequest;
use App\Models\Pqr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use App\Models\Role;
use Auth;
use DB;

class PqrCasualController extends Controller
{
    public function index()
    {
        $UserOn =  Auth::user()->name;
        $pqr = Pqr::all();
        $pqr = DB::table('pqrs')->where('Usuario','=',$UserOn)->get();

        return view('UsersCasual.pqrs', compact('pqr'));
    }
    public function show(Pqr $pqr)
    {
        
        return view('UsersCasual.showC', compact('pqr'));
    }
}