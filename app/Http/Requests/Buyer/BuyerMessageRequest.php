<?php

namespace App\Http\Requests\Buyer;

use Illuminate\Foundation\Http\FormRequest;

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

    public function attributes()
    {
        return [
            'message' => 'Message',
        ];
    }
}
