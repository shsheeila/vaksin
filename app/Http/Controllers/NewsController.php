<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function frontend_index()
    {
        $news = News::all();
        return view('frontend_index', compact('news'));
    }

    public function backend_index()
    {
        $news = News::all();
        return view('backend_index', compact('news'));
    }

    public function tambahinfo() {
        return view('tambahinfo');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required'
        ]);

        $path = $request->image->store('images');

        if($validated){
             News::create([
            'slug' => Str::slug($request->title),
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'image' => $path
        ]);
        }

        return redirect()->route('backend_index');
    }
    public function edit($id) {
        $new = News::where('id', '=', $id)->first();
        //$daftar_kategori = Category::all();
        return view('edit', compact('new'));
    }
    public function update(Request $request, $id) {
        $new = News::where('id', '=', $id)->first();
        if ($request->file('image')) {
            $img = $request->image->store('images');
        } else {
            $img = $new->image;
        }

        $new->update([
            'slug' => Str::slug($request->title),
            'title' => $request->input('title'),
            'content' => $request->input('content'),
           'image' => $img
        ]);

        return redirect()->route('backend_index');
    }

   public function delete($id) {
        $new = News::where('id', '=', $id)->first();
        $new->delete();

        return redirect()->route('backend_index');
    }
    public function list() {
        return view('info.list');
    }

}
