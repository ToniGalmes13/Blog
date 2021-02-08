<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\compraMailable;
use Illuminate\Support\Facades\Mail;

class libroController extends Controller
{

    public function store(Request $request)
    {

        $correo = new compraMailable($request->all());
        Mail::to('correodelusuario@gmail.com')->send($correo);
        return 'Mensaje enviado';
    }
}
