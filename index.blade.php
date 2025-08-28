<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">

                <div class="card-header pb-0">
                    <h5 class="mb-0">OCUPACIÓN DE INVENTARIOS</h5>
                </div>

                {{-- Filtros --}}
                <div class="card-body px-4 pt-0 pb-2">
                    <form method="GET" action="{{ url()->current() }}">
                        <div class="row">
                            <div class="col-12 mt-4">
                                <div class="d-flex gap-3 mb-3 flex-wrap">
                                    
                                    <div class="etiqueta etiqueta-manana"
                                       onclick="window.location='{{ route('inventarios.index') }}?programa=Imagen Mañana&fecha=2025-04-15'">
                                        <span class="etiqueta-core">IMAGEN MAÑANA</span>
                                    </div>

                                    <div class="etiqueta etiqueta-tarde"
                                        onclick="window.location='{{ route('inventarios.index', ['programa' => 'Imagen Tarde', 'fecha' => '2025-07-15']) }}'">
                                        <span class="etiqueta-core">IMAGEN TARDE</span>
                                    </div>


                                    <div class="etiqueta etiqueta-redes">
                                        <span class="etiqueta-core">REDES SOCIALES</span>
                                        <span class="etiqueta-sash sash-rojo"></span>
                                        <span class="etiqueta-sash sash-azul"></span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>




                {{-- Tabla de datos --}}
                <div class="card-body px-4 pt-0 pb-4">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Fecha</th>
                                    <th>Programa</th>
                                    <th>TEST</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($jsonData as $item)
                                    <tr>
                                        <td>{{ $item['id'] }}</td>
                                        <td>{{ $item['Fecha'] }}</td>
                                        <td>{{ $item['Programa'] }}</td>
                                        <td>{{ $item['TEST'] }}</td>
                                        <td>{{ $item['Status0'] }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">No hay datos disponibles</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

            </div> <!-- end card -->
        </div>
    </div>
</div>
