<?php

namespace App\Http\Controllers;

use App\Amount;
use App\Recepy;
use App\Ingridient;
use Illuminate\Http\Request;

class RecepiesController extends Controller
{
    public function index()
    {
        $recepies = Recepy::all();
        return view('recepies.index', ['recepies'=>$recepies]);
    }

    public function create()
    {
        $ingridients = Ingridient::pluck('title', 'id')->all();

        return view('recepies.create', compact(
            'ingridients'
        ));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' =>'required',
            'content'   =>  'required',
            'description'  =>  'required'
        ]);

        $recepy = Recepy::add($request->all());
        $recepy->setIngridients($request->get('ingridients'));

        return redirect()->route('recepies.index');
    }

    public function edit($id)
    {
        $recepy = Recepy::find($id);
        $ingridients = Ingridient::pluck('title', 'id')->all();
        $selectedIngridients = $recepy->ingridients->pluck('id')->all();

        return view('recepies.edit', compact(
            'ingridients',
            'recepy',
            'selectedIngridients'
        ));

    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' =>'required',
            'content'   =>  'required',
            'description'  =>  'required',
        ]);

        $recepy = Recepy::find($id);
        $recepy->edit($request->all());
        $recepy->setIngridients($request->get('ingridients'));

        return redirect()->route('recepies.index');
    }

    public function destroy($id)
    {
        Recepy::find($id)->remove();
        return redirect()->route('recepies.index');
    }

    public function show($id)
    {
        $recepy = Recepy::find($id);
        $ingridients = Ingridient::pluck('title', 'id')->all();
        $selectedIngridients = $recepy->ingridients->pluck('id')->all();

        return view('recepies.show', compact(
            'ingridients',
            'recepy',
            'selectedIngridients'
        ));
    }
}