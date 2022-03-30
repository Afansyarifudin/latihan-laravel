<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\DB;


class DosenController extends Controller
{
    public function index()
    {
        $dosen = DB::table('dosen')->get();
        // dd($dosen);
        return view ('dosen.index', compact('dosen'));
    }

    public function create()
    {
        return view ('dosen.create');
    }

    public function store(Request $request)
    {
        DB::table('dosen')->insert([
            'nama' => $request->nama,
            'usia' => $request->usia,
            'mata_kuliah' => $request->mata_kuliah,
            'sks' => $request->sks,
        ]);

        return redirect('/');
    }

    public function edit($id)
    {
        $dosen = DB::table('dosen')->where('id', $id)->first();
        return view('dosen.edit', ['dosen' => $dosen]);
    }

    public function update(Request $request, $id)
    {
        $dosen = DB::table('dosen')->where('id', $id)->update([
            'nama' => $request->nama,
            'usia' => $request->usia,
            'mata_kuliah' => $request->mata_kuliah,
            'sks' => $request->sks
        ]);
        return redirect('/');
    }

    public function destroy($id)
    {
        $dosen = DB::table('dosen')->where('id', $id)->delete();

        return redirect('/');
    }
}
