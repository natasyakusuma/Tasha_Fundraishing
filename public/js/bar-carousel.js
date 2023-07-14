var carousel = document.getElementById('carouselExampleControls');
var progressBars = document.querySelectorAll('.carousel-item .progress-bar');
var progressInputs = document.querySelectorAll('.carousel-item #progress-input');
var progressMaxs = document.querySelectorAll('.carousel-item #progress-max');
var resultElement = document.querySelectorAll('.carousel-item #calculate-value');

carousel.addEventListener('slid.bs.carousel', function () {
  updateProgressBars();
});

function updateProgressBars() {
  progressBars.forEach(function (progressBar, index) {
    var inputProgress = progressInputs[index].getAttribute('data-value');
    var maxProgress = progressMaxs[index].getAttribute('data-value');
    var value = parseInt(inputProgress);
    var max = parseInt(maxProgress);
    var calculate = (value / max) * 100;

    progressBar.style.width = calculate + '%';
    resultElement[index].textContent = calculate + '%';
  });
}

// Inisialisasi progress bar pada saat pertama kali halaman dimuat
updateProgressBars();