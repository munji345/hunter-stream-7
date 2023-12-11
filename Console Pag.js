document.addEventListener('DOMContentLoaded', function() {
    // Function to fetch console data from the backend
    function fetchConsoleData(action) {
        fetch('backend.php?action=' + action)
            .then(response => response.json())
            .then(data => {
                // Display data in the console-content div
                document.getElementById('console-content').innerText = JSON.stringify(data, null, 2);
            })
            .catch(error => console.error('Error fetching console data:', error));
    }

    // Example: Fetch and display information about signed-up users
    fetchConsoleData('getUsers');
});
