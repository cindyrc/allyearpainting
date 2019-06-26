<?php
/*this page will be used to send info from contact page to alejandros email */


//if conditions are met then email will be sent
    if (isset(!_POST['submit'])){

        //variables declared
        $subject = "You have a new job request";

        $name = $_POST['name'];
        $mail_from = $_POST['user_email'];
        $phone_number = $_POST['phone_number'];
        $address = $_POST['address'];
        $description = $_POST['description'];
        
        //Alejandro's info
        $mail_to = "casador_70@hotmail.com";
        $headers = "From: ".$mail_from;
        //message to be sent
        $txt = "You have recieved a new job request from: ".$name.".\n\n 
                e-email: ".$mail_from."\n
                phone number: ".$phone_number."\n
                address: ".$address."\n
                description: ".$description;

        //function to send email
        mail($mail_to, $subject, $txt, $headers);

        //go back to contact page
        header('Location: ../pages/contact.html?mailsend');

    }

?>