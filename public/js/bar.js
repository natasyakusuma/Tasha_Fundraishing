var inputProgress = document.getElementById('progress-input').getAttribute("data-value");
var maxProgress = document.getElementById('progress-max').getAttribute("data-value");
var progressBar = document.getElementsByClassName('progress-bar')[0];
var value = parseInt(inputProgress);
var max = parseInt(maxProgress);
var calculate = (inputProgress/maxProgress)*100

progressBar.style.width = calculate+'%';
