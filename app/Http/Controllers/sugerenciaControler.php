<?php

namespace App\Http\Controllers;

use App\Mail\sugerenciaMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class sugerenciaControler extends Controller
{
    //

    public function index()
    {

        return view('/comentar');
    }


    public function store(Request $request)
    {

        $correo = new sugerenciaMailable($request->all());


        Mail::to('correodelusuario@gmail.com')->send($correo);

        return 'Mensaje enviado';
    }
}
