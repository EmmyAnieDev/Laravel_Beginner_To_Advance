<?php

namespace App\Http\Requests\Api\v1;

use Illuminate\Foundation\Http\FormRequest;

class StudentUpdateRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'image' => 'sometimes|string',
            'name' => 'sometimes|string|max:255',
            'grade' => 'sometimes|string',
            'school_id' => 'sometimes|integer',
        ];
    }
}
