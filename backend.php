php -S localhost:8000
<?php
// Perform necessary database connection setup
$servername = "your_database_server";
$username = "your_database_username";
$password = "your_database_password";
$database = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to get information about signed-up users
function getUsers($conn) {
    $result = $conn->query("SELECT * FROM users");
    $users = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
    }

    return ['users' => $users];
}

// Function to get information about uploaded music
function getUploads($conn) {
    $result = $conn->query("SELECT * FROM uploads");
    $uploads = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $uploads[] = $row;
        }
    }

    return ['uploads' => $uploads];
}

// Function to get information about verification requests
function getVerificationRequests($conn) {
    $result = $conn->query("SELECT * FROM verification_requests");
    $verificationRequests = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $verificationRequests[] = $row;
        }
    }

    return ['verificationRequests' => $verificationRequests];
}

// Your login/authentication logic goes here

// Check if the user is authenticated before allowing access to console functions
// Example: Check if the user has a valid session or token
function isAuthenticated() {
    // Replace this with your authentication logic
    return true;
}

if (!isAuthenticated()) {
    echo json_encode(['error' => 'Authentication failed']);
    exit();
}

// Determine the requested action
if (isset($_GET['action'])) {
    $action = $_GET['action'];

    switch ($action) {
        case 'getUsers':
            $result = getUsers($conn);
            break;

        case 'getUploads':
            $result = getUploads($conn);
            break;

        case 'getVerificationRequests':
            $result = getVerificationRequests($conn);
            break;

        default:
            $result = ['error' => 'Invalid action'];
            break;
    }

    // Output result as JSON
    header('Content-Type: application/json');
    echo json_encode($result);
} else {
    echo json_encode(['error' => 'Action not specified']);
}

// Close the database connection
$conn->close();
?>
