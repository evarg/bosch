@extends('layout_default/content')

@section('content')

@section('title', 'Account settings - Account')

@section('page-script')
    <script src="{{ asset('assets/js/pages-account-settings-account.js') }}"></script>
@endsection

@section('content')


    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Account Settings /</span> Account
    </h4>

    @if ($errors->any())
        <div class="alert alert-danger">
            {{ __('user.error_validate') }}
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ __('user.success_validate') }}
        </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills flex-column flex-md-row mb-4 gap-2 gap-lg-0">
                <li class="nav-item"><a class="nav-link" href="javascript:void(0);"><i
                            class="mdi mdi-account-outline mdi-20px me-1"></i>{{ __('user.account') }}</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('pages/account-settings-notifications') }}"><i
                            class="mdi mdi-bell-outline mdi-20px me-1"></i>{{ __('user.notifications') }}</a></li>
            </ul>
            <div class="card mb-4">
                <h4 class="card-header">{{ __('user.profile_details') }}</h4>

                <!-- FORM photo upload -->
                <!--
                        <div class="card-body">
                            <form action="{{ route('profile_avatar.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="d-flex align-items-start align-items-sm-center gap-4">
                                    <img src="{{ asset('assets/img/avatars/1.png') }}" alt="user-avatar"
                                        class="d-block w-px-120 h-px-120 rounded" id="uploadedAvatar" />
                                    <div class="button-wrapper">
                                        <label for="upload" class="btn btn-primary me-2 mb-3" tabindex="0">
                                            <span class="d-none d-sm-block">{{ __('user.upload_new_photo') }}</span>
                                            <i class="mdi mdi-tray-arrow-up d-block d-sm-none"></i>
                                            <input type="file" id="upload" class="account-file-input" hidden
                                                accept="image/png, image/jpeg" />
                                        </label>
                                        <button type="submit" class="btn btn-outline-danger account-image-reset mb-3">
                                            <i class="mdi mdi-reload d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">{{ __('user.send_photo') }}</span>
                                        </button>
                                        <button type="button" class="btn btn-outline-danger account-image-reset mb-3">
                                            <i class="mdi mdi-reload d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">{{ __('user.reset') }}</span>
                                        </button>

                                        <div class="text-muted small">{{ __('user.allowed') }}</div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    -->

                <div class="card-body pt-2 mt-1">
                    <form id="formAccountSettings" method="POST" action="{{ route('profile.update', $user->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="row mt-2 gy-4">

                            <!-- FIELD: nick -->
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input class="form-control @error('nick') is-invalid @enderror" type="text"
                                        id="nick" name="nick" value="{{ old('nick', $user->nick ?? '') }}"
                                        autofocus />
                                    <label for="nick">{{ __('user.nick') }}</label>
                                </div>
                            </div>

                            <!-- FIELD: email -->
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input class="form-control @error('email') is-invalid @enderror" type="text"
                                        id="email" name="email"
                                        value="{{ old('email', default: $user->email ?? '') }}" />
                                    <label for="email">{{ __('user.email') }}</label>
                                </div>
                            </div>

                            <!-- FIELD: first name -->
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input class="form-control @error('name') is-invalid @enderror" type="text"
                                        id="firstName" name="name" value="{{ old('name', $user->name ?? '') }}"
                                        autofocus />
                                    <label for="firstName">{{ __('user.first_name') }}</label>
                                </div>
                            </div>

                            <!-- FIELD: last name -->
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input class="form-control" type="text" name="surname" id="lastName"
                                        value="{{ $user->surname }}" />
                                    <label for="lastName">{{ __('user.surname') }}</label>
                                </div>
                            </div>

                            <!-- FIELD: organization -->
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" class="form-control" id="organization" name="organization"
                                        value="{{ $user->organization }}" />
                                    <label for="organization">{{ __('user.organization') }}</label>
                                </div>
                            </div>

                            <!-- FIELD: phone -->
                            <div class="col-md-6">
                                <div class="input-group input-group-merge">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" id="phoneNumber" name="phone" class="form-control"
                                            placeholder="202 555 0111" value="{{ $user->phone }}" />
                                        <label for="phoneNumber">{{ __('user.phone') }}</label>
                                    </div>
                                    <span class="input-group-text">PL (+48)</span>
                                </div>
                            </div>

                            <!-- FIELD: address -->
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" class="form-control" id="address" name="address"
                                        placeholder="Address" value="{{ $user->address }}" />
                                    <label for="address">{{ __('user.address') }}</label>
                                </div>
                            </div>

                            <!-- FIELD: city -->
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input class="form-control" type="text" id="city" name="city"
                                        placeholder="California" value="{{ $user->city }}" />
                                    <label for="city">{{ __('user.city') }}</label>
                                </div>
                            </div>

                            <!-- FIELD: zip code -->
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" class="form-control" id="zipCode" name="zip_code"
                                        placeholder="231465" maxlength="6" value="{{ $user->zip_code }}" />
                                    <label for="zipCode">{{ __('user.zip_code') }}</label>
                                </div>
                            </div>

                            <!-- FIELD: country -->
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <select name="country" id="country"
                                        class="form-select @error('country') is-invalid @enderror">
                                        @foreach (config('app_data.countries') as $key => $value)
                                            <option value="{{ $key }}"
                                                {{ $user->country == $key ? 'selected' : '' }}>
                                                {{ $value }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('country')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <label for="country">{{ __('user.select_country') }}</label>
                                </div>
                            </div>

                            <!-- FIELD: language -->
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <select name="language" id="language"
                                        class="form-select @error('language') is-invalid @enderror">
                                        @foreach (config('app_data.languages') as $key => $value)
                                            <option value="{{ $key }}"
                                                {{ $user->language == $key ? 'selected' : '' }}>
                                                {{ $value }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('language')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <label for="language">{{ __('user.language') }}</label>
                                </div>
                            </div>

                            <!-- FIELD: time zone -->
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <select name="time_zone" id="timezone"
                                        class="form-select @error('timezone') is-invalid @enderror">
                                        @foreach (config('app_data.timezones') as $key => $value)
                                            <option value="{{ $key }}"
                                                {{ $user->time_zone == $key ? 'selected' : '' }}>
                                                {{ $value }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('timezone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror

                                    <label for="timeZones">{{ __('user.time_zone') }}</label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary me-2">{{ __('user.save') }}</button>
                            <button type="reset" class="btn btn-outline-secondary">{{ __('user.reset') }}</button>
                        </div>
                    </form>
                </div>
                <!-- /Account -->
            </div>
            <!--
                <div class="card">
                    <h5 class="card-header fw-normal">{{ __('user.delete_account') }}</h5>
                    <div class="card-body">
                        <div class="mb-3 col-12 mb-0">
                            <div class="alert alert-warning">
                                <h6 class="alert-heading mb-1">{{ __('user.text_delete_confirm_1') }}</h6>
                                <p class="mb-0">{{ __('user.text_delete_confirm_2') }}</p>
                            </div>
                        </div>
                        <form id="formAccountDeactivation" onsubmit="return false">
                            <div class="form-check mb-3 ms-3">
                                <input class="form-check-input" type="checkbox" name="accountActivation"
                                    id="accountActivation" />
                                <label class="form-check-label" for="accountActivation"></label>
                            </div>
                            <button type="submit" class="btn btn-danger">{{ __('user.delete_confirm_checkbox') }}</button>
                        </form>
                    </div>
                </div>
            -->
        </div>
    </div>
@endsection
