function failToast(msg) {
    Toastify({
        text: msg,
        duration: 3000,
        newWindow: true,
        close: true,
        gravity: "bottom", // `top` or `bottom`
        position: "right", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        style: {
          background: getComputedStyle(document.documentElement).getPropertyValue('--bs-danger'),
        },
    }).showToast();
}

function doneToast(msg) {
    Toastify({
        text: msg,
        duration: 3000,
        newWindow: true,
        close: true,
        gravity: "bottom", // `top` or `bottom`
        position: "right", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        style: {
          background: getComputedStyle(document.documentElement).getPropertyValue('--bs-primary'),
        },
    }).showToast();
}