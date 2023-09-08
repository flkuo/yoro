<?php

if(empty($_POST['submit']))
{
	echo "Form is not submitted!";
	exit;
}
if(empty($_POST["fullname"]) ||
	empty($_POST["email"]))
	{
		echo "Please fill the form";
		exit;
	}
	
$name = $_POST["fullname"];
$email = $_POST["email"];
 // Process the data (e.g., save it to a text file).

 $data = "Name: $name\nEmail: $email\n";

// Define the path to the text file
$filePath = "/home/ec2-user/form_data.txt";
mail( 'form.fanlink@gmail.com' , 'New form submission' , 
"New form submission: Name: $name, Email: $email"  );

header('Location: thank_you.html');


?>
