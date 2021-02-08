<?php

namespace App\Http\Controllers;

use App\Mail\compraMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class compraController extends Controller
{
    //
    
    public function index()
    {

      return view('/compra');
    }


    public function store(Request $request)
    {

        $correo = new compraMailable($request->all());
        Mail::to('correodelusuario@gmail.com')->send($correo);
        error_log('sms enviado');
        return 'Mensaje enviado';
    }
}
