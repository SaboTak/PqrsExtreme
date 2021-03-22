<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePqrRequest;
use App\Http\Requests\UpdatePqrRequest;
use App\Models\Pqr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use App\Models\Role;

class PQRController extends Controller
{

    public function index()
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pqr = Pqr::all();

        return view('pqr.pqrs', compact('pqr'));
    }

    public function create()
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        
        $users = User::with('roles')->get();
        return view('pqr.create', compact('users'));
    }

    public function store(StorePqrRequest $request)
    {
        $data = $request->validated();
        if (isset($_POST) && count($_POST) >0)
        {
            switch ($data['PQR'])
            {
                case 'Peticion':
                    $data['expires_at'] = date('Y-m-d H:i:s', strtotime('+7 days'));
                    break;
                case 'Queja':
                    $data['expires_at'] = date('Y-m-d H:i:s', strtotime('+3 days'));
                    break;
                case 'Reclamo':
                    $data['expires_at'] = date('Y-m-d H:i:s', strtotime('+2 days'));
                    break;
                default:
                    $data['expires_at'] = date('Y-m-d H:i:s', strtotime('+1 days'));
                    break;
            }
        }
        Pqr::create($data);

        return redirect()->route('pqr.index');
    }

    public function show(Pqr $pqr)
    {

        return view('pqr.show', compact('pqr'));
    }
   

    public function edit(Pqr $pqr ,Request $request)
    {
        

        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('pqr.edit', compact('pqr'));
    }

    public function update(UpdatePqrRequest $request, Pqr $pqr){

        $pqr->update($request->validated());
        return redirect()->route('pqr.index');
    }

    public function destroy(Pqr $pqr)
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $pqr->delete();
        return redirect()->route('pqr.index');
    }
}
