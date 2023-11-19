<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAppointmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'doctor_id' => 'required|exists:users,id',
            'patient_id' => 'required|exists:users,id',
            'name' => 'required|string|max:250',
            'institution' => 'required|string|max:250',
            'department' => 'required|string|max:250',
            'appointment_start_date' => 'required|date',
            'appointment_end_date' => 'required|date|after_or_equal:appointment_start_date',
            'notes' => 'nullable|string',
            'description' => 'required|string',
            'created_by' => 'required|exists:users,id',
            'updated_by' => 'nullable|exists:users,id',
        ];
    }
}
