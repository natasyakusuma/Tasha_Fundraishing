// Get all trash icons
const trashIcons = document.querySelectorAll('[data-feather="trash"]');

// Add a click event listener to each trash icon
trashIcons.forEach(icon => {
  icon.addEventListener('click', function() {
    // Remove the corresponding row when the trash icon is clicked
    const row = this.closest('tr');
    row.remove();
  });
});
