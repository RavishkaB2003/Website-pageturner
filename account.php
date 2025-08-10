<?php
$conn = new mysqli("sql313.infinityfree.com", "if0_38205136", "fqe1OLCrgKf9", "if0_38205136_webfinal");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['email'])) {
    $user_email = $_GET['email'];

    $sql = "SELECT name, email FROM user_info WHERE email = '$user_email'";
    $result = $conn->query($sql);

    if ($row = $result->fetch_assoc()) {
        $personalName = $row['name'];
        $personalEmail = $row['email'];
    } else {
        $personalName = "Unknown";
        $personalEmail = "Unknown";
    }
} else {
    $personalName = "No Email Provided";
    $personalEmail = "No Email Provided";
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account</title>
    <link rel="stylesheet" href="account.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="logo"><img src="Assets/logo.png"><h1 class="pts">Page Turners Society</h1></div>
    <div class="account-container">
        <h2>User Account</h2>
        
        <div class="tabs">
            <button class="tab-button active" onclick="openTab(event, 'saved-books')">Saved Books</button>
            <button class="tab-button" onclick="openTab(event, 'downloads')">Downloads</button>
            <button class="tab-button" onclick="openTab(event, 'liked')">Liked</button>
            <button class="tab-button" onclick="openTab(event, 'personal-info')">Personal Info</button>
        </div>

        <div id="saved-books" class="tab-content active">
            <h3>Saved Books</h3>
            <ul>
                <li>Book 1</li>
                <li>Book 2</li>
                <li>Book 3</li>
            </ul>
        </div>

        <div id="downloads" class="tab-content">
            <h3>Downloads</h3>
            <ul>
                <li>Downloaded Book 1</li>
                <li>Downloaded Book 2</li>
            </ul>
        </div>

        <div id="liked" class="tab-content">
            <h3>Liked Books</h3>
            <ul>
                <li>Liked Book 1</li>
                <li>Liked Book 2</li>
            </ul>
        </div>

        <div id="personal-info" class="tab-content">
            <h3>Personal Information</h3>
            <p>Name: <span class="info"><?php echo $personalName ?></span></p>
            <p>Email: <span class="info"><?php echo $personalEmail ?></span></p>
            <p>Membership: Prelimenary</p>
        </div>
    </div>

    <a href="index.php">Go back to home page</a>

    <script>
        function openTab(event, tabName) {
            let i, tabContent, tabButtons;
            tabContent = document.getElementsByClassName("tab-content");
            for (i = 0; i < tabContent.length; i++) {
                tabContent[i].style.display = "none";
            }
            tabButtons = document.getElementsByClassName("tab-button");
            for (i = 0; i < tabButtons.length; i++) {
                tabButtons[i].classList.remove("active");
            }
            document.getElementById(tabName).style.display = "block";
            event.currentTarget.classList.add("active");
        }
    </script>
</body>
</html>
