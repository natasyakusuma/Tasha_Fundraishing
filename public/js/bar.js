var inputProgress = document.getElementById('progress-input').getAttribute("data-value");
var progressBar = document.getElementsByClassName('progress-bar')[0];
var value = parseInt(inputProgress);

progressBar.style.width = value+'%';
