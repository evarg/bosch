$(function () {
    var u = $(".datatables-users"),
        f = $(".select2"),
        m = baseUrl + "app/user/view/account",
        l = $("#offcanvasAddUser");
    if (f.length) {
        var d = f;
        select2Focus(d),
            d
                .wrap('<div class="position-relative"></div>')
                .select2({
                    placeholder: "Select Country",
                    dropdownParent: d.parent(),
                });
    }
    if (
        ($.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        }),
        u.length)
    )
        var p = u.DataTable({
            processing: !0,
            serverSide: !0,
            ajax: { url: baseUrl + "user-list" },
            columns: [
                { data: "" },
                { data: "id" },
                { data: "name" },
                { data: "email" },
                { data: "email_verified_at" },
                { data: "action" },
            ],
            columnDefs: [
                {
                    className: "control",
                    searchable: !1,
                    orderable: !1,
                    responsivePriority: 2,
                    targets: 0,
                    render: function (t, s, n, r) {
                        return "";
                    },
                },
                {
                    searchable: !1,
                    orderable: !1,
                    targets: 1,
                    render: function (t, s, n, r) {
                        return `<span>${n.fake_id}</span>`;
                    },
                },
                {
                    targets: 2,
                    responsivePriority: 4,
                    render: function (t, s, n, r) {
                        var c = n.name,
                            e = Math.floor(Math.random() * 6),
                            i = [
                                "success",
                                "danger",
                                "warning",
                                "info",
                                "dark",
                                "primary",
                                "secondary",
                            ],
                            a = i[e],
                            c = n.name,
                            o = c.match(/\b\w/g) || [],
                            x;
                        (o = (
                            (o.shift() || "") + (o.pop() || "")
                        ).toUpperCase()),
                            (x =
                                '<span class="avatar-initial rounded-circle bg-label-' +
                                a +
                                '">' +
                                o +
                                "</span>");
                        var g =
                            '<div class="d-flex justify-content-start align-items-center user-name"><div class="avatar-wrapper"><div class="avatar avatar-sm me-3">' +
                            x +
                            '</div></div><div class="d-flex flex-column"><a href="' +
                            m +
                            '" class="text-truncate text-heading"><span class="fw-medium">' +
                            c +
                            "</span></a></div></div>";
                        return g;
                    },
                },
                {
                    targets: 3,
                    render: function (t, s, n, r) {
                        var e = n.email;
                        return '<span class="user-email">' + e + "</span>";
                    },
                },
                {
                    targets: 4,
                    className: "text-center",
                    render: function (t, s, n, r) {
                        var e = n.email_verified_at;
                        return `${
                            e
                                ? '<i class="ri-shield-check-line ri-24px text-success"></i>'
                                : '<i class="ri-shield-line ri-24px text-danger" ></i>'
                        }`;
                    },
                },
                {
                    targets: -1,
                    title: "Actions",
                    searchable: !1,
                    orderable: !1,
                    render: function (t, s, n, r) {
                        return (
                            `<div class="d-flex align-items-center gap-50"><button class="btn btn-sm btn-icon edit-record btn-text-secondary rounded-pill waves-effect" data-id="${n.id}" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser"><i class="ri-edit-box-line ri-20px"></i></button><button class="btn btn-sm btn-icon delete-record btn-text-secondary rounded-pill waves-effect" data-id="${n.id}"><i class="ri-delete-bin-7-line ri-20px"></i></button><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ri-more-2-line ri-20px"></i></button><div class="dropdown-menu dropdown-menu-end m-0"><a href="` +
                            m +
                            '" class="dropdown-item">View</a><a href="javascript:;" class="dropdown-item">Suspend</a></div></div>'
                        );
                    },
                },
            ],
            order: [[2, "desc"]],
            dom: '<"card-header d-block d-md-flex rounded-0 flex-wrap pb-md-0 py-0"<"me-5 ms-n2 mb-n5 mb-md-0"f><"d-flex justify-content-center justify-content-md-end align-items-baseline"<"dt-action-buttons d-flex align-items-center justify-content-sm-center gap-4"lB>>>t<"row mx-1"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
            lengthMenu: [7, 10, 20, 50, 70, 100],
            language: {
                sLengthMenu: "_MENU_",
                search: "",
                searchPlaceholder: "Search",
                info: "Displaying _START_ to _END_ of _TOTAL_ entries",
            },
            buttons: [
                {
                    extend: "collection",
                    className:
                        "btn btn-outline-secondary dropdown-toggle me-4 waves-effect waves-light",
                    text: '<i class="ri-upload-2-line ri-16px me-2"></i><span class="d-none d-sm-inline-block">Export </span>',
                    buttons: [
                        {
                            extend: "print",
                            title: "Users",
                            text: '<i class="ri-printer-line me-1" ></i>Print',
                            className: "dropdown-item",
                            exportOptions: {
                                columns: [1, 2, 3, 4, 5],
                                format: {
                                    body: function (t, s, n) {
                                        if (t.length <= 0) return t;
                                        var r = $.parseHTML(t),
                                            e = "";
                                        return (
                                            $.each(r, function (i, a) {
                                                a.classList !== void 0 &&
                                                a.classList.contains(
                                                    "user-name"
                                                )
                                                    ? (e =
                                                          e +
                                                          a.lastChild.firstChild
                                                              .textContent)
                                                    : a.innerText === void 0
                                                    ? (e = e + a.textContent)
                                                    : (e = e + a.innerText);
                                            }),
                                            e
                                        );
                                    },
                                },
                            },
                            customize: function (t) {
                                $(t.document.body)
                                    .css("color", config.colors.headingColor)
                                    .css(
                                        "border-color",
                                        config.colors.borderColor
                                    )
                                    .css(
                                        "background-color",
                                        config.colors.body
                                    ),
                                    $(t.document.body)
                                        .find("table")
                                        .addClass("compact")
                                        .css("color", "inherit")
                                        .css("border-color", "inherit")
                                        .css("background-color", "inherit");
                            },
                        },
                        {
                            extend: "csv",
                            title: "Users",
                            text: '<i class="ri-file-text-line me-1" ></i>Csv',
                            className: "dropdown-item",
                            exportOptions: {
                                columns: [1, 2, 3, 4, 5],
                                format: {
                                    body: function (t, s, n) {
                                        if (t.length <= 0) return t;
                                        var r = $.parseHTML(t),
                                            e = "";
                                        return (
                                            $.each(r, function (i, a) {
                                                a.classList !== void 0 &&
                                                a.classList.contains(
                                                    "user-name"
                                                )
                                                    ? (e =
                                                          e +
                                                          a.lastChild.firstChild
                                                              .textContent)
                                                    : a.innerText === void 0
                                                    ? (e = e + a.textContent)
                                                    : (e = e + a.innerText);
                                            }),
                                            e
                                        );
                                    },
                                },
                            },
                        },
                        {
                            extend: "excel",
                            title: "Users",
                            text: '<i class="ri-file-excel-line me-1"></i>Excel',
                            className: "dropdown-item",
                            exportOptions: {
                                columns: [1, 2, 3, 4, 5],
                                format: {
                                    body: function (t, s, n) {
                                        if (t.length <= 0) return t;
                                        var r = $.parseHTML(t),
                                            e = "";
                                        return (
                                            $.each(r, function (i, a) {
                                                a.classList !== void 0 &&
                                                a.classList.contains(
                                                    "user-name"
                                                )
                                                    ? (e =
                                                          e +
                                                          a.lastChild.firstChild
                                                              .textContent)
                                                    : a.innerText === void 0
                                                    ? (e = e + a.textContent)
                                                    : (e = e + a.innerText);
                                            }),
                                            e
                                        );
                                    },
                                },
                            },
                        },
                        {
                            extend: "pdf",
                            title: "Users",
                            text: '<i class="ri-file-pdf-line me-1"></i>Pdf',
                            className: "dropdown-item",
                            exportOptions: {
                                columns: [1, 2, 3, 4, 5],
                                format: {
                                    body: function (t, s, n) {
                                        if (t.length <= 0) return t;
                                        var r = $.parseHTML(t),
                                            e = "";
                                        return (
                                            $.each(r, function (i, a) {
                                                a.classList !== void 0 &&
                                                a.classList.contains(
                                                    "user-name"
                                                )
                                                    ? (e =
                                                          e +
                                                          a.lastChild.firstChild
                                                              .textContent)
                                                    : a.innerText === void 0
                                                    ? (e = e + a.textContent)
                                                    : (e = e + a.innerText);
                                            }),
                                            e
                                        );
                                    },
                                },
                            },
                        },
                        {
                            extend: "copy",
                            title: "Users",
                            text: '<i class="ri-file-copy-line me-1"></i>Copy',
                            className: "dropdown-item",
                            exportOptions: {
                                columns: [1, 2, 3, 4, 5],
                                format: {
                                    body: function (t, s, n) {
                                        if (t.length <= 0) return t;
                                        var r = $.parseHTML(t),
                                            e = "";
                                        return (
                                            $.each(r, function (i, a) {
                                                a.classList !== void 0 &&
                                                a.classList.contains(
                                                    "user-name"
                                                )
                                                    ? (e =
                                                          e +
                                                          a.lastChild.firstChild
                                                              .textContent)
                                                    : a.innerText === void 0
                                                    ? (e = e + a.textContent)
                                                    : (e = e + a.innerText);
                                            }),
                                            e
                                        );
                                    },
                                },
                            },
                        },
                    ],
                },
                {
                    text: '<i class="ri-add-line ri-16px me-0 me-sm-2 align-baseline"></i><span class="d-none d-sm-inline-block">Add New User</span>',
                    className:
                        "add-new btn btn-primary waves-effect waves-light",
                    attr: {
                        "data-bs-toggle": "offcanvas",
                        "data-bs-target": "#offcanvasAddUser",
                    },
                },
            ],
            responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.modal({
                        header: function (t) {
                            var s = t.data();
                            return "Details of " + s.name;
                        },
                    }),
                    type: "column",
                    renderer: function (t, s, n) {
                        var r = $.map(n, function (e, i) {
                            return e.title !== ""
                                ? '<tr data-dt-row="' +
                                      e.rowIndex +
                                      '" data-dt-column="' +
                                      e.columnIndex +
                                      '"><td>' +
                                      e.title +
                                      ":</td> <td>" +
                                      e.data +
                                      "</td></tr>"
                                : "";
                        }).join("");
                        return r
                            ? $('<table class="table"/><tbody />').append(r)
                            : !1;
                    },
                },
            },
        });
    $(document).on("click", ".delete-record", function () {
        var t = $(this).data("id"),
            s = $(".dtr-bs-modal.show");
        s.length && s.modal("hide"),
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: !0,
                confirmButtonText: "Yes, delete it!",
                customClass: {
                    confirmButton: "btn btn-primary me-3",
                    cancelButton: "btn btn-label-secondary",
                },
                buttonsStyling: !1,
            }).then(function (n) {
                n.value
                    ? ($.ajax({
                          type: "DELETE",
                          url: `${baseUrl}user-list/${t}`,
                          success: function () {
                              p.draw();
                          },
                          error: function (r) {
                              console.log(r);
                          },
                      }),
                      Swal.fire({
                          icon: "success",
                          title: "Deleted!",
                          text: "The user has been deleted!",
                          customClass: { confirmButton: "btn btn-success" },
                      }))
                    : n.dismiss === Swal.DismissReason.cancel &&
                      Swal.fire({
                          title: "Cancelled",
                          text: "The User is not deleted!",
                          icon: "error",
                          customClass: { confirmButton: "btn btn-success" },
                      });
            });
    }),
        $(document).on("click", ".edit-record", function () {
            var t = $(this).data("id"),
                s = $(".dtr-bs-modal.show");
            s.length && s.modal("hide"),
                $("#offcanvasAddUserLabel").html("Edit User"),
                $.get(`${baseUrl}user-list/${t}/edit`, function (n) {
                    $("#user_id").val(n.id),
                        $("#add-user-fullname").val(n.name),
                        $("#add-user-email").val(n.email);
                });
        }),
        $(".add-new").on("click", function () {
            $("#user_id").val(""), $("#offcanvasAddUserLabel").html("Add User");
        });
    const v = document.getElementById("addNewUserForm"),
        h = FormValidation.formValidation(v, {
            fields: {
                name: {
                    validators: {
                        notEmpty: { message: "Please enter fullname" },
                    },
                },
                email: {
                    validators: {
                        notEmpty: { message: "Please enter your email" },
                        emailAddress: {
                            message: "The value is not a valid email address",
                        },
                    },
                },
                userContact: {
                    validators: {
                        notEmpty: { message: "Please enter your contact" },
                    },
                },
                company: {
                    validators: {
                        notEmpty: { message: "Please enter your company" },
                    },
                },
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap5: new FormValidation.plugins.Bootstrap5({
                    eleValidClass: "",
                    rowSelector: function (t, s) {
                        return ".mb-5";
                    },
                }),
                submitButton: new FormValidation.plugins.SubmitButton(),
                autoFocus: new FormValidation.plugins.AutoFocus(),
            },
        }).on("core.form.valid", function () {
            $.ajax({
                data: $("#addNewUserForm").serialize(),
                url: `${baseUrl}user-list`,
                type: "POST",
                success: function (t) {
                    p.draw(),
                        l.offcanvas("hide"),
                        Swal.fire({
                            icon: "success",
                            title: `Successfully ${t}!`,
                            text: `User ${t} Successfully.`,
                            customClass: { confirmButton: "btn btn-success" },
                        });
                },
                error: function (t) {
                    l.offcanvas("hide"),
                        Swal.fire({
                            title: "Duplicate Entry!",
                            text: "Your email should be unique.",
                            icon: "error",
                            customClass: { confirmButton: "btn btn-success" },
                        });
                },
            });
        });
    l.on("hidden.bs.offcanvas", function () {
        h.resetForm(!0);
    });
    const b = document.querySelectorAll(".phone-mask");
    b &&
        b.forEach(function (t) {
            new Cleave(t, { phone: !0, phoneRegionCode: "US" });
        });
});