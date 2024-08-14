@extends('layout_default/content')

@section('title', 'Upload zdarzeń')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action=" {{ route('events_upload.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row invoice-add">
            <!-- Invoice Add-->

            <div class="col-lg-9 col-12 mb-lg-0 mb-6">
                <div class="card invoice-preview-card p-sm-12 p-6">
                    <div class="card-body invoice-preview-header rounded p-6">
                        <div class="d-flex flex-wrap flex-column flex-sm-row justify-content-between text-heading">
                            <div class="mb-md-0 mb-6">
                                <div class="d-flex svg-illustration align-items-center gap-3 mb-6">
                                    <span class="app-brand-logo demo"><span style="color:#9055FD;">
                                            <img src="{{ asset('assets/img/bosch-logo.png') }}"
                                                class="scaleX-n1-rtl me-4 mb-4 pb-2" width="120" alt="view sales">
                                        </span>
                                    </span>
                                    <span class="mb-0 app-brand-text fw-semibold">FPA-5000</span>
                                </div>
                            </div>
                            <div class="col-md-5 col-8 pe-0 ps-0 ps-md-2">
                                <p class="mb-1">Upload pliku ze zdarzeniami</p>
                                <p class="mb-0">centrali Bosch FPA-5000</p>
                            </div>
                        </div>
                    </div>

                    <div class="card-body px-0">
                        <div class="row my-1">
                            <div class="col-md-12 col-sm-12 col-12 mb-sm-0 mb-6">
                                <div class="row">
                                    <div class="form-floating form-floating-outline mb-6">
                                        <input type="file" class="form-control" id="upload-file" required
                                            name="ufile" />
                                        <label for="upload-file">Plik zdarzeń</label>
                                    </div>
                                    <div class="form-floating form-floating-outline mb-6">
                                        <textarea class="form-control" rows="4" placeholder="Dodatkowy opis do uploadu" id="description"
                                            style="height: 100px" name="desc"></textarea>
                                        <label for="description">Dodatkowy opis</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Invoice Add-->

            <!-- Invoice Actions -->
            <div class="col-lg-3 col-12 invoice-actions">
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
            <!-- /Invoice Actions -->
        </div>
    </form>
@endsection
