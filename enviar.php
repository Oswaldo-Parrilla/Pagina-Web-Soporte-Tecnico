<?php
    // $destinatario = 'oswaparrilla@gmail.com';
    // $name = $_POST['name'];
    // $mail = $_POST['mail'];
    // $message = $_POST['message'];

    // $header = "Enviado desde la pagina de prubea soporte tecnico";
    // $menssageComp = $message . "\nAtentamente: " . $name;

    // mail($destinatario, $menssageComp, $header);
    // echo "<script> alert('Correo enviado exitosamente') </script>";
    // echo "<script> setTimeout(\"location.href='index.html'\", 1000) </script>";

    if(isset($_POST['send'])) {
        if(!empty($_POST['name']) && !empty($_POST['mail']) && !empty($_POST['message'])) {
            $name = $_POST['name'];
            $email = $_POST['mail'];
            $message = $_POST['message'];
            $header = "From: noreply@example.com" . "\r\n";
            $header.= "Reply-To: noreply@example.com" . "\r\n";
            $header.= "X-Mailer: PHP/" . phpversion();
            $mail = @mail($email, $message, $header);
            if($mail) {
                echo "<h4>Mail enviado exitosamente</h4>";
            }
        }    
    }
?>