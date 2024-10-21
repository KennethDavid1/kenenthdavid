<?php
// Example users array (in practice, use a database)
$users = [
    ['username' => 'user1', 'password' => 'password1'],
    ['username' => 'user2', 'password' => 'password2'],
];

// Start session
session_start();

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate credentials
    foreach ($users as $user) {
        if ($user['username'] === $username && $user['password'] === $password) {
            $_SESSION['username'] = $username;
            header('Location: welcome.php'); // Redirect to a welcome page
            exit();
        }
    }
    echo "Invalid username or password.";
}
?>
