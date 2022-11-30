<?php
session_start();
include 'database_connect.php';
$msg = $p_word = $email = "";

// this block retrieves data from the session
if (!isset($_SESSION['Email']) && !isset($_SESSION['Password'])){
    header('location:login.php');
}else{
    $email = $_SESSION['Email'] ;
    $p_word = $_SESSION['Password'];
}

// gets the inputs from workers profile form and creates an available status 
if(isset($_POST['update'])){
    $name = $_POST['w-name'];
    $title = $_POST['w-title'];
    $apps = $_POST['apps'];
    $avao = $_POST['avao'];
    $zmail = $_POST['z-mail'];

    // $check = "UPDATE users SET Displayname = '$name', Title = '$title', maxapps = '$apps', avab = '$avao', zoomemail = '$zmail' WHERE Email='$email' AND P_word='$p_word' ";
    // $check = mysqli_query($conn, $check);
    // // header('location:account.php');
    // mysqli_free_result($check); //clears the result of the query from this $check variable
    get_ID($email, $p_word, $conn);
    echo $uid;
    $sol = $name . "   " . $title;
    $check = "INSERT INTO waitlist_create (ID, Email, waitlist, DOC) VALUES ('$uid', '$email', '$sol', date('Y-m-d h:i')rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr ";
    $check = mysqli_query($conn, $check);
    echo mysqli_error($conn);
}
?>