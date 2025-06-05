<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MemberRequest extends FormRequest
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
        $rules = [
            // 'email'           => 'required|email|unique:members,email',
            'name'            => 'required|max:100',
            'last_name'       => 'required|max:100',
            'birth_date'      => 'required|date',
            'nationality'     => 'required|max:100',
            'mobile'          => 'required|max:20',
            'address'         => 'required|max:255',
            'postcode'        => 'required|max:10',
            'emergency_phone' => 'required|max:20',
            'emergency_name'  => 'required|max:100',
            'membership_plan' => 'required|max:100',
            'skill_level'     => 'required|max:50',
            'start_day'       => 'required|date',
            'status'          => 'sometimes|required',
        ];

        if ($this->isMethod('patch') || $this->isMethod('put')) {
            $rules['email'] = [
                'required',
                'email',
                Rule::unique('members', 'email')->ignore($this->member),
            ];
        } else {
            // Dla tworzenia nowego rekordu (store)
            $rules['email'] = 'required | email | unique:members,email';
        }

        return $rules;

    }

    public function messages()
    {

        return [
            'email.unique' => 'This email already exist',

        ];
    }

}
