<?php

namespace App\Http\Requests\Seller;

use Illuminate\Foundation\Http\FormRequest;

class ListPropertyRequest extends FormRequest
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
            'propertytype_id' => 'required',
            'hlurbno' => 'required',
            'listingno' => 'required',
            'address' => 'required',
            'lotarea' => 'required|numeric',
            'floorarea' => 'required|numeric',
            'bedrooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'garage' => 'required',
        ];
    }

    // Method for setting default values after validation.
    protected function prepareForValidation()
    {
        $this->merge([
            'listdate' => date("Y-m-d",time()),
        ]);
    }

    // Method for setting field validation names.
    public function attributes()
    {
        return [
            'propertytype_id' => 'Property Type',
            'hlurbno' => 'HLURB Number',
            'listingno' => 'Listing Number',
            'address' => 'Address',
            'lotarea' => 'Lot Area',
            'floorarea' => 'Floor Area',
            'bedrooms' => 'Bedrooms',
            'bathrooms' => 'Bathrooms',
            'garage' => 'Garage',
        ];
    }

    // Method for custom messages based on validation.
    // public function messages()
    // {
    //     return [
    //         'title.required' => 'A title is required',
    //         'body.required' => 'A message is required',
    //     ];
    // }
}
