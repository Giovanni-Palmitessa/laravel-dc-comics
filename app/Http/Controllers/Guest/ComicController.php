<?php

namespace App\Http\Controllers\Guest;

use App\Models\Comic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'title'           => 'required|max:60',
                'description'        => 'required|string|min:5|max:5000',
                'thumb'          => 'required|url|max:400',
                'price'       => 'required|string',
                'series'          => 'required|string',
                'sale_date'   => 'required|string',
                'type'   => 'required|string',
            ],

            [
                'required' => 'Il campo :attribute è richiesto!',
                'title.max' => 'Il campo :attribute deve essere al massimo di :max caratteri.',
                'description.max' => 'Il campo :attribute deve essere al massimo di :max caratteri.',
                'description.min' => 'Il campo :attribute deve essere minimo :min caratteri.',
                'thumb.url'    => 'Il campo :attribute deve essere un URL valido.',
                'thumb.max' => 'Il campo :attribute deve essere al massimo di :max caratteri.',
            ]
        );
        // validare i dati
        if ($validator->fails()) {
            return redirect('comics/create')
                ->withErrors($validator)
                ->withInput();
        } else {
            $data = $request->all();

            $newComic = new Comic();

            $newComic->title = $data['title'];
            $newComic->description = $data['description'];
            $newComic->thumb = $data['thumb'];
            $newComic->price = $data['price'];
            $newComic->series = $data['series'];
            $newComic->sale_date = $data['sale_date'];
            $newComic->type = $data['type'];

            $newComic->save();

            return redirect()->route('comics.show', ['comic' => $newComic->id]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'title'           => 'required|max:60',
                'description'        => 'required|string|min:5|max:5000',
                'thumb'          => 'required|url|max:400',
                'price'       => 'required|string',
                'series'          => 'required|string',
                'sale_date'   => 'required|string',
                'type'   => 'required|string',
            ],

            [
                'required' => 'Il campo :attribute è richiesto!',
                'title.max' => 'Il campo :attribute deve essere al massimo di :max caratteri.',
                'description.max' => 'Il campo :attribute deve essere al massimo di :max caratteri.',
                'description.min' => 'Il campo :attribute deve essere minimo :min caratteri.',
                'thumb.url'    => 'Il campo :attribute deve essere un URL valido.',
                'thumb.max' => 'Il campo :attribute deve essere al massimo di :max caratteri.',
            ]
        );

        if ($validator->fails()) {
            return redirect('comics/create')
                ->withErrors($validator)
                ->withInput();
        } else {
            // validare i dati
            $data = $request->all();

            // aggiornare i dati nel db
            $comic->title = $data['title'];
            $comic->description = $data['description'];
            $comic->thumb = $data['thumb'];
            $comic->price = $data['price'];
            $comic->series = $data['series'];
            $comic->sale_date = $data['sale_date'];
            $comic->type = $data['type'];
            $comic->update();
        }

        return to_route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);

        $comic->delete();

        return to_route('comics.index')->with('delete_success', $comic);
    }

    public function restore($id)
    {
        Comic::withTrashed()->where('id', $id)->restore();

        $comic = Comic::find($id);

        return redirect()->route('comics.index')->with('restore_success', $comic);
    }
}
