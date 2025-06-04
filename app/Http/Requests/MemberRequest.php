<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
        return [
            'name'            => 'required | max:100',
            'last_name'       => 'required | max:100',
            'birth_date'      => 'required | date',
            'nationality'     => 'required | max:100',
            'mobile'          => 'required | max:20',
            'email'           => 'required | email|max:255',
            'address'         => 'required | max:255',
            'postcode'        => 'required | max:10',
            'emergency_phone' => 'required | max:20',
            'emergency_name'  => 'required | max:100',
            'membership_plan' => 'required | max:100',
            'skill_level'     => 'required | max:50',
            // 'skill_level_updated' => 'required | date',
            'start_day'       => 'required | date',
        ];
    }
}
