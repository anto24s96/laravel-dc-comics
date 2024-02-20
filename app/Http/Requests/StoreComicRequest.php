<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'       => 'required|max:30',
            'description' => 'required',
            'thumb'       => 'max:255',
            'price'       => 'required',
            'series'      => 'required|max:30',
            'sale_date'   => 'required',
            'type'        => 'required|max:30',
            'artists'     => 'required',
            'writers'     => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required'       => 'Il campo Title deve essere obbligatorio',
            'title.max'            => 'Il campo Title può avere al massimo 30 caratteri',
            'description.required' => 'Il campo Description deve essere obbligatorio',
            'thumb.max'            => 'Il campo Thumb può avere al massimo 255 caratteri',
            'price.required'       => 'Il campo Price deve essere obbligatorio',
            'series.required'      => 'Il campo Series deve essere obbligatorio',
            'series.max'           => 'Il campo Series può avere al massimo 30 caratteri',
            'sale_date.required'   => 'Il campo Sale Date deve essere obbligatorio',
            'type.required'        => 'Il campo Type deve essere obbligatorio',
            'type.max'             => 'Il campo Type può avere al massimo 30 caratteri',
            'artists.required'     => 'Il campo Artists deve essere obbligatorio',
            'writers.required'     => 'Il campo Writers deve essere obbligatorio'
        ];
    }
}
