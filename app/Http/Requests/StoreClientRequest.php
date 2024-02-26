<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'Client_State_ID' => 'required',
            'Client_Name' => 'required|max:200|alpha:ascii',
            'Client_Description' => 'required',
            'Client_Location' => 'required|max:200',
            'Client_Phone' => 'required|max:200',
            'Client_InscriptionDate' => 'required|date',
            'Client_SpendedMoney' => 'required|decimal:0,4',
            
        ];
    }
}
