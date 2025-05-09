<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the entered key is correct
    $enteredKey = $_POST['enrollment_key']; // Assuming your input field name is 'enrollment_key'
    $correctKey = "123"; // Replace this with your actual enrollment key

    if ($enteredKey == $correctKey) {
        // Key is correct, set session variable to indicate successful enrollment
        $_SESSION['enrollment_status'] = true;
        header("Location: admin.php"); // Redirect to the welcome page
        exit;
    } else {
        // Key is incorrect, show error message
        $error = "Invalid enrollment key. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment Page</title>
    <link rel="stylesheet" href="styles/enroll.css">
</head>
<body>
    <h2>Enter Enrollment Key</h2>
    <?php if(isset($error)) { ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php } ?>
    <div class="gallery">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="enrollment_key">Enrollment Key:</label>
        <input type="text" id="enrollment_key" name="enrollment_key">
        <button type="submit" class="phpbtn1">Submit</button>
    </form>
    </div>
</body>
</html>