<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFootballplayerRequest extends FormRequest
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
            'photo' => 'required',
            'last_name' => 'required|min:3',
            'first_name' => 'required|min:3',
            'player_name' => 'required|min:2|unique:football_players',
            'birth_day' => 'required|date',
            'size' => 'required',
            'weight' => 'required',
            'description' => 'required|max:500',
        ];
    }
}
