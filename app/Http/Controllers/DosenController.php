<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\DB;
use App\Models\Dosen;


class DosenController extends Controller
{
    public function index()
    {
        // $dosen = DB::table('dosen')->get();
        $dosen = Dosen::get();
        // dd($dosen);
        return view ('dosen.index', compact('dosen'));
    }

    public function create()
    {
        return view ('dosen.create');
    }

    public function store(Request $request)
    {
        Dosen::create($request->all());

        return redirect('/');
    }

    public function edit($id)
    {
        // $dosen = Dosen::where('id', $id)->first();
        $dosen = Dosen::find($id);
        return view('dosen.edit', ['dosen' => $dosen]);
    }

    public function update(Request $request, $id)
    {
        $dosen = Dosen::find($id)->update([
            'nama' => $request->nama,
            'usia' => $request->usia,
            'mata_kuliah' => $request->mata_kuliah,
            'sks' => $request->sks
        ]);
        return redirect('/');
    }

    public function destroy($id)
    {
        $dosen = Dosen::find($id)->delete();

        return redirect('/');
    }


}
