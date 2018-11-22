<?php

namespace App\Http\Requests\Companies;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequest extends FormRequest
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
            'logo'    => 'nullable|image|max:2000|dimensions:min_width=100,min_height=100',
            'name'    => 'required|max:191',
            'email'   => 'nullable|email|max:191',
            'website' => 'nullable|url|max:191',
        ];
    }
}
