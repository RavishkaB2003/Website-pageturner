<?php

$dbServer = "sql313.infinityfree.com";
$dbUser = "if0_38205136";
$dbPwd = "fqe1OLCrgKf9";
$dbName = "if0_38205136_webfinal";

$conn = new mysqli($dbServer, $dbUser, $dbPwd, $dbName);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

$emailError = "";
$passwordError = "";
$isRegistrationSuccess = false;
$currentForm = 'signup';

if (isset($_POST["signup"])){
    $currentForm = 'signup';
    $name= $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["pswd"];
    $confirmPassword = $_POST["confirm_password"];

    $sql = "SELECT email FROM user_info WHERE email = '$email'";
    $result = $conn->query($sql);

    if (mysqli_num_rows($result) > 0){
        $emailError = "This email is already in use. Please try another one.";
    }

    if ($password !== $confirmPassword) {
        $passwordError = "Passwords do not match!";
    }

    if (empty($emailError) && empty($passwordError)) {
        $sql = "INSERT INTO user_info (name, email, password) VALUES ('$name','$email', '$password')";
        if ($conn->query($sql) === TRUE) {
            $isRegistrationSuccess = true;
            header('Location: signup.php?success=1');
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
?>

<?php
        $errorMsg= "";

        if (isset($_POST['log'])) {
            $email2 = trim($_POST["em"]);
            $password2 = trim($_POST["pass"]);
            $currentForm = 'login';

            $sql2 = "SELECT * FROM user_info WHERE email='$email2' AND password='$password2'";
            $result2 = mysqli_query($conn, $sql2);
        
            if ($result2 && mysqli_num_rows($result2) == 1) {
                header("Location: account.php?email=" . urlencode($email2));
                exit();
            } else {
                $errorMsg = "Invalid Username or Password!";
            }
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Turners Society</title>
    <link rel="stylesheet" href="signupCSS.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
</head>
<body>

<?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
    <div class="message">
    <p>Registration Successful!</p>
    <a href="signup.php"><button>Login Now</button></a>
    </div>
    
<?php else: ?>
    <div class="logo"><img src="Assets/logo.png"></div>
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
            <form id="form1" method="POST" action="">
                <label for="chk" aria-hidden="true">Sign up</label>
                <input id="fname" type="text" name="name" placeholder="Full Name">
                <span id="serror1" class="js"></span>
                <input id="email" type="email" name="email" placeholder="Email" >
                <span id="errorE" class="js"></span>
                <span class="msg">
                    <?php echo $emailError; ?>
                </span>
                <input id="pwd" type="password" name="pswd" placeholder="Password">
                <span id="serror2" class="js"></span>
                <input id="cpwd" type="password" name="confirm_password" placeholder="Confirm password">
                <span id="serror3" class="js"></span><br>
                <span class="msg">
                    <?php echo $passwordError; ?>
                </span>
                <button type="submit" name="signup">Sign up</button>
                <span class="msg3">ALREADY HAVE AN ACCOUNT?</span>
            </form>
        </div>

        <div class="login">
            <form id="form2" action="" method="POST">
                <input type="hidden" name="currentForm" value="login">
                <label for="chk" aria-hidden="true">Login</label>
                <input type="email" name="em" placeholder="Email" >
                <input id="pwd2" type="password" name="pass" placeholder="Password" >
                <span id="lerror" class="js"></span>
                <span class="msg2"><?php echo $errorMsg; ?></span>
                <button type="submit" name="log">Login</button>
            </form>
        </div>
    </div>
    <?php endif; ?>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const currentForm = "<?php echo $currentForm; ?>";
        const chkbox = document.getElementById("chk");

        if (currentForm === "login") {
            chkbox.checked = true;
        } else {
            chkbox.checked = false;
        }
    });
    </script>
    <script src="signup.js"></script>
</body>
</html>

</body>
</html>