```blade
@extends('layouts.app')

@section('content')
    <div class="container mt-5">

        {{-- botón para regresar --}}
        <div class="mb-3">
            <a href="{{ route('plantcare.index') }}"
                class="btn text-white fw-semibold d-inline-flex align-items-center justify-content-center"
                style="background-color: #008332; border-radius: 2rem; width: 45px; height: 45px;">
                <i class="bi bi-arrow-left fs-5"></i>
            </a>
        </div>

        {{-- tarjeta con los detalles del cuidado --}}
        <div class="card shadow border-0 overflow-hidden mx-auto" style="max-width: 800px;">

            {{-- encabezado de la ficha --}}
            <div class="card-header text-white p-4" style="background-color: #008332;">
                <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                    <div>
                        <span class="badge bg-white text-uppercase mb-2 fw-bold"
                            style="color: #008332;">
                            Ficha de cuidado de planta
                        </span>

                        <h2 class="mb-0 fw-light">
                            <strong>
                                {{ $plant_care->plant ? $plant_care->plant->common_name : 'Sin planta' }}
                            </strong>
                        </h2>
                    </div>

                    <span class="text-white fs-5">
                        ID: #{{ $plant_care->id }}
                    </span>
                </div>
            </div>

            {{-- información del cuidado --}}
            <div class="card-body p-4 bg-light">
                <div class="bg-white p-4 rounded shadow-sm mb-2">

                    <h5 class="text-secondary border-bottom pb-2 mb-4">
                        Datos del cuidado
                    </h5>

                    <div class="row g-4">

                        {{-- nombre de la planta --}}
                        <div class="col-md-6">
                            <small class="text-muted d-block text-uppercase fw-bold">
                                Planta
                            </small>

                            <span class="text-dark fs-5 fw-semibold">
                                {{ $plant_care->plant ? $plant_care->plant->common_name : 'Sin planta' }}
                            </span>
                        </div>

                        {{-- tipo de cuidado --}}
                        <div class="col-md-6">
                            <small class="text-muted d-block text-uppercase fw-bold">
                                Tipo de cuidado
                            </small>

                            <span class="text-dark fs-5 fw-semibold">
                                {{ $plant_care->tipo }}
                            </span>
                        </div>

                        {{-- descripción --}}
                        <div class="col-12">
                            <small class="text-muted d-block text-uppercase fw-bold">
                                Descripción
                            </small>

                            <p class="text-dark fs-5 mb-0">
                                {{ $plant_care->descripcion }}
                            </p>
                        </div>

                        {{-- frecuencia --}}
                        <div class="col-md-6">
                            <small class="text-muted d-block text-uppercase fw-bold">
                                Frecuencia
                            </small>

                            <span class="text-dark fs-5 fw-semibold">
                                {{ $plant_care->frecuencia }}
                            </span>
                        </div>

                    </div>
                </div>
            </div>

            {{-- fechas de registro y actualización --}}
            <div class="card-footer bg-white border-0 px-4 py-3 border-top text-muted">
                <div class="row text-center text-md-start">

                    <div class="col-md-6 mb-2 mb-md-0">
                        <i class="bi bi-calendar-plus me-1"></i>
                        <strong>Creado el:</strong>

                        {{ $plant_care->created_at
                            ? $plant_care->created_at->format('d/m/Y H:i')
                            : 'Sin fecha' }}
                    </div>

                    <div class="col-md-6 text-md-end">
                        <i class="bi bi-arrow-clockwise me-1"></i>
                        <strong>Última actualización:</strong>

                        {{ $plant_care->updated_at
                            ? $plant_care->updated_at->format('d/m/Y H:i')
                            : 'Sin fecha' }}
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
```
