// Get the toast element
var toast = document.getElementById("liveToast");

// Show the toast
var bootstrapToast = new bootstrap.Toast(toast);
bootstrapToast.show();

// Hide the toast after 5 seconds
setTimeout(function () {
    bootstrapToast.hide();
}, 5000);