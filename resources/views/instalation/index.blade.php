@extends('layout_default/content')

@section('title', 'RAW Data / BoschFPA5000 / CONFIG_NETWORK')

@section('content')
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">
            Dashboard /
        </span>
        Instalacje
    </h4>

    <!-- Basic Bootstrap Table -->

    <div class="card">
        <div>
            <h5 id="offcanvasEcommerceCustomerAddLabel" class="offcanvas-title">Add Customer</h5>
        </div>

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
                    @foreach ($instalations as $i)
                        <tr>
                            <td>{{ $cn->id }}</td>
                            <td><a
                                    href="{{ route('BoschFPA5000.NODE.index', ['CONFIG_NETWORK' => $cn->id]) }}">{{ $cn->HEADER->filename }}</a>
                            </td>
                            <td>{{ $i->HEADER->dataVersion }}</td>
                            <td>{{ $i->numberOfNodes }}</td>
                            <td><span class="badge rounded-pill bg-label-primary me-1">Aktywny</span></td>
                            <td>{{ $cn->created_at }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item"
                                            href="{{ route('BoschFPA5000.NODE.index', ['CONFIG_NETWORK' => $cn->id]) }}"><i
                                                class="mdi mdi-pencil-outline me-1"></i> Edycja </a>
                                        <a class="dropdown-item"
                                            href="{{ route('BoschFPA5000.NODE.index', ['CONFIG_NETWORK' => $cn->id]) }}"><i
                                                class="mdi mdi-delete me-1"></i> Usuń </a>
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
