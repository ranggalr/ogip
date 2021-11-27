<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentStoreRequest extends FormRequest
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
            'competition' => ['string', 'required', 'in:ord,pod,simres,sc,ppc,gcs'],
            'paymentProof' => ['file', 'required', 'mimes:png,jpg', 'max:5120']
        ];
    }
}
