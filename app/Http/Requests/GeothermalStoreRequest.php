<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GeothermalStoreRequest extends FormRequest
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
            'teamName' => ['required','string','max:255'],
            'gdrive' => ['required','string','max:255'],
            'members' => ['required', 'array'],
            'members.*.name' => ['string', 'nullable', 'max:255'],
            'members.*.major' => ['string', 'nullable', 'max:255'],
            'members.*.university' => ['string', 'nullable'],
            'members.*.phone' => ['string', 'nullable', 'max:255'],
            'members.*.email' => ['email', 'nullable', 'max:255'],
            'members.*.studentId' => ['string', 'nullable', 'max:255'],
        ];
    }
}
