const swalIcon = document.currentScript.getAttribute('swal-icon');
const swalTitle = document.currentScript.getAttribute('swal-title');
const swalText = document.currentScript.getAttribute('swal-text');
const swalButton = document.currentScript.getAttribute('swal-button');

$(function () {
    if (swalTitle) {
        swalAlert(swalIcon, swalTitle, swalText, swalButton);
    }
});

const swalAlert = (icon, title, text, button) => {
    Swal.fire({
        title: title,
        text: text,
        icon: icon,
        confirmButtonText: button,
    });
};

const swalConfirm = (confirmedCallback) => {
    Swal
        .fire({
            title: "Are you sure?",
            text: "Press OK to continue!",
            icon: "warning",
            showCancelButton: true,
        })
        .then((result) => {
            if (result.value) {
                confirmedCallback();
            }
        });
};

const formConfirm = (event) => {
    event.preventDefault();
    swalConfirm(() => {
        event.target.submit();
    });
};

const linkConfirm = (event) => {
    event.preventDefault();
    swalConfirm(() => {
        window.location.href = event.target.getAttribute('href');
    });
};