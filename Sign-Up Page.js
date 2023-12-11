document.addEventListener('DOMContentLoaded', function() {
    const body = document.body;

    // Example: Sign-up form submission logic
    document.querySelector('form').addEventListener('submit', function(event) {
        event.preventDefault();
        // Your sign-up form submission logic goes here
        console.log('Sign-up form submitted');
    });

    // Example: Toggle dark mode on button click
    document.getElementById('dark-mode-toggle').addEventListener('click', function() {
        body.classList.toggle('dark-mode');
    });
});
