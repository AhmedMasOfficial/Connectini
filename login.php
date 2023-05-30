<?php
session_start(); 

function login($conn) {
        $mail = $_POST["email"];
        $password = $_POST["password"];
        $req = "SELECT * FROM etudiant WHERE mail='$mail' AND password='$password'";
        $req1 = "SELECT * FROM administration WHERE mail='$mail' AND password='$password'";
        $req2 = "SELECT * FROM societe WHERE mail='$mail' AND password='$password'";
        $req3 = "SELECT * FROM professeur WHERE mail='$mail' AND password='$password'";
        $result = $conn->query($req);
        $result1 = $conn->query($req1);
        $result2 = $conn->query($req2);
        $result3 = $conn->query($req3);
    if ($result->num_rows > 0) {
        $_SESSION['username'] = $mail;
        $_SESSION['role'] = "etudiant";
        return true;
    } elseif ($result1->num_rows > 0) {
        $_SESSION['username'] = $mail;
        $_SESSION['role'] = "admin";
        return true;
    } elseif ($result2->num_rows > 0) {
        $_SESSION['username'] = $mail;
        $_SESSION['role'] = "societé";
        return true;
    } elseif ($result3->num_rows > 0) {
        $_SESSION['username'] = $mail;
        $_SESSION['role'] = "prof";
        return true;
    } else {
        return false;   
    }
}
$conn = new mysqli("localhost", "root", "", "pfe");
if ($conn->connect_error) {
    die("Connection Error: " . $conn->connect_error);
} else {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["email"])) {
        if (login($conn)!==false) {
            if ($_SESSION['role'] === "etudiant") {
                header("Location: studentdach.php");
                exit();
            } elseif ($_SESSION['role'] === "admin") {
                header("Location: Dashboard Admin.php");
                exit();
            } elseif ($_SESSION['role'] === "societé") {
                header("Location: Dashboard societé.php");
                exit();
            } elseif ($_SESSION['role'] === "prof") {
                header("Location: Dashboard Teacher.php");
                exit();
            }
        } else {
            echo "Invalid username or password";
        }
    }
}
$conn->close();
?>