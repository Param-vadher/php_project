<?php
session_start();
require 'config.php'; // Ensure this file includes the database connection

// Fetch the logged-in username
$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest';
$firstLetter = strtoupper($username[0]);

// Fetch the current profile photo
$stmt = $con->prepare("SELECT profile_photo FROM login WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->bind_result($profile_photo);
$stmt->fetch();
$stmt->close();

// Initialize error and success messages
$error = $success = "";

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Update Password Logic
    if (isset($_POST['update_password'])) {
        $old_password = $_POST['old_password'];
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];

        // Retrieve the user's current hashed password
        $stmt = $con->prepare("SELECT password FROM login WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->bind_result($hashed_password);
        $stmt->fetch();
        $stmt->close();

        if (password_verify($old_password, $hashed_password)) {
            if ($new_password === $confirm_password) {
                // Hash and update the new password
                $new_hashed_password = password_hash($new_password, PASSWORD_BCRYPT);
                $stmt = $con->prepare("UPDATE login SET password = ? WHERE username = ?");
                $stmt->bind_param("ss", $new_hashed_password, $username);

                if ($stmt->execute()) {
                    $success = "Password updated successfully!";
                } else {
                    $error = "An error occurred while updating the password. Please try again.";
                }
                $stmt->close();
            } else {
                $error = "New passwords do not match!";
            }
        } else {
            $error = "Old password is incorrect!";
        }
    }

    // Profile Photo Upload Logic
    if (isset($_FILES['profile_photo']) && $_FILES['profile_photo']['error'] === 0) {
        $targetDir = "uploads/";
        $fileName = $username . "_" . basename($_FILES['profile_photo']['name']);
        $targetFilePath = $targetDir . $fileName;

        // Validate file type
        $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];

        if (in_array($fileType, $allowedTypes)) {
            if (move_uploaded_file($_FILES['profile_photo']['tmp_name'], $targetFilePath)) {
                // Update the profile photo in the database
                $stmt = $con->prepare("UPDATE login SET profile_photo = ? WHERE username = ?");
                $stmt->bind_param("ss", $targetFilePath, $username);

                if ($stmt->execute()) {
                    $success = "Profile photo updated successfully!";
                    $profile_photo = $targetFilePath; // Update displayed photo
                } else {
                    $error = "Failed to update profile photo in the database.";
                }
                $stmt->close();
            } else {
                $error = "Failed to upload the file.";
            }
        } else {
            $error = "Invalid file type. Only JPG, JPEG, PNG, and GIF are allowed.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Profile</title>
    <link rel="stylesheet" type="text/css" href="dashboardstyle.css">
</head>
<body>
<div class="navbar">
    <div class="brand">Profile</div>
    <div class="profile" onclick="toggleDropdown(event)">
        <div class="avatar">
            <img src="<?php echo $profile_photo; ?>" alt="Profile Photo" class="profile-image">
        </div>
        <div class="dropdown" id="dropdownMenu">
            <a href="editprofileform.php">Edit Profile</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>
</div>

<div class="container">
    <h1>Edit Profile</h1>

    <!-- Display Success or Error Messages -->
    <?php if ($error): ?>
        <div class="message error"><?php echo $error; ?></div>
    <?php endif; ?>
    <?php if ($success): ?>
        <div class="message success"><?php echo $success; ?></div>
    <?php endif; ?>

    <!-- Profile Photo Update Form -->
    <form action="editprofileform.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="profile_photo">Upload Profile Photo</label>
            <input type="file" name="profile_photo" id="profile_photo">
        </div>
        <div class="form-group">
            <button type="submit">Update Profile</button>
        </div>
    </form>

    <!-- Password Update Form -->
    <form action="editprofileform.php" method="post">
        <div class="form-group">
            <label for="old_password">Old Password</label>
            <input type="password" name="old_password" id="old_password">
        </div>
        <div class="form-group">
            <label for="new_password">New Password</label>
            <input type="password" name="new_password" id="new_password">
        </div>
        <div class="form-group">
            <label for="confirm_password">Confirm New Password</label>
            <input type="password" name="confirm_password" id="confirm_password">
        </div>
        <div class="form-group">
            <button type="submit" name="update_password" onclick="validateForm(event)">Update Password</button>
        </div>
        <div id="error-message" class="message error" style="display: none;"></div>
    </form>
</div>

<script>
    function toggleDropdown(event) {
        const dropdown = document.getElementById('dropdownMenu');
        dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
    }

    // Close dropdown if clicked outside
    window.onclick = function(event) {
        if (!event.target.closest('.profile')) {
            const dropdown = document.getElementById('dropdownMenu');
            if (dropdown.style.display === 'block') {
                dropdown.style.display = 'none';
            }
        }
    };

    function validateForm(event) {
        event.preventDefault();

        const oldPassword = document.getElementById('old_password').value.trim();
        const newPassword = document.getElementById('new_password').value.trim();
        const confirmPassword = document.getElementById('confirm_password').value.trim();
        const errorMessage = document.getElementById('error-message');

        errorMessage.style.display = 'none';
        errorMessage.innerText = '';

        if (!oldPassword || !newPassword || !confirmPassword) {
            errorMessage.innerText = 'All fields are required.';
            errorMessage.style.display = 'block';
        } else if (newPassword !== confirmPassword) {
            errorMessage.innerText = 'New password and confirm password do not match.';
            errorMessage.style.display = 'block';
        } else {
            document.forms[0].submit();
        }
    }
</script>
</body>
</html>
