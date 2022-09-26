"use strict";
var KTAccountSettingsProfileDetails = (function () {
    var e, t;
    return {
        init: function () {
            (e = document.getElementById("kt_account_profile_details_form")),
                (t = FormValidation.formValidation(e, {
                    fields: {
                        name: { validators: { notEmpty: { message: "Nama tidak boleh kosong" } } },
                        nrp: { validators: { notEmpty: { message: "NRP tidak boleh kosong" } } },
                        phone_number: { validators: { notEmpty: { message: "Nomor HP tidak boleh kosong" } } },
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger(),
                        bootstrap: new FormValidation.plugins.Bootstrap5({ rowSelector: ".fv-row", eleInvalidClass: "", eleValidClass: "" }),
                    },
                }))
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    KTAccountSettingsProfileDetails.init();
});