@extends('layout_default/content')

@section('title', 'RAW Data / BoschFPA5000 / CONFIG_NETWORK')

@section('content')

  <div class="row">
    <!-- User Sidebar -->
    <div class="col-xl-9 col-lg-5 col-md-8 order-1 order-md-0">
      <!-- User Card -->
      <div class="card mb-6">
        <div class="card-header pb-0">
          <h5 class="card-title mb-0">
            Zapisany pliki historii
          </h5>
        </div>

        <div class="card-body pt-4">
          <div class="info-container">
            <ul class="list-unstyled mb-2">
              <li class="mb-2">
                <span class="h6">Nazwa pliku:</span>
                <span>{{ $eventsUpload->org_file_name }}</span>
              </li>
              <li class="mb-2">
                <span class="h6">Data utworzenia:</span>
                <span>{{ $eventsUpload->created_at }}</span>
              </li>
              <li class="mb-2">
                <span class="h6">Status:</span>
                <span class="badge bg-label-success rounded-pill">
                  {{ __('events_upload_status.' . $eventsUpload->status->value) }}
                </span>
              </li>
              <li class="mb-2">
                <span class="h6">Rozmiar pliku:</span>
                <span>{{ $eventsUpload->size }}</span>
              </li>
              <li class="mb-2">
                <span class="h6">Opis:</span>
                <span>{{ $eventsUpload->desc }}</span>
              </li>
            </ul>
            <div class="d-flex justify-content-center">
              <a href="javascript:;" class="btn btn-primary me-4" data-bs-target="#editUser"
                data-bs-toggle="modal">Edit</a>
              <a href="javascript:;" class="btn btn-outline-danger suspend-user">Suspend</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /User Card -->
    </div>
    <!--/ User Sidebar -->

    <!-- User Content -->
    <div class="col-xl-3 col-lg-7 col-md-4 order-0 order-md-1 invoice-actions">
        <div class="card mb-6">
            <div class="card-body">
                <button type="submit" class="btn btn-primary d-grid w-100 mb-4 waves-effect waves-light"
                    style="color: #fff; background-color: #8c57ff; border-color: #8c57ff;">
                    <span class="d-flex align-items-center justify-content-center text-nowrap">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M4 3h14l2.707 2.707a1 1 0 0 1 .293.707V20a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1m3 1v5h9V4zm-1 8v7h12v-7zm7-7h2v3h-2z" />
                        </svg> Zapisz</span>
                </button>
            </div>
        </div>
    </div>
  </div>

@endsection
