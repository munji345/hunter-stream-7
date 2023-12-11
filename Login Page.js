document.addEventListener('DOMContentLoaded', function() {
    const body = document.body;

    // Example: Login form submission logic
    document.querySelector('form').addEventListener('submit', function(event) {
        event.preventDefault();
        // Your login form submission logic goes here
        console.log('Login form submitted');
    });

    // Example: Toggle dark mode on button click
    document.getElementById('dark-mode-toggle').addEventListener('click', function() {
        body.classList.toggle('dark-mode');
    });
});
