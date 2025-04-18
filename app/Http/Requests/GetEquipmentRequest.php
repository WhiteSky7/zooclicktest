<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GetEquipmentRequest extends FormRequest {
    public function authorize(): bool {
        return true;
    }

    public function rules(): array {
        return [
            'id' => ['sometimes', 'integer', 'exists:equipment,id'],
            'equipment_type_id' => ['sometimes', 'integer', 'exists:equipment_types,id'],
            'serial_number' => ['sometimes', 'string', 'max:255'],
            'note' => ['sometimes', 'string', 'max:1000'],
            'created_from' => ['sometimes', 'date'],
            'created_to' => ['sometimes', 'date', 'after_or_equal:created_from'],
            'per_page' => ['sometimes', 'integer', 'min:1', 'max:100'],
        ];
    }
}
