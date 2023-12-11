document.addEventListener('DOMContentLoaded', function() {
    const body = document.body;

    // Example: Music submission form submission logic
    document.querySelector('form').addEventListener('submit', function(event) {
        event.preventDefault();
        // Your music submission form submission logic goes here
        console.log('Music submission form submitted');
    });

    // Example: Toggle dark mode on button click
    document.getElementById('dark-mode-toggle').addEventListener('click', function() {
        body.classList.toggle('dark-mode');
    });
});
