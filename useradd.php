<?php
function createEtud($conn){
    global $nom,$mail;
    global $succedst,$errorstf,$errorst;
    $nom= $_POST["nomst"];
    $prenom = $_POST["prenomst"];
    $mail = $_POST["emailst"];
    $nmfac = $_POST["nomfacst"];
    $filiere = $_POST["Filiere"];
    $pass = $_POST["passwordst"];
    $confirm = $_POST["confirm-passwordst"];
    
    if(strcmp($pass, $confirm) == 0){
        $req = "INSERT INTO etudiant VALUES ('$nom', '$prenom', '$mail', '$nmfac', '$filiere', NULL, NULL, '$pass')";
        
        if($conn->query($req) === TRUE){
            $succedst = "added successfully";
        }else{
            $errorstf = "failed";
        }
    }else{
        $errorst = "check the password";
    }
}

function createteach($conn){
    global $nom,$nmfac ;
    global $succeedtech,$errortea,$errortea1;
    $nom = $_POST["nomt"];
    $prenom = $_POST["prenomt"];
    $mail = $_POST["emailt"];
    $nmfac = $_POST["nomfact"];
    $capacite = $_POST["capacitét"];
    $pass = $_POST["passwordt"];
    $confirm = $_POST["confirm-passwordt"];
    
    if(strcmp($pass, $confirm) == 0){
        $req = "INSERT INTO professeur VALUES ('$nom', '$prenom', '$mail', '$nmfac', '$capacite', NULL, '$pass')";
        
        if($conn->query($req) === TRUE){
            $succeedtech = "added successfully";
        }else{
            $errortea = "failed";
        }
    }else{
        $errortea1 = "check the password";
    }
}

function createadmin($conn){
    global $nom,$mail ;
    global $succeedadmin,$erroradmin;
    $code = $_POST["codefac"];
    $nom = $_POST["nom-fac"];
    $mail = $_POST["mailf"];
    $num = rand(1,999);
    $password = "f-" . strval($num);
    
    $req = "INSERT INTO administration VALUES ('$code', '$nom', '$mail', '$password')";
    
    if($conn->query($req) === TRUE){
        $succeedadmin = "added successfully";
    }else{
        $erroradmin = "failed";
    }
}

function createsociety($conn){
    global $name;
    global $succeedsoc,$errorsoc,$errorsoc1;
    $name = $_POST["nom-s"];
    $id = $_POST["ids"];
    $mail = $_POST["mails"];
    $tel = $_POST["numtel"];
    $cap = $_POST["capacitésos"];
    $loc = $_POST["location"];
    $password = $_POST["passwords"];
    $c_password = $_POST["confirm-password"];
    
    if(strcmp($password, $c_password) == 0){
        $req = "INSERT INTO societe VALUES ('$id', '$mail', '$name', '$tel', '$cap', '$loc', '$password')";
        
        if($conn->query($req) === TRUE){
            $succeedsoc = "added successfully";
        }else{
            $errorsoc = "failed";
        }
    }else{
        $errorsoc1 = "check the password";
    }
}

$conn = new mysqli("localhost", "root", "", "pfe");
if($conn->connect_error){
    die("Connection Error: " . $conn->connect_error);
}else{
    if(isset($_POST["nomst"])){
        createEtud($conn);
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            session_start();
            $_SESSION['username'] = $mail;
            header("Location: studentdach.php");
        }
    }
    
    if(isset($_POST["nomt"])){
        createteach($conn);
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            session_start();
            $_SESSION['username'] = $nom;
            header("Location: Dashboard Teacher.php");
        }
    }
    
    if(isset($_POST["codefac"])){
        createadmin($conn);
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            session_start();
            $_SESSION['username'] = $nom;
            header("Location: destination.php");
        }
    }
    
    if(isset($_POST["ids"])){
        createsociety($conn);
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            session_start();
            $_SESSION['username'] = $name;
            header("Location: Dashboard société.php");
        }
    }
}

$conn->close();
?>
