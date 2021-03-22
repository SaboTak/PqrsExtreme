<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pqr;


class PDFController extends Controller
{
    public function PDF(){
        $pdf = \PDF::loadView('pdf');
        return $pdf->download('Pqrs.pdf');
    }
    public function PDFPqrs(){
        $pqr = Pqr::all();
        $pdf = \PDF::loadView('pqr.pqrsPdf', compact('pqr'))->setOptions(['defaultFont' => 'sans-serif']); ;

        return $pdf->setPaper('a4','landscape')->stream('Pqrs.pdf');
        //return view('pqr.pqrsPdf', compact('pqr'));
    }
}
