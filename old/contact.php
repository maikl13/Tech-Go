<?php

	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$content = $_POST["userMessage"];

	$toEmail = "maiklalana@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, "New Message From Tech-Go Website", $content, $mailHeaders)) {
        echo json_encode(["type" => "success", "text" => "Your Message Sent Successfully"]);
	}
