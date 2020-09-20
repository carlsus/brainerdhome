<?php

namespace App\Http\Requests\Buyer;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class BuyerMessageRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'message' => 'required',
        ];
    }

    // Method for setting default values after validation.
    protected function prepareForValidation()
    {
        $this->merge([
            'buyer_id' => Auth::user()->id,
        ]);
    }

    public function attributes()
    {
        return [
            'message' => 'Message',
        ];
    }
}
