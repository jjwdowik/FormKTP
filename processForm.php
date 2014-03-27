<!-- this form sends emails with responses of form -->



<?php
	$filename = "ktpForm.csv";
	$handle = fopen($filename, 'a');
	//a means open file append, if doesn't exist create it and append it
	$msg = "Thank you for your info";
	$fileInfo = "";
	foreach($_POST as $name => $value){
		print "$name : $value<br/>";
		$msg .="name : $value\n";
		$fileInfo .="$value,";
	}
	$fileInfo.="\n";

	//send email
	$to = "jjwdowik@umich.edu";
	// $headers = "From: ". $_POST["name"] ."<".$_POST["email"]. "<".$_POST["phone"]."<".$_POST["year"]."<".$_POST["major"]."<".$_POST["category"]."<".$_POST["message"]."> \r\n";
	$headers = "From: ". $_POST["name"] ."<".$_POST["email"]. ">\r\n";
	mail($to, 'Registration', $msg,$headers);
	echo "Email Sent";

	//Write to file
	fwrite($handle, $fileInfo);
	//close the file
	fclose($handle);
?>