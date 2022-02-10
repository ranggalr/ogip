<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PPCSubmissionStoreRequest extends FormRequest
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
            'teamName' => ['string','required','max:255'],
            'university' => ['string','required','max:255'],
            'fullPaper' => ['required','file','max:5192'],
            'powerPoint' => ['required','file','max:5192'],
            'poster' => ['required','file','max:5192'],
        ];
    }
}
