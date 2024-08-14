@extends('layout_default/content')

@section('title', 'Zuploadowane zdarzenia')

@section('content')

  <div class="card">
    <div class="card-header pb-0">
      <h5 class="card-title mb-0">
        Zapisane pliki historii
      </h5>
    </div>
    <div class="card-datatable table-responsive">
      <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
        <div class="card-header d-block d-md-flex rounded-0 flex-wrap pb-md-0 py-0">
          <div class="me-5 ms-n2 mb-n5 mb-md-0">
            <div id="DataTables_Table_0_filter" class="dataTables_filter">
              <label><input type="search" class="form-control form-control-sm" placeholder="Search"
                  aria-controls="DataTables_Table_0" /></label>
            </div>
          </div>
          <div class="d-flex justify-content-center justify-content-md-end align-items-baseline">
            <div class="dt-action-buttons d-flex align-items-center justify-content-sm-center gap-2">
              <div class="dataTables_length" id="DataTables_Table_0_length">
                <label><select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"
                    class="form-select form-select-sm">
                    <option value="10"> 7 </option>
                    <option value="25"> 10 </option>
                    <option value="50"> 20 </option>
                    <option value="100"> 50 </option>
                  </select></label>
              </div>
              <div class="dt-buttons flex-wrap">
                <button
                  class="btn btn-secondary buttons-collection dropdown-toggle btn-outline-secondary me-1 waves-effect waves-light"
                  tabindex="0" aria-controls="DataTables_Table_0" type="button" aria-haspopup="dialog"
                  aria-expanded="false">
                  <span><i class="ri-upload-2-line ri-16px me-2"></i><span class="d-none d-sm-inline-block">Export
                    </span></span>
                </button>
                <button class="btn btn-outline-secondary btn-gr" tabindex="0" type="button">
                  <span class="d-none d-sm-inline-block"><a href="{{ route('events_upload.create') }}"
                      style="color:inherit">Załaduj plik</a></span>
                </button>
              </div>
            </div>
          </div>
        </div>
        <table class="datatables-users table dataTable no-footer dtr-column" id="DataTables_Table_0"
          aria-describedby="DataTables_Table_0_info" style="width: 1394px">
          <thead>
            <tr>
              <th class="control sorting_disabled dtr-hidden" style="width: 0px; display: none;"></th>
              <th class="sorting_disabled" style="width: 42px">
                Id
              </th>
              <th class="sorting sorting_desc" style="width: 284px">
                Nazwa pliku
              </th>
              <th class="sorting" style="width: 105px">
                Status
              </th>
              <th class="text-center sorting" style="width: 224px">
                Rozmiar pliku
              </th>
              <th class="text-center sorting" style="width: 284px">
                Data utworzenia
              </th>
              <th class="sorting_disabled" style="width: 88px">
                Akcje
              </th>
            </tr>
          </thead>
          <tbody>

            @foreach ($eventsUpload as $eu)
              <tr class="odd">
                <td class="control dtr-hidden" tabindex="0" style="display: none"></td>
                <td>{{ $eu->id }}</td>
                <td class="sorting_1">
                  <a href="{{ route('events_upload.show', 1) }}" class="text-truncate text-heading">
                    {{ $eu->org_file_name }}
                  </a>
                </td>
                <td><span class="badge rounded-pill bg-label-primary me-1">
                    {{ __('events_upload_status.' . $eu->status->value) }}</span></td>
                <td class="text-center">{{ $eu->size }}</td>
                <td class="text-center">{{ $eu->created_at }}</td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i
                        class="mdi mdi-dots-vertical"></i></button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{ route('events_upload.edit', $eu->id) }}"><i
                          class="mdi mdi-pencil-outline me-1"></i> Edycja </a>
                      <a class="dropdown-item" href="{{ route('events_upload.destroy', $eu->id) }}"><i
                          class="mdi mdi-delete me-1"></i> Usuń </a>
                    </div>
                  </div>
                </td>
              </tr>
            @endforeach

          </tbody>
        </table>

        <div class="row mx-1">
          <div class="col-sm-12 col-md-6">
            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
              Displaying 1 to 4 of 4
              entries
            </div>
          </div>
          <div class="col-sm-12 col-md-6">
            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
              <ul class="pagination">
                <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous">
                  <a aria-controls="DataTables_Table_0" aria-disabled="true" role="link" data-dt-idx="previous"
                    tabindex="-1" class="page-link">Previous</a>
                </li>
                <li class="paginate_button page-item active">
                  <a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/laravel/user-management#"
                    aria-controls="DataTables_Table_0" role="link" aria-current="page" data-dt-idx="0"
                    tabindex="0" class="page-link">1</a>
                </li>
                <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next">
                  <a aria-controls="DataTables_Table_0" aria-disabled="true" role="link" data-dt-idx="next"
                    tabindex="-1" class="page-link">Next</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Offcanvas to add new user -->
  </div>

@endsection
