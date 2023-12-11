document.addEventListener('DOMContentLoaded', function() {
    const body = document.body;

    // Example: Toggle dark mode on button click
    document.getElementById('dark-mode-toggle').addEventListener('click', function() {
        body.classList.toggle('dark-mode');
    });
});
