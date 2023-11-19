<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAppointmentRequest extends FormRequest
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
            'doctor_id' => 'sometimes|required|exists:users,id',
            'patient_id' => 'sometimes|required|exists:users,id',
            'name' => 'sometimes|required|string|max:250',
            'institution' => 'sometimes|required|string|max:250',
            'department' => 'sometimes|required|string|max:250',
            'appointment_start_date' => 'sometimes|required|date',
            'appointment_end_date' => 'sometimes|required|date|after_or_equal:appointment_start_date',
            'notes' => 'nullable|string',
            'description' => 'nullable|string',
            'created_by' => 'sometimes|required|exists:users,id',
            'updated_by' => 'required|exists:users,id',
        ];
    }
}
