<?php
    $name = $_POST['name'];
    $visitor = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $county = $_POST['county'];
    $service = $_POST['service'];
    
    $email_from = 'Jakes Tree Website';
    $email_subject = "New Estimate Request";
    $email_body = "Client Name: $name.\n".
                    "Client Email: $visitor.\n".
                      "Client Phone: $phone.\n".
                        "Client Address: $address.\n".
                          "Client County: $county.\n".
                            "Client Service: $service.\n";

    $mailTo = "estimates@jakestreeservices.com";
    $headers = "From: $email_from \r\n".
    "CC: matt@prodigypestsolutions.com";

    mail($mailTo, $email_subject, $email_body, $headers);
    header("Location: index.html");
?>