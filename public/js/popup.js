document.addEventListener("DOMContentLoaded", function() {
    var popupOverlay = document.getElementById("popup-overlay");
    var closeButton = document.getElementById("close-btn");
    var nextButton = document.getElementById("next-button");
  
    closeButton.addEventListener("click", function() {
      popupOverlay.style.display = "none";
    });
  
    nextButton.addEventListener("click", function() {
      // Redirect to the page behind the overlay
      window.location.href = "#";
      popupOverlay.style.display = "none";
    });
  });