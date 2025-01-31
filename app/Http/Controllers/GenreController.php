<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Psy\CodeCleaner\ReturnTypePass;

class GenreController extends Controller
{
    public function tampil()
    {
        $genre = Genre::get();
        return view('genre.tampil', compact('genre'));
    }

    public function tambah()
    {
        return view('genre.tambah');
    }

    public function submit(Request $request)
    {
        $genre = New Genre();
        $genre->nama = $request->nama;
        $genre->save();

        return redirect()->route('genre.tampil');
    }

    public function edit($id)
    {
        $genre = Genre::find($id);
        return view('genre.edit', compact('genre'));
    }

    public function update(Request $request, $id)
    {
        $genre = Genre::find($id);
        $genre->nama = $request->nama;
        $genre->update();

        return redirect()->route('genre.tampil');

    }

    public function delete($id)
    {
        $genre = Genre::find($id);
        $genre->delete();

        return redirect()->route('genre.tampil');

    }
}
