<?php
// Include the database connection file
include_once 'db_connection.php';

// Initialize a variable to hold the alert display status
$showAlert = false;
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Fetch user from database
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['password'])) {
            echo "Login successful!";
            // After successful login
                session_start();
                $_SESSION['logged_in'] = true;

                header("Location: index.php"); // Redirect to home page
                                            // Set the showAlert flag to true to indicate successful login
            $showAlert = true;
                exit();
        } else {
            echo "Incorrect password!";
        }
    } else {
        echo "User not found!";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
