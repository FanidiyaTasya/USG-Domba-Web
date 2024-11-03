<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VitalSignRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array {
        return [
            'assessment_id' => 'required|exists:initial_assessments,id',
            'temperature' => 'required|numeric|between:-50,50',
            'heart_rate' => 'required|integer|min:0',
            'respiratory_rate' => 'required|integer|min:0',
            'weight' => 'required|numeric|between:0,999.99',
            'status_condition' => 'required|in:Sehat,Tidak Sehat',
        ];
    }

    public function messages(): array {
        return [
            'assessment_id.required' => 'ID assessment harus diisi.',
            'assessment_id.exists' => 'Assessment tidak ditemukan.',
            'temperature.required' => 'Suhu harus diisi.',
            'temperature.numeric' => 'Suhu harus berupa angka.',
            'heart_rate.required' => 'Denyut jantung harus diisi.',
            'heart_rate.integer' => 'Denyut jantung harus berupa angka bulat.',
            'respiratory_rate.required' => 'Denyut napas harus diisi.',
            'respiratory_rate.integer' => 'Denyut napas harus berupa angka bulat.',
            'weight.required' => 'Berat harus diisi.',
            'weight.numeric' => 'Berat harus berupa angka.',
            'status_condition.required' => 'Status kondisi harus dipilih.',
            'status_condition.in' => 'Status kondisi harus salah satu dari: Sehat, Tidak Sehat.',
        ];
    }
}