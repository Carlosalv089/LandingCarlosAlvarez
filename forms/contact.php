

<?php 
if(isset($_POST['submit'])){
    $to = $receiving_email_address; // Este es tu direccion de correo
    $from_name = $_POST['name']; // Esta es el nombre del que envia el correo
    $subject = $_POST['subject']; // Este es el Asunto del correo
    $from_email = $_POST['email']; // Esta es la direccion de correo del que va a enviar
    $message = $from_name . " " . " Envió el siguiente mensaje:" . "\n\n" . $_POST['message'];

    $headers = "De:" . $from_email;
    mail($to,$subject,$message,$headers);
    //echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>