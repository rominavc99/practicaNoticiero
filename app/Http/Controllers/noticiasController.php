<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;

class noticiasController extends Controller
{
    public function index(){

        $noticias = Noticia::all();
        $argumentos = array();
        $argumentos['noticias'] = $noticias;
        return view("news.index", $argumentos);
    }

    public function create(){

        return view('news.create');
    }

    public function store(Request $request){
        
        $nuevaNoticia = new Noticia();
        $nuevaNoticia->titulo = $request->input('titulo');
        $nuevaNoticia->autor = $request->input('autor');
        $nuevaNoticia->fecha = $request->input('fecha');
        $nuevaNoticia->noticia = $request->input('noticia');

        if ($nuevaNoticia->save()) {

            return redirect()->route('news.index')->with('exito','Noticia creada con exito');
        }
        return redirect()->route('news.index')->with('error','No se pudo crear noticia');
        

    }

    public function edit($id){

            $noticia = Noticia::find($id);

            if ($noticia) {

                $argumentos = array();
                $argumentos['noticia'] = $noticia;

                return view('news.edit', $argumentos);

            } 

            return redirect()->route('news.index')-> with('error','No se encontro la noticia');

            

    }

    public function update($id, Request $request ){

        $noticia = Noticia::find($id);

        if($noticia){

            $noticia->titulo = $request->input('titulo');
            $noticia->autor = $request->input('autor');
            $noticia->fecha = $request->input('fecha');
            $noticia->noticia = $request->input('noticia');

            if ($noticia->save()) {

                return redirect()->route('news.edit',$noticia->id)-> with('exito','Noticia actualizada con exito');

        }
        return redirect()->
            route('news.edit',$noticia->id)-> with('error','Noticia actualizada con exito');
           
        }
        return redirect()->route('news.index')-> with('error','No se encontro la noticia');

        

    }

    public function destroy($id){

        $noticia = Noticia::find($id);
        if ($noticia){
            //si la encuentra, la borra
            if ($noticia->delete()) {
                return redirect()->route('news.index')-> with('exito', 'Noticia eliminada');
            }
            return redirect()->route('news.index')-> with ('error', 'no se pudo eliminar noticia');
        }
        return redirect()->route('news.index')-> with('error','No se encontro noticia para borrar');

    }


}