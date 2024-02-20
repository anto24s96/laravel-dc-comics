<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

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
        return view('comic', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* $form_data = $request->all(); */
        $form_data = $this->validation($request->all());

        $comic = new Comic();
        $comic->title = $form_data['title'];
        $comic->description = $form_data['description'];
        $comic->thumb = $form_data['thumb'];
        $comic->price = $form_data['price'];
        $comic->series = $form_data['series'];
        $comic->sale_date = $form_data['sale_date'];
        $comic->type = $form_data['type'];
        $comic->artists = json_encode(explode(',', $form_data['artists']));
        $comic->writers = json_encode(explode(',', $form_data['writers']));

        $comic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        $artists = json_decode($comic['artists']);
        $writers = json_decode($comic['writers']);

        return view('show', compact('comic', 'artists', 'writers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);

        return view('edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /* $form_data = $request->all(); */
        $form_data = $this->validation($request->all());

        $comic = Comic::find($id);

        $comic = Comic::find($id);
        $comic->title = $form_data['title'];
        $comic->description = $form_data['description'];
        $comic->thumb = $form_data['thumb'];
        $comic->price = $form_data['price'];
        $comic->series = $form_data['series'];
        $comic->sale_date = $form_data['sale_date'];
        $comic->type = $form_data['type'];
        $comic->artists = json_encode(explode(',', $form_data['artists']));
        $comic->writers = json_encode(explode(',', $form_data['writers']));
        $comic->update();

        return redirect()->route('comics.show', ['comic' => $comic]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //RECUPERO L'ELEMENTO DA CANCELLARE
        $comic = Comic::find($id);

        //CANCELLO L'ELEMENTO CON IL METODO DELETE
        $comic->delete();

        return redirect()->route('comics.index');
    }

    private function validation($data)
    {
        $validator = Validator::make(
            $data,
            [
                'title' => 'required|max:30',
                'description' => 'required',
                'thumb' => 'max:255',
                'price' => 'required',
                'series' => 'required|max:30',
                'sale_date' => 'required',
                'type' => 'required|max:30',
                'artists' => 'required',
                'writers' => 'required',
            ],
            [
                'title.required' => 'Il campo Title deve essere obbligatorio',
                'title.max' => 'Il campo Title può avere al massimo 30 caratteri',
                'description.required' => 'Il campo Description deve essere obbligatorio',
                'thumb.max' => 'Il campo Thumb può avere al massimo 255 caratteri',
                'price.required' => 'Il campo Price deve essere obbligatorio',
                'series.required' => 'Il campo Series deve essere obbligatorio',
                'series.max' => 'Il campo Series può avere al massimo 30 caratteri',
                'sale_date.required' => 'Il campo Sale Date deve essere obbligatorio',
                'type.required' => 'Il campo Type deve essere obbligatorio',
                'type.max' => 'Il campo Type può avere al massimo 30 caratteri',
                'artists.required' => 'Il campo Artists deve essere obbligatorio',
                'writers.required' => 'Il campo Writers deve essere obbligatorio'
            ]
        )->validate();

        return $validator;
    }
}
