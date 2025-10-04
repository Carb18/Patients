<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacienteRequest extends FormRequest
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
     * Define las reglas según los campos de la tabla 'paciente'
     */
    public function rules(): array
    {
        // Determina la instancia del paciente si estás actualizando (ruta PUT/PATCH)
        $pacienteId = $this->route('paciente') ? $this->route('paciente')->id : null;

        return [
            'tipo_documento_id' => ['required', 'exists:tipos_documento,id'],
            'numero_documento' => [
                'required',
                'string',
                'max:20',
                // Validación para asegurar que el documento es único, excluyendo el paciente actual en las actualizaciones
                'unique:paciente,numero_documento,' . $pacienteId,
            ],
            'nombre1' => ['required', 'string', 'max:50'],
            'nombre2' => ['nullable', 'string', 'max:50'],
            'apellido1' => ['required', 'string', 'max:50'],
            'apellido2' => ['nullable', 'string', 'max:50'],
            'genero_id' => ['required', 'exists:genero,id'],
            'departamento_id' => ['required', 'exists:departamentos,id'],
            'municipio_id' => ['required', 'exists:municipios,id'],
            // Ejemplo de validación de correo electrónico 
            'correo' => [
                'required',
                'email',
                'max:100',
                // Asegura que el correo es único, excluyendo el paciente actual en las actualizaciones
                'unique:paciente,correo,' . $pacienteId,
            ],
        ];
    }
}