<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateProfileRequest extends FormRequest
{
    protected ?User $user = null;

    public function authorize(): bool
    {
        $this->user = Auth::user();

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
            'nick' => 'required|string|min:4|max:255',
            'email' => [
                'required', 'email',
                Rule::unique('users', 'email')->ignore($this->user),
            ],
            'name' => 'required|string|min:4|max:255',

            'surname' => 'nullable|string|min:1|max:255',
            'organization' => 'nullable|string|min:1|max:255',
            'phone' => 'nullable|string|min:1|max:255',
            'address' => 'nullable|string|min:1|max:255',
            'city' => 'nullable|string|min:1|max:255',
            'zip_code' => 'nullable|string|min:1|max:10',
            'country' => 'nullable|string|min:1|max:255',
            'language' => 'nullable|string|min:1|max:255',
            'time_zone' => 'nullable|string|min:1|max:255',
        ];
    }
}
