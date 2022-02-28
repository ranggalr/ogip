<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PWFStoreRequest extends FormRequest
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
            'name' => ['string','max:255','required'],
            'email' => ['email','max:255','required'],
            'university' => ['string','max:255','required'],
            'major' => ['string','max:255','required'],
            'phone' => ['numeric','required'],
            'category' => ['string','required', 'in:hands on,theory and demo'],
            'paymentProof' => ['file','required', 'max:5192'],
        ];
    }
}
