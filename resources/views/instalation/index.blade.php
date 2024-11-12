@extends('layout_default/content')

@section('title', 'RAW Data / BoschFPA5000 / CONFIG_NETWORK')

@section('content')

  <div class="card">
    <div class="card-header pb-0">
      <h5 class="card-title mb-0">
        Search Filter
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
                <button class="btn btn-outline-secondary btn-gr" tabindex="0" aria-controls="DataTables_Table_0"
                  type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser">
                  <span><i class="ri-add-line ri-16px me-0 me-sm-2 align-baseline"></i><span
                      class="d-none d-sm-inline-block">Add New
                      User</span></span>
                </button>
              </div>
            </div>
          </div>
        </div>
        <table class="datatables-users table dataTable no-footer dtr-column" id="DataTables_Table_0"
          aria-describedby="DataTables_Table_0_info" style="width: 1394px">
          <thead>
            <tr>
              <th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1"
                style="
                                width: 0px;
                                display: none;
                            "
                aria-label=""></th>
              <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 77px" aria-label="Id">
                Id
              </th>
              <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                colspan="1" style="width: 290px" aria-sort="descending"
                aria-label="User: activate to sort column ascending">
                User
              </th>
              <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                style="width: 346px" aria-label="Email: activate to sort column ascending">
                Email
              </th>
              <th class="text-center sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                colspan="1" style="width: 184px" aria-label="Verified: activate to sort column ascending">
                Verified
              </th>
              <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 283px" aria-label="Actions">
                Actions
              </th>
            </tr>
          </thead>
          <tbody>
            <tr class="odd">
              <td class="control dtr-hidden" tabindex="0" style="display: none"></td>
              <td class="" style="">
                <span>1</span>
              </td>
              <td class="sorting_1" style="">
                <div class="d-flex justify-content-start align-items-center user-name">
                  <div class="avatar-wrapper">
                    <div class="avatar avatar-sm me-3">
                      <span class="avatar-initial rounded-circle bg-label-dark">T</span>
                    </div>
                  </div>
                  <div class="d-flex flex-column">
                    <a href="{{ route('instalation.show', 1) }}" class="text-truncate text-heading"><span
                        class="fw-medium">Test</span></a>
                  </div>
                </div>
              </td>
              <td class="" style="">
                <span class="user-email">test@gmail.co</span>
              </td>
              <td class="text-center" style="">
                <i class="ri-shield-line ri-24px text-danger"></i>
              </td>
              <td class="" style="">
                <div class="d-flex align-items-center gap-50">
                  <button class="btn btn-sm btn-icon edit-record btn-text-secondary rounded-pill waves-effect"
                    data-id="115" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser">
                    <i class="ri-edit-box-line ri-20px"></i></button><button
                    class="btn btn-sm btn-icon delete-record btn-text-secondary rounded-pill waves-effect"
                    data-id="115">
                    <i class="ri-delete-bin-7-line ri-20px"></i></button><button
                    class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect dropdown-toggle hide-arrow"
                    data-bs-toggle="dropdown">
                    <i class="ri-more-2-line ri-20px"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end m-0">
                    <a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account"
                      class="dropdown-item">View</a><a href="javascript:;" class="dropdown-item">Suspend</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr class="even">
              <td class="control dtr-hidden" tabindex="0" style="display: none"></td>
              <td class="" style="">
                <span>2</span>
              </td>
              <td class="sorting_1" style="">
                <div class="d-flex justify-content-start align-items-center user-name">
                  <div class="avatar-wrapper">
                    <div class="avatar avatar-sm me-3">
                      <span class="avatar-initial rounded-circle bg-label-success">JD</span>
                    </div>
                  </div>
                  <div class="d-flex flex-column">
                    <a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account"
                      class="text-truncate text-heading"><span class="fw-medium">John
                        Doe</span></a>
                  </div>
                </div>
              </td>
              <td class="" style="">
                <span class="user-email">johndoe@user.com</span>
              </td>
              <td class="text-center" style="">
                <i class="ri-shield-line ri-24px text-danger"></i>
              </td>
              <td class="" style="">
                <div class="d-flex align-items-center gap-50">
                  <button class="btn btn-sm btn-icon edit-record btn-text-secondary rounded-pill waves-effect"
                    data-id="105" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser">
                    <i class="ri-edit-box-line ri-20px"></i></button><button
                    class="btn btn-sm btn-icon delete-record btn-text-secondary rounded-pill waves-effect"
                    data-id="105">
                    <i class="ri-delete-bin-7-line ri-20px"></i></button><button
                    class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect dropdown-toggle hide-arrow"
                    data-bs-toggle="dropdown">
                    <i class="ri-more-2-line ri-20px"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end m-0">
                    <a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account"
                      class="dropdown-item">View</a><a href="javascript:;" class="dropdown-item">Suspend</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr class="odd">
              <td class="control dtr-hidden" tabindex="0" style="display: none"></td>
              <td class="" style="">
                <span>3</span>
              </td>
              <td class="sorting_1" style="">
                <div class="d-flex justify-content-start align-items-center user-name">
                  <div class="avatar-wrapper">
                    <div class="avatar avatar-sm me-3">
                      <span class="avatar-initial rounded-circle bg-label-success">G</span>
                    </div>
                  </div>
                  <div class="d-flex flex-column">
                    <a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account"
                      class="text-truncate text-heading"><span class="fw-medium">Guest</span></a>
                  </div>
                </div>
              </td>
              <td class="" style="">
                <span class="user-email">guest@guest.com</span>
              </td>
              <td class="text-center" style="">
                <i class="ri-shield-line ri-24px text-danger"></i>
              </td>
              <td class="" style="">
                <div class="d-flex align-items-center gap-50">
                  <button class="btn btn-sm btn-icon edit-record btn-text-secondary rounded-pill waves-effect"
                    data-id="100" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser">
                    <i class="ri-edit-box-line ri-20px"></i></button><button
                    class="btn btn-sm btn-icon delete-record btn-text-secondary rounded-pill waves-effect"
                    data-id="100">
                    <i class="ri-delete-bin-7-line ri-20px"></i></button><button
                    class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect dropdown-toggle hide-arrow"
                    data-bs-toggle="dropdown">
                    <i class="ri-more-2-line ri-20px"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end m-0">
                    <a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account"
                      class="dropdown-item">View</a><a href="javascript:;" class="dropdown-item">Suspend</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr class="even">
              <td class="control dtr-hidden" tabindex="0" style="display: none"></td>
              <td class="" style="">
                <span>4</span>
              </td>
              <td class="sorting_1" style="">
                <div class="d-flex justify-content-start align-items-center user-name">
                  <div class="avatar-wrapper">
                    <div class="avatar avatar-sm me-3">
                      <span class="avatar-initial rounded-circle bg-label-primary">A</span>
                    </div>
                  </div>
                  <div class="d-flex flex-column">
                    <a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account"
                      class="text-truncate text-heading"><span class="fw-medium">Admin</span></a>
                  </div>
                </div>
              </td>
              <td class="" style="">
                <span class="user-email">admin@admin.com</span>
              </td>
              <td class="text-center" style="">
                <i class="ri-shield-line ri-24px text-danger"></i>
              </td>
              <td class="" style="">
                <div class="d-flex align-items-center gap-50">
                  <button class="btn btn-sm btn-icon edit-record btn-text-secondary rounded-pill waves-effect"
                    data-id="113" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser">
                    <i class="ri-edit-box-line ri-20px"></i></button><button
                    class="btn btn-sm btn-icon delete-record btn-text-secondary rounded-pill waves-effect"
                    data-id="113">
                    <i class="ri-delete-bin-7-line ri-20px"></i></button><button
                    class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect dropdown-toggle hide-arrow"
                    data-bs-toggle="dropdown">
                    <i class="ri-more-2-line ri-20px"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end m-0">
                    <a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account"
                      class="dropdown-item">View</a><a href="javascript:;" class="dropdown-item">Suspend</a>
                  </div>
                </div>
              </td>
            </tr>
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
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser" aria-labelledby="offcanvasAddUserLabel">
      <div class="offcanvas-header border-bottom">
        <h5 id="offcanvasAddUserLabel" class="offcanvas-title">
          Add User
        </h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body mx-0 flex-grow-0 h-100">
        <form class="add-new-user pt-0 fv-plugins-bootstrap5 fv-plugins-framework" id="addNewUserForm"
          novalidate="novalidate">
          <input type="hidden" name="id" id="user_id" />
          <div class="form-floating form-floating-outline mb-5 fv-plugins-icon-container">
            <input type="text" class="form-control" id="add-user-fullname" placeholder="John Doe" name="name"
              aria-label="John Doe" />
            <label for="add-user-fullname">Full Name</label>
            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
            </div>
          </div>
          <div class="form-floating form-floating-outline mb-5 fv-plugins-icon-container">
            <input type="text" id="add-user-email" class="form-control" placeholder="john.doe@example.com"
              aria-label="john.doe@example.com" name="email" />
            <label for="add-user-email">Email</label>
            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
            </div>
          </div>
          <div class="form-floating form-floating-outline mb-5 fv-plugins-icon-container">
            <input type="text" id="add-user-contact" class="form-control phone-mask"
              placeholder="+1 (609) 988-44-11" aria-label="john.doe@example.com" name="userContact" />
            <label for="add-user-contact">Contact</label>
            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
            </div>
          </div>
          <div class="form-floating form-floating-outline mb-5 fv-plugins-icon-container">
            <input type="text" id="add-user-company" name="company" class="form-control"
              placeholder="Web Developer" aria-label="jdoe1" />
            <label for="add-user-company">Company</label>
            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
            </div>
          </div>
          <div class="form-floating form-floating-outline mb-5 form-floating-select2">
            <div class="position-relative">
              <select id="country" class="select2 form-select select2-hidden-accessible" data-select2-id="country"
                tabindex="-1" aria-hidden="true">
                <option value="" data-select2-id="2">
                  Select
                </option>
                <option value="Australia">
                  Australia
                </option>
                <option value="Bangladesh">
                  Bangladesh
                </option>
                <option value="Belarus">
                  Belarus
                </option>
                <option value="Brazil">
                  Brazil
                </option>
                <option value="Canada">
                  Canada
                </option>
                <option value="China">
                  China
                </option>
                <option value="France">
                  France
                </option>
                <option value="Germany">
                  Germany
                </option>
                <option value="India">
                  India
                </option>
                <option value="Indonesia">
                  Indonesia
                </option>
                <option value="Israel">
                  Israel
                </option>
                <option value="Italy">
                  Italy
                </option>
                <option value="Japan">
                  Japan
                </option>
                <option value="Korea">
                  Korea, Republic of
                </option>
                <option value="Mexico">
                  Mexico
                </option>
                <option value="Philippines">
                  Philippines
                </option>
                <option value="Russia">
                  Russian Federation
                </option>
                <option value="South Africa">
                  South Africa
                </option>
                <option value="Thailand">
                  Thailand
                </option>
                <option value="Turkey">
                  Turkey
                </option>
                <option value="Ukraine">
                  Ukraine
                </option>
                <option value="United Arab Emirates">
                  United Arab Emirates
                </option>
                <option value="United Kingdom">
                  United Kingdom
                </option>
                <option value="United States">
                  United States
                </option>
              </select><span class="select2 select2-container select2-container--default" dir="ltr"
                data-select2-id="1" style="width: 360px"><span class="selection"><span
                    class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                    aria-expanded="false" tabindex="0" aria-disabled="false"
                    aria-labelledby="select2-country-container"><span class="select2-selection__rendered"
                      id="select2-country-container" role="textbox" aria-readonly="true"><span
                        class="select2-selection__placeholder">Select
                        Country</span></span><span class="select2-selection__arrow" role="presentation"><b
                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                  aria-hidden="true"></span></span>
            </div>
            <label for="country">Country</label>
          </div>
          <div class="form-floating form-floating-outline mb-5">
            <select id="user-role" class="form-select">
              <option value="subscriber">
                Subscriber
              </option>
              <option value="editor">
                Editor
              </option>
              <option value="maintainer">
                Maintainer
              </option>
              <option value="author">
                Author
              </option>
              <option value="admin">
                Admin
              </option>
            </select>
            <label for="user-role">User Role</label>
          </div>
          <div class="form-floating form-floating-outline mb-5">
            <select id="user-plan" class="form-select">
              <option value="basic">
                Basic
              </option>
              <option value="enterprise">
                Enterprise
              </option>
              <option value="company">
                Company
              </option>
              <option value="team">
                Team
              </option>
            </select>
            <label for="user-plan">Select Plan</label>
          </div>
          <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit waves-effect waves-light">
            Submit
          </button>
          <button type="reset" class="btn btn-outline-secondary waves-effect" data-bs-dismiss="offcanvas">
            Cancel
          </button>
          <input type="hidden" />
        </form>
      </div>
    </div>
  </div>



@endsection
