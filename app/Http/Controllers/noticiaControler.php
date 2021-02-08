<?php

namespace App\Http\Controllers;

use App\Models\noticias;
use Illuminate\Http\Request;

class noticiaControler extends Controller
{
    //
    public function index()
    {

        return view('/noticia');
    }


    public function store(Request $request)
    {


        $noticia = new noticias;

        noticias::create($request->all());

        return 'entrada';

        /*

  $correo = new sugerenciaMailable($request->all());


        Mail::to('correodelusuario@gmail.com')->send($correo);

        return 'Mensaje enviado';*/
    }
}
