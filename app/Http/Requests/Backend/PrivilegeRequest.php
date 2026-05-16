<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PrivilegeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $privilegeId = $this->route('privilege')?->id;

        return [
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('privileges', 'name')->ignore($privilegeId),
            ],
            'description' => ['nullable', 'string'],
        ];
    }
}