<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BienRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'adresse' => 'required',
            'surface' => 'required',
            'statut' => 'required',
            'loyer_mensuel' => 'required',
            'syndic' => 'required',
            'taxe' => 'required',
            'archive' => 'required|string',
            'nbr_piece' => 'integer',
            'equipement' => 'boolean',
            'ascenseur' => 'boolean',
            'etage' => 'integer',
            'user_id' => 'required|integer',
        ];
    }
}
