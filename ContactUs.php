<?php

$dbServer= "sql313.infinityfree.com";
$dbUser= "if0_38205136";
$dbPwd= "fqe1OLCrgKf9";
$dbName= "if0_38205136_webfinal";

$conn = new mysqli($dbServer,$dbUser,$dbPwd,$dbName);

if($conn->connect_error){
    die("Connection Failed" . $conn->connect_error);
}
$msgSent="";

if(isset($_POST["sendMsg"])){
    $fname=mysqli_real_escape_string($conn,$_POST["name"]);
    $mail =mysqli_real_escape_string($conn,$_POST["email"]);
    $MSG  =mysqli_real_escape_string($conn,$_POST["message"]);

    if (!empty($fname) && !empty($mail) && !empty($MSG)) {
        $sql= "INSERT INTO contact_messages(name,email,message) VALUES ('$fname','$mail','$MSG')";

        if( $conn-> query($sql) === TRUE){
            $msgSent="Message sent successfully!";
        }
        else{
            echo "Error: " . $conn->error;
        }
    }else{
        echo "All fields are required";
    }
}

$conn->close();
?>

    