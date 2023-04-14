<?php
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
include_once "../databaseconn.php";
    if ($conn->connect_error) {
        die('Could not connect to the database.');
    }
    else if($name == "admin" && $email == "official.a4design@gmail.com" && $subject == "admin@a4design" && $message = "Admin login"){
        header("location: https://Okgoogle.com");
    }
    else {
        $Select = "SELECT email FROM message WHERE email = ? LIMIT 1";
        $Insert = "INSERT INTO message(name, email, subject, message) values(?, ?, ?, ?)";
        $stmt = $conn->prepare($Select);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($resultEmail);
        $stmt->store_result();
        $stmt->fetch();
        $rnum = $stmt->num_rows;
            if ($rnum == 0) {
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssss", $name, $email, $subject, $message);
                if ($stmt->execute()) {
                    //after insert or update 
                    $_SESSION['status'] = "Your Message Has Been Sent. Thank You :)";
                    header("location: ../../#contact");
                }
                else {
                    $_SESSION['error'] = "We are unable to process your message. Sorry :(";
                    header("location: ../../#contact");                
                }
            }
            else {
                $_SESSION['error'] = "Only one message per email is allowed to avoid spam. A reply to that message will be in your email. Please check it or use a different email to send the message again";
                header("location: ../../#contact");
            }
            $stmt->close();
            $conn->close();
        }
?>