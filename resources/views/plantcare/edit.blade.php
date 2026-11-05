@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card shadow-sm border-0">

                    {{-- encabezado del formulario --}}
                    <div class="card-header py-3" style="background-color: #008332;">
                        <h5 class="card-title mb-0 text-white text-center fw-bold">
                            Editar cuidado de planta
                        </h5>
                    </div>

                    <div class="card-body p-4">
                        <form action="{{ route('plantcare.update', $plant_care->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            {{-- seleccionar la planta --}}
                            <div class="mb-4">
                                <label for="plant_id" class="form-label fw-semibold text-secondary">
                                    Planta
                                </label>

                                <select class="form-select form-select-lg" id="plant_id" name="plant_id">
                                    <option value="">Sin planta</option>

                                    @foreach ($plants as $plant)
                                        <option value="{{ $plant->id }}"
                                            {{ old('plant_id', $plant_care->plant_id) == $plant->id ? 'selected' : '' }}>
                                            {{ $plant->common_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- editar el tipo de cuidado --}}
                            <div class="mb-4">
                                <label for="tipo" class="form-label fw-semibold text-secondary">
                                    Tipo de cuidado
                                </label>

                                <input
                                    type="text"
                                    class="form-control form-control-lg"
                                    id="tipo"
                                    name="tipo"
                                    value="{{ old('tipo', $plant_care->tipo) }}"
                                    placeholder="Ej. Riego, poda o fertilización"
                                    required>
                            </div>

                            {{-- editar la descripción --}}
                            <div class="mb-4">
                                <label for="descripcion" class="form-label fw-semibold text-secondary">
                                    Descripción
                                </label>

                                <textarea
                                    class="form-control form-control-lg"
                                    id="descripcion"
                                    name="descripcion"
                                    rows="3"
                                    placeholder="Describe cómo realizar el cuidado"
                                    required>{{ old('descripcion', $plant_care->descripcion) }}</textarea>
                            </div>

                            {{-- editar la frecuencia --}}
                            <div class="mb-4">
                                <label for="frecuencia" class="form-label fw-semibold text-secondary">
                                    Frecuencia
                                </label>

                                <input
                                    type="text"
                                    class="form-control form-control-lg"
                                    id="frecuencia"
                                    name="frecuencia"
                                    value="{{ old('frecuencia', $plant_care->frecuencia) }}"
                                    placeholder="Ej. Cada 7 días"
                                    required>
                            </div>

                            {{-- botones del formulario --}}
                            <div class="d-grid gap-2 mt-5">
                                <button
                                    type="submit"
                                    class="btn text-white fw-bold px-4 py-2 fs-5 shadow-sm"
                                    style="background-color: #008332; border-radius: 0.5rem;">
                                    Actualizar cuidado
                                </button>

                                <a href="{{ route('plantcare.index') }}"
                                    class="btn btn-link btn-sm text-secondary text-decoration-none text-center">
                                    Cancelar
                                </a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
