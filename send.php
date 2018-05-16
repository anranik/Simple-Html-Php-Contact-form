<?php

$EmailFrom = "help@rokkuhelp.online";
$EmailTo = "anrctg@gmail.com";
$Subject = Trim(stripslashes($_POST['Subject']));
$Name = Trim(stripslashes($_POST['Name']));
$Phone = Trim(stripslashes($_POST['Phone']));
$Email = Trim(stripslashes($_POST['Email'])); 
$Message = Trim(stripslashes($_POST['Message'])); 

// validation

if (isset($_POST['submit'])){
    if (empty($Subject) OR empty($Name) OR empty($Email) OR empty($Message)){
        session_start();
        $_SESSION['errorText'] = "<h2 style='color:red'>Please Fill the required field</h2>";
        header('location:index.php');
        exit;
    }

}


// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $Phone;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
    session_start();
    $_SESSION['successText'] = "<h2 style='color:Green'>Message send successfully</h2>";
    header('location:index.php');
}
else{
    session_start();
    $_SESSION['unknownErrorText'] = "<h2 style='color:yellow'>Sorry! Message didn't send</h2>";
    header('location:index.php');
}
?>