@extends('layouts/contentNavbarLayout')

@section('title', 'Tables - Basic Tables')

@section('content')
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">BoschFPA5000 /</span> CONFIG_NETWORK
    </h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">


        <div class="card">
            <!-- <h5 class="card-header">Table Header & Footer</h5> -->
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th width="4%">ID</th>
                            <th>Nazwa pliku</th>
                            <th width="6%">Wersja</th>
                            <th width="4%">Liczba węzłów</th>
                            <th width="6%">Status</th>
                            <th width="6%">Data utworzenia</th>
                            <th width="6%">Akcje</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cns as $cn)
                            <tr onclick="window.location='/Bosch_FPA5000/NODE?config_network={{ $cn->id }}'">
                                <td>{{ $cn->id }}</td>
                                <td>{{ $cn->HEADER->filename }}</td>
                                <td>{{ $cn->HEADER->dataVersion }}</td>
                                <td>{{ $cn->numberOfNodes }}</td>
                                <td><span class="badge rounded-pill bg-label-primary me-1">Aktywny</span></td>
                                <td>{{ $cn->created_at }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                    class="mdi mdi-pencil-outline me-1"></i> Edycja </a>
                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                    class="mdi mdi-trash-can-outline me-1"></i> Usuń </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot class="table-border-bottom-0">
                        <tr>
                            <th>ID</th>
                            <th>Nazwa pliku</th>
                            <th>Wersja</th>
                            <th>Liczba węzłów</th>
                            <th>Status</th>
                            <th>Data utworzenia</th>
                            <th>Akcje</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

    @endsection