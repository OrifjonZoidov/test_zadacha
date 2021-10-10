<?php

namespace App\Http\Controllers;

use App\Models\Odeli;
use App\Models\Otdeli;
use App\Models\Sotrudniki;
use Illuminate\Http\Request;


class ZadachaController extends Controller
{
    public function index()
    {

        $data=Sotrudniki::with('odeli')->get();
        $task=Odeli::all();
        return view('index',['data'=>$data,'task'=>$task]);
    }


    public  function show_odel(Request $request)
    {

        return view('show_odel');

    }

    public function sotrudnik()
    {
        $data = Sotrudniki::all();
        return view('sotrudniki',compact('data'));

    }


    public function otdeli()
    {
        $data=Odeli::all();
        return view('show_odel',compact('data'));


    }

    public function edit_odel(Request $request, $id)
    {

        $data = Odeli::find($id);
        return view('edit_odel', compact('data'));

    }


    public function edit(Sotrudniki $sotrudniki, $id)   //Edit Sotrudnika
        {
            $odel=Odeli::all();
            $data = Sotrudniki::find($id);
            return view('edit_sotrudnik', compact('data','odel'));
        }



    public function update(Request $request, Sotrudniki $sotrudniki, $id)       //Update Sotrudnika
        {
            $validated=$request->validate([
                'name'=>'required',             //Validation
                'familiya'=>'required',
                'oplata'=>'int']);
            $odel=Odeli::all();
            $data = Sotrudniki::where(['id' => $id])->update([
                'Nom' => $request->input('name'),
                'Familiya' => $request->input('familiya'),
                'Otchestvo' => $request->input('otchestvo'),
                'Jins' => $request->input('pol'),
                'Z_Plata' => $request->input('oplata'),
                'Otdeli' => $request->input('otdel')
            ]);

            return redirect()->route('sotrudniki',compact('odel'));
        }


    public function create(Request $request)            //Create Odeli

        {
            $odel=Odeli::all();
                return view('create_sotrudnik',compact('odel'));
        }


    public function insert_odel(Request $request)

    {
        $validated=$request->validate
        ([
            'name_odela'=>'required'
        ]);
            $create=new Odeli;
        $create->name_otdela=$request->name_odela;
        $create->save();
        return redirect()->route('otdeli');
    }

    public  function form_show_odel()       //
        {

            $task=Sotrudniki::all();
            $data=Odeli::all();

            return view('otdeli',['data'=>$data,'task'=>$task]);
        }

    public function store(Request $request)

        {
            $validated=$request->validate([
               'name'=>'required',
               'familiya'=>'required',
               'oplata'=>'int'
            ]);
            $create=new Sotrudniki();
            $create->Nom=$request->name;
            $create->Familiya = $request->familiya;
            $create->Otchestvo=$request->otchestvo;
            $create->Jins=$request->pol;
            $create->Z_Plata=$request->oplata;
            $create->Otdeli()->sync($request->otdel);
            $create->save();

            return redirect()->route('home');
        }

        public function show(Sotrudniki $sotrudniki,$id)
        {
            $data=Sotrudniki::find($id);
            return view('show',['data'=>$data]);
        }


    public function deletes(Sotrudniki $sotrudniki,$id)
    {
       $f= Sotrudniki::find($id)->delete();
        return redirect()->route('sotrudniki');
    }

    public function delete(Odeli $odeli,$id)
    {

        $f= Odeli::find($id)->delete();

        return redirect()->route('otdeli');
    }




    }
