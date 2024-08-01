@extends('layout_default/content')

@section('title', 'Tables - Basic Tables')

@section('content')
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">
        RAW Data / BoschFPA5000 / 
        </span>
        {{ $breadCrumps }}
    </h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">


        <div class="card">
            <!-- <h5 class="card-header">Table Header & Footer</h5> -->
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th width="6%">ID</th>
                            <th width="6%">Typ</th>
                            <th width="6%">netGroup</th>
                            <th width="6%">netNode</th>
                            <th>Etykieta</th>
                            <th width="6%">STATUS</th>
                            <th width="6%">Akcje</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($modules as $module)
                            <tr>
                                <td>{{ $module->id }}</td>
                                <td>{{ $module->slot }}</td>
                                <td>{{ $module->label }}</td>
                                <td>{{ $module->MODULEABLE_type }}</td>
                                <td><span class="badge rounded-pill bg-label-primary me-1">Aktywny</span></td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                    class="mdi mdi-pencil-outline me-1"></i> Edit</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                    class="mdi mdi-trash-can-outline me-1"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot class="table-border-bottom-0">
                        <tr>
                            <th>ID</th>
                            <th>Typ</th>
                            <th>netGroup</th>
                            <th>netNode</th>
                            <th>Etykieta</th>
                            <th>STATUS</th>
                            <th>Akcje</th>

                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

    @endsection
