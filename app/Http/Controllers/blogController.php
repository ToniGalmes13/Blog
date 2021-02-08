<?php

namespace App\Http\Controllers;

use App\Mail\compraMailable;
use App\Models\noticias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class blogController extends Controller
{
    //

    public function vista(){

        return view('inicio');
    }

    public function index()
    {

        //$comentarios = noticias::orderBy(`desc`);
        $comentarios = DB::table('noticias')->select('noticias.*')->orderBy('id', 'desc')->get();

        return view('inicio', array('comentarios' => $comentarios));
    }


    public function store(Request $request)
    {

        $correo = new compraMailable($request->all());

        Mail::to('correodelusuario@gmail.com')->send($correo);

        return 'blogController';

        /*
         $noticia = new noticias;
         noticias::create($request->all());
        -----------------------------------------------------------------------------------

        $correo = new sugerenciaMailable($request->all());
        Mail::to('correodelusuario@gmail.com')->send($correo);
        return 'Mensaje enviado';*/
    }
}
