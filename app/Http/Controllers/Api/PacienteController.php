<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Paciente;
use App\Http\Requests\PacienteRequest; // Importa el Form Request
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     * Muestra la lista de pacientes (Requisito: Mostrar una lista de pacientes, punto 3.2)
     */
    public function index()
    {
        // Se utiliza 'with' para cargar las relaciones (eager loading) y evitar N+1 queries.
        $pacientes = Paciente::with(['tipoDocumento', 'genero', 'departamento', 'municipio'])
            ->orderBy('id', 'desc')
            ->paginate(10); // Opcional: Implementando paginación (Desafío Extra [cite: 121])

        return response()->json($pacientes, 200);
    }

    /**
     * Store a newly created resource in storage.
     * Almacena un nuevo paciente (Requisito: Crear paciente, punto 3.1)
     */
    public function store(PacienteRequest $request)
    {
        // PacienteRequest ya validó los datos, si pasa, podemos crearlo directamente.
        $paciente = Paciente::create($request->validated());

        // Retorna el nuevo paciente con un código de estado 201 (Created)
        return response()->json([
            'message' => 'Paciente creado correctamente',
            'paciente' => $paciente->load(['tipoDocumento', 'genero', 'departamento', 'municipio']) // Carga las relaciones para la respuesta
        ], 201);
    }

    /**
     * Display the specified resource.
     * Muestra un paciente específico (Requisito: Leer paciente, punto 3.1)
     */
    public function show(Paciente $paciente)
    {
        // Carga las relaciones antes de devolver la respuesta
        return response()->json($paciente->load(['tipoDocumento', 'genero', 'departamento', 'municipio']), 200);
    }

    /**
     * Update the specified resource in storage.
     * Actualiza un paciente (Requisito: Actualizar paciente, punto 3.3)
     */
    public function update(PacienteRequest $request, Paciente $paciente)
    {
        // PacienteRequest ya validó los datos
        $paciente->update($request->validated());

        return response()->json([
            'message' => 'Paciente actualizado correctamente',
            'paciente' => $paciente->load(['tipoDocumento', 'genero', 'departamento', 'municipio'])
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     * Elimina un paciente (Requisito: Eliminar paciente, punto 3.3)
     */
    public function destroy(Paciente $paciente)
    {
        $paciente->delete();

        return response()->json([
            'message' => 'Paciente eliminado correctamente'
        ], 200);
    }
}