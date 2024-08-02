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
<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-pills flex-column flex-md-row mb-4 gap-2 gap-lg-0">
            <li class="nav-item"><a class="nav-link" href="{{ route('instalation.create') }}"><i class="mdi mdi-note-plus-outline mdi-20px me-1"></i>DODAJ</a></li>
        </ul>
    </div>
    <div class="card">
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th width="4%">ID</th>
                        <th>Nazwa</th>
                        <th width="6%">Status</th>
                        <th width="6%">Data utworzenia</th>
                        <th width="6%">Akcje</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($instalations as $i)
                    <tr>
                        <td>{{ $i->id }}</td>
                        <td><a href="{{ route('instalation.show', ['instalation' => $i->id]) }}">{{ $i->name }}</a></td>
                        <td><span class="badge rounded-pill bg-label-primary me-1">Aktywny</span></td>
                        <td><span>{{ $i->updated_at->format('Y, F d') }}</span>
                            <span class="note" style="display: block; color: #828d9f;font-size: .75rem">{{ $i->updated_at->format('H:i') }}</span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('instalation.edit', ['instalation' => $i->id]) }}"><i class="mdi mdi-pencil-outline me-1"></i> Edycja </a>
                                    <a class="dropdown-item" href="{{ route('instalation.destroy', ['instalation' => $i->id]) }}"><i class="mdi mdi-delete me-1"></i> Usuń </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot class="table-border-bottom-0">
                    <tr>
                        <th width="4%">ID</th>
                        <th>Nazwa</th>
                        <th width="6%">Status</th>
                        <th width="6%">Data utworzenia</th>
                        <th width="6%">Akcje</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection