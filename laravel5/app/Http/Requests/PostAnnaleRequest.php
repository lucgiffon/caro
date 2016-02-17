<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PostAnnaleRequest extends Request
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
            "prof" => 'alpha_dash',
            "annee" => 'required|date_format:Y',
            "matiere" => 'required|alpha_dash',
            "cursus" => 'required|alpha_dash',
            "faculte" => 'alpha_dash',
            "niveau" => 'required|alpha_dash',
        ];
    }
}
