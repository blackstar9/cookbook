<?php
/**
 * Created by PhpStorm.
 * User: Oleksii
 * Date: 05.09.2019
 * Time: 15:12
 */

namespace App\Http\Controllers;

use App\Amount;
use App\Recepy;
use App\Ingridient;
use Illuminate\Http\Request;

class IngridientsController extends Controller
{
    public function index()
    {
        $ingridients = Ingridient::all();
        return view('ingridients.index', ['ingridients'=>$ingridients]);
    }

    public function create()
    {
        return view('ingridients.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' =>  'required'
        ]);

        Ingridient::create($request->all());
        return redirect()->route('ingridients.index');
    }

    public function edit($id)
    {
        $ingridient = Ingridient::find($id);
        return view('ingridients.edit', ['ingridient'=>$ingridient]);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' =>  'required'
        ]);

        $ingridient = Ingridient::find($id);

        $ingridient->update($request->all());

        return redirect()->route('ingridients.index');
    }

    public function destroy($id)
    {
        Ingridient::find($id)->delete();
        return redirect()->route('ingridients.index');
    }
}